<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - ForestGuard</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        /* --- STYLE DASAR --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Open Sans', sans-serif; color: #333; line-height: 1.8; background-color: #f9f9f9; }
        h1, h2, h3 { font-family: 'Merriweather', serif; color: #222; }
                a { text-decoration: none; transition: 0.3s; }

        
        /* Navbar */
        .navbar { background: white; padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 100; }
        .logo { font-size: 22px; font-weight: 700; color: #006838; display: flex; align-items: center; gap: 8px; }
        .btn-kembali { background-color: #006838; color: white; text-decoration: none; font-weight: bold; font-size: 14px; border: 1px solid #006838; padding: 5px 10px; border-radius: 4px; }
        .btn-kembali:hover { background-color: white; color: #006838; }

        /* Header Halaman */
        .page-header {
            background: linear-gradient(rgba(0,104,56,0.9), rgba(0,104,56,0.9)), url('https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: white; padding: 80px 5%; text-align: center;
        }
        .page-header h1 { margin-bottom: 10px; color: white; font-size: 3rem; }
        .page-header p { font-size: 20px; opacity: 0.9; max-width: 800px; margin: 0 auto; color: white; }

        /* Konten Utama */
        .content-container { max-width: 1000px; margin: 50px auto; padding: 0 20px; }
        
        /* STYLE KHUSUS: Layout Kanan-Kiri (Zig-Zag) */
        .row-section {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 80px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        /* Membalik urutan untuk baris genap (Gambar Kiri, Teks Kanan) */
        .row-section.reverse {
            flex-direction: row-reverse;
        }

        .text-col { flex: 1; }
        .text-col h2 { border-bottom: 3px solid #e8f5e9; padding-bottom: 10px; margin-bottom: 20px; display: inline-block; color: #006838; }
        .text-col p, .text-col li { color: #555; margin-bottom: 15px; text-align: justify; }

        .img-col { flex: 1; }
        .img-col img { 
            width: 100%; 
            border-radius: 10px; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.1); 
            transition: transform 0.3s;
        }
        .img-col img:hover { transform: scale(1.02); }

        /* Tim Kami (Tetap Grid) */
        .team-container {
            display: flex;
            flex-direction: column; /* INI YANG PENTING */
            gap: 40px;
        }
        
        /* Bagian Ketua */
        .leader-section {
            text-align: center;
            padding-bottom: 30px;
            border-bottom: 2px solid #e0e0e0;
        }
        
        .leader-card {
            max-width: 300px;
            margin: 0 auto;
            background: #f0f7eb;
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #006838;
        }
        
        /* Bagian Anggota */
        .members-section h3 {
            color: #006838;
            margin-bottom: 25px;
            text-align: center;
            font-size: 1.5rem;
        }
        
        .members-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .member-card {
            background: #006838;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            border-top: 5px solid #069d0eff;
            border-bottom: 7px solid #004d2aff;
        }
        
        .role-badge {
            display: inline-block;
            background: #006838;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-top: 10px;
            font-weight: 600;
        }
        
        .leader-badge {
            background: #d9534f;
        }
        
        .hustler-badge {
            background: #f0ad4e;
        }
        
        .hipster-badge {
            background: #5bc0de;
        }
        
        h2, h3, h4 {
            color: #ffffffff;
            margin-bottom: 10px;
        }
        
        p {
            color: #ffffffff;
            line-height: 1.6;
        }
        
        .back-button {
            display: inline-block;
            background: #4a7c59;
            color: white;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 30px;
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            .members-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">🌳 ForestGuard</a>
        <a href="index.php" class="btn-kembali">Kembali ke Beranda</a>
    </nav>

    <header class="page-header">
        <h1>Tentang Kami</h1>
        <p>Mengenal lebih dekat orang-orang dan semangat di balik gerakan hijau ini.</p>
    </header>

    <div class="content-container">
        
        <div class="row-section">
            <div class="text-col">
                <h2>Siapa Kami?</h2>
                <p><strong>ForestGuard</strong> bukan sekadar organisasi atau platform digital biasa. Kami adalah <strong>gerakan kolektif</strong> yang lahir pada tahun 2024 dari keprihatinan mendalam terhadap paradoks yang melanda Indonesia: sebuah negara dengan keanekaragaman hayati terbesar kedua di dunia, yang sekaligus mengalami laju deforestasi dan degradasi hutan yang mengkhawatirkan.</p>
                <p>Kami melihat celah besar antara semangat menanam dalam seremoni dengan tanggung jawab jangka panjang untuk memastikan pohon itu hidup, tumbuh, dan menjalankan fungsi ekologisnya. ForestGuard hadir untuk menutup celah itu dengan mengusung prinsip utama: <strong>Transparansi adalah nafas dari setiap aksi konservasi.</strong></p>
            </div>
            <div class="img-col">
                <img src="https://i.pinimg.com/1200x/aa/32/b8/aa32b8f2a07d497e51e0eb8f79c64cc8.jpg" alt="Kegiatan Relawan">
            </div>
        </div>

        <div class="row-section reverse">
            <div class="text-col">
                <h2>Dampak yang Ingin Kami Raih</h2>
                <p>Visi kami adalah mewujudkan <strong>Indonesia yang hijau berkelanjutan melalui data yang terbuka.</strong> Kami yakin bahwa ketika aksi konservasi bisa dilihat, diverifikasi, dan dirasakan dampaknya oleh siapa saja, kepercayaan publik akan tumbuh. Pada akhirnya, ini akan memobilisasi sumber daya dan dukungan yang lebih besar untuk perlindungan hutan.</p>
            </div>
            <div class="img-col">
                <img src="https://i.pinimg.com/1200x/2d/bd/d4/2dbdd4c4cd0be7288bf521bbecb58bd5.jpg" alt="Bibit Pohon">
            </div>
        </div>

         <div class="members-section">
                <h3>Anggota Tim</h3>
                
                <div class="members-grid">
                    <div class="member-card">
                        <h4>M. Zeyid Al Adiba</h4>
                        <p>Ketua</p>
                        <span class="role-badge leader-badge">HACKER</span>
                    </div>
                           
                    <div class="member-card">
                        <h4>Wulan Zahra Annisa</h4>
                        <p>Anggota </p>
                        <span class="role-badge hustler-badge">HUSTLER</span>
                    </div>
                    
                    <div class="member-card">
                        <h4>Akmal</h4>
                        <p>Anggota </p>
                        <span class="role-badge hustler-badge">HUSTLER</span>
                    </div>
                    
                    <div class="member-card">
                        <h4>Nurfadillah Aprilia Putri</h4>
                        <p>Anggota </p>
                        <span class="role-badge hipster-badge">HIPSTER</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="text-align: center; padding: 40px; font-size: 13px; color: #666; background: white; margin-top: 50px;">
        &copy; 2024 ForestGuard Indonesia. Melindungi Alam, Melestarikan Kehidupan.
    </footer>

</body>
</html>