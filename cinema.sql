DROP DATABASE IF EXISTS cinema;
CREATE DATABASE IF NOT EXISTS cinema;

USE cinema;

CREATE TABLE IF NOT EXISTS sessao (
  id INT(11) NOT NULL AUTO_INCREMENT,
  sala INT(11),
  filme INT(11),
  data DATE,
  horaInicio TIME,
  capacidade INT(11),
  PRIMARY KEY (id)
  );