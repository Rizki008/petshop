-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 12 Jul 2022 pada 01.38
-- Versi Server: 5.6.12-log
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `petshop`
--
CREATE DATABASE IF NOT EXISTS `petshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `petshop`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE IF NOT EXISTS `diskon` (
  `id_diskon` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `nama_diskon` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_diskon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_produk`, `nama_diskon`, `diskon`) VALUES
(2, 2, '0', '0'),
(4, 4, '0', '0'),
(5, 5, 'hari raya', '2000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `keterangan` varchar(125) DEFAULT NULL,
  `img` text,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `gambar`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(125) DEFAULT NULL,
  `gambar` text,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar`) VALUES
(1, 'makanan', 'product01.png'),
(2, 'samsung', 'product02.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(125) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat` text,
  `no_tlpn` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_toko`, `lokasi`, `alamat`, `no_tlpn`) VALUES
(1, 'Petshop 1', 211, 'Kuningan', '085741236985');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `password`, `no_tlpn`) VALUES
(1, 'raina', 'raina@gmail.com', '12345', '098349283487'),
(2, 'amira', 'amira@gmail.com', '12345', '087918273645');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `images` text,
  `is_available` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `berat`, `harga`, `stock`, `deskripsi`, `images`, `is_available`) VALUES
(2, 2, 'samsung s22', '200', '20600', '50', 'dsdsad', 'shop02.png', 1),
(4, 1, 'TROPICANA CHOCO VAN', '250', '8000000', '10', 'sadsa', 'product06.png', 1),
(5, 1, 'MITU GANTI PPK WHITE', '250', '8000000', '110', 'dfdf', 'product02.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE IF NOT EXISTS `rekening` (
  `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(15) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rekening`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '32412356453', 'tiar'),
(2, 'BNI', '54235653232', 'tiara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rinci_transaksi`
--

CREATE TABLE IF NOT EXISTS `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL AUTO_INCREMENT,
  `no_order` varchar(50) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rinci`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_rinci`, `no_order`, `id_produk`, `qty`) VALUES
(1, '20220505BF8RNRVP', 1, 1),
(2, '20220505BF8RNRVP', 2, 1),
(3, '20220505F4WCIZSB', 5, 2),
(4, '20220505F4WCIZSB', 4, 1),
(5, '20220505F4WCIZSB', 2, 1),
(6, '20220508BPCFUH9Z', 5, 1),
(7, '20220508BPCFUH9Z', 4, 1),
(8, '20220615HD1VWRTW', 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `no_order` varchar(50) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `alamat` text,
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
  `bukti_bayar` text,
  `status_order` int(11) DEFAULT NULL,
  `no_resi` varchar(50) DEFAULT NULL,
  `catatan` text,
  `jml_bayar` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_lokasi`, `no_order`, `tgl_order`, `nama_pelanggan`, `no_tlpn`, `provinsi`, `kota`, `alamat`, `kode_pos`, `expedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `atas_nama`, `nama_bank`, `bukti_bayar`, `status_order`, `no_resi`, `catatan`, `jml_bayar`) VALUES
(1, 1, NULL, '20220505BF8RNRVP', '2022-05-05', 'uud', '085156727368', 'Jawa Barat', 'Banjar', 'sindang barang', '452157', 'jne', 'OKE', '6-8 Hari', 15000, 750, 61800, 76800, 1, 'wulan', 'bni', 'product07.png', 1, NULL, '', '123444'),
(2, 1, NULL, '20220505F4WCIZSB', '2022-05-05', 'uud', '087123456712', 'Jawa Barat', 'Cirebon', 'sindang barang', '452157', 'tiki', 'ECO', '4 Hari', 8000, 700, 16018600, 16026600, 0, NULL, NULL, NULL, 0, NULL, '', NULL),
(3, 1, NULL, '20220508BPCFUH9Z', '2022-05-08', 'tiar', '018282121232', 'Jambi', 'Kerinci', 'Ciawilor', '45591', 'tiki', 'REG', '4 Hari', 47000, 500, 14000000, 14047000, 0, NULL, NULL, NULL, 0, NULL, '', NULL),
(4, 1, NULL, '20220615HD1VWRTW', '2022-06-15', 'uud', '1231212121212', 'Banten', 'Pandeglang', 'sindang barang', '452157', 'tiki', 'REG', '3 Hari', 19000, 500, 12000000, 12019000, 1, 'wulan', 'bni', 'product-5.jpg', 3, 'jne12345', '', '123444');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
