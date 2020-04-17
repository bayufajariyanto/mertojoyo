<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin');
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
        $this->load->view('templates/header', $data);
        $this->load->view('member/sidebar');
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

    public function member_password($id)
    {
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Ganti password kaming sun!</div>');
        redirect('member/index');
    }

    public function transaksi()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['transaksi'] = $this->transaksi->getTransaksi();

        $this->load->view('templates/header', $data);
        $this->load->view('member/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('member/transaksi');
        $this->load->view('templates/footer');
    }

    public function kas()
    {
        $data['title'] = 'Kas';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('member/sidebar');
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
        $this->load->view('member/sidebar');
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
        $this->load->view('member/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jadwal_sholat');
        $this->load->view('templates/footer');
    }
}
