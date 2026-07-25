<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<div class="wrapper" style="max-width: 650px;">

    <div class="form-card">

        <span class="badge-tag">
            <i class="fa-solid fa-book-medical"></i> Tambah Data
        </span>

        <h2 style="margin:8px 0;">
            Tambah <span class="gradient-text">Data Buku</span>
        </h2>

        <p style="color:#64748b; margin-bottom:25px;">
            Silakan isi seluruh data buku yang akan ditambahkan ke dalam database.
        </p>

        <form action="<?= base_url('buku/simpan'); ?>" method="post">

            <?= csrf_field(); ?>

            <!-- Judul -->
            <label style="font-weight:600;">Judul Buku</label>
            <input
                type="text"
                name="judul"
                class="form-input-dark"
                placeholder="Masukkan Judul Buku"
                required>

            <!-- Penulis -->
            <label style="font-weight:600;">Penulis</label>
            <input
                type="text"
                name="penulis"
                class="form-input-dark"
                placeholder="Masukkan Nama Penulis"
                required>

            <!-- Penerbit -->
            <label style="font-weight:600;">Penerbit</label>
            <input
                type="text"
                name="penerbit"
                class="form-input-dark"
                placeholder="Masukkan Nama Penerbit"
                required>

            <!-- Tahun -->
            <label style="font-weight:600;">Tahun Terbit</label>
            <input
                type="number"
                name="tahun_terbit"
                class="form-input-dark"
                placeholder="Contoh: 2026"
                min="1900"
                max="<?= date('Y'); ?>"
                required>

            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:25px;">

                <a href="<?= base_url('buku'); ?>" class="btn-secondary-glass">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali
                </a>

                <button type="submit" class="btn-neon">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Data
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>