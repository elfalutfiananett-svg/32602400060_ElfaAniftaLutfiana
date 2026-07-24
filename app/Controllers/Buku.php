<?php

namespace App\Controllers;

use App\Models\Buku_model;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new Buku_model();
    }

    // Menampilkan semua data buku
    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    // Form tambah buku
    public function tambah()
    {
        return view('buku/tambah');
    }

    // Proses simpan buku baru
    public function simpan()
    {
        $this->bukuModel->insert([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun'),
        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil ditambahkan!');
        return redirect()->to('/buku');
    }

    // Form edit buku
    public function edit($id = null)
    {
        $buku = $this->bukuModel->find($id);

        if (!$buku) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data buku tidak ditemukan.');
        }

        $data['buku'] = $buku;
        return view('buku/edit', $data);
    }

    // Proses update buku
    public function update()
    {
        $id = $this->request->getPost('id');

        $this->bukuModel->set([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun'),
        ])->where('id', $id)->update();

        session()->setFlashdata('pesan', 'Data buku berhasil diperbarui!');
        return redirect()->to('/buku');
    }

    // Hapus buku
    public function hapus($id = null)
    {
        $this->bukuModel->where('id', $id)->delete();

        session()->setFlashdata('pesan', 'Data buku berhasil dihapus!');
        return redirect()->to('/buku');
    }
}
