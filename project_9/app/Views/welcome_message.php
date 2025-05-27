<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container text-center py-5">
    <h1 class="display-4 fw-bold text-dark">Selamat Datang di Aplikasi Buku CI 4</h1>
    <p class="lead text-muted">
        Kelola koleksi buku Anda dengan mudah menggunakan teknologi <strong>CodeIgniter 4</strong> yang cepat dan efisien.
    </p>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold text-dark">📚 Koleksi Buku</h5>
                <p class="text-muted">Lihat daftar lengkap buku yang tersedia dalam sistem.</p>
                <a href="/books" class="btn btn-primary">Lihat Koleksi</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold text-dark">➕ Tambah Buku</h5>
                <p class="text-muted">Tambahkan buku baru ke dalam katalog dengan detail lengkap.</p>
                <a href="/add" class="btn btn-primary">Tambah Buku</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
