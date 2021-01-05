CREATE DATABASE controleGastos;

USE controleGastos;

create table usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(32) NOT NULL
);

CREATE TABLE gastos(
	codigo INT AUTO_INCREMENT PRIMARY KEY, 
	nome VARCHAR(255) NOT NULL,
	descricao TEXT,
	formaPagamento ENUM ('Debito','Crédito') NOT NULL,
	itemPago ENUM ('SIM', 'NÃO'),
	parcelado INT,
	dataCompra DATE NOT NULL,
	vencimento DATE NOT NULL,
	total FLOAT,
	pagamentoTotal ENUM ('SIM', 'NÃO'),
 	idPagamento INT,
	FOREIGN KEY (idPagamento) REFERENCES pagamentos (codigo)
);


CREATE TABLE pagamentos(
	codigo INT AUTO_INCREMENT PRIMARY KEY,
	valor FLOAT ,
	decimoTerceiro FLOAT,
	vale FLOAT,
	dataPagamento DATE,
	TOTAL FLOAT,
);



CREATE TABLE poupanca (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
	depositar FLOAT,
    sacar FLOAT,
	dataSaque DATE,
	dataDeposito DATE,
	totalDisponivel FLOAT
);





