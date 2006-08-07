-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 27. Februar 2006 um 12:48
-- Server Version: 5.0.15
-- PHP-Version: 4.4.1-pl1
--
-- Datenbank: `mediabase`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--
DROP TABLE IF EXISTS user;

CREATE TABLE user (
    id          TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
    username    VARCHAR(15) NOT NULL DEFAULT '',
    password    VARCHAR(32) NOT NULL DEFAULT '',
    email       VARCHAR(30) NOT NULL DEFAULT '',
    isAdmin     TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
    isModerator TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
    isOnline    TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
    lastvisit   DATETIME    NOT NULL DEFAULT '2006-01-01 00:00:00',
    language    VARCHAR(3)  NOT NULL DEFAULT 'deu',
    filter      VARCHAR(15) NOT NULL DEFAULT '',
    template    VARCHAR(20) NOT NULL DEFAULT '',
    thumbnail   TINYINT(1)  NOT NULL DEFAULT '1',
    PRIMARY KEY (id),
    UNIQUE KEY username(username)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `video`
--
DROP TABLE IF EXISTS video;

CREATE TABLE video (
    id          INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    title       VARCHAR(100) NOT NULL DEFAULT '',
    subtitle    VARCHAR(100) NOT NULL DEFAULT '',
    runtime     INT(4) UNSIGNED NOT NULL DEFAULT '0',
    country     VARCHAR(20)  NOT NULL DEFAULT '',
    year        year(4) NOT NULL DEFAULT '2006',
    plot        TEXT,
    comment     TEXT,
    rating      TINYINT(2) UNSIGNED NOT NULL DEFAULT '10',
    added       DATETIME NOT NULL DEFAULT '2006-01-01 00:00:00',
    director    VARCHAR(255) NOT NULL DEFAULT '',
    cast        VARCHAR(255) NOT NULL DEFAULT '',
    cover       VARCHAR(255) NOT NULL DEFAULT 'nocover.jpg',
    language    VARCHAR(10)  NOT NULL DEFAULT '',
    diskid      TINYINT(3) UNSIGNED DEFAULT '0',
    filename    VARCHAR(255) NOT NULL DEFAULT '',
    filesize    INT(5) NOT NULL DEFAULT '0',
    audiocodec  VARCHAR(30) NOT NULL DEFAULT '',
    videocodec  VARCHAR(30) NOT NULL DEFAULT '',
    PRIMARY KEY (id),
    UNIQUE KEY title (title, subtitle)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comment`
--
DROP TABLE IF EXISTS comment;

CREATE TABLE comment (
    id          INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    videoid     INT(5) UNSIGNED NOT NULL DEFAULT '0',
    userid      TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    date        DATETIME NOT NULL DEFAULT '2006-01-01 00:00:00',
    message     TEXT,
    PRIMARY KEY (id)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `videolist`
--
DROP TABLE IF EXISTS videolist;

CREATE TABLE videolist (
    id          TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
    title       VARCHAR(200) NOT NULL DEFAULT '',
    userid      TINYINT(3) NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `image`
--
DROP TABLE IF EXISTS image;

CREATE TABLE image (
    id          INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    filename    VARCHAR(50) NOT NULL DEFAULT '',
    videoid     INT(5) UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `disk`
--
DROP TABLE IF EXISTS disk;

CREATE TABLE disk (
    id      int(5) UNSIGNED NOT NULL,
    label   VARCHAR(50) DEFAULT NULL,
    type    VARCHAR(50) NOT NULL DEFAULT 'DVD',
    PRIMARY KEY (id)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `genre`
--
DROP TABLE IF EXISTS genre;

CREATE TABLE genre (
    id      TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
    name    VARCHAR(50) NOT NULL DEFAULT '',
    PRIMARY KEY (id)
);

# some defaults

INSERT INTO genre (id, name) VALUES (1,'Action');
INSERT INTO genre (id, name) VALUES (2,'Dokumentation');
INSERT INTO genre (id, name) VALUES (3,'Sport');
INSERT INTO genre (id, name) VALUES (4,'Biographie');
INSERT INTO genre (id, name) VALUES (5,'History');
INSERT INTO genre (id, name) VALUES (6,'Abenteuer');
INSERT INTO genre (id, name) VALUES (7,'Animation');
INSERT INTO genre (id, name) VALUES (8,'Komödie');
INSERT INTO genre (id, name) VALUES (9,'Krimi');
INSERT INTO genre (id, name) VALUES (10,'Drama');
INSERT INTO genre (id, name) VALUES (11,'Fantasy');
INSERT INTO genre (id, name) VALUES (12,'Horror');
INSERT INTO genre (id, name) VALUES (13,'Mystery');
INSERT INTO genre (id, name) VALUES (14,'Romance');
INSERT INTO genre (id, name) VALUES (15,'Sci-Fi');
INSERT INTO genre (id, name) VALUES (16,'Kurzfilm');
INSERT INTO genre (id, name) VALUES (17,'Thriller');
INSERT INTO genre (id, name) VALUES (18,'Kriegsfilm');
INSERT INTO genre (id, name) VALUES (19,'Western');
INSERT INTO genre (id, name) VALUES (20,'Music');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `loanstatus`
--
DROP TABLE IF EXISTS loanstatus;

CREATE TABLE loanstatus (
    userid      TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    diskid      INT(5) UNSIGNED NOT NULL DEFAULT '0',
    status      TINYINT(1) NOT NULL DEFAULT '1',
    date        DATETIME NOT NULL DEFAULT '2006-01-01 00:00:00',
    PRIMARY KEY (userid, diskid, date)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `userseen`
--
DROP TABLE IF EXISTS userseen;

CREATE TABLE userseen (
    videoid     INT(5) UNSIGNED NOT NULL DEFAULT '0',
    userid      TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY (videoid, userid)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `video2genre`
--
DROP TABLE IF EXISTS video2genre;

CREATE TABLE video2genre (
    videoid    INT(5) UNSIGNED NOT NULL DEFAULT '0',
    genreid    TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY (videoid, genreid)
);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `video2videolist`
--
DROP TABLE IF EXISTS video2videolist;
CREATE TABLE video2videolist (
    videoid     INT(5) UNSIGNED NOT NULL DEFAULT '0',
    listid      TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY (listid, videoid)
);

