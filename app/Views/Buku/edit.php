<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Buku</title>
    <!-- FontAwesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<div class="wrapper" style="max-width: 650px;">
    <div class="form-card">
        <span class="badge-tag">Fitur Edit</span>
        <h2 style="margin: 5px 0 10px 0;">Edit Data Buku</h2>
        <p style="color: #64748b; font-size: 0.9rem; margin-bottom: 25px;">
            Perbarui informasi di bawah ini, lalu klik Simpan Perubahan.

        <form action="/buku/update/<?= $buku['id'] ?? ''; ?>" method="post">
            <?= csrf_field(); ?>

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Judul Buku</label>
            <input type="text" class="form-input-dark" name="judul" value="<?= $buku['judul'] ?? ''; ?>" required>

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Penulis</label>
            <input type="text" class="form-input-dark" name="penulis" value="<?= $buku['penulis'] ?? ''; ?>" required>

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Penerbit</label>
            <input type="text" class="form-input-dark" name="penerbit" value="<?= $buku['penerbit'] ?? ''; ?>" required>

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Tahun Terbit</label>
            <input type="number" class="form-input-dark" name="tahun" value="<?= $buku['tahun_terbit'] ?? $buku['tahun'] ?? ''; ?>" required>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                <a href="/buku" class="btn-secondary-glass">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn-neon">
                    <i class="fa-solid fa-arrows-rotate"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>