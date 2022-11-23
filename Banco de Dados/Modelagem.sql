use db_mvc;
insert into categoria(descricao) values ('Alimentação');
insert into categoria(descricao) values ('Vestuário');
insert into categoria(descricao) values ('Higiene');
insert into categoria(descricao) values ('Cosméticos');

INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Proteina', 'https://pag.ae/7YMNt8XCH', '1', '8', '200', 'enviado_636aa2390e431.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Mascara', 'https://pag.ae/7YFS-aUG7', '2', '5', '250', 'enviado_637aa2a059911.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Shampoo', 'https://pag.ae/7YGsudNsK', '3', '25', '3000', 'enviado_637aa2ac28cca.PNG');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Batom', 'https://pag.ae/7YMQY-a2K', '4', '10', '2500', 'enviado_637aa2c465924.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Creme Hidratante', 'https://pag.ae/7YMNvgsQp', '4', '30', '2000', 'enviado_636aa2390e431.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Levedura', 'https://pag.ae/7YMNrMrun', '1', '40', '350', 'enviado_637aa2a059911.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Geleia', 'https://pag.ae/7YMNo1rG3', '1', '30', '500', 'enviado_637aa2ac28cca.PNG');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Leite', 'https://pag.ae/7YMNqc-7K', '1', '15', '2700', 'enviado_637aa2c465924.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Atum', 'https://pag.ae/7YMNo1rG3', '1', '30', '1500', 'enviado_637aa2ac28cca.PNG');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Chocolate', 'https://pag.ae/7YFS-aUG7', '1', '6', '2700', 'enviado_637aa2c465924.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Avental', 'https://pag.ae/7YMNo1rG3', '2', '102', '1500', 'enviado_637aa2ac28cca.PNG');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Moletom', 'https://pag.ae/7YFS-aUG7', '2', '119', '700', 'enviado_637aa2c465924.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Pasta', 'https://pag.ae/7YMNo1rG3', '3', '12', '1200', 'enviado_637aa2ac28cca.PNG');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Sabonete', 'https://pag.ae/7YFS-aUG7', '3', '10', '750', 'enviado_637aa2c465924.png');
INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES ('Perfume', 'https://pag.ae/7YFS-aUG7', '4', '16', '730', 'enviado_637aa2c465924.png');

 SELECT usuario.nome_usuario,usuario.foto_perfil, comentarios.descricao FROM usuario INNER JOIN comentarios
        ON usuario.id_comentarios = comentarios.id;
        
SELECT usuario.nome_usuario,usuario.foto_perfil, comentarios.descricao FROM usuario INNER JOIN comentarios
        ON usuario.id_comentarios = comentarios.id;
        UPDATE comentarios SET id_usuario=1 where id=1;
        UPDATE usuario.id_comentarios inner join comentarios on comentarios.id set id=1;
        