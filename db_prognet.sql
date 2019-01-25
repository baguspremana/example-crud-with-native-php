/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 10.1.16-MariaDB : Database - db_prognet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_prognet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_prognet`;

/*Table structure for table `tb_pegawai` */

DROP TABLE IF EXISTS `tb_pegawai`;

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_depan` varchar(20) DEFAULT NULL,
  `nama_belakang` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('Male','Female') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `jabatan` enum('Staff','Engineering','Cleaning Service') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pegawai` */

insert  into `tb_pegawai`(`id_pegawai`,`nama_depan`,`nama_belakang`,`jenis_kelamin`,`tanggal_lahir`,`no_hp`,`jabatan`,`alamat`) values (1,'Agus','Angga','Male','1997-10-13','087890675123','Cleaning Service','Denpasar'),(2,'tes','tes','Female','2017-10-17','987656765433','Staff','Jimbaran');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`iduser`,`username`,`password`) values (1,'admin','admin'),(2,'wira','wira');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
