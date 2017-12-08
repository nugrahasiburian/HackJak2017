-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 08 Des 2017 pada 06.41
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `hackjak2017`
--
CREATE DATABASE IF NOT EXISTS `hackjak2017` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hackjak2017`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kota` int(11) NOT NULL,
  `nama_area` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `area`
--

INSERT INTO `area` (`id`, `id_kota`, `nama_area`) VALUES
(1, 1, 'Kampus UNIMED'),
(2, 1, 'Kampus USU'),
(3, -1, 'SION Pusat'),
(4, 1, 'Kampus UMI UNIKA\r\n'),
(5, 3, 'Kampus ITB'),
(6, 3, 'Kampus Maranatha'),
(7, 8, 'Jimbaran'),
(8, 8, 'Denpasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `times` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `id_user`, `cover_image`, `title`, `content`, `author`, `times`) VALUES
(1, 0, '/sion_ministry/default_assets/kcfinder/upload/images/image-2.jpg', 'Kasih Yesus', '<p>Mungkin salib Yesus merupakan tragedi yang paling besar sepanjang sejarah. Namun bagi orang percaya, salib Yesus adalah sukacita terbesar yang pernah ada. Ya. Saat Yesus mati di kayu salib, tabir Bait Suci terbelah dua (Matius 27:51) menandakan bahwa tidak ada lagi penghalang antara manusia dengan Bapa di surga. Allah rela meninggalkan tempat kudus-Nya untuk menemui umat manusia yang berdosa.</p>\n\n<p>Bisa kamu bayangkan? Betapa besar, panjang, lebar, dan dalamnya kasih Allah buat hidupmu? Saat ini kita dengan mudah bisa memejamkan mata, melipat tangan, kemudian berdoa.</p>\n\n<blockquote>\n<h2 style="font-style:italic">Hanya mengaku dengan mulut untuk meminta pengampunan dosa. Cukup dengan masuk ke dalam kamar dan kemudian berbincang-bincang dengan Bapa. Semuanya itu bisa kita lakukan didahului dengan pengorbanan Yesus di kayu salib. Yesus adalah gambaran kasih yang sempurna.</h2>\n</blockquote>\n\n<p>His cross is the greatest of all romance. (VLS)</p>\n', 'Parlin Sianipar', '2017-05-13 14:50:52'),
(3, 0, '', 'Jadi Apakah Kita Perlu Menanggapi Panggilan Tuhan dengan Serius?', '<p>Seorang hamba Tuhan pernah berkata: Tempat yang paling berbahaya adalah di tengah-tengah jalan.</p>\r\n\r\n<p>Wahyu 3:16 pun menuliskan: Jadi karena engkau suam-suam kuku, dan tidak dingin atau panas, Aku akan memuntahkan engkau dari mulut-Ku.</p>\r\n\r\n<p>Iblis paling senang apabila kita menjadi orang-orang medioker. Menjadi kambing yang pura-pura sebagai domba atau menjadi domba yang seumur hidup bertingkah laku sebagai kambing. Dia dengan pandainya berkata, &ldquo;Tidak usahlah terlalu serius, cukuplah ke gereja, beri persembahan. Untuk apa PI, pemuridan, dan misi? Itu terlalu berlebihan. Tuh lihat teman-temanmu satu jurusan. Yang lain juga begitu kan? Kamu mau dianggap gila?&rdquo;</p>\r\n\r\n<p>Tapi Tuhan berkata, &ldquo;Aku akan muntahkan engkau,&rdquo; atau bahasa seriusnya, &ldquo;Karena engkau mendua hati, maka Aku anggap engkau sebagai kambing.&rdquo; TUHAN TIDAK KENAL&nbsp;GREY AREA.&nbsp;Apakah Tuhan, atau dunia ini? Pilih salah satu. Yang 50%-50% atau bahkan yang 99% ikut Tuhan dan 1% dunia, dianggap 100% dimuntahkan.</p>\r\n\r\n<p>Jadi apakah kita perlu menanggapi Tuhan dengan serius?</p>\r\n\r\n<p>Tentu saja serius! Mengapa?</p>\r\n\r\n<ol>\r\n	<li><strong>KARENA YESUS MATI DENGAN SERIUS BAGI KITA</strong></li>\r\n</ol>\r\n\r\n<p>Kematian dengan cara disalibkan adalah salah satu cara kematian yang paling mengerikan yang pernah didesain oleh manusia, karena tiga hal:</p>\r\n\r\n<ul>\r\n	<li>Kematian dengan rasa malu.</li>\r\n</ul>\r\n\r\n<p>Pada masa pemerintahan Romawi, ada begitu banyak cara yang digunakan untuk mendatangkan kematian kepada orang lain. Mereka tahu bagaimana cara menghukum mati orang dengan biaya yang sangat murah. Ada orang yang dirajam, dibunuh dengan pedang, dibakar dengan api, dipukul sampai mati. Salib di lain sisi memerlukan empat tentara dan seorang perwira sebagai pengawas. Mereka perlu menyiapkan kayu salib dan tentara untuk menjaga orang yang tersalib memikul salibnya sampai ke luar kota, dimana dia harus mati. Biayanya mahal.</p>\r\n\r\n<p>Jadi penyaliban dilakukan bukan hanya untuk mengeksekusi mati, tapi juga untuk mempermalukan orang tereksekusi dan menjadikannya contoh bagi bangsa yang dijajah mengenai upah pemberontakan terhadap Kerajaan Roma. Seorang yang disalib akan tergantung di udara, dalam keadaan sepenuhnya telanjang dan menjadi tontonan banyak orang.</p>\r\n\r\n<p>Ini kematian yang tidak tanggung-tanggung. Ini kematian yang begitu serius. Berapa banyak dari kita yang rela mati dalam keadaan telanjang dan dipermalukan bagi orang lain? Kenapa Raja Segala Semesta memilih kayu salib sebagai wahana kematian-Nya? Harga yang Dia tanggung meliputi semua rasa malu yang harusnya kita tanggung karena dosa. Di kayu salib, Yesus seakan-akan hendak berkata, &ldquo;Inilah semua yang rela Aku tanggung karena Aku mengasihimu. Aku benar-benar SERIUS mengasihimu.&rdquo;</p>\r\n\r\n<ul>\r\n	<li>Kematian secara perlahan-lahan.</li>\r\n</ul>\r\n\r\n<p>Salib diciptakan di Persia dan disempurnakan oleh Kerajaan Romawi sebagai metode yang memaksimalkan rasa sakit dalam periode waktu yang cukup panjang. Salib biasanya diperuntukkan hanya untuk budak dan penjahat yang paling keji. Ada hukum Romawi yang melarang penyaliban digunakan untuk mereka yang merupakan warga negara kerajaan.</p>\r\n\r\n<p>Seseorang yang disalib akan mati secara perlahan-lahan. Sering sekali proses ini memakan waktu belasan jam sampai dengan 2-3 hari. Mereka yang disalibkan mati oleh karena efek tercekik yang disebabkan kondisi penyaliban. Tubuh yang disalib mengalami dua kesulitan: kesulitan dalam menopang tubuh dan kesulitan dalam bernafas akibat bagian dalam yang mengalami tekanan. Ketika seseorang yang disalib mengalami kesulitan bernafas, dia berusaha menaikkan posisi tubuhnya yang melorot akibat gaya gravitasi dengan kakinya yang terpaku. Tapi tidak lama, kaki yang terpaku itu akan begitu sakit, sampai tubuhnya akan melorot lagi dan seluruh beban tubuhnya berpindah ke tangan yang terentang. Posisi tubuh seperti ini akan mencekik paru-parunya dan dia berhenti bernafas. Maka berulang kali dia akan berpindah dari posisi satu ke yang lain, sampai dia terlalu lelah, dan kemudian mati tercekik atau mengalami kegagalan jantung.</p>\r\n\r\n<ul>\r\n	<li>Kematian yang begitu menyakitkan.</li>\r\n</ul>\r\n\r\n<p>Kematian di kayu salib begitu menyakitkan. Kata &ldquo;excruating&rdquo;yang bermakna penderitaan atau sakit yang begitu mengerikan datang dari bahasa Latin : ex dan cruciate, yang berarti karena salib. Sebelumnya, Yesus juga mengalami hemohidrosi dimana kapiler pembuluh darahnya pecah dalam doa di Gethsemane, Dia harus berjalan 2,5 mil ketika Dia diadili, tidak tidur semalaman, melalui 6 kali pengadilan, dipukuli, dihajar dan diejek sepanjang malam, kemudian Dia dicambuk 39 kali menggunakan flagrum, suatu cambuk yang ditempeli tulang dan besi yang tajam (sering sekali banyak yang mati dalam proses pencambukan ini). Kemudian kepala-Nya dimahkotai duri sepanjang 1-2 inci dan prajurit Romawi terus-menerus memukuli-Nya di kepala yang menyebabkan pendarahan yang hebat lewat kepala. Di dalam perjalanan-Nya ke Golgota, Dia terus-menerus dipukuli sampai wajah-Nya begitu rusak. Melalui via Dolorosa, sepanjang 650 yard, Yesus perlu mengangkat salib-Nya dengan berat 40-55 kg ke atas bukit.</p>\r\n\r\n<p>Dalam penyaliban-Nya, prajurit Romawi menggunakan paku sepanjang 5-7 inchi dan menyebabkan rasa sakit yang tidak bisa diredakan oleh morfin sekalipun. Dan selama 18 jam penderitaan ini, Yesus tetap bisa melepaskan diri dari semuanya ini. Kita harus mengingat bahwa Dia menolak pembelaan dari Herodes dan Pilatus, Dia tidak mendatangkan 12 pasukan malaikat untuk membela-Nya, Dia menolak anggur yang menghilangkan kesadaran-Nya, dan Dia mati karena jantung yang pecah (&ldquo;a broken heart&rdquo;). Di dalam keTuhanan-Nya, Yesus memilih sendiri untuk menyerahkan nyawa-Nya.</p>\r\n\r\n<p>Yesus tidak setengah-setengah dalam kematian-Nya. Kematian-Nya adalah kematian yang begitu serius, menepati seluruh nubuatan Nabi mengenai Mesias yang menderita. Apakah menurutmu kematian-Nya adalah kematian yang paling serius yang pernah ada? Sebesar itulah besar cinta-Nya kepadamu. Kalau begitu apa yang engkau lakukan karena cintamu kepada-Nya? Apakah cintamu benar-benar cinta yang serius?</p>\r\n\r\n<ol>\r\n	<li><strong>KARENA YESUS MENGALAHKAN MAUT DENGAN SERIUS UNTUK KITA</strong></li>\r\n</ol>\r\n\r\n<p>Apa jadinya kalau kebangkitan-Nya adalah suatu candaan? Alkitab berkata :</p>\r\n\r\n<p>1 Korintus 15:17-19</p>\r\n\r\n<p>Dan jika Kristus tidak dibangkitkan, makasia-sialah kepercayaan kamu dan kamu masih hidup dalam dosamu. Demikianlah binasa juga orang-orang yang mati dalam Kristus. Jikalau kita hanya dalam hidup ini saja menaruh pengharapan pada Kristus, maka kita adalah orang-orang yang paling malang dari segala manusia.</p>\r\n\r\n<p>Apabila kebangkitan Kristus adalah candaan, maka kita adalah yang paling malang dari segala manusia. Tanpa kebangkitan Kristus, maka semua manusia akan binasa. Tidak ada pengharapan, semua yang kita percaya adalah sia-sia.</p>\r\n\r\n<p>Kebangkitan-Nya adalah kebangkitan yang serius. Apakah kita mau benar-benar serius mempercayai ini, bahwa Dia sudah menang atas dosa dan maut? Apakah kita mau mati terhadap manusia lama kita secara serius, supaya kita menikmati kuasa dalam kebangkitan-Nya?</p>\r\n\r\n<ol>\r\n	<li><strong>KARENA DIA AKAN BENAR-BENAR SERIUS MEMERINTAH UNTUK SELAMA-LAMANYA</strong></li>\r\n</ol>\r\n\r\n<p>Penghakiman-Nya akan menjadi penghakiman yang benar-benar serius. Setiap orang suka atau tidak suka, suatu saat akan menghadapi penghakiman ini. Mereka yang benar-benar serius akan perkataan-Nya dihitung sebagai domba dan mereka yang tidak serius akan dihitung sebagai kambing.</p>\r\n\r\n<p>Kita hanya punya satu kesempatan menjalani hidup. Setelah itu kita harus mempertanggung-jawabkan bagaimana cara kita menjalani kehidupan di bumi ini. Di depan tahta penghakiman, tidak ada lagi yang akan berkata, &ldquo;Maaf, Tuhan, aku tidak serius kok akan segala dosa-dosaku, mohon ujian ulangan.&rdquo;</p>\r\n\r\n<p>Sebelum saat itu tiba, kita perlu memastikan bahwa kita benar-benar serius menjalani panggilan Tuhan selama kita di bumi ini.</p>\r\n', 'Ps. Parlin Sianipar (Gembala Sion Ministry)', '2017-05-13 08:23:55'),
(4, 0, '/sion_ministry/default_assets/kcfinder/upload/medan/pengajaran/images/Chrysanthemum.jpg', '‘PEMBOROSAN’ YANG DISENANGI TUHAN', '<p>Makan</p>\r\n\r\n<p>Tidak semua hal dalam hidup ini bisa dibeli dengan uang. Kita kadang tertipu dengan mengukur segalanya berdasarkan uang. Bahkan kadang-kadang pemikiran yang salah ini kita bawa dalam melayani Tuhan. Kita berpikir bahwa pelayanan pada-Nya bisa digantikan dengan besarnya uang yang kita berikan untuk persembahan. Kita berpikir bahwa bekerja dan mencari uang supaya bisa memberikan lebih banyak persembahan bisa menjadi alasan yang Tuhan terima saat kita ditanya mengapa kita tidak melayani Dia. Lebih parahnya lagi kita bahkan kita berpikir bahwa uang bisa menggantikan ketaatan. Saya pernah berpikir demikian. Setelah saya lulus kuliah, dalam saat teduh saya Tuhan menyampaikan arahan untuk saya tetap di Bandung selama 1 tahun untuk memuridkan mahasiswa-mahasiswa di Bandung. Tapi hati saya enggan. Yang saya tahu kalau saya kerja di Bandung jelas bahwa gajinya tidak akan sebesar kalau saya melemparkan diri ke Jakarta atau ke kota-kota lainnya. Dan saya mulai menolak arahan itu. Karena ketaatan yang ditunda adalah sebuah ketidaktaatan. Tiba-tiba ada suatu &ldquo;arahan&rdquo; dalam pikiran saya yang terdengar cukup &ldquo;rohani&rdquo;. &ldquo;Kamu kerja saja di perusahaan yang kamu mau, yang gajinya besar. Nanti dari situ kamu tabur uangmu saja yang banyak untuk pekerjaan pelayanan. Kan pelayanan juga butuh uang kan untuk operasional. Sama saja kok kamu melayani atau kamu menabur saja. Nanti kalau sudah beberapa tahun kerja, baru kamu resign dan saat itu kamu kan punya cukup uang kemanapun Tuhan suruh kamu.&rdquo; &ldquo;Wew, bener juga,&rdquo; pikir saya. Lalu saya tiba-tiba sadar bahwa itu bukanlah ide Roh Kudus. Itu hanya akal-akalan iblis saja supaya saya tidak taat. Ia mencoba meyakinkan saya untuk menukarkan ketaatan saya dengan segepok uang untuk ditawarkan kepada Tuhan. Saya akhirnya langsung memutuskan untuk mengenyahkan pikiran itu dan memilih untuk taat. Saya stay di Bandung. Ya, saat itu juga. Kenapa? Karena ketaatan yang ditunda adalah sebuah ketidaktaatan. Pikiran ini juga menyerang murid-murid. Mereka pikir Tuhan lebih disenangkan saat diberikan uang segepok untuk menunjang operasional pelayanan &lsquo;Yesus dan 12 murid&rsquo;. Tapi perhatikan, Tuhan sama sekali tidak terkesan dengan ide murid-murid. Ketika Yesus berada di Betania, di rumah Simon si kusta, datanglah seorang perempuan kepada-Nya membawa sebuah buli-buli pualam berisi minyak wangi yang mahal. Minyak itu dicurahkannya ke atas kepala Yesus, yang sedang duduk makan. Melihat itu murid-murid gusar dan berkata: &ldquo;Untuk apa pemborosan ini? Sebab minyak itu dapat dijual dengan mahal dan uangnya dapat diberikan kepada orang-orang miskin.&rdquo; Tetapi Yesus mengetahui pikiran mereka lalu berkata: &ldquo;Mengapa kamu menyusahkan perempuan ini? Sebab ia telah melakukan suatu perbuatan yang baik pada-Ku. Karena orang-orang miskin selalu ada padamu, tetapi Aku tidak akan selalu bersama-sama kamu. Sebab dengan mencurahkan minyak itu ke tubuh-Ku, ia membuat suatu persiapan untuk penguburan-Ku. Aku berkata kepadamu: Sesungguhnya di mana saja Injil ini diberitakan di seluruh dunia, apa yang dilakukannya ini akan disebut juga untuk mengingat dia.&rdquo; Matius 26:6-13 Pikiran murid-murid merefleksikan pikiran orang Kristen kebanyakan saat ini. Mereka menganggap bahwa wanita ini berlebihan melayani Tuhan. Terlalu fanatik. Terlalu radikal. Ngapain sih pemborosan seperti itu? Murid-murid dengan cepat menghitung dalam otaknya nilai pemborosan itu dan mulai berkata, &ldquo;Ngapain sih kayak gitu? Padahal kalau dia jual itu, bisa untuk melayani orang-orang miskin.&rdquo; Atau bahasa modernnya kira-kira seperti ini. &ldquo;Ah kamu kan sudah lulus kuliah, kamu kerja keras saja nanti kamu bisa kasih persembahan yang banyak untuk pelayanan. Ga perlu lah memuridkan atau pelayanan lagi.&rdquo; &ldquo;Ngapain sih sefanatik itu? Jadi orang Kristen yang &lsquo;normal&rsquo; aja lah. Tuh liat kayak si itu tuh dia ga pelayanan, tapi bisa nyumbang besar untuk gereja.&rdquo; Namun Yesus sama sekali menolak pemikiran murid-murid itu. Yesus dengan jelas mengatakannya: ia telah melakukan suatu perbuatan yang baik pada-Ku. Yesus disenangkan. Ia begitu terkesan dengan pemberian wanita ini. Ia terkesan dengan sikap wanita ini yang sungguh-sungguh ingin menyenangkan hati-Nya. Saya yakin wanita ini tidak tiba-tiba punya pemikiran untuk mencurahkan minyak wangi yang merupakan upah setahun kerjanya ini kepada Yesus. Saya yakin Roh Kudus yang menaruhkan keinginan itu di hatinya. Mungkin waktu ide itu muncul, ia menolaknya. Takut dianggap aneh, takut dianggap bodoh oleh dunia. Mungkin juga ia punya pemikiran sama seperti murid-murid, &ldquo;Ah kan bisa saja aku jual lalu aku berikan ke bendahara pelayanan &ldquo;Yesus dan 12 murid. Sama saja kan, toh untuk menunjang operasional pelayanan.&rdquo; Tapi apa yang dia lakukan pada akhirnya? Akhirnya dia memilih taat dan mendengarkan arahan Roh Kudus dalam hatinya. Dia melangkah dan mencurahkan minyak wangi itu yang melambangkan seluruh hidupnya kepada Yesus. Itulah ketaatan. Perhatikan baik-baik, setiap kita memiliki arahan/panggilan tertentu yang spesifik dari Tuhan. Dalam konteks ini, wanita ini dipanggil oleh Roh Kudus untuk langsung mengurapi Yesus. Namun ada konteks lain di mana orang-orang dipanggil untuk melayani dengan kekayaan mereka. Tapi tujuannya semua untuk penggenapan pemberitaan Injil ke seluruh dunia (Matius 24:14). Saat Tuhan meminta ketaatanmu untuk suatu hal tertentu, jangan berpikiran untuk memberikan aternatif pilihan lain kepada Tuhan. Dia tak akan berkenan. Kalau Tuhan mau kamu jadi fulltimer, jangan ditawar menjadi mau bekerja di perusahaan sambil tetap melayani Tuhan. Kalau Tuhan mau kamu bekerja secara profesional sambil melayani Tuhan, jangan ditawar jadi fulltimer. Lakukanlah TEPAT seperti yang Ia mau. Mungkin saat ini Tuhan memanggilmu untuk mulai meresikokan dirimu dan mulai melayani Dia. Lakukanlah. Memang akan ada &ldquo;murid-murid&rdquo; atau orang-orang Kristen di sekitarmu yang akan menganggap itu &ldquo;pemborosan&rdquo;. Mereka akan mulai menawarkan alternatif &lsquo;aman&rsquo;. Lupakan itu semua, dengarkan apa kata Roh Kudus. Minta peneguhan Firman Tuhan. Tetapi jawab Samuel: &ldquo;Apakah TUHAN itu berkenan kepada korban bakaran dan korban sembelihan sama seperti kepada mendengarkan suara TUHAN? Sesungguhnya, mendengarkan lebih baik dari pada korban sembelihan, memperhatikan lebih baik dari pada lemak domba-domba jantan. (1 Samuel 15:22) Jangan mau digoyahkan dari panggilan Allah karena tawaran harta, popularitas, jabatan. Itu semua akan berlalu dan lenyap, tapi orang yang melakukan kehendak Tuhan akan hidup selama-lamanya. Dunia ini sedang lenyap dengan keinginannya, tetapi orang yang melakukan kehendak Allah hidup selama-lamanya. (1 Yohanes 2:17) Ada satu lirik lagu yang saya dengar di radio dan sangat memberkati saya, judulnya Tahta di hatiku. &ldquo;Tak penting bagiku harta dunia, bila jiwa ini terhilang dan ku jauh dari-Mu Karna bagiku Kaulah harta terindah Apa artinya tahta dunia, bila jiwa ini terhilang dan Kau jauh dariku Karna bagiku Kaulah tahta di hatiku&rdquo; Be a man God wants you to be. Be brave!</p>\r\n', 'Corelya Erindah Aristia (Sion 2010)', '2017-05-20 08:39:48'),
(5, 0, '', 'MAHASISWA ADALAH PANAH KRISTUS', '<p><em>Mazmur 127:4&nbsp; Seperti anak-anak panah di tangan pahlawan, demikianlah anak-anak pada masa muda.</em></p>\r\n\r\n<p>Melintasi banyak kota di negeri ini dan mengabdikan hidup untuk sebuah tujuan yang tak lazim bagi seorang muda tidaklah mungkin merupakan sesuatu yang pernah terpikirkan apalagi direncanakan selama belasan tahun kehidupan. Sejak kanak-kanak kita tentu berpikir tentang kehidupan yang makmur dan bahagia sehingga pikiran dan rencana &ndash; rencana kita akan selalu di-<em>drive</em>&nbsp;oleh motivasi demikian. Kita juga menyadari betapa masyarakat kontemporer bergerak dengan kecepatan yang luar biasa &ndash; begitu cepatnya sampai-sampai kita tidak sempat lagi berpikir tentang orang lain, melayani dan mengasihi. Sebuah penelitian mengeluarkan sebuah statement bahwa pendidikan anak-anak di generasi ini dirancang untuk mempersiapkan mereka bagi jenis pekerjaan yang bahkan belum ada pada masa ini. Betapa cepatnya kehidupan berjalan. Sibuk adalah kata yang tepat untuk memaknai zaman ini. Sebuah zaman di mana kita menghadapi generasi baru yang sangat egosentrik di era postmodern. Generasi ini telah terhilang jauh lebih cepat dan&nbsp;<em>massive</em>, dunia ini kian tercemplung jauh ke dalam dosa dengan kecepatan yg tak terbayangkan dari yang sudah-sudah.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt="" src="/sion_ministry/default_assets/kcfinder/upload/images/pnjm.JPG" style="height:263px; width:394px" /></p>\r\n\r\n<p>Suatu kali saya berbincang dengan seorang dosen teologi saya: &ldquo;&nbsp;<em>Indonesia ada di hati Tuhan dan Dia terlebih rindu untuk kemuliaan-Nya memenuhi bangsa yang besar ini. Mahasiswa adalah anak &ndash;anak panah Kristus yang akan bangkit untuk visi itu .</em>&ldquo; Mendengar perkataan saya, beliau dengan murung mengatakan: &ldquo;<em>Setiap kali saya juga memikirkan hal yang sama bahwa orang &ndash; orang muda adalah harapan untuk kegerakan, tapi hingga kini saya semakin merasakan mereka lebih sukar untuk dipengaruhi dengan nilai &ndash;nilai dan tujuan ilahi. Betapa sukarnya membalikkan orang &ndash; orang muda masa kini dari jalan para oportunis.&rdquo;&nbsp;</em></p>\r\n\r\n<p>Dalam kesempatan yang berbeda seorang dosen yang lain mengatakan: &ldquo;<em>Saya pernah berada dalam suatu masa dan melihat sekumpulan besar mahasiswa &ndash; mahasiswa Bandung itu begitu militan dan terjual habis untuk Tuhan. Tapi, nampaknya orang &ndash; orang seperti merekau sudah langka sekali.</em>&rdquo;</p>\r\n\r\n<p>Ada kesamaan yang terlihat di dalam pikiran banyak pelayan Tuhan ini bahwa mereka setuju mahasiswa adalah kesempatan yg paling besar untuk kegerakan, namun celakanya mahasiswalah (atau paling tidak pada rentang usia mahasiswa) yang paling terhilang di antara yang terhilang. Kita tentu ingat istilah&nbsp;<em>13-30 window</em>&nbsp;(suku orang muda) yang dicetus oleh Jim Yost. Di kota &ndash; kota bahkan ke propinsi paling tertinggal sekalipun, mahasiswalah yang paling teracuni dan terikat di dalam dosa. Sepertinya, gagasan yang diharapkan bisa berhasil mengubah mahasiswa&nbsp; adalah lewat pengajaran induktif. Itu mengapa kebanyakan pelayanan melakuan seminar &ndash; seminar, kelas &ndash; kelas, orientasi &ndash; orientasi, games &ndash; games dll. Saya tidak mengatakan bahwa ini salah. Situasinya adalah bahwa walaupun semua ini telah dilakukan dengan baik, kegelisahan &ndash; kegelisahan ini secara nyata berkecamuk di hati pelayan &ndash; pelayan Tuhan ini. Barangkali kegelisahan seorang pemimpin salah satu lembaga pelayanan mahasiswa di ITB ini lebih mencengangkan kita. Kegelisahannya terungkap lewat perkataannya bahwa betapa frustasinya melayani angkatan &ndash; angkatan belakangan ini. Betapa tidak, dahulu LP ini besar dengan komsel &ndash; komselnya namun hari ini sepi sampai &ndash; sampai mereka tidak lagi memakai&nbsp;<em>term</em>&nbsp;kakak PA dan anak PA dalam persekutuan. Beliau berkata: &ldquo;<em>&nbsp;Saya harus memutar otak supaya acara terlihat fun dan mahasiswa mau datang. Mahasiswa yg kami bina tidak mau memakai atribut kakak PA dan anak PA</em>.&rdquo;</p>\r\n\r\n<p>Dosen saya yang lain juga setuju bahwa kebanyakan sekolah teologia hari ini hanya menelurkan alumni2 yang banyak tau, pandai berargumen alkitabiah namun tumpul dalam karakter, moralitas dan spiritualitas. Beliau sering menghadiri pertemuan para teolog yang dipenuhi asap rokok. Idealisme hanya untuk berorasi dan berdebat tapi dalam hidup sehari &ndash; hari wajahnya berubah memalukan.</p>\r\n\r\n<p>Dari wajah &ndash; wajah yang saya temui ini, jelas berkecamuk sebuah pertanyaan fundamental yang menggelisahkan.&nbsp;<strong><em>Apa yang hilang? Apa yang terlupakan?</em></strong></p>\r\n\r\n<p><strong>Mazmur 127: 4</strong>&nbsp;mengatakan bahwa orang &ndash; orang muda adalah bagaikan anak panah di tangan pahlawan. Seperti yang saya pernah katakan bahwa Indonesia ada di hati Tuhan dan Dia terlebih rindu untuk kemuliaan-Nya memenuhi bangsa yang besar ini. Mahasiswa adalah anak &ndash;anak panah Kristus yang akan bangkit untuk visi itu. Kristus akan membangkitkan anak &ndash; anak panah untuk tujuan-Nya. Di sepanjang sejarah alkitab, kita melihat bagaimana orang &ndash; orang muda begitu banyak digerakkan oleh hati Allah. Orang &ndash; orang muda adalah senjata Allah sejak mulanya dan Dia tidak sedang berubah di masa ini. Orang &ndash; orang muda akan senantiasa bangkit untuk hati Kristus. Kalau kita mau menelusuri alkitab, kita akan mendapati satu perkara utama yang mengubahkan hidup mereka menjadi agen kegerakan. Tak pelak, tidak mungkin tidak bahwa perkara itu ialah pengalaman perjumpaan dengan Allah. Allah hadir dengan berbagai cara: belukar menyala (Musa), api di penggilingan gandum (Gideon), penglihatan &ndash; penglihatan (Yesaya, Yehezkiel), suara di dalam mimpi (Yeremia, Samuel), padang penggembalaan (Daud), lalu kisah tangkapan besar di Galilea (Petrus, Yakobus dan Yohanes), sampai kepada cahaya terang yang membutakan (Paulus). Dan Allah benar &ndash;benar memanggil mereka apapun latar belakang mereka, dari budak &ndash; budak di negeri pembuangan hingga pembesar di istana Firaun, dari nelayan jelata sampai alumni sekolah farisi dengan kecerdasan kolosal.</p>\r\n\r\n<p>Saya sering membayangkan apa yang sebenarnya Paulus lihat di jalan ke Damsyik sehingga dia berkata: Siapakah engkau, Tuhan? Kita sering membacanya begitu datar dan keliru sehingga perkataan itu tidak berarti. Bandingkan jika dibaca demikian: Sia</p>\r\n\r\n<p>pakah engkau?! Tuhan????</p>\r\n\r\n<p>Kita harus tahu bahwa Paulus adalah pria dengan intelektualitas sangat besar, bibit unggul, paling Ibrani di antara orang Ibrani, paling farisi diantara orang farisi, dari keturunan Abraham, dan dia mengaku telah menuruti hukum taurat tanpa cacat. Dan waktu itu Paulus sedang bersegera menuju Damsyik. Penuh kemarahan dan kebencian yang amat panas kepada orang percaya. Dia telah membunuh banyak orang, dia telah memisahkan keluarga-keluarga, mengejar mereka dari kota ke kota (Kis 26). Betapa hebat dan mengerikan teror yang telah dia sebabkan di antara jemaat mula &ndash; mula. Tapi apakah Anda menyadari? Pria yang otaknya penuh dengan teologi dan hatinya penuh dengan kemarahan itu telah menulis puisi yang paling agung tentang kasih; 1Co 13:1&nbsp;&nbsp;<em>Sekalipun aku dapat berkata-kata dengan semua bahasa manusia dan bahasa malaikat, tetapi jika aku tidak mempunyai kasih, aku sama dengan gong yang berkumandang dan canang yang gemerincing</em>. Bayangkan keajaiban anugerah Tuhan.</p>\r\n\r\n<p>Saya ingin menanyakan kelak di kekekalan mengenai ini. Ketika paulus dan rombongannya di jalan ke damsyik dan ketika tiba-tiba kuda paulus terjatuh karena cahaya itu. Saya yakin ada yang posisinya di depan paulus, ada di belakang dan di kiri dan kanannya. Mereka mengawal paulus karena orang sekelasnya ini belum pernah menuju Damsyik. Apakah hanya mereka saksi dari peristiwa itu? Saya percaya setiap iblis menyaksikannya dan juga para malaikat di surga. Iblis menyaksikan karena Paulus itu adalah agen terbaiknya. Dia membawa surat kuasa untuk membunuh siapapun yang dia mau. Sampai tiba &ndash; tiba Yesus menghentikan dia di tengah jalan. Apakah engkau bisa membayangkan pria itu terjatuh ke tanah? Apakah engkau berpikir dia akan menulis ke 14 surat penggembalaan ke jemaat-jemaat Perjanjian Baru dan apakah engkau pernah membayangkan bahwa ia akan melintasi pedalaman &ndash; pedalaman yang jauh terpencil dan berbahaya di seluruh dunia dan mendirikan 12 jemaat? Apakah engkau memikirkan bahwa dia akan didera dan dilemparkan ke dalam penjara yang terisolasi berkali-kali, namun bahkan dari dalam penjara itu dia telah menulis kepada jemaat2 seperti Kolose, Filipi dan Efesus surat cintanya kepada jemaat itu dan mengatakan: Bersukacitalah senantiasa di dalam Tuhan!? Bukankah jemaat2 itu yang seharusnya mengirimkan surat penghiburan kepadanya? Mengapa? Karena di tengah jalan ke Damsyik itu,&nbsp;<strong>dia menjadi hidup</strong>. Formalitas ritual agamawi hilang seketika. Mata air kasih yang sejati mengalir dari hati yang sempat panas menyala dengan kebencian.&nbsp;<strong>Keajaiban kelahiran baru!</strong></p>\r\n\r\n<p>Rekan &ndash; rekan, setiap kali saya ada dalam perbincangan yang menggelisahkan dengan pelayan &ndash; pelayan Tuhan ini, dari dalam batin saya selalu menyembur satu frasa yang penuh api kebangunan rohani&nbsp;<strong>&ldquo;Encounter with Jesus!&rdquo;&nbsp;</strong>Itulah yang hilang. Itulah yang terlupakan. Sekolah &ndash; sekolah teologi manapun bahkan yang terbaik pun tidak mampu menjamin ini dalam kurikulum &ndash; kurikulum mereka.</p>\r\n\r\n<p><strong><em>The missing path</em></strong>&nbsp;adalah perjumpaan dengan Kristus, dan untuk menambal itu tiada lain yg bisa kita lakukan selain pemberitaan Injil, bukan ragam jenis aktivitas yang lain. Berita Injil yang adalah kekuatan Allah yang menyelamatkan itu yang akan membawa orang kepada perjumpaan dengan Kristus (Rom 1:16). Mahasiswa adalah anak panah Kristus, dan mahasiswa harus mengalami Kristus. Mahasiswa harus bertemu sang pahlawan, supaya anak panah ini menjadi berarti. Kita akan lihat bagaimana hati mereka akan menyala &ndash; nyala untuk panggilan-Nya. Kita akan lihat sebuah kehidupan yang terjual habis bagi Kristus dan cinta akan Tuhan menghanguskan mereka. Masa ini adalah masa yang sangat menggairahkan untuk melihat mahasiswa mendengarkan Injil dan kampus &ndash; kampus melahirkan lagi dari dalam rahimnya hamba &ndash; hamba Tuhan yang militan untuk tujuan Kristus atas Indonesia dan suku &ndash; suku bangsa. Saya digairahkan melihat mereka &ndash; mereka yang baru saja dilawat Tuhan dan beberapa minggu kemudian sudah pergi ke kota &ndash; kota dan kampus &ndash; kampus yang baru untuk memberitakan kabar baik. Saya digairahkan melihat mereka pergi dengan uang mereka sendiri dan tidak kapok untuk berangkat lagi ke kota lainnya. Bangun pada tengah malam dan mencurahkan air mata untuk membela hidup anak &ndash; anak rohani mereka, membela suatu kampus atau bahkan suku bangsa, menginvestasikan waktu untuk mengajar, mendengar, melatih dan memuridkan, dan pada saat yang sama juga berjuang untuk memberi secara financial. Bukankah ini sebuah kebangunan rohani di tengah &ndash; tengah manusia yang oportunis? Betapa hidup bukan lagi untuk mengeruk dan mengeruk sesuatu bagi diri sendiri, tetapi untuk melayani Tuhan, memberkati mahasiswa dan Indonesia, memberi apapun yang Tuhan mau. Di balik pandangan yang kasat mata ini saya percaya, terhadap kawanan (kecil) ini (Luk12:32 Tuhan sedang tidak tertidur dan akan memunculkan kebenaran mereka seperti terang (Maz 37:6), kian bertambah terang hingga rembang tengah hari (Ams 4:18), melipatgandakannya dan menumbuhkan buah-buahnya (2 Kor 9:10). Apa yang terjadi ini di tengah egoisnya tahun &ndash; tahun postmodern ini bagi banyak gereja atau pelayanan adalah hal yang tidak mungkin. Bagaimana caranya? Kata kebanyakan gembala anak muda.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt="Explosion of Sion" src="/sion_ministry/default_assets/kcfinder/upload/images/138.jpg" style="height:270px; width:405px" /></p>\r\n\r\n<p>Pemberitaan Injil menjadi semakin penting dan mendesak! Zaman semakin kencang, generasi muda semakin cepat terhilang. Alkitab telah berkata tentang hari &ndash; hari terakhir yang makin kelam (2 Tim 3). Tapi Tuhan tidak pernah berubah. Dia tetap Tuhan yang telah melintasi segala zaman dan menghidupkan pencetak &ndash; pencetak sejarah. Dia akan menjumpai generasi ini. Itu mengapa kita di Sion tidak pernah mau dialihkan dan dihentikan untuk memberitakan Injil dan membawanya sampai ke kampus &ndash; kampus terjauh. Dari kampus, Injil akan sampai menerangi suku &ndash; suku bangsa dan sampai ke bangsa &ndash; bangsa.</p>\r\n\r\n<p>Orang &ndash; orang muda tetap dan akan selalu menjadi anak &ndash; anak panahNya. Kita memiliki catatan sejarah bagaimana tahun &ndash; tahun modern telah diwarnai oleh pemuda &ndash; pemuda yang disemai Roh Kudus di kampus. Kita mengenal David Brainerd, Jonathan Edwards, William Carey, David Livingstone, The Cambridge Seven, Jim Eliot and his fellow Shell employees, dan lainnya. Mahasiswa senantiasa ada dalam penglihatan-Nya. Dia tidak pernah memikirkan opsi lain. Mahasiswa adalah anak &ndash; anak panah Kristus.&nbsp;<strong>Habakuk 3:2</strong>mengatakan Tuhan akan menghidupkan pekerjaan-Nya dalam lintasan tahun. Bahwa setiap zaman, setiap generasi akan mendapatkan kebangunan rohaninya sendiri!&nbsp;<strong>Every generation will has its own revival!&nbsp;</strong>Karena itu kita di Sion seharusnya tidak terlena dan berleha &ndash; leha. Kita sedang tidak berlari beriringan dengan arus kontemporer, kita berlari bersama angin Roh Kudus. Kita tentara!</p>\r\n\r\n<p>Sampai Indonesia penuh kemuliaan-Nya..</p>\r\n', 'Royanto Napitupulu', '2017-05-27 08:48:22'),
(6, 0, '', 'IMAN DAN KETAATAN', '<p>Yosua 6:1-16s</p>\r\n\r\n<p>Cerita tentang runtuhnya tembok Yerikho adalahcerita yang sudah sering kita dengar dan terasa biasa buat saya. Karena sayasudah dengar cerita ini sejak di sekolah minggu. Cerita sekolah minggu yangdulu rasanya keren dan lama-lama jadi hal yang biasa aja. Sampai suatu saatTuhan ingatkan saya pada suatu film yang pernah saya lihat yaitu &ldquo;TROY&rdquo;.</p>\r\n\r\n<p>Mungkin ada yang pernah nonton film ini. Filmini bercerita tentang peperangan antara 2 kerajaan yaitu troya dan yunani (kalo ga salah inget). Nah, di film itudiceritakan jika bangsa troya adalah bangsa yangtemboknya tidak bisa ditembus karena begitu kuat dan tebal. Di film itudiceritakan tentang bagaimana bangsa yunani dengan pahlawannya yang gagah danbadannya gede-gede berusaha menembus tembok itu dan mereka gagal. Kekuatan paratentara tidak mampu menembus tebalnya tembok pertahanan itu.</p>\r\n\r\n<p>Saat Tuhan ingatkan aku akan filmitu, aku tidak lagi menganggap meruntuhkan tembok Yerikho adalah pekerjaan yangmudah untuk dilakukan oleh bangsa Israel. Bayangkan, di film itupahlawan-pahlawan yang gagah dan jumlahnya sangaaat banyaaak tidak bisamenembus tembok itu. Bagaimana dengan bangsa israel? Mereka bukan orang yangterlatih, mereka bukan orang-orang yang gagah..Itu adalah hal yang tidakmungkin. Tapi ada hal yang membuat mereka mampu melakukan itu, yaitu Allah yangberjalan bersama bangsa ini dan ada iman dari seorang yang bernama Yosua, yangtidak pernah ragu akan apa yang Bapanya katakan. Iman ini yang melahirkan ketaatan untuk melakukanhal-hal yang luarbiasa. Walaupun mungkin jika dipikirkan secara logika,mengelilingi sebuah tembok dan berharap tembok ini runtuh adalah hal yang tidakmasuk akal dan sia-sia di mata orang yang tidak melihat iman itu. Namun hal inimenjadi sesuatu yang luarbiasa karena adanya ketaatan dan iman didalamnya.</p>\r\n\r\n<p>Sama halnya dengan pemuridan yang kita kerjakan. Jika kita memuridkan tanpaiman, maka itu akan menjadi hal yang sia-sia. Karena artinya kita ragu akanperkataan Bapa yang mengatakan bahwa setiap orang yang menabur pasti menuai,orang yang mencucurkan air mata sambil menabur benih pasti menuai dengan soraksorai. Ragu pada Bapa yang memberikan pertumbuhan pada anak-anak rohani&nbsp;kita.Dan&nbsp;artinya kita mengandalkan kekuatan kita untuk memuridkan. Tidak ada gunanyamengandalkan kekuatan kita sendiri untuk mengerjakan apa yang Tuhan rencanakan.Karena satu-satunya syarat agar rencana Tuhan tergenapi adalah berjalan hanyadengan mengandalkan Tuhan.</p>\r\n\r\n<p>Selain itu juga, melalui cerita ini aku diajar satu hal lagi oleh Tuhanyaitu ketaatan. Jika kita memiliki iman akan apa yang Tuhan katakan, maka akanada ketaatan yang lahir secara otomatis tanpa paksaan. Ketaatan yang akanmengerjakan hal-hal yang mungkin sia-sia bagi dunia tapi mempercepatpenggenapan janji yang Tuhan berikan untuk setiap kita. Dan bersiaplah melihatpenggenapan janji Tuhan jika kita mau taat. Ingatlah &ldquo;Iman tanpa perbuatanadalah mati&rdquo;.&nbsp; Dalam pemuridan bentukketaatan itu seperti taat untuk melakukan kunjungan ke anak pa, taat untukmemuridkan dengan seluruh hatimu, taat untuk terus berdoa buat hidup mereka,dll. Mungkin hal ini hal yang sia-sia di mata dunia, tapi Tuhan tidak pernahmelihatnya sebagai hal yang sia-sia. Dia memperhitungkan setiap iman dan ketaatan kita.</p>\r\n\r\n<p>Lakukan pemuridanmu dengan iman yang tidaktergoyahkan. Tidak tegoyahkan melihat anak rohani yang sedang tidak baik,melihat anak yang begitu sulit untuk taat atau yang lainnya. Seperti iman Yosuayang tidak pernah goyah ketika melihat besar dan tingginya tembok Yerikho. Perjuangkanlahimanmu di hadapan Tuhan dan taat pada setiap hal yang Tuhan mau kita kerjakan.Berperkaralah denganNya! Menggeranglah di kamar doa kita! Perkatakan janji itudihadapan Bapa! Karena iman lahir dari pendengaran akan firman. Dan jadilahsaksi kesetiaan Tuhan dalam hidup kita karena Dia adalah Allah yang setia danadil. Dia tidak pernah salah dan tidak pernah bermain-main dengan&nbsp;pemuridanmu.Jadi&nbsp;jika ada yang tidak beres dengan pemuridan kita, ayo kita koreksi dirikita. Apa kita sedang berjalandalam iman atau kita sedang berjalan dengan kekuatan kita? Atau sudahkan kitataat untuk mengerjakan yang Tuhan suruh atau kita sedang menunda-nunda untuk taat?</p>\r\n', 'Mega Aprilia Yusnifa (Pastoral Sion Ministry)', '2017-05-17 08:52:56'),
(7, 0, '', 'Belajar Firman', '<blockquote>\n<p>2Ti 2:15&nbsp;&nbsp;<strong>Study</strong>&nbsp;to show thyself&nbsp;<strong>approved</strong>&nbsp;unto God, a workman that&nbsp;<strong>needeth not to be ashamed</strong>,&nbsp;<strong>rightly dividing</strong>&nbsp;the word of truth</p>\n</blockquote>\n\n<p>Kenapa belajar Firman, bukan sekedar membaca atau merenungkan ?</p>\n\n<p>Kita yang pernah belajar mengerti bahwa belajar perlu melalui rasa sakit tertentu. Sering sekali kita merasa tidak ingin belajar &ndash; kita ingin melakukan hal-hal lain yang kita anggap&nbsp;<em>fun</em>, mata kita mungkin sudah redup seperti lampu 5 Watt<em>.&nbsp;</em>Tapi di saat itu, kita tetap memaksakan diri kita untuk belajar, kita tetap tinggal di kursi kita, menatap buku kita dan mengerjakan latihan-latihan yang belum terselesaikan.&nbsp;<em>Enjoyment</em>-nya sudah hilang, tapi kita memaksa diri semata-mata karena kita tahu, apabila kita&nbsp;<em>skilfull</em>, bahkan&nbsp;<em>masterfull</em>&nbsp;dalam pelajaran ini, kita akan memperoleh hadiah pada akhirnya, yaitu berupa nilai yang baik atau kelulusan dalam mata kuliah berdosen&nbsp;<em>killer</em>.</p>\n\n<p>Ketekunan seperti itulah yang saya maksudkan kita harus punyai dalam berhubungan dengan Firman Tuhan. Kenapa ? Karena tanpa belajar Firman, seseorang tidak akan pernah menjadi pemurid yang baik. Di 2 Timotius 2:2, Paulus meminta Timotius mempercayakan tanggung-jawab pemuridan kepada orang yang dapat dipercayai dan juga cakap mengajar orang lain. Kata cakap disana berasal dari bahasa Yunani (hikanos&rsquo;:mampu, sanggup), yang menunjukkan kualifikasi dan kompetensi seseorang dalam penguasaan Firman. Paulus kemudian melanjutkannya di ayat 3-6&nbsp; dengan mendeskripsikan seperti apa disiplin yang Anda butuhkan didalam belajar, mengaplikasikan dan memberitakan Firman. Di Alkitab versi KJV, ada frasa&nbsp;<em>endure hardness&nbsp;</em>(ayat 3)<em>, strive for masteries&nbsp;</em>(ayat 5) dan<em>&nbsp;laboreth&nbsp;</em>(ayat 6), disiplin belajar Firman mendatangkan rasa sakit yang diperlukan untuk membentuk seorang pemurid yang tangguh dan benar-benar cakap dalam mengajar.</p>\n\n<p>Sebagai seorang pemurid, mungkin kita sering secara bawah sadar berpikir bahwa murid dapat dihasilkan dengan pendekatan yang&nbsp;<em>smooth</em>, bujukan dan traktiran. Tidak ada yang lebih meleset dari hal ini. Apakah kita akan membuang kuasa kreatif dari Injil yang penuh kuasa dan menggantikannya dengan sugesti manusia ? Ada banyak mahasiswa di luar sana, dan sebagian mungkin kita kenal. Pengenalan mereka akan kita, bahkan seincipun tidak akan mengantarkan mereka lebih dekat ke pintu surga, tanpa pengenalan mereka akan Pribadi Kristus.</p>\n\n<p>Hanya Firman Kristus yang membawa mereka ke dalam mujizat regenerasi, pertobatan yang sejati.<em>1Pe 1:23</em><em>&nbsp; Karena kamu telah dilahirkan kembali bukan dari benih yang fana, tetapi dari benih yang tidak fana, oleh firman Allah, yang hidup dan yang kekal.&nbsp;</em>Bukan pertemanan, bukan karena dulu satu gereja, bukan karena adik angkatan, tapi karena kepada mereka, Firman Kristus yang berkuasa telah diproklamirkan oleh hamba-hamba kerajaanNya yang taat, yang telah menghabiskan malam demi malam, didalam doa dan pembelajaran Firman.</p>\n\n<p>Firman diatas, 2 Timotius 2:15 mendorong kita untuk terus menerus belajar berkenan kepada Allah (studi Firman), dan ketika kita&nbsp;<em>skillful/masterful</em>&nbsp;dalam Firman, kita tidak akan malu menjadi seorang hamba Tuhan dan seorang pekerja Kristus, karena dengan mumpuni kita bisa membedah Firman dengan baik, bahkan dengan ahli, manusialah yang kita bedah dengan pedang Firman. Pekerja Kristus yang masih terbata-bata, malu-malu, gugup-gugup dan tidak jelas dalam penyampaian Firman adalah pekerja yang memalukan, yang sering sekali sebenarnya dikarenakan tidak belajar dan tidak latihan menggunakan Firman Tuhan di kamar pribadi. Dan calon anak-anak rohani yang sebenarnya masih lembut hatinya, jadi menolak untuk menjadi murid karena kita tidak nampak berani dan yakin menyampaikan Firman Tuhan.</p>\n\n<p>&nbsp;</p>\n\n<p>Berhenti mengeluh dan menyalahkan keadaan dan menyalahkan Tuhan kalau engkau belum punya anak rohani.&nbsp; Keluar dari zona nyamanmu, enyahkan rasa malasmu! Kembangkan selera yang sehat akan Firman, studi Firman dengan giat. Pekerja yang cakap mengajar Firman, akan menghasilkan keturunan rohani yang kuat. Api menghasilkan api!</p>\n', 'Parlin Sianipar', '2017-05-20 04:31:30'),
(11, 6, '/sion_ministry/default_assets/kcfinder/upload/6/pengajaran/images/Koala.jpg', 'Sion Bali 3', '', '', '2017-05-16 12:55:08'),
(12, 3, '/default_assets/kcfinder/upload/3/pengajaran/images/138.jpg', 'Mengasihi Tuhan dengan Segenap Hati', '<p>Testing</p>\r\n', 'Gavrilla Ramona', '2017-05-17 13:49:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `browser_info`
--

CREATE TABLE IF NOT EXISTS `browser_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `browser_info`
--

INSERT INTO `browser_info` (`id`, `site_name`, `title`, `icon`) VALUES
(1, 'JakartaNyaman.com', 'JakartaNyaman.com | Informasi Busway dan KRL di Jakarta', '/sion_ministry/default_assets/kcfinder/upload/1/browser_info/images/Penguins.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_area` int(11) NOT NULL,
  `id_jenis_event` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `id_area`, `id_jenis_event`, `id_user`, `cover_image`, `title`, `lokasi`, `keterangan`, `start_date`, `end_date`) VALUES
(7, 8, '3', 3, '/sion_ministry/default_assets/kcfinder/upload/3/event/images/Desert.jpg', 'Kebebasan dari Tuhan telah datang', 'Badung', '<p>Keterangan</p>\r\n', '2017-05-26 06:00:00', '2017-05-28 18:00:00'),
(8, 8, '4', 3, '/sion_ministry/default_assets/kcfinder/upload/3/event/images/Tulips.jpg', 'KORPS', 'Wisma Bali', '<p>Keterangan untuk Pekerja</p>\r\n', '2017-05-26 06:00:00', '2017-05-28 18:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_event`
--

CREATE TABLE IF NOT EXISTS `jenis_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urutan` int(11) NOT NULL,
  `nama_jenis_event` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `jenis_event`
--

INSERT INTO `jenis_event` (`id`, `urutan`, `nama_jenis_event`) VALUES
(1, 1, 'Sion Raya Kampus-Kampus'),
(2, 2, 'Persekutuan Doa Selasa (PDS)'),
(3, 3, 'Invasion Camp'),
(4, 4, 'Kemah Orientasi Pekerja Sion (KORPS)'),
(5, 5, 'Sion Raya Se-Kota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kabupaten` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama_kabupaten`) VALUES
(1, 'Kepulauan Seribu'),
(2, 'Jakarta Selatan'),
(3, 'Jakarta Timur'),
(4, 'Jakarta Pusat'),
(5, 'Jakarta Barat'),
(6, 'Jakarta Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kabupaten` int(11) NOT NULL,
  `nama_kecamatan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kabupaten`, `nama_kecamatan`) VALUES
(1, 1, 'Kepulauan Seribu Selatn'),
(2, 1, 'Kepulauan Seribu Utara\n'),
(3, 2, 'Jagakarsa\r\n'),
(4, 2, 'Pasar Minggu\r\n'),
(5, 2, 'Cilandak\r\n'),
(6, 2, 'Pesanggrahan\r\n'),
(7, 2, 'Kebayoran Lama\r\n'),
(8, 2, 'Kebayoran Baru\r\n'),
(9, 2, 'Mampang Prapatan\r\n'),
(10, 2, 'Pancoran\r\n'),
(11, 2, 'Tebet\r\n'),
(12, 2, 'Setiabudi\r\n'),
(13, 3, 'Pasar Rebo\r\n'),
(14, 3, 'Ciracas\r\n'),
(15, 3, 'Cipayung\r\n'),
(16, 3, 'Makasar\r\n'),
(17, 3, 'Kramat Jati\r\n'),
(18, 3, 'Jatinegara\r\n'),
(19, 3, 'Duren Sawit\r\n'),
(20, 3, 'Cakung\r\n'),
(21, 3, 'Pulo Gadung\r\n'),
(22, 3, 'Matraman\r\n'),
(23, 4, 'Tanah Abang\r\n'),
(24, 4, 'Menteng\r\n'),
(25, 4, 'Senen\r\n'),
(26, 4, 'Johar Baru\r\n'),
(27, 4, 'Cempaka Putih\r\n'),
(28, 4, 'Kemayoran\r\n'),
(29, 4, 'Sawah Besar\r\n'),
(30, 4, 'Gambir\r\n'),
(31, 5, 'Kembangan'),
(32, 5, 'Kebon Jeruk\r\n'),
(33, 5, 'Palmerah\r\n'),
(34, 5, 'Grogol Petamburan\r\n'),
(35, 5, 'Tambora\r\n'),
(36, 5, 'Taman Sari\r\n'),
(37, 5, 'Cengkareng\r\n'),
(38, 5, 'Kali Deres\r\n'),
(39, 6, 'Penjaringan\r\n'),
(40, 6, 'Pademangan\r\n'),
(41, 6, 'Tanjung Priok\r\n'),
(42, 6, 'Koja\r\n'),
(43, 6, 'Kelapa Gading\r\n'),
(44, 6, 'Cilincing\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kecamatan` int(11) NOT NULL,
  `nama_kelurahan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `id_kecamatan`, `nama_kelurahan`) VALUES
(1, 37, 'Cengkareng Barat'),
(2, 37, 'Cengkareng Timur'),
(3, 37, 'Duri Kosambi'),
(4, 37, 'Kapuk'),
(5, 37, 'Rawa Buaya'),
(6, 20, 'Cakung Barat'),
(7, 20, 'Cakung Timur'),
(8, 20, 'Rawa Terate'),
(9, 20, 'Jatinegara'),
(10, 20, 'Penggilingan'),
(11, 20, 'Pulogebang'),
(12, 20, 'Ujung Menteng'),
(13, 27, 'Cempaka Putih Timur'),
(14, 27, 'Cempaka Putih Barat'),
(15, 27, 'Rawasari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesaksian`
--

CREATE TABLE IF NOT EXISTS `kesaksian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `times` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kesaksian`
--

INSERT INTO `kesaksian` (`id`, `id_user`, `cover_image`, `title`, `content`, `author`, `times`) VALUES
(4, 3, '/default_assets/kcfinder/upload/3/kesaksian/images/Chrysanthemum.jpg', 'Kesaksian Oinie', '<p>Isi</p>\r\n', 'Oinie', '2017-05-17 13:50:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) NOT NULL,
  `tag_name` varchar(100) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `urutan` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `is_front` varchar(3) NOT NULL,
  `is_back` varchar(3) NOT NULL,
  `id_user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `tag_name`, `cover_image`, `deskripsi`, `urutan`, `menu_parent`, `is_front`, `is_back`, `id_user_type`) VALUES
(1, 'Beranda', 'home', '/sion_ministry/default_assets/kcfinder/upload/medan/menu/images/Hydrangeas.jpg', 'Menjadi Tempat Persemaian bagi Mahasiswa  untuk Memberkati Kampus Sendiri, Kampus-Kampus, sampai ke Bangsa-Bangsa', 1, 0, 'yes', 'yes', '1,2'),
(3, 'Info Taman', 'taman', '', '', 3, 0, 'no', 'yes', '1,2'),
(4, 'Tulis Feedback Taman', 'kesaksian', '', 'Berisi Kesaksian Sion', 4, 0, 'yes', 'no', '1,2'),
(5, 'Cek Event', 'pengajaran', '', '', 5, 0, 'yes', 'yes', '1,2'),
(7, 'Social Media', 'sosmed', '', '', 7, 0, 'no', 'yes', '1'),
(8, 'Kabupaten', 'area', '', '', 8, 0, 'no', 'yes', '1'),
(9, 'Kecamatan', 'kota', '', '', 9, 0, 'no', 'yes', '1'),
(10, 'Kelurahan', 'pulau', '', '', 10, 0, 'no', 'yes', '1'),
(11, 'Info Menu', 'menu', '', '', 12, 0, 'no', 'yes', '1'),
(12, 'Info Jenis Event', 'jenis-event', '', '', 11, 0, 'no', 'yes', '1'),
(13, 'Browser Info', 'browser-info', '', '', 13, 0, 'no', 'yes', '1'),
(14, 'User Type', 'user-type', '', '', 14, 0, 'no', 'yes', '1'),
(15, 'Info User', 'user', '', '', 15, 0, 'no', 'yes', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajaran`
--

CREATE TABLE IF NOT EXISTS `pengajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cover_image` varchar(255) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu_pelaksanaan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pengajaran`
--

INSERT INTO `pengajaran` (`id`, `cover_image`, `nama_event`, `lokasi`, `keterangan`, `waktu_pelaksanaan`) VALUES
(1, '/hackjak2017/default_assets/kcfinder/upload/medan/event/images/event_1.jpg', 'Pergelaran Akbar The Indonesian Keroncong Center', 'Taman Cornel Simanjuntak', 'Pergelaran Akbar The Indonesian Keroncong Center diadakan diadakan setiap tahunnya untuk merangsang minat masyarakat untuk melestarikan seni musik keroncong di Indonesia. Untuk menumbuh kembangkan musik keroncong ini diperlukan kepedulian dan kesadaran semua anggota masyarakat bahwa musik keroncong bukan hanya musik generasi tua saja tp harus bisa diwariskan kepada generasi penerus.\r\n\r\nPada acara Pergelaran The Indonesian Keroncong Center ini akan lebih banyak menampilkan lagu-lagu perjuangan untuk mengenang para pahlawan yang telah gugur demi kemerdekaan RI. Kami akan menampilkan penyanyi dan lagu-lagu juara lomba cipta lagu tingkat nasional yang diadakan oleh The Indonesian Keroncong Center yang berkisah tentang Pancasila, Perjuangan Bangsa dan lagu nasional lainnya', '2017-12-09 jam 19:00 - 23:00'),
(2, '/hackjak2017/default_assets/kcfinder/upload/medan/event/images/event_2.jpg', 'Konser Animasi Mengejar Mimpiku', 'Taman Interakif Jl Pengembang RT004 RW 009', 'Setiap orang punya mimpi. Beberapa orang malah mewajibkan dirinya bermimpi agar mereka memiliki target dalam kehidupan ini. Beberapa orang terbukti berhasil mencapai mimpinya, tapi beberapa yang lainnya tidak.\r\n\r\nWalaupun Walt Disney berkata, “If you can dream it, you can do it”, tetapi harus diakui ada kesulitan mewujudkan mimpi ini. Beberapa kendala yang tercatat adalah kesulitan ekonomi, tidak tahu cara mencapainya, terlalu takut, atau sibuk dengan rutinitas keseharian.\r\n\r\nKalangan yang sulit mewujudkan mimpi ini lupa bahwa mereka dapat memperbaharui mimpinya. Seperti kata- kata pengarang kisah Narnia, C.S. Lewis, “You are never too old to set another goal or to dream a new dream”. Jadi seyogyanya manusia tidak harus berhenti bermimpi.\r\n\r\nTiap orang harusnya tidak berhenti bermimpi, karena dalam mimpinyalah terletak masa depannya. Dan hampir semua mimpi tersebut berisikan hal-hal dan nilai-nilai yang baik, yang pasti berguna untuk kehidupan manusia dan ciptaan ini. Tidak ada orang yang bermimpi untuk menjadikan masa depannya negatif, karena hati nuraninya akan berontak melawan mimpi ini. Jadi tiap orang seharusnya tidak berhenti bermimpi dan mewujudkannya.\r\n\r\nPagelaran musik dan animasi “Mengejar Mimpiku 3” ini diselenggarakan Ikatan Terapi Musik Indonesia bekerja sama dengan Yayasan Kidung Bangsaku, untuk menyambung pagelaran Mengejar Mimpiku 1 tahun 2015 dan Mengejar Mimpiku 2 yang pernah diselenggarakan tahun 2016.\r\n\r\nSecara konsisten ITMI merangkul para difabel sebagai penampil untuk mengetengahkan potensi yang mereka miliki. Selain penampilan musik, pagelaran kali ini akan menampilkan juga flm animasi pendek 20 menit tentang dua tokoh khayal Dobu dan Mo yang mengejar mimpi mereka menyelamatkan desa mereka. Pesan yang ingin disampaikan dari keseluruhan pagelaran kali ini adalah “Biarkan mimpimu lebih besar dari ketakutanmu, dan upaya mu lebih besar dari perkataanmu.”\r\n\r\n \r\n\r\nNama Kegiatan, Penampil, dan Film Animasi Pendek\r\n\r\nPagelaran musik ini akan diberi judul “Mengejar Mimpiku” dengan panitia Saphira Hertha sebagai penasehat produksi, Yosephine Ika Putri sebagai direktur pelaksana, dan tim pendukung produksi Sekti, Soebhan, Saputra, Kasmid, Samidjo, Sutardji.\r\n\r\nBeberapa penampil yang akan mengisi penampilan musik adalah St. Yakobus Orchestra dan teman-teman difabel adalah Kampung Guji, Rumah Belajar Cemara, SMK 57, Ciliwung Merdeka, KDM, dan Young Voices Chesire Home.\r\n\r\nSebuah flm animasi pendek berdurasi 25 menit akan ditayangkan. Film ini dibuat oleh Errin, Maylani, Michelle Abela Hale, dengan penata musik Yosephine Ika Putri, di bawah arahan sutradara Saphira Hertha. Skenario flm animasi pendek terlampir di halaman belakang.', 'Sabtu, 16 Desember 2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE IF NOT EXISTS `sosmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urutan` int(11) NOT NULL,
  `nama_sosmed` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `urutan`, `nama_sosmed`, `image`, `link`) VALUES
(1, 1, 'Facebook', '/hackjak2017/default_assets/kcfinder/upload/1/sosmed/images/fb_logo.jpg', 'facebook.com'),
(2, 2, 'Youtube', '/hackjak2017/default_assets/kcfinder/upload/1/sosmed/images/youtube_logo.jpg', 'https://www.youtube.com/channel/UCVtAxfyCxwsEGz3r5MahvZA'),
(3, 3, 'Twitter', '/hackjak2017/default_assets/kcfinder/upload/1/sosmed/images/twitter_logo.jpg', 'https://twitter.com/sion_ministry'),
(4, 4, 'Line', '/hackjak2017/default_assets/kcfinder/upload/1/sosmed/images/line_logo.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `taman`
--

CREATE TABLE IF NOT EXISTS `taman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelurahan` int(11) NOT NULL,
  `nama_taman` varchar(255) NOT NULL,
  `infrastruktur` text NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `taman`
--

INSERT INTO `taman` (`id`, `id_kelurahan`, `nama_taman`, `infrastruktur`, `cover_image`) VALUES
(1, 9, 'Taman Interaktif Jl.Pengembang RT004 RW011', '<p>Luas : 400 m2</p>\r\n\r\n<p>Jenis : Taman Interaktif</p>\r\n\r\n<p>Fasilitas Bermain Anak:</p>\r\n\r\n<p>- Seluncuran</p>\r\n\r\n<p>- Kuda-kudaan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fasilitas olahraga</p>\r\n\r\n<p>Jogging track, batu refleksi, serta lapangan untuk kegiatan olahraga</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tempat untuk berkreasi (Tempat Pembuatan Kerajinan Tangan, Desain Pakaian) : Belum ada</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jumlah Pengunjung Rutin : 200 / minggu</p>\r\n', '/hackjak2017/default_assets/kcfinder/upload/medan/taman/images/Taman_Rawa_Tengah.jpg'),
(2, 9, 'Taman Interaktif RT009 RW008', '<p>Luas : 600 m2</p>\r\n\r\n<p>Jenis : Taman Interaktif</p>\r\n\r\n<p>Fasilitas Bermain Anak:</p>\r\n\r\n<p>- Seluncuran</p>\r\n\r\n<p>- Kuda-kudaan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fasilitas olahraga</p>\r\n\r\n<p>Jogging track, batu refleksi, serta lapangan untuk kegiatan olahraga</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tempat untuk berkreasi (Tempat Pembuatan Kerajinan Tangan, Desain Pakaian) : Belum ada</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jumlah Pengunjung Rutin : 200 / minggu</p>\r\n', '/hackjak2017/default_assets/kcfinder/upload/medan/taman/images/Taman_Interaktif.jpg'),
(3, 9, 'Taman Interaktif RT004 RW011', '', ''),
(4, 9, 'Taman TK Al Iman', '', ''),
(5, 9, 'Taman Berlian Cawang', '', ''),
(6, 9, 'Taman Cornel Simanjuntak', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kota` int(11) NOT NULL,
  `id_user_type` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_kota`, `id_user_type`, `username`, `user_email`, `user_password`) VALUES
(1, 0, '1', 'Nugraha Siburian', 'nugie.archie@yahoo.com', 'bbbfc1800dc4f210c8b6afb17ec1695b'),
(2, 3, '2', 'Sion Bandung', 'sion.bandung@yahoo.com', 'cb1a338d9df1fbb7edc8197d31725210'),
(3, 8, '2', 'Sion Bali', 'sionbali@yahoo.com', '3781172c078fb206bdeef208ad1266c3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user_type`
--

INSERT INTO `user_type` (`id`, `name_user_type`) VALUES
(1, 'Super Admin'),
(2, 'Admin Kota-Kota');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
