<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'MusikApp' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <nav>
        <a href="<?= base_url('/') ?>">Beranda</a>
        <a href="<?= base_url('/library') ?>">Library</a>
        <a href="<?= base_url('/playlist') ?>">Playlist</a>
    </nav>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <footer>
        <p>© 2025 MusikApp</p>
    </footer>
</body>
</html>
