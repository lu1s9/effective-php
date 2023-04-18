CREATE TABLE Users(
  id INT NOT NULL AUTO_INCREMENT,
  user VARCHAR(30) NOT NULL,
  password VARCHAR(75) NOT NULL,
  reg_date DATETIME DEFAULT NOW(),
  PRIMARY KEY(id),
  UNIQUE(user)
);


CREATE TABLE Videojuegos(
  id INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(100) NOT NULL,
  anio int(4) NOT NULL,
  director VARCHAR(100) NOT NULL,
  clasificacion VARCHAR(50) NOT NULL,
  distribucion VARCHAR(50) NOT NULL,
  pais VARCHAR(40) NOT NULL,
  idioma VARCHAR(100) NOT NULL,
  plataformas VARCHAR(80) NOT NULL,
  formato VARCHAR(100) NOT NULL,
  almacenamiento VARCHAR(20) NOT NULL,
  PRIMARY KEY(id)
);