<?php

namespace App\Controllers;

use App\Models\Buku_model;

class Buku extends BaseController
{
    protected $buku;

    public function __construct()
    {
        $this->buku = new Buku_model();
    }


    // Menampilkan data
    public function index()
    {
        $data['buku'] = $this->buku->findAll();

        return view('buku/index', $data);
    }


    // Form tambah
    public function tambah()
    {
        return view('buku/tambah');
    }


    // Simpan data
    public function simpan()
    {
        $this->buku->insert([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun')
        ]);

        return redirect()->to('/buku');
    }


    // Form edit
    public function edit($id)
    {
        $data['buku'] = $this->buku->find($id);

        return view('buku/edit', $data);
    }


    // Update data
    public function update($id)
    {
        $this->buku->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun')
        ]);

        return redirect()->to('/buku');
    }


    // Hapus data
    public function hapus($id)
    {
        $this->buku->delete($id);

        return redirect()->to('/buku');
    }
}