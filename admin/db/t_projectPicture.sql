CREATE TABLE IF NOT EXISTS t_projectpicture (
	id INT(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) DEFAULT NULL,
	url VARCHAR(255) DEFAULT NULL,
	description VARCHAR(255) DEFAULT NULL,
	idProject INT(12) DEFAULT NULL,
	idCompany INT(12) DEFAULT NULL,
	created DATETIME DEFAULT NULL,
	createdBy VARCHAR(50) DEFAULT NULL,
	updated DATETIME DEFAULT NULL,
	updatedBy VARCHAR(50) DEFAULT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;