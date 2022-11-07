<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>

<form method="post" action="/usuario/salvar" enctype="multipart/form-data">

<input type="hidden" value="<?= $model->id ?>" name="id" />

        <fieldset>
            <legend>Cadastro de Usuario</legend>
            <label for="nome_usuario">Nome:</label>
            <input name="nome_usuario" id="nome_usuario" type="text" value="<?= $model->nome_usuario ?>"/>
            <label for="descricao">Email:</label>
            <input name="email" id="email" type="text" value="<?= $model->email ?>" />
            <label for="marca">Senha:</label>
            <input name="senha" id="senha" type="password" value="<?= $model->senha ?>"/>
            <label for="descricao">Tipo Usuario:</label>
            <input name="tipo_usuario" id="tipo_usuario" type="text" value="<?= $model->tipo_usuario ?>" />
			<label for="arquivo_up">Foto:</label>
        <input id="arquivo_up" name="arquivo_up" type="file" />

			<button type="submit">Enviar</button>
        </fieldset>
    </form>    
</body>
</html>