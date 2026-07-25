<?php

namespace App\Controllers;

use App\Models\Buku_model;
use CodeIgniter\Database\Config;

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
        $keyword = $this->request->getGet('keyword');
        $filter  = $this->request->getGet('filter') ?? 'judul';
        $sort    = $this->request->getGet('sort') ?? 'asc';

        $allowedFilters = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
        $allowedSorts   = ['asc', 'desc'];

        if (!in_array($filter, $allowedFilters)) {
            $filter = 'judul';
        }

        if (!in_array($sort, $allowedSorts)) {
            $sort = 'asc';
        }

        if ($keyword) {
            $this->bukuModel
                ->like('judul', $keyword)
                ->orLike('penulis', $keyword)
                ->orLike('penerbit', $keyword)
                ->orLike('tahun_terbit', $keyword);
        }

        $data['buku']    = $this->bukuModel->orderBy($filter, $sort)->findAll();
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

    // Simpan data buku
    public function simpan()
    {
        $this->bukuModel->save([
            'judul'         => $this->request->getPost('judul'),
            'penulis'       => $this->request->getPost('penulis'),
            'penerbit'      => $this->request->getPost('penerbit'),
            'tahun_terbit'  => $this->request->getPost('tahun_terbit'),
        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil ditambahkan!');

        return redirect()->to('/buku');
    }

    // Form edit
    public function edit(...$params)
    {
        $id = $params[0] ?? $this->request->getUri()->getSegment(3);

        $db = Config::connect();

        $buku = $db->table('buku')
            ->where('id', (int) $id)
            ->get()
            ->getRowArray();

        if (!$buku) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data buku tidak ditemukan.');
        }

        return view('buku/edit', [
            'buku' => $buku
        ]);
    }

    // Update data
    public function update()
    {
        $id = $this->request->getPost('id');

        $db = Config::connect();

        $db->table('buku')
            ->where('id', (int) $id)
            ->update([
                'judul'         => $this->request->getPost('judul'),
                'penulis'       => $this->request->getPost('penulis'),
                'penerbit'      => $this->request->getPost('penerbit'),
                'tahun_terbit'  => $this->request->getPost('tahun_terbit'),
            ]);

        session()->setFlashdata('pesan', 'Data buku berhasil diperbarui!');

        return redirect()->to('/buku');
    }

    // Hapus data
    public function hapus(...$params)
    {
        $id = $params[0] ?? $this->request->getUri()->getSegment(3);

        $db = Config::connect();

        $db->table('buku')
            ->where('id', (int) $id)
            ->delete();

        session()->setFlashdata('pesan', 'Data buku berhasil dihapus!');

        return redirect()->to('/buku');
    }
}