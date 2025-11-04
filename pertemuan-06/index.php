<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .matkul-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .matkul-table td {
            padding: 5px;
            border: none;
        }
        .matkul-table td:first-child {
            text-align: right;
            font-weight: bold;
            width: 200px;
        }
        .matkul-table td:nth-child(2) {
            text-align: center;
            width: 20px;
        }
        .matkul-table td:last-child {
            text-align: left;
        }
        hr {
            margin: 20px 0;
        }
    </style>
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
        <section id="ipk">
            <h2>Nilai Saya</h2>
            <?php
            // Variabel untuk 5 mata kuliah
            $namaMatkul1 = "Algoritma dan Struktur Data";
            $sksMatkul1 = 4;
            $nilaiHadir1 = 90;
            $nilaiTugas1 = 60;
            $nilaiUTS1 = 80;
            $nilaiUAS1 = 70;

            $namaMatkul2 = "Agama";
            $sksMatkul2 = 2;
            $nilaiHadir2 = 70;
            $nilaiTugas2 = 50;
            $nilaiUTS2 = 60;
            $nilaiUAS2 = 80;

            $namaMatkul3 = "Basis Data";
            $sksMatkul3 = 3;
            $nilaiHadir3 = 85;
            $nilaiTugas3 = 75;
            $nilaiUTS3 = 85;
            $nilaiUAS3 = 85;

            $namaMatkul4 = "Kalkulus";
            $sksMatkul4 = 4;
            $nilaiHadir4 = 95;
            $nilaiTugas4 = 80;
            $nilaiUTS4 = 75;
            $nilaiUAS4 = 70;

            $namaMatkul5 = "Pemrograman Web Dasar";
            $sksMatkul5 = 3;
            $nilaiHadir5 = 69;
            $nilaiTugas5 = 80;
            $nilaiUTS5 = 90;
            $nilaiUAS5 = 100;

            
            function hitungNilai($hadir, $tugas, $uts, $uas, $sks) {
                $nilaiAkhir = (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
                if ($hadir < 70) {
                    $grade = "E";
                    $mutu = 0.00;
                } else {
                    if ($nilaiAkhir >= 85) $grade = "A";
                    elseif ($nilaiAkhir >= 80) $grade = "A-";
                    elseif ($nilaiAkhir >= 75) $grade = "B+";
                    elseif ($nilaiAkhir >= 70) $grade = "B";
                    elseif ($nilaiAkhir >= 65) $grade = "B-";
                    elseif ($nilaiAkhir >= 60) $grade = "C+";
                    elseif ($nilaiAkhir >= 55) $grade = "C";
                    elseif ($nilaiAkhir >= 50) $grade = "C-";
                    elseif ($nilaiAkhir >= 45) $grade = "D";
                    else $grade = "E";

                    $mutuMap = [
                        "A" => 4.00,
                        "A-" => 3.70,
                        "B+" => 3.30,
                        "B" => 3.00,
                        "B-" => 2.70,
                        "C+" => 2.30,
                        "C" => 2.00,
                        "C-" => 1.70,
                        "D" => 1.00,
                        "E" => 0.00
                    ];
                    $mutu = $mutuMap[$grade];
                }
                $bobot = $mutu * $sks;
                $status = (in_array($grade, ["A", "A-", "B+", "B", "B-", "C+", "C", "C-"])) ? "Lulus" : "Gagal";
                return [$nilaiAkhir, $grade, $mutu, $bobot, $status];
            }

            // Hitung untuk setiap mata kuliah
            list($nilaiAkhir1, $grade1, $mutu1, $bobot1, $status1) = hitungNilai($nilaiHadir1, $nilaiTugas1, $nilaiUTS1, $nilaiUAS1, $sksMatkul1);
            list($nilaiAkhir2, $grade2, $mutu2, $bobot2, $status2) = hitungNilai($nilaiHadir2, $nilaiTugas2, $nilaiUTS2, $nilaiUAS2, $sksMatkul2);
            list($nilaiAkhir3, $grade3, $mutu3, $bobot3, $status3) = hitungNilai($nilaiHadir3, $nilaiTugas3, $nilaiUTS3, $nilaiUAS3, $sksMatkul3);
            list($nilaiAkhir4, $grade4, $mutu4, $bobot4, $status4) = hitungNilai($nilaiHadir4, $nilaiTugas4, $nilaiUTS4, $nilaiUAS4, $sksMatkul4);
            list($nilaiAkhir5, $grade5, $mutu5, $bobot5, $status5) = hitungNilai($nilaiHadir5, $nilaiTugas5, $nilaiUTS5, $nilaiUAS5, $sksMatkul5);


            $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
            $totalSKS = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
            $IPK = $totalSKS > 0 ? $totalBobot / $totalSKS : 0;

        
            function tampilMatkul($nama, $sks, $hadir, $tugas, $uts, $uas, $akhir, $grade, $mutu, $bobot, $status) {
                echo "<table class='matkul-table'>";
                echo "<tr><td>Nama Matakuliah</td><td>:</td><td>$nama</td></tr>";
                echo "<tr><td>SKS</td><td>:</td><td>$sks</td></tr>";
                echo "<tr><td>Kehadiran</td><td>:</td><td>$hadir</td></tr>";
                echo "<tr><td>Tugas</td><td>:</td><td>$tugas</td></tr>";
                echo "<tr><td>UTS</td><td>:</td><td>$uts</td></tr>";
                echo "<tr><td>UAS</td><td>:</td><td>$uas</td></tr>";
                echo "<tr><td>Nilai Akhir</td><td>:</td><td>" . number_format($akhir, 2) . "</td></tr>";
                echo "<tr><td>Grade</td><td>:</td><td>$grade</td></tr>";
                echo "<tr><td>Angka Mutu</td><td>:</td><td>" . number_format($mutu, 2) . "</td></tr>";
                echo "<tr><td>Bobot</td><td>:</td><td>" . number_format($bobot, 2) . "</td></tr>";
                echo "<tr><td>Status</td><td>:</td><td>$status</td></tr>";
                echo "</table>";
            }
            ?>

            <?php tampilMatkul($namaMatkul1, $sksMatkul1, $nilaiHadir1, $nilaiTugas1, $nilaiUTS1, $nilaiUAS1, $nilaiAkhir1, $grade1, $mutu1, $bobot1, $status1); ?>
            <hr>
            <?php tampilMatkul($namaMatkul2, $sksMatkul2, $nilaiHadir2, $nilaiTugas2, $nilaiUTS2, $nilaiUAS2, $nilaiAkhir2, $grade2, $mutu2, $bobot2, $status2); ?>
            <hr>
            <?php tampilMatkul($namaMatkul3, $sksMatkul3, $nilaiHadir3, $nilaiTugas3, $nilaiUTS3, $nilaiUAS3, $nilaiAkhir3, $grade3, $mutu3, $bobot3, $status3); ?>
            <hr>
            <?php tampilMatkul($namaMatkul4, $sksMatkul4, $nilaiHadir4, $nilaiTugas4, $nilaiUTS4, $nilaiUAS4, $nilaiAkhir4, $grade4, $mutu4, $bobot4, $status4); ?>
            <hr>
            <?php tampilMatkul($namaMatkul5, $sksMatkul5, $nilaiHadir5, $nilaiTugas5, $nilaiUTS5, $nilaiUAS5, $nilaiAkhir5, $grade5, $mutu5, $bobot5, $status5); ?>
            <hr>

            <table class='matkul-table'>
                <tr><td>Total Bobot</td><td>:</td><td><?php echo number_format($totalBobot, 2); ?></td></tr>
                <tr><td>Total SKS</td><td>:</td><td><?php echo $totalSKS; ?></td></tr>
                <tr><td>IPK</td><td>:</td><td><?php echo number_format($IPK, 2); ?></td></tr>
            </table>
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
