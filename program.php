<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kami - ForestGuard</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- 1. STYLE DASAR (Sama dengan Index/Tentang) --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Open Sans', sans-serif; color: #333; line-height: 1.6; background-color: #f4f6f8; }
        h1, h2, h3 { font-family: 'Merriweather', serif; }
        a { text-decoration: none; transition: 0.3s; }

        /* --- 2. NAVBAR --- */
        .navbar { background: white; padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 100; }
        .logo { font-size: 22px; font-weight: 700; color: #006838; display: flex; align-items: center; gap: 8px; }
        .btn-kembali { background-color: #006838; color: white; text-decoration: none; font-weight: bold; font-size: 14px; border: 1px solid #006838; padding: 5px 13px; border-radius: 4px; }
        .btn-kembali:hover { background-color: white; color: #006838; }

        /* --- 3. HERO SECTION (Header) --- */
        .hero-program {
            /* Gambar orang menanam/kegiatan lapangan */
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://i.pinimg.com/1200x/6f/bb/25/6fbb25843a881399a1817793ef07cb9d.jpg');
            background-size: cover; background-position: center;
            padding: 80px 5%; text-align: center; color: white;
        }
        .hero-program h1 { font-size: 3rem; margin-bottom: 10px; }
        .hero-program p { font-size: 1.1rem; max-width: 700px; margin: 0 auto; opacity: 0.9; }

        /* --- 4. GRID PROGRAM (Kartu-Kartu) --- */
        .container { max-width: 1200px; margin: 50px auto; padding: 0 20px; }
        
         /* Styles untuk 1 kolom judul di atas */
        .top-column-header {
            margin-bottom: 30px;
            text-align: center;
        }

        /* Styles untuk kolom judul di bawah 3 card pertama */
        .middle-column-header {
            margin: 40px 0;
            text-align: center;
        }

        .column-title {
            background-color: #4a7c59;
            color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .column-title:hover {
            transform: translateY(-5px);
        }

        .column-title h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .column-title p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .program-grid {
            display: grid;
            /* Grid Responsif: Otomatis menyesuaikan jumlah kolom */
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px; /* jarak horizontal */
            row-gap: 50px; /* jarak vertikal */
            margin-bottom: 50px;
        }

        /* Card styling */
        .program-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
            text-align: center;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-body h3 {
            color: #2d5a27;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .card-body p {
            color: #555;
            margin-bottom: 25px;
            flex-grow: 1;
            line-height: 1.7;
        }

        /* Kolom judul di tengah */
        .middle-column-header {
            margin: 60px 0 50px 0;
            text-align: center;
        }

        .middle-column-header .column-title {
            background: linear-gradient(135deg, #3a6b47 0%, #2d5a27 100%);
            padding: 35px;
        }

        
        /* Responsive design */
        @media (max-width: 768px) {
            .column-title h2 {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }
            
            .column-title p {
                font-size: 1.1rem;
            }
            
            .program-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 20px;
                row-gap: 40px;
            }
            
            .card-body {
                padding: 20px;
            }
            
            .column-title {
                padding: 30px 20px;
            }
        }

        @media (max-width: 480px) {
            .program-grid {
                grid-template-columns: 1fr;
                gap: 15px;
                row-gap: 30px;
            }
            
            .column-title h2 {
                font-size: 1.8rem;
            }
        }

        /* Warna kategori berbeda untuk kartu */
        .program-card:nth-child(1) {
            border-top: 4px solid #2d5a27;
        }
        
        .program-card:nth-child(2) {
            border-top: 4px solid #3e7c5a;
        }
        
        .program-card:nth-child(3) {
            border-top: 4px solid #4a7c59;
        }
        
        .program-card:nth-child(4) {
            border-top: 4px solid #5a8c69;
        }
        
        .program-card:nth-child(5) {
            border-top: 4px solid #6a9c79;
        }

        /* --- 5. FOOTER --- */
        footer { text-align: center; padding: 30px; color: #888; font-size: 13px; margin-top: 50px; }

        /* Responsif HP */
        @media (max-width: 768px) {
            .hero-program h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">🌳 ForestGuard</a>
        <a href="index.php" class="btn-kembali">Kembali ke Beranda</a>
    </nav>

    <header class="hero-program">
        <h1>Program Unggulan</h1>
        <p>Bergabunglah dalam berbagai aksi nyata kami untuk memulihkan ekosistem dan memberdayakan masyarakat sekitar hutan.</p>
    </header>

    <div class="container">
        <!-- Header utama -->
        <div class="top-column-header">
            <div class="column-title">
                <h2><i class="fas fa-leaf"></i> Arsitektur Program Wali Pohon</h2>
                <p>Mekanisme Adopsi dan Keberlanjutan Ekosistem</p>
            </div>
        </div>

        <div class="program-grid">
            <div class="program-card">
                <img src="https://wbpu.co.id/wp-content/uploads/2024/08/Survey-jalan-longsor-300x200.jpg" alt="Wali Pohon" class="card-img">
                <div class="card-body">
                    <h3>Operasional Lapangan</h3>
                    <p>Pembukaan jalur tanam, pembuatan lubang, mobilisasi bibit guna Penanaman yang presisi dan terukur.</p>
                </div>
            </div>

            <div class="program-card">
                <img src="https://images.forestdigest.com/upload/2021/20210323061846.jpg" alt="Ekspedisi" class="card-img">
                <div class="card-body">
                    <h3>Pemeliharaan Rutin</h3>
                    <p>Babat jalur, pendangiran, penyulaman tanaman mati guna meningkat kelangsungan hidup (survival rate) yang tinggi.</p>
                </div>
            </div>

            <div class="program-card">
                <img src="https://asset.kompas.com/data/todaysphoto/2018/foto/73f614858444241bddf143/p_1648880367814-monitoring-gajah-sumatera-di-hutan-harapan.jpg" alt="Edukasi" class="card-img">
                <div class="card-body">
                    <h3>Monitoring & Sensus</h3>
                    <p>Pendataan diameter, tinggi, dan kesehatan pohon setiap 6 bulan dan Laporan perkembangan akurat bagi donatur.</p>
                </div>
            </div>

            <div class="program-card">
                <img src="https://www.perhutani.co.id/wp-content/uploads/2025/12/Untitled-10-2.jpg" alt="Riset" class="card-img">
                <div class="card-body">
                    <h3>Administrasi & Sertifikasi</h3>
                    <p>Pembuatan sertifikat digital, pemasangan papan nama (ajir) guna Pengakuan keterlibatan donatur secara formal.</p>
                </div>
            </div>
        </div>

    <footer>
        &copy; 2024 ForestGuard Indonesia. Melindungi Alam, Melestarikan Kehidupan.
    </footer>

</body>
</html>