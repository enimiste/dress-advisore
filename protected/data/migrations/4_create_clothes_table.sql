CREATE TABLE clothes (
  clothe_id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(128) DEFAULT NULL,
  size char(4) NOT NULL,
  color char(20) NOT NULL,
  tags varchar(128) DEFAULT NULL,
  username varchar(128) NOT NULL,
  PRIMARY KEY (clothe_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1