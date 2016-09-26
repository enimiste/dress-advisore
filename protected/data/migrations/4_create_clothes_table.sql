CREATE TABLE clothes (
  cid int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  size char(4) NOT NULL,
  color char(20) NOT NULL,
  tags varchar(255) DEFAULT NULL,
  PRIMARY KEY (cid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1