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
  `lokasi_jalan` text,
  `long` float DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `alter_tempuh` varchar(100) DEFAULT NULL,
  `id_jalan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alter`),
  KEY `alter` (`id_jalan`),
  CONSTRAINT `alter` FOREIGN KEY (`id_jalan`) REFERENCES `jalan` (`id_jalan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `alternatif` */

insert  into `alternatif`(`id_alter`,`lokasi_jalan`,`long`,`lat`,`alter_tempuh`,`id_jalan`) values (1,'surabaya',112.752,-7.25747,'1',1),(5,'batu',112.533,-7.88306,'2',2);

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` text,
  `isi_berita` text,
  `foto_berita` text,
  `waktu_input` datetime DEFAULT NULL,
  `waktu_update` datetime DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `user_fk` (`penulis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

insert  into `berita`(`id_berita`,`judul_berita`,`isi_berita`,`foto_berita`,`waktu_input`,`waktu_update`,`penulis`,`email`,`no_hp`,`lokasi`,`lat`,`lng`) values (1,'orang hilang','ditemukan orang hilang dengan ciri tidak telihat kasat mata',NULL,NULL,NULL,'makhfud zamhari','makhfudzamhari@gmail.com',NULL,'jalan gajayana no 50 malang','-7.951536399999999','112.60846859999992'),(2,'pawai di karang besuki sebabkan macet','dalam rangka menyambut bulan ramadhan. kelurahan gasek mengadakan pawai bersih desa.namun hal tersebut mengakibatkan kemacetan parah pada ruas ruas jalan tertentu',NULL,'2017-05-28 00:00:00',NULL,'maulidah fithriyah','fithriyah.fm@gmail.com',NULL,'gasek karang besuki malang','-7.954104','112.59671700000001'),(3,'kecelakaan lalu lintas','terjadi kecelakaan beruntun',NULL,'2017-05-29 00:00:00',NULL,'maulidah fithriyah','fithriyah.fm@gmail.com',NULL,'jalan soekarno hatta Malang','-7.940746300000001','112.62199899999996');

/*Table structure for table `jalan` */

DROP TABLE IF EXISTS `jalan`;

CREATE TABLE `jalan` (
  `id_jalan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jalan` varchar(200) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `kondisi_jalan` text,
  PRIMARY KEY (`id_jalan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `jalan` */

insert  into `jalan`(`id_jalan`,`nama_jalan`,`longitude`,`latitude`,`kondisi_jalan`) values (1,'Jl. Raya Candi V No.303, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65151, Indonesia','112.5982832','-7.955409400000001','kondisi jalan tidak baik ketika sore hari'),(2,'Jl. Raya Candi VI C No.315, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65149, Indonesia','112.5985563','-7.953169900000001',NULL),(3,'Jl. Raya Candi VI C No.315, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65149, Indonesia','112.5985563','-7.953169900000001',NULL),(4,'Jl. Raya Candi VI C No.315, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65149, Indonesia','112.5985563','-7.953169900000001',NULL);

/*Table structure for table `kemacetan` */

DROP TABLE IF EXISTS `kemacetan`;

CREATE TABLE `kemacetan` (
  `id_kemacetan` int(11) NOT NULL AUTO_INCREMENT,
  `jam_kemacetan` varchar(8) DEFAULT NULL,
  `tingkat_kemacetan` varchar(20) DEFAULT NULL,
  `titik_kemacetan` varchar(100) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `id_jalan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kemacetan`),
  KEY `kemacetan_jalan_fk` (`id_jalan`),
  CONSTRAINT `kemacetan_jalan_fk` FOREIGN KEY (`id_jalan`) REFERENCES `jalan` (`id_jalan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kemacetan` */

insert  into `kemacetan`(`id_kemacetan`,`jam_kemacetan`,`tingkat_kemacetan`,`titik_kemacetan`,`lat`,`lng`,`id_jalan`) values (1,'12.20','normal','batu','-7.883064800000001','112.53344919999995',2);

/*Table structure for table `saran` */

DROP TABLE IF EXISTS `saran`;

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(100) DEFAULT NULL,
  `email_pengirim` varchar(100) DEFAULT NULL,
  `isi_saran` text,
  `tgl_masukan` datetime DEFAULT NULL,
  PRIMARY KEY (`id_saran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `saran` */

/*Table structure for table `tabel_user` */

DROP TABLE IF EXISTS `tabel_user`;

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tabel_user` */

insert  into `tabel_user`(`id_user`,`username`,`email`,`password`,`telepon`,`alamat`) values (1,'makhfud','kngmhfd@gmail.com','02031209','08912612612','ngawi');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
