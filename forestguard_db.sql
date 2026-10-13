-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2026 pada 14.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forestguard_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id_article`, `judul`, `gambar`, `ringkasan`, `tanggal`) VALUES
(1, 'Kondisi Terkini Listrik di Aceh Usai Bencana Banjir Bandang', 'https://akcdn.detik.net.id/community/media/visual/2025/12/27/listrik-di-aceh-1766830901294_169.jpeg?w=700&q=90', 'Direktur Utama PT PLN (Persero) Darmawan Prasodjo mengungkapkan kondisi listrik terkini di Aceh usai bencana banjir dan longsor. Darmawan menyampaikan aliran listrik di 15 Kabupaten/Kota telah dinyatakan pulih 100%.\r\nSementara 8 Kabupaten masih dalam proses pemulihan. Darmawan menyampaikan kecepatan proses pemulihan kelistrikan pasca bencana ini sangat erat berhubungan dengan akses evakuasi material di lokasi.\r\n\r\n\"Daerah-daerah yang memang aksesnya masih terbuka, pemulihan sistem kelistrikan bisa berjalan dengan cepat, sedangkan daerah-daerah yang masih terisolasi, pemulihannya agak sedikit lebih lambat dan terkendala,\" ujar Darmawan dalam rakor satgas pemulihan bencana yang disiarkan di YouTube DPR RI, Selasa (30/12/2025).\r\n\r\nItu sebabnya masih ada tiga daerah di Aceh yang pemulihan sistem kelistrikannya masih rendah. Ketiga daerah itu yakni Aceh Tengah, Bener Meriah, dan Gayo Lues.\r\n\r\n\"Tiga daerah dengan pemulihannya yang masih paling rendah adalah satu Aceh Tengah, ini adalah 70,8% desa sudah menyala, sisanya masih padam. Kemudian kedua adalah Bener Meriah, yaitu 83,6% desa dari 194 desa, masih ada 38 desa yang padam. Kemudian Gayo Lues dari 95 desa, 41 desa masih padam, 69,9% desa sudah menyala,\" terang Darmawan.\r\n\r\nDarmawan turut memaparkan untuk proses evakuasi material kelistrikan di Kabupaten Aceh Tengah dan Bener Meriah masih menggunakan kendaraan udara. Sementara untuk proses evakuasi materian dan pemulihan di Kabupaten Gayo Lues sudah bisa dilakukan melalui jalur darat.\r\n\r\n\"Gayo Luwes ini ada berita yang cukup mengembirakan, jalur dari Langsa, Kutacane sampai ke Blangkejeren sudah mulai terbuka sehingga 210 tiang listrik kami sedang dalam perjalanan,\" jelasnya.\r\n\r\nSementara pemulihan untuk Aceh Tengah dengan Bener Meriah, proses evakuasi 510 tiang listrik masih menggunakan Hercules, itu sebabnya pemulihan listrk belum merata.\r\n\r\n\"Dalam hal ini masih sekitar 70-80% yang sudah menyala, sisanya dalam proses menunggu juga evakuasi material kami menggunakan akses udara,\" tutur Darmawan.\r\n\r\nDi sisi lai, meski ada wilayah di Provinsi Aceh yang proses pemulihan sistem kelistrikannya bisa dilakukan dengan cepat. Namun kerusakan sistem kelistrikan di rumah pelanggan sekitar wilayah itu malah sangat berat.\r\n\r\nSebagai contoh ada Kabupaten Aceh Utara di mana dari 850 desa, hanya 2 desa yang padam. Namun kerusakan kelistrikan di rumah pelanggan PLN yang ada lebih dari 80 ribu rumah. Jadi listrik puluhan ribu rumah itu masih padam.\r\n\r\n\"Jadi untuk Kabupaten Aceh Utara pemulihan sistem listrikannya sudah sangat tinggi, tetapi dampak kerusakan dengan rumah pelanggannya sangat tinggi sekali dan ini terbesar di seluruh Aceh,\" paparnya.\r\n\r\nBegitu juga dengan kondisi Kabupaten Aceh Tamiang, di mana dari 209 desa hanya 7 desa yang masih padam dan sisanya sudah menyala. Namun jumlah rumah pelanggan PLN yang terdampak lebih dari 38 ribu rumah.\r\n\r\n\"Kemudian juga di Biren, itu desa menyala sudah dari 609 desa, 607 desa sudah menyala yang padam hanya 2 desa tetapi jumlah rumah terdampaknya lebih dari 31 ribu rumah. Kemudian dari Aceh Timur, ini dari 513 desa, 491 desa sudah menyala atau 95%, desa yang padam 22 desa, jumlah rumah terdampak lebih dari 11 ribu rumah,\" terangnya lagi.\r\n\r\nPada akhirnya meski jalur evakuasi materian kelistrikan di sejumlah wilayah sudah terbuka dan dapat diakses PLN, namun kondisi ini tak serta merta langsung membuat listrik di desa-desa terdampak dapat langsung dinyalakan.\r\n\r\n\"Jadi desanya sudah menyala tetapi rumah-rumah pelanggan PLN juga masih tertimbun dengan lumpur sehingga kami belum berani menyalakan, karena belum bisa, karena nanti bisa konslet,\" pungkasnya.', '2025-12-30'),
(2, '22 Desa Hilang Usai Bencana Banjir Bandang', 'https://akcdn.detik.net.id/community/media/visual/2025/12/10/lubok-pusaka-porak-poranda-banjir-bandang-sapu-bersih-hampir-seluruh-desa-1765338736819_169.jpeg?w=700&q=90', 'Menteri Dalam Negeri Tito Karnavian mengatakan 22 desa hilang imbas bencana banjir dan tanah longsor di Aceh, Sumatera Utara, dan Sumatera Barat. Paling banyak desa hilang di Aceh.\r\nRinciannya, 13 desa hilang di Aceh, di Sumatera Utara ada 8 desa, dan Satu desa hilang di Sumatera Barat.\r\n\r\n\"Data kami menunjukkan bahwa ada desa yang hilang itu totalnya 22. Di Aceh ada 13 hilang, rusak, di Sumatera Utara ada 8. Di Sumatera Barat ada 1,\" ujar Tito dalam keterangan pers di Lanud Halim Perdanakusumah, Jakarta Pusat, Senin (29/12/2025).\r\n\r\nAda juga 1.580 kantor desa yang terdampak bencana dan tidak bisa berjalan pemerintahannya di 3 provinsi yang terkena bencana alam di Sumatera.\r\n\r\nTotalnya ada sekitar 1.455 desa yang pemerintahannya lumpuh di Aceh. Kemudian di Sumatera Utara ada 93 desa dan Sumatera Barat 32 desa.\r\n\r\n\"Paling banyak kantor desa yang rusak itu, yang terdampak itu adalah di Aceh Utara 800-an dan Aceh Tamiang,\" sebut Tito.\r\n\r\nDia melanjutkan adalah kewajiban dari Kemendagri untuk bisa membangkitkan, menghidupkan, dan menjalankan kembali pemerintahan-pemerintahan desa. Maka dari itu, pihaknya akan mengirimkan 1.054 personel Praja IPDN untuk membantu pemulihan pemerintahan desa.\r\n\r\n\"Nah untuk kami mengirimkan 1.054 personil Praja IPDN dan pengasuhnya, tugas mereka dua. Satu adalah membantu pemerintah desa-desa untuk administrasi desa. Yang kedua adalah membantu untuk menghidupkan kembali pemerintahan desa-desa yang ada itu,\" ujar Tito.\r\n\r\n\"Jadi ini sebulan mereka dan termasuk dalam kurikulum, masuk sebagai semacam Kuliah Kerja Nyata riil. Jadi ini mereka berhadapan langsung dengan permasalahan sambil membantu masyarakat,\" pungkas Tito.', '2025-12-29'),
(3, 'Kerusakan Hutan Lindung Rimbo Aneh di Agam, Sumatera Barat: Kepedulian Masyarakat dan Tindakan Tegas Dibutuhkan', 'assets/hutan_limbo.webp', 'Hutan Lindung Rimbo Aneh yang berada di Nagari Tigo Koto Silungkang, Kecamatan Palembayan, Kabupaten Agam, Sumatera Barat, saat ini menghadapi ancaman serius akibat aktivitas pembabatan hutan secara ilegal oleh pihak-pihak yang tidak bertanggung jawab. Kawasan yang berperan penting sebagai penyangga ekosistem dan sumber kehidupan masyarakat ini perlahan mengalami kerusakan, sehingga menimbulkan kekhawatiran di tengah warga setempat.\r\n\r\nBerdasarkan laporan yang ada, luas hutan lindung yang telah mengalami kerusakan diperkirakan mencapai sekitar 0,55 hektare atau setara dengan 5.500 meter persegi. Aktivitas pembabatan tersebut tidak hanya merusak kawasan hutan lindung, tetapi juga berdampak langsung pada kawasan karst di sekitarnya. Karst merupakan sistem hidrologi yang unik dan sangat sensitif terhadap perubahan lingkungan. Menurut Dr. Osronita, pemerhati lingkungan hidup dan kawasan karst, keberadaan hutan di kawasan karst memiliki peran krusial dalam menjaga keseimbangan ekosistem serta kelestarian sumber daya alam. Kawasan karst berfungsi sebagai penyimpan air alami dan sumber air bagi wilayah sekitarnya. Penebangan hutan dapat mengganggu siklus hidrologi karena mengurangi kemampuan tanah dan permukaan lahan dalam menyerap dan menyimpan air.\r\n\r\nSelain itu, kawasan karst juga menjadi habitat bagi berbagai jenis flora dan fauna endemik yang langka dan memiliki nilai ekologis tinggi. Kerusakan hutan berpotensi mengancam kelangsungan hidup spesies-spesies tersebut. Lebih jauh, kawasan karst memiliki jaringan lorong bawah tanah serta ornamen geologi atau speleothem yang terbentuk selama ratusan juta tahun. Penebangan hutan di permukaan dapat mengganggu kestabilan tanah dan proses resapan air, sehingga berisiko merusak kekayaan geologi yang ada di bawah permukaan, sebagaimana dijelaskan oleh Kepala Pusat Penelitian dan Pengembangan Geopark dan Lingkungan Hidup Unitas Padang.\r\n\r\nPembabatan liar di Hutan Lindung Rimbo Aneh berpotensi menimbulkan berbagai dampak negatif, di antaranya kerusakan ekosistem hutan lindung, hilangnya keanekaragaman hayati flora dan fauna, meningkatnya risiko erosi, tanah longsor, dan banjir bandang, menurunnya kualitas air serta terganggunya sumber daya alam lainnya. Selain itu, kerusakan hutan juga mengancam keberlanjutan pengembangan pariwisata di Nagari Tigo Koto Silungkang, khususnya potensi geowisata seperti Guo Pacualan.\r\n\r\nKelompok tani dan Pokdarwis setempat telah berupaya menyuarakan kepedulian terhadap kondisi hutan lindung ini kepada pihak-pihak terkait, namun hingga kini belum mendapatkan respons yang memadai. Kesatuan Pengelolaan Hutan Nagari (KPHN) Kabupaten Agam dinilai lamban dalam menangani permasalahan tersebut. Sementara itu, Lembaga Pengelolaan Hutan Nagari (LPHN) di Nagari Tigo Koto Silungkang juga memiliki keterbatasan dalam sumber daya dan kewenangan, sehingga belum mampu mengambil tindakan yang optimal.\r\n\r\nOleh karena itu, diperlukan langkah tegas berupa penegakan hukum, pemberian sanksi kepada pelaku pembabatan liar, serta solusi jangka panjang yang berkelanjutan dari pihak-pihak berwenang untuk menghentikan praktik perusakan hutan lindung ini. Kerusakan yang terjadi tidak hanya mengancam ekosistem, tetapi juga menggerus potensi alam dan kesejahteraan masyarakat Nagari Tigo Koto Silungkang. Aparat terkait perlu segera melakukan investigasi dan penindakan secara serius terhadap para pelaku.\r\n\r\nHutan lindung memiliki peranan vital dalam menjaga keseimbangan lingkungan dan menopang kehidupan masyarakat. Oleh sebab itu, upaya pelestarian hutan lindung harus menjadi tanggung jawab bersama. Pemerintah, masyarakat, akademisi, serta organisasi lingkungan perlu bersinergi dalam melindungi Hutan Lindung Rimbo Aneh agar kerusakan tidak semakin meluas. Dengan adanya kesadaran dan komitmen bersama, keseimbangan ekosistem dapat terjaga, sumber daya alam dapat dilestarikan, serta keunikan dan keindahan alam yang ada di kawasan tersebut tetap terpelihara untuk generasi mendatang.', '2025-12-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kerusakan`
--

CREATE TABLE `laporan_kerusakan` (
  `id_lapor` int(11) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `lokasi_kejadian` varchar(150) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `jenis_kerusakan` varchar(100) NOT NULL,
  `tingkat_kerusakan` varchar(50) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_lapor` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_kerusakan`
--

INSERT INTO `laporan_kerusakan` (`id_lapor`, `nama_pelapor`, `lokasi_kejadian`, `latitude`, `longitude`, `jenis_kerusakan`, `tingkat_kerusakan`, `deskripsi`, `tanggal_lapor`) VALUES
(3, 'zulfan', 'aceh tamiang', 4.28306176, 98.05471302, 'Banjir Bandang', 'Parah', 'beberapa desa di aceh tamiang hilang akibat di terjang banjir bandang', '2025-12-31 09:46:43'),
(4, 'zeyid', 'kabupaten agam', -0.39099410, 100.44201854, 'Penebangan Liar', 'Parah', 'hutan lindung di sekitaran wilayah mulai menipis karena adanya penebangan secara ilegal', '2025-12-31 09:51:53'),
(5, 'adiba', 'lhokseumawe', 5.15756729, 97.13773170, 'Banjir Bandang', 'Sedang', 'listrik sudah ada, namun masih terdampak banjir', '2025-12-31 10:59:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Indeks untuk tabel `laporan_kerusakan`
--
ALTER TABLE `laporan_kerusakan`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `laporan_kerusakan`
--
ALTER TABLE `laporan_kerusakan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
