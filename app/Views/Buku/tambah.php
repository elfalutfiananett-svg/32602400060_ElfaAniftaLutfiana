<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<div class="wrapper" style="max-width: 650px;">
    <div class="form-card">
        <span class="badge-tag"><i class="fa-solid fa-plus-circle"></i> Tambah Data</span>
        <h2 style="margin: 5px 0 10px 0; font-weight: 700;">Tambah <span class="gradient-text">Data Buku</span></h2>
        <p style="color: #64748b; font-size: 0.9rem; margin-bottom: 25px;">
            Lengkapi formulir di bawah ini untuk menambah koleksi buku baru.
        </p>

        <form action="/buku/simpan" method="post">
            <?= csrf_field(); ?>

            <label style="font-size: 0.85rem; font-weight: 600; color: #475569;">Judul Buku</label>
            <input type="text" class="form-input-dark" name="judul" placeholder="Masukkan Judul Buku" required>

            <label style="font-size: 0.85rem; font-weight: 600; color: #475569;">Penulis</label>
            <input type="text" class="form-input-dark" name="penulis" placeholder="Masukkan Nama Penulis" required>

            <label style="font-size: 0.85rem; font-weight: 600; color: #475569;">Penerbit</label>
            <input type="text" class="form-input-dark" name="penerbit" placeholder="Masukkan Nama Penerbit" required>

            <label style="font-size: 0.85rem; font-weight: 600; color: #475569;">Tahun Terbit</label>
            <input type="number" class="form-input-dark" name="tahun" placeholder="Contoh: 2026" required>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                <a href="/buku" class="btn-secondary-glass">
                    <i class="fa-solid fa-xmark"></i> Batal
                </a>
                <button type="submit" class="btn-neon">
                    <i class="fa-solid fa-floppy-disk"></i> Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>