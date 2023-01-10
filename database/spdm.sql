-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 07:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tahun_masuk_pt` varchar(50) NOT NULL,
  `alumni` varchar(100) NOT NULL,
  `sumber_biaya` varchar(100) NOT NULL,
  `status_beasiswa` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `hp_ortu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nama`, `nim`, `nisn`, `prodi`, `semester`, `kelas`, `email`, `telepon`, `jenis_kelamin`, `tempat_lahir`, `kabupaten`, `tanggal_lahir`, `status_perkawinan`, `agama`, `tahun_masuk_pt`, `alumni`, `sumber_biaya`, `status_beasiswa`, `nama_ayah`, `nama_ibu`, `hp_ortu`) VALUES
(1, 'Rahmat Irianto', '2004111010023', '09842', 'Teknik Komputer', '6', 'A', 'rahmat@gmail.com', '081298762987', 'Laki-laki', 'Medan', 'Pariban', '5 feb 2003', 'Belum Kawin', 'Islam', '2020', 'SMA 1 medan', 'Biaya Orang tua', 'Tidak Menerima Beasiswa', 'Rudi', 'Yuli', '081276539876'),
(5, 'Marselino', '2004110100651', '097623', 'Teknik Pertambangan', '6', 'B', 'marselino@gmail.com', '086588290956', 'laki-laki', 'Langsa', 'Langsa Baro', '2023-01-26', 'Belum Kawin', 'Islam', '2020', 'SMA 7 Langsa', 'Orang Tua', 'Tidak Beasiswa', 'Fergi', 'Rini', '082382849211'),
(6, 'Azka Aulia', '2004111010068', '09123', 'Teknik Komputer', '8', 'D', 'azka@gmail.com', '082154329281', 'laki-laki', 'Seuriget', 'Tamiang', '2023-01-07', 'Belum Kawin', 'Islam', '2019', 'SMA 2 Seuriget', 'Orang Tua', 'Tidak Beasiswa', 'Nasir', 'Arbaiyah', '081233248293'),
(7, 'Taufiq renaldi', '190001023199', '09213', 'Arsitektur', '4', 'A', 'hidayat3@gmail.com', '081276542897', 'laki-laki', 'Medan', 'Pariban', '2023-03-10', 'Belum Kawin', 'Hindu', '2021', 'SMK 9 pariban', 'Orang Tua', 'Beasiswa', 'Junaidi', 'Fitri', '081263729102'),
(8, 'Egy Maulana FIkri', '1804111237711', '09126', 'Teknik Geologi', '2', 'C', 'fikrigy@gmail.com', '081265542837', 'laki-laki', 'Lhokseumawe', 'PB Seuleumak', '2022-11-11', 'Belum Kawin', 'Konghucu', '2022', 'SMK 1 PB seuleumak', 'Orang Tua', 'Tidak Beasiswa', 'Ihsan', 'Dita', '081267834453'),
(9, 'Della Lestary', '152000304415', '09772', 'Perencanaan Wilayah dan Kota', '4', 'A', 'kedellestary@gmail.com', '081267832198', 'Perempuan', 'Aceh Tamiang', 'Bukit Pandan', '2023-02-10', 'Belum Kawin', 'Islam', '2021', 'SMK 2 Langsa', 'Orang Tua', 'Tidak Beasiswa', 'Keder', 'husna', '081264528374'),
(10, 'Wan Hayatun Nisa', '8344111384400', '092989', 'Teknik Pertambangan', '8', 'A', 'wanhayat@gmail.com', '081276522276', 'Perempuan', 'Langsa', 'Seulalah', '2023-01-30', 'Belum Kawin', 'Katolik', '2019', 'SMK 2 Langsa', '-', 'Beasiswa', 'furqan', 'ayu', '082576545567'),
(11, 'Ayu Hardiani', '2003677611123', '098888', 'Teknik Mesin', '4', 'D', 'ayu@gmail.com', '081273728192', 'laki-laki', 'Aceh Selatan', 'Breuneun', '2023-01-28', 'Belum Kawin', 'Kristen', '2021', 'SMK8 Aceh Tamiang', '-', 'Beasiswa', 'Ahmadiar', 'Diva', '081521678283'),
(12, 'Putri Nazila', '2041444201100', '09442', 'Teknik Elektro', '4', 'B', 'putri@gmail.com', '083247529395', 'Perempuan', 'Sumut', 'karanganyer', '2023-01-28', 'Belum Kawin', 'Budha', '2021', 'SMA 6 Karanganyer', 'Orang Tua', 'Tidak Beasiswa', 'rudi', 'hinata', '081345626374'),
(13, 'Arhan Pratama', '2041222030041', '098766', 'Teknik Industri', '6', 'B', 'Arhan@gmail.com', '098762538921', 'laki-laki', 'Semarang', 'Gergaji Balekambang', '2023-01-01', 'Belum Kawin', 'Katolik', '2020', 'SMA 7 gergaji', '-', 'Beasiswa', 'furqan', 'nazla', '0918736172382');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
