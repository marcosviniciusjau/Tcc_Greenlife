<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Cadastrar Usuários</title>
    <?php include PATH_VIEW . 'includes/css_config.php' ?>
</head>

<body>
    <div id="global">

        <?php include PATH_VIEW . 'includes/cabecalho.php' ?>

        <main class="container mt-3">

            <h4>
                Cadastro de Usuário
            </h4>

            <?php if (isset($_GET['duplicate_email']) || isset($validations['duplicate_email']))  : ?>
                <div class="alert alert-danger" role="alert">
                    O <strong>e-mail</strong> informado já está sendo usado para outro usuário.
                </div>
            <?php endif ?>

            <?php if (isset($_GET['duplicate_user'])) : ?>
                <div class="alert alert-danger" role="alert">
                    O <strong>usuário</strong> escolhido já está sendo usado para outro usuário.
                </div>
            <?php endif ?>

            <form method="post" action="/usuario/salvar">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome: </label>
                        <input name="nome" class="form-control" value="<?= isset($dados_usuario) ? $dados_usuario->nome : "" ?>" type="text" required />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail: </label>
                        <input name="email" class="form-control" value="<?= isset($dados_usuario) ? $dados_usuario->email : "" ?>" type="email" required />
                    </div>
                </div>

              
