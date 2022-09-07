-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Sep 03, 2022 at 03:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9
=======
<<<<<<<< HEAD:db/balittas (1).sql
<<<<<<<< HEAD:db/balittas (3).sql
-- Generation Time: Aug 15, 2022 at 05:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6
========
-- Generation Time: Aug 30, 2022 at 05:28 AM
========
-- Generation Time: Sep 05, 2022 at 10:30 PM
>>>>>>>> ec655ec7a3fbf958027f6a7ea9d47ca9686776bd:db/balittas3.sql
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29
>>>>>>>> 84254896c66990f0c0b69092f3d97f604791c9a6:db/balittas (1).sql
>>>>>>> ec655ec7a3fbf958027f6a7ea9d47ca9686776bd

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balittas3`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Program Penelitian', '<p><strong>Program</strong>&nbsp;penelitian Balai Penelitian Tanaman Pemanis dan Serat (Balittas) disusun dengan mengacu pada Renstra Badan Litbang Pertanian serta Puslitbang Perkebunan 2015-2019.&nbsp;Secara umum sasaran program Balittas untuk mendukung kebijakan pemerintah, menghasilkan teknologi yang dibutuhkan oleh stakeholder, serta mempercepat alih teknologi kepada calon pengguna.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tujuan</strong>&nbsp;yang telah ditetapkan adalah :</p>\r\n\r\n<ol>\r\n	<li>Melaksanakaneksplorasi, konservasi, karakterisasi, evaluasi dan dokumentasi plasmanutfah tanaman pemanis, serat, tembakau, dan minyak industri</li>\r\n	<li>Menghasilkan varietas-varietas unggul tanaman pemanis, serat, tembakau, dan minyak industri yang sesuai dengan wilayah pengembangannya</li>\r\n	<li>Menghasilkan komponen teknologi budidaya tanaman pemanis, serat, tembakau, dan minyak industri</li>\r\n	<li>Merakit paket teknologi tepat guna sesuai dengan kebutuhan pengguna dan stakeholder</li>\r\n	<li>Meningkatkan diseminasi dan komunikasi hasil penelitian agar cepat diadopsi oleh pengguna</li>\r\n	<li>Mengembangkan kerjasama IPTEK</li>\r\n	<li>Memberikan saran kebijakan dalam agribisnis tanaman pemanis, serat, tembakau,dan minyak industri</li>\r\n	<li>Meningkatkan kapasitas dan profesionalisme SDM, menyediakan sarana/prasarana yang memadai.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Target</strong>&nbsp;kinerja Prioritas Program penelitian Balai Penelitian Tanaman Pemanis dan Serat 2015-2019 adalah menghasilkan inovasi teknologi unggul adalah komoditas tebu, kemudian komoditas kapas, tembakau dan kemiri sunan.</p>', 'program-penelitian', '2022-07-25 21:01:37', '2022-07-25 21:37:09'),
(2, 'Organisasi', '<h2>STRUKTUR ORGANISASI<br />\r\nBALAI PENELITIAN TANAMAN PEMANIS DAN SERAT</h2>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/upload/post/content/stukturorg2021a_1658816932.png\" style=\"width: 300px; height: 140px;\" /></p>\r\n\r\n<p>Berdasarkan Keputusan Menteri Pertanian nomor:<br />\r\n<strong>662/KPTS/KP.230/A/9/2019</strong>&nbsp;Tanggal&nbsp;9 September 2019&nbsp;</p>\r\n\r\n<h2>TUGAS POKOK</h2>\r\n\r\n<p>Balai Penelitian Tanaman Pemanis dan Serat mempunyai tugas melaksanakan penelitian tanaman pemanis, serat, tembakau, dan minyak industri.</p>\r\n\r\n<hr />\r\n<h2>FUNGSI</h2>\r\n\r\n<ul>\r\n	<li>Melaksanakan penelitian genetika, pemuliaan dan perbenihan dan pemanfaatan plasma nutfah tanaman pemanis, serat, tembakau, dan minyak industri</li>\r\n	<li>Melaksanakan penelitian morfologi, fisiologi, ekologi, entomologi dan fitopatologi tanaman pemanis, serat, tembakau dan minyak industri</li>\r\n	<li>Melaksanakan penelitian komponen teknologi sistem dan usaha agribisnis tanaman pemanis, serat, tembakau, dan minyak industri</li>\r\n	<li>Melaksanakan penelitian komponen teknologi sistem dan usaha agribisnis tanaman pemanis, serat, tembakau dan minyak industri</li>\r\n	<li>Melaksanakan penelitian penanganan hasil tanaman pemanis, serat, tembakau dan minyak industri</li>\r\n	<li>Melaksanakan pemberian pelayanan teknik penelitian tanaman pemanis, serat, tembakau, dan minyak industri</li>\r\n	<li>Melaksanakan penyiapan kerja sama, informasi, dokumentasi, serta penyebarluasan dan pendayagunaan hasil penelitian tanaman pemanis, serat, tembakau, dan mintak industri</li>\r\n	<li>Melaksanakan urusan tata usaha dan rumah tangga</li>\r\n</ul>\r\n\r\n<hr />\r\n<h2>KELOMPOK JABATAN FUNGSIONAL</h2>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>\r\n			<h3>Nama</h3>\r\n			</th>\r\n			<th>\r\n			<h3>Jabatan</h3>\r\n			</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/tentang-kami/peneliti-porto/647-ir-budi-hariyono-mp\">Dr. Ir.&nbsp;Budi Hariyono, MP.</a></td>\r\n			<td>Koordinator Program</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/id/tentang-kami/peneliti-porto/654-profrdrdrs-subiyakto-mp\">Prof. Dr. Drs. Subiyakto, MP</a></td>\r\n			<td>Penanggung Jawab Program Tanaman Pemanis</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/tentang-kami/peneliti-porto/655-ir-nurindah-phd\">Prof. Ir. Nurindah, Ph.D.</a></td>\r\n			<td>Penanggung Jawab Program Tanaman Serat</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/tentang-kami/peneliti-porto/618-drir-rully-dyah-purwati-mphil\">Dr. Ir. Rully Dyah Purwati, M.Phil</a></td>\r\n			<td>Penanggung Jawab Program Tanaman Minyak Industri</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/tentang-kami/peneliti-porto/642-ir-djajadi-mscphd\">Ir. Djajadi, M.Sc.PhD.</a></td>\r\n			<td>Penanggung Jawab Program Tanaman Tembakau</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/tentang-kami/peneliti-porto/650-ir-gatot-suharto-abdul-fatah-mp\">Ir. Gatot Suharto Abdul Fatah&nbsp; MP</a>.</td>\r\n			<td>Ketua Kelompok Peneliti Ekofisiologi</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/tentang-kami/peneliti-porto/667-heri-prabowo-ssi\">Heri Prabowo, S.Si. M.Sc.</a></td>\r\n			<td>Ketua Kelompok Peneliti Entomologi dan Fitopatologi</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://balittas.litbang.pertanian.go.id/index.php/tentang-kami/peneliti-porto/627-drs-mardjani-mp\">Dr. Drs. Mardjani, MP</a></td>\r\n			<td>Ketua Kelompok Peneliti Pemuliaan dan Plasma Nutfah</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'organisasi', '2022-07-25 23:30:34', '2022-07-25 23:30:34'),
(3, 'Visi Dan Misi', '<h5>MOTO KAMI</h5>\r\n\r\n<h2>TERDEPAN DALAM INOVASI DAN PELAYANAN</h2>\r\n\r\n<h3><em>LEADING IN INNOVATION AND SERVICES</em></h3>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>VISI DAN MISI&nbsp;KEMENTAN</h2>\r\n\r\n<h2><strong>VISI KEMENTAN</strong></h2>\r\n\r\n<blockquote>\r\n<p>&ldquo;Pertanian yang Maju, Mandiri dan Modern untuk Terwujudnya Indonesia Maju yang Berdaulat, Mandiri dan Berkepribadian Berlandaskan Gotong Royong&rdquo;</p>\r\n</blockquote>\r\n\r\n<h2><strong>MAKNA DARI VISI KEMENTAN</strong></h2>\r\n\r\n<blockquote>\r\n<p>Majunya sektor pertanian ditandai dengan meningkatnya produksi dan produktivitas komoditas pangan serta mampu mencukupi kebutuhan dalam negeri (pangan mandiri) yang pada akhirnya mampu meningkatkan pendapatan petani. Kemajuan dan kemandirian di sektor pertanian diwujudkan dengan peningkatan hasil pengembangan penelitian terapan didukung oleh kualitas SDM dalam menggunakan teknologi modern berbasis kawasan pertanian.</p>\r\n</blockquote>\r\n\r\n<h2><strong>MISI KEMENTAN</strong></h2>\r\n\r\n<ol>\r\n	<li>Mewujudkan ketahanan pangan,</li>\r\n	<li>Meningkatkan nilai tambah dan daya saing pertanian, serta</li>\r\n	<li>Meningkatkan kualitas SDM dan prasarana Kementerian Pertanian</li>\r\n</ol>\r\n\r\n<h2><strong>MAKNA DARI MISI KEMENTAN</strong></h2>\r\n\r\n<blockquote>\r\n<p>Pembangunan pertanian diarahkan dapat meningkatkan kesejahteraan petani dengan meningkatkan ketahanan pangan dan daya saing pertanian. Salah satu tujuan utama pembangunan pertanian adalah meningkatkan kehidupan petani dan keluarganya yang lebih baik dan sejahtera. Hal tersebut bisa diraih dengan meningkatnya ketahanan pangan, nilai tambah dan daya saing pertanian. Kesejahteraan petani merupakan dampak (impact) dari tercapainya outcome program/kegiatan pembangunan pertanian.</p>\r\n\r\n<p>Ketahanan pangan merupakan kondisi terpenuhinya pangan bagi negara sampai perseorangan yang tercermin dari tersedianya pangan yang cukup ditinjau dari jumlah maupun mutu. Selain itu, menjamin pangan yang aman, beragam, bergizi, merata dan terjangkau serta tidak bertentangan dengan agama, keyakinan dan budaya masyarakat untuk dapat hidup sehat, aktif, dan produktif secara berkelanjutan.</p>\r\n\r\n<p>Daya saing pertanian adalah kemampuan di sektor pertanian untuk memenuhi kebutuhan masyarakat sekaligus mampu menggantikan produk pesaingnya dengan nilai tambah yang dihasilkan dalam setiap kegiatan produksi dan distribusi komoditas pertanian.</p>\r\n</blockquote>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>VISI DAN MISI BALITTAS</h2>\r\n\r\n<h2><strong>VISI</strong></h2>\r\n\r\n<blockquote>\r\n<p>&ldquo;Menjadi lembaga penelitian terkemuka penghasil teknologi dan inovasi bioindustri unggul berbasis komoditas pemanis, serat, tembakau, dan minyak industri untuk mewujudkan pertanian berkelanjutan dan kesejahteraan petani&rdquo;</p>\r\n</blockquote>\r\n\r\n<h2><strong>MISI</strong></h2>\r\n\r\n<p>Untuk mendukung visi yang telah ditetapkan tersebut, maka misi Balai Penelitian Tanaman Pemanis dan Serat adalah sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Menghasilkan dan mengembangkan teknologi pertanian modern tanaman pemanis, serat, tembakau,dan minyak industri yang memiliki scientific and impact recognition dengan produktivitas dan efisiensi tinggi</li>\r\n	<li>Mewujudkan Balai Penelitian Tanaman Pemanis dan Serat sebagai Institusi yang mengedepankan transparansi, profesionalisme dan akuntabilitas</li>\r\n</ol>\r\n\r\n<h2><strong>TUJUAN</strong></h2>\r\n\r\n<p>Sebagai penjabaran dari misi yang hendak dilaksanakan, Balai Penelitian Tanaman Pemanis dan Serat telah menetapkan tujuan untuk memberikan arah yang jelas pada proses penyusunan program-program dan kegiatan-kegiatan selama kurun waktu 2015&ndash; 2019. Tujuan yang telah ditetapkan adalah:</p>\r\n\r\n<ol>\r\n	<li>Menyediakan teknologi tanaman pemanis, serat, tembakau, dan minyak industri yang produktif dan efisien serta ramah lingkungan yang siap diadopsi/dimanfaatkan oleh stakeholder (pengguna).</li>\r\n	<li>Mewujudkan profesionalisme dalam pelayanan jasa dan informasi teknologi tanaman pemanis, serat, tembakau, dan minyak industri kepada pengguna.</li>\r\n	<li>Mewujudkan akuntabilitas kinerja instansi pemerintah di lingkungan Balai Penelitian Tanaman Pemanis dan Serat.</li>\r\n</ol>\r\n\r\n<h2><strong>TATA NILAI</strong></h2>\r\n\r\n<p>Dalam pelaksanan tugas pokok dan fungsinya, Balai Penelitian Tanaman Pemanis dan Serat telah menetapkan tata nilai yang menjadi pedoman dalam pola kerja dan bersifat mengikat seluruh komponen yang ada di Balai Penelitian Tanaman Pemanis dan Serat. Tata nilai tersebut adalah sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Fast Learning Organization adalah lembaga ilmiah yang terus menerus berkembang secara cepat sesuai dengan perkembangan lingkungan strategis.</li>\r\n	<li>Efektif dan efisien adalah lembaga ilmiah yang mengedepankan prinsip efisiensi dan efektivitas kerja</li>\r\n	<li>Berintegritas tinggi adalah lembaga ilmiah yang menjunjung tinggi integritas lembaga dan personal sebagai bagian dari upaya mewujudkan corporate management yang baik.</li>\r\n	<li>Profesional adalah lembaga ilmiah dengan sumber daya manusia (SDM) yang memiliki kapasitas dan kompetensi yang mampu bekerja produktif.</li>\r\n</ol>', 'visi-dan-misi', '2022-07-25 23:35:09', '2022-07-25 23:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Prosiding', 'prosiding', '2022-07-13 22:46:14', '2022-07-25 23:47:44'),
(3, 'Monograf', 'monograf', '2022-07-14 01:47:15', '2022-07-25 23:48:03'),
(4, 'Info Teknologi', 'info-teknologi', '2022-07-14 01:48:08', '2022-07-25 23:48:18'),
(5, 'Jurnal Penelitian', 'jurnal-penelitian', '2022-07-14 01:49:30', '2022-07-25 23:48:43'),
(6, 'Berita', 'berita', '2022-07-14 01:53:32', '2022-07-25 23:49:00'),
(9, 'Tesss', 'tesss', '2022-07-14 20:16:15', '2022-07-31 20:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `data_variety`
--

CREATE TABLE `data_variety` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variety_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_variety`
--

INSERT INTO `data_variety` (`id`, `variety_id`, `user_id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tebu', '<p>Pemanissss</p>', 'tebu', '2022-08-03 21:05:21', '2022-08-03 21:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'sidebar', '1660535192-20210730_Penjelasan_Berakhlak.jpg', '2022-08-14 20:46:32', '2022-08-14 20:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_07_12_024846_create_sessions_table', 1),
(6, '2022_07_13_032528_create_roles_table', 2),
(7, '2022_07_13_033046_add_role_id_to_users_table', 2),
(8, '2022_07_13_075753_create_category_table', 3),
(9, '2022_07_18_015209_create_post_table', 4),
(10, '2022_07_19_034357_add_category_id_to_post_table', 5),
(11, '2022_07_26_013315_add_user_id_to_post_table', 6),
(12, '2022_07_26_030847_create_about_table', 7),
(13, '2022_07_28_021221_create_variety_table', 8),
(14, '2022_07_28_042138_create_data_variety_table', 9),
(15, '2022_07_29_025844_add_variety_id_to_data_variety_table', 10),
(16, '2022_07_29_030502_create_data_variety_table', 11),
(17, '2022_07_29_030537_add_variety_id_to_data_variety_table', 12),
(18, '2022_08_01_053801_add_user_id_to_data_variety_table', 13),
(19, '2022_08_08_014131_add_first_name_last_name_desc_to_users_table', 14),
(20, '2022_08_15_012935_create_public_info_table', 15),
(21, '2022_08_15_022301_create_galeri_table', 16),
(22, '2022_08_15_022520_create_galeri_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `user_id`, `title`, `thumbnail`, `date`, `slug`, `content`, `description`, `created_at`, `updated_at`, `views`) VALUES
<<<<<<< HEAD
(3, 6, 1, 'Jokowi: Kualitas Benih menjadi Kunci Produksi Beras Nasional Bisa Meningkat', '1658818805-62ce95a8b8914.jpg', '2022-07-25', 'jokowi-kualitas-benih-menjadi-kunci-produksi-beras-nasional-bisa-meningkat', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>\r\n\r\n<p>&quot;Kita tahu bahwa dunia sekarang ini sedang terjadi kekurangan pangan di mana-mana,&quot; kata Jokowi pada Selasa (12/7/2022).</p>\r\n\r\n<p>&nbsp;&quot;Oleh sebab itu, kita harus waspada memastikan bahwa ketersedian pangan masih pada kondisi yang aman,&quot; sambungnya.</p>\r\n\r\n<p>Dari hasil pengamatannya, Jokowi melihat balai padi Kementan selalu menemukan varietas benih padi yang unggul seperti Inpari 32 dan Inpari 42. Menurutnya, kualitas benih menjadi kunci produksi&nbsp;beras&nbsp;nasional bisa meningkat.</p>\r\n\r\n<p>&quot;Kalau betul-betul didampingi oleh Penyuluh Pertanian Lapangan (PPL) yang baik 1 hektar Inpari 32 dan Inpari 42 bisa hasilkan kurang lebih sampai 12 ton, tapi katakanlah 7-8 ton itu sudah sebuah lompatan yng baik bagi stok ketersedian pangan utamanya beras kita,&quot; jelasnya.</p>\r\n\r\n<p>Kendati demikian, Jokowi menekankan untuk tidak hanya bergantung pada beras saja. Kepala Negara melihat banyak jenis pangan lainnya seperti sagu, sorgum, porang, hingga jagung.</p>\r\n\r\n<p>&quot;Ini masih memiliki peluang untuk kita tingkatkan produksinya dan saya yakin karena kita sudah 3 tahun ini tidak impor beras saya yakin swasembada beras kita akan segera kita capai.&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Source:&nbsp;<a href=\"http://www.suara.com/\" rel=\"nofollow\">www.suara.com</a></p>', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>', '2022-07-18 23:29:57', '2022-09-03 07:56:24', 26),
(10, 6, 1, 'Penyakit Cucumber Mosaic Virus (CMV) Pada Tanaman Tembakau', 'cmv2.jpg', '2022-07-25', 'penyakit-cucumber-mosaic-virus-cmv-pada-tanaman-tembakau', '<p style=\"text-align: justify;\">Virus mosaik ketimun adalah virus tanaman yang berbentuk polihedral dengan diameter 28 nm, menginfeksi lebih dari 775 spesies tumbuhan dalam 67 famili dan dapat ditularkan oleh 75 spesies afid secara non-persistent (Murant dan Mayo, 1982). Virus mosaik ketimun mempunyai kisaran inang yang sangat luas, terdapat pada tanaman sayuran, tanaman hias dan tanaman buah-buahan. Selain menyerang tanaman ketimun, virus mosaik ketimun juga dapat menyerang melon, labu, cabai, bayam, tomat, seledri, bit, tanaman polong-polongan, pisang, tanaman famili Crucifereae, delphinium, gladiol, lili, petunia, zinia dan beberapa jenis gulma (Agrios, 1988). Dibeberapa negara, virus mosaik ketimun telah menyebabkan penyakit yang berat pada tanaman tertentu. Virus mosaik ketimun terdapat hampir di semua negara dan strain yang berbeda sifat biologinya telah dilaporkan dari berbagai tempat. Virus mosaik ketimun mempunyai banyak strain, oleh karena itu mempunyai jumlah inang yang banyak serta gejala yang ditimbulkan beragam.</p>\n<p> <strong>Arti ekonomi penyakit virus CMV</strong></p>\n<p style=\"text-align: justify;\">Penyakit virus pada tembakau khususnya gejala mosaik pada umumnya masih kurang disadari kerugian yang ditimbulkannya oleh petani, khususnya pada tembakau rajangan, karena tanaman yang sakit tidak langsung mati dan masih memberikan hasil walaupun kualitasnya menurun. Pada tembakau cerutu penyakit virus menyebabkan kerugian yang cukup besar, karena selain mengurangi produksi juga sangat berpengaruh terhadap mutu daun yang dihasilkan. Daun tembakau yang terserang virus pada umumnya menunjukkan gejala mosaik, berkerut atau menggulung, ukurannya menjadi lebih kecil, rapuh, elastisitas dan daya bakarnya menurun. Menurut Lucas (1975) daun yang terserang penyakit CMV menunjukkan gejala terjadi perubahan warna secara nyata seperti pola mosaik, kebanyakan tanaman kerdil, daun menyempit dan mengalami distorsi. Besarnya kerugian tergantung dari jenis virus yang menyerang, jenis tembakau dan waktu terjadinya infeksi</p>\n<p style=\"text-align: justify;\">Pada pertanaman tembakau virginia di daerah Bojonegoro, areal yang terserang mencapai 25-30%, sehingga diperkirakan kerugian bisa mencapai 5 milyar rupiah. Di Lumajang pada pertanaman tembakau burley terserang penyakit CMV berkisar antara 30-73,5% pada tanaman seri III, sedangkan serangan virus pada tembakau Besuki NO cukup berat, sehingga menimbulkan penurunan produksi sekitar 10%. Berdasarkan dari gejala yang tampak di lapang diduga penyebabnya adalah CMV.</p>\n<p><strong>Bioekologi Virus CMV</strong></p>\n<p style=\"text-align: justify;\">Virus CMV termasuk kedalam Cucumo virus. Zarah virus berbentuk isometrik dengan diameter 30 nm. CMV mempunyai suhu inaktivasi antara 60-750C, dengan titik pengenceran akhir 10-4. Dalam tanaman sakit, virus akan menjadi inaktif setelah disimpan selama 96 jam pada suhu kamar. CMV dapat ditularkan secara mekanis, oleh lebih dari 60 jenis kutu daun secara non-persisten, termasuk Myzus persicae dan Aphis gossypii, serta melalui biji beberapa tanaman inang (Gonzalves dan Garnsey, 1989). CMV termasuk jenis virus yang mempunyai sebaran tanaman inang yang sangat luas dan dapat menyerang 775 jenis tanaman dari 85 famili, termasuk famili Cucurbitaceae, Papilionaceae, Solanaceae dan Cruciferae. Diantara tanaman tersebut yang sering ditemukan berada disekitar tanaman tembakau adalah: tomat, cabai, mentimun, terung, buncis, kacang tunggak, dan kacang panjang (Gonzalves dan Garnsey, 1989). Penularan CMV melalui biji dan infeksi pada beberapa tumbuhan liar terbukti memegang peranan penting dalam penyebaran dan perkembangan penyakit di lapang.</p>\n<p><strong>Gejala penyakit Virus CMV </strong></p>\n<p style=\"text-align: justify;\">Gejala penyakit virus pada populasi tanaman inang merupakan hasil interaksi antara virus, tanaman inang, dan lingkungan. Faktor lain yang berpengaruh adalah campur tangan manusia yang berperan dalam mengubah sistem pertanaman (Akin, 2006). Manusia mempunyai peran yang sangat penting dalam penyebaran penyakit virus dan vektornya. Manusia dapat mempengaruhi patogenisitas virus, kerentanan tanaman terhadap virus maupun vektor dan terhadap lingkungan disekitar pertanaman. Manusia merupakan salah satu media yang sangat penting dalam penyebaran penyakit, karena mempunyai mobilitas yang tinggi sehingga dalam waktu singkat dapat membawa tanaman sekaligus vektor dan penyakitnya ke tempat-tempat yang jauh dalam waktu yang relatif singkat, meskipun harus melalui barier yang sangat keras (Wahyuni, 2005).</p>\n<p style=\"text-align: justify;\">Faktor lingkungan fisik yang berpengaruh terhadap perkembangan penyakit virus dan vektornya adalah : 1) curah hujan; 2) Angin; 3) suhu udara; dan 4) jenis tanah dan kelengasannya. Curah hujan sangat berperan dalam perkembangan penyakit virus yang mempunyai vektor soilborne dan airborne Curah hujan di daerah tropika dan sub tropika berkaitan langsung dengan kelembaban udara yang tinggi. Infeksi virus pada tumbuhan lebih banyak terjadi pada musim semi atau hujan. Kelembaban udara yang tinggi menyebabkan jaringan palisade daun memanjang dan teksturnya menjadi lebih lemas. Angin berpengaruh terhadap penyebaran vektor, sehingga virus yang dibawanya bisa lebih cepat menyebar. Suhu dipengaruhi oleh intensitas cahaya dan musim. Musim panas intensitas cahaya sangat tinggi, dan panjang hari lebih lama, keadaan ini menyebabkan daun menjadi lebih tebal dan teksturnya agak keras. Suhu berpengaruh pada pergerakan dan kecepatan memperbanyak diri vektor airborne (Wahyuni, 2005). </p>\n<p><strong>Pengendalian penyakit CMV </strong></p>\n<p style=\"text-align: justify;\">Sampai sekarang belum ditemukan agensia yang efektif untuk mengobati penyakit virus. Tanaman yang sudah terinfeksi virus sudah tidak mungkin sembuh dari penyakit tersebut, sehingga akan menjadi sumber infeksi bagi tanaman sehat disekitarnya. Seranggga vektor banyak berperan dalam penyebaran penyakit virus yang berasal dari sumber inokulum. Beberapa jenis kutu daun ditularkan secara persisten maupun non persisten. Virus non persisten yang ditularkan oleh kutu daun lebih banyak berperan dalam penularan penyakit virus dengan cara menghisap cairan tanaman yang sudah terserang virus kemudian menularkannya kembali pada tanaman sehat dengan cara menusukkan styletnya sebelum mati. Pengendalian serangga vektor dengan insektisida kimia tidak banyak berpengaruh terhadap pengendalian penyakit virus non persisten. Terkait dengan isu global mengenai residu pestisida pada tanaman, pengendalian penyakit secara kimiawi mempunyai dampak negatif terhadap lingkungan dan mikroorganisme non target. Pengendalian virus yang efektif dan efisien saat ini belum banyak diketahui. Sejauh ini pengendalian virus masih bersifat preventif, yang dilakukan dilakukan secara tidak langsung dengan memadukan beberapa metode yaitu : 1) pencegahan infeksi di lapang misalnya dengan rotasi tanaman dengan tanaman yang bukan inang virus maupun vektornya, menekan populasi vektor, 2) mencegah penyebaran di dalam tanaman misalnya dengan menghilangkan gulma inang, mencegah penularan mekanis, 3) menanam bibit bebas virus, 4) tanam serempak dan 5) proteksi silang. Alternatif pengendalian CMV dengan vaksin Carna-5 sebagai biokontrol.</p>', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>', '2022-07-18 23:29:57', '2022-09-03 07:55:53', 8),
(12, 6, 1, 'Penyakit Kerupuk/ Keriting', 'penkerupuk4.jpg', '2022-07-25', 'penyakit-kerupuk-keriting', '<p>Penyakit kerupuk ini banyak menyerang tanaman tembakau di daerah Tropik, terutama di awal musim kemarau.</p>\r\n\r\n<p><strong>Gejala</strong></p>\r\n<p style=\"text-align: justify;\">Gejala pada tanaman tembakau biasanya diawali dari bentuk daun yang mengkerut dan berubah bentuk . Pada permukaan bawah daun terlihat pertulangan daun menebal dan berwarna hijau tua . Pada stadia generatif, bentuk bakal bunga, dan bunga sedikit menyimpang dan terpelintir, sementara bentuk buahnya menjadi tidak normal. Jika dicabut, akan terlihat sistem perakaran mengecil. Batang akan terlihat lebih pendek dan berbentuk Roset. Keseluruhan tanaman akan terlihat kerdil</p>\r\n<p> </p>\r\n\r\n<p> <strong>Penyebab</strong></p>\r\n<p style=\"text-align: justify;\">Penyakit ini disebabkan oleh tobacco leaf curl virus (TLCV) dari keluarga Geminiviridae, genus Begomovirus yang tidak memiliki amplop (selubung). TLCV termasuk kelompok gemini virus karena zarah virus berbentuk isometrik kembar masing-masing berukuran antara 25–30 mm (Gambar 3).</p>\r\n\r\n\r\n<p><strong>Penularan</strong></p>\r\n<p style=\"text-align: justify;\">TLCV tidak dapat ditularkan secara mekanis melalui sentuhan, penggosokan cairan daun sakit atau melalui benih tanaman sakit, tetapi ditularkan oleh vektor kutu putih Bemisia tabaci (Gambar 4.) secara persisten. Ada juga yang menyebutkan tungau Polyphagotarsonemus latus, dan Thrips Scirtothrips dorsalis.</p>\r\n<p style=\"text-align: justify;\">B. tabaci mampu menularkan virus setelah 30 menit akuisisi. Virus mampu bertahan dalam tubuh vektor 12–17 hari atau bahkan selama sisa hidup serangga tersebut. Namun belum ada laporan virus ini berkembang biak dalam tubuh vektor atau ditularkan jika kutu berganti kulit; ataupun melalui keturunannya. Virus ditularkan melalui penyambungan batang sakit dengan batang yang sehat.</p>\r\n<p><strong>Inang Lain</strong></p>\r\n<p>Cabe, tomat, Leunca, pepaya, crotalaria, kecubung, wijen, babandotan, kembang kertas, patikan kebo, sidaguri, rumput minjangan, dan sawi langit (Gambar 5).</p>\r\n<p><strong>Faktor yang Berpengaruh terhadap Perkembangan Penyakit </strong></p>\r\n<ol>\r\n<li>Meningkatnya populasi B. tabaci terutama pada awal musim kemarau.</li>\r\n<li>Bibit/tanaman muda lebih rentan dibandingkan tanaman tua</li>\r\n<li>Pemupukan N yang berlebihan.</li>\r\n<li>Meningkatkan dosis Pupuk P dan K akan mengurangi keparahan penyakit  </li>\r\n</ol>\r\n<p><strong>Pengendalian</strong></p>\r\n<ol>\r\n<li> Mengendalikan serangga vektor, misalnya dengan asefat atau imidakloprit 2x (saat tanam dan 45 hari setelah tanam).</li>\r\n<li> Menanam bunga matahari atau jarak kepyar sebagai pagar pembatas di sekitar bedengan untuk mencegah B. tabaci.</li>\r\n<li> Menggunakan tanaman resisten</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\">Penyakit virus pada tembakau khususnya gejala mosaik pada umumnya masih kurang disadari kerugian yang ditimbulkannya oleh petani, khususnya pada tembakau rajangan, karena tanaman yang sakit tidak langsung mati dan masih memberikan hasil walaupun kualitasnya menurun. Pada tembakau cerutu penyakit virus menyebabkan kerugian yang cukup besar, karena selain mengurangi produksi juga sangat berpengaruh terhadap mutu daun yang dihasilkan. Daun tembakau yang terserang virus pada umumnya menunjukkan gejala mosaik, berkerut atau menggulung, ukurannya menjadi lebih kecil, rapuh, elastisitas dan daya bakarnya menurun. Menurut Lucas (1975) daun yang terserang penyakit CMV menunjukkan gejala terjadi perubahan warna secara nyata seperti pola mosaik, kebanyakan tanaman kerdil, daun menyempit dan mengalami distorsi. Besarnya kerugian tergantung dari jenis virus yang menyerang, jenis tembakau dan waktu terjadinya infeksi</p>\r\n<p style=\"text-align: justify;\">Pada pertanaman tembakau virginia di daerah Bojonegoro, areal yang terserang mencapai 25-30%, sehingga diperkirakan kerugian bisa mencapai 5 milyar rupiah. Di Lumajang pada pertanaman tembakau burley terserang penyakit CMV berkisar antara 30-73,5% pada tanaman seri III, sedangkan serangan virus pada tembakau Besuki NO cukup berat, sehingga menimbulkan penurunan produksi sekitar 10%. Berdasarkan dari gejala yang tampak di lapang diduga penyebabnya adalah CMV.</p>\r\n<p><strong>Bioekologi Virus CMV</strong></p>\r\n<p style=\"text-align: justify;\">Virus CMV termasuk kedalam Cucumo virus. Zarah virus berbentuk isometrik dengan diameter 30 nm. CMV mempunyai suhu inaktivasi antara 60-750C, dengan titik pengenceran akhir 10-4. Dalam tanaman sakit, virus akan menjadi inaktif setelah disimpan selama 96 jam pada suhu kamar. CMV dapat ditularkan secara mekanis, oleh lebih dari 60 jenis kutu daun secara non-persisten, termasuk Myzus persicae dan Aphis gossypii, serta melalui biji beberapa tanaman inang (Gonzalves dan Garnsey, 1989). CMV termasuk jenis virus yang mempunyai sebaran tanaman inang yang sangat luas dan dapat menyerang 775 jenis tanaman dari 85 famili, termasuk famili Cucurbitaceae, Papilionaceae, Solanaceae dan Cruciferae. Diantara tanaman tersebut yang sering ditemukan berada disekitar tanaman tembakau adalah: tomat, cabai, mentimun, terung, buncis, kacang tunggak, dan kacang panjang (Gonzalves dan Garnsey, 1989). Penularan CMV melalui biji dan infeksi pada beberapa tumbuhan liar terbukti memegang peranan penting dalam penyebaran dan perkembangan penyakit di lapang.</p>\r\n<p><strong>Gejala penyakit Virus CMV </strong></p>\r\n<p style=\"text-align: justify;\">Gejala penyakit virus pada populasi tanaman inang merupakan hasil interaksi antara virus, tanaman inang, dan lingkungan. Faktor lain yang berpengaruh adalah campur tangan manusia yang berperan dalam mengubah sistem pertanaman (Akin, 2006). Manusia mempunyai peran yang sangat penting dalam penyebaran penyakit virus dan vektornya. Manusia dapat mempengaruhi patogenisitas virus, kerentanan tanaman terhadap virus maupun vektor dan terhadap lingkungan disekitar pertanaman. Manusia merupakan salah satu media yang sangat penting dalam penyebaran penyakit, karena mempunyai mobilitas yang tinggi sehingga dalam waktu singkat dapat membawa tanaman sekaligus vektor dan penyakitnya ke tempat-tempat yang jauh dalam waktu yang relatif singkat, meskipun harus melalui barier yang sangat keras (Wahyuni, 2005).</p>\r\n<p style=\"text-align: justify;\">Faktor lingkungan fisik yang berpengaruh terhadap perkembangan penyakit virus dan vektornya adalah : 1) curah hujan; 2) Angin; 3) suhu udara; dan 4) jenis tanah dan kelengasannya. Curah hujan sangat berperan dalam perkembangan penyakit virus yang mempunyai vektor soilborne dan airborne Curah hujan di daerah tropika dan sub tropika berkaitan langsung dengan kelembaban udara yang tinggi. Infeksi virus pada tumbuhan lebih banyak terjadi pada musim semi atau hujan. Kelembaban udara yang tinggi menyebabkan jaringan palisade daun memanjang dan teksturnya menjadi lebih lemas. Angin berpengaruh terhadap penyebaran vektor, sehingga virus yang dibawanya bisa lebih cepat menyebar. Suhu dipengaruhi oleh intensitas cahaya dan musim. Musim panas intensitas cahaya sangat tinggi, dan panjang hari lebih lama, keadaan ini menyebabkan daun menjadi lebih tebal dan teksturnya agak keras. Suhu berpengaruh pada pergerakan dan kecepatan memperbanyak diri vektor airborne (Wahyuni, 2005). </p>\r\n<p><strong>Pengendalian penyakit CMV </strong></p>\r\n<p style=\"text-align: justify;\">Sampai sekarang belum ditemukan agensia yang efektif untuk mengobati penyakit virus. Tanaman yang sudah terinfeksi virus sudah tidak mungkin sembuh dari penyakit tersebut, sehingga akan menjadi sumber infeksi bagi tanaman sehat disekitarnya. Seranggga vektor banyak berperan dalam penyebaran penyakit virus yang berasal dari sumber inokulum. Beberapa jenis kutu daun ditularkan secara persisten maupun non persisten. Virus non persisten yang ditularkan oleh kutu daun lebih banyak berperan dalam penularan penyakit virus dengan cara menghisap cairan tanaman yang sudah terserang virus kemudian menularkannya kembali pada tanaman sehat dengan cara menusukkan styletnya sebelum mati. Pengendalian serangga vektor dengan insektisida kimia tidak banyak berpengaruh terhadap pengendalian penyakit virus non persisten. Terkait dengan isu global mengenai residu pestisida pada tanaman, pengendalian penyakit secara kimiawi mempunyai dampak negatif terhadap lingkungan dan mikroorganisme non target. Pengendalian virus yang efektif dan efisien saat ini belum banyak diketahui. Sejauh ini pengendalian virus masih bersifat preventif, yang dilakukan dilakukan secara tidak langsung dengan memadukan beberapa metode yaitu : 1) pencegahan infeksi di lapang misalnya dengan rotasi tanaman dengan tanaman yang bukan inang virus maupun vektornya, menekan populasi vektor, 2) mencegah penyebaran di dalam tanaman misalnya dengan menghilangkan gulma inang, mencegah penularan mekanis, 3) menanam bibit bebas virus, 4) tanam serempak dan 5) proteksi silang. Alternatif pengendalian CMV dengan vaksin Carna-5 sebagai biokontrol.</p>', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>', '2022-07-18 23:29:57', '2022-09-03 07:55:46', 12);
=======
(0, 6, 1, 'Penyakit Kerupuk/ Keriting', 'tembakau7.jpg', '2022-07-25', 'penyakit-kerupuk-keriting', '<p>Penyakit kerupuk ini banyak menyerang tanaman tembakau di daerah Tropik, terutama di awal musim kemarau.</p>\r\n\r\n<p><strong>Gejala</strong></p>\r\n<p style=\"text-align: justify;\">Gejala pada tanaman tembakau biasanya diawali dari bentuk daun yang mengkerut dan berubah bentuk . Pada permukaan bawah daun terlihat pertulangan daun menebal dan berwarna hijau tua . Pada stadia generatif, bentuk bakal bunga, dan bunga sedikit menyimpang dan terpelintir, sementara bentuk buahnya menjadi tidak normal. Jika dicabut, akan terlihat sistem perakaran mengecil. Batang akan terlihat lebih pendek dan berbentuk Roset. Keseluruhan tanaman akan terlihat kerdil</p>\r\n<p> </p>\r\n\r\n<p> <strong>Penyebab</strong></p>\r\n<p style=\"text-align: justify;\">Penyakit ini disebabkan oleh tobacco leaf curl virus (TLCV) dari keluarga Geminiviridae, genus Begomovirus yang tidak memiliki amplop (selubung). TLCV termasuk kelompok gemini virus karena zarah virus berbentuk isometrik kembar masing-masing berukuran antara 25–30 mm (Gambar 3).</p>\r\n\r\n\r\n<p><strong>Penularan</strong></p>\r\n<p style=\"text-align: justify;\">TLCV tidak dapat ditularkan secara mekanis melalui sentuhan, penggosokan cairan daun sakit atau melalui benih tanaman sakit, tetapi ditularkan oleh vektor kutu putih Bemisia tabaci (Gambar 4.) secara persisten. Ada juga yang menyebutkan tungau Polyphagotarsonemus latus, dan Thrips Scirtothrips dorsalis.</p>\r\n<p style=\"text-align: justify;\">B. tabaci mampu menularkan virus setelah 30 menit akuisisi. Virus mampu bertahan dalam tubuh vektor 12–17 hari atau bahkan selama sisa hidup serangga tersebut. Namun belum ada laporan virus ini berkembang biak dalam tubuh vektor atau ditularkan jika kutu berganti kulit; ataupun melalui keturunannya. Virus ditularkan melalui penyambungan batang sakit dengan batang yang sehat.</p>\r\n<p><strong>Inang Lain</strong></p>\r\n<p>Cabe, tomat, Leunca, pepaya, crotalaria, kecubung, wijen, babandotan, kembang kertas, patikan kebo, sidaguri, rumput minjangan, dan sawi langit (Gambar 5).</p>\r\n<p><strong>Faktor yang Berpengaruh terhadap Perkembangan Penyakit </strong></p>\r\n<ol>\r\n<li>Meningkatnya populasi B. tabaci terutama pada awal musim kemarau.</li>\r\n<li>Bibit/tanaman muda lebih rentan dibandingkan tanaman tua</li>\r\n<li>Pemupukan N yang berlebihan.</li>\r\n<li>Meningkatkan dosis Pupuk P dan K akan mengurangi keparahan penyakit  </li>\r\n</ol>\r\n<p><strong>Pengendalian</strong></p>\r\n<ol>\r\n<li> Mengendalikan serangga vektor, misalnya dengan asefat atau imidakloprit 2x (saat tanam dan 45 hari setelah tanam).</li>\r\n<li> Menanam bunga matahari atau jarak kepyar sebagai pagar pembatas di sekitar bedengan untuk mencegah B. tabaci.</li>\r\n<li> Menggunakan tanaman resisten</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\">Penyakit virus pada tembakau khususnya gejala mosaik pada umumnya masih kurang disadari kerugian yang ditimbulkannya oleh petani, khususnya pada tembakau rajangan, karena tanaman yang sakit tidak langsung mati dan masih memberikan hasil walaupun kualitasnya menurun. Pada tembakau cerutu penyakit virus menyebabkan kerugian yang cukup besar, karena selain mengurangi produksi juga sangat berpengaruh terhadap mutu daun yang dihasilkan. Daun tembakau yang terserang virus pada umumnya menunjukkan gejala mosaik, berkerut atau menggulung, ukurannya menjadi lebih kecil, rapuh, elastisitas dan daya bakarnya menurun. Menurut Lucas (1975) daun yang terserang penyakit CMV menunjukkan gejala terjadi perubahan warna secara nyata seperti pola mosaik, kebanyakan tanaman kerdil, daun menyempit dan mengalami distorsi. Besarnya kerugian tergantung dari jenis virus yang menyerang, jenis tembakau dan waktu terjadinya infeksi</p>\r\n<p style=\"text-align: justify;\">Pada pertanaman tembakau virginia di daerah Bojonegoro, areal yang terserang mencapai 25-30%, sehingga diperkirakan kerugian bisa mencapai 5 milyar rupiah. Di Lumajang pada pertanaman tembakau burley terserang penyakit CMV berkisar antara 30-73,5% pada tanaman seri III, sedangkan serangan virus pada tembakau Besuki NO cukup berat, sehingga menimbulkan penurunan produksi sekitar 10%. Berdasarkan dari gejala yang tampak di lapang diduga penyebabnya adalah CMV.</p>\r\n<p><strong>Bioekologi Virus CMV</strong></p>\r\n<p style=\"text-align: justify;\">Virus CMV termasuk kedalam Cucumo virus. Zarah virus berbentuk isometrik dengan diameter 30 nm. CMV mempunyai suhu inaktivasi antara 60-750C, dengan titik pengenceran akhir 10-4. Dalam tanaman sakit, virus akan menjadi inaktif setelah disimpan selama 96 jam pada suhu kamar. CMV dapat ditularkan secara mekanis, oleh lebih dari 60 jenis kutu daun secara non-persisten, termasuk Myzus persicae dan Aphis gossypii, serta melalui biji beberapa tanaman inang (Gonzalves dan Garnsey, 1989). CMV termasuk jenis virus yang mempunyai sebaran tanaman inang yang sangat luas dan dapat menyerang 775 jenis tanaman dari 85 famili, termasuk famili Cucurbitaceae, Papilionaceae, Solanaceae dan Cruciferae. Diantara tanaman tersebut yang sering ditemukan berada disekitar tanaman tembakau adalah: tomat, cabai, mentimun, terung, buncis, kacang tunggak, dan kacang panjang (Gonzalves dan Garnsey, 1989). Penularan CMV melalui biji dan infeksi pada beberapa tumbuhan liar terbukti memegang peranan penting dalam penyebaran dan perkembangan penyakit di lapang.</p>\r\n<p><strong>Gejala penyakit Virus CMV </strong></p>\r\n<p style=\"text-align: justify;\">Gejala penyakit virus pada populasi tanaman inang merupakan hasil interaksi antara virus, tanaman inang, dan lingkungan. Faktor lain yang berpengaruh adalah campur tangan manusia yang berperan dalam mengubah sistem pertanaman (Akin, 2006). Manusia mempunyai peran yang sangat penting dalam penyebaran penyakit virus dan vektornya. Manusia dapat mempengaruhi patogenisitas virus, kerentanan tanaman terhadap virus maupun vektor dan terhadap lingkungan disekitar pertanaman. Manusia merupakan salah satu media yang sangat penting dalam penyebaran penyakit, karena mempunyai mobilitas yang tinggi sehingga dalam waktu singkat dapat membawa tanaman sekaligus vektor dan penyakitnya ke tempat-tempat yang jauh dalam waktu yang relatif singkat, meskipun harus melalui barier yang sangat keras (Wahyuni, 2005).</p>\r\n<p style=\"text-align: justify;\">Faktor lingkungan fisik yang berpengaruh terhadap perkembangan penyakit virus dan vektornya adalah : 1) curah hujan; 2) Angin; 3) suhu udara; dan 4) jenis tanah dan kelengasannya. Curah hujan sangat berperan dalam perkembangan penyakit virus yang mempunyai vektor soilborne dan airborne Curah hujan di daerah tropika dan sub tropika berkaitan langsung dengan kelembaban udara yang tinggi. Infeksi virus pada tumbuhan lebih banyak terjadi pada musim semi atau hujan. Kelembaban udara yang tinggi menyebabkan jaringan palisade daun memanjang dan teksturnya menjadi lebih lemas. Angin berpengaruh terhadap penyebaran vektor, sehingga virus yang dibawanya bisa lebih cepat menyebar. Suhu dipengaruhi oleh intensitas cahaya dan musim. Musim panas intensitas cahaya sangat tinggi, dan panjang hari lebih lama, keadaan ini menyebabkan daun menjadi lebih tebal dan teksturnya agak keras. Suhu berpengaruh pada pergerakan dan kecepatan memperbanyak diri vektor airborne (Wahyuni, 2005). </p>\r\n<p><strong>Pengendalian penyakit CMV </strong></p>\r\n<p style=\"text-align: justify;\">Sampai sekarang belum ditemukan agensia yang efektif untuk mengobati penyakit virus. Tanaman yang sudah terinfeksi virus sudah tidak mungkin sembuh dari penyakit tersebut, sehingga akan menjadi sumber infeksi bagi tanaman sehat disekitarnya. Seranggga vektor banyak berperan dalam penyebaran penyakit virus yang berasal dari sumber inokulum. Beberapa jenis kutu daun ditularkan secara persisten maupun non persisten. Virus non persisten yang ditularkan oleh kutu daun lebih banyak berperan dalam penularan penyakit virus dengan cara menghisap cairan tanaman yang sudah terserang virus kemudian menularkannya kembali pada tanaman sehat dengan cara menusukkan styletnya sebelum mati. Pengendalian serangga vektor dengan insektisida kimia tidak banyak berpengaruh terhadap pengendalian penyakit virus non persisten. Terkait dengan isu global mengenai residu pestisida pada tanaman, pengendalian penyakit secara kimiawi mempunyai dampak negatif terhadap lingkungan dan mikroorganisme non target. Pengendalian virus yang efektif dan efisien saat ini belum banyak diketahui. Sejauh ini pengendalian virus masih bersifat preventif, yang dilakukan dilakukan secara tidak langsung dengan memadukan beberapa metode yaitu : 1) pencegahan infeksi di lapang misalnya dengan rotasi tanaman dengan tanaman yang bukan inang virus maupun vektornya, menekan populasi vektor, 2) mencegah penyebaran di dalam tanaman misalnya dengan menghilangkan gulma inang, mencegah penularan mekanis, 3) menanam bibit bebas virus, 4) tanam serempak dan 5) proteksi silang. Alternatif pengendalian CMV dengan vaksin Carna-5 sebagai biokontrol.</p>', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>', '2022-07-18 23:29:57', '2022-09-05 11:28:48', 21),
(3, 6, 1, 'Jokowi: Kualitas Benih menjadi Kunci Produksi Beras Nasional Bisa Meningkat', '1658818805-62ce95a8b8914.jpg', '2022-07-25', 'jokowi-kualitas-benih-menjadi-kunci-produksi-beras-nasional-bisa-meningkat', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>\r\n\r\n<p>&quot;Kita tahu bahwa dunia sekarang ini sedang terjadi kekurangan pangan di mana-mana,&quot; kata Jokowi pada Selasa (12/7/2022).</p>\r\n\r\n<p>&nbsp;&quot;Oleh sebab itu, kita harus waspada memastikan bahwa ketersedian pangan masih pada kondisi yang aman,&quot; sambungnya.</p>\r\n\r\n<p>Dari hasil pengamatannya, Jokowi melihat balai padi Kementan selalu menemukan varietas benih padi yang unggul seperti Inpari 32 dan Inpari 42. Menurutnya, kualitas benih menjadi kunci produksi&nbsp;beras&nbsp;nasional bisa meningkat.</p>\r\n\r\n<p>&quot;Kalau betul-betul didampingi oleh Penyuluh Pertanian Lapangan (PPL) yang baik 1 hektar Inpari 32 dan Inpari 42 bisa hasilkan kurang lebih sampai 12 ton, tapi katakanlah 7-8 ton itu sudah sebuah lompatan yng baik bagi stok ketersedian pangan utamanya beras kita,&quot; jelasnya.</p>\r\n\r\n<p>Kendati demikian, Jokowi menekankan untuk tidak hanya bergantung pada beras saja. Kepala Negara melihat banyak jenis pangan lainnya seperti sagu, sorgum, porang, hingga jagung.</p>\r\n\r\n<p>&quot;Ini masih memiliki peluang untuk kita tingkatkan produksinya dan saya yakin karena kita sudah 3 tahun ini tidak impor beras saya yakin swasembada beras kita akan segera kita capai.&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Source:&nbsp;<a href=\"http://www.suara.com/\" rel=\"nofollow\">www.suara.com</a></p>', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>', '2022-07-18 23:29:57', '2022-09-05 11:29:02', 34),
(10, 6, 1, 'Penyakit Cucumber Mosaic Virus (CMV) Pada Tanaman Tembakau', 'cmv2.jpg', '2022-07-25', 'penyakit-cucumber-mosaic-virus-cmv-pada-tanaman-tembakau', '<p style=\"text-align: justify;\">Virus mosaik ketimun adalah virus tanaman yang berbentuk polihedral dengan diameter 28 nm, menginfeksi lebih dari 775 spesies tumbuhan dalam 67 famili dan dapat ditularkan oleh 75 spesies afid secara non-persistent (Murant dan Mayo, 1982). Virus mosaik ketimun mempunyai kisaran inang yang sangat luas, terdapat pada tanaman sayuran, tanaman hias dan tanaman buah-buahan. Selain menyerang tanaman ketimun, virus mosaik ketimun juga dapat menyerang melon, labu, cabai, bayam, tomat, seledri, bit, tanaman polong-polongan, pisang, tanaman famili Crucifereae, delphinium, gladiol, lili, petunia, zinia dan beberapa jenis gulma (Agrios, 1988). Dibeberapa negara, virus mosaik ketimun telah menyebabkan penyakit yang berat pada tanaman tertentu. Virus mosaik ketimun terdapat hampir di semua negara dan strain yang berbeda sifat biologinya telah dilaporkan dari berbagai tempat. Virus mosaik ketimun mempunyai banyak strain, oleh karena itu mempunyai jumlah inang yang banyak serta gejala yang ditimbulkan beragam.</p>\n<p> <strong>Arti ekonomi penyakit virus CMV</strong></p>\n<p style=\"text-align: justify;\">Penyakit virus pada tembakau khususnya gejala mosaik pada umumnya masih kurang disadari kerugian yang ditimbulkannya oleh petani, khususnya pada tembakau rajangan, karena tanaman yang sakit tidak langsung mati dan masih memberikan hasil walaupun kualitasnya menurun. Pada tembakau cerutu penyakit virus menyebabkan kerugian yang cukup besar, karena selain mengurangi produksi juga sangat berpengaruh terhadap mutu daun yang dihasilkan. Daun tembakau yang terserang virus pada umumnya menunjukkan gejala mosaik, berkerut atau menggulung, ukurannya menjadi lebih kecil, rapuh, elastisitas dan daya bakarnya menurun. Menurut Lucas (1975) daun yang terserang penyakit CMV menunjukkan gejala terjadi perubahan warna secara nyata seperti pola mosaik, kebanyakan tanaman kerdil, daun menyempit dan mengalami distorsi. Besarnya kerugian tergantung dari jenis virus yang menyerang, jenis tembakau dan waktu terjadinya infeksi</p>\n<p style=\"text-align: justify;\">Pada pertanaman tembakau virginia di daerah Bojonegoro, areal yang terserang mencapai 25-30%, sehingga diperkirakan kerugian bisa mencapai 5 milyar rupiah. Di Lumajang pada pertanaman tembakau burley terserang penyakit CMV berkisar antara 30-73,5% pada tanaman seri III, sedangkan serangan virus pada tembakau Besuki NO cukup berat, sehingga menimbulkan penurunan produksi sekitar 10%. Berdasarkan dari gejala yang tampak di lapang diduga penyebabnya adalah CMV.</p>\n<p><strong>Bioekologi Virus CMV</strong></p>\n<p style=\"text-align: justify;\">Virus CMV termasuk kedalam Cucumo virus. Zarah virus berbentuk isometrik dengan diameter 30 nm. CMV mempunyai suhu inaktivasi antara 60-750C, dengan titik pengenceran akhir 10-4. Dalam tanaman sakit, virus akan menjadi inaktif setelah disimpan selama 96 jam pada suhu kamar. CMV dapat ditularkan secara mekanis, oleh lebih dari 60 jenis kutu daun secara non-persisten, termasuk Myzus persicae dan Aphis gossypii, serta melalui biji beberapa tanaman inang (Gonzalves dan Garnsey, 1989). CMV termasuk jenis virus yang mempunyai sebaran tanaman inang yang sangat luas dan dapat menyerang 775 jenis tanaman dari 85 famili, termasuk famili Cucurbitaceae, Papilionaceae, Solanaceae dan Cruciferae. Diantara tanaman tersebut yang sering ditemukan berada disekitar tanaman tembakau adalah: tomat, cabai, mentimun, terung, buncis, kacang tunggak, dan kacang panjang (Gonzalves dan Garnsey, 1989). Penularan CMV melalui biji dan infeksi pada beberapa tumbuhan liar terbukti memegang peranan penting dalam penyebaran dan perkembangan penyakit di lapang.</p>\n<p><strong>Gejala penyakit Virus CMV </strong></p>\n<p style=\"text-align: justify;\">Gejala penyakit virus pada populasi tanaman inang merupakan hasil interaksi antara virus, tanaman inang, dan lingkungan. Faktor lain yang berpengaruh adalah campur tangan manusia yang berperan dalam mengubah sistem pertanaman (Akin, 2006). Manusia mempunyai peran yang sangat penting dalam penyebaran penyakit virus dan vektornya. Manusia dapat mempengaruhi patogenisitas virus, kerentanan tanaman terhadap virus maupun vektor dan terhadap lingkungan disekitar pertanaman. Manusia merupakan salah satu media yang sangat penting dalam penyebaran penyakit, karena mempunyai mobilitas yang tinggi sehingga dalam waktu singkat dapat membawa tanaman sekaligus vektor dan penyakitnya ke tempat-tempat yang jauh dalam waktu yang relatif singkat, meskipun harus melalui barier yang sangat keras (Wahyuni, 2005).</p>\n<p style=\"text-align: justify;\">Faktor lingkungan fisik yang berpengaruh terhadap perkembangan penyakit virus dan vektornya adalah : 1) curah hujan; 2) Angin; 3) suhu udara; dan 4) jenis tanah dan kelengasannya. Curah hujan sangat berperan dalam perkembangan penyakit virus yang mempunyai vektor soilborne dan airborne Curah hujan di daerah tropika dan sub tropika berkaitan langsung dengan kelembaban udara yang tinggi. Infeksi virus pada tumbuhan lebih banyak terjadi pada musim semi atau hujan. Kelembaban udara yang tinggi menyebabkan jaringan palisade daun memanjang dan teksturnya menjadi lebih lemas. Angin berpengaruh terhadap penyebaran vektor, sehingga virus yang dibawanya bisa lebih cepat menyebar. Suhu dipengaruhi oleh intensitas cahaya dan musim. Musim panas intensitas cahaya sangat tinggi, dan panjang hari lebih lama, keadaan ini menyebabkan daun menjadi lebih tebal dan teksturnya agak keras. Suhu berpengaruh pada pergerakan dan kecepatan memperbanyak diri vektor airborne (Wahyuni, 2005). </p>\n<p><strong>Pengendalian penyakit CMV </strong></p>\n<p style=\"text-align: justify;\">Sampai sekarang belum ditemukan agensia yang efektif untuk mengobati penyakit virus. Tanaman yang sudah terinfeksi virus sudah tidak mungkin sembuh dari penyakit tersebut, sehingga akan menjadi sumber infeksi bagi tanaman sehat disekitarnya. Seranggga vektor banyak berperan dalam penyebaran penyakit virus yang berasal dari sumber inokulum. Beberapa jenis kutu daun ditularkan secara persisten maupun non persisten. Virus non persisten yang ditularkan oleh kutu daun lebih banyak berperan dalam penularan penyakit virus dengan cara menghisap cairan tanaman yang sudah terserang virus kemudian menularkannya kembali pada tanaman sehat dengan cara menusukkan styletnya sebelum mati. Pengendalian serangga vektor dengan insektisida kimia tidak banyak berpengaruh terhadap pengendalian penyakit virus non persisten. Terkait dengan isu global mengenai residu pestisida pada tanaman, pengendalian penyakit secara kimiawi mempunyai dampak negatif terhadap lingkungan dan mikroorganisme non target. Pengendalian virus yang efektif dan efisien saat ini belum banyak diketahui. Sejauh ini pengendalian virus masih bersifat preventif, yang dilakukan dilakukan secara tidak langsung dengan memadukan beberapa metode yaitu : 1) pencegahan infeksi di lapang misalnya dengan rotasi tanaman dengan tanaman yang bukan inang virus maupun vektornya, menekan populasi vektor, 2) mencegah penyebaran di dalam tanaman misalnya dengan menghilangkan gulma inang, mencegah penularan mekanis, 3) menanam bibit bebas virus, 4) tanam serempak dan 5) proteksi silang. Alternatif pengendalian CMV dengan vaksin Carna-5 sebagai biokontrol.</p>', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>', '2022-07-18 23:29:57', '2022-09-05 11:29:11', 11),
(12, 6, 1, 'Penyakit Kerupuk/ Keriting', 'penkerupuk4.jpg', '2022-07-25', 'penyakit-kerupuk-keriting', '<p>Penyakit kerupuk ini banyak menyerang tanaman tembakau di daerah Tropik, terutama di awal musim kemarau.</p>\r\n\r\n<p><strong>Gejala</strong></p>\r\n<p style=\"text-align: justify;\">Gejala pada tanaman tembakau biasanya diawali dari bentuk daun yang mengkerut dan berubah bentuk . Pada permukaan bawah daun terlihat pertulangan daun menebal dan berwarna hijau tua . Pada stadia generatif, bentuk bakal bunga, dan bunga sedikit menyimpang dan terpelintir, sementara bentuk buahnya menjadi tidak normal. Jika dicabut, akan terlihat sistem perakaran mengecil. Batang akan terlihat lebih pendek dan berbentuk Roset. Keseluruhan tanaman akan terlihat kerdil</p>\r\n<p> </p>\r\n\r\n<p> <strong>Penyebab</strong></p>\r\n<p style=\"text-align: justify;\">Penyakit ini disebabkan oleh tobacco leaf curl virus (TLCV) dari keluarga Geminiviridae, genus Begomovirus yang tidak memiliki amplop (selubung). TLCV termasuk kelompok gemini virus karena zarah virus berbentuk isometrik kembar masing-masing berukuran antara 25–30 mm (Gambar 3).</p>\r\n\r\n\r\n<p><strong>Penularan</strong></p>\r\n<p style=\"text-align: justify;\">TLCV tidak dapat ditularkan secara mekanis melalui sentuhan, penggosokan cairan daun sakit atau melalui benih tanaman sakit, tetapi ditularkan oleh vektor kutu putih Bemisia tabaci (Gambar 4.) secara persisten. Ada juga yang menyebutkan tungau Polyphagotarsonemus latus, dan Thrips Scirtothrips dorsalis.</p>\r\n<p style=\"text-align: justify;\">B. tabaci mampu menularkan virus setelah 30 menit akuisisi. Virus mampu bertahan dalam tubuh vektor 12–17 hari atau bahkan selama sisa hidup serangga tersebut. Namun belum ada laporan virus ini berkembang biak dalam tubuh vektor atau ditularkan jika kutu berganti kulit; ataupun melalui keturunannya. Virus ditularkan melalui penyambungan batang sakit dengan batang yang sehat.</p>\r\n<p><strong>Inang Lain</strong></p>\r\n<p>Cabe, tomat, Leunca, pepaya, crotalaria, kecubung, wijen, babandotan, kembang kertas, patikan kebo, sidaguri, rumput minjangan, dan sawi langit (Gambar 5).</p>\r\n<p><strong>Faktor yang Berpengaruh terhadap Perkembangan Penyakit </strong></p>\r\n<ol>\r\n<li>Meningkatnya populasi B. tabaci terutama pada awal musim kemarau.</li>\r\n<li>Bibit/tanaman muda lebih rentan dibandingkan tanaman tua</li>\r\n<li>Pemupukan N yang berlebihan.</li>\r\n<li>Meningkatkan dosis Pupuk P dan K akan mengurangi keparahan penyakit  </li>\r\n</ol>\r\n<p><strong>Pengendalian</strong></p>\r\n<ol>\r\n<li> Mengendalikan serangga vektor, misalnya dengan asefat atau imidakloprit 2x (saat tanam dan 45 hari setelah tanam).</li>\r\n<li> Menanam bunga matahari atau jarak kepyar sebagai pagar pembatas di sekitar bedengan untuk mencegah B. tabaci.</li>\r\n<li> Menggunakan tanaman resisten</li>\r\n</ol>\r\n\r\n<p style=\"text-align: justify;\">Penyakit virus pada tembakau khususnya gejala mosaik pada umumnya masih kurang disadari kerugian yang ditimbulkannya oleh petani, khususnya pada tembakau rajangan, karena tanaman yang sakit tidak langsung mati dan masih memberikan hasil walaupun kualitasnya menurun. Pada tembakau cerutu penyakit virus menyebabkan kerugian yang cukup besar, karena selain mengurangi produksi juga sangat berpengaruh terhadap mutu daun yang dihasilkan. Daun tembakau yang terserang virus pada umumnya menunjukkan gejala mosaik, berkerut atau menggulung, ukurannya menjadi lebih kecil, rapuh, elastisitas dan daya bakarnya menurun. Menurut Lucas (1975) daun yang terserang penyakit CMV menunjukkan gejala terjadi perubahan warna secara nyata seperti pola mosaik, kebanyakan tanaman kerdil, daun menyempit dan mengalami distorsi. Besarnya kerugian tergantung dari jenis virus yang menyerang, jenis tembakau dan waktu terjadinya infeksi</p>\r\n<p style=\"text-align: justify;\">Pada pertanaman tembakau virginia di daerah Bojonegoro, areal yang terserang mencapai 25-30%, sehingga diperkirakan kerugian bisa mencapai 5 milyar rupiah. Di Lumajang pada pertanaman tembakau burley terserang penyakit CMV berkisar antara 30-73,5% pada tanaman seri III, sedangkan serangan virus pada tembakau Besuki NO cukup berat, sehingga menimbulkan penurunan produksi sekitar 10%. Berdasarkan dari gejala yang tampak di lapang diduga penyebabnya adalah CMV.</p>\r\n<p><strong>Bioekologi Virus CMV</strong></p>\r\n<p style=\"text-align: justify;\">Virus CMV termasuk kedalam Cucumo virus. Zarah virus berbentuk isometrik dengan diameter 30 nm. CMV mempunyai suhu inaktivasi antara 60-750C, dengan titik pengenceran akhir 10-4. Dalam tanaman sakit, virus akan menjadi inaktif setelah disimpan selama 96 jam pada suhu kamar. CMV dapat ditularkan secara mekanis, oleh lebih dari 60 jenis kutu daun secara non-persisten, termasuk Myzus persicae dan Aphis gossypii, serta melalui biji beberapa tanaman inang (Gonzalves dan Garnsey, 1989). CMV termasuk jenis virus yang mempunyai sebaran tanaman inang yang sangat luas dan dapat menyerang 775 jenis tanaman dari 85 famili, termasuk famili Cucurbitaceae, Papilionaceae, Solanaceae dan Cruciferae. Diantara tanaman tersebut yang sering ditemukan berada disekitar tanaman tembakau adalah: tomat, cabai, mentimun, terung, buncis, kacang tunggak, dan kacang panjang (Gonzalves dan Garnsey, 1989). Penularan CMV melalui biji dan infeksi pada beberapa tumbuhan liar terbukti memegang peranan penting dalam penyebaran dan perkembangan penyakit di lapang.</p>\r\n<p><strong>Gejala penyakit Virus CMV </strong></p>\r\n<p style=\"text-align: justify;\">Gejala penyakit virus pada populasi tanaman inang merupakan hasil interaksi antara virus, tanaman inang, dan lingkungan. Faktor lain yang berpengaruh adalah campur tangan manusia yang berperan dalam mengubah sistem pertanaman (Akin, 2006). Manusia mempunyai peran yang sangat penting dalam penyebaran penyakit virus dan vektornya. Manusia dapat mempengaruhi patogenisitas virus, kerentanan tanaman terhadap virus maupun vektor dan terhadap lingkungan disekitar pertanaman. Manusia merupakan salah satu media yang sangat penting dalam penyebaran penyakit, karena mempunyai mobilitas yang tinggi sehingga dalam waktu singkat dapat membawa tanaman sekaligus vektor dan penyakitnya ke tempat-tempat yang jauh dalam waktu yang relatif singkat, meskipun harus melalui barier yang sangat keras (Wahyuni, 2005).</p>\r\n<p style=\"text-align: justify;\">Faktor lingkungan fisik yang berpengaruh terhadap perkembangan penyakit virus dan vektornya adalah : 1) curah hujan; 2) Angin; 3) suhu udara; dan 4) jenis tanah dan kelengasannya. Curah hujan sangat berperan dalam perkembangan penyakit virus yang mempunyai vektor soilborne dan airborne Curah hujan di daerah tropika dan sub tropika berkaitan langsung dengan kelembaban udara yang tinggi. Infeksi virus pada tumbuhan lebih banyak terjadi pada musim semi atau hujan. Kelembaban udara yang tinggi menyebabkan jaringan palisade daun memanjang dan teksturnya menjadi lebih lemas. Angin berpengaruh terhadap penyebaran vektor, sehingga virus yang dibawanya bisa lebih cepat menyebar. Suhu dipengaruhi oleh intensitas cahaya dan musim. Musim panas intensitas cahaya sangat tinggi, dan panjang hari lebih lama, keadaan ini menyebabkan daun menjadi lebih tebal dan teksturnya agak keras. Suhu berpengaruh pada pergerakan dan kecepatan memperbanyak diri vektor airborne (Wahyuni, 2005). </p>\r\n<p><strong>Pengendalian penyakit CMV </strong></p>\r\n<p style=\"text-align: justify;\">Sampai sekarang belum ditemukan agensia yang efektif untuk mengobati penyakit virus. Tanaman yang sudah terinfeksi virus sudah tidak mungkin sembuh dari penyakit tersebut, sehingga akan menjadi sumber infeksi bagi tanaman sehat disekitarnya. Seranggga vektor banyak berperan dalam penyebaran penyakit virus yang berasal dari sumber inokulum. Beberapa jenis kutu daun ditularkan secara persisten maupun non persisten. Virus non persisten yang ditularkan oleh kutu daun lebih banyak berperan dalam penularan penyakit virus dengan cara menghisap cairan tanaman yang sudah terserang virus kemudian menularkannya kembali pada tanaman sehat dengan cara menusukkan styletnya sebelum mati. Pengendalian serangga vektor dengan insektisida kimia tidak banyak berpengaruh terhadap pengendalian penyakit virus non persisten. Terkait dengan isu global mengenai residu pestisida pada tanaman, pengendalian penyakit secara kimiawi mempunyai dampak negatif terhadap lingkungan dan mikroorganisme non target. Pengendalian virus yang efektif dan efisien saat ini belum banyak diketahui. Sejauh ini pengendalian virus masih bersifat preventif, yang dilakukan dilakukan secara tidak langsung dengan memadukan beberapa metode yaitu : 1) pencegahan infeksi di lapang misalnya dengan rotasi tanaman dengan tanaman yang bukan inang virus maupun vektornya, menekan populasi vektor, 2) mencegah penyebaran di dalam tanaman misalnya dengan menghilangkan gulma inang, mencegah penularan mekanis, 3) menanam bibit bebas virus, 4) tanam serempak dan 5) proteksi silang. Alternatif pengendalian CMV dengan vaksin Carna-5 sebagai biokontrol.</p>', '<p>Presiden Joko Widodo atau&nbsp;Jokowi&nbsp;meninjau balai padi milik Kementerian Pertanian di Subang, Jawa Barat. Jokowi ingin memastikan ketersediaan pangan di Indonesia masih dalam kondisi aman di tengah adanya&nbsp;ancaman krisis pangan.</p>', '2022-07-18 23:29:57', '2022-09-05 02:09:15', 13);
>>>>>>> ec655ec7a3fbf958027f6a7ea9d47ca9686776bd

-- --------------------------------------------------------

--
-- Table structure for table `public_info`
--

CREATE TABLE `public_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `public_info`
--

INSERT INTO `public_info` (`id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Core Values ASN BerAkhlak', '<p><img alt=\"\" src=\"http://127.0.0.1:8000/upload/public_info/content/beraklak.jpeg\" style=\"width: 300px; height: 300px;\" /></p>\n\n<p>BerAKHLAK merupakan akronim dari Berorientasi Pelayanan, Akuntabel, Kompeten, Harmonis, Loyal, Adaptif, dan Kolaboratif. Adanya&nbsp;<em>Core Values</em>&nbsp;ASN ini sebagai sari dari nilai-nilai dasar ASN sesuai dengan Undang-Undang No. 5 Tahun 2014 tentang Aparatur Sipil Negara dalam satu kesamaan persepsi yang lebih mudah dipahami dan diterapkan oleh seluruh ASN. Sedangkan #banggamelayanibangsa merupakan&nbsp;<em>Employer Branding&nbsp;</em>ASN jaman&nbsp;<em>now&nbsp;</em>yang melayani sepenuh hati.</p>\n\n<p><em>Core Values&nbsp;</em>ASN menjadi titik tonggak penguatan budaya kerja, yang tidak hanya dilakukan pada ASN tingkat pusat namun juga pada tingkat daerah, sebagaimana pesan Presiden Joko Widodo &ldquo;ASN yang bertugas sebagai pegawai pusat maupun pegawai daerah harus mempunyai&nbsp;<em>core values</em>&nbsp;yang sama.&rdquo;</p>\n\n<p><strong>Panduan</strong>&nbsp;<strong>Perilaku</strong>&nbsp;<em>Core Values&nbsp;</em>ASN BerAKHLAK sebagai berikut:</p>\n\n<p>Berorientasi Pelayanan</p>\n\n<ul>\n	<li>Memahami dan memenuhi kebutuhan masyarakat.</li>\n	<li>Ramah, cekatan, solutif, dan dapat diandalkan.</li>\n	<li>Melakukan perbaikan tiada henti.</li>\n</ul>\n\n<p>Akuntabel</p>\n\n<ul>\n	<li>Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, serta disiplin dan berintegritas tinggi.</li>\n	<li>Menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif dan efisien.</li>\n	<li>Tidak menyalahgunakan kewenangan jabatan.</li>\n</ul>\n\n<p>Kompeten</p>\n\n<ul>\n	<li>Meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah.</li>\n	<li>Membantu orang lain belajar.</li>\n	<li>Melaksanakan tugas dengan kualitas terbaik.</li>\n</ul>\n\n<p>Harmonis</p>\n\n<ul>\n	<li>Menghargai setiap orang apapun latar belakangnya.</li>\n	<li>Suka menolong orang lain.</li>\n	<li>Membangun lingkungan kerja yang kondusif.</li>\n</ul>\n\n<p>Loyal</p>\n\n<ul>\n	<li>Memegang teguh ideologi Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.</li>\n	<li>Setia kepada NKRI serta pemerintahan yang sah.</li>\n	<li>Menjaga nama baik sesama ASN, pimpinan, instansi dan negara, serta menjaga rahasia jabatan dan negara.</li>\n</ul>\n\n<p>Adaptif</p>\n\n<ul>\n	<li>Cepat menyesuaikan diri menghadapi perubahan.</li>\n	<li>Terus berinovasi dan mengembangkan kreativitas.</li>\n	<li>Bertindak proaktif.</li>\n</ul>\n\n<p>Kolaboratif</p>\n\n<ul>\n	<li>Memberi kesempatan kepada berbagai pihak untuk berkontribusi.</li>\n	<li>Terbuka dalam bekerja sama untuk menghasilkan nilai tambah.</li>\n	<li>Menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.</li>\n</ul>\n\n<p>ASN harus mempunyai orientasi untuk memberikan pelayanan terbaik kepada masyarakat.</p>', 'core-values-asn-berakhlak', '2022-08-14 19:05:29', '2022-08-14 19:05:29'),
(2, 'Zona Integritas', '<p><img alt=\"\" src=\"http://127.0.0.1:8000/upload/public_info/content/zona_integritas.jpg\" style=\"width: 300px; height: 100px;\" /></p><h4><strong>A. INDIKATOR PROSES</strong></h4>\r\n<h5><strong>I.   MANJEMEN PERUBAHAN</strong></h5>\r\n<ol>\r\n<li>\r\n<h5><strong><a href=\"/index.php/id/informasi-publik/wbk-wbbm/dokumen\" target=\"_blank\" rel=\"noopener noreferrer\">Tim Kerja</a></strong></h5>\r\n</li>\r\n<li>\r\n<h5><strong><a href=\"https://drive.google.com/open?id=1Knlv2m_oB5W8iwm0s0mUEF12e6bT_Xc_\" target=\"_blank\" rel=\"noopener noreferrer\">Dokumen Rencana Pembangunan ZI</a></strong></h5>\r\n</li>\r\n<li>\r\n<h5><strong><a href=\"https://drive.google.com/open?id=1YQpDUpraAACPVL9rkZ2jKfWCN5iOqf3j\" target=\"_blank\" rel=\"noopener noreferrer\">Pemantauan dan Evaluasi Pembangunan WBK/WBBM</a></strong></h5>\r\n</li>\r\n<li><a href=\"/images/zona_integritas/2018/Out-Bound_Perubahan_Pola_Pikir_dan_budaya_Kerja.jpg\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Perubahan pola pikir dan Budaya Kerja</strong></a></li>\r\n</ol>\r\n<h5><strong>II.  PENATAAN TATA LAKSANA</strong></h5>\r\n<ol>\r\n<li><a href=\"/images/zona_integritas/2018/Sertifikat_ISO_90012015.jpg\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Prosedur Operasional (SOP) Kegiatan Utama</strong></a></li>\r\n<li>E-office</li>\r\n<li>Keterbukaan Informasi Publik</li>\r\n</ol>\r\n<h5><strong>III. PENATAAN SISTEM MANAJEMEN SDM</strong></h5>\r\n<ol>\r\n<li>Perencanaan Kebutuhan Pegawai</li>\r\n<li><a href=\"/images/zona_integritas/2018/Pola_Mutasi_Jabatan.jpg\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Pola Mutasi Internal</strong></a></li>\r\n<li><a href=\"/images/zona_integritas/2018/Pengembangan_Pegawai_berbasis_kompetensi-Diklat_fngsional_peneliti.jpg\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Pengembangan Pegawai Berbasis Kompetensi</strong></a></li>\r\n<li>Penetapan Kinerja Indikator</li>\r\n<li>Penegakan Aturan Disiplin /Kode Etik / Kode Perilaku Pegawai</li>\r\n<li>Sistem Informasi Pegawai</li>\r\n</ol>\r\n<h5><strong>IV   PENGUATAN AKUNTABILITAS</strong></h5>\r\n<ol>\r\n<li>Keterlibatan Pimpinan</li>\r\n<li>Pengelolaan Akuntabilitas Kinerja</li>\r\n</ol>\r\n<h5><strong>V.   PENGUATAN PENGAWASAN</strong></h5>\r\n<ol>\r\n<li><strong>Pengendalian Gratifikasi</strong></li>\r\n<li>Penerapan SPIP</li>\r\n<li>Pengaduan Masyarakat</li>\r\n<li>Whistle Blowing System</li>\r\n<li>Pengawasan Benturan Kepentingan</li>\r\n</ol>\r\n<h5><strong>VI.  PENINGKATAN KUALITAS PELAYANAN PUBLIK</strong></h5>\r\n<ol>\r\n<li>Standar Pelayanan</li>\r\n<li>Budaya Pelayanan Prima</li>\r\n<li>\r\n<h5><strong><a href=\"/index.php/informasi-publik/indeks-kepuasan-masyarakat\" target=\"_blank\" rel=\"noopener noreferrer\">Penilaian Kepuasan Pelayanan</a></strong></h5>\r\n</li>\r\n</ol>\r\n<h4><strong><a href=\"https://drive.google.com/open?id=1YQpDUpraAACPVL9rkZ2jKfWCN5iOqf3j\" target=\"_blank\" rel=\"noopener noreferrer\">B. INDIKATOR HASIL</a></strong></h4>', 'zona-integritas', '2022-08-14 19:05:29', '2022-08-14 19:05:29'),
(1, 'Core Values ASN BerAkhlak', '<h1>Core Values ASN BerAkhlak</h1>\r\n\r\n<h2 itemprop=\"name\">Core Values ASN BerAkhlak</h2>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/upload/public_info/content/20210730_Penjelasan_Berakhlak_1660529098.jpg\" style=\"width: 300px; height: 300px;\" /></p>\r\n\r\n<p>BerAKHLAK merupakan akronim dari Berorientasi Pelayanan, Akuntabel, Kompeten, Harmonis, Loyal, Adaptif, dan Kolaboratif. Adanya&nbsp;<em>Core Values</em>&nbsp;ASN ini sebagai sari dari nilai-nilai dasar ASN sesuai dengan Undang-Undang No. 5 Tahun 2014 tentang Aparatur Sipil Negara dalam satu kesamaan persepsi yang lebih mudah dipahami dan diterapkan oleh seluruh ASN. Sedangkan #banggamelayanibangsa merupakan&nbsp;<em>Employer Branding&nbsp;</em>ASN jaman&nbsp;<em>now&nbsp;</em>yang melayani sepenuh hati.</p>\r\n\r\n<p><em>Core Values&nbsp;</em>ASN menjadi titik tonggak penguatan budaya kerja, yang tidak hanya dilakukan pada ASN tingkat pusat namun juga pada tingkat daerah, sebagaimana pesan Presiden Joko Widodo &ldquo;ASN yang bertugas sebagai pegawai pusat maupun pegawai daerah harus mempunyai&nbsp;<em>core values</em>&nbsp;yang sama.&rdquo;</p>\r\n\r\n<p><strong>Panduan</strong>&nbsp;<strong>Perilaku</strong>&nbsp;<em>Core Values&nbsp;</em>ASN BerAKHLAK sebagai berikut:</p>\r\n\r\n<p>Berorientasi Pelayanan</p>\r\n\r\n<ul>\r\n	<li>Memahami dan memenuhi kebutuhan masyarakat.</li>\r\n	<li>Ramah, cekatan, solutif, dan dapat diandalkan.</li>\r\n	<li>Melakukan perbaikan tiada henti.</li>\r\n</ul>\r\n\r\n<p>Akuntabel</p>\r\n\r\n<ul>\r\n	<li>Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, serta disiplin dan berintegritas tinggi.</li>\r\n	<li>Menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif dan efisien.</li>\r\n	<li>Tidak menyalahgunakan kewenangan jabatan.</li>\r\n</ul>\r\n\r\n<p>Kompeten</p>\r\n\r\n<ul>\r\n	<li>Meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah.</li>\r\n	<li>Membantu orang lain belajar.</li>\r\n	<li>Melaksanakan tugas dengan kualitas terbaik.</li>\r\n</ul>\r\n\r\n<p>Harmonis</p>\r\n\r\n<ul>\r\n	<li>Menghargai setiap orang apapun latar belakangnya.</li>\r\n	<li>Suka menolong orang lain.</li>\r\n	<li>Membangun lingkungan kerja yang kondusif.</li>\r\n</ul>\r\n\r\n<p>Loyal</p>\r\n\r\n<ul>\r\n	<li>Memegang teguh ideologi Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.</li>\r\n	<li>Setia kepada NKRI serta pemerintahan yang sah.</li>\r\n	<li>Menjaga nama baik sesama ASN, pimpinan, instansi dan negara, serta menjaga rahasia jabatan dan negara.</li>\r\n</ul>\r\n\r\n<p>Adaptif</p>\r\n\r\n<ul>\r\n	<li>Cepat menyesuaikan diri menghadapi perubahan.</li>\r\n	<li>Terus berinovasi dan mengembangkan kreativitas.</li>\r\n	<li>Bertindak proaktif.</li>\r\n</ul>\r\n\r\n<p>Kolaboratif</p>\r\n\r\n<ul>\r\n	<li>Memberi kesempatan kepada berbagai pihak untuk berkontribusi.</li>\r\n	<li>Terbuka dalam bekerja sama untuk menghasilkan nilai tambah.</li>\r\n	<li>Menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.</li>\r\n</ul>\r\n\r\n<p>ASN harus mempunyai orientasi untuk memberikan pelayanan terbaik kepada masyarakat.</p>', 'core-values-asn-berakhlak', '2022-08-14 19:05:29', '2022-08-14 19:05:29');

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- Table structure for table `public_info`
--

CREATE TABLE `public_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `public_info`
--

INSERT INTO `public_info` (`id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Core Values ASN BerAkhlak', '<h1>Core Values ASN BerAkhlak</h1>\r\n\r\n<h2 itemprop=\"name\">Core Values ASN BerAkhlak</h2>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/upload/public_info/content/20210730_Penjelasan_Berakhlak_1660529098.jpg\" style=\"width: 300px; height: 300px;\" /></p>\r\n\r\n<p>BerAKHLAK merupakan akronim dari Berorientasi Pelayanan, Akuntabel, Kompeten, Harmonis, Loyal, Adaptif, dan Kolaboratif. Adanya&nbsp;<em>Core Values</em>&nbsp;ASN ini sebagai sari dari nilai-nilai dasar ASN sesuai dengan Undang-Undang No. 5 Tahun 2014 tentang Aparatur Sipil Negara dalam satu kesamaan persepsi yang lebih mudah dipahami dan diterapkan oleh seluruh ASN. Sedangkan #banggamelayanibangsa merupakan&nbsp;<em>Employer Branding&nbsp;</em>ASN jaman&nbsp;<em>now&nbsp;</em>yang melayani sepenuh hati.</p>\r\n\r\n<p><em>Core Values&nbsp;</em>ASN menjadi titik tonggak penguatan budaya kerja, yang tidak hanya dilakukan pada ASN tingkat pusat namun juga pada tingkat daerah, sebagaimana pesan Presiden Joko Widodo &ldquo;ASN yang bertugas sebagai pegawai pusat maupun pegawai daerah harus mempunyai&nbsp;<em>core values</em>&nbsp;yang sama.&rdquo;</p>\r\n\r\n<p><strong>Panduan</strong>&nbsp;<strong>Perilaku</strong>&nbsp;<em>Core Values&nbsp;</em>ASN BerAKHLAK sebagai berikut:</p>\r\n\r\n<p>Berorientasi Pelayanan</p>\r\n\r\n<ul>\r\n	<li>Memahami dan memenuhi kebutuhan masyarakat.</li>\r\n	<li>Ramah, cekatan, solutif, dan dapat diandalkan.</li>\r\n	<li>Melakukan perbaikan tiada henti.</li>\r\n</ul>\r\n\r\n<p>Akuntabel</p>\r\n\r\n<ul>\r\n	<li>Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, serta disiplin dan berintegritas tinggi.</li>\r\n	<li>Menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif dan efisien.</li>\r\n	<li>Tidak menyalahgunakan kewenangan jabatan.</li>\r\n</ul>\r\n\r\n<p>Kompeten</p>\r\n\r\n<ul>\r\n	<li>Meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah.</li>\r\n	<li>Membantu orang lain belajar.</li>\r\n	<li>Melaksanakan tugas dengan kualitas terbaik.</li>\r\n</ul>\r\n\r\n<p>Harmonis</p>\r\n\r\n<ul>\r\n	<li>Menghargai setiap orang apapun latar belakangnya.</li>\r\n	<li>Suka menolong orang lain.</li>\r\n	<li>Membangun lingkungan kerja yang kondusif.</li>\r\n</ul>\r\n\r\n<p>Loyal</p>\r\n\r\n<ul>\r\n	<li>Memegang teguh ideologi Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.</li>\r\n	<li>Setia kepada NKRI serta pemerintahan yang sah.</li>\r\n	<li>Menjaga nama baik sesama ASN, pimpinan, instansi dan negara, serta menjaga rahasia jabatan dan negara.</li>\r\n</ul>\r\n\r\n<p>Adaptif</p>\r\n\r\n<ul>\r\n	<li>Cepat menyesuaikan diri menghadapi perubahan.</li>\r\n	<li>Terus berinovasi dan mengembangkan kreativitas.</li>\r\n	<li>Bertindak proaktif.</li>\r\n</ul>\r\n\r\n<p>Kolaboratif</p>\r\n\r\n<ul>\r\n	<li>Memberi kesempatan kepada berbagai pihak untuk berkontribusi.</li>\r\n	<li>Terbuka dalam bekerja sama untuk menghasilkan nilai tambah.</li>\r\n	<li>Menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.</li>\r\n</ul>\r\n\r\n<p>ASN harus mempunyai orientasi untuk memberikan pelayanan terbaik kepada masyarakat.</p>', 'core-values-asn-berakhlak', '2022-08-14 19:05:29', '2022-08-14 19:05:29');

-- --------------------------------------------------------

--
>>>>>>> ec655ec7a3fbf958027f6a7ea9d47ca9686776bd
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `redirect_to`, `created_at`, `updated_at`) VALUES
(1, 'admin', '/admin/dashboard', '2022-07-12 20:57:04', '2022-07-12 20:57:04'),
(2, 'user', '/home', '2022-07-12 20:57:04', '2022-07-12 20:57:04'),
(3, 'pegawai', '/admin', '2022-07-12 20:57:04', '2022-07-12 20:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9aHQbHTEZcG0RpikNo6gEaIN3VIRzzrTJzqiLs1p', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVU15dVdUMDBaMllQQm5RRzI4YUpYTlNQZU81czFyNXFlTjVVMmRYNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1657609516),
('I1byMUG58PtGhwPMJe7dyXUatyvnJ2DZKhcMxNLW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTRlUFZoSzlkZVRuaklpeDNQNHBhN0poNWlybjAzaVhHN3FQRFFWTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1657598638),
('MuTxuTdAS2azGcDZkqFhYwxv9xFStMeqgrUuAxxd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibTJXckkxUXVBajhWZkdJYVZFS0o0S01menE4cnlMNlY4NUNzalRBVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1657612519),
('xkplqef99gdTFtagLOaOaD8Kw6n86KFfdb6IETh7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicUxINlJYME96TVhscXBMUFBiOVJRbzk1N2NyMjdpdEdyMlFDbzBDNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdXVyUUJzQW5RYi5UeEQwb2ozY3BLZWJ4UTgxanhJQktYbVBWVDIwWUEyNHdxRUo4blFvVDIiO30=', 1657597188);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `phone`, `desc`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'admin', 'Adminn', 'Magang', 'admin@app.com', NULL, '$2y$10$aR7V9VMXDK3SiiKEYDb8q.dWHaR1iXbxle0u3r/HO0tSaPob6Hpxm', '0808886', '<p>dsada</p>', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 19:01:30', '2022-08-07 19:19:47', 1),
(10, 'pgwe', '', '', 'pgwe@mail.com', NULL, '$2y$10$oA01kzUn6qyMuVSTVhTta.bZhevISR5gKSlOzAa7wQBfCTymSwerW', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-03 21:46:23', '2022-08-03 21:46:23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `variety`
--

CREATE TABLE `variety` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variety`
--

INSERT INTO `variety` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pemanis', 'pemanis', '2022-07-27 20:02:25', '2022-07-27 20:02:25'),
(2, 'Tembakau', 'tembakau', '2022-07-27 20:02:43', '2022-07-27 20:02:43'),
(3, 'Serat Buah', 'serat-buah', '2022-07-27 20:02:50', '2022-07-27 20:02:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_variety`
--
ALTER TABLE `data_variety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `variety`
--
ALTER TABLE `variety`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_variety`
--
ALTER TABLE `data_variety`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
<<<<<<< HEAD
=======
<<<<<<<< HEAD:db/balittas (1).sql

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `public_info`
--
ALTER TABLE `public_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public_info`
--
ALTER TABLE `public_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `variety`
--
ALTER TABLE `variety`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
========
>>>>>>>> ec655ec7a3fbf958027f6a7ea9d47ca9686776bd:db/balittas3.sql
>>>>>>> ec655ec7a3fbf958027f6a7ea9d47ca9686776bd
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
