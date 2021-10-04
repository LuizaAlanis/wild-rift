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
	championDescription VARCHAR(40) NOT NULL, /* Breve descrição */
    championCategory VARCHAR(40) NOT NULL, /* Categoria / Função */
    secondCategory VARCHAR(40), /* Outra Categoria / Função, opcional */
    championImage VARCHAR(140) NOT NULL, /* O caminho da imagem no projeto */
    difficulty VARCHAR(8) NOT NULL/* Dificuldade */
);

/* Criando as procedures */

DELIMITER $$
CREATE PROCEDURE createChampion (
	in vChampionName VARCHAR(20),
	in vChampionDescription VARCHAR(40),
    in vChampionCategory VARCHAR(40),
    in vSecondCategory VARCHAR(40),
    in vChampionImage VARCHAR(140),
    in vDifficulty VARCHAR(8)
)
BEGIN
	INSERT INTO tbChampion(championName, championDescription, championCategory, secondCategory, championImage, difficulty)
	VALUES(vChampionName, vChampionDescription, vChampionCategory, vSecondCategory, vChampionImage, vDifficulty);
END $$
DELIMITER ;

/* DROP PROCEDURE readChampion; */
DELIMITER $$
CREATE PROCEDURE readChampion () /* Lista todos os campeões */
BEGIN
	SELECT * FROM tbChampion ORDER BY championName;
END $$
DELIMITER ;

/* Lista um campeão em específico */
/*
DELIMITER $$
CREATE PROCEDURE bringChampion (in vId INT) 
BEGIN
	SELECT * FROM tbChampion WHERE id = vId;
END $$
DELIMITER ;
*/

/* call createChampion('nome','descricao','categoria','segundacat','foto','dificuldade');  Baixa, Moderada ou Alta */
call createChampion('Ahri','a Raposa de Nove Caudas','Mago','Assassino','ahri.jpg','Moderada');
call createChampion('Akali','a Assassina Renegada','Assassino','','akali.jpg','Alta');
call createChampion('Akshan','o Sentinela Rebelde','Atirador','Assassino','akshan.jpg','Alta');
call createChampion('Aurelion Sol','o Forjador de Estrelas','Mago','','aurelionsol.jpg','Alta');
call createChampion('Jhin','o Virtuoso','Atirador','Mago','jhin.jpg','Moderada');
call createChampion('Lucian','o Purificador','Atirador','','lucian.jpg','Alta');
call createChampion('Senna','a Redentora','Atirador','Suporte','senna.jpg','Alta');
call createChampion('Xin Zhao','o Senescal de Demacia','Lutador','Tanque','xinzhao.jpg','Baixa');

call readChampion();