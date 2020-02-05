-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 04:48 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_unram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usere` text,
  `passworde` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usere`, `passworde`) VALUES
('1', '1'),
('Admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `asside`
--

CREATE TABLE `asside` (
  `Id` int(11) NOT NULL,
  `Caption` text NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asside`
--

INSERT INTO `asside` (`Id`, `Caption`, `Photo`) VALUES
(9, 'SELAMAT DATANG DI RUMAH SAKIT UNIVERSITAS MATARAM Ramah, Profesional, Berkualitas', 'ed3a0f784290cdd34bbcde3b14409271.jpeg'),
(10, 'TENAGA MEDIS DAN NON MEDIS YANG HANDAL DAN KOMUNIKATIF', 'ca1cb225920f960b5ea9f96c28eb43c4.jpeg'),
(11, '42 DOKTER SPESIALIS PROFESIONAL SIAP MELAYANI ANDA', 'ea5285756d8144422ae1e12bf5793d58.jpeg'),
(12, 'PEMERIKSAAN KESEHATAN DOKTER SPESIALIS  MEMPERINGATI DIES NATALIS UNIVERSITAS MATARAM KE-56 3-4 OKTOBER 2018 DI RS UNRAM GRATIS !!', '3e33f9be8c74836cff72f0bda45f8152.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Id` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `Judul` text NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `Photo`, `Tanggal`, `Judul`, `Isi`) VALUES
(5, 'c1ed790fe90f1f2e5fe5a5d3c50b68a1.jpg', '2018-11-29', 'dfs', 'pertama dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf vdsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v  dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v dsf dsfdsf dsf dsf v'),
(6, 'e7f824c1173ea55449f624dcc7ec8536.jpg', '2018-11-29', 'wqe', 'qwe'),
(7, '97908b84c25ff29a62881ec4f5ca7b61.jpg', '2018-11-29', 'ddsf', 'dsf'),
(8, '', '2018-11-29', 'dsadsa', 'asd'),
(9, '', '2018-12-02', 'ganteng', 'hidup itu indah ');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` varchar(20) NOT NULL,
  `nm_dokter` varchar(50) DEFAULT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `tmp_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gol_drh` enum('A','B','O','AB','-') DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `almt_tgl` varchar(60) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `stts_nikah` enum('SINGLE','MENIKAH','JANDA','DUDHA','JOMBLO') DEFAULT NULL,
  `kd_sps` char(5) DEFAULT NULL,
  `alumni` varchar(60) DEFAULT NULL,
  `no_ijn_praktek` varchar(40) DEFAULT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nm_dokter`, `Photo`, `jk`, `tmp_lahir`, `tgl_lahir`, `gol_drh`, `agama`, `almt_tgl`, `no_telp`, `stts_nikah`, `kd_sps`, `alumni`, `no_ijn_praktek`, `status`) VALUES
('-', '-', NULL, 'L', '', '2017-02-08', 'A', 'ISLAM', '', '', 'MENIKAH', '-', '', '', '1'),
('D010001', 'dr. Decky Aditya Zulkarnaen', 'profil.png', NULL, 'Ampenan', '1990-04-11', NULL, 'ISLAM', 'Karang Baru RT001 RW037 Kebun Sari Ampenan', '', 'SINGLE', 'S01', 'Universitas Mataram', '', ''),
('D010002', 'dr. Putri Krishna Kumara Dewi', 'profil.png', NULL, 'Mataram', '1989-04-02', NULL, 'HINDU', 'Kel.Kekalik Jaya Kec. Sekarbela', '', 'SINGLE', 'S01', 'Universitas Mataram', '-', ''),
('D010003', 'dr. Andika Asharianto', 'profil.png', NULL, 'Surabaya', '1987-09-21', 'A', 'ISLAM', 'Kel. Dasan Agung Baru Kec. Selaparang', '', 'SINGLE', 'S01', '-', '-', ''),
('D010004', 'dr. Nuruz Zihni', 'profil.png', NULL, 'Mataram', '1989-06-09', 'A', 'ISLAM', 'Kel.Kekalik Jaya', '', 'MENIKAH', 'S01', '-', '-', ''),
('D010005', 'dr. Lanira Zarima Ningrum', 'profil.png', NULL, 'Mataram', '1991-02-26', 'A', 'ISLAM', 'Dasan Sari RT/RW 006/038 Kabun Sari Ampenan', '', 'MENIKAH', 'S01', '', '', ''),
('D010006', 'dr. Dyah Mayang Ramadhani', 'profil.png', NULL, 'Semarang', '1991-04-07', 'A', 'ISLAM', 'Tanjung Karang Kec.Sekarbela', '', 'SINGLE', 'S01', '', '', ''),
('D010007', 'dr. Galuh', 'profil.png', NULL, 'Mataram', '2018-07-30', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'SINGLE', 'S01', '', '000', ''),
('D010008', 'dr. Mukadam Alaydrus', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S01', 'Poltekes', '000', ''),
('D010009', 'dr.Ida Ayu Kirtiasih', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S01', 'Poltekes', '000', ''),
('D010010', 'dr.Hadian Rahman', 'profil.png', NULL, '000', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S01', 'Poltekes', '000', ''),
('D010011', 'dr.Made Febriani', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'HINDU', 'Mataram', '(000)___-___-', 'MENIKAH', 'S01', 'Poltekes', '000', ''),
('D010012', 'dr. Lina Nurbaiti, M. Kes', 'profil.png', NULL, 'Praya', '2018-08-07', 'A', 'ISLAM', 'Praya', '(000)___-___-', 'MENIKAH', 'S01', 'Mataram', '000', ''),
('D010013', 'dr. Lalu Galih Pratama Rinjani', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'SINGLE', 'S01', 'Universitas Mataram', '000', ''),
('D010014', 'dr.Rian Segal Hidajat', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'SINGLE', 'S01', 'Universitas Gadjah Mada', '000', ''),
('D010015', 'dr.Ida Made Herisikesa', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'SINGLE', 'S01', 'Mataram', '000', ''),
('D020001', 'drg. Tania Kusumawardani', NULL, 'P', 'Mataram', '1989-07-21', 'O', 'ISLAM', 'Kekalik Barat Kel. Kekalik Kec. Mataram', '081332791769', 'MENIKAH', 'S02', '', '', '1'),
('D030001', 'dr. Joko Anggoro, M.Sc., Sp.PD', 'profil.png', NULL, 'Mataram', '1979-02-19', 'A', 'ISLAM', 'Kel.Pagesangan Barat Kec.Mataram', '', 'MENIKAH', 'S03', '', '', ''),
('D030002', 'dr. I Gede Yasa Asmara, Sp.PD., DMM, M.Med.', 'profil.png', NULL, 'Mataram', '1997-12-12', 'A', 'ISLAM', 'RT.004 Kel.Mataram Timur Kec.Mataram', '', 'MENIKAH', 'S03', '', '', ''),
('D030003', 'dr. Catarina Budyono, Sp.PD', 'profil.png', NULL, '-', '2018-01-31', 'A', 'ISLAM', 'MATARAM', '(0__)___-___-', 'SINGLE', 'S03', '-', '-', ''),
('D030004', 'dr.Indah Sapta,Sp.PD', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S03', 'Poltekes', '000', ''),
('D030005', 'dr.IGN OmmyAgustriadi,Sp.PD', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S03', 'Poltekes', '000', ''),
('D040001', 'dr. Titi Pambudi Karuniawaty, M.Sc., Sp.A', 'profil.png', NULL, '-', '2018-01-31', 'A', 'ISLAM', '-', '(0__)___-___-', 'MENIKAH', 'S04', '-', '-', ''),
('D040002', 'dr.Linda, Sp.A', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S04', 'poltekes', '000', ''),
('D050001', 'dr. Arif Zuhan, Sp.B', 'profil.png', NULL, 'Jepara', '1976-06-01', 'A', 'ISLAM', 'RT.10 RW.87 Kel.Pagesangan Barat Kec.Mataram', '', 'MENIKAH', 'S05', '', '', ''),
('D060001', 'dr. Ario Danianto, Sp.OG', 'profil.png', NULL, 'Surabaya', '1982-03-09', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S06', '', '', ''),
('D070001', 'dr. Sigit Kusdaryono, Sp.An', 'profil.png', NULL, 'Kebumen', '1979-03-24', 'A', 'ISLAM', 'Desa Ngarus Kec.Pati', '', 'MENIKAH', 'S07', '', '', ''),
('D070002', 'dr. Erwin Kresnoadi, M.Si.Med., Sp.An.', 'profil.png', NULL, 'Semarang', '1979-09-18', 'A', 'ISLAM', 'RT.02 Kel.Dasan Agung Baru Kec. Selaparang', '', 'MENIKAH', 'S07', 'Universitas Diponegoro', '', ''),
('D080001', 'dr. Triana Dyah Cahyawati, Sp.Rad., M.Sc.', 'profil.png', NULL, 'Madiun', '1980-09-02', 'A', 'ISLAM', 'Sanden, Bantul', '', 'MENIKAH', 'S08', '', '', ''),
('D090001', 'dr. Ima Arum Lestarini, M.Si.Med., Sp.PK.', 'profil.png', NULL, 'Pemalang', '1974-09-09', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S09', 'Universitas Diponegoro', '-', ''),
('D090002', 'dr. Mohammad Rizki, M.Pd.Ked., Sp.PK', 'profil.png', NULL, 'Bantul', '1980-02-04', 'O', 'ISLAM', 'BTN Bumi Selaparang Asri, Jl. Permata BB-16', '(081)227-648-', 'MENIKAH', 'S09', 'Universitas Gadjah Mada', '', ''),
('D100001', 'dr. Fathul Djannah, Sp.PA', 'profil.png', NULL, 'Pare-Pare', '1975-08-11', 'O', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S10', '-', '-', ''),
('D120001', 'dr. Monalisa Nasrul, Sp.M.', 'profil.png', NULL, 'Bukit Tinggi', '1979-02-16', 'A', 'ISLAM', 'RT.006 Kel.Kekalik Jaya Kec. Sekarbela', '', 'MENIKAH', 'S12', '', '', ''),
('D120002', 'dr. Isna Kusuma Nintyastuti, Sp.M.', 'profil.png', NULL, 'Yogyakarta', '1978-10-09', 'A', 'ISLAM', 'Mataram', '(081)125-131-', 'MENIKAH', 'S12', '-', '-', ''),
('D120003', 'dr. Marie Yuni Andari, Sp.M', 'profil.png', NULL, 'Surabaya', '1979-06-29', 'A', 'ISLAM', 'Jln.Catur Warga No.9 Karang Sukun RT.005 RW.060', '(081)232-185-', 'MENIKAH', 'S12', '', '', ''),
('D120004', 'dr. Ni Nyoman Geriputri, Sp.M', 'profil.png', NULL, 'Mataram', '1981-11-28', 'A', 'HINDU', 'Mataram', '', 'MENIKAH', 'S12', '', '', ''),
('D130001', 'dr. Didit Yudhanto, Sp.THT.,M.Sc.', 'profil.png', NULL, 'Bantul', '1980-02-22', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S13', '', '', ''),
('D140001', 'dr. Ilsa Hunaifi, Sp.S', 'profil.png', NULL, '-', '2018-01-31', 'A', 'ISLAM', '-', '(081)907-593-', 'MENIKAH', 'S14', '-', '-', ''),
('D140002', 'dr. Herpan Syafii Harahap, M.Biomed., Sp.S', 'profil.png', NULL, 'Malang', '1980-03-24', 'A', 'ISLAM', 'RT.9 Kel.Tanjung Karang Permai Kec.Sekarbela', '', 'MENIKAH', 'S14', '', '', ''),
('D150001', 'dr. Yanna Indrayana, Sp.JP', 'profil.png', NULL, 'Sukabumi', '1984-10-13', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S15', '', '', ''),
('D150002', 'dr. A.A. Sagung Mas M.P., M.Biomed, Sp.JP', 'profil.png', NULL, '-', '2018-01-31', 'A', 'HINDU', '-', '(0__)___-___-', 'SINGLE', 'S15', '-', '-', ''),
('D160001', 'dr. Yunita Hapsari, M.Sc., Sp.KK', 'profil.png', NULL, 'Yogyakarta', '1979-06-24', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S16', 'Universitas Gadjah Mada', '-', ''),
('D160002', 'dr. Dedianto Hidajat, Sp.KK', 'profil.png', NULL, '-', '2018-01-31', 'A', 'ISLAM', '-', '(081)707-108-', 'MENIKAH', 'S16', '-', '-', ''),
('D170001', 'dr. Emmy Amalia, Sp.KJ.', 'profil.png', NULL, 'Jakarta', '1980-12-15', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S17', '-', '-', ''),
('D180001', 'dr. Rina Lestari, Sp.P.', 'profil.png', NULL, 'Mataram', '1979-11-28', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S18', '-', '-', ''),
('D180002', 'dr. Indana Eva Ajmala, Sp.P', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S18', '', '000', ''),
('D190001', 'dr. Ahmad Taufik S, Sp.OT.', 'profil.png', NULL, 'Poyak Oyak', '1981-03-31', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S19', 'Universitas Airlangga', '-', ''),
('D200001', 'dr. Akhada Maulana, Sp.U', 'profil.png', NULL, 'Klaten', '1977-05-14', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S20', '', '', ''),
('D200002', 'dr.Pandu IshaqNandana, Sp.U', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S20', 'Universitas Diponorogo', '000', ''),
('D210001', 'dr.Bambang Priyanto,Sp.Bs', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S21', 'Poltekes', '000', ''),
('D210002', 'dr.Rohadi Sp.BS', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S21', 'Poltekes', '000', ''),
('D230001', 'dr. Arfi Syamsun, Sp.KF., M.Si.Med.', 'profil.png', NULL, 'Kuang', '1979-01-08', 'A', 'ISLAM', 'Desa Sandik Kec.Batulayar', '', 'MENIKAH', 'S23', '', '', ''),
('D270001', 'dr. Doddy Ario Kumboyo, Sp.OG(K)', 'profil.png', NULL, 'Jember', '1960-04-09', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S27', '', '', ''),
('D290001', 'dr. Hamsu Kadriyan,Sp.THT., M.Kes.', 'profil.png', NULL, 'Puncangsari', '1973-05-25', 'A', 'ISLAM', 'RT002 RW232 KELURAHAN REMBIGA KEC.SELAPARANG', '(081)836-662-', 'MENIKAH', 'S29', '-', '-', ''),
('D300001', 'dr. E. Hagni Wardoyo, Sp.MK', 'profil.png', NULL, 'Tanjungkarang', '1978-03-29', 'A', 'ISLAM', 'Mataram', '', 'MENIKAH', 'S47', 'Universitas Indonesia', '-', ''),
('D310001', 'dr. Umu I, Sp.BP-RE', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'SINGLE', 'S22', 'Mataram', '000', ''),
('D40003', 'dr.AA Sagung Mas Meiswaryasti P., M.Biomed, Sp.JP', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S15', 'Poltekes', '000', ''),
('D40012', 'dr.AA Sagung Mas Meiswaryasti P.,M.Biomed, Sp.JP', 'profil.png', NULL, 'Mataram', '2018-08-07', 'A', 'ISLAM', 'Mataram', '(000)___-___-', 'MENIKAH', 'S15', 'Mataram', '000', '');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `Id` int(11) NOT NULL,
  `Caption` varchar(20) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`Id`, `Caption`, `Photo`) VALUES
(5, '', '0e4e6e2779137723089724d9632d8be8.jpeg'),
(6, '', 'aad2cafa0d1f863eba211a70ccc8c0fb.jpeg'),
(7, 'VIP 1', 'bcf5d54cd0d1d16b9ddfe07b9b671a93.jpeg'),
(8, '', '5c1c435b142dc56f6068cd03296569a1.jpeg'),
(9, '', '18c1c68cf8bf56f0f3f804746c2e4a0b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `ID_Hari` int(11) NOT NULL,
  `nm_Hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`ID_Hari`, `nm_Hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Id` int(11) NOT NULL,
  `kd_dokter` varchar(20) NOT NULL,
  `hari_kerja` int(11) NOT NULL,
  `jam_mulai` time NOT NULL DEFAULT '00:00:00',
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`Id`, `kd_dokter`, `hari_kerja`, `jam_mulai`, `jam_selesai`) VALUES
(13, 'D010001', 2, '00:00:01', '00:00:02'),
(27, 'D010006', 3, '06:00:00', '13:00:00'),
(28, 'D010001', 1, '04:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal01`
--

CREATE TABLE `jadwal01` (
  `ID_Jadwal` varchar(11) NOT NULL,
  `Hari` int(11) NOT NULL,
  `Dokter` varchar(10) NOT NULL,
  `Mulai` varchar(10) NOT NULL,
  `Selesai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal01`
--

INSERT INTO `jadwal01` (`ID_Jadwal`, `Hari`, `Dokter`, `Mulai`, `Selesai`) VALUES
('3D010001', 3, 'D010001', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan`
--

CREATE TABLE `keunggulan` (
  `Id` int(11) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Judul` text NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keunggulan`
--

INSERT INTO `keunggulan` (`Id`, `Icon`, `Judul`, `Keterangan`) VALUES
(12, '09e2f3ce158536386748008341ccb3ef.png', 'DAFTAR ANTRIAN ONLINE', 'Dapatkan antrian online disini (bagi pasien yang sudah memiliki Rekam Medis)'),
(13, '38192f4204b04dc7eb094f34c5006d3f.png', 'Pelayanan Radiolgi 24 Jam', 'Melayani pemeriksaan foto rontgen dengan teknologi terkini'),
(14, 'a61545b462c44fb644382d43a00baed9.png', 'Pelayanan UGD 24 Jam', 'Tenaga medis kami siap melayani kasus kegawatdaruratan 24 jam'),
(15, '688246217472b194c5423af5790516f9.png', 'Pelayanan Apotek 24 Jam', 'Menerima resep dokter 24 jam');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `Id` int(11) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`Id`, `Icon`, `Judul`, `Keterangan`) VALUES
(54, '765ab0529c09f54196fc0216fc0838ae.png', '', 'Pusat penanganan bibir sumbing (Cleft Center)'),
(55, '26de81d31453030d0030ce25d741af21.png', '', 'Pusat Kesehatan Pendengaran (Hearing Center)'),
(56, '391b185605137281c869e527bf0c9d2c.png', '', 'EEG/EMG (Pemeriksaan Syaraf dan Otot)'),
(57, 'f0f21585d5d4b8701589a1d63d88bf53.png', '', 'Pusat penanganan cedera olahraga (Sport Center)'),
(58, '8e8da9a10353aabff1944fcd2fe9595f.png', '', 'Pusat Kesehatan Jiwa'),
(59, '1ece48436d8706b788095fd0e801c42b.png', '', 'OAE/BERA (Pemeriksaan Fungsi Pendengaran)'),
(60, '9b18730b04a2693206c865fc3a1eaa38.png', '', 'Pusat Tumbuh Kembang Anak terpadu');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `ID_Poli` int(11) NOT NULL,
  `ID_SPS` varchar(10) NOT NULL,
  `Photo_poli` varchar(100) NOT NULL,
  `ID_Kepala` varchar(10) NOT NULL,
  `Ruangan_Poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`ID_Poli`, `ID_SPS`, `Photo_poli`, `ID_Kepala`, `Ruangan_Poli`) VALUES
(1, 'S01', '3a00d5d83d28550e52ee02a7bb4efe9c.jpg', 'D010001', 'lantai 2'),
(2, 'S03', 'f0bf3ccc15776c16538a24bc676fe3fd.jpg', 'D030001', 'lantai 2');

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `kd_sps` char(5) NOT NULL DEFAULT '',
  `nm_sps` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`kd_sps`, `nm_sps`) VALUES
('S01', 'Dokter Umum'),
('S03', 'Penyakit Dalam'),
('S04', 'Anak'),
('S05', 'Bedah'),
('S06', 'Obstetri & Ginekologi'),
('S07', 'Anestesi'),
('S08', 'Radiologi'),
('S09', 'Patologi Klinik'),
('S10', 'Patologi Anatomi'),
('S11', 'Rehabilitasi Medik'),
('S12', 'Mata'),
('S13', 'THT & KL'),
('S14', 'Syaraf'),
('S15', 'Jantung & Pembuluh Darah'),
('S16', 'Kulit dan Kelamin'),
('S17', 'Kedokteran Jiwa'),
('S18', 'Paru'),
('S19', 'Ortopedi'),
('S20', 'Urologi'),
('S21', 'Bedah Syaraf'),
('S22', 'Bedah Plastik'),
('S23', 'Kedokteran Forensik'),
('S24', 'Bedah Konsultan'),
('S25', 'Penyakit Dalam Konsultan'),
('S26', 'Anak Konsultan'),
('S27', 'Obgin Konsultan'),
('S28', 'Mata Konsultan'),
('S29', 'THT Konsultan'),
('S30', 'Syaraf Konsultan'),
('S31', 'Jantung Konsultan'),
('S32', 'Kulit Konsultan'),
('S33', 'Jiwa Konsultan'),
('S34', 'Paru Konsultan'),
('S35', 'Ortopedi Konsultan'),
('S36', 'Urologi Konsultan'),
('S37', 'Bedah Syaraf Konsultan'),
('S38', 'Bedah Plastik Konsultan'),
('S39', 'Gigi dan Mulut Konsultan'),
('S40', 'Bedah Mulut'),
('S41', 'Konservasi/Endodonsi'),
('S42', 'Periodonti'),
('S43', 'Ortodonti'),
('S44', 'Prostodonti'),
('S45', 'Pedodonsi'),
('S46', 'Penyakit Mulut'),
('S47', 'Mikrobiologi Klinik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asside`
--
ALTER TABLE `asside`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`ID_Hari`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jadwal01`
--
ALTER TABLE `jadwal01`
  ADD PRIMARY KEY (`ID_Jadwal`);

--
-- Indexes for table `keunggulan`
--
ALTER TABLE `keunggulan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`ID_Poli`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`kd_sps`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asside`
--
ALTER TABLE `asside`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `keunggulan`
--
ALTER TABLE `keunggulan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `ID_Poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
