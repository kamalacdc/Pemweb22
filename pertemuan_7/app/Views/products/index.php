<?= view('layout/header'); ?>

<div class="container mt-5" style="margin-left: 270px;">
    <h1>Produk Unggulan</h1>
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="col-md-4">
            <div class="product-card">
                <img src="/assets/<?= $product['image']; ?>" class="img-fluid rounded">
                <h5 class="mt-2"><?= $product['name']; ?></h5>
                <p><?= $product['category']; ?></p>
                <p>Rp<?= number_format($product['price'], 0, ',', '.'); ?></p>
                <a href="/product/detail/<?= $product['id']; ?>" class="btn btn-success">Detail</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= view('layout/footer'); ?>
