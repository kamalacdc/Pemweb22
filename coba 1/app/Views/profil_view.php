<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function sendToWhatsApp() {
            const nama = document.getElementById('nama').value;
            const perusahaan = document.getElementById('perusahaan').value;
            const alasan = document.getElementById('alasan').value;

            if (!nama || !perusahaan || !alasan) {
                alert("Semua kolom harus diisi!");
                return false;
            }

            const message = `Nama: ${encodeURIComponent(nama)}%0APerusahaan: ${encodeURIComponent(perusahaan)}%0AAlasan: ${encodeURIComponent(alasan)}`;
            const whatsappUrl = `https://wa.me/6287782363286?text=${message}`;
            
            window.open(whatsappUrl, '_blank');
            return false; 
        }
    </script>
</head>
<body>
    <section class="contact-form">
        <div class="container">
            <h2>Form Kontak</h2>
            <form onsubmit="return sendToWhatsApp()">
                <fieldset>
                    <legend>Kontak</legend>
                    <p>
                        <label>Nama Pengontak:</label>
                        <input type="text" id="nama" placeholder="Masukkan nama">
                    </p>
                    <p>
                        <label>Perusahaan:</label>
                        <input type="text" id="perusahaan" placeholder="Masukkan nama perusahaan">
                    </p>
                    <p>
                        <label>Alasan Pengontak:</label>
                        <select id="alasan">
                            <option value="">Pilih alasan...</option>
                            <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                            <option value="Kerja Sama">Kerja Sama</option>
                            <option value="Keluhan">Keluhan</option>
                            <option value="Permintaan Informasi">Permintaan Informasi</option>
                        </select>
                    </p>
                    <button type="submit">Kirim ke WhatsApp</button>
                </fieldset>
            </form>
            <a href="index.html" class="btn">Kembali ke Profil</a>
        </div>
    </section>
</body>
</html>
