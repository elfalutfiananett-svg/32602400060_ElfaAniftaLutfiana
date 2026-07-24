<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Buku</title>
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
        </p>

        <form action="<?= base_url('buku/update'); ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $buku['id']; ?>">

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Judul Buku</label>
            <input type="text" class="form-input-dark" name="judul" value="<?= esc($buku['judul']); ?>" required>

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Penulis</label>
            <input type="text" class="form-input-dark" name="penulis" value="<?= esc($buku['penulis']); ?>" required>

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Penerbit</label>
            <input type="text" class="form-input-dark" name="penerbit" value="<?= esc($buku['penerbit']); ?>" required>

            <label style="font-size: 0.85rem; color: #475569; font-weight: 500;">Tahun Terbit</label>
            <input type="number" class="form-input-dark" name="tahun" value="<?= esc($buku['tahun_terbit']); ?>" required>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                <a href="<?= base_url('buku'); ?>" class="btn-secondary-glass">
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
