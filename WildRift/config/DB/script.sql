/* Comando para EXCLUIR o banco de dados, caso seja necessário */
/* DROP DATABASE IF EXISTS dbRiot; */

/* Criando o banco de dados */
CREATE DATABASE dbRiot
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

/* Selecionar o banco */
USE dbRiot;

/* Criando um usuário para o banco de dados e atribuindo privilégios */
CREATE USER 'riot'@'localhost' IDENTIFIED WITH mysql_native_password BY '1234567'; /* Senha super segura, como podemos ver */
GRANT ALL PRIVILEGES ON dbRiot.* TO 'riot'@'localhost';

/*Criando as tabelas do banco de dados */
CREATE TABLE tbChampion(
	id INT PRIMARY KEY AUTO_INCREMENT, /* Atributo diferenciador / Chave primária */
	championName VARCHAR(20) NOT NULL, /* Nome do campeão */
	championDescription VARCHAR(40), /* Breve descrição */
    championCategory VARCHAR(40), /* Categoria / Função */
    championImage VARCHAR(140), /* O caminho da imagem no projeto */
    difficulty VARCHAR(8) /* Dificuldade */
);

/* Criando as procedures */

DELIMITER $$
CREATE PROCEDURE createChampion (
	in vChampionName VARCHAR(20),
	in vChampionDescription VARCHAR(40),
    in vChampionCategory VARCHAR(40),
    in vChampionImage VARCHAR(140),
    in vDifficulty VARCHAR(8)
)
BEGIN
	INSERT INTO tbChampion(championName, championDescription, championCategory, championImage, difficulty)
	VALUES(vChampionName, vChampionDescription, vChampionCategory, vChampionImage, vDifficulty);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE readChampion ()
BEGIN
	SELECT * FROM tbChampion;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE updateChampion (
	in vId INT,
	in vChampionName VARCHAR(20),
	in vChampionDescription VARCHAR(40),
    in vChampionCategory VARCHAR(40),
    in vChampionImage VARCHAR(140),
    in vDifficulty VARCHAR(8)
)
BEGIN
	SELECT * FROM tbChampion;
END $$
DELIMITER ;