-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Apr 2018 um 15:18
-- Server-Version: 10.1.25-MariaDB
-- PHP-Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `tud_sfb_c05_typo3`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `backend_layout`
--

CREATE TABLE `backend_layout` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` text COLLATE utf8_bin,
  `config` text COLLATE utf8_bin NOT NULL,
  `icon` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_groups`
--

CREATE TABLE `be_groups` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `non_exclude_fields` text COLLATE utf8_bin,
  `explicit_allowdeny` text COLLATE utf8_bin,
  `allowed_languages` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `custom_options` text COLLATE utf8_bin,
  `db_mountpoints` text COLLATE utf8_bin,
  `pagetypes_select` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tables_select` text COLLATE utf8_bin,
  `tables_modify` text COLLATE utf8_bin,
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `groupMods` text COLLATE utf8_bin,
  `file_mountpoints` text COLLATE utf8_bin,
  `file_permissions` text COLLATE utf8_bin,
  `hidden` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `description` varchar(2000) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lockToDomain` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `TSconfig` text COLLATE utf8_bin,
  `subgroup` text COLLATE utf8_bin,
  `hide_in_lists` tinyint(4) NOT NULL DEFAULT '0',
  `workspace_perms` tinyint(3) NOT NULL DEFAULT '1',
  `category_perms` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_sessions`
--

CREATE TABLE `be_sessions` (
  `ses_id` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ses_name` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ses_iplock` varchar(39) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ses_hashlock` int(11) NOT NULL DEFAULT '0',
  `ses_userid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `ses_tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `ses_data` longtext COLLATE utf8_bin,
  `ses_backuserid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `be_users`
--

CREATE TABLE `be_users` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` varchar(2000) COLLATE utf8_bin NOT NULL DEFAULT '',
  `avatar` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `password` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `admin` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `usergroup` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `disable` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `lang` char(2) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_mountpoints` text COLLATE utf8_bin,
  `options` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `realName` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `userMods` text COLLATE utf8_bin,
  `allowed_languages` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `uc` mediumtext COLLATE utf8_bin,
  `file_mountpoints` text COLLATE utf8_bin,
  `file_permissions` text COLLATE utf8_bin,
  `workspace_perms` tinyint(3) NOT NULL DEFAULT '1',
  `lockToDomain` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `disableIPlock` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `TSconfig` text COLLATE utf8_bin,
  `lastlogin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `createdByAction` int(11) NOT NULL DEFAULT '0',
  `usergroup_cached_list` text COLLATE utf8_bin,
  `workspace_id` int(11) NOT NULL DEFAULT '0',
  `workspace_preview` tinyint(3) NOT NULL DEFAULT '1',
  `category_perms` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_md5params`
--

CREATE TABLE `cache_md5params` (
  `md5hash` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(3) NOT NULL DEFAULT '0',
  `params` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cache_treelist`
--

CREATE TABLE `cache_treelist` (
  `md5hash` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0',
  `treelist` mediumtext COLLATE utf8_bin,
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_hash`
--

CREATE TABLE `cf_cache_hash` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_hash_tags`
--

CREATE TABLE `cf_cache_hash_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_imagesizes`
--

CREATE TABLE `cf_cache_imagesizes` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_imagesizes_tags`
--

CREATE TABLE `cf_cache_imagesizes_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pages`
--

CREATE TABLE `cf_cache_pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pagesection`
--

CREATE TABLE `cf_cache_pagesection` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pagesection_tags`
--

CREATE TABLE `cf_cache_pagesection_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_pages_tags`
--

CREATE TABLE `cf_cache_pages_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_rootline`
--

CREATE TABLE `cf_cache_rootline` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_cache_rootline_tags`
--

CREATE TABLE `cf_cache_rootline_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_datamapfactory_datamap`
--

CREATE TABLE `cf_extbase_datamapfactory_datamap` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_datamapfactory_datamap_tags`
--

CREATE TABLE `cf_extbase_datamapfactory_datamap_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_object`
--

CREATE TABLE `cf_extbase_object` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_object_tags`
--

CREATE TABLE `cf_extbase_object_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_reflection`
--

CREATE TABLE `cf_extbase_reflection` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_reflection_tags`
--

CREATE TABLE `cf_extbase_reflection_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_typo3dbbackend_queries`
--

CREATE TABLE `cf_extbase_typo3dbbackend_queries` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `expires` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cf_extbase_typo3dbbackend_queries_tags`
--

CREATE TABLE `cf_extbase_typo3dbbackend_queries_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `identifier` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tag` varchar(250) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_groups`
--

CREATE TABLE `fe_groups` (
  `tx_extbase_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `hidden` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `lockToDomain` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `deleted` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_bin,
  `subgroup` tinytext COLLATE utf8_bin,
  `TSconfig` text COLLATE utf8_bin,
  `felogin_redirectPid` tinytext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_sessions`
--

CREATE TABLE `fe_sessions` (
  `ses_id` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ses_name` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ses_iplock` varchar(39) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ses_hashlock` int(11) NOT NULL DEFAULT '0',
  `ses_userid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `ses_tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `ses_data` blob,
  `ses_permanent` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_session_data`
--

CREATE TABLE `fe_session_data` (
  `hash` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `content` mediumblob,
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fe_users`
--

CREATE TABLE `fe_users` (
  `tx_extbase_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `usergroup` tinytext COLLATE utf8_bin,
  `disable` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `first_name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `middle_name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `address` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `telephone` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `fax` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `lockToDomain` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `deleted` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `uc` blob,
  `title` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `zip` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `city` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `country` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `www` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `company` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `image` tinytext COLLATE utf8_bin,
  `TSconfig` text COLLATE utf8_bin,
  `fe_cruser_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `lastlogin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `is_online` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `felogin_redirectPid` tinytext COLLATE utf8_bin,
  `felogin_forgotHash` varchar(80) COLLATE utf8_bin DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_config`
--

CREATE TABLE `index_config` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `hidden` tinyint(4) NOT NULL DEFAULT '0',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `set_id` int(11) NOT NULL DEFAULT '0',
  `session_data` mediumtext COLLATE utf8_bin,
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` text COLLATE utf8_bin,
  `type` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `depth` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `table2index` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `alternative_source_pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `get_params` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `fieldlist` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `externalUrl` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `indexcfgs` text COLLATE utf8_bin,
  `chashcalc` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `filepath` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `extensions` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timer_next_indexing` int(11) NOT NULL DEFAULT '0',
  `timer_frequency` int(11) NOT NULL DEFAULT '0',
  `timer_offset` int(11) NOT NULL DEFAULT '0',
  `url_deny` text COLLATE utf8_bin,
  `recordsbatch` int(11) NOT NULL DEFAULT '0',
  `records_indexonchange` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_debug`
--

CREATE TABLE `index_debug` (
  `phash` int(11) NOT NULL DEFAULT '0',
  `debuginfo` mediumtext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_fulltext`
--

CREATE TABLE `index_fulltext` (
  `phash` int(11) NOT NULL DEFAULT '0',
  `fulltextdata` mediumtext COLLATE utf8_bin,
  `metaphonedata` mediumtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_grlist`
--

CREATE TABLE `index_grlist` (
  `phash` int(11) NOT NULL DEFAULT '0',
  `phash_x` int(11) NOT NULL DEFAULT '0',
  `hash_gr_list` int(11) NOT NULL DEFAULT '0',
  `gr_list` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `uniqid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_phash`
--

CREATE TABLE `index_phash` (
  `phash` int(11) NOT NULL DEFAULT '0',
  `phash_grouping` int(11) NOT NULL DEFAULT '0',
  `cHashParams` blob,
  `data_filename` varchar(1024) COLLATE utf8_bin NOT NULL DEFAULT '',
  `data_page_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `data_page_reg1` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `data_page_type` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `data_page_mp` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `gr_list` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `item_type` varchar(5) COLLATE utf8_bin NOT NULL DEFAULT '',
  `item_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `item_description` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `item_mtime` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `item_size` int(11) NOT NULL DEFAULT '0',
  `contentHash` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `parsetime` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `item_crdate` int(11) NOT NULL DEFAULT '0',
  `externalUrl` tinyint(3) NOT NULL DEFAULT '0',
  `recordUid` int(11) NOT NULL DEFAULT '0',
  `freeIndexUid` int(11) NOT NULL DEFAULT '0',
  `freeIndexSetId` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_rel`
--

CREATE TABLE `index_rel` (
  `phash` int(11) NOT NULL DEFAULT '0',
  `wid` int(11) NOT NULL DEFAULT '0',
  `count` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `first` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `freq` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `flags` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_section`
--

CREATE TABLE `index_section` (
  `phash` int(11) NOT NULL DEFAULT '0',
  `phash_t3` int(11) NOT NULL DEFAULT '0',
  `rl0` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `rl1` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `rl2` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `page_id` int(11) NOT NULL DEFAULT '0',
  `uniqid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_stat_search`
--

CREATE TABLE `index_stat_search` (
  `uid` int(11) NOT NULL,
  `searchstring` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `searchoptions` blob,
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `feuser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cookie` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `IP` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `hits` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_stat_word`
--

CREATE TABLE `index_stat_word` (
  `uid` int(11) NOT NULL,
  `word` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `index_stat_search_id` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `pageid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `index_words`
--

CREATE TABLE `index_words` (
  `wid` int(11) NOT NULL DEFAULT '0',
  `baseword` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '',
  `metaphone` int(11) NOT NULL DEFAULT '0',
  `is_stopword` tinyint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

CREATE TABLE `pages` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `perms_userid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `perms_groupid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `perms_user` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `perms_group` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `perms_everybody` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `editlock` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `doktype` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `TSconfig` text COLLATE utf8_bin,
  `is_siteroot` tinyint(4) NOT NULL DEFAULT '0',
  `php_tree_stop` tinyint(4) NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `urltype` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `shortcut` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shortcut_mode` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `no_cache` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `fe_group` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `subtitle` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `layout` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `url_scheme` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `target` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `media` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `lastUpdated` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8_bin,
  `cache_timeout` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cache_tags` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `newUntil` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_bin,
  `no_search` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `SYS_LASTCHANGED` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `abstract` text COLLATE utf8_bin,
  `module` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `extendToSubpages` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `author_email` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `nav_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `nav_hide` tinyint(4) NOT NULL DEFAULT '0',
  `content_from_pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `mount_pid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `mount_pid_ol` tinyint(4) NOT NULL DEFAULT '0',
  `alias` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `l18n_cfg` tinyint(4) NOT NULL DEFAULT '0',
  `fe_login_mode` tinyint(4) NOT NULL DEFAULT '0',
  `backend_layout` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `backend_layout_next_level` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tsconfig_includes` text COLLATE utf8_bin,
  `categories` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages_language_overlay`
--

CREATE TABLE `pages_language_overlay` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `doktype` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `subtitle` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `nav_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `media` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  `abstract` text COLLATE utf8_bin,
  `author` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `author_email` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tx_impexp_origuid` int(11) NOT NULL DEFAULT '0',
  `l18n_diffsource` mediumblob,
  `url` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `urltype` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `shortcut` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shortcut_mode` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_be_shortcuts`
--

CREATE TABLE `sys_be_shortcuts` (
  `uid` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `module_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `url` text COLLATE utf8_bin,
  `description` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `sc_group` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_category`
--

CREATE TABLE `sys_category` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `hidden` tinyint(4) NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob NOT NULL,
  `title` tinytext COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin,
  `parent` int(11) NOT NULL DEFAULT '0',
  `items` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_category_record_mm`
--

CREATE TABLE `sys_category_record_mm` (
  `uid_local` int(11) NOT NULL DEFAULT '0',
  `uid_foreign` int(11) NOT NULL DEFAULT '0',
  `tablenames` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `fieldname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `sorting_foreign` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_collection`
--

CREATE TABLE `sys_collection` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumtext COLLATE utf8_bin,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `hidden` tinyint(4) NOT NULL DEFAULT '0',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `fe_group` int(11) NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  `type` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT 'static',
  `table_name` tinytext COLLATE utf8_bin,
  `items` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_collection_entries`
--

CREATE TABLE `sys_collection_entries` (
  `uid` int(11) NOT NULL,
  `uid_local` int(11) NOT NULL DEFAULT '0',
  `uid_foreign` int(11) NOT NULL DEFAULT '0',
  `tablenames` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_domain`
--

CREATE TABLE `sys_domain` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `domainName` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `redirectTo` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `redirectHttpStatusCode` int(4) UNSIGNED NOT NULL DEFAULT '301',
  `sorting` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `prepend_params` int(10) NOT NULL DEFAULT '0',
  `forced` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file`
--

CREATE TABLE `sys_file` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `last_indexed` int(11) NOT NULL DEFAULT '0',
  `missing` tinyint(4) NOT NULL DEFAULT '0',
  `storage` int(11) NOT NULL DEFAULT '0',
  `type` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `metadata` int(11) NOT NULL DEFAULT '0',
  `identifier` text COLLATE utf8_bin,
  `identifier_hash` char(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `folder_hash` char(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `extension` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `mime_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` tinytext COLLATE utf8_bin,
  `sha1` char(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `size` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `creation_date` int(11) NOT NULL DEFAULT '0',
  `modification_date` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_filemounts`
--

CREATE TABLE `sys_filemounts` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` varchar(2000) COLLATE utf8_bin NOT NULL DEFAULT '',
  `path` varchar(120) COLLATE utf8_bin NOT NULL DEFAULT '',
  `base` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `read_only` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_collection`
--

CREATE TABLE `sys_file_collection` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumtext COLLATE utf8_bin,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `hidden` tinyint(4) NOT NULL DEFAULT '0',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  `type` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'static',
  `files` int(11) NOT NULL DEFAULT '0',
  `storage` int(11) NOT NULL DEFAULT '0',
  `folder` text COLLATE utf8_bin,
  `recursive` tinyint(4) NOT NULL DEFAULT '0',
  `category` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_metadata`
--

CREATE TABLE `sys_file_metadata` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob NOT NULL,
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `file` int(11) NOT NULL DEFAULT '0',
  `title` tinytext COLLATE utf8_bin,
  `width` int(11) NOT NULL DEFAULT '0',
  `height` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_bin,
  `alternative` text COLLATE utf8_bin,
  `categories` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_processedfile`
--

CREATE TABLE `sys_file_processedfile` (
  `uid` int(11) NOT NULL,
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `storage` int(11) NOT NULL DEFAULT '0',
  `original` int(11) NOT NULL DEFAULT '0',
  `identifier` varchar(512) COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` tinytext COLLATE utf8_bin,
  `configuration` text COLLATE utf8_bin,
  `configurationsha1` char(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `originalfilesha1` char(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `task_type` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `checksum` char(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `width` int(11) DEFAULT '0',
  `height` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_reference`
--

CREATE TABLE `sys_file_reference` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `sorting` int(10) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `hidden` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob NOT NULL,
  `uid_local` int(11) NOT NULL DEFAULT '0',
  `uid_foreign` int(11) NOT NULL DEFAULT '0',
  `tablenames` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `fieldname` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `sorting_foreign` int(11) NOT NULL DEFAULT '0',
  `table_local` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `title` tinytext COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  `alternative` text COLLATE utf8_bin,
  `link` varchar(1024) COLLATE utf8_bin NOT NULL DEFAULT '',
  `downloadname` tinytext COLLATE utf8_bin,
  `crop` varchar(4000) COLLATE utf8_bin NOT NULL DEFAULT '',
  `autoplay` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_file_storage`
--

CREATE TABLE `sys_file_storage` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` text COLLATE utf8_bin,
  `driver` tinytext COLLATE utf8_bin,
  `configuration` text COLLATE utf8_bin,
  `is_default` tinyint(4) NOT NULL DEFAULT '0',
  `is_browsable` tinyint(4) NOT NULL DEFAULT '0',
  `is_public` tinyint(4) NOT NULL DEFAULT '0',
  `is_writable` tinyint(4) NOT NULL DEFAULT '0',
  `is_online` tinyint(4) NOT NULL DEFAULT '1',
  `auto_extract_metadata` tinyint(4) NOT NULL DEFAULT '1',
  `processingfolder` tinytext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_history`
--

CREATE TABLE `sys_history` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sys_log_uid` int(11) NOT NULL DEFAULT '0',
  `history_data` mediumtext COLLATE utf8_bin,
  `fieldlist` text COLLATE utf8_bin,
  `recuid` int(11) NOT NULL DEFAULT '0',
  `tablename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `history_files` mediumtext COLLATE utf8_bin,
  `snapshot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_language`
--

CREATE TABLE `sys_language` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `flag` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `language_isocode` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '',
  `static_lang_isocode` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_lockedrecords`
--

CREATE TABLE `sys_lockedrecords` (
  `uid` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `record_table` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `record_uid` int(11) NOT NULL DEFAULT '0',
  `record_pid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `feuserid` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_log`
--

CREATE TABLE `sys_log` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `userid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `action` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `recuid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tablename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `recpid` int(11) NOT NULL DEFAULT '0',
  `error` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `details` text COLLATE utf8_bin,
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `details_nr` tinyint(3) NOT NULL DEFAULT '0',
  `IP` varchar(39) COLLATE utf8_bin NOT NULL DEFAULT '',
  `log_data` text COLLATE utf8_bin,
  `event_pid` int(11) NOT NULL DEFAULT '-1',
  `workspace` int(11) NOT NULL DEFAULT '0',
  `NEWid` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `request_id` varchar(13) COLLATE utf8_bin NOT NULL DEFAULT '',
  `time_micro` float NOT NULL DEFAULT '0',
  `component` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `message` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_news`
--

CREATE TABLE `sys_news` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `content` mediumtext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_note`
--

CREATE TABLE `sys_note` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message` text COLLATE utf8_bin,
  `personal` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `category` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_refindex`
--

CREATE TABLE `sys_refindex` (
  `hash` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tablename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `recuid` int(11) NOT NULL DEFAULT '0',
  `field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `flexpointer` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `softref_key` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `softref_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `workspace` int(11) NOT NULL DEFAULT '0',
  `ref_table` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ref_uid` int(11) NOT NULL DEFAULT '0',
  `ref_string` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_registry`
--

CREATE TABLE `sys_registry` (
  `uid` int(11) UNSIGNED NOT NULL,
  `entry_namespace` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT '',
  `entry_key` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT '',
  `entry_value` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sys_template`
--

CREATE TABLE `sys_template` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `sitetitle` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `root` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `clear` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `include_static_file` text COLLATE utf8_bin,
  `constants` text COLLATE utf8_bin,
  `config` text COLLATE utf8_bin,
  `nextLevel` varchar(5) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` text COLLATE utf8_bin,
  `basedOn` tinytext COLLATE utf8_bin,
  `deleted` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `includeStaticAfterBasedOn` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `static_file_mode` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tt_content`
--

CREATE TABLE `tt_content` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `editlock` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `CType` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `header` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `rowDescription` text COLLATE utf8_bin,
  `bodytext` mediumtext COLLATE utf8_bin,
  `image` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `imagewidth` mediumint(11) UNSIGNED NOT NULL DEFAULT '0',
  `imageorient` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `imagecols` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `imageborder` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `media` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `layout` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `cols` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `records` text COLLATE utf8_bin,
  `pages` text COLLATE utf8_bin,
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `colPos` smallint(6) NOT NULL DEFAULT '0',
  `subheader` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `fe_group` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `header_link` varchar(1024) COLLATE utf8_bin NOT NULL DEFAULT '',
  `image_zoom` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `header_layout` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `menu_type` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `list_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `select_key` varchar(80) COLLATE utf8_bin NOT NULL DEFAULT '',
  `sectionIndex` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `linkToTop` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `file_collections` text COLLATE utf8_bin,
  `filelink_size` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `filelink_sorting` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `target` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `date` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `recursive` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `imageheight` mediumint(8) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `tx_impexp_origuid` int(11) NOT NULL DEFAULT '0',
  `pi_flexform` mediumtext COLLATE utf8_bin,
  `accessibility_title` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `accessibility_bypass` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `accessibility_bypass_text` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `l18n_parent` int(11) NOT NULL DEFAULT '0',
  `l18n_diffsource` mediumblob,
  `selected_categories` text COLLATE utf8_bin,
  `category_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_caption` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `table_delimiter` smallint(6) UNSIGNED NOT NULL DEFAULT '0',
  `table_enclosure` smallint(6) UNSIGNED NOT NULL DEFAULT '0',
  `table_header_position` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `table_tfoot` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `bullets_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `uploads_description` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `uploads_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `assets` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `categories` int(11) NOT NULL DEFAULT '0',
  `backupColPos` smallint(6) NOT NULL DEFAULT '-2',
  `tx_gridelements_backend_layout` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tx_gridelements_children` int(11) NOT NULL DEFAULT '0',
  `tx_gridelements_container` int(11) NOT NULL DEFAULT '0',
  `tx_gridelements_columns` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_extensionmanager_domain_model_extension`
--

CREATE TABLE `tx_extensionmanager_domain_model_extension` (
  `uid` int(11) NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `extension_key` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '',
  `repository` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `version` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT '',
  `alldownloadcounter` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `downloadcounter` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` mediumtext COLLATE utf8_bin,
  `state` int(4) NOT NULL DEFAULT '0',
  `review_state` int(4) NOT NULL DEFAULT '0',
  `category` int(4) NOT NULL DEFAULT '0',
  `last_updated` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `serialized_dependencies` mediumtext COLLATE utf8_bin,
  `author_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `author_email` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ownerusername` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `md5hash` varchar(35) COLLATE utf8_bin NOT NULL DEFAULT '',
  `update_comment` mediumtext COLLATE utf8_bin,
  `authorcompany` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `integer_version` int(11) NOT NULL DEFAULT '0',
  `current_version` int(3) NOT NULL DEFAULT '0',
  `lastreviewedversion` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_extensionmanager_domain_model_repository`
--

CREATE TABLE `tx_extensionmanager_domain_model_repository` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` mediumtext COLLATE utf8_bin,
  `wsdl_url` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `mirror_list_url` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `last_update` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `extension_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_gridelements_backend_layout`
--

CREATE TABLE `tx_gridelements_backend_layout` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `sorting` int(10) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `hidden` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `alias` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `frame` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_bin,
  `horizontal` tinyint(4) NOT NULL DEFAULT '0',
  `top_level_layout` tinyint(4) NOT NULL DEFAULT '0',
  `config` text COLLATE utf8_bin,
  `pi_flexform_ds` mediumtext COLLATE utf8_bin,
  `pi_flexform_ds_file` text COLLATE utf8_bin,
  `icon` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_impexp_presets`
--

CREATE TABLE `tx_impexp_presets` (
  `uid` int(11) NOT NULL,
  `user_uid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `public` tinyint(3) NOT NULL DEFAULT '0',
  `item_uid` int(11) NOT NULL DEFAULT '0',
  `preset_data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_rsaauth_keys`
--

CREATE TABLE `tx_rsaauth_keys` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `key_value` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_rtehtmlarea_acronym`
--

CREATE TABLE `tx_rtehtmlarea_acronym` (
  `uid` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `term` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `acronym` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `static_lang_isocode` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_anwendungsfall_lastfall_mm`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_anwendungsfall_lastfall_mm` (
  `uid_local` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `uid_foreign` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_foreign` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_antriebstyp`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_antriebstyp` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `werkzeugmaschinentyp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `antriebsart` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_anwendungsfall`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_anwendungsfall` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `fachszenario` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `beschreibung` text COLLATE utf8_bin NOT NULL,
  `werkzeuganzahl` int(11) NOT NULL DEFAULT '0',
  `werkzeugwechselanteil` double(11,2) NOT NULL DEFAULT '0.00',
  `werkzeugwechselhaeufigkeit` int(11) NOT NULL DEFAULT '0',
  `fertigungsflexibilitaet` int(11) NOT NULL DEFAULT '0',
  `zerspanvolumen` double(11,2) NOT NULL DEFAULT '0.00',
  `werkzeuge` text COLLATE utf8_bin NOT NULL,
  `lastfall` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_fachszenario`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_fachszenario` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `szenariobezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `beschreibung` text COLLATE utf8_bin NOT NULL,
  `beispiel` text COLLATE utf8_bin NOT NULL,
  `losgroesse` int(11) NOT NULL DEFAULT '0',
  `genauigkeitsklasse` int(11) NOT NULL DEFAULT '0',
  `randbedingungen` text COLLATE utf8_bin NOT NULL,
  `anwendungsfall` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `werkstueck` int(11) UNSIGNED DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_fuehrungstyp`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_fuehrungstyp` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `werkzeugmaschinentyp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ist_linear` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_gestelltyp`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_gestelltyp` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_lastfall`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_lastfall` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `loesung` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `lastfallart` int(11) NOT NULL DEFAULT '0',
  `fallbezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `beschreibung` text COLLATE utf8_bin NOT NULL,
  `ist_theoretisch` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `ist_praktisch` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `pruefbezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `datum` date DEFAULT '0000-00-00',
  `ort` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `verantwortlicher` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `vorgehensbeschreibung` text COLLATE utf8_bin NOT NULL,
  `nutzt_pruefwerkstck` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `pruefwerkstueck` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ergebniszusammenfassung` text COLLATE utf8_bin NOT NULL,
  `parameter1` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ergebnis_parameter1` double(11,2) NOT NULL DEFAULT '0.00',
  `parameter2` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ergebnis_parameter2` double(11,2) NOT NULL DEFAULT '0.00',
  `parameter3` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ergebnis_parameter3` double(11,2) NOT NULL DEFAULT '0.00',
  `parameter4` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ergebnis_parameter4` double(11,2) NOT NULL DEFAULT '0.00',
  `parameter5` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ergebnis_parameter5` text COLLATE utf8_bin NOT NULL,
  `lastfall` int(11) UNSIGNED DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `pruefprotokoll` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_loesung`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_loesung` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `modell` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `loesungsbezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `teilprojektnummer` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `gestaltungsweise` text COLLATE utf8_bin NOT NULL,
  `betrifft_hersteller` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `betrifft_betreiber` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `bemerkung` text COLLATE utf8_bin NOT NULL,
  `risiko` text COLLATE utf8_bin NOT NULL,
  `blocker` text COLLATE utf8_bin NOT NULL,
  `loesungsklasse` int(11) NOT NULL DEFAULT '0',
  `phase_der_thermischen_wirkkette` int(11) NOT NULL DEFAULT '0',
  `gestaltungsart` int(11) NOT NULL DEFAULT '0',
  `wirkungsziel` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `erforderliche_maschinenkonfiguration` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `ressourcentyp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `repraesentativer_lastfall` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `erforderliches_modell` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `prozessmodell` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `entscheidungsmodell` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `randbedingungen` text COLLATE utf8_bin NOT NULL,
  `ist_anwendbar` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `hat_anpassungsnotwendigkeit` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `anpassungsgrad` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `beschreibung` text COLLATE utf8_bin NOT NULL,
  `loesungsbeziehungsart` int(11) NOT NULL DEFAULT '0',
  `quelle` int(11) UNSIGNED DEFAULT '0',
  `senke` int(11) UNSIGNED DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_modell`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_modell` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `modellbezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `anfangsbedingungen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `modellierungszweck` text COLLATE utf8_bin NOT NULL,
  `randbedingungen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `erforderliche_modellguete` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `modellierungssoftware` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `modelltyp` int(11) NOT NULL DEFAULT '0',
  `abbildungsbereich` int(11) NOT NULL DEFAULT '0',
  `modellumfang` int(11) NOT NULL DEFAULT '0',
  `modellstruktur` int(11) NOT NULL DEFAULT '0',
  `parametrierungsart` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `erforderliches_modell` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `loesung` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_ressourcentyp`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_ressourcentyp` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ressourcenart` int(11) NOT NULL DEFAULT '0',
  `zweck` text COLLATE utf8_bin NOT NULL,
  `ist_buendel` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `hersteller` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_sonstigekomponente`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_sonstigekomponente` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `werkzeugmaschinentyp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `beschreibung` text COLLATE utf8_bin NOT NULL,
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_steuerungstyp`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_steuerungstyp` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `werkzeugmaschinentyp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `steuerungsname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `hersteller` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ist_frei_programmierbar` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `hat_lizenzkosten` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `hat_offene_schnittstelle` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkstueck`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_werkstueck` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `werkstueckname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `abmessungen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `kantaenge` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `form` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `kontur` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `toleranzen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschinentyp`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschinentyp` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `loesung` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `typbezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `einsatzzweck` text COLLATE utf8_bin NOT NULL,
  `eigenschaften` text COLLATE utf8_bin NOT NULL,
  `komponente_antriebstyp` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `komponente_fuehrungstyp` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `komponente_gestelltyp` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `komponente_lagertyp` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `komponente_getrieb` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `komponente_messsystem` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `steuerungstyp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `antrieb` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `fuerung` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `gestell` int(11) UNSIGNED DEFAULT '0',
  `werkzeugsystem` int(11) UNSIGNED DEFAULT '0',
  `sonstige` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkzeugsystem`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_werkzeugsystem` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `werkzeuge` text COLLATE utf8_bin NOT NULL,
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_wirkungsbereich`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_wirkungsbereich` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `bezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `beschreibung` text COLLATE utf8_bin NOT NULL,
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_domain_model_wirkungsziel`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_domain_model_wirkungsziel` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `loesung` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `zielbezeichnung` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `beschreibung` text COLLATE utf8_bin NOT NULL,
  `einheit` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `wertebereich` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `quantifizierbarkeit` text COLLATE utf8_bin NOT NULL,
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tx_wisedocasysdomaindesigner_loesung_ressourcentyp_mm`
--

CREATE TABLE `tx_wisedocasysdomaindesigner_loesung_ressourcentyp_mm` (
  `uid_local` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `uid_foreign` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sorting` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_foreign` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `backend_layout`
--
ALTER TABLE `backend_layout`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `be_groups`
--
ALTER TABLE `be_groups`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `be_sessions`
--
ALTER TABLE `be_sessions`
  ADD PRIMARY KEY (`ses_id`,`ses_name`),
  ADD KEY `ses_tstamp` (`ses_tstamp`);

--
-- Indizes für die Tabelle `be_users`
--
ALTER TABLE `be_users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `username` (`username`);

--
-- Indizes für die Tabelle `cache_md5params`
--
ALTER TABLE `cache_md5params`
  ADD PRIMARY KEY (`md5hash`);

--
-- Indizes für die Tabelle `cache_treelist`
--
ALTER TABLE `cache_treelist`
  ADD PRIMARY KEY (`md5hash`);

--
-- Indizes für die Tabelle `cf_cache_hash`
--
ALTER TABLE `cf_cache_hash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_cache_hash_tags`
--
ALTER TABLE `cf_cache_hash_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_cache_imagesizes`
--
ALTER TABLE `cf_cache_imagesizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_cache_imagesizes_tags`
--
ALTER TABLE `cf_cache_imagesizes_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_cache_pages`
--
ALTER TABLE `cf_cache_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_cache_pagesection`
--
ALTER TABLE `cf_cache_pagesection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_cache_pagesection_tags`
--
ALTER TABLE `cf_cache_pagesection_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_cache_pages_tags`
--
ALTER TABLE `cf_cache_pages_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_cache_rootline`
--
ALTER TABLE `cf_cache_rootline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_cache_rootline_tags`
--
ALTER TABLE `cf_cache_rootline_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_extbase_datamapfactory_datamap`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_extbase_datamapfactory_datamap_tags`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_extbase_object`
--
ALTER TABLE `cf_extbase_object`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_extbase_object_tags`
--
ALTER TABLE `cf_extbase_object_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_extbase_reflection`
--
ALTER TABLE `cf_extbase_reflection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_extbase_reflection_tags`
--
ALTER TABLE `cf_extbase_reflection_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `cf_extbase_typo3dbbackend_queries`
--
ALTER TABLE `cf_extbase_typo3dbbackend_queries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`,`expires`);

--
-- Indizes für die Tabelle `cf_extbase_typo3dbbackend_queries_tags`
--
ALTER TABLE `cf_extbase_typo3dbbackend_queries_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cache_id` (`identifier`),
  ADD KEY `cache_tag` (`tag`);

--
-- Indizes für die Tabelle `fe_groups`
--
ALTER TABLE `fe_groups`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `fe_sessions`
--
ALTER TABLE `fe_sessions`
  ADD PRIMARY KEY (`ses_id`,`ses_name`),
  ADD KEY `ses_tstamp` (`ses_tstamp`);

--
-- Indizes für die Tabelle `fe_session_data`
--
ALTER TABLE `fe_session_data`
  ADD PRIMARY KEY (`hash`),
  ADD KEY `tstamp` (`tstamp`);

--
-- Indizes für die Tabelle `fe_users`
--
ALTER TABLE `fe_users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`username`),
  ADD KEY `username` (`username`),
  ADD KEY `is_online` (`is_online`);

--
-- Indizes für die Tabelle `index_config`
--
ALTER TABLE `index_config`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `index_debug`
--
ALTER TABLE `index_debug`
  ADD PRIMARY KEY (`phash`);

--
-- Indizes für die Tabelle `index_fulltext`
--
ALTER TABLE `index_fulltext`
  ADD PRIMARY KEY (`phash`);

--
-- Indizes für die Tabelle `index_grlist`
--
ALTER TABLE `index_grlist`
  ADD PRIMARY KEY (`uniqid`),
  ADD KEY `joinkey` (`phash`,`hash_gr_list`),
  ADD KEY `phash_grouping` (`phash_x`,`hash_gr_list`);

--
-- Indizes für die Tabelle `index_phash`
--
ALTER TABLE `index_phash`
  ADD PRIMARY KEY (`phash`),
  ADD KEY `phash_grouping` (`phash_grouping`),
  ADD KEY `freeIndexUid` (`freeIndexUid`);

--
-- Indizes für die Tabelle `index_rel`
--
ALTER TABLE `index_rel`
  ADD PRIMARY KEY (`phash`,`wid`),
  ADD KEY `wid` (`wid`,`phash`);

--
-- Indizes für die Tabelle `index_section`
--
ALTER TABLE `index_section`
  ADD PRIMARY KEY (`uniqid`),
  ADD KEY `joinkey` (`phash`,`rl0`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `rl0` (`rl0`,`rl1`,`phash`),
  ADD KEY `rl0_2` (`rl0`,`phash`);

--
-- Indizes für die Tabelle `index_stat_search`
--
ALTER TABLE `index_stat_search`
  ADD PRIMARY KEY (`uid`);

--
-- Indizes für die Tabelle `index_stat_word`
--
ALTER TABLE `index_stat_word`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `tstamp` (`tstamp`,`word`);

--
-- Indizes für die Tabelle `index_words`
--
ALTER TABLE `index_words`
  ADD PRIMARY KEY (`wid`),
  ADD KEY `baseword` (`baseword`,`wid`),
  ADD KEY `metaphone` (`metaphone`,`wid`);

--
-- Indizes für die Tabelle `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `parent` (`pid`,`deleted`,`sorting`),
  ADD KEY `alias` (`alias`),
  ADD KEY `determineSiteRoot` (`is_siteroot`);

--
-- Indizes für die Tabelle `pages_language_overlay`
--
ALTER TABLE `pages_language_overlay`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `parent` (`pid`,`sys_language_uid`);

--
-- Indizes für die Tabelle `sys_be_shortcuts`
--
ALTER TABLE `sys_be_shortcuts`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `event` (`userid`);

--
-- Indizes für die Tabelle `sys_category`
--
ALTER TABLE `sys_category`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `category_parent` (`parent`),
  ADD KEY `category_list` (`pid`,`deleted`,`sys_language_uid`);

--
-- Indizes für die Tabelle `sys_category_record_mm`
--
ALTER TABLE `sys_category_record_mm`
  ADD KEY `uid_local_foreign` (`uid_local`,`uid_foreign`),
  ADD KEY `uid_foreign_tablefield` (`uid_foreign`,`tablenames`(40),`fieldname`(3),`sorting_foreign`);

--
-- Indizes für die Tabelle `sys_collection`
--
ALTER TABLE `sys_collection`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_collection_entries`
--
ALTER TABLE `sys_collection_entries`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid_local` (`uid_local`),
  ADD KEY `uid_foreign` (`uid_foreign`);

--
-- Indizes für die Tabelle `sys_domain`
--
ALTER TABLE `sys_domain`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `getSysDomain` (`redirectTo`,`hidden`);

--
-- Indizes für die Tabelle `sys_file`
--
ALTER TABLE `sys_file`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `sel01` (`storage`,`identifier_hash`),
  ADD KEY `folder` (`storage`,`folder_hash`),
  ADD KEY `tstamp` (`tstamp`),
  ADD KEY `lastindex` (`last_indexed`),
  ADD KEY `sha1` (`sha1`);

--
-- Indizes für die Tabelle `sys_filemounts`
--
ALTER TABLE `sys_filemounts`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `sys_file_collection`
--
ALTER TABLE `sys_file_collection`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `sys_file_metadata`
--
ALTER TABLE `sys_file_metadata`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `file` (`file`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `fal_filelist` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `sys_file_processedfile`
--
ALTER TABLE `sys_file_processedfile`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `combined_1` (`original`,`task_type`,`configurationsha1`),
  ADD KEY `identifier` (`storage`,`identifier`(199));

--
-- Indizes für die Tabelle `sys_file_reference`
--
ALTER TABLE `sys_file_reference`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`),
  ADD KEY `tablenames_fieldname` (`tablenames`(32),`fieldname`(12)),
  ADD KEY `deleted` (`deleted`),
  ADD KEY `uid_local` (`uid_local`),
  ADD KEY `uid_foreign` (`uid_foreign`);

--
-- Indizes für die Tabelle `sys_file_storage`
--
ALTER TABLE `sys_file_storage`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`);

--
-- Indizes für die Tabelle `sys_history`
--
ALTER TABLE `sys_history`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `recordident_1` (`tablename`,`recuid`),
  ADD KEY `recordident_2` (`tablename`,`tstamp`),
  ADD KEY `sys_log_uid` (`sys_log_uid`);

--
-- Indizes für die Tabelle `sys_language`
--
ALTER TABLE `sys_language`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `sys_lockedrecords`
--
ALTER TABLE `sys_lockedrecords`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `event` (`userid`,`tstamp`);

--
-- Indizes für die Tabelle `sys_log`
--
ALTER TABLE `sys_log`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `event` (`userid`,`event_pid`),
  ADD KEY `recuidIdx` (`recuid`,`uid`),
  ADD KEY `user_auth` (`type`,`action`,`tstamp`),
  ADD KEY `request` (`request_id`);

--
-- Indizes für die Tabelle `sys_news`
--
ALTER TABLE `sys_news`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `sys_note`
--
ALTER TABLE `sys_note`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `sys_refindex`
--
ALTER TABLE `sys_refindex`
  ADD PRIMARY KEY (`hash`),
  ADD KEY `lookup_rec` (`tablename`,`recuid`),
  ADD KEY `lookup_uid` (`ref_table`,`ref_uid`),
  ADD KEY `lookup_string` (`ref_string`);

--
-- Indizes für die Tabelle `sys_registry`
--
ALTER TABLE `sys_registry`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `entry_identifier` (`entry_namespace`,`entry_key`);

--
-- Indizes für die Tabelle `sys_template`
--
ALTER TABLE `sys_template`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`,`sorting`),
  ADD KEY `roottemplate` (`deleted`,`hidden`,`root`);

--
-- Indizes für die Tabelle `tt_content`
--
ALTER TABLE `tt_content`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `parent` (`pid`,`sorting`),
  ADD KEY `language` (`l18n_parent`,`sys_language_uid`),
  ADD KEY `gridelements` (`tx_gridelements_container`,`tx_gridelements_columns`);

--
-- Indizes für die Tabelle `tx_extensionmanager_domain_model_extension`
--
ALTER TABLE `tx_extensionmanager_domain_model_extension`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `versionextrepo` (`extension_key`,`version`,`repository`),
  ADD KEY `index_extrepo` (`extension_key`,`repository`),
  ADD KEY `index_versionrepo` (`integer_version`,`repository`,`extension_key`),
  ADD KEY `index_currentversions` (`current_version`,`review_state`);

--
-- Indizes für die Tabelle `tx_extensionmanager_domain_model_repository`
--
ALTER TABLE `tx_extensionmanager_domain_model_repository`
  ADD PRIMARY KEY (`uid`);

--
-- Indizes für die Tabelle `tx_gridelements_backend_layout`
--
ALTER TABLE `tx_gridelements_backend_layout`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`,`deleted`,`hidden`,`sorting`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`);

--
-- Indizes für die Tabelle `tx_impexp_presets`
--
ALTER TABLE `tx_impexp_presets`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `lookup` (`item_uid`);

--
-- Indizes für die Tabelle `tx_rsaauth_keys`
--
ALTER TABLE `tx_rsaauth_keys`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `crdate` (`crdate`);

--
-- Indizes für die Tabelle `tx_rtehtmlarea_acronym`
--
ALTER TABLE `tx_rtehtmlarea_acronym`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_anwendungsfall_lastfall_mm`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_anwendungsfall_lastfall_mm`
  ADD KEY `uid_local` (`uid_local`),
  ADD KEY `uid_foreign` (`uid_foreign`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_antriebstyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_antriebstyp`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_anwendungsfall`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_anwendungsfall`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_fachszenario`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_fachszenario`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_fuehrungstyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_fuehrungstyp`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_gestelltyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_gestelltyp`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_lastfall`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_lastfall`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_loesung`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_loesung`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_modell`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_modell`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_ressourcentyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_ressourcentyp`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_sonstigekomponente`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_sonstigekomponente`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_steuerungstyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_steuerungstyp`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkstueck`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_werkstueck`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschinentyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschinentyp`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkzeugsystem`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_werkzeugsystem`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_wirkungsbereich`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_wirkungsbereich`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_domain_model_wirkungsziel`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_wirkungsziel`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

--
-- Indizes für die Tabelle `tx_wisedocasysdomaindesigner_loesung_ressourcentyp_mm`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_loesung_ressourcentyp_mm`
  ADD KEY `uid_local` (`uid_local`),
  ADD KEY `uid_foreign` (`uid_foreign`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `backend_layout`
--
ALTER TABLE `backend_layout`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `be_groups`
--
ALTER TABLE `be_groups`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `be_users`
--
ALTER TABLE `be_users`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_hash`
--
ALTER TABLE `cf_cache_hash`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_hash_tags`
--
ALTER TABLE `cf_cache_hash_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_imagesizes`
--
ALTER TABLE `cf_cache_imagesizes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_imagesizes_tags`
--
ALTER TABLE `cf_cache_imagesizes_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_pages`
--
ALTER TABLE `cf_cache_pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_pagesection`
--
ALTER TABLE `cf_cache_pagesection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_pagesection_tags`
--
ALTER TABLE `cf_cache_pagesection_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_pages_tags`
--
ALTER TABLE `cf_cache_pages_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_rootline`
--
ALTER TABLE `cf_cache_rootline`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `cf_cache_rootline_tags`
--
ALTER TABLE `cf_cache_rootline_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_datamapfactory_datamap`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_datamapfactory_datamap_tags`
--
ALTER TABLE `cf_extbase_datamapfactory_datamap_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_object`
--
ALTER TABLE `cf_extbase_object`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_object_tags`
--
ALTER TABLE `cf_extbase_object_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_reflection`
--
ALTER TABLE `cf_extbase_reflection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_reflection_tags`
--
ALTER TABLE `cf_extbase_reflection_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_typo3dbbackend_queries`
--
ALTER TABLE `cf_extbase_typo3dbbackend_queries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `cf_extbase_typo3dbbackend_queries_tags`
--
ALTER TABLE `cf_extbase_typo3dbbackend_queries_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `fe_groups`
--
ALTER TABLE `fe_groups`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `fe_users`
--
ALTER TABLE `fe_users`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `index_config`
--
ALTER TABLE `index_config`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `index_grlist`
--
ALTER TABLE `index_grlist`
  MODIFY `uniqid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `index_section`
--
ALTER TABLE `index_section`
  MODIFY `uniqid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `index_stat_search`
--
ALTER TABLE `index_stat_search`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `index_stat_word`
--
ALTER TABLE `index_stat_word`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `pages`
--
ALTER TABLE `pages`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT für Tabelle `pages_language_overlay`
--
ALTER TABLE `pages_language_overlay`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_be_shortcuts`
--
ALTER TABLE `sys_be_shortcuts`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_category`
--
ALTER TABLE `sys_category`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_collection`
--
ALTER TABLE `sys_collection`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_collection_entries`
--
ALTER TABLE `sys_collection_entries`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_domain`
--
ALTER TABLE `sys_domain`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_file`
--
ALTER TABLE `sys_file`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT für Tabelle `sys_filemounts`
--
ALTER TABLE `sys_filemounts`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_file_collection`
--
ALTER TABLE `sys_file_collection`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_file_metadata`
--
ALTER TABLE `sys_file_metadata`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT für Tabelle `sys_file_processedfile`
--
ALTER TABLE `sys_file_processedfile`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT für Tabelle `sys_file_reference`
--
ALTER TABLE `sys_file_reference`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT für Tabelle `sys_file_storage`
--
ALTER TABLE `sys_file_storage`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `sys_history`
--
ALTER TABLE `sys_history`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT für Tabelle `sys_language`
--
ALTER TABLE `sys_language`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_lockedrecords`
--
ALTER TABLE `sys_lockedrecords`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `sys_log`
--
ALTER TABLE `sys_log`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=852;
--
-- AUTO_INCREMENT für Tabelle `sys_news`
--
ALTER TABLE `sys_news`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_note`
--
ALTER TABLE `sys_note`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sys_registry`
--
ALTER TABLE `sys_registry`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT für Tabelle `sys_template`
--
ALTER TABLE `sys_template`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `tt_content`
--
ALTER TABLE `tt_content`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_extensionmanager_domain_model_extension`
--
ALTER TABLE `tx_extensionmanager_domain_model_extension`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_extensionmanager_domain_model_repository`
--
ALTER TABLE `tx_extensionmanager_domain_model_repository`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_gridelements_backend_layout`
--
ALTER TABLE `tx_gridelements_backend_layout`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT für Tabelle `tx_impexp_presets`
--
ALTER TABLE `tx_impexp_presets`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_rsaauth_keys`
--
ALTER TABLE `tx_rsaauth_keys`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_rtehtmlarea_acronym`
--
ALTER TABLE `tx_rtehtmlarea_acronym`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_antriebstyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_antriebstyp`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_anwendungsfall`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_anwendungsfall`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_fachszenario`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_fachszenario`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_fuehrungstyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_fuehrungstyp`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_gestelltyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_gestelltyp`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_lastfall`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_lastfall`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_lastfallpruefung`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_loesung`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_loesung`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_modell`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_modell`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_ressourcentyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_ressourcentyp`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_sonstigekomponente`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_sonstigekomponente`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_steuerungstyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_steuerungstyp`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkstueck`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_werkstueck`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschinentyp`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschinentyp`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_werkzeugsystem`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_werkzeugsystem`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_wirkungsbereich`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_wirkungsbereich`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tx_wisedocasysdomaindesigner_domain_model_wirkungsziel`
--
ALTER TABLE `tx_wisedocasysdomaindesigner_domain_model_wirkungsziel`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
