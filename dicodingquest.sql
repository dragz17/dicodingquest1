create database dicodingquest;

use dicodingquest;

CREATE TABLE `identitasku` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `umur` int(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);