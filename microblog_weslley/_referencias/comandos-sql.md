# Operaçoes CRUD usando SQL

## Resumo

- C: Criar/inserir dados   -> INSERT
- R: (R) ler dados         -> SELECT
- U: (U) Atualizar dados   -> UPDATE
- D: (D) Excluir           -> DELETE

## Exemplos para tabela "usuarios"

### Inserindo usuarios


INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Adriano','teste123@gmail.com','123senac','admin');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Chapolin','teste456@gmail.com','456senac','editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Florinda','florinda123@gmail.com','florindasenac','editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Kiko','kiko123@gmail.com','kikosenac','editor');

### Inserindo noticias

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Meu pai ganhou na mega-sena',
    'To rico,tchau pra voces',
    'Jogou e ganhou',
    'premio.jpg',
    1

);

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Ultimas noticias agricolas, sobre clima e Previsao do tempo',
    'Moagem de cana de acucar atinge 27 milhoes de toneladas na 2 quinzena de outubro',
    'Qualidade da Materia Prima teve variaçao positiva',
    'tempo.jpg',
    4

);

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Safra 24/25 de milho exige atençao ao manejo e tratos culturais',
    'Apesar do cenário promissor, os agricultores devem estar atentos aos desafios que podem impactar a produtividade',
    'Impactar a qualidade e a produtividade',
    'tratosCulturais.jpg',
    2

);

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Area tratada com defensivos agricolas cresce 10.9% no Brasil',
    'Pesquisa mostra que, entre janeiro e setembro de 2024 foram tratados mais de 1 Bilhao de hectares',
    'Defensivos agricolas em area produtiva',
    'defensivos.jpg',
    3

);

### Leitura de dados

SELECT data, titulo FROM noticias;

SELECT * FROM noticias;

### Leitura de dados da tabela "usuarios"

SELECT nome, email, tipo FROM usuarios;

SELECT nome, email, tipo FROM usuarios WHERE tipo= 'editor';

### Atualizaçao de dados dos usuários

UPDATE usuarios SET email = 'chapolin456@gmail.com'
WHERE id= 2;

### Excluindo dados da tabela "noticias"

DELETE FROM noticias WHERE id= 1;