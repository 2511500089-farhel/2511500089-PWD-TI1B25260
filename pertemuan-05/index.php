<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>ini contoh paragraf HTML.</p>
        </section>
        <section id="about">
            <h2>Tentang Saya</h2>
            <?php
            // Variabel PHP untuk data diri
            $nama = "FARHEL ARIFQI (NIM: 2511500089)";
            $tempatTanggalLahir = "TOBOALI, 07 05 2007";
            $status = "Mahasiswa Baru";
            $hobi = "BERMAIN SEPAK BOLA";
            $ayah = "NINO PRIMADONA";
            $ibu = "ARIANTI";
            $saudara = "(adik FAKHIRA AQILA)";
            $motto = "JANGAN MENYERAH,MERSKI JALAN TERJAL";
            $pasangan = "sedang diusahakan";
            ?>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo $tempatTanggalLahir; ?></p>
            <p><strong>Status:</strong> <?php echo $status; ?></p>
            <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>
            <p><strong>Ayah:</strong> <?php echo $ayah; ?></p>
            <p><strong>Ibu:</strong> <?php echo $ibu; ?></p>
            <p><strong>Saudara:</strong> <?php echo $saudara; ?></p>
            <p><strong>Motto Hidup:</strong> <?php echo $motto; ?></p>
            <p><strong>Pasangan:</strong> <?php echo $pasangan; ?></p>
        </section>
        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="GET">
                <label for="txtNama">Nama:</label>
                <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">

                <label for="txtEmail">Email:</label>
                <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">

                <label for="txtPesan">Pesan:</label>
                <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>

                <button type="submit">Kirim</button>
                <button type="button" class="cancel-btn">Batal</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 FARHEL ARIFQI [2511500089]</p>
    </footer>
</body>
</html>
