CREATE TABLE [IF NOT EXISTS] pessoas (
    id integer PRIMARY KEY,
    nome varchar(255) NULL,
    dt_insercao date
)

CREATE TABLE [IF NOT EXISTS] contatos (
    id integer PRIMARY KEY,
    id_pessoa integer CONSTRAINT pk_id_pessoa
    contato varchar(255) NULL,
    [FOREIGN KEEP id_pessoa REFERENCES pessoas.id]
)

CREATE TABLE [IF NOT EXISTS] enderecos (
    id integer PRIMARY KEY,
    id_pessoa integer CONSTRAINT pk_id_pessoa
    endereco varchar(255) NULL,
    [FOREIGN KEEP id_pessoa REFERENCES pessoas.id]
)
