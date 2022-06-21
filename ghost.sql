CREATE DATABASE IF NOT EXISTS ghost;

use ghost;

CREATE TABLE IF NOT EXISTS accounts (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  profile_image varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


ALTER TABLE accounts
ADD COLUMN country varchar(255);

ALTER TABLE accounts
ADD COLUMN state varchar(255);

ALTER TABLE accounts
ADD COLUMN about varchar(255);

ALTER TABLE accounts
ADD COLUMN cash varchar(255) DEFAULT '00.00';

ALTER TABLE accounts
ADD COLUMN authCode int DEFAULT '0';

CREATE TABLE IF NOT EXISTS games (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  image varchar(255) NOT NULL,
  developer varchar(255) NOT NULL,
  file varchar(255) NOT NULL,
  brief_description varchar(255) NOT NULL,
  launch_date varchar(255) NOT NULL,
  about varchar(255) NOT NULL,
  price varchar(255) NOT NULL,
  storeImg1 varchar(255) NOT NULL,
  storeImg2 varchar(255) NOT NULL,
  storeImg3 varchar(255) NOT NULL,
  storeImg4 varchar(255) NOT NULL,
  storeImg5 varchar(255) NOT NULL,
  tag1 varchar(255) NOT NULL,
  tag2 varchar(255) NOT NULL,
  tag3 varchar(255) NOT NULL,
  tag4 varchar(255) NOT NULL,
  tag5 varchar(255) NOT NULL,
  libImg varchar(255) NOT NULL,
  logoImg varchar(255) NOT NULL,
  heroImg varchar(255) NOT NULL,
  heroLogoImg varchar(255) NOT NULL,
  
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS userGames (
  id int(11) NOT NULL AUTO_INCREMENT,
  gameID varchar(255) NOT NULL,
  user varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS temp (
  id int(11) NOT NULL AUTO_INCREMENT,
  gameID varchar(255) NOT NULL,
  PRIMARY KEY (id)
);


