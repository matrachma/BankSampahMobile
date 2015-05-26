-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2015 pada 17.04
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u842092901_bsmob`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_a` varchar(25) NOT NULL,
  `no_pegawai` varchar(20) NOT NULL,
  `usernameA` varchar(30) NOT NULL,
  `passwordA` varchar(50) NOT NULL,
  PRIMARY KEY (`id_a`),
  UNIQUE KEY `no_pegawai` (`no_pegawai`),
  UNIQUE KEY `username` (`usernameA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_a`, `no_pegawai`, `usernameA`, `passwordA`) VALUES
('00001', '00001', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `infobsm`
--

CREATE TABLE IF NOT EXISTS `infobsm` (
  `id_info` int(10) NOT NULL AUTO_INCREMENT,
  `judul_info` text NOT NULL,
  `isi` text NOT NULL,
  `tanggalinfo` date NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `infobsm`
--

INSERT INTO `infobsm` (`id_info`, `judul_info`, `isi`, `tanggalinfo`) VALUES
(1, 'Training Pengolahan Limbah Plastik Bersama Dorce Gamalama', 'Terimakasih kepada seluruh nasabah Bank Sampah, karena setelah banyak sekali yang masukan yang meminta untuk diadakan training pengolahan limbah plastik, maka kami pihak Bank Sampah akan melaksanakan training tersebut dengan bintang tamu artis Dorce Gamalama. Kegiatan ini akan diadakan pada Rabu 28 Desember 2014 di kantor pusat Bank Sampah.', '2014-12-19'),
(2, 'Peringatan HUT Bank Sampah Ke-2', 'Tidak terasa kegiatan kami telah berjalan selama 2 tahun. Omzet yang kami dapatkan bersama seluruh nasabah tidak pernah terduga sebelumnya. Karena itu kami mengundang kepada seluruh nasabah Bank Sampah Kota Bogor, untuk hadir dalam perayaan HUT ke-2 BS Kota Bogor pada Minggu 4 Januari 2014 di Gedung Kemuning Gading Kota Bogor.', '2015-01-01'),
(3, 'Menangguk Rupiah dari Bank Sampah', 'Bank Sampah terbukti telah menjadi sumber penghasilan tambahan bagi masyrakat di sekitar lingkungan Bogor. Kesimpulan ini kami ambil dari testimoni nasabah bank kami. Mari ajak teman, saudara, maupun tetangga anda untuk bergabung dengan kami. Lingkungan bersih, ekonomi semakin maju.', '2014-12-06'),
(4, 'Penyuluhan Bahayanya Sampah', 'Bank Sampah Bogor akan mengadakan penyuluhan bertema bahayanya sampah. Penyuluhan ini akan diadakan pada tanggal 10 April 2014. Dengan adanya penyuluhan ini kami berharap lingkungan di sekitar Bogor menjadi nyaman dan terhindar dari penyakit.', '2014-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lognasabah`
--

CREATE TABLE IF NOT EXISTS `lognasabah` (
  `id_log` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `aktivitas` text NOT NULL,
  `id_N` int(15) NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data untuk tabel `lognasabah`
--

INSERT INTO `lognasabah` (`id_log`, `tanggal`, `aktivitas`, `id_N`) VALUES
(1, '2014-11-01', 'Pendaftaran sebagai nasabah baru.', 2),
(2, '2014-11-03', 'Pendaftaran sebagai nasabah baru.', 3),
(3, '2014-11-08', 'Deposit sampah plastik dan kertas total Rp. 123.000', 3),
(4, '2014-12-06', 'Deposit sampah plastik total Rp. 63.000', 2),
(5, '2014-12-07', 'Tarik tunai tabungan sejumlah Rp. 50.000', 2),
(6, '2014-12-15', 'Deposit sampah plastik total Rp. 23.500', 2),
(7, '2014-12-02', 'Pendaftaran sebagai nasabah baru.', 6),
(8, '2014-11-11', 'Pendaftaran sebagai nasabah baru.', 7),
(9, '2014-12-02', 'Pendaftaran sebagai nasabah baru.', 4),
(10, '2014-12-01', 'Pendaftaran sebagai nasabah baru.', 5),
(11, '2014-12-10', 'Pendaftaran sebagai nasabah baru.', 8),
(12, '2014-11-18', 'Pendaftaran sebagai nasabah baru.', 10),
(13, '2014-11-02', 'Pendaftaran sebagai nasabah baru.', 9),
(14, '2014-04-09', 'Pendaftaran sebagai nasabah baru.', 11),
(15, '2013-07-08', 'Pendaftaran sebagai nasabah baru.', 12),
(16, '2014-07-01', 'Pendaftaran sebagai nasabah baru.', 13),
(17, '2014-08-11', 'Pendaftaran sebagai nasabah baru.', 14),
(18, '2014-09-10', 'Pendaftaran sebagai nasabah baru.', 15),
(19, '2014-08-24', 'Pendaftaran sebagai nasabah baru.', 16),
(20, '2014-08-02', 'Pendaftaran sebagai nasabah baru.', 17),
(21, '2014-08-02', 'Pendaftaran sebagai nasabah baru.', 18),
(22, '2014-04-16', 'Pendaftaran sebagai nasabah baru.', 19),
(23, '2014-06-16', 'Pendaftaran sebagai nasabah baru.', 20),
(24, '2014-11-02', 'Deposit sampah plastik dan kertas total Rp. 12.340', 5),
(25, '2014-11-09', 'Deposit sampah plastik dan kertas total Rp. 10.360', 5),
(26, '2014-11-09', 'Deposit sampah plastik dan kertas total Rp. 26.780', 6),
(27, '2014-11-18', 'Deposit sampah plastik dan kertas total Rp. 65.891', 6),
(28, '2014-11-23', 'Deposit sampah plastik dan kertas total Rp. 56.092', 6),
(29, '2014-11-30', 'Deposit sampah plastik dan kertas total Rp. 78.901', 6),
(30, '2014-12-10', 'Deposit sampah plastik dan kertas total Rp. 23.001', 7),
(33, '2014-11-25', 'Deposit sampah plastik dan kertas total Rp. 21.312', 7),
(34, '2014-12-03', 'Deposit sampah plastik dan kertas total Rp. 9.001', 6),
(35, '2014-12-02', 'Deposit sampah plastik dan kertas total Rp. 12.340', 3),
(36, '2014-12-01', 'Deposit sampah plastik dan kertas total Rp. 16.789', 3),
(37, '2014-12-02', 'Deposit sampah plastik dan kertas total Rp. 12.340', 2),
(39, '2015-01-07', 'Pendaftaran sebagai nasabah baru.', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE IF NOT EXISTS `nasabah` (
  `id_N` int(15) NOT NULL AUTO_INCREMENT,
  `no_rekening` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `no_KTP` varchar(20) NOT NULL,
  `saldo` int(30) NOT NULL,
  `peringkat` int(5) NOT NULL,
  `usernameN` varchar(30) NOT NULL,
  `passwordN` varchar(50) NOT NULL,
  PRIMARY KEY (`id_N`),
  UNIQUE KEY `username` (`usernameN`),
  UNIQUE KEY `no_KTP` (`no_KTP`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`id_N`, `no_rekening`, `nama`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `no_KTP`, `saldo`, `peringkat`, `usernameN`, `passwordN`) VALUES
(1, 2147483643, 'Alfandio G', 'Bogor', '1994-01-01', 'Bogor', '1258814925455', 100000, 1, 'dio123', 'dio123'),
(2, 2147453622, 'hikmat', 'Bogor', '1994-02-01', 'Bogor', '1845281825852', 15000, 1, 'hikmat', 'hikmat'),
(3, 1647483643, 'Utari A', 'Cibanteng, Bogor', '1994-07-09', 'Jakarta', '3675281825852', 189000, 1, 'utari', 'utari'),
(4, 1640003643, 'Ahmad', 'Ciapus, Bogor', '1992-12-01', 'Ciamis', '9624281825852', 20000, 2, 'amis', 'amis'),
(5, 1657333643, 'Dindin', 'Gg Menteng, Bogor', '1994-12-28', 'Cianjur', '1234481825852', 450100, 3, 'anjur', 'anjur'),
(6, 1117333643, 'rinrin', 'Pagelaran, Bogor', '1987-08-04', 'Bandung', '1238888258520', 96000, 2, 'dudung', 'dudung'),
(7, 1640003000, 'Hammad', 'Ciampea, Bogor', '1974-08-08', 'Bogor', '1238888258744', 12300, 1, 'gorengan', 'gorengan'),
(8, 1640003121, 'Rudi Hartono', 'Villa Ciomas, Bogor', '1994-02-07', 'Bogor', '1237478258001', 145500, 1, 'andai', 'andai'),
(9, 1117333650, 'Danang', 'Pajajaran, Bogor', '1974-10-15', 'Bogor', '1238888258820', 11400, 1, 'ayam', 'ayam'),
(10, 164741111, 'Dina', 'Villa Bogor Indah, Bogor', '1987-12-26', 'Samarinda', '1258893845455', 800000, 4, 'dinaa', 'dinaa'),
(11, 1647488745, 'Diana', 'Panggugah, Bogor', '1968-12-01', 'Madiun', '1258878445455', 25000, 1, 'diana', 'diana'),
(12, 1640003643, 'Aiman', 'Bukit Asri Ciomas, Bogor', '1994-03-26', 'Bogor', '1258814921994', 125000, 2, 'aiman', 'aiman'),
(13, 1647480000, 'Maudy', 'Pagelaran, Bogor', '1982-06-15', 'Semarang', '8948814925455', 32000, 1, 'maudy', 'maudy'),
(14, 1647483643, 'Kunai', 'Konoha, Bogor', '1975-04-22', 'Bogor', '1258814874994', 25500, 1, 'kunai', 'kunai'),
(15, 1648750000, 'Gunawan', 'Pasir Kuda, Bogor', '1993-02-28', 'Jakarta', '1258877545455', 12500, 1, 'guna', 'guna'),
(16, 1647483635, 'Harti', 'Pancasan, Bogor', '1988-01-31', 'Bogor', '1258814926322', 156000, 3, 'harti', 'harti'),
(17, 1648750235, 'Hayati', 'Gunung Batu, Bogor', '1995-07-08', 'Bogor', '1258877587455', 10000, 1, 'hayati', 'hayati'),
(18, 1640003754, 'Jati', 'Cilendek, Bogor', '1991-03-25', 'Bogor', '1258814877477', 11500, 1, 'jati', 'jati'),
(19, 1647488745, 'Kania', 'Pagelaran, Bogor', '1994-06-06', 'Bogor', '1258877587111', 12500, 3, 'kania', 'kania'),
(23, 2147483647, 'Teguh Cigalpa', 'Bojong Kenyot, Bogor', '1995-11-12', 'Tanggerang', '32323121119950002', 0, 1, 'tcigalpa', 'tcigalpa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampah`
--

CREATE TABLE IF NOT EXISTS `sampah` (
  `kode` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(7) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sampah`
--

INSERT INTO `sampah` (`kode`, `kategori`, `jenis`, `harga`) VALUES
(101, 'Plastik', 'Bening', 2000),
(102, 'Plastik', 'Sablon', 500),
(103, 'Plastik', 'Aqua Gelas', 5500),
(104, 'Plastik', 'Botol', 4000),
(105, 'Plastik', 'Paralon', 800),
(201, 'Kertas', 'Buku Tulis', 1800),
(202, 'Kertas', 'HVS', 1900),
(203, 'Kertas', 'Koran', 2000),
(204, 'Kertas', 'Majalah', 650),
(205, 'Kertas', 'Kardus', 1400),
(106, 'Plastik', 'Bungkus Mie Instant', 400),
(107, 'Plastik', 'Kresek', 400),
(108, 'Plastik', 'Jurigen', 3000),
(109, 'Plastik', 'Kulit Kabel', 1000),
(110, 'Plastik', 'Bak Warna', 2500),
(206, 'Kertas', 'Kertas Campur', 1000),
(207, 'Kertas', 'Kertas Buram', 950),
(208, 'Kertas', 'Kertas Semen', 1650);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
