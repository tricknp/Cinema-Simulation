DROP DATABASE IF EXISTS cinema;
CREATE DATABASE IF NOT EXISTS cinema;

USE cinema;

DROP TABLE IF EXISTS sessao;
CREATE TABLE IF NOT EXISTS sessao (
  id INT(10) NOT NULL AUTO_INCREMENT,
  sala VARCHAR(45) NOT NULL,
  filme VARCHAR(45) NOT NULL,
  capacidade INT(10) NOT NULL,
  data DATE NOT NULL,
  horaInicio TIME NOT NULL,
  PRIMARY KEY (id)
  );