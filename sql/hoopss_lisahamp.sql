-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 26 May 2014, 23:24:16
-- Sunucu sürümü: 5.5.35-0ubuntu0.12.04.2
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `hoopss_lisahamp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `coverImage` varchar(255) NOT NULL,
  `time` int(25) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `announcements`
--

INSERT INTO `announcements` (`id`, `code`, `name`, `description`, `coverImage`, `time`) VALUES
(2, 'Lisa-Hampton-web-site-is-opened', 'Lisa Hampton web site is opened', 'Lisa Hampton''s new orfficial website is published today.', 'lisa11.jpg', 1395137877),
(4, 'test1', 'test1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a placerat metus. Donec eget commodo leo. In non luctus urna. Curabitur vulputate magna nec erat luctus vestibulum. Ut vitae odio orci. Cras ante urna, tristique in orci at, aliquam laoreet erat. Curabitur tortor mi, egestas quis elit vel, sagittis vestibulum mauris. Phasellus aliquam enim ac auctor convallis. Cras quam lorem, imperdiet non sodales pharetra, lobortis at neque. Duis dignissim rutrum mi, in auctor felis ultricies in.', 'lisa13.jpg', 1395146135),
(5, 'test2', 'test2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a placerat metus. Donec eget commodo leo. In non luctus urna. Curabitur vulputate magna nec erat luctus vestibulum. Ut vitae odio orci. Cras ante urna, tristique in orci at, aliquam laoreet erat. Curabitur tortor mi, egestas quis elit vel, sagittis vestibulum mauris. Phasellus aliquam enim ac auctor convallis. Cras quam lorem, imperdiet non sodales pharetra, lobortis at neque. Duis dignissim rutrum mi, in auctor felis ultricies in.', 'lisa14.jpg', 1395146151),
(6, 'test3', 'test3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a placerat metus. Donec eget commodo leo. In non luctus urna. Curabitur vulputate magna nec erat luctus vestibulum. Ut vitae odio orci. Cras ante urna, tristique in orci at, aliquam laoreet erat. Curabitur tortor mi, egestas quis elit vel, sagittis vestibulum mauris. Phasellus aliquam enim ac auctor convallis. Cras quam lorem, imperdiet non sodales pharetra, lobortis at neque. Duis dignissim rutrum mi, in auctor felis ultricies in.', 'lisa15.jpg', 1395146174),
(7, 'test4', 'test4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a placerat metus. Donec eget commodo leo. In non luctus urna. Curabitur vulputate magna nec erat luctus vestibulum. Ut vitae odio orci. Cras ante urna, tristique in orci at, aliquam laoreet erat. Curabitur tortor mi, egestas quis elit vel, sagittis vestibulum mauris. Phasellus aliquam enim ac auctor convallis. Cras quam lorem, imperdiet non sodales pharetra, lobortis at neque. Duis dignissim rutrum mi, in auctor felis ultricies in.', 'lisa16.jpg', 1395146193),
(8, 'test5', 'test5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a placerat metus. Donec eget commodo leo. In non luctus urna. Curabitur vulputate magna nec erat luctus vestibulum. Ut vitae odio orci. Cras ante urna, tristique in orci at, aliquam laoreet erat. Curabitur tortor mi, egestas quis elit vel, sagittis vestibulum mauris. Phasellus aliquam enim ac auctor convallis. Cras quam lorem, imperdiet non sodales pharetra, lobortis at neque. Duis dignissim rutrum mi, in auctor felis ultricies in.', 'lisa17.jpg', 1395146207),
(9, 'test6', 'test6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla gravida augue sem, tempus accumsan dolor ornare a. Fusce vulputate velit ante, eget tempus mi iaculis at. Nulla pretium nibh vel ipsum bibendum, sit amet sodales tellus volutpat. Praesent tempor faucibus lacus vel malesuada. Donec bibendum mi ut felis sollicitudin imperdiet. Quisque convallis metus imperdiet, auctor nunc eu, iaculis justo. Duis blandit bibendum mi vitae dignissim. Pellentesque sit amet iaculis mauris, eu aliquet lacus. Aenean volutpat lorem sed vulputate eleifend. Aenean vulputate hendrerit adipiscing.\n\nCurabitur ac mollis magna. Nullam vulputate est vitae vestibulum consequat. Nulla et elit ut lorem dictum lobortis ac ac turpis. Morbi sem purus, commodo sit amet laoreet sit amet, iaculis ac augue. Fusce felis ipsum, convallis a pharetra pulvinar, scelerisque a lacus. Donec eu libero nisl. Nullam feugiat leo a feugiat iaculis. Ut in risus purus. Aenean tempor viverra sapien in volutpat. Nunc bibendum semper sapien sed tincidunt. Sed sed ligula vel lorem semper dignissim. Phasellus non vulputate risus, vitae euismod leo. Morbi vel dui pulvinar, placerat mauris in, dictum nibh. Nunc eget nulla sit amet nulla iaculis suscipit a vitae ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus.\n\nPellentesque elementum erat a dui fermentum mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisi purus, viverra ut magna vel, laoreet vestibulum dolor. Nunc sagittis imperdiet rhoncus. Nunc sit amet aliquet nibh. Maecenas et erat sodales, sagittis eros a, pharetra nulla. Vivamus dictum luctus convallis. Vivamus tincidunt justo ac sollicitudin viverra. Aliquam suscipit ipsum sed odio faucibus ullamcorper.\n\nQuisque eget eros a ante egestas mollis. Curabitur ante eros, commodo quis semper ac, consectetur eu nunc. Suspendisse aliquet faucibus massa vitae rhoncus. Vestibulum rhoncus erat ac imperdiet sodales. Vivamus pharetra volutpat imperdiet. Nulla vehicula erat ullamcorper neque sollicitudin aliquam vitae in ipsum. Donec nec interdum neque. Nulla eleifend nunc tortor, a porta erat sagittis id. Donec bibendum dictum suscipit. In vel tortor lorem. Phasellus eu faucibus velit, a porttitor lorem. Sed ut fringilla tortor.\n\nEtiam aliquet auctor est, vel convallis urna venenatis ut. Praesent feugiat elit justo, quis cursus augue eleifend adipiscing. Cras vitae libero vel sapien fermentum tincidunt eu a nibh. Ut porta varius nulla in luctus. Quisque commodo vulputate metus, at semper ipsum dignissim sed. Etiam nibh velit, ullamcorper ac neque et, semper imperdiet nisl. Curabitur adipiscing orci quis mi gravida, id pretium nisl mollis. Phasellus egestas libero diam, sed fermentum nulla eleifend et. Morbi interdum non massa ullamcorper pretium. Curabitur venenatis purus nec elit consectetur placerat. Nam fringilla orci at lectus euismod condimentum. Integer lacinia ac neque ut cursus. Vestibulum dictum sapien at magna condimentum, eget sodales massa sagittis. Nulla ut diam varius, convallis ligula at, vulputate arcu.', 'lisa18.jpg', 1395219863);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `coverImage` varchar(255) NOT NULL,
  `rank` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `code`, `name`, `description`, `coverImage`, `rank`) VALUES
(22, '2-step-stool', '2-step stool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.\n', '7-2step-stool2.jpg', 4),
(2, 'christmas-with-polka-dots', 'christmas with polka-dots', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '8-polkadot-stool.jpg', 9),
(3, 'gittern-rosette', 'gittern rosette', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '14-rosette.jpg', 3),
(4, 'cherry_stool', 'Cherry Stool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '21-cherry-stool.jpg', 7),
(5, 'small_metal_stool', 'Small Metal Stool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '23-small-metal-stool.jpg', 6),
(6, 'bar-stool', 'bar stool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '25-bar-stool1.jpg', 2),
(7, 'torso', 'torso', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '29-torso.jpg', 15),
(8, 'facade', 'Facade', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '33-facade.jpg', 12),
(9, 'headboard', 'Headboard', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '36-headboard.jpg', 13),
(10, 'bird-at-the-bottom', 'bird at the bottom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '39-container.jpg', 14),
(11, 'finished-finally', 'finished finally', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '41-bench.jpg', 5),
(12, 'bowel', 'Bowel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '51-bowel.jpg', 8),
(13, 'cedar_stool', 'Cedar Stool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '16-cedar-stool.jpg', 11),
(14, 'purplehearth_stool', 'Purplehearth Stool', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.', '19-purpleheart-stool.jpg', 10),
(23, '4zee', '4zee', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim nisi ut tristique convallis. Mauris ut ullamcorper risus. Vestibulum id vehicula velit. Mauris at metus sit amet orci mattis blandit tempus nec ante. Vestibulum vitae ullamcorper erat, vel vehicula dolor. Fusce lacinia condimentum mollis. Nunc a elementum mauris. Nam non tempor nulla. Nunc sed porttitor nisi. Ut in dolor metus. Phasellus id nunc cursus, volutpat est in, tristique urna. Phasellus nec purus quis mi commodo viverra non a odio. Ut interdum id odio id commodo.\n', 'IMG-20140314-WA00053.jpg', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('715c8d501cdf131c9a62e4c30e06d50e', '188.3.146.153', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36', 1401125042, ''),
('f1830c11f3ff531c769175ce08fdf941', '176.33.131.103', 'Mozilla/5.0 (X11; Linux x86_64; rv:29.0) Gecko/20100101 Firefox/29.0', 1401110187, 'a:4:{s:9:"user_data";s:0:"";s:8:"username";s:5:"bedri";s:5:"email";s:18:"bedri@istanbul.com";s:8:"loggedin";b:1;}'),
('226f735b898c580261af461a7692cca2', '188.3.146.153', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36', 1401110632, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `coverImage` varchar(255) NOT NULL,
  `time` int(25) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `contents`
--

INSERT INTO `contents` (`id`, `code`, `name`, `description`, `coverImage`, `time`) VALUES
(2, 'About', 'About', 'Lisa Hampton is an artist/designer/builder who works with wood. Not just any wood – but rather the bits and pieces that have been cast-off, deemed unattractive, or have no further use to others. She takes this gang of misfits and re-purposes them into sculptural and functional forms – ranging from benches and stools, to bowls, pendants, and framed marquetry pieces. . What started as a space saving challenge has evolved into a life pursuit.\n\nShe works with 100% re-claimed material. All wood is found or donated with the stories behind all pieces - cataloged and shared. She not only desires to share the joy of wood – one re-claimed piece at a time – but also to demonstrate how other’s waste can be reworked.\n\nShe continues to explore the possibilities of wood – with the recent venture into the world of string instruments as both a technical challenge and way to understand the life of a luthier.\n\nLisa currently resides in Toronto.\n\n', 'lisa19.jpg', 1401050172);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoryId` int(10) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `link` (`link`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `categoryId`, `link`) VALUES
(73, 23, 'IMG-20140314-WA00003.jpg'),
(72, 22, '7-2step-stool.jpg'),
(71, 22, '6-2step-stool.jpg'),
(70, 22, '5-2step-stool.jpg'),
(69, 22, '4-2step-stool.jpg'),
(68, 22, '3-2step-stool.jpg'),
(8, 2, '8-polkadot-stool.jpg'),
(9, 2, '9-polkadot-stool.jpg'),
(10, 2, '10-polkadot-stool.jpg'),
(11, 2, '11-polkadot-stool.jpg'),
(12, 2, '12-polkadot-stool.jpg'),
(13, 2, '13-polkadot-stool.jpg'),
(14, 3, '14-rosette.jpg'),
(15, 13, '15-cedar-stool.jpg'),
(16, 13, '16-cedar-stool.jpg'),
(17, 13, '17-cedar-stool.jpg'),
(18, 13, '18-cedar-stool.jpg'),
(19, 14, '19-purpleheart-stool.jpg'),
(20, 14, '20-purpleheart-stool.jpg'),
(21, 4, '21-cherry-stool.jpg'),
(22, 4, '22-cherry-stool.jpg'),
(23, 5, '23-small-metal-stool.jpg'),
(24, 5, '24-small-metal-stool.jpg'),
(25, 6, '25-bar-stool.jpg'),
(26, 6, '26-bar-stool.jpg'),
(27, 6, '27-bar-stool.jpg'),
(28, 7, '28-torso.jpg'),
(29, 7, '29-torso.jpg'),
(30, 8, '30-facade.jpg'),
(31, 8, '31-facade.jpg'),
(32, 8, '32-facade.jpg'),
(33, 8, '33-facade.jpg'),
(34, 9, '34-headboard.jpg'),
(35, 9, '35-headboard.jpg'),
(36, 9, '36-headboard.jpg'),
(37, 9, '37-headboard.jpg'),
(38, 10, '38-container.jpg'),
(39, 10, '39-container.jpg'),
(40, 11, '40-bench.jpg'),
(41, 11, '41-bench.jpg'),
(42, 11, '42-bench.jpg'),
(43, 11, '43-bench.jpg'),
(44, 11, '44-bench.jpg'),
(45, 11, '45-bench.jpg'),
(46, 11, '46-bench.jpg'),
(47, 11, '47-bench.jpg'),
(48, 11, '48-bench.jpg'),
(49, 11, '49-bench.jpg'),
(50, 11, '50-bench.jpg'),
(51, 12, '51-bowel.jpg'),
(52, 12, '52-bowel.jpg'),
(74, 23, 'IMG-20140314-WA00012.jpg'),
(75, 23, 'IMG-20140314-WA00021.jpg'),
(76, 23, 'IMG-20140314-WA0003.jpg'),
(77, 23, 'IMG-20140314-WA0004.jpg'),
(78, 23, 'IMG-20140314-WA0005.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'c8bd4ab55430618c108fc23f01352cd6', 'zeynepertug999@gmail.com'),
(2, 'bedri', '4ca4e5ed59565c6137750746cfd7b302', 'bedri@istanbul.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
