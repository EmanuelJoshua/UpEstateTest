CREATE DATABASE UpEstate;
USE UpEstate;
CREATE TABLE Imoveis (
  id_imovel int AUTO_INCREMENT ,
  uf varchar(255) NOT NULL,
  cidade varchar(255) NOT NULL, 
  bairro varchar(255) NOT NULL, 
  rua varchar(255) NOT NULL, 
  numero int NOT NULL, 
  complemento varchar(255) NOT NULL, 
  cep int NOT NULL, 
  valor_aluguel int NOT NULL,
  nome_proprietario varchar(255) NOT NULL,
  PRIMARY KEY(id_imovel)
);
CREATE TABLE Inquilinos (
  id_pessoa int AUTO_INCREMENT,
  id_imovel int,
  cpf int NOT NULL UNIQUE,
  nomeCompleto varchar(255) NOT NULL,
  telefone varchar(255) NOT NULL, 
  dataNascimento varchar(255) NOT NULL, 
  PRIMARY KEY(id_pessoa),
  FOREIGN KEY (id_imovel) REFERENCES Imoveis(id_imovel)
);
