CREATE DATABASE sistema_frequencia;
USE sistema_frequencia;

CREATE TABLE Usuario(
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(100) NOT NULL,
data_cadastro DATE NOT NULL
);

CREATE TABLE Professor(
id_professor INT AUTO_INCREMENT PRIMARY KEY,
id_usuario INT NOT NULL,
telefone VARCHAR(20),
disciplina_principal VARCHAR(100),
tempo_servico INT,
instituicao VARCHAR(100),
FOREIGN KEY(id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Turmas(
id_turma INT AUTO_INCREMENT PRIMARY KEY,
nome_turma VARCHAR(50) NOT NULL,
serie VARCHAR(20),
periodo VARCHAR(20),
id_professor INT NOT NULL,
FOREIGN KEY(id_professor) REFERENCES Professor(id_professor)
);

TRUNCATE TABLE Usuario;

CREATE TABLE Aluno(
id_aluno INT AUTO_INCREMENT PRIMARY KEY,
id_usuario INT NOT NULL,
id_turma INT NOT NULL,
data_nascimento DATE,
FOREIGN KEY(id_usuario) REFERENCES Usuario(id_usuario),
FOREIGN KEY(id_turma) REFERENCES Turma(id_turma)
);

CREATE TABLE Aula(
id_aula INT AUTO_INCREMENT PRIMARY KEY,
id_turma INT NOT NULL,
disciplina VARCHAR(100) NOT NULL,
data DATE NOT NULL,
FOREIGN KEY(id_turma) REFERENCES Turmas(id_turma)
);

CREATE TABLE Frequencia(
id_frequencia INT AUTO_INCREMENT PRIMARY KEY,
id_aula INT NOT NULL,
id_aluno INT NOT NULL,
status ENUM('Presente','Falta','Justificado') NOT NULL,
observacao VARCHAR(200),
FOREIGN KEY(id_aula) REFERENCES Aula(id_aula),
FOREIGN KEY(id_aluno) REFERENCES Aluno(id_aluno)
);

-- Usuario
INSERT INTO Usuario (nome, email, senha, data_cadastro) VALUES
('João Silva', 'joao@email.com', '123456', '2026-01-01');
-- Professor (usa id_usuario = 1)
INSERT INTO Professor (id_usuario, telefone, disciplina_principal, tempo_servico, instituicao) VALUES
(1, '11999999999', 'Matemática', 10, 'Escola ABC');

-- Turma (usa id_professor = 1)
INSERT INTO Turmas (nome_turma, serie, periodo, id_professor) VALUES
('Turma A', '1º Ano', 'Manhã', 1);

-- Aluno (usa id_usuario = 2 e id_turma = 1)
INSERT INTO Aluno (id_usuario, id_turma, data_nascimento) VALUES
(2, 1, '2010-05-10');

-- Aula (usa id_turma = 1)
INSERT INTO Aula (id_turma, disciplina, data) VALUES
(1, 'Matemática', '2026-03-10');

-- Frequencia (usa id_aula = 1 e id_aluno = 1)
INSERT INTO Frequencia (id_aula, id_aluno, status, observacao) VALUES
(1, 1, 'Presente', 'Participou normalmente');

SHOW TABLES;

SELECT * FROM Frequencia;

INSERT INTO Usuario (nome, email, senha, data_cadastro) VALUES
('Ana Souza', 'ana@email.com', '123456', '2026-01-01'),
('Bruno Lima', 'bruno@email.com', '123456', '2026-01-01'),
('Carlos Mendes', 'carlos@email.com', '123456', '2026-01-01'),
('Daniela Rocha', 'daniela@email.com', '123456', '2026-01-01'),
('Eduardo Alves', 'eduardo@email.com', '123456', '2026-01-01'),
('Fernanda Costa', 'fernanda@email.com', '123456', '2026-01-01'),
('Gabriel Martins', 'gabriel@email.com', '123456', '2026-01-01'),
('Helena Ribeiro', 'helena@email.com', '123456', '2026-01-01'),
('Igor Santana', 'igor@email.com', '123456', '2026-01-01'),
('Julia Ferreira', 'julia@email.com', '123456', '2026-01-01');

INSERT INTO alunos (id_usuario, id_turma, data_nascimento) VALUES
(2, 1, '2010-01-10'),
(3, 1, '2010-02-15'),
(4, 1, '2010-03-20'),
(5, 1, '2010-04-12'),
(6, 1, '2010-05-18'),
(7, 1, '2010-06-25'),
(8, 1, '2010-07-30'),
(9, 1, '2010-08-14'),
(10, 1, '2010-09-09'),
(11, 1, '2010-10-21');

INSERT INTO Frequencia (id_aula, id_aluno, status, observacao) VALUES
(1, 1, 'Presente', 'Participou normalmente'),
(1, 2, 'Presente', 'Participou normalmente'),
(1, 3, 'Presente', 'Participou normalmente'),
(1, 4, 'Presente', 'Participou normalmente'),
(1, 5, 'Presente', 'Participou normalmente'),
(1, 6, 'Presente', 'Participou normalmente'),
(1, 7, 'Presente', 'Participou normalmente'),

(1, 8, 'Falta', 'Não compareceu'),
(1, 9, 'Falta', 'Não compareceu'),
(1, 10, 'Falta', 'Não compareceu');

INSERT INTO Usuario
(nome, email, senha, data_cadastro)
VALUES
('Mariana Souza', 'mariana@email.com', '123456', CURDATE());

INSERT INTO Professor
(id_usuario, telefone, disciplina_principal, tempo_servico, instituicao)
VALUES
(12, '11999999999', 'Português', 8, 'Escola ABC');

INSERT INTO Turmas
(nome_turma, serie, periodo, id_professor)
VALUES
('8º Ano B', 'Ensino Fundamental II', 'Matutino', 2);

SHOW TABLES;
SELECT * FROM Frequencia;

SELECT * FROM Turmas;

ALTER TABLE Frequencia
ADD COLUMN data_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;

SELECT * FROM eventos;

CREATE TABLE materia (
    id_materia INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE notas (
    id_nota INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    id_materia INT NOT NULL,
    media_final DECIMAL(4,2) NOT NULL,
    FOREIGN KEY(id_aluno) REFERENCES alunos(id_aluno),
    FOREIGN KEY(id_materia) REFERENCES materia(id_materia)
);

-- Inserindo dados de teste para não vir vazio
INSERT INTO materia (nome) VALUES ('Matemática'), ('Português');
INSERT INTO notas (id_aluno, id_materia, media_final) VALUES (1, 1, 8.5), (1, 2, 7.0);

CREATE TABLE materiais (
  id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  titulo varchar(255) NOT NULL,
  arquivo varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE coordenacao (
  id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  id_usuario bigint(20) UNSIGNED NOT NULL,
  telefone varchar(20) DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS eventos (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  categoria VARCHAR(50) NOT NULL DEFAULT 'academic',
  publico VARCHAR(255) DEFAULT NULL,
  data DATE NOT NULL,
  hora_inicio TIME NOT NULL,
  hora_fim TIME DEFAULT NULL,
  local VARCHAR(255) NOT NULL,
  descricao TEXT DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE eventos
ADD titulo VARCHAR(255) NOT NULL AFTER id,
ADD categoria VARCHAR(50) NOT NULL DEFAULT 'academic' AFTER titulo,
ADD publico VARCHAR(255) NULL AFTER categoria,
ADD data DATE NOT NULL AFTER publico,
ADD hora_inicio TIME NOT NULL AFTER data,
ADD hora_fim TIME NULL AFTER hora_inicio,
ADD local VARCHAR(255) NOT NULL AFTER hora_fim,
ADD descricao TEXT NULL AFTER local;

describe eventos;

SELECT * FROM turmas;

INSERT INTO Turmas
(nome_turma, serie, periodo, id_professor)
VALUES
('1º Ano B', 'Ensino Médio', 'Matutino', 2);

CREATE TABLE IF NOT EXISTS Nota (
    id_nota INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    id_turma INT NOT NULL,
    bimestre INT NOT NULL,
    nota DECIMAL(4,2) NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY aluno_bimestre_unique (id_aluno, bimestre)
);

USE sistema_frequencia;

SHOW TABLES;

CREATE TABLE `comunicados` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `turma_id` INT NULL,
  `titulo` VARCHAR(255) NOT NULL,
  `mensagem` TEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE reconhecimento_facial (
    id_reconhecimento INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    embedding JSON NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (id_aluno)
        REFERENCES Aluno(id_aluno)
        ON DELETE CASCADE
);

DROP TABLE IF EXISTS reconhecimento_facial;

SHOW tables;

describe alunos;

CREATE TABLE reconhecimento_facial (
    id_reconhecimento INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    embedding JSON NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_reconhecimento_aluno
        FOREIGN KEY (id_aluno)
        REFERENCES alunos(id_aluno)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

USE sistema_frequencia;

SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE Frequencia;
TRUNCATE TABLE notas;
TRUNCATE TABLE Nota;
TRUNCATE TABLE alunos;
TRUNCATE TABLE eventos;
TRUNCATE TABLE comunicados;
TRUNCATE TABLE Turmas;
TRUNCATE TABLE usuario;

INSERT INTO Turmas
(nome_turma, serie, periodo, id_professor)
VALUES
('1º Ano A', '1º Ano do Ensino Médio', 'Matutino', 1);

INSERT INTO alunos (id_usuario, id_turma, data_nascimento)
VALUES
(2, 1, '2009-01-01');

UPDATE alunos
SET rfid_uid = 'AC 6D DD 06'
WHERE id_aluno = 5;

SELECT id_aluno, rfid_uid
FROM alunos
WHERE id_aluno = 5;


INSERT INTO eventos
(titulo, categoria, publico, data, hora_inicio, hora_fim, local, descricao)
VALUES
(
    'Reunião de Pais e Responsáveis',
    'Reunião',
    'Todos',
    '2026-09-25',
    '18:30:00',
    '20:00:00',
    'Auditório',
    'Reunião para apresentação do desempenho dos alunos e alinhamento com os pais e responsáveis.'
);

INSERT INTO comunicados
(turma_id, titulo, mensagem)
VALUES
(
    1,
    'Reunião de Pais',
    'Informamos que haverá reunião de pais e responsáveis para apresentação do desempenho dos alunos.'
);

INSERT INTO usuario
(id_usuario, nome, email, senha, data_cadastro)
VALUES
(1, 'Luna Tessarini', 'luna@escola.com', '123456', '2026-09-22');

ALTER TABLE usuario
ADD COLUMN cpf VARCHAR(14) NULL AFTER nome;

SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE usuario;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO usuario
(nome, cpf, email, senha, data_cadastro)
VALUES

-- 1º ANO A
('Ana Beatriz Souza', '201.000.001-01', 'ana.beatriz@sife.com', '123456', '2026-09-22');

SELECT id_usuario, nome, cpf, email
FROM usuario;