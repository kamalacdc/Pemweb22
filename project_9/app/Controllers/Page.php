<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('page/about', $data);
    }

    public function contact()
    {
        $data = ['title' => 'Contact'];
        return view('page/contact', $data);
    }

    public function faqs()
    {
        $data = ['title' => 'FAQs'];
        return view('page/faqs', $data);
    }

    public function tos()
    {
        $data = ['title' => 'Terms of Service'];
        return view('page/tos', $data);
    }

    public function biodata()
    {
        $data = [
            'title' => 'Biodata',
            'nama' => 'Ahmad Dian Kamal',
            'umur' => 20,
            'alamat' => 'Dusun Tambar Utara, Desa Tambar, Kec.Jogoroto, Kab.jombang',
            'email' => 'diankamal999@gmail.com',
            'status' => 'Mahasiswa'
        ];

        return view('page/biodata', $data);
    }
}