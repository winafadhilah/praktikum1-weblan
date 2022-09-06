<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        
        $data_mahasiswa = [
            ['npm' => '2017051056',
            'nama'    => 'wina fadhilah',
            'alamat'    => 'bandar lampung',
            'created_at'    => Time::now(),
        
        ],
            ['npm' => '2017051051',
                'nama'    => 'nasywa nathania',
                'alamat'    => ' lampung',
                'created_at'    => Time::now(),
            
            ],
            
            ['npm' => '2017051058',
            'nama'    => 'nur mita utami',
            'alamat'    => 'lambar',
            'created_at'    => Time::now(),
        
        ],

            ['npm' => '2017051057',
            'nama'    => 'nada azhar',
            'alamat'    => 'krui',
            'created_at'    => Time::now(),
        
        ],

        ];

        // Using Query Builder
        foreach($data_mahasiswa as $data)
        $this->db->table('mahasiswa')->insert($data);
    }
}
