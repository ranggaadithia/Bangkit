-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2023 pada 12.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangkit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_class`
--

CREATE TABLE `category_class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category_class`
--

INSERT INTO `category_class` (`id`, `name`) VALUES
(1, 'Front-end'),
(2, 'Back-end'),
(3, 'UI/UX Designer'),
(4, 'AI/Data Sciense');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `release` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `roadmap_id` int(11) DEFAULT NULL,
  `mentor_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `image`, `price`, `discount`, `release`, `updated`, `roadmap_id`, `mentor_id`, `category_id`) VALUES
(7, 'HTML5 DASAR', 'HTML5 adalah bahasa markup yang digunakan untuk membangun suatu tampilan pada Website. HTML5 ini peran nya seperti pondasi utama ketika Website sedang berada pada tahap Development. Ketika kita ingin membuat sebuah Header, Body, dan juga Footer pada Website maka kita perlu menggunakan bahasa markup ini.\r\n\r\n', '6499569a3f685.png', 50000, 0, '2023-06-26 09:12:58', '2023-06-26 09:12:58', 16, 13, 1),
(8, 'CSS Website Design', 'HTML5 adalah bahasa markup yang digunakan untuk membangun suatu tampilan pada Website. HTML5 ini peran nya seperti pondasi utama ketika Website sedang berada pada tahap Development. Ketika kita ingin membuat sebuah Header, Body, dan juga Footer pada Website maka kita perlu menggunakan bahasa markup ini.\r\n\r\n', '6499573991ef7.png', 50000, 0, '2023-06-26 09:15:37', '2023-06-26 09:15:37', 16, 13, 1),
(9, 'Vanilla JavaScript Pada Website Development', 'Dalam membangun website yang dinamis (memiliki konten yang up to date) maka kita akan membutuhkan bahasa pemrograman website yaitu salah satunya adalah JavaScript. Di sini kita akan mengenal dasar-dasar penggunaan JavaScript pada website development. Dimulai dari mengenal tipe data, membuat fungsi, dan juga masih banyak yang lainnya.', '64995a2d1ff20.jpg', 50000, 0, '2023-06-26 09:28:13', '2023-06-26 09:28:13', 16, 16, 2),
(10, 'Adonis JavaScript Framework: Basic Web Development', 'AdonisJs adalah salah satu framework Nodejs yang sangat mudah untuk digunakan bahkan untuk mereka yang baru belajar . Kalau kalian pernah menggunakan framework Laravel di PHP maka Adonis ini akan menjadi pilihan yang cocok untuk kamu! Karena bisa dibilang framework ini sangat mirip dengan Laravel. Kita akan belajar mulai dari hal yang paling dasar seperti routing, membuat controller, validator, model dan di akhir kita akan membuat aplikasi CRUD.', '64995a6137b14.png', 50000, 0, '2023-06-26 09:29:05', '2023-06-26 09:29:05', 16, 17, 1),
(11, 'Learn Figma For Beginner', 'Dalam membangun sebuah website dengan design yang menarik dan juga professional maka peran grid system sangatlah penting untuk mencapai akan hal-hal tersebut. Grid system memiliki beberapa manfaat yang salah satunya adalah untuk mempermudah proses kerja sama antara designer dan juga developer.', '649976b8f1c69.jpg', 50000, 0, '2023-06-26 11:30:01', '2023-06-26 11:41:27', 19, 13, 3),
(12, 'UI Design: Wireframe to Visual Design', 'Visual Design adalah hal yang penting dalam membuat suatu tampilan UI. Tujuannya agar tampilan UI Design yang dibuat tidak membingungkan bagi user yang menggunakannya.\r\n\r\nDi kelas ini kita akan mempelajari cara membuat sebuah tampilan mulai dari tahap pembuatan moodboard menggunakan InvisionApp yang terdiri dari tipografi, warna dan juga referensi design.', '6499773dec086.png', 50000, 0, '2023-06-26 11:32:13', '2023-06-26 11:32:13', 19, 16, 3),
(13, 'UI Styleguide With Figma', 'Dalam membuat tampilan UI, Designer perlu menerapkan design yang menarik dan tentunya konsisten dengan UI Style Guide agar memudahkan proses web/mobile development. Dengan UI Style Guide, Designer dapat menghemat waktu karena pembuatan komponen design menjadi lebih praktis dan dapat dikerjakan oleh beberapa designer secara bersamaan.', '64997798e0e69.jpg', 50000, 0, '2023-06-26 11:33:44', '2023-06-26 11:33:55', 19, 17, 3),
(14, 'Belajar Sketch untuk Junior UI Designer 2021', 'Untuk menjadi desainer antarmuka (UI) profesional, dibutuhkan jam terbang melalui beragam design project untuk pengembangan website/aplikasi. Selain itu, Anda pun perlu menginvestasikan waktu untuk mencari hal baru tentang desain seperti belajar software desain yang populer. Sejak 2011, Sketch hadir sebagai tool terbaik untuk UI design. Sebagai bagian dari Adobe, Sketch unggul dalam plugin dan integration. Dukungan library yang besar pada fitur tersebut memungkinkan pembuatan UI menjadi efisien.', '649978b18c58c.png', 50000, 0, '2023-06-26 11:38:25', '2023-06-26 11:38:25', 19, 18, 3),
(15, 'Learn Figma For Beginner', 'Bidang UI/UX sangat penting dipelajari dan juga banyak diminati belakangan ini. Kenapa UI/UX penting? Implementasi UI/UX yang baik akan mampu membantu design mobile aplikasi menjadi lebih nyaman digunakan oleh banyak pengguna. UI/UX juga berperan banyak dalam meningkatkan kepuasan pengguna secara keseluruhan.', '6499792bbe06a.png', 50000, 0, '2023-06-26 11:40:27', '2023-06-26 11:40:27', 19, 13, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roadmaps`
--

CREATE TABLE `roadmaps` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roadmaps`
--

INSERT INTO `roadmaps` (`id`, `name`, `description`, `image`) VALUES
(16, 'Full-Stack website', 'Full stack developer adalah seorang pengembang yang dapat bekerja pada teknologi back-end dan front-end.', '649596e1ccee6.svg'),
(19, 'UI/UX Designer', 'Mendesain aplikasi dan website dimulai dari riset, visual design, prototyping, dan usability-testing.', '64992d1dc210a.svg'),
(20, 'Freelancer UIUX Designer', 'Mendesain aplikasi dan website dimulai dari riset, visual design, prototyping, dan usability-testing. ', '649a4bcc8beaf.svg'),
(21, 'Mobile UI Designer', 'Belajar menjadi seorang designer yang fokus pada aplikasi mobile untuk menciptakan user experience yang baik.', '64992e454138f.svg'),
(22, 'JavaScript Back-End Developer', 'Mempelajari techstack dari JavaScript untuk berfokus kepada sistem Backend pada website dan aplikasi.', '64992e733ffa2.svg'),
(23, 'Become Front-End Developer', 'Bekerja sama dengan tim desainer dalam mengimplementasikan hasil design projek ke bentuk template HTML menggunakan Framework yang popular.', '64992f3729d63.svg'),
(24, 'Full-Stack Android Developer', 'Mempelajari XML dan Java atau Kotlin dalam membangun aplikasi Android yang sesuai dengan standard Internasional.', '64992f5d13bf8.svg'),
(25, 'Become Flutter Apps Developer.', 'Menguasai bahasa pemrograman Dart dan Flutter SDK dalam membangun aplikasi iOS/Android dan juga bisa kita digunakan untuk melakukan Website Development. ', '64992f92b2ace.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Kennedy Dawson', 'gajubawimu@mailinator.com', 'Pa$$w0rd!', 'student'),
(4, 'Radit Putra', 'raditp@bangkit.id', '$2y$10$UtHdxgI87K4c6zDBMITLA.mDDFwkxzD2EY18jfcoa95ak5XRxWuPy', 'admin'),
(5, 'Solomon Oneill', 'vequ@mailinator.com', '$2y$10$4bT46UP/HR4gsKwWdWqy0OPOIu1lYLQ68Efd5YW2u1CyngsiW7nzS', 'student'),
(6, 'Wyatt Sanders', 'lyvuveqil@mailinator.com', '$2y$10$dl.OUuJJOW35f1SWDw/f0u0ARcMP51ssREp3KhujG6E.QI0PWYtX.', 'student'),
(7, 'Rosalyn Hobbs', 'gumu@mailinator.com', '$2y$10$.h6tKkS4pfZfQsXyC4ome.ZlFY4giPeVQmm4dwGtTSfUI.VFO.n0S', 'student'),
(8, 'Kerry King', 'titas@mailinator.com', '$2y$10$skdIglI8KIWG4vgceVPzJ.u456uThSJRIyu4w53u76.s1z6eu/IkG', 'mentor'),
(11, 'Carla Washington', 'rafycohi@mailinator.com', '$2y$10$78tMfb9CwvHTmW4AspF.U.sXh4hC.crQOCnTnQ3BBSV5Ecq1LVm0W', 'student'),
(12, 'Rigel Perry', 'zokyz@mailinator.com', '$2y$10$13gXSp.RZ8aqWWUYb8izH.A8PgPbJ2eHnXJAjw/GzGBFDQcLXkX4C', 'mentor'),
(13, 'Rangga Adithia', 'rangga@bangkit.com', '$2y$10$NYyo2VIF/09ImKSMUnrOgOra4d6YiaZkrjgfHK6aO/iDwYVr6Kwm6', 'student'),
(15, 'Fieter Brian', 'fbrian@gmail.com', '$2y$10$0Nl4VphZznkKQWyDOxfyMuuOa..KCOqAP6zmjRH7wle80T11ezhMW', 'admin'),
(16, 'Restu Cahyana', 'mentor.restu@bangkit.id', '$2y$10$q0JyiLImRsbR2K9t6GcDQemNvrzRi7cB6qEqj806NMYeV94X/B5ey', 'mentor'),
(17, 'Fieter Brain', 'mentor.fieter@bangkit.id', '$2y$10$NrHwpZpNijnwyhl2Wb1tkeEcRBsJnbbfkB5TrmAE.iw9IrecHqTXq', 'mentor'),
(18, 'Ivonia Fatima', 'mentor.ivonia@bangkit.id', '$2y$10$hkyTHaE38MUHXPgYD8hxpO41DoEXQtR5OUEqL5M43sLuDEPqBBuba', 'mentor'),
(19, 'restu', 'admin.restu@bangkit.id', '$2y$10$eTIbwm2nXnsUQ0Pjbi98y.g7ahxePkPOtQXoF8Gcbv0rQG6G3F6Ee', 'admin'),
(20, 'RESTU', 'restu@bangkit.id', '$2y$10$Z/QnsA9GZOMSiF/fLFKQUuNMXIWqGIh2gh3OGT1/VlMpd1xoDL48C', 'student'),
(22, 'Rangga', 'mentor.rangga@bangkit.id', '$2y$10$V0PUjB8Ca9v.2nB1l.aH8uOjY0hMY6oxJoOkYS8lr/mV6yAzh56xS', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_course`
--

CREATE TABLE `user_course` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_course`
--

INSERT INTO `user_course` (`id`, `course_id`, `user_id`, `join_date`) VALUES
(5, 15, 13, '2023-06-26 15:19:22'),
(6, 9, 13, '2023-06-26 15:23:38'),
(7, 7, 13, '2023-06-26 21:16:56'),
(8, 15, 20, '2023-06-27 01:43:05'),
(9, 7, 20, '2023-06-27 01:46:00'),
(10, 7, 20, '2023-06-27 01:46:41'),
(11, 14, 4, '2023-06-27 02:30:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `duration` time NOT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `url`, `duration`, `course_id`) VALUES
(9, 'HTML Dasar : Pendahuluan HTML ', 'Pendahuluan mengenai HTML', 'https://www.youtube.com/embed/NBZ9Ro6UKV8', '00:15:01', 7),
(10, 'HTML Dasar : Hello World!', 'Di video ini kita akan membuat website sederhana pertama kita..\r\nHello World! :D\r\nmenggunakan aplikasi notepad pada windows\r\n', 'https://www.youtube.com/embed/1NicaVOCXHA', '00:10:50', 7),
(11, 'HTML Dasar : Code Editor ', 'Code Editor yang akan digunakan pada mata kuliah Pemrograman Web 1 adalah Sublime Text 3.', 'https://www.youtube.com/embed/3sLSi9L5nWE', '00:13:03', 7),
(12, 'HTML Dasar : Tag', 'Video ini menjelaskan mengenai Tag pada HTML, apa saja yang bisa di simpan di dalam head dan body', 'https://www.youtube.com/embed/cUWBYzA6M-8', '00:08:01', 7),
(13, 'HTML Dasar : Heading', 'Video ini menjelaskan mengenai tag paragraf pada HTML', 'https://www.youtube.com/embed/Dl_bIYBc9gM', '00:07:14', 7),
(14, 'CSS Dasar - 1 - Pendahuluan', 'Ini dia yang kalian tunggu2.. seri mengenai CSS Dasar! :D\r\n\r\ndi video pertama ini kita akan belajar mengenai pendahuluan CSS, apa itu CSS, definisinya dan manfaatnya apa..', 'https://www.youtube.com/embed/CleFk3BZB3g', '00:11:05', 8),
(15, 'CSS Dasar - 2 - Anatomi CSS', 'Sama seperti HTML, CSS juga memiliki anatomi / struktur dari tiap-tiap deklarasinya. Anatomi tersebut terdiri dari :\r\n1. selector\r\n2. property\r\n3. value', 'https://www.youtube.com/embed/8lXDi2Mxp9c', '00:06:54', 8),
(16, 'CSS Dasar - 3 - Penempatan CSS', 'Ada beberapa cara untuk menampatkan sintaks CSS di halaman web kita. Ada dengan menggunakan cara embed, inline dan external.\r\n\r\nMau tau bagaimana cara kerja ketiga teknik tersebut? saksikan di video ini ya.. :)', 'https://www.youtube.com/embed/bnnislprJro', '00:10:46', 8),
(17, 'CSS Dasar - 4 - Font Styling', 'Font merupakan elemen pada halaman web yang berhubungan dengan typeface (jenis tulisan / huruf), bisa mengenai family-nya, ukuran, bold atau tidaknya dan lain-lain. \r\n\r\nPada video kali ini, akan dibahas mengenai bagaimana memberikan style css terhadap font tersebut.', 'https://www.youtube.com/embed/nPHed3_oPvY', '00:12:44', 8),
(18, 'CSS Dasar - 5 - Text Styling', 'Setelah di video sebelumnya kita mempelajari tentang bagaimana memberi style pada font, di video kali ini yang akan kita bahas adalah memberikan style pada text seperti pengaturan paragraf, pengaturan warna, dll', 'https://www.youtube.com/embed/xih8giA7S3Q', '00:02:57', 8),
(19, 'Dasar Pemrograman dengan Javascript : INTRO', 'Dasar Pemrograman dengan Javascript : INTRO', 'https://www.youtube.com/embed/RUTV_5m4VeI', '00:07:53', 9),
(20, 'APA ITU PEMROGRAMAN?', 'Sebelum mulai ngoding, ada baiknya kita tau dulu apa itu pemrograman dan program itu sendiri..\r\n', 'https://www.youtube.com/embed/Ncrlg9kTC6U', '00:09:51', 9),
(21, 'BAHASA PEMROGRAMAN', 'apa itu bahasa pemrograman? ada bahasa pemrograman apa aja? yang paling bagus yang mana?\r\n\r\nnah, di video ini kita akan bahas itu semua sebelum kita mulai ngoding.. disimak yaa.. :)', 'https://www.youtube.com/embed/dugL0oYx0w0', '00:11:43', 9),
(22, 'COMPILER VS. INTERPRETER', 'Tiap2 bahasa pemrograman memiliki sesuatu yang dinamakan compiler atau interpreter, yang berfungsi untuk melakukan sesuatu terhadap source code kita agar bisa menjadi program yang bisa dijalankan.. Video ini menjelaskan mengenai apa itu compiler &amp; interpreter, bagaimana cara kerjanya, dan bahasa pemrograman apa yang memiliki 2 hal tersebut.. \r\n', 'https://www.youtube.com/embed/gCBysZKiU3Y', '00:11:09', 9),
(23, 'KENAPA BELAJAR JAVASCRIPT?', 'Kenapa sih kita belajar javascript di seri ini? yuk kita simak jawabannya di video ini.. ', 'https://www.youtube.com/embed/6UhT1lmV9DE', '00:13:59', 9),
(24, 'JAVASCRIPT LANJUTAN | 1.1 OBJECT (Revisited)', 'Mari kita mulai kembali belajar JAVASCRIPT melanjutkan playlist DASAR PEMROGRAMAN DENGAN JAVASCRIPT, dan di video pertama ini kita akan ingat-ingat kembali mengenai OBJECT', 'https://www.youtube.com/embed/RwT41El778A', '00:17:30', 10),
(25, 'JAVASCRIPT LANJUTAN | 1.2 Object.create()', 'Membahas mengenai cara lain membuat object yaitu dengan Object.create() ', 'https://www.youtube.com/embed/3pQ7Qpzl_pY', '00:10:38', 10),
(26, 'JAVASCRIPT LANJUTAN | 1.3 Prototype', 'Memahami Prototype pada Javascript', 'https://www.youtube.com/embed/2CQhh_6xU3s', '00:17:32', 10),
(27, 'JAVASCRIPT LANJUTAN | 2.1 Execution Context, Hoisting &amp; Scope', 'Memahami Execution Context, Hoisting &amp; Scope pada Javascript', 'https://www.youtube.com/embed/8mZsm9ZQFdY', '00:23:37', 10),
(28, 'JAVASCRIPT LANJUTAN | 2.2 ClosureJAVASCRIPT LANJUTAN | 2.2 Closure', 'Memahami konsep Closure pada javascript', 'https://www.youtube.com/embed/jsW0taT36qU', '00:20:42', 10),
(29, 'Learn Figma For Beginner', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari Figma dari dasar untuk membangun design aplikasi atau website yang dijadikan sebagai portfolio ui ux designer.', 'https://www.youtube.com/embed/k7cbBb2Ju5E', '00:04:27', 11),
(30, 'Membuat Projek Design Pertama', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari cara membuat projek design website dan mobile app pertama kita menggunakan software Figma untuk ui ux designer.', 'https://www.youtube.com/embed/uvpkJnYHOQU', '00:06:20', 11),
(31, 'Mempelajari Layers &amp; Group', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari penggunaan layer dan group sehingga mudah diatur ketika nantinya ada perubahan atau kolaborasi antar designer dan developer menggunakan software Figma untuk ui ux designer.', 'https://www.youtube.com/embed/oimb79wuO18', '00:04:46', 11),
(32, 'Membuat UI Component Dengan Basic Shapes ', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari pembuatan UI component seperti header dan button menggunakan basic shapes seperti rectangle dan ellipse pada Figma.', 'https://www.youtube.com/embed/2fFtOUYG2RU', '00:08:13', 11),
(33, 'Text Properties', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari cara mengubah jenis font dan ketebalannya. Font yang digunakan secara gratis untuk projek komersil yang telah disediakan oleh Google.', 'https://www.youtube.com/embed/vHEntLdrjXY', '00:07:59', 11),
(34, 'Belajar Penggunaan Color Scheme', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari tentang pewarnaan pada UI design menggunakan software Figma.', 'https://www.youtube.com/embed/YRCFVarQnOg', '00:08:05', 13),
(35, 'Image Pada UI Card Design', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari bagaimana cara mendapatkan stok foto untuk digunakan pada UI design sehingga tampilan menjadi lebih menarik.', 'https://www.youtube.com/embed/1IptcKy8PLA', '00:07:07', 13),
(36, 'Belajar Pen Tool Untuk Chart Design', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari menggunakan pen tool yang biasanya dipake untuk bikin icon, illustration, atau elemen design lainnya pada website dan mobile app design.', 'https://www.youtube.com/embed/ck-x84uSgxg', '00:04:53', 13),
(37, 'Belajar Pencil Tool Illustration ', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari bagaimana caranya menggunakan pencil tool pada Figma yang gbiasanya digunakan untuk membuat design illustration atau icon pada UI design.\r\n', 'https://www.youtube.com/embed/y35iD3SjTjw', '00:04:46', 13),
(38, 'UI/UX Design Modern Travel Mobile', 'Hi people with the spirit of learning, pada kali ini kita akan mempelajari Figma untuk design aplikasi travel yang modern.', 'https://www.youtube.com/embed/F7ixbBZYpn8', '00:03:42', 13),
(39, 'Belajar Menggunakan Figma Untuk Pemula', 'Hai semuanya, video ini merupakan video pertama dari series belajar UI/UX Design menggunakan Figma. Di video pertama ini saya membahas mengenai cara menggunakan figma untuk membuat UI/UX Design bagi pemula, dimana materi yang disampaikan sangat dasar sekali seperti cara sign-up di figma hingga mengenal tools yang disediakan figma untuk membantu kita para designer ataupun developer mengembangkan project UI/UX Design.', 'https://www.youtube.com/embed/qk3R3mYiuPA', '00:19:30', 14),
(40, 'Cara membuat line icon menggunakan figma', 'Hai semua, di video belajar desain icon kali ini saya akan mengajak kalian membuat beberapa icon dengan menggunakan style icon yang berbeda - beda menggunakan softwate figma. yuk disimak ', 'https://www.youtube.com/embed/mF-S3EqDWYA', '00:19:38', 14),
(41, '8 Plugin Figma untuk memudahkan membuat UI Design', 'Hai semua😀, di video kali ini disampaikan 8 rekomendasi plugin figma yang dapat membantu dan mempermudah kamu dalam mengerjakan ui dan ux design menggunakan figma, di bawah ini merupakan list 8 plugin Figma yang sering saya gunakan.\r\n', 'https://www.youtube.com/embed/mK3y6CzX6Og', '00:23:31', 14),
(42, 'Belajar Design System Untuk Pemula', 'Di video kali ini kita akan belajar tentang definisi Design System hingga apa saja isi dari Design System sebelum kita masuk pada praktek membuat Design System di Figma.', 'https://www.youtube.com/embed/FscX5Q1rihE', '00:19:38', 14),
(43, 'Belajar Responsive Design dengan Auto Layout di Figma', 'Hai semua, di video kali ini kita belajar auto layout di figma agar membuat ui design kalian lebih responsive. Ini fitur keren sih... ', 'https://www.youtube.com/embed/UYIERNVOGzk', '00:23:12', 14),
(44, 'Wireframe to Visual Design', 'Wireframe to Visual Design.', 'https://www.youtube.com/embed/gip5pFiMQwg', '00:17:18', 12),
(45, 'Cara Membuat Wireframe di Figma', 'Wireframe membantu kita dalam membuat sebuah desain website yang bertujuan untuk mengatur tata letak konten dan mempermudah membuat kerangka sebuah website.\r\n', 'https://www.youtube.com/embed/WW2uRdzLumk', '00:16:49', 12),
(46, 'Food App Design | UX/UI ( Wireframe, Prototype, Export)', 'Hi guys!\r\nToday we will learn to design a food app in Adobe XD.', 'https://www.youtube.com/embed/195RY7jCuZg', '00:23:15', 12),
(47, 'E-commerce App Design in Adobe XD (Wireframe/Mockup + Prototype)', 'Hi guys!\r\nToday we will learn to design an eCommerce app in Adobe XD.\r\n', 'https://www.youtube.com/embed/c-6AaS7997w', '00:22:17', 12),
(48, 'How to wire-frame &amp; design a landing page in Figma', 'Learn how to wireframe &amp; design a landing page for a travel company in Figma.', 'https://www.youtube.com/embed/P9Ivqr4CtY0', '00:09:14', 12),
(49, 'What&#039;s Figma?', 'Figma is where teams design together. Bring ideas to life in a design, wireframe, or prototype. Partner with teammates from content creation to design implementation. Get better feedback from your stakeholders. Figma gets everyone on the same page—literally', 'https://www.youtube.com/embed/Cx2dkpBxst8', '00:01:35', 15),
(50, 'Figma For Beginners: Explore ideas', '\r\nIn this series, we walk you through Figma fundamentals while building an app. This video will cover wireframing and exploring ideas. \r\n', 'https://www.youtube.com/embed/dXQ7IHkTiMM', '00:15:49', 15),
(51, 'Figma For Beginners: Create designs ', 'In this series, we walk you through Figma fundamentals while building an app. This video will cover designing in Figma.', 'https://www.youtube.com/embed/wvFd-z7jSaA', '00:21:24', 15),
(52, 'Figma For Beginners: Build prototypes', 'In this series, we walk you through Figma fundamentals while building an app. This video will cover building an interactive prototype in Figma. ', 'https://www.youtube.com/embed/lTIeZ2ahEkQ', '00:07:45', 15),
(53, 'Figma For Beginners: Prepare for Handoff', 'In this series, we walk you through Figma fundamentals while building an app. This video will cover preparing your files for handoff and exporting assets. ', 'https://www.youtube.com/embed/EQ_FL6u8EyM', '00:05:10', 15);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_class`
--
ALTER TABLE `category_class`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roadmap_id` (`roadmap_id`),
  ADD KEY `courses_ibfk_2` (`mentor_id`),
  ADD KEY `courses_ibfk_3` (`category_id`);

--
-- Indeks untuk tabel `roadmaps`
--
ALTER TABLE `roadmaps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_course_ibfk_1` (`course_id`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_class`
--
ALTER TABLE `category_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `roadmaps`
--
ALTER TABLE `roadmaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`roadmap_id`) REFERENCES `roadmaps` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `courses_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category_class` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_course_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
