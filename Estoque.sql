-- Active: 1700825179262@@127.0.0.1@3306@bembarato
CREATE TABLE estoque(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (100),
marca VARCHAR (100),
grupo VARCHAR (50),
quantidade INT (4),
peso VARCHAR (10),
codigo VARCHAR (20),
validade DATE,
data_emissao DATE
);

SELECT * FROM estoque;

SELECT * FROM estoque WHERE nome LIKE "%a%";

INSERT INTO estoque (nome, marca, quantidade, peso, codigo, validade, data_emissao, preço) VALUES ("Açucar", "União", 500, "1Kg", "1598743269874", "2024-12-30", "2023-11-01", 3.99);
