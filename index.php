<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku - Light Aesthetic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<div class="wrapper">
    <!-- Header / Hero Section -->
    <div class="hero-grid">
        <div class="hero-card" style="display: flex; flex-direction: column; justify-content: center;">
            <div>
                <span class="badge-tag">CI4 Project • Database Buku</span>
                <h1 style="font-size: 2.2rem; margin: 10px 0; font-weight: 700;">Sistem CRUD <span class="gradient-text">Data Buku</span></h1>
                
                <!-- Tag <p> ditutup secara benar di sini -->
                <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">
                    Sistem informasi manajemen perpustakaan berbasis CodeIgniter 4 yang dirancang untuk mengoptimalkan pengelolaan data buku secara efisien dan terstruktur.
                </p>

                <!-- Tombol berada di luar <p> dan diberi inline-block + margin-top -->
                <a href="/buku/tambah" class="btn-neon" style="display: inline-block; margin-top: 10px;">
                    <i class="fa-solid fa-plus"></i> Tambah Data Buku
                </a>
            </div>
        </div>

        <!-- Section Anggota Kelompok -->
        <div class="team-card">
            <h3 style="margin-top: 0; margin-bottom: 16px; color: #1e293b; font-weight: 700; font-size: 1.1rem;">
                <i class="fa-solid fa-users" style="color: #4f46e5; margin-right: 8px;"></i>Anggota Kelompok
            </h3>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <!-- Anggota 1 -->
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #06b6d4, #3b82f6); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">
                        1
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Devi Himawan Puspita</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400013</div>
                    </div>
                </div>

                <!-- Anggota 2 -->
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #8b5cf6, #ec4899); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">
                        2
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Cavadira Adhyasta</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400029</div>
                    </div>
                </div>

                <!-- Anggota 3 -->
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #10b981, #06b6d4); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">
                        3
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Meilia Tribuana Maharani</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400041</div>
                    </div>
                </div>

                <!-- Anggota 4 -->
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #f59e0b, #ef4444); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">
                        4
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Ifan Maulana Ahmad</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400056</div>
                    </div>
                </div>

                <!-- Anggota 5 -->
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #6366f1, #a855f7); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">
                        5
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Elfa Anifta Lutfiana</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400060</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Data Buku -->
    <div class="glass-card">
        <table class="table-dark-custom">
            <thead>
                <tr>
                    <th style="width: 8%; text-align: center;">NO</th>
                    <th style="width: 32%; text-align: center;">JUDUL BUKU</th>
                    <th style="width: 25%; text-align: center;">PENULIS</th>
                    <th style="width: 20%; text-align: center;">PENERBIT</th>
                    <th style="width: 15%; text-align: center;">TAHUN</th>
                    <th style="width: 10%; text-align: center;">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($buku as $b): ?>
                    <tr>
                        <td style="text-align: center; color: #64748b;"><?= $no++; ?></td>
                        <td style="text-align: center;"><strong style="color: #0f172a;"><?= $b['judul']; ?></strong></td>
                        <td style="text-align: center; color: #475569;"><?= $b['penulis']; ?></td>
                        <td style="text-align: center;">
                            <span style="background: rgba(224,242,254,0.8); color: #0369a1; padding: 6px 14px; border-radius: 6px; font-size: 0.85rem; font-weight: 500; display: inline-block;">
                                <?= $b['penerbit']; ?>
                            </span>
                        </td>
                        <td style="text-align: center; color: #64748b;"><?= $b['tahun_terbit'] ?? $b['tahun'] ?? '-'; ?></td>
                        <td style="text-align: center;">
                            <div class="action-wrapper">
                                <a href="/buku/edit/<?= $b['id']; ?>" class="btn-warning-soft">Edit</a>
                                <a href="/buku/hapus/<?= $b['id']; ?>" onclick="return confirm('Yakin hapus?')" class="btn-danger-soft">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>