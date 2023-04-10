CREATE TABLE Users(
  id INT NOT NULL AUTO_INCREMENT,
  user VARCHAR(30) NOT NULL,
  password VARCHAR(75) NOT NULL,
  reg_date DATETIME DEFAULT NOW(),
  PRIMARY KEY(id),
  UNIQUE(user)
);