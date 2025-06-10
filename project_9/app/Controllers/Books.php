<?php

namespace App\Controllers;

use App\Models\BookModel;

class Books extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BookModel();
    }
    public function index()
    {

        $buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->getBuku()
        ];
        return view('books/index', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('books/detail', $data);
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];

        return view('books/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        return redirect()->to('/books');
    }
    public function delete($id)
    {
        $buku = $this->bukuModel->find($id);

        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku dengan ID ' . $id . ' tidak ditemukan');
        }

        if ($buku['sampul'] != 'default.jpg' && file_exists('img/' . $buku['sampul'])) {
            unlink('img/' . $buku['sampul']);
        }

        $this->bukuModel->delete($id);

        return redirect()->to('/books')->with('success', 'Buku berhasil dihapus.');
    }
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Buku',
            'validation' => \config\Services::validation(),
        ];
        return view('books/create', $data);
    }

   public function save()
{
    // Definisi aturan validasi
    $rules = [
        'judul' => 'required|is_unique[books.judul]',
        'penulis' => 'required',
        'penerbit' => 'required',
        'sampul' => 'uploaded[sampul]|max_size[sampul,2048]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]'

    ];

    // Validasi input
    if (!$this->validate($rules)) {
        // Tangani kesalahan validasi khusus untuk judul yang sudah ada
        if ($this->validator->hasError('judul')) {
            session()->setFlashdata('error', 'Judul buku "' . $this->request->getVar('judul') . '" sudah ada dalam database!');
            return redirect()->to('/books');
        }

        // Tangani error validasi umum lainnya
        return redirect()->to('/books/create')->withInput()->with('validation', $this->validator);
    }

    // Pembuatan slug berdasarkan judul
    $slug = url_title($this->request->getVar('judul'), '-', true);

    // Mengelola file sampul
    $fileSampul = $this->request->getFile('sampul');
    if ($fileSampul->isValid() && !$fileSampul->hasMoved()) {
        $namaFile = $fileSampul->getRandomName();
        $fileSampul->move('img', $namaFile);
    } else {
        $namaFile = 'default.jpg';
    }

    // Data yang akan disimpan ke database
    $data = [
        'judul' => $this->request->getVar('judul'),
        'slug' => $slug,
        'penulis' => $this->request->getVar('penulis'),
        'penerbit' => $this->request->getVar('penerbit'),
        'sampul' => $namaFile
    ];

    // Debug sebelum menyimpan ke database
    // dd($data);

    try {
        $this->bukuModel->save($data);
        session()->setFlashdata('pesan', 'Data buku berhasil ditambahkan.');
        return redirect()->to('/books');
    } catch (\Exception $e) {
        die($e->getMessage());
    }
}
}