-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 04:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masakin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `updateAt` datetime NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `name`, `updateAt`, `createdAt`) VALUES
(12, 'Hidangan Idhul Adha', '2022-07-07 00:48:32', '2022-07-06 17:48:32'),
(13, 'Masakan Indonesia', '2022-07-07 00:48:43', '2022-07-06 17:48:43'),
(14, 'Kue', '2022-07-07 00:48:49', '2022-07-06 17:48:49'),
(15, 'Minuman', '2022-07-07 00:48:56', '2022-07-06 17:48:56'),
(16, 'Camilan', '2022-07-07 00:49:08', '2022-07-06 17:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipeId` int(255) NOT NULL,
  `authorId` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `categoryId` int(1) NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipeId`, `authorId`, `title`, `photo`, `ingredients`, `isActive`, `categoryId`, `updateAt`, `createdAt`) VALUES
(17, 9, 'Sate Buntel Daging Kambing', '1657161501-sate-buntel-daging-kambing-foto-resep-utama.webp', 'Salah satu sate khas Solo yang unik yaitu sate buntel, menggunakan daging kambing cincang dan berbumbu, kemudian dikepal-kepal supaya menyatu, tengahnya ditusuk dengan tusuk sate. Saya pakai daging kambing yang sedikit berlemak yang tujuannya biar dagingnya menyatu apabila dipanggang nanti. Hmm enakk banget.. karena satenya gendut jadi cara makannya dagingnya dilepas dari lidinya, kemudian potong-potong, tuang kecap dan taburan bawang merah, tomat, cabe dan kol cincang huhuu..endolita mamamia.. semoga bisa menjadi inspirasi untuk menu di Hari Raya Idhul Adha nanti 😋👍\r\n\r\n#SemuaAdhadiCookpad\r\n#PejuangGoldenBatikApron\r\n#CookpadCommunity_Bogor\r\n\r\nBahan-bahan\r\n500 gr daging kambing sedikit berlemak\r\nBumbu sate (haluskan) :\r\n10 butir bawang merah\r\n5 siung bawang putih\r\n2 cm lengkuas kupas\r\n2 cm jahe kupas\r\n1 batang sereh ambil putihnya saja\r\nBumbu lainnya :\r\n3 sendok makan air asam jawa\r\n2 sendok makan kecap manis\r\n2 sendok makan santan (saya pakai santan kara)\r\n1 sendok makan jintan bubuk\r\n1 sendok maka gula merah\r\n1 sendok teh lada bubuk\r\n1 sendok teh garam\r\nBahan sambal :\r\n5 butir bawang merah potong-potong\r\n5 buah cabe rawit merah potong-potong\r\n2 lembar daun kol iris tipis\r\n1 buah tomat sedang potong-potong\r\n1 buah jeruk limau ambil airnya\r\nBahan pendukung :\r\nTusuk sate\r\nBawang goreng', 1, 12, '2022-07-06 17:50:18', '2022-07-06 17:50:18'),
(18, 9, 'Tongseng Santan Daging Kambing', '1657130286-tongseng-santan-daging-kambing-foto-resep-utama.webp', 'Sebenarnya ini masakan tahun 2021 pas idul adha tahun kemarin, habis bakar2 bikin sate kambing karena sisa akhirnya dibuat tongseng, baru sempat bikin resep hehe\n\n\nNote: bisa menggunakan daging segar, jangan lupa direbus dulu supaya empuk.\n\n\nBahan-bahan\n 4-5 porsi\n500 gr daging kambing\n2 buah tomat\n1/4 kubis atau sayur kol\n1 santan instan\n4 lembar daun jeruk\n1/2 Jeruk nipis\n2 buah serai\n4 buah bawang putih\n5 buah bawang merah\n3 buah kemiri sangrai\nSecukupnya ketumbar\nSecukupnya lada bubuk\n1/2 ruas kunyit\nSecukupnya air\nSecukupnya minyak goreng\n1 buah daun bawang\nSecukupnya cabe rawit\nSecukupnya garam, gula dan penyedap rasa', 1, 12, '2022-07-06 17:58:06', '2022-07-06 17:58:06'),
(19, 9, 'Rendang Daging bumbu Bamboo', '1657130381-rendang-daging-bumbu-bamboo-instan-foto-resep-utama.webp', 'Pertama kali bikin rendang tapi pakai bumbu instan wkwkw jadi bahannya sederhana tapi tetep enak bgt kata suami xixixi💖 meskipun potongan dagingnya agak besar, di aku tetep empukkk yah~ ntar deh kapan2 mau coba lagi kalo potongan dagingnya agak tipis2 💞\r\n\r\n#PejuangGoldenBatikApron\r\n\r\nBahan-bahan\r\n1/4 daging sapi\r\n1 sachet bumbu instan (merk bamboo)\r\n1 santen kara\r\n2 batang sereh\r\n1 ruas lengkuas\r\n3 daun jeruk\r\nsecukupnya Air\r\nPenyedap rasa\r\nLadaku\r\nsecukupnya Garam\r\nsecukupnya Gula\r\nsecukupnya Kecap manis', 1, 12, '2022-07-06 17:59:41', '2022-07-06 17:59:41'),
(20, 9, 'Nasi Pecel Pincuk', '1657130775-nasi-pecel-pincuk-lauk-suka-suka-foto-resep-utama.webp', 'Assalammualaikum semua, salam sejahtera dan sehat selalunya, amiin...\r\n\r\nPekan ini Ning Min ada agen recook lagi, kali ini masakan ndeso tapi banyak penggemarnya yaitu pecel pincuk sekalian juga ada posbar dari mamah CP yaitu masakan serba direbus. Pecel pincuk sayurnya direbus jadi pas kan. Inspirasi resep Eyang Puji @eyangbima\r\n\r\nPecel pincuk ini khasnya kota Madiun. Sesuai namanya yakni \"pecel pincuk\" biasanya disajikan di atas pincuk daun pisang (daun pisang yang ditekuk kedua ujungnya dari salah satu sisi2nya, menyerupai wadah). Dan daun pisangnya pun membuat aroma pecel semakin sedap. Pecel juga salah satu masakan sehat lo, karena sayur yang digunakan diproses masak dg cara direbus. Perlu diingat merebus sayurannya jangan terlalu lama karena akan mengurangi kadar vitaminnya, sekedar layu saja.\r\n\r\nOh ya pecel pincuk ala saya ini diberi lauk pendamping suka-suka alias requestnya orang rumah. Yuk langsung j cek resepnya. Minggu 26 september 2021\r\n#SerbaDiRebus\r\n#AR_PecelPincuk\r\n#PekanPosbar\r\n#CookpadCommunity_Surabaya\r\n#PecelPincuk\r\n#PecelAlaRumahan\r\n#LaukSukaSuka\r\n\r\nBahan-bahan\r\nBahan Sayur:\r\n2 ikat kangkung, pilih daun+tangkai dan cuci bersih\r\n100 gram tauge, atau secukupnya cuci bersih\r\nsecukupnya air, untuk merebus\r\nSambel Pecel:\r\n5-10 sdm bumbu pecel (lihat resep)\r\nsecukupnya air panas\r\nBahan Tempe dan Pindang Tepung:\r\n200 gram tepung bumbu kuning\r\n3 sdm tepung terigu\r\n1 batang daun bawang, iris2\r\nsecukupnya air\r\n1 papan tempe, iris2\r\n8 ekor ikan pindang\r\nsecukupnya minyak, untuk menggoreng\r\nLainnya:\r\nnasi putih\r\nopsional perkedel udang, (lihat resep)\r\nbawang goreng', 1, 13, '2022-07-06 18:06:15', '2022-07-06 18:06:15'),
(21, 9, 'Bolu Tape', '1657131547-bolu-tape-foto-resep-utama.webp', 'Ada sedikit sisa tape singkong dikulkas, gas dibikin bolu buat temen ngopi pak Suami\r\n\r\nBahan-bahan\r\n100 gram tape singkong\r\n2 sdm SKM putih\r\n100 gram tepung terigu\r\n1/4 sdt BP\r\n80 gram gula pasir\r\n2 butir telur utuh\r\n1/2 sdt SP\r\nSecukupnya vanili cair\r\n50 gram mentega\r\nTopping\r\nsecukupnya Kismis\r\nsecukupnya Keju\r\nAlmond slice jika diinginkan', 1, 14, '2022-07-06 18:19:07', '2022-07-06 18:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `recipeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `review` text NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`recipeId`, `userId`, `review`, `updateAt`, `createdAt`) VALUES
(17, 9, 'yuk cobain adek adek', '2022-07-06 17:50:34', '2022-07-06 17:50:34'),
(18, 9, 'yuk cobain adik adik', '2022-07-06 17:58:29', '2022-07-06 17:58:29'),
(20, 9, 'good', '2022-07-06 18:15:06', '2022-07-06 18:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `password`, `name`, `photo`, `token`, `updateAt`, `createdAt`, `role`) VALUES
(8, 'radityafiqa4@gmail.com', '$2y$10$83u4UQB/vhHWr.7WNkLMn.ixGjZjYn16beaAglXOiWii6.aqgHF.a', 'Raditya Firman Syaputra', '1657129553-271276844_207149638209000_4290948090306885073_n.jpg', '62c5ca5158dbb', '2022-07-06 17:45:53', '2022-07-06 17:45:53', 0),
(9, 'admin@admin.com', '$2y$10$1dpgbWGfIcL0GsECM9ocl.47x7u.B/.f7VkjWohD5.sQZ5ifqH2Xy', 'Admin', '1657129628-nattu-adnan-heRhwTIZrcc-unsplash (1).jpg', '62c5ca9c46aa0', '2022-07-06 17:47:08', '2022-07-06 17:47:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipeId`),
  ADD KEY `authorId` (`authorId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`,`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipeId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `authorId` FOREIGN KEY (`authorId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
