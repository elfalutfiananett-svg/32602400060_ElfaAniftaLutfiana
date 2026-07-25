<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku - Light Aesthetic</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<div class="wrapper">

    <!-- Hero Section -->
    <div class="hero-grid">

        <div class="hero-card" style="display:flex;flex-direction:column;justify-content:center;">

            <div>

                <span class="badge-tag">
                    CI4 Project • Database Buku
                </span>

                <h1 style="font-size:2.2rem;margin:10px 0;font-weight:700;">
                    Sistem CRUD
                    <span class="gradient-text">Data Buku</span>
                </h1>

                <p style="color:#64748b;font-size:.95rem;line-height:1.6;margin-bottom:20px;">
                    Sistem informasi manajemen perpustakaan berbasis CodeIgniter 4
                    yang dirancang untuk mengoptimalkan pengelolaan data buku secara
                    efisien dan terstruktur.
                </p>

                <a href="<?= base_url('buku/tambah'); ?>" class="btn-neon">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data Buku
                </a>

            </div>

        </div>

        <!-- Anggota Kelompok -->
        <div class="team-card">

            <h3 style="margin-top:0;margin-bottom:16px;color:#1e293b;">
                <i class="fa-solid fa-users"></i>
                Anggota Kelompok
            </h3>

            <div style="display:flex;flex-direction:column;gap:8px;">

                <div class="member-item">
                    <div class="member-number">1</div>
                    <div>
                        <strong>Devi Himawan Puspita</strong><br>
                        <small>NIM : 32602400013</small>
                    </div>
                </div>

                <div class="member-item">
                    <div class="member-number">2</div>
                    <div>
                        <strong>Cavadira Adhyasta</strong><br>
                        <small>NIM : 32602400029</small>
                    </div>
                </div>

                <div class="member-item">
                    <div class="member-number">3</div>
                    <div>
                        <strong>Meilia Tribuana Maharani</strong><br>
                        <small>NIM : 32602400041</small>
                    </div>
                </div>

                <div class="member-item">
                    <div class="member-number">4</div>
                    <div>
                        <strong>Ifan Maulana Ahmad</strong><br>
                        <small>NIM : 32602400056</small>
                    </div>
                </div>

                <div class="member-item">
                    <div class="member-number">5</div>
                    <div>
                        <strong>Elfa Anifta Lutfiana</strong><br>
                        <small>NIM : 32602400060</small>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Tabel -->
    <div class="glass-card">

        <table class="table-dark-custom">

            <thead>

                <tr>
                    <th style="text-align:center;">NO</th>
                    <th style="text-align:center;">JUDUL BUKU</th>
                    <th style="text-align:center;">PENULIS</th>
                    <th style="text-align:center;">PENERBIT</th>
                    <th style="text-align:center;">TAHUN</th>
                    <th style="text-align:center;">AKSI</th>
                </tr>

            </thead>

            <tbody>

            <?php if (!empty($buku)) : ?>

                <?php $no = 1; ?>

                <?php foreach ($buku as $b) : ?>

                <tr>

                    <td style="text-align:center;">
                        <?= $no++; ?>
                    </td>

                    <td style="text-align:center;">
                        <strong><?= esc($b['judul']); ?></strong>
                    </td>

                    <td style="text-align:center;">
                        <?= esc($b['penulis']); ?>
                    </td>

                    <td style="text-align:center;">

                        <span style="
                            background:#e0f2fe;
                            color:#0369a1;
                            padding:6px 12px;
                            border-radius:8px;
                            display:inline-block;
                        ">
                            <?= esc($b['penerbit']); ?>
                        </span>

                    </td>

                    <td style="text-align:center;">
                        <?= esc($b['tahun_terbit']); ?>
                    </td>

                    <td style="text-align:center;">

                        <div class="action-wrapper">

                            <a href="<?= base_url('buku/edit/'.$b['id']); ?>"
                               class="btn-warning-soft">
                                Edit
                            </a>

                            <a href="<?= base_url('buku/hapus/'.$b['id']); ?>"
                               onclick="return confirm('Yakin ingin menghapus data buku ini?')"
                               class="btn-danger-soft">
                                Hapus
                            </a>

                        </div>

                    </td>

                </tr>

                <?php endforeach; ?>

            <?php else : ?>

                <tr>

                    <td colspan="6" style="padding:30px;text-align:center;">

                        <i class="fa-solid fa-book-open"
                           style="font-size:40px;color:#94a3b8;"></i>

                        <br><br>

                        <strong>Belum ada data buku.</strong>

                        <br>

                        Silakan klik tombol
                        <b>Tambah Data Buku</b>
                        untuk menambahkan data pertama.

                    </td>

                </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>