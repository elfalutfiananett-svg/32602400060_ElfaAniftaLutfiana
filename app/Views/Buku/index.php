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

                <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">
                    Sistem informasi manajemen perpustakaan berbasis CodeIgniter 4 yang dirancang untuk mengoptimalkan pengelolaan data buku secara efisien dan terstruktur.
                </p>

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
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #06b6d4, #3b82f6); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">1</div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Devi Himawan Puspita</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400013</div>
                    </div>
                </div>
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #8b5cf6, #ec4899); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">2</div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Cavadira Adhyasta</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400029</div>
                    </div>
                </div>
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #10b981, #06b6d4); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">3</div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Meilia Tribuana Maharani</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400041</div>
                    </div>
                </div>
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #f59e0b, #ef4444); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">4</div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Ifan Maulana Ahmad</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400056</div>
                    </div>
                </div>
                <div style="background: rgba(255, 255, 255, 0.7); border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 12px; padding: 8px 12px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 30px; height: 30px; background: linear-gradient(135deg, #6366f1, #a855f7); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; flex-shrink: 0;">5</div>
                    <div>
                        <div style="font-weight: 600; color: #0f172a; font-size: 0.85rem;">Elfa Anifta Lutfiana</div>
                        <div style="font-size: 0.75rem; color: #64748b;">NIM: 32602400060</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search & Filter Section -->
    <div class="glass-card" style="margin-bottom: 24px;">
        <form action="<?= base_url('buku'); ?>" method="get" class="search-filter-form">
            <!-- Search Bar -->
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" name="keyword" class="search-input" placeholder="Cari judul, penulis, atau penerbit..." value="<?= esc($keyword ?? ''); ?>">
            </div>

            <!-- Filter Dropdown -->
            <div class="filter-group">
                <label class="filter-label">
                    <i class="fa-solid fa-filter"></i> Urutkan
                </label>
                <select name="filter" class="filter-select">
                    <option value="judul" <?= ($filter ?? 'judul') === 'judul' ? 'selected' : ''; ?>>Judul</option>
                    <option value="penulis" <?= ($filter ?? '') === 'penulis' ? 'selected' : ''; ?>>Penulis</option>
                    <option value="penerbit" <?= ($filter ?? '') === 'penerbit' ? 'selected' : ''; ?>>Penerbit</option>
                    <option value="tahun_terbit" <?= ($filter ?? '') === 'tahun_terbit' ? 'selected' : ''; ?>>Tahun Terbit</option>
                </select>
            </div>

            <!-- Sort Direction -->
            <div class="filter-group">
                <label class="filter-label">
                    <i class="fa-solid fa-arrow-down-short-wide"></i> Arah
                </label>
                <select name="sort" class="filter-select">
                    <option value="asc" <?= ($sort ?? 'asc') === 'asc' ? 'selected' : ''; ?>>A - Z / Terlama</option>
                    <option value="desc" <?= ($sort ?? '') === 'desc' ? 'selected' : ''; ?>>Z - A / Terbaru</option>
                </select>
            </div>

            <!-- Buttons -->
            <button type="submit" class="btn-filter">
                <i class="fa-solid fa-magnifying-glass"></i> Cari
            </button>

            <?php if (!empty($keyword)): ?>
                <a href="<?= base_url('buku'); ?>" class="btn-reset">
                    <i class="fa-solid fa-xmark"></i> Reset
                </a>
            <?php endif; ?>
        </form>
    </div>

    <!-- Hasil pencarian info -->
    <?php if (!empty($keyword)): ?>
        <div style="margin-bottom: 16px; padding: 12px 20px; background: rgba(99, 102, 241, 0.08); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; display: flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-info-circle" style="color: #6366f1;"></i>
            <span style="color: #3730a3; font-size: 0.9rem; font-weight: 500;">
                Menampilkan hasil pencarian untuk "<strong><?= esc($keyword); ?></strong>" — <?= count($buku); ?> data ditemukan
            </span>
        </div>
    <?php endif; ?>

    <!-- Tabel Data Buku -->
    <div class="glass-card">
        <?php if (session()->getFlashdata('pesan')): ?>
            <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 12px; padding: 14px 20px; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fa-solid fa-circle-check" style="color: #10b981; font-size: 1.1rem;"></i>
                <span style="color: #065f46; font-weight: 500; font-size: 0.9rem;"><?= session()->getFlashdata('pesan'); ?></span>
            </div>
        <?php endif; ?>

        <?php if (empty($buku)): ?>
            <div style="text-align: center; padding: 40px 20px;">
                <i class="fa-solid fa-book-open" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 16px;"></i>
                <p style="color: #94a3b8; font-size: 1rem; font-weight: 500;">Tidak ada data buku ditemukan.</p>
                <?php if (!empty($keyword)): ?>
                    <p style="color: #94a3b8; font-size: 0.85rem;">Coba ubah kata kunci pencarian Anda.</p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <!-- Quick Filter di atas tabel -->
            <div class="table-toolbar">
                <div class="table-filter-input-wrap">
                    <i class="fa-solid fa-filter table-filter-icon"></i>
                    <input type="text" id="tableFilter" class="table-filter-input" placeholder="Ketik untuk filter tabel secara langsung...">
                </div>
                <div class="table-info">
                    <span id="tableCount"><?= count($buku); ?></span> data ditampilkan
                </div>
            </div>

            <table class="table-dark-custom" id="bukuTable">
                <thead>
                    <tr>
                        <th style="width: 6%; text-align: center;">NO</th>
                        <th style="width: 30%; text-align: center;" class="sortable" data-col="1">
                            JUDUL BUKU <i class="fa-solid fa-sort sort-icon"></i>
                        </th>
                        <th style="width: 22%; text-align: center;" class="sortable" data-col="2">
                            PENULIS <i class="fa-solid fa-sort sort-icon"></i>
                        </th>
                        <th style="width: 18%; text-align: center;" class="sortable" data-col="3">
                            PENERBIT <i class="fa-solid fa-sort sort-icon"></i>
                        </th>
                        <th style="width: 10%; text-align: center;" class="sortable" data-col="4">
                            TAHUN <i class="fa-solid fa-sort sort-icon"></i>
                        </th>
                        <th style="width: 14%; text-align: center;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($buku as $b): ?>
                        <tr>
                            <td style="text-align: center; color: #64748b;"><?= $no++; ?></td>
                            <td style="text-align: center;"><strong style="color: #0f172a;"><?= esc($b['judul']); ?></strong></td>
                            <td style="text-align: center; color: #475569;"><?= esc($b['penulis']); ?></td>
                            <td style="text-align: center;">
                                <span style="background: rgba(224,242,254,0.8); color: #0369a1; padding: 6px 14px; border-radius: 6px; font-size: 0.85rem; font-weight: 500; display: inline-block;">
                                    <?= esc($b['penerbit']); ?>
                                </span>
                            </td>
                            <td style="text-align: center; color: #64748b;"><?= esc($b['tahun_terbit'] ?? '-'); ?></td>
                            <td style="text-align: center;">
                                <div class="action-wrapper">
                                    <a href="/buku/edit/<?= $b['id']; ?>" class="btn-warning-soft">Edit</a>
                                    <a href="/buku/hapus/<?= $b['id']; ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn-danger-soft">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<!-- JavaScript: Filter & Sort langsung di tabel -->
<script>
// Instant table filter (tanpa reload)
const filterInput = document.getElementById('tableFilter');
const table = document.getElementById('bukuTable');
const countEl = document.getElementById('tableCount');

if (filterInput && table) {
    filterInput.addEventListener('input', function() {
        const keyword = this.value.toLowerCase();
        const rows = table.querySelectorAll('tbody tr');
        let visible = 0;

        rows.forEach(function(row) {
            const text = row.textContent.toLowerCase();
            if (text.includes(keyword)) {
                row.style.display = '';
                visible++;
            } else {
                row.style.display = 'none';
            }
        });

        if (countEl) countEl.textContent = visible;
    });
}

// Sortable table headers (klik untuk sort)
const sortHeaders = document.querySelectorAll('.sortable');
let currentSort = { col: null, dir: 'asc' };

sortHeaders.forEach(function(header) {
    header.addEventListener('click', function() {
        const colIndex = parseInt(this.dataset.col);
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));

        // Toggle sort direction
        if (currentSort.col === colIndex) {
            currentSort.dir = currentSort.dir === 'asc' ? 'desc' : 'asc';
        } else {
            currentSort.col = colIndex;
            currentSort.dir = 'asc';
        }

        // Update sort icons
        sortHeaders.forEach(function(h) {
            const icon = h.querySelector('.sort-icon');
            icon.className = 'fa-solid fa-sort sort-icon';
        });
        const activeIcon = this.querySelector('.sort-icon');
        activeIcon.className = currentSort.dir === 'asc'
            ? 'fa-solid fa-sort-up sort-icon active'
            : 'fa-solid fa-sort-down sort-icon active';

        // Sort rows
        rows.sort(function(a, b) {
            const aText = a.cells[colIndex].textContent.trim().toLowerCase();
            const bText = b.cells[colIndex].textContent.trim().toLowerCase();

            // Check if numeric
            const aNum = parseFloat(aText);
            const bNum = parseFloat(bText);

            if (!isNaN(aNum) && !isNaN(bNum)) {
                return currentSort.dir === 'asc' ? aNum - bNum : bNum - aNum;
            }

            if (currentSort.dir === 'asc') {
                return aText.localeCompare(bText, 'id');
            } else {
                return bText.localeCompare(aText, 'id');
            }
        });

        // Re-number and re-append
        rows.forEach(function(row, index) {
            row.cells[0].textContent = index + 1;
            tbody.appendChild(row);
        });
    });
});
</script>

</body>
</html>
