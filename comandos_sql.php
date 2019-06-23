<?php
/*
Comandos para criar tabela no banco de dados
*/

echo "<div>
CREATE TABLE tb_usuarios (
    idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFALUT CURRENT_TIMESTAMP()
);
</div>"

/*
comando para inserir um cadastro na tabela criada
*/

echo "<div>
INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('eduardo','123456');
</div>"

/*
comando para atualizar/alterar um cadastro na tabela criada
*/

echo "<div> UPDATE tb_usuarios SET dessenha = '7891012' WHERE idusuario = 1;
</div>"

/*
comando para Deletar um cadastro na tabela criada
*/

echo "<div>
DELET FROM tb_usuarios WHERE idusuario = 1;
</div>"

?>