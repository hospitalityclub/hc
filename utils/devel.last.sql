-- MySQL dump 10.11
--
-- Host: localhost    Database: devel
-- ------------------------------------------------------
-- Server version	5.0.51a-24+lenny5

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `cities` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(100) character set utf8 default NULL,
  `latitude` float default NULL,
  `longitude` float default NULL,
  `region_id` int(11) default NULL,
  `other_names` varchar(255) character set utf8 default NULL,
  `near_city_names` text character set utf8,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `updated` datetime default NULL,
  `isvalidflag` int(2) NOT NULL default '0',
  `geofinfo` text character set utf8 NOT NULL,
  `nbmembersformap` int(11) NOT NULL default '0',
  `selectable` tinyint(1) default '0',
  `nbmembers` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `idregion` (`region_id`),
  KEY `name` (`name`),
  KEY `other_names` (`other_names`),
  FULLTEXT KEY `i_city_fulltext` (`name`,`other_names`),
  FULLTEXT KEY `near_city_names_fulltext` (`near_city_names`)
) ENGINE=MyISAM AUTO_INCREMENT=78112 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `from_member` int(11) NOT NULL default '0',
  `to_member` int(11) NOT NULL default '0',
  `comment` text NOT NULL,
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `type` enum('normal','hcadmin','badcomment','passedaway') NOT NULL default 'normal',
  PRIMARY KEY  (`id`),
  KEY `to_member` (`to_member`),
  KEY `from_member` (`from_member`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `countries` (
  `id` int(4) NOT NULL auto_increment,
  `name` char(50) default NULL,
  `regionopen` tinyint(2) NOT NULL default '1',
  `nbmembers` int(11) NOT NULL default '0',
  `hcworld_created` datetime default NULL,
  `idnation` int(11) default NULL,
  `idcapital` int(11) NOT NULL default '0',
  `latitude` float default NULL,
  `longitude` float default NULL,
  `continent` int(11) default NULL,
  `flag` char(2) default NULL,
  `spamindex` smallint(5) unsigned default NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=269 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `members` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `country_id` int(2) unsigned NOT NULL default '0',
  `city_id` varchar(255) default NULL,
  `region` varchar(255) default NULL,
  `zip` varchar(255) default NULL,
  `gender` enum('male','female','not_specified') default 'not_specified',
  `username` varchar(255) NOT NULL,
  `accepted` tinyint(1) default NULL,
  `city_volunteer` tinyint(1) default '0',
  `region_volunteer` tinyint(1) default '0',
  `country_volunteer` tinyint(1) default '0',
  `birthday` date default NULL,
  `homepage` varchar(255) default NULL,
  `photo` varchar(255) default NULL,
  `homephone` varchar(255) default NULL,
  `workphone` varchar(255) default NULL,
  `mobilephone` varchar(255) default NULL,
  `fax` varchar(255) default NULL,
  `occupation` varchar(255) default NULL,
  `updates` tinyint(1) NOT NULL default '1',
  `secstreet` varchar(255) default NULL,
  `seccity` varchar(255) default NULL,
  `secregion` varchar(255) default NULL,
  `seczip` varchar(255) default NULL,
  `seccountry` int(2) unsigned NOT NULL default '0',
  `secphone` varchar(255) default NULL,
  `secinfo` varchar(255) default NULL,
  `languages` varchar(255) default NULL,
  `hobbies` varchar(255) default NULL,
  `organizations` varchar(255) default NULL,
  `travels` text,
  `plans` text,
  `aboutmyself` text,
  `accom` int(2) unsigned default NULL,
  `offershow` tinyint(1) default '0',
  `offerdinner` tinyint(1) default '0',
  `offerother` varchar(255) default NULL,
  `besttimes` varchar(255) default NULL,
  `publictrans` varchar(255) default NULL,
  `bigcities` varchar(255) default NULL,
  `attractions` varchar(255) default NULL,
  `withgbfriend` tinyint(1) default '0',
  `withgrandpa` tinyint(1) default '0',
  `withpar` tinyint(1) default '0',
  `withsibs` tinyint(1) default '0',
  `withop` tinyint(1) default '0',
  `withalone` tinyint(1) default '0',
  `garden` tinyint(1) default '0',
  `spacefloor` tinyint(1) default '0',
  `matress` tinyint(1) default '0',
  `sofa` tinyint(1) default '0',
  `bed` tinyint(1) default '0',
  `ownroom` tinyint(1) default '0',
  `sleepother` longtext,
  `bringtent` tinyint(1) default '0',
  `bringmat` tinyint(1) default '0',
  `bringsleep` tinyint(1) default '0',
  `numberguest` int(2) unsigned default NULL,
  `staylength` int(2) unsigned default '0',
  `notifyshould` int(2) unsigned default '0',
  `notifymust` int(2) unsigned default '0',
  `callarrival` tinyint(1) default '0',
  `callbetween1` int(4) default '0',
  `callbetween2` int(4) default '0',
  `guestgender` enum('male','female','not_specified') default NULL,
  `smoking` enum('allowed','disallowed','outside') default NULL,
  `nodrugs` tinyint(1) default '0',
  `noalc` tinyint(1) default '0',
  `payphone` tinyint(1) default '0',
  `payfood` tinyint(1) default '0',
  `dodishes` tinyint(1) default '0',
  `restriother` varchar(255) default NULL,
  `pets` varchar(255) default NULL,
  `othcom` varchar(255) default NULL,
  `feedback` varchar(255) default NULL,
  `terms` tinyint(1) default NULL,
  `category` int(11) unsigned default NULL,
  `status` enum('buggy','false','problems','signed','true','needmore','morecompleted','kicked','takenout','sleeper','inactive','passedaway') default NULL,
  `flags` varchar(255) default NULL,
  `level` tinyint(4) NOT NULL default '0',
  `hcnotes` text NOT NULL,
  `name` varchar(255) default NULL,
  `street` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `password` varchar(255) NOT NULL,
  `secemail` varchar(255) NOT NULL,
  `namehide` tinyint(1) default '0',
  `streethide` tinyint(1) default '0',
  `lastlogin` datetime NOT NULL default '0000-00-00 00:00:00',
  `ip` varchar(15) NOT NULL default '',
  `vol_teaser` varchar(255) default NULL,
  `vol_contact_info` varchar(255) default NULL,
  `vol_why` varchar(255) default NULL,
  `vol_what` varchar(255) default NULL,
  `vol_additional` varchar(255) default NULL,
  `emailerror` varchar(255) default NULL,
  `lastaccess` datetime default NULL,
  `latitude` float default NULL,
  `longitude` float default NULL,
  `chat_msn` varchar(255) default NULL,
  `chat_icq` varchar(255) default NULL,
  `chat_yahoo` varchar(255) default NULL,
  `chat_skype` varchar(255) default NULL,
  `chat_others` varchar(255) default NULL,
  `chat_aol` varchar(255) default NULL,
  `nbhost` int(2) NOT NULL default '0',
  `nbguest` int(2) NOT NULL default '0',
  `nbcomment` int(2) NOT NULL default '0',
  `visincity` tinyint(1) default '1',
  `visinlocation` tinyint(1) default '1',
  `nbtrust` int(2) NOT NULL default '0',
  `idcity` int(4) NOT NULL default '0',
  `nbpspcheck` int(2) NOT NULL default '0',
  `lang_signup` varchar(255) default NULL,
  `lang_last` varchar(255) default NULL,
  `nbvisit` int(8) NOT NULL default '0',
  `nbvisittoday` int(8) NOT NULL default '0',
  `myvisitidlist` varchar(255) default NULL,
  `nbofremindreceivedsincelastlog` int(11) NOT NULL default '0',
  `nbofemailreceivedsincelastlog` int(11) NOT NULL default '0',
  `toberemind` datetime default NULL,
  `attractions_updated` datetime NOT NULL default '0000-00-00 00:00:00',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `email` (`email`),
  KEY `idcity` (`idcity`),
  KEY `country` (`country_id`),
  KEY `city` (`city_id`),
  KEY `lastlogin` (`lastlogin`),
  KEY `username` (`username`(20)),
  KEY `region` (`region`(4)),
  KEY `visinlocation` (`visinlocation`),
  KEY `accom` (`accom`),
  KEY `numberguest` (`numberguest`),
  KEY `staylength_fulltext` (`staylength`),
  KEY `notifyshould_fulltext` (`notifyshould`),
  KEY `notifymust_fulltext` (`notifymust`),
  FULLTEXT KEY `username_fulltext` (`username`),
  FULLTEXT KEY `name_fulltext` (`name`),
  FULLTEXT KEY `street_fulltext` (`street`),
  FULLTEXT KEY `languages_fulltext` (`languages`),
  FULLTEXT KEY `hobbies_fulltext` (`hobbies`),
  FULLTEXT KEY `organizations_fulltext` (`organizations`),
  FULLTEXT KEY `travels_fulltext` (`travels`),
  FULLTEXT KEY `attractions_fulltext` (`attractions`),
  FULLTEXT KEY `othcom_fulltext` (`othcom`),
  FULLTEXT KEY `aboutmyself_fulltext` (`aboutmyself`),
  FULLTEXT KEY `offerother_fulltext` (`offerother`),
  FULLTEXT KEY `plans_fulltext` (`plans`),
  FULLTEXT KEY `pets_fulltext` (`pets`),
  FULLTEXT KEY `bigcities_fulltext` (`bigcities`),
  FULLTEXT KEY `chat_MSN_fulltext` (`chat_msn`),
  FULLTEXT KEY `occupation_fulltext` (`occupation`),
  FULLTEXT KEY `chat_SKYPE_fulltext` (`chat_skype`)
) ENGINE=MyISAM AUTO_INCREMENT=1237806 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `regions` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `updated` datetime default NULL,
  `other_names` text,
  `isvalidate` int(2) NOT NULL default '0',
  `country_id` int(4) NOT NULL default '0',
  `citiesopen` tinyint(4) NOT NULL default '1',
  `selectable` tinyint(1) default '0',
  `hcworld_created` datetime default NULL,
  `main_city_id` int(11) default NULL,
  `nbmembers` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `country_id` (`country_id`),
  KEY `name` (`name`),
  KEY `selectable` (`selectable`),
  FULLTEXT KEY `region_fulltext` (`name`,`other_names`)
) ENGINE=MyISAM AUTO_INCREMENT=5886 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `relations`
--

DROP TABLE IF EXISTS `relations`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `relations` (
  `id` int(11) NOT NULL auto_increment,
  `from_member` int(11) default NULL,
  `to_member` int(11) default NULL,
  `following` tinyint(1) default '0',
  `trust` tinyint(1) default '0',
  `guest` tinyint(1) default '0',
  `host` tinyint(1) default '0',
  `modified` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=854503 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-11-06 18:09:12
