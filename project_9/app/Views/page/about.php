<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-5">
            <img src="/img/bukuci4.jpeg" alt="Ilustrasi Aplikasi Buku CI 4"
                class="img-fluid rounded-4 shadow-sm border border-2 border-light">
        </div>
        <div class="col-lg-7">
            <h1 class="display-5 fw-bold text-dark mb-3">Tentang Aplikasi Buku CI 4</h1>
            <p class="lead text-muted">
                <strong>Aplikasi Buku CI 4</strong> adalah platform katalog digital yang dibuat menggunakan <strong>CodeIgniter 4</strong>.
                Aplikasi ini dirancang untuk membantu pengguna mengelola koleksi buku mereka dengan lebih mudah dan efisien.
            </p>
            <p>
                Dengan teknologi modern dari <strong>CodeIgniter 4</strong>, pengguna dapat menikmati fitur manajemen koleksi yang cepat,
                ringan, dan fleksibel. Cocok untuk semua orang, mulai dari <em>pelajar, mahasiswa, hingga profesional</em> yang
                ingin menyusun daftar buku mereka dengan sistematis.
            </p>

            <h5 class="fw-bold text-dark mt-4 mb-2">Fitur Unggulan:</h5>
            <ul class="list-unstyled ms-3">
                <li>📖 Kelola koleksi buku secara sistematis</li>
                <li>✏️ Edit dan perbarui informasi buku dengan mudah</li>
                <li>📂 Pengelompokan berdasarkan kategori untuk manajemen lebih rapi</li>
            </ul>
            <p class="mt-3 text-muted">
                Dibangun dengan fleksibilitas dan performa tinggi, aplikasi ini menjadi solusi ideal bagi
                siapa saja yang membutuhkan sistem katalog buku berbasis <strong>CodeIgniter 4</strong>.
            </p>
            <a href="/books" class="btn btn-primary px-4 py-2 mt-3">📚 Lihat Koleksi Buku</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
