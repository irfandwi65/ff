-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 07:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `kategori` enum('curent-affairs','budaya-pop','politik') NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `kategori`, `penulis`, `gambar`, `isi`, `id_user`, `tanggal`) VALUES
(1, 'ini judulf', 'budaya-pop', 'dd', 'ini_judulf.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa id neque aliquam vestibulum morbi blandit cursus risus at. Eu scelerisque felis imperdiet proin fermentum. Tortor at risus viverra adipiscing at in tellus integer. Eu turpis egestas pretium aenean. Placerat vestibulum lectus mauris ultrices eros. Posuere morbi leo urna molestie at elementum. Velit sed ullamcorper morbi tincidunt ornare massa. Nisi vitae suscipit tellus mauris a diam maecenas sed. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Ut placerat orci nulla pellentesque dignissim.\r\n\r\nSed turpis tincidunt id aliquet risus feugiat in ante metus. Velit egestas dui id ornare arcu odio ut sem. Elit ut aliquam purus sit. Justo laoreet sit amet cursus sit amet. Non blandit massa enim nec dui nunc. Sagittis vitae et leo duis ut diam quam nulla porttitor. Nibh nisl condimentum id venenatis a condimentum. Massa placerat duis ultricies lacus. Magnis dis parturient montes nascetur. Facilisi morbi tempus iaculis urna id volutpat lacus laoreet non. Lectus vestibulum mattis ullamcorper velit sed.\r\n\r\nAc placerat vestibulum lectus mauris ultrices. Enim eu turpis egestas pretium aenean pharetra. Eget lorem dolor sed viverra ipsum nunc aliquet bibendum. Integer quis auctor elit sed vulputate mi sit amet mauris. Senectus et netus et malesuada. Venenatis cras sed felis eget velit aliquet. Lacinia quis vel eros donec ac odio tempor. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nunc id cursus metus aliquam eleifend. Urna nec tincidunt praesent semper feugiat nibh sed pulvinar proin. Vivamus arcu felis bibendum ut tristique et. Pulvinar mattis nunc sed blandit libero volutpat sed. Erat nam at lectus urna. Non pulvinar neque laoreet suspendisse interdum. Enim tortor at auctor urna nunc id. Dictum sit amet justo donec enim diam vulputate ut pharetra. Odio morbi quis commodo odio aenean. Duis ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Enim nunc faucibus a pellentesque sit amet porttitor eget. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec.\r\n\r\nUltricies lacus sed turpis tincidunt id aliquet risus. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Adipiscing at in tellus integer feugiat scelerisque varius. Purus gravida quis blandit turpis. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Iaculis eu non diam phasellus vestibulum lorem sed risus ultricies. Dignissim sodales ut eu sem integer vitae justo. Fringilla ut morbi tincidunt augue. Viverra aliquet eget sit amet. Nibh tortor id aliquet lectus proin nibh nisl condimentum id. Sed pulvinar proin gravida hendrerit lectus. Nunc mattis enim ut tellus elementum sagittis. Velit dignissim sodales ut eu. Vitae elementum curabitur vitae nunc sed. Vel pretium lectus quam id. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis. Nunc sed id semper risus in hendrerit.\r\n\r\nAc odio tempor orci dapibus ultrices in iaculis nunc sed. Et malesuada fames ac turpis egestas. Lacus vestibulum sed arcu non odio euismod. In cursus turpis massa tincidunt dui. Habitant morbi tristique senectus et netus et. Magna etiam tempor orci eu lobortis elementum. Sed odio morbi quis commodo odio. Fames ac turpis egestas maecenas pharetra. Quis ipsum suspendisse ultrices gravida dictum. Condimentum lacinia quis vel eros donec ac odio tempor orci. Dui nunc mattis enim ut. Sapien et ligula ullamcorper malesuada proin libero nunc. Eget dolor morbi non arcu. Eu consequat ac felis donec et odio pellentesque diam volutpat. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Ac odio tempor orci dapibus ultrices in. Est ullamcorper eget nulla facilisi etiam dignissim diam. Sapien faucibus et molestie ac. Aliquam etiam erat velit scelerisque.', 1, '2019-04-29 17:02:49'),
(11, 'ddasf', 'curent-affairs', 'asd', 'ddasf.jpg', 'dasds', 1, '2019-04-29 16:29:11'),
(14, 'ddddd', 'curent-affairs', 'dsa', 'ddddd.jpg', 'dsa', 1, '2019-04-29 16:33:25'),
(15, 'uuuuuuuuuu', 'politik', 'u', 'uuuuuuuuuu.jpg', 'uuuuuuuuuuuuddddddddd', 1, '2019-04-29 17:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
