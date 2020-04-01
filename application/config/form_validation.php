<?php
$config = [
    'member' => [
        [
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|min_length[4]|max_length[25]|is_unique[user.username]|alpha_dash',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 4 karakter',
                'max_length' => '%s tidak lebih dari 25 karakter',
                'is_unique' => '%s telah dipakai, silakan gunakan yang lain',
                'alpha_dash' => '%s hanya menggunakan huruf, underscore, atau angka'
            ]
        ],
        [
            'field' => 'telp',
            'label' => 'Nomor Telepon',
            'rules' => 'trim|required|min_length[3]|max_length[12]|integer|is_unique[user.telp]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 angka',
                'max_length' => '%s tidak lebih dari 12 angka',
                'integer'=> '%s harus angka',
                'is_unique' => '%s sudah ada silakan gunakan yang lain'
            ]

        ],
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required|min[3]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ],
        [
            'field' => 'nokitas',
            'label' => 'Nomor Identitas',
            'rules' => 'trim|required|min[3]|max_length[20]|integer|is_unique[user.username]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 angka',
                'max_length' => '%s tidak lebih dari 20 angka',
                'is_unique' => '%s sudah ada silakan gunakan yang lain'
            ]
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required|min_length[10]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak lebih dari 10 karakter',
            ]
        ],
        [
            'field' => 'password1',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[4]|matches[password2]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 4 karakter',
                'matches' => '%s tidak cocok!'
            ]
        ],
        [
            'field' => 'password2',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[4]|matches[password1]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 4 karakter',
                'matches' => '%s tidak cocok!'
            ]
        ],
    ]
];