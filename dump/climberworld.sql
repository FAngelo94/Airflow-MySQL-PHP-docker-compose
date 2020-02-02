CREATE TABLE `User` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `group` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Person` (`email`, `password`, `username`, `group`) VALUES
('a.falci@live.it', 'agosto1994', 'Falci Angelo', 'admin');