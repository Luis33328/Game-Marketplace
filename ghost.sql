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

