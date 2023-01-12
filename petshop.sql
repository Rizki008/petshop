-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:42 AM
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
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_diskon` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_produk`, `nama_diskon`, `diskon`) VALUES
(2, 2, '0', '0'),
(4, 4, '0', '0'),
(5, 5, 'hari raya', '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `keterangan` varchar(125) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `keterangan`, `img`) VALUES
(1, 2, 'gambar 1', 'product09.png'),
(2, 2, 'gambar 2', 'shop03.png'),
(3, 1, 'gambar 1', 'product08.png'),
(4, 1, 'gambar 2', 'product01.png'),
(5, 5, 'gambar 1', 'shop01.png'),
(6, 5, 'gambar 2', 'product091.png'),
(7, 4, 'gambar 1', 'product05.png'),
(8, 4, 'gambar 2', 'shop031.png'),
(9, 5, 'gambar 3', 'product-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar`) VALUES
(1, 'makanan', 'avatar3.png'),
(2, 'samsung', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(125) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_toko`, `lokasi`, `alamat`, `no_tlpn`) VALUES
(1, 'Petshop 1', 211, 'Kuningan', '085741236985');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(125) DEFAULT NULL,
  `jenis_kel` varchar(25) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `kode_post` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `jenis_kel`, `email`, `password`, `no_tlpn`, `kode_post`, `alamat`) VALUES
(1, 'raina', 'perempuan', 'raina@gmail.com', '12345', '098349283487', '124', 'kuningan'),
(2, 'amira', 'perempuan', 'amira@gmail.com', '12345', '087918273645', '12345', 'jakarta'),
(3, 'andi', 'laki-laki', 'andi@gmail.com', '12345', '089128371621', '1232312', 'bandung'),
(4, 'jamal', 'laki-laki', 'jamal@gmail.com', '12341234', '0892102801', '12123', 'bandung'),
(5, 'hana', 'perempuan', 'hanasayang@gmail.com', '12341234', '0891928192', '12312', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_pelanggan`
--

CREATE TABLE `penilaian_pelanggan` (
  `id_penilaian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `info_penilaian` int(11) NOT NULL,
  `review` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian_pelanggan`
--

INSERT INTO `penilaian_pelanggan` (`id_penilaian`, `id_produk`, `id_pelanggan`, `info_penilaian`, `review`, `tanggal`) VALUES
(1, 5, 1, 0, 'bagus', '2022-09-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `berat`, `harga`, `stock`, `deskripsi`, `images`, `is_available`) VALUES
(2, 2, 'samsung s22', '200', '20600', '50', 'dsdsad', 'user2-160x160.jpg', 1),
(4, 1, 'TROPICANA CHOCO VAN', '250', '8000000', '10', 'sadsa', 'prod-5.jpg', 1),
(5, 1, 'MITU GANTI PPK WHITE', '250', '8000000', '110', 'dfdf', 'prod-2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(15) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '32412356453', 'tiar'),
(2, 'BNI', '54235653232', 'tiara');

-- --------------------------------------------------------

--
-- Table structure for table `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(50) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_rinci`, `no_order`, `id_produk`, `qty`) VALUES
(1, '20220505BF8RNRVP', 1, 1),
(2, '20220505BF8RNRVP', 2, 1),
(3, '20220505F4WCIZSB', 5, 2),
(4, '20220505F4WCIZSB', 4, 1),
(5, '20220505F4WCIZSB', 2, 1),
(6, '20220508BPCFUH9Z', 5, 1),
(7, '20220508BPCFUH9Z', 4, 1),
(8, '20220615HD1VWRTW', 5, 2),
(9, '20220712RKGUIFXC', 2, 1),
(10, '20220920G6XNE0OV', 4, 1),
(11, '20221017KBWM29RG', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `no_order` varchar(50) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `expedisi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` bigint(255) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(20) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `status_order` int(11) DEFAULT NULL,
  `no_resi` varchar(50) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `jml_bayar` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_lokasi`, `no_order`, `tgl_order`, `nama_pelanggan`, `no_tlpn`, `provinsi`, `kota`, `alamat`, `kode_pos`, `expedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `atas_nama`, `nama_bank`, `bukti_bayar`, `status_order`, `no_resi`, `catatan`, `jml_bayar`) VALUES
(1, 1, NULL, '20220505BF8RNRVP', '2022-05-05', 'uud', '085156727368', 'Jawa Barat', 'Banjar', 'sindang barang', '452157', 'jne', 'OKE', '6-8 Hari', 15000, 750, 61800, 76800, 1, 'wulan', 'bni', 'product07.png', 1, NULL, '', '123444'),
(2, 1, NULL, '20220505F4WCIZSB', '2022-05-05', 'uud', '087123456712', 'Jawa Barat', 'Cirebon', 'sindang barang', '452157', 'tiki', 'ECO', '4 Hari', 8000, 700, 16018600, 16026600, 0, NULL, NULL, NULL, 0, NULL, '', NULL),
(3, 1, NULL, '20220508BPCFUH9Z', '2022-05-08', 'tiar', '018282121232', 'Jambi', 'Kerinci', 'Ciawilor', '45591', 'tiki', 'REG', '4 Hari', 47000, 500, 14000000, 14047000, 0, NULL, NULL, NULL, 0, NULL, '', NULL),
(4, 1, NULL, '20220615HD1VWRTW', '2022-06-15', 'uud', '1231212121212', 'Banten', 'Pandeglang', 'sindang barang', '452157', 'tiki', 'REG', '3 Hari', 19000, 500, 12000000, 12019000, 1, 'wulan', 'bni', 'product-5.jpg', 3, 'jne12345', '', '123444'),
(5, 3, NULL, '20220712RKGUIFXC', '2022-07-12', 'andi', '0798728819283', 'Kalimantan Utara', 'Bulungan (Bulongan)', 'Kuningan', '41231', 'jne', 'OKE', '5-7 Hari', 63000, 200, 20600, 83600, 1, 'andi', 'bri', 'Orange_Illustrated_Cat_Shop_Logo_(1).png', 3, '12981721', '', '8300000'),
(6, 3, NULL, '20220920G6XNE0OV', '2022-09-20', 'andi', '089128371621', 'Kalimantan Timur', 'Kutai Timur', 'bandung', '1232312', 'jne', 'OKE', '5-7 Hari', 68000, 250, 8000000, 8068000, 0, NULL, NULL, NULL, 0, NULL, '', NULL),
(7, 1, NULL, '20221017KBWM29RG', '2022-10-17', 'raina', '098349283487', 'Bangka Belitung', 'Bangka', 'kuningan', '124', 'tiki', 'ECO', '4 Hari', 35000, 250, 8000000, 8035000, 0, NULL, NULL, NULL, 0, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 1),
(3, 'pemilik', 'pemilik', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penilaian_pelanggan`
--
ALTER TABLE `penilaian_pelanggan`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penilaian_pelanggan`
--
ALTER TABLE `penilaian_pelanggan`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
