-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 05:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `random_stuff`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `email`, `id_role`) VALUES
(1, '$2y$12$h3aqgLB640UXdgrwrDnE3O24sbEg42OL4b7HJNqi.vo.9bWhVDjUO', 'admin@gmail.com', 1),
(5, '$2y$12$vOV1jpbtHlGEc5.nc8f0CuNmO.IDAdz/FeJpIn1SpchH7Tqysin76', 'petugas@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `nama_brand`) VALUES
(3, 'Lea Jeans'),
(7, 'H&M'),
(8, 'Pull&Bear'),
(9, '3Second'),
(10, 'Fila'),
(11, 'Chanel'),
(12, 'OAKLEY'),
(13, 'Calvin Klein');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kode_cust` varchar(30) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email_cust` varchar(100) NOT NULL,
  `jk_cust` varchar(100) NOT NULL,
  `alamat_cust` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_lengkap`, `username`, `password`, `kode_cust`, `no_tlp`, `email_cust`, `jk_cust`, `alamat_cust`) VALUES
(1, 'Yudha Ardana', 'Yudha', '$2y$12$bKuhnN0hKPAEoU0tzSKFZebcLFwY8pPuWzoTUUeojqNz1Rejhd6Ky', 'C-185', '087849068731', 'yudhaardana10@gmail.com', 'Pria', 'Jl. Kenanga'),
(2, 'I Made Agus Priatna Putra Arnata', 'Agus Priatna', '$2y$12$MmSobJnlpw6rNZRMYuv/8uQ3Yjb9N8jnwuQQlZ4FvyWHZpp9MOtwG', 'C-257', '087849068731', 'imadeaguspriatnaputra@gmail.com', 'Pria', 'Jl.Kuta');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order_list`
--

CREATE TABLE `detail_order_list` (
  `id_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_order_list`
--

INSERT INTO `detail_order_list` (`id_detail`, `id_order`, `total_order`, `id_inventaris`, `jumlah`) VALUES
(2, 1, 2, 7, 1),
(6, 5, 1, 9, 4),
(7, 6, 1, 10, 6),
(9, 8, 1, 9, 1),
(10, 9, 1, 10, 1),
(11, 10, 4, 12, 3),
(12, 10, 4, 18, 2),
(13, 10, 4, 13, 4),
(14, 10, 4, 19, 2),
(15, 11, 3, 26, 2),
(16, 11, 3, 20, 2),
(17, 12, 1, 27, 1),
(18, 13, 5, 11, 5),
(19, 13, 5, 14, 2),
(20, 13, 5, 21, 1),
(21, 13, 5, 15, 2),
(22, 13, 5, 28, 1),
(23, 14, 4, 23, 2),
(24, 14, 4, 30, 4),
(25, 14, 4, 16, 2),
(26, 14, 4, 31, 8),
(28, 16, 1, 22, 7),
(29, 17, 1, 22, 2),
(30, 18, 1, 18, 4);

--
-- Triggers `detail_order_list`
--
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER INSERT ON `detail_order_list` FOR EACH ROW BEGIN
 UPDATE inventaris SET stok= stok - NEW.jumlah
 WHERE id_inventaris=NEW.id_inventaris;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `id_store` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` float NOT NULL,
  `tgl_invent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `id_prod`, `id_vendor`, `id_store`, `stok`, `harga`, `tgl_invent`) VALUES
(7, 6, 2, 2, 2, 800000, '2021-06-18'),
(9, 8, 7, 5, 10, 200000, '2021-06-22'),
(10, 9, 6, 6, 7, 450000, '2021-06-22'),
(11, 10, 4, 7, 20, 150000, '2021-06-22'),
(12, 12, 2, 5, 22, 120000, '2021-06-22'),
(13, 13, 3, 3, 21, 120000, '2021-06-22'),
(14, 14, 4, 4, 23, 200000, '2021-06-22'),
(15, 15, 5, 5, 23, 190000, '2021-06-22'),
(16, 16, 6, 6, 23, 150000, '2021-06-22'),
(17, 17, 7, 7, 25, 150000, '2021-06-22'),
(18, 18, 2, 7, 19, 145000, '2021-06-22'),
(19, 19, 2, 2, 23, 120000, '2021-06-22'),
(20, 20, 3, 3, 23, 300000, '2021-06-22'),
(21, 21, 4, 3, 24, 350000, '2021-06-22'),
(22, 22, 5, 5, 16, 200000, '2021-06-22'),
(23, 23, 5, 5, 23, 350000, '2021-06-22'),
(24, 24, 6, 6, 25, 150000, '2021-06-22'),
(25, 25, 7, 7, 25, 135000, '2021-06-22'),
(26, 26, 2, 2, 23, 90000, '2021-06-22'),
(27, 27, 3, 3, 24, 800000, '2021-06-22'),
(28, 28, 4, 4, 24, 750000, '2021-06-22'),
(29, 29, 5, 5, 25, 750000, '2021-06-22'),
(30, 30, 5, 6, 21, 300000, '2021-06-22'),
(31, 31, 6, 7, 17, 400000, '2021-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'T-Shirt'),
(2, 'Pants'),
(4, 'Jacket'),
(5, 'Bag'),
(6, 'Glasess'),
(7, 'Watch'),
(8, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id_order` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_bayar` float NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status` enum('Mengirim','Sudah Diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id_order`, `id_cust`, `total_item`, `total_bayar`, `tgl_transaksi`, `status`) VALUES
(1, 2, 3, 1800000, '2021-06-22', 'Sudah Diterima'),
(2, 1, 2, 1000000, '2021-06-22', 'Sudah Diterima'),
(3, 1, 1, 600000, '2021-06-22', 'Sudah Diterima'),
(4, 2, 2, 700000, '2021-06-22', 'Sudah Diterima'),
(5, 2, 4, 800000, '2021-06-22', 'Sudah Diterima'),
(6, 2, 6, 2700000, '2021-06-22', 'Sudah Diterima'),
(7, 2, 4, 1400000, '2021-06-22', 'Sudah Diterima'),
(8, 2, 1, 200000, '2021-06-22', 'Sudah Diterima'),
(9, 2, 1, 450000, '2021-06-22', 'Mengirim'),
(10, 1, 11, 1370000, '2021-06-22', 'Sudah Diterima'),
(11, 1, 4, 780000, '2021-06-22', 'Sudah Diterima'),
(12, 1, 1, 800000, '2021-06-22', 'Sudah Diterima'),
(13, 1, 11, 2630000, '2021-06-22', 'Mengirim'),
(14, 1, 16, 5400000, '2021-06-22', 'Mengirim'),
(15, 1, 7, 1050000, '2021-06-22', 'Mengirim'),
(16, 1, 7, 1400000, '2021-06-22', 'Mengirim'),
(17, 1, 2, 400000, '2021-06-22', 'Mengirim'),
(18, 2, 4, 580000, '2021-06-22', 'Mengirim');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_prod` int(11) NOT NULL,
  `nama_prod` varchar(100) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `kode_prod` varchar(30) NOT NULL,
  `foto_prod` varchar(225) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_prod` date NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_prod`, `nama_prod`, `deskripsi`, `kode_prod`, `foto_prod`, `id_kategori`, `id_brand`, `id_admin`, `tgl_prod`, `size`) VALUES
(6, 'Sepatu Putih 40', 'lorem ipsum', 'SHHMSH4001', 'SHHMSH4001banner_img_01.jpg', 8, 7, 1, '2021-06-18', '40'),
(8, 'Kaos Biru', 'Nyaman dipakai', 'TSFLTSM01', 'TSFLTSM01product-04.jpg', 1, 10, 1, '2021-06-22', 'M'),
(9, 'Sepatu Biru', 'Nyaman dipakai', 'SHCNSH4201', 'SHHMSH4201product-14.jpg', 8, 11, 1, '2021-06-22', '42'),
(10, 'Kaos Abu', 'Lorem ipsum', 'TAHMTSL01', 'TAHMTSL01product-01.jpg', 1, 7, 1, '2021-06-22', 'L'),
(12, 'Kaos Talk Nerd', 'Lorem ipsum', 'KTRPBTSM01', 'KTRPBTSM01product-02.jpg', 1, 8, 1, '2021-06-22', 'M'),
(13, 'Kaos Tommy Hilfiger', 'Lorem ipsum', 'KTH3STSL01', 'KTH3STSL01product-03.jpg', 1, 9, 1, '2021-06-22', 'L'),
(14, 'Cargo Pants', 'Lorem ipsum', 'CPLJP3401', 'CPLJP3401product-05.jpg', 2, 3, 1, '2021-06-22', '34'),
(15, 'Celana Coklat Wanita', 'Lorem ipsum', 'CCWPBP2901', 'CCWPBP2901product-06.jpg', 2, 8, 1, '2021-06-22', '29'),
(16, 'Jogger Pants', 'Lorem ipsum', 'JP3SP3201', 'JP3SP3201product-07.jpg', 2, 9, 1, '2021-06-22', '32'),
(17, 'Sanva Bag', 'Lorem ipsum', 'SBCHBG01', 'SBCHBG01product-08.jpg', 5, 11, 1, '2021-06-22', 'Besar'),
(18, 'Tas Selempang', 'Lorem ipsum', 'TS3SBG01', 'TS3SBG01product-09.jpg', 5, 9, 1, '2021-06-22', 'Sedang'),
(19, 'Tas Rajutan', 'Lorem ipsum', 'TRFLBG01', 'TRFLBG01product-10.jpg', 5, 10, 1, '2021-06-22', 'Sedang'),
(20, 'Back Pack', 'Lorem ipsum', 'BPHMBG01', 'BPHMBG01product-12.jpg', 5, 7, 1, '2021-06-22', 'Besar'),
(21, 'Sepatu Formal Hitam', 'Lorem ipsum', 'SFHHMSH4301', 'SFHHMSH4301product-13.jpg', 8, 7, 1, '2021-06-22', '43'),
(22, 'Sepatu Slop Wanita', 'Lorem ipsum', 'SSWSH3901', 'SSWSH3901product-15.jpg', 8, 10, 1, '2021-06-22', '39'),
(23, 'Sepatu Casual ', 'Lorem ipsum', 'SCCHSH4301', 'SCCHSH4301product-16.jpg', 8, 11, 1, '2021-06-22', '43'),
(24, 'Kacamata Hitam', 'Lorem ipsum', 'KHCHGL501', 'KHCHGL501product-17.jpg', 6, 11, 1, '2021-06-22', '5cm'),
(25, 'Kacamata Hitam Bulat', 'KHBCKGL', 'KHBCKGL501', 'KHBCKGL501product-18.jpg', 6, 13, 1, '2021-06-22', '5cm'),
(26, 'Kacamata Bening', 'KHBCKGL', 'KBOAGL501', 'KBOAGL501product-19.jpg', 6, 12, 1, '2021-06-22', '5cm'),
(27, 'jam Tangan Hitam', 'KHBCKGL', 'JTHHMWA4001', 'JTHHMWA4001product-20.jpg', 7, 7, 1, '2021-06-22', '40mm'),
(28, 'jam Tangan Biru', 'KHBCKGL', 'JTB3SWA3901', 'JTB3SWA3901product-21.jpg', 7, 9, 1, '2021-06-22', '39mm'),
(29, 'jam Tangan Gold', 'KHBCKGL', 'JTGCHWA3801', 'JTGCHWA3801product-22.jpg', 7, 11, 1, '2021-06-22', '38mm'),
(30, 'Jaket Hoodie', 'KHBCKGL', 'JHFLJL01', 'JHFLJL01product-23.jpg', 4, 10, 1, '2021-06-22', 'L'),
(31, 'Jaket Denim', 'KHBCKGL', 'JDLJJM01', 'JDLJJM01product-24.jpg', 4, 3, 1, '2021-06-22', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'Administrator'),
(9, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id_store` int(11) NOT NULL,
  `nama_store` varchar(100) NOT NULL,
  `alamat_store` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id_store`, `nama_store`, `alamat_store`) VALUES
(2, 'Random Stuff Bali 2', 'Jl. Sunsetroad no.2'),
(3, 'Random Stuff Bali 3', 'Jl. Gunung Agung'),
(4, 'Random Stuff Bali 4', 'Jl Raya Lukluk'),
(5, 'Random Stuff Bali 5', 'Jl Celuk'),
(6, 'Random Stuff Bali 6', 'Jl Tukad Badung'),
(7, 'Random Stuff Bali 7', 'Jl Kenanga');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(100) NOT NULL,
  `alamat_vendor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `alamat_vendor`) VALUES
(2, 'Layer Production', ''),
(3, 'Pundak Indah 1', ''),
(4, 'PT Suka Mundur', ''),
(5, 'PT Suka Maju', ''),
(6, 'CV Jongkok Bangun', ''),
(7, 'CV Pak Gede', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `detail_order_list`
--
ALTER TABLE `detail_order_list`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `detail_order_list_ibfk_2` (`id_inventaris`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_vendor` (`id_vendor`),
  ADD KEY `id_store` (`id_store`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_cust` (`id_cust`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id_store`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_order_list`
--
ALTER TABLE `detail_order_list`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON UPDATE CASCADE;

--
-- Constraints for table `detail_order_list`
--
ALTER TABLE `detail_order_list`
  ADD CONSTRAINT `detail_order_list_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order_list` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_list_ibfk_2` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `produk` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventaris_ibfk_2` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventaris_ibfk_3` FOREIGN KEY (`id_store`) REFERENCES `store` (`id_store`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
