/*
SQLyog Professional v12.09 (64 bit)
MySQL - 5.6.16 : Database - personal_assistant
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`personal_assistant` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `personal_assistant`;

/*Table structure for table `artikel` */

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `ringkasan` text NOT NULL,
  `isi` text NOT NULL,
  `status_artikel` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `artikel` */

insert  into `artikel`(`id_artikel`,`judul`,`slug`,`ringkasan`,`isi`,`status_artikel`,`id_user`,`tanggal`) values (1,'Latihan Code Igniter','latihan-code-igniter','<p>Quis nostrud exercitation ut enim ad minim veniam, eu fugiat nulla pariatur. Cupidatat non proident, consectetur adipisicing elit, mollit anim id est laborum. Ut labore et dolore magna aliqua.</p>','<p>Quis nostrud exercitation ut enim ad minim veniam, eu fugiat nulla pariatur. Cupidatat non proident, consectetur adipisicing elit, mollit anim id est laborum. Ut labore et dolore magna aliqua.</p>\r\n<p>In reprehenderit in voluptate quis nostrud exercitation ut enim ad minim veniam. Sed do eiusmod tempor incididunt eu fugiat nulla pariatur. Sunt in culpa in reprehenderit in voluptate consectetur adipisicing elit.</p>\r\n<p>Velit esse cillum dolore ut enim ad minim veniam. Duis aute irure dolor ut aliquip ex ea commodo consequat. Eu fugiat nulla pariatur. Ut labore et dolore magna aliqua.</p>\r\n<p>Quis nostrud exercitation in reprehenderit in voluptate duis aute irure dolor. Ullamco laboris nisi sed do eiusmod tempor incididunt cupidatat non proident. Consectetur adipisicing elit, sunt in culpa mollit anim id est laborum. Ut aliquip ex ea commodo consequat.</p>\r\n<p>Velit esse cillum dolore qui officia deserunt lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ullamco laboris nisi. Velit esse cillum dolore eu fugiat nulla pariatur. Qui officia deserunt duis aute irure dolor lorem ipsum dolor sit amet. Sed do eiusmod tempor incididunt sunt in culpa cupidatat non proident.</p>','Publish',1,'2016-03-13 15:01:06'),(2,'Menampilkan berita dengan CI','menampilkan-berita-dengan-ci','<p>Cumque nihil impedit quo minus at vero eos et accusamus et iusto odio cum soluta nobis est eligendi optio. Id quod maxime placeat facere possimus, omnis dolor repellendus. Nisi ut aliquid ex ea commodi consequatur? Neque porro quisquam est, sed ut perspiciatis unde omnis cum soluta nobis est eligendi optio.</p>','<p>Cumque nihil impedit quo minus at vero eos et accusamus et iusto odio cum soluta nobis est eligendi optio. Id quod maxime placeat facere possimus, omnis dolor repellendus. Nisi ut aliquid ex ea commodi consequatur? Neque porro quisquam est, sed ut perspiciatis unde omnis cum soluta nobis est eligendi optio.</p>\r\n<p>Sed quia non numquam eius modi iste natus error sit voluptatem quis autem vel eum iure reprehenderit. Saepe eveniet ut et voluptates repudiandae sint ullam corporis suscipit laboriosam, excepturi sint occaecati cupiditate non provident. Sed quia consequuntur magni dolores eos dicta sunt explicabo.</p>\r\n<p>Nisi ut aliquid ex ea commodi consequatur? Totam rem aperiam, omnis voluptas assumenda est, sed quia non numquam eius modi. Et quasi architecto beatae vitae dignissimos ducimus qui blanditiis qui in ea voluptate. Vel illum qui dolorem eum fugiat omnis voluptas assumenda est, quis autem vel eum iure reprehenderit.</p>\r\n<p>Ullam corporis suscipit laboriosam, id est laborum et dolorum fuga. Sed quia consequuntur magni dolores eos consequatur aut perferendis doloribus asperiores repellat. Sed quia non numquam eius modi quo voluptas nulla pariatur? Accusantium doloremque laudantium, omnis dolor repellendus. Et molestiae non recusandae.</p>\r\n<p>Atque corrupti quos dolores et quas molestias nam libero tempore, et expedita distinctio. Nisi ut aliquid ex ea commodi consequatur? Quo voluptas nulla pariatur? Id quod maxime placeat facere possimus, sed quia non numquam eius modi aut odit aut fugit. Tempora incidunt ut labore et dolore praesentium voluptatum deleniti excepturi sint occaecati cupiditate non provident.</p>','Publish',1,'2016-03-13 15:01:57'),(3,'Latihan Halaman Statis dengan CI','latihan-halaman-statis-dengan-ci','<p>Big is no longer impregnable to focus on improvement, not cost, as knowledge is fragmented into specialities. Building a dynamic relationship between the main players. Empowerment of all personnel, not just key operatives, the vitality of conceptual synergies is of supreme importance organizations capable of double-loop learning.</p>','<p>Big is no longer impregnable to focus on improvement, not cost, as knowledge is fragmented into specialities. Building a dynamic relationship between the main players. Empowerment of all personnel, not just key operatives, the vitality of conceptual synergies is of supreme importance organizations capable of double-loop learning.</p>\r\n<p>Maximization of shareholder wealth through separation of ownership from management the three cs - customers, competition and change - have created a new world for business as knowledge is fragmented into specialities. In order to build a shared view of what can be improved, empowerment of all personnel, not just key operatives, through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. Building a dynamic relationship between the main players. Exploiting the productive lifecycle taking full cognizance of organizational learning parameters and principles, benchmarking against industry leaders, an essential process, should be a top priority at all times. Measure the process, not the people.</p>','Publish',1,'2016-03-13 15:01:57'),(4,'Belajar CI Sendiri','belajar-ci-sendiri','<p>In order to build a shared view of what can be improved, motivating participants and capturing their expectations, while those at the coal face don\'t have sufficient view of the overall goals. Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. To experience a profound paradigm shift, an important ingredient of business process reengineering the new golden rule gives enormous power to those individuals and units. Taking full cognizance of organizational learning parameters and principles, exploitation of core competencies as an essential enabler, organizations capable of double-loop learning.</p>','<p>The strategic vision - if indeed there be one - is required to identify as knowledge is fragmented into specialities whenever single-loop learning strategies go wrong. From binary cause and effect to complex patterns, in a collaborative, forward-thinking venture brought together through the merging of like minds. That will indubitably lay the firm foundations for any leading company taking full cognizance of organizational learning parameters and principles, by moving executive focus from lag financial indicators to more actionable lead indicators. By adopting project appraisal through incremental cash flow analysis, building a dynamic relationship between the main players.</p>\r\n<p>In order to build a shared view of what can be improved, motivating participants and capturing their expectations, while those at the coal face don\'t have sufficient view of the overall goals. Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. To experience a profound paradigm shift, an important ingredient of business process reengineering the new golden rule gives enormous power to those individuals and units. Taking full cognizance of organizational learning parameters and principles, exploitation of core competencies as an essential enabler, organizations capable of double-loop learning.</p>\r\n<p>The strategic vision - if indeed there be one - is required to identify an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. Highly motivated participants contributing to a valued-added outcome. An important ingredient of business process reengineering the components and priorities for the change program motivating participants and capturing their expectations. The balanced scorecard, like the executive dashboard, is an essential tool whether the organization\'s core competences are fully in line, given market realities benchmarking against industry leaders, an essential process, should be a top priority at all times.</p>','Publish',1,'2016-03-13 15:01:28');

/*Table structure for table `ruletransaction` */

CREATE TABLE `ruletransaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ruletransaction` */

insert  into `ruletransaction`(`id`,`type`) values (1,'waarmeking'),(2,'fidusia'),(3,'legalisasi');

/*Table structure for table `ruleusers` */

CREATE TABLE `ruleusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ruleusers` */

insert  into `ruleusers`(`id`,`status`) values (1,'admin'),(2,'client');

/*Table structure for table `transaction` */

CREATE TABLE `transaction` (
  `idtransaction` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `dokumen` text,
  `status` varchar(50) NOT NULL,
  `tglinput` date NOT NULL,
  `tglupdate` date NOT NULL,
  `tglselesai` date NOT NULL,
  `idtype` int(11) NOT NULL,
  PRIMARY KEY (`idtransaction`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `transaction` */

insert  into `transaction`(`idtransaction`,`iduser`,`title`,`dokumen`,`status`,`tglinput`,`tglupdate`,`tglselesai`,`idtype`) values (1,2,'TES',NULL,'TEST','2016-08-02','0000-00-00','2016-08-04',2),(2,6,'TES2',NULL,'TES2','2016-08-09','0000-00-00','0000-00-00',2);

/*Table structure for table `users` */

CREATE TABLE `users` (
  `iduser` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL DEFAULT 'password',
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `tglinput` date NOT NULL,
  `tglupdate` date NOT NULL,
  `idrule` int(11) DEFAULT NULL,
  `userrule` int(11) DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  KEY `idrule` (`idrule`),
  KEY `userrule` (`userrule`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idrule`) REFERENCES `ruleusers` (`id`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`userrule`) REFERENCES `ruletransaction` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`iduser`,`username`,`password`,`name`,`address`,`email`,`phone`,`tglinput`,`tglupdate`,`idrule`,`userrule`) values (2,'waarmeking','waarmeking','try','','tryakunku@gmail.com',NULL,'0000-00-00','0000-00-00',2,1),(6,'fidusia','fidusia','tryal','','tryakunku@gmail.com',NULL,'0000-00-00','0000-00-00',2,2),(7,'legal','legal','yaya','','tryakunku@gmail.com',NULL,'0000-00-00','0000-00-00',2,3),(8,'admin','admin','coba','','coba@coba.com',NULL,'0000-00-00','0000-00-00',1,NULL),(10,'aga saputra','123456','aga','surabaya','aga@gmail.com',2147483647,'2016-08-02','0000-00-00',2,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
