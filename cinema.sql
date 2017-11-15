DROP DATABASE IF EXISTS cinema;
CREATE DATABASE IF NOT EXISTS cinema;

USE cinema;

CREATE TABLE IF NOT EXISTS sessao (
  id INT(11) NOT NULL AUTO_INCREMENT,
<<<<<<< HEAD
  sala INT(11) NOT NULL,
  filme INT(11) NOT NULL,
  data DATE NOT NULL,
  horaInicio TIME NOT NULL,
  capacidade INT(11) NOT NULL,
=======
  sala INT(11),
  filme INT(11),
  data DATE,
  horaInicio TIME,
  capacidade INT(11),
>>>>>>> 363a6df11f76038903f09bd6277e88160dd266a5
  PRIMARY KEY (id)
  );