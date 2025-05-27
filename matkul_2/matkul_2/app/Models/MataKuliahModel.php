<?php

namespace App\Models;

class MataKuliahModel
{
    private $data = [
        [
            'kode' => 'MKD123',
            'nama' => 'Matematika Diskrit',
            'sks' => 4,
            'dosen' => 'Chandra Sukma A',
            'deskripsi' => 'Matematika Diskrit membahas logika matematika, relasi, dan teori graf.'
        ],
        [
            'kode' => 'PW456',
            'nama' => 'Pemrograman Web',
            'sks' => 4,
            'dosen' => 'M Miftahul Syaikh',
            'deskripsi' => 'Pemrograman Web mempelajari HTML, CSS, PHP, dan framework MVC.'
        ]
    ];

    public function findAll()
    {
        return $this->data;
    }

    public function find($kode)
    {
        foreach ($this->data as $item) {
            if ($item['kode'] === $kode) {
                return $item;
            }
        }
        return null;
    }
}
