<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bangunan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #181818;
            padding: 20px;
            position: fixed;
        }
        .product-card {
            background: #222;
            padding: 15px;
            border-radius: 10px;
            transition: 0.3s;
        }
        .product-card:hover {
            background: #282828;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2 class="text-light">Toko Bangunan</h2>
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link text-light" href="/">🏠 Home</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="/products">💡 Listrik & Lampu</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="/ceramics">🔳 Keramik</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="/contact">📞 Kontak</a></li>
    </ul>
</div>
