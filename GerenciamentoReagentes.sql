CREATE DATABASE GerenciamentoReagentes;
USE GerenciamentoReagentes;

CREATE TABLE `Reagentes_Classificacao` (
  `idClassificacao` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `prateleira` INT NULL,
  PRIMARY KEY (`idClassificacao`)
  );

CREATE TABLE `Reagentes_Fabricante` (
  `idFabricante` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`idFabricante`)
  );

CREATE TABLE `Reagentes` (
  `idReagente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `classificacao` INT NOT NULL,
  `formula` VARCHAR(255) NULL,
  `fabricante` INT NULL,
  `quantidade` DECIMAL(10,2) NULL,
  `unidadeQuantidade` CHAR(2) NULL,
  `codigo` INT NULL,
  `dadosAdicionais` TEXT NULL,
  `ativo` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idReagente`),
  CONSTRAINT `idClassificacao`
    FOREIGN KEY (`classificacao`)
    REFERENCES `Reagentes_Classificacao` (`idClassificacao`),
  CONSTRAINT `idFabricante`
    FOREIGN KEY (`fabricante`)
    REFERENCES `Reagentes_Fabricante` (`idFabricante`)
  );

CREATE TABLE `Item` (
  `idItem` INT NOT NULL AUTO_INCREMENT,
  `idReagente` INT NOT NULL,
  `ativo` TINYINT(1) NOT NULL,
  `dataEntrada` DATETIME NULL,
  `dataSaida` DATETIME NULL,
  `dataFabricacao` DATE NULL COMMENT '	',
  `dataValidade` DATE NULL,
  PRIMARY KEY (`idItem`, `idReagente`),
  CONSTRAINT `idReagente`
    FOREIGN KEY (`idReagente`)
    REFERENCES `Reagentes` (`idReagente`)
  );

CREATE TABLE `Usuario_Grupos` (
  `idGrupo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `orientador` INT NULL,
  PRIMARY KEY (`idGrupo`),
  CONSTRAINT `idOrientador`
    FOREIGN KEY (`orientador`)
    REFERENCES `Usuario` (`idUsuario`)
  );

CREATE TABLE `GerenciamentoReagentes`.`Usuario_Funcoes` (
  `idFuncao` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idFuncao`)
  );

CREATE TABLE `Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(10) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `matricula` BIGINT NOT NULL,
  `email` VARCHAR(255) NULL,
  `telefone` VARCHAR(20) NULL,
  `grupo` INT NOT NULL,
  `funcao` INT NOT NULL,
  `nivelAcesso` TINYINT(1) NOT NULL,
  `ativo` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idUsuario`),
  CONSTRAINT `idGrupo`
    FOREIGN KEY (`grupo`)
    REFERENCES `Usuario_Grupos` (`idGrupo`),
  CONSTRAINT `idFuncao`
    FOREIGN KEY (`funcao`)
    REFERENCES `Usuario_Funcoes` (`idFuncao`)
    );

CREATE TABLE `Historico` (
  `idHistorico` INT NOT NULL AUTO_INCREMENT,
  `tipo` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  `idItem` INT NOT NULL,
  `idReagente` INT NOT NULL,
  `hora` DATETIME NOT NULL,
  `comentarios` TEXT NULL,
  PRIMARY KEY (`idHistorico`),
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `Usuario` (`idUsuario`),
  CONSTRAINT `item`
    FOREIGN KEY (`idItem` , `idReagente`)
    REFERENCES `Item` (`idItem` , `idReagente`)
);

INSERT INTO Reagentes_Classificacao (nome, prateleira) VALUES ("Reagentes Orgânicos", 1);
INSERT INTO Reagentes_Classificacao (nome, prateleira) VALUES ("Sais Inorgânicos", 2);
INSERT INTO Reagentes_Classificacao (nome, prateleira) VALUES ("Bases e Metais", 3);
INSERT INTO Reagentes_Classificacao (nome, prateleira) VALUES ("Ácidos Inorgânicos", 4);
INSERT INTO Reagentes_Classificacao (nome, prateleira) VALUES ("Oxidantes", 5);
INSERT INTO Reagentes_Classificacao (nome, prateleira) VALUES ("Indicadores", 6);
INSERT INTO Reagentes_Classificacao (nome, prateleira) VALUES ("Soluções (Aulas Práticas)", 7);

INSERT INTO Usuario_Funcoes (nome) VALUES ("Bolsista");
INSERT INTO Usuario_Funcoes (nome) VALUES ("Orientador");

INSERT INTO Usuario_Grupos (nome) VALUES ("Pesquisa");

INSERT INTO Usuario (login, password, nome, matricula, grupo, funcao, nivelAcesso, ativo)
	VALUES ("usuario", "e8d95a51f3af4a3b134bf6bb680a213a", "Teste", 1234567, 1, 1, 2, 1);

