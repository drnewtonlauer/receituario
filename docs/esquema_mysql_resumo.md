# Esquema MySQL (resumo)

## clinicas (InnoDB, latin1)
- idclin INT PK AUTO_INCREMENT
- nome VARCHAR(100) NOT NULL
- endereco TEXT
- telefone VARCHAR(30)
- ativo INT(2) NOT NULL
- procedimentos LONGTEXT
- email TEXT
- logo VARCHAR(50)

## medicamento (MyISAM, latin1)
- id INT PK AUTO_INCREMENT
- nome TEXT
- medicamento TEXT

## medicamento_ped (MyISAM, latin1)
- id INT PK AUTO_INCREMENT
- nome TEXT NOT NULL
- medicamento TEXT NOT NULL
- calc FLOAT NOT NULL

## medicamento_ped_ev (MyISAM, latin1)
- id INT PK AUTO_INCREMENT
- nome TEXT NOT NULL
- medicamento TEXT NOT NULL
- calc FLOAT NOT NULL

## modelo (MyISAM, latin1)
- id INT PK AUTO_INCREMENT
- nome VARCHAR(100) NOT NULL
- modelo TEXT NOT NULL
- fav INT(1) DEFAULT 0
- idmd INT NOT NULL

## modelo_ped (MyISAM, latin1)
- id INT PK AUTO_INCREMENT
- nome VARCHAR(100) NOT NULL
- modelo TEXT NOT NULL
- fav INT(1) DEFAULT 0
- idmd INT NOT NULL

## solicito (MyISAM, latin1)
- id INT PK AUTO_INCREMENT
- nome TEXT NOT NULL

## usuarios (InnoDB, latin1)
- id INT UNSIGNED PK AUTO_INCREMENT
- nome VARCHAR(50) NOT NULL
- usuario VARCHAR(25) UNIQUE NOT NULL
- senha VARCHAR(40) NOT NULL   ← (provavelmente hash de 40 chars, ex. SHA-1)
- crm VARCHAR(50) NOT NULL
- especialidade VARCHAR(50) NOT NULL
