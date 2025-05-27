<?= view('layout/header'); ?>

<div class="container mt-5" style="margin-left: 270px;">
    <h1>Detail Produk</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name']; ?></h5>
            <p class="card-text"><strong>Kategori:</strong> <?= $product['category']; ?></p>
            <p class="card-text"><strong>Harga:</strong> Rp<?= number_format($product['price'], 0, ',', '.'); ?></p>
            <p class="card-text"><strong>Stok:</strong> <?= $product['stock']; ?> tersedia</p>
            <a href="/products" class="btn btn-primary">Kembali ke Produk</a>
        </div>
    </div>
</div>

<?= view('layout/footer'); ?>
