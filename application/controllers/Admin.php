<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == 2) {
            redirect('member');
        } else if ($this->session->userdata('role_id') == null) {
            redirect('auth');
        }
        $this->load->model('Transaksi_model', 'transaksi');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();
        $data['transaksi'] = $this->db->get('transaksi')->result_array();
        $data['masuk'] = $this->transaksi->getTransaksiMasuk();
        $data['keluar'] = $this->transaksi->getTransaksiKeluar();
        // $data['keluar'] = $this->db->get_where('transaksi', ['arah' => 'Spending'])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('member/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/profile', $data);
        $this->load->view('templates/footer');
    }

    public function member()
    {
        $data['title'] = 'Member';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();
        $username = strtolower($this->input->post('username'));
        $password = $this->input->post('password1');
        $nama = ucwords($this->input->post('nama'));
        $kontrakan = $this->input->post('kontrakan');
        $kas = $this->input->post('kas');

        if ($this->form_validation->run('member') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/member');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username' => $username,
                'nama' => $nama,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'kas' => 0,
                'full_kas' => $kas,
                'kontrakan' => 0,
                'full_kontrakan' => $kontrakan,
                'tanggal_buat' => time(),
                'role_id' => 2,
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member 
            ' . $nama . ' berhasil ditambahkan!</div>');
            redirect('admin/member');
        }
    }


    public function member_detail($id)
    {
        $data['title'] = 'Detail Member';

        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/member_detail');
        $this->load->view('templates/footer');
    }

    public function member_edit($id)
    {
        $data['title'] = 'Edit Member';

        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $username = strtolower($this->input->post('username'));
        $nama = ucwords($this->input->post('nama'));
        $kas = ucwords($this->input->post('kas'));
        $tkas = ucwords($this->input->post('tkas'));
        $kontrakan = ucwords($this->input->post('kontrakan'));
        $tkontrakan = ucwords($this->input->post('tkontrakan'));

        if ($username != $data['user']['username']) {
            $unikuser = '|is_unique[user.username]';
        } else {
            $unikuser = '';
        }

        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required|min_length[4]|max_length[25]|alpha_dash' . $unikuser,
            [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 4 karakter',
                'max_length' => '%s tidak lebih dari 25 karakter',
                'is_unique' => '%s telah dipakai, silakan gunakan yang lain',
                'alpha_dash' => '%s hanya menggunakan huruf, underscore, atau angka'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/member_edit');
            $this->load->view('templates/footer');
        } else {

            $data = [
                'username' => $username,
                // 'password' => password_hash($password, PASSWORD_DEFAULT),
                'nama' => $nama,
                'kas' => $tkas,
                'full_kas' => $kas,
                'kontrakan' => $tkontrakan,
                'full_kontrakan' => $kontrakan
            ];
            $this->db->update('user', $data, ['id' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Member ' . $data['user']['username'] . ' berhasil diubah!</div>');
            redirect('admin/member');
        }
    }

    public function member_password($id)
    {
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Ganti password kaming sun lur!</div>');
        redirect('admin/index');
    }

    public function transaksi()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['transaksi'] = $this->transaksi->getTransaksi();

        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $nominal = $this->input->post('nominal');
        if ($this->form_validation->run('transaksi') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/transaksi');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $nama,
                'arah' => $jenis,
                'nominal' => $nominal,
                'tanggal' => time()
            ];
            $this->db->insert('transaksi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Transaksi ' . $nama . ' berhasil ditambahkan!</div>');
            redirect('admin/transaksi');
        }
    }

    public function kas()
    {
        $data['title'] = 'Kas';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kas');
        $this->load->view('templates/footer');
    }

    public function kontrakan()
    {
        $data['title'] = 'Kontrakan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kontrakan');
        $this->load->view('templates/footer');
    }

    public function jadwal_sholat()
    {
        $data['title'] = 'Jadwal Sholat';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jadwal_sholat');
        $this->load->view('templates/footer');
    }
}
