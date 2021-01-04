CREATE DATABASE CLIG;

USE CLIG;

create table usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(32) NOT NULL
);

CREATE TABLE SISTEMA (
	codigo INT AUTO_INCREMENT PRIMARY KEY,
	idProjeto INT NOT NULL,
	idProgramador INT NOT NULL,
	cliente_Codigo INT NOT NULL,
	FOREIGN KEY (idProjeto) REFERENCES PROJETOS (codigo),
    FOREIGN KEY (idProgramador) REFERENCES Programador (codigo),
	FOREIGN KEY (cliente_Codigo) REFERENCES Clientes (codigo),
);

/*Consulta por nomes para verificação

SELECT s.codigo, pj.nome as 'Projeto Nome', p.nome as 'Programador', c.nome as 'Cliente',  count(c.codigo) as 'Registros Ativos' 
FROM sistema s
inner join projetos pj on pj.codigo = s.idProjeto
inner join programador p on p.codigo = s.idProgramador
inner join clientes c on c.codigo = s.cliente_Codigo
where status like 'ativo%'; 
*/

CREATE TABLE PROJETOS (
	codigo INT AUTO_INCREMENT PRIMARY KEY, 
	nome VARCHAR(255) NOT NULL,
	descricao TEXT NOT NULL	
);

CREATE TABLE TAREFAS(
	Codigo INT AUTO_INCREMENT PRIMARY KEY, 
	Nome VARCHAR(255) NOT NULL,
	Comando TEXT,
	Periodicidade ENUM ('diaria','semanal','mensal','semestral','anual'),
	Horario TIME,
	QuantidadeMinutosEsperadoExecucao INT,
	StatusTarefa ENUM ('parado','executando','travado'),
	StatusSistema TINYINT,
	DataCadastro DATETIME,
    idProjeto INT,
    idCliente INT,
    idLinguagem INT,
	FOREIGN KEY (idProjeto) REFERENCES PROJETOS (codigo),
    FOREIGN KEY (idCliente) REFERENCES CLIENTES (codigo),
    FOREIGN KEY (idLinguagem) REFERENCES Linguagens (codigo)	
);


CREATE TABLE CLIENTES(
	Codigo INT AUTO_INCREMENT PRIMARY KEY,
	Nome VARCHAR(255) NOT NULL,
	Servidor VARCHAR(255) NOT NULL,
	status ENUM ('ativo','inativo') NOT NULL,
);

/*Verifica total de clientes ativos, mesmo que não esteja vinculado a um sistema.

select *, count(nome) as 'Clientes Ativos' from clientes where status like 'ativo%'
*/

CREATE TABLE Programador (
    Codigo INT AUTO_INCREMENT PRIMARY KEY,
    Nome Varchar(255)
);

CREATE TABLE Linguagens (
	Codigo INT AUTO_INCREMENT PRIMARY KEY,
	Nome VARCHAR(255) NOT NULL
);


/* Este select é foi feito para exibir o nome de cada cliente, sistema ou linguagem ao invés de mostrar o código. 


SELECT 
t.Codigo, 
t.Nome, 
t.Comando, 
t.Periodicidade,
t.Horario, 
t.QuantidadeMinutosEsperadoExecucao, 
CONCAT(UCASE(LEFT(t.StatusTarefa, 1)), SUBSTRING(t.StatusTarefa, 2)) as 'Status Tarefa',
t.StatusSistema, 
t.DataCadastro, 
c.nome as 'Cliente',
l.nome as 'linguagem', 
pj.nome as 'Sistema'
FROM tarefas t
INNER JOIN clientes c on  c.codigo = t.idCliente
INNER JOIN projetos pj on pj.codigo = t.IdProjeto
INNER JOIN linguagens l on l.codigo = t.idLinguagem


*/

