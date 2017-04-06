/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.21 : Database - webgis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`webgis` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `webgis`;

/*Table structure for table `alternatif` */

DROP TABLE IF EXISTS `alternatif`;

CREATE TABLE `alternatif` (
  `id_alter` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jalan` varchar(100) DEFAULT NULL,
  `lokasi_jalan` text,
  `lang` float DEFAULT NULL,
  `lot` float DEFAULT NULL,
  `alter_tempuh` varchar(100) DEFAULT NULL,
  `waktu_alter` varchar(10) DEFAULT NULL,
  `foto_alter` text,
  `id_jalan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alter`),
  KEY `alter` (`id_jalan`),
  CONSTRAINT `alter` FOREIGN KEY (`id_jalan`) REFERENCES `jalan` (`id_jalan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alternatif` */

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(20) DEFAULT NULL,
  `isi_berita` text,
  `foto_berita` text,
  `waktu_input` datetime DEFAULT NULL,
  `waktu_update` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `user_fk` (`id_user`),
  CONSTRAINT `user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

/*Table structure for table `jalan` */

DROP TABLE IF EXISTS `jalan`;

CREATE TABLE `jalan` (
  `id_jalan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jalan` varchar(200) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `foto_jalan` text,
  PRIMARY KEY (`id_jalan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `jalan` */

insert  into `jalan`(`id_jalan`,`nama_jalan`,`longitude`,`latitude`,`foto_jalan`) values (1,'Jl. Raya Candi V No.303, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65151, Indonesia','112.597826','-7.955513000000001',NULL),(2,'Jl. Raya Candi VI C No.315, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65149, Indonesia','112.5985563','-7.953169900000001',NULL),(3,'Jl. Raya Candi VI C No.315, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65149, Indonesia','112.5985563','-7.953169900000001',NULL),(4,'Jl. Raya Candi VI C No.315, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65149, Indonesia','112.5985563','-7.953169900000001',NULL),(5,'Jl. Sunan Kalijaga Dalam No.22, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65149, Indonesia','112.6045695','-7.950148899999999',NULL);

/*Table structure for table `kemacetan` */

DROP TABLE IF EXISTS `kemacetan`;

CREATE TABLE `kemacetan` (
  `id_kemacetan` int(11) NOT NULL AUTO_INCREMENT,
  `jam_kemacetan` varchar(8) DEFAULT NULL,
  `tingkat_kemacetan` varchar(20) DEFAULT NULL,
  `id_jalan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kemacetan`),
  KEY `kemacetan_jalan_fk` (`id_jalan`),
  CONSTRAINT `kemacetan_jalan_fk` FOREIGN KEY (`id_jalan`) REFERENCES `jalan` (`id_jalan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kemacetan` */

/*Table structure for table `saran` */

DROP TABLE IF EXISTS `saran`;

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL AUTO_INCREMENT,
  `judul_saran` varchar(100) DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `email_pengirim` varchar(100) DEFAULT NULL,
  `isi_saran` text,
  `tgl_masukan` datetime DEFAULT NULL,
  PRIMARY KEY (`id_saran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `saran` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
