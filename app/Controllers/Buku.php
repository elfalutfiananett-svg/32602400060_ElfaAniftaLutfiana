<?php

namespace App\Controllers;

use App\Models\Buku_model;
use CodeIgniter\Database\Config;

class Buku extends BaseController
{
    // Menampilkan semua data buku dengan fitur pencarian & filter
    public function index()
    {
        $bukuModel = new Buku_model();

        $keyword = $this->request->getGet('keyword');
        $filter  = $this->request->getGet('filter') ?? 'judul';
        $sort    = $this->request->getGet('sort') ?? 'asc';

        // Validasi filter dan sort
        $allowedFilters = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
        $allowedSorts   = ['asc', 'desc'];

        if (!in_array($filter, $allowedFilters)) {
            $filter = 'judul';
        }
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'asc';
        }

        // Query pencarian
        if ($keyword) {
            $bukuModel
                ->like('judul', $keyword)
                ->orLike('penulis', $keyword)
                ->orLike('penerbit', $keyword)
                ->orLike('tahun_terbit', $keyword);
        }

        // Urutkan
        $data['buku']    = $bukuModel->orderBy($filter, $sort)->findAll();
        $data['keyword'] = $keyword;
        $data['filter']  = $filter;
        $data['sort']    = $sort;

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
        $bukuModel = new Buku_model();

        $bukuModel->insert([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun'),
        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil ditambahkan!');
        return redirect()->to('/buku');
    }

    // Form edit buku - ambil ID dari URI segment
    public function edit(...$params)
    {
        // Ambil ID dari parameter atau dari URI segment ke-3
        $id = $params[0] ?? $this->request->getUri()->getSegment(3);

        // Query langsung dengan DB builder untuk menghindari masalah CI4 model
        $db = Config::connect();
        $buku = $db->table('buku')->where('id', (int)$id)->get()->getRowArray();

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

        // Query langsung dengan DB builder
        $db = Config::connect();
        $db->table('buku')->where('id', (int)$id)->update([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun'),
        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil diperbarui!');
        return redirect()->to('/buku');
    }

    // Hapus buku
    public function hapus(...$params)
    {
        $id = $params[0] ?? $this->request->getUri()->getSegment(3);

        $db = Config::connect();
        $db->table('buku')->where('id', (int)$id)->delete();

        session()->setFlashdata('pesan', 'Data buku berhasil dihapus!');
        return redirect()->to('/buku');
    }
}
