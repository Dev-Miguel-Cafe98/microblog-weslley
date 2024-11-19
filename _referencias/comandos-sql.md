# Operações CRUD usando SQL

## Resumo

- C: Criar/Inserir dados        -> INSERT
- R: (R) Ler dados              -> SELECT
- U: (U) Atualizar dados        -> UPDATE
- D: (D) Excluir dados          -> DELETE


## Exemplos para tabela "usuarios"

### Inserindo usuarios

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('thiago', 'thi@gmail.com' '123senac', 'admin');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('jarves', 'jarves@gmail.com' '1245', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('chico bento', 'chico@gmail.com', 'dodo1', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('sasuke', 'sasuke@gmail.com', 'sasa', 'editor');


### Inserindo noticias

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'O palmeiras não tem mundial',
    '51 é pinga',
    'vergonha demaisi',
    'taca.jpg',
    1

);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'maria faz bolo e morre',
    'maria tira o bolo da forma e explode',
    'explosao de sabores',
    'donabenta.jpg',
    3

);


INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'o papa é pop',
    'ele tentou ser do funk mas o pop é pop',
    'fã da madonna',
    'papa.jpg',
    1

);

## Leitura de dados da tabela "noticias"

SELECT data, titulo FROM noticias;

SELECT * FROM noticias;

## Leitura de dados da tabela "usuarios"

SELECT nome, email, tipo FROM usuarios;

SELECT nome, email, tipo FROM usuarios WHERE tipo = 'editor';

## Atualização de dados dos usuários

UPDATE usuarios SET email = 'thiago@gmail.com' WHERE id = 1;

## Excluindo dados da tabela "noticias"

DELETE FROM noticias WHERE id = 3;