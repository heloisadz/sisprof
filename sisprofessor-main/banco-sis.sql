USE SIS;

CREATE TABLE Aluno(
id INT PRIMARY KEY,
nome VARCHAR(100),
endereco VARCHAR(80),
idade SMALLINT,
datanascimento DATE,
statusaluno BOOL,
matricula VARCHAR(11)
);

SELECT *
FROM Aluno;