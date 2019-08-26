/*
SQLyog Ultimate v9.02 
MySQL - 5.6.26 : Database - db_skpi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_skpi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_skpi`;

/*Table structure for table `aktivitas` */

DROP TABLE IF EXISTS `aktivitas`;

CREATE TABLE `aktivitas` (
  `nim` int(20) DEFAULT NULL,
  `id_penghargaan` int(10) DEFAULT NULL,
  `id_pelatihan` int(10) DEFAULT NULL,
  `id_organisasi` int(10) DEFAULT NULL,
  `id_keahlian` int(10) DEFAULT NULL,
  `id_pkk` int(10) DEFAULT NULL,
  `id_kripsi` int(10) DEFAULT NULL,
  KEY `FK_aktivitas` (`id_penghargaan`),
  KEY `FK_aktivitas1` (`id_pelatihan`),
  KEY `FK_aktivitas2` (`id_organisasi`),
  KEY `FK_aktivitas3` (`id_keahlian`),
  KEY `FK_aktivitas4` (`id_pkk`),
  KEY `FK_aktivitas5` (`id_kripsi`),
  KEY `FK_aktivitas7` (`nim`),
  CONSTRAINT `FK_aktivitas` FOREIGN KEY (`id_penghargaan`) REFERENCES `penghargaan` (`id_penghargaan`),
  CONSTRAINT `FK_aktivitas1` FOREIGN KEY (`id_pelatihan`) REFERENCES `pelatihan` (`id_pelatihan`),
  CONSTRAINT `FK_aktivitas2` FOREIGN KEY (`id_organisasi`) REFERENCES `organisasi` (`id_organisasi`),
  CONSTRAINT `FK_aktivitas3` FOREIGN KEY (`id_keahlian`) REFERENCES `keahlian` (`id_keahlian`),
  CONSTRAINT `FK_aktivitas4` FOREIGN KEY (`id_pkk`) REFERENCES `pkk` (`id_pkk`),
  CONSTRAINT `FK_aktivitas5` FOREIGN KEY (`id_kripsi`) REFERENCES `skripsi` (`id_skripsi`),
  CONSTRAINT `FK_aktivitas7` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `aktivitas` */

/*Table structure for table `keahlian` */

DROP TABLE IF EXISTS `keahlian`;

CREATE TABLE `keahlian` (
  `id_keahlian` int(10) NOT NULL AUTO_INCREMENT,
  `nama_keahlian` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `tahun` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_keahlian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `keahlian` */

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` int(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `thn_lulus` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `FK_mahasiswa` (`id_user`),
  CONSTRAINT `FK_mahasiswa` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`tempat_lahir`,`tgl_lahir`,`gelar`,`thn_lulus`,`id_user`) values (123456789,'Imam ','Bogor','0000-00-00','spd',2020,1);

/*Table structure for table `organisasi` */

DROP TABLE IF EXISTS `organisasi`;

CREATE TABLE `organisasi` (
  `id_organisasi` int(10) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) DEFAULT NULL,
  `nama_organisasi` varchar(100) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `periode` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_organisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `organisasi` */

/*Table structure for table `pelatihan` */

DROP TABLE IF EXISTS `pelatihan`;

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pelatihan` varchar(100) DEFAULT NULL,
  `tema` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_pelatihan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelatihan` */

/*Table structure for table `penghargaan` */

DROP TABLE IF EXISTS `penghargaan`;

CREATE TABLE `penghargaan` (
  `id_penghargaan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_penghargaan` varchar(50) DEFAULT NULL,
  `nama_acara` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `bulan` varchar(10) DEFAULT NULL,
  `tahun` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_penghargaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `penghargaan` */

/*Table structure for table `pkk` */

DROP TABLE IF EXISTS `pkk`;

CREATE TABLE `pkk` (
  `id_pkk` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_pkk` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `tahun` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_pkk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pkk` */

/*Table structure for table `prodi` */

DROP TABLE IF EXISTS `prodi`;

CREATE TABLE `prodi` (
  `kd_prodi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(50) DEFAULT NULL,
  `kaprodi` varchar(50) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`kd_prodi`),
  KEY `FK_prodi` (`id_user`),
  CONSTRAINT `FK_prodi` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prodi` */

/*Table structure for table `skripsi` */

DROP TABLE IF EXISTS `skripsi`;

CREATE TABLE `skripsi` (
  `id_skripsi` int(10) NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_skripsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `skripsi` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type_user` enum('admin','kaprodi','mahasiswa') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`type_user`) values (1,'admin','admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
