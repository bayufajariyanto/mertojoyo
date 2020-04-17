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
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required|min_length[3]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ],
        [
            'field' => 'kas',
            'label' => 'Kas',
            'rules' => 'trim|required|min_length[3]|number',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'number' => '%s harus menggunakan angka',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ],
        [
            'field' => 'kontrakan',
            'label' => 'kontrakan',
            'rules' => 'trim|required|min_length[3]|number',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'number' => '%s harus menggunakan angka',
                'alpha' => '%s harus menggunakan huruf'
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
        ]
    ],

    'member_edit' => [
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required|min_length[3]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ],
        [
            'field' => 'tkas',
            'label' => 'Kas',
            'rules' => 'trim|required|min_length[3]|number',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'number' => '%s harus menggunakan angka',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ],
        [
            'field' => 'kas',
            'label' => 'Kas',
            'rules' => 'trim|required|min_length[3]|number',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'number' => '%s harus menggunakan angka',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ],
        [
            'field' => 'tkontrakan',
            'label' => 'Kontrakan',
            'rules' => 'trim|required|min_length[3]|number',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'number' => '%s harus menggunakan angka',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ],
        [
            'field' => 'kontrakan',
            'label' => 'Kontrakan',
            'rules' => 'trim|required|min_length[3]|number',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf',
                'number' => '%s harus menggunakan angka',
                'alpha' => '%s harus menggunakan huruf'
            ]
        ]
    ],
    'barang' => [
        [
            'field' => 'nama',
            'label' => 'Nama Barang',
            'rules' => 'trim|required|min_length[3]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf'
            ]
        ],
        [
            'field' => 'stok',
            'label' => 'Stok Barang',
            'rules' => 'trim|required|max_length[4]|integer',
            'errors' => [
                'required' => '%s harus diisi',
                'max_length' => '%s tidak lebih dari 4 digit',
                'integer' => '%s harus angka'
            ]
        ],
        [
            'field' => 'harga',
            'label' => 'Harga Barang',
            'rules' => 'trim|required|min_length[3]|max_length[10]|integer',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 digit',
                'max_length' => '%s tidak lebih dari 10 digit',
                'integer' => '%s harus angka'
            ]
        ]
    ],
    'transaksi' => [
        [
            'field' => 'nama',
            'label' => 'Nama Transaksi',
            'rules' => 'trim|required|min_length[3]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf'
            ]
        ],
        [
            'field' => 'nominal',
            'label' => 'Nominal',
            'rules' => 'trim|required|min_length[3]|integer',
            'errors' => [
                'required' => '%s harus diisi',
                'max_length' => '%s tidak kurang dari 3 digit',
                'integer' => '%s harus angka'
            ]
        ]
    ],
    'barang_edit' => [
        [
            'field' => 'nama',
            'label' => 'Nama Barang',
            'rules' => 'trim|required|min_length[3]',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 huruf'
            ]
        ],
        [
            'field' => 'stok',
            'label' => 'Stok Barang',
            'rules' => 'trim|required|max_length[4]|integer',
            'errors' => [
                'required' => '%s harus diisi',
                'max_length' => '%s tidak lebih dari 4 digit',
                'integer' => '%s harus angka'
            ]
        ],
        [
            'field' => 'harga',
            'label' => 'Harga Barang',
            'rules' => 'trim|required|min_length[3]|max_length[10]|integer',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 digit',
                'max_length' => '%s tidak lebih dari 10 digit',
                'integer' => '%s harus angka'
            ]
        ]
    ],
    'pesanan' => [
        [
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|min_length[4]|max_length[25]|alpha_dash',
            'errors' => [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 4 karakter',
                'max_length' => '%s tidak lebih dari 25 karakter',
                'is_unique' => '%s telah dipakai, silakan gunakan yang lain',
                'alpha_dash' => '%s hanya menggunakan huruf, underscore, atau angka'
            ]
        ]
    ]
];
