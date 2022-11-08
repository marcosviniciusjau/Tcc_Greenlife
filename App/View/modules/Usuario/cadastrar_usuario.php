<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GL - Cadastrar</title>
      <link rel="icon" href="/View/Imagens/Icone/leaf.png" type="image/icon type">
 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="/View/Imagens/Login/vitrine.png" width="484" height="643" alt="form">
			</div>
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
            <form method="post" action="/usuario/salvar" class="form-detail">
			<h2>Cadastro</h2>
                <div class="form-row">
                    <div class="form-row">
                       
                        <input name="nome_usuario"  placeholder="Nome" class="form-control" value="<?= isset($dados_usuario) ? $dados_usuario->nome_usuario : "" ?>" type="text" required />
                    </div>
                    <div class="form-row">
                       
                        <input name="email"  placeholder="E-mail" class="form-control" value="<?= isset($dados_usuario) ? $dados_usuario->email : "" ?>" type="email" required />
                    </div>
					<div class="form-row">
					
					<input type="password"  class="form-control" name="senha" id="senha" class="input-text" placeholder="Senha" required value="<?= isset($dados_usuario) ? $dados_usuario->senha : "" ?>">
				</div>

				<div class="form-row">

					    <input name="tipo_usuario"  placeholder="Usuário Tipo" class="form-control" value="<?= isset($dados_usuario) ? $dados_usuario->tipo_usuario : "" ?>" type="text" required />
				   </div>
                </div>
				<br>
                <label for="arquivo_up">Foto:</label>
        <input id="arquivo_up" name="arquivo_up" type="file" />
       
				<br>
				
				<br>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Cadastrar">
				</div>
			
				<div class="login">
					<center><p><font color="Black"> Já possui uma conta?</p></font></center>
					<center><p><a href="/login"><font color="#0b320b">Fazer Login</p></font></a></center>
				</div>
				<div class="Voltar">
		
					<center><p><a href="/"><font color="#0b320b">Voltar</a></p></font></center>
			</div>
			</form>
		</div>
	</div>
</body>
</html>
<style>
    body {
	margin:  0;
}

.page-content {
	width: 100%;
	margin:  0 auto;
	background-image: -moz-linear-gradient( 136deg, rgb(2,52,24) 0%, rgb(7,123,59) 100%);
    background-image: -webkit-linear-gradient( 136deg, rgb(2,52,24) 0%, rgb(7,123,59) 100%);
    background-image: -ms-linear-gradient( 136deg, rgb(2,52,24) 0%, rgb(7,123,59) 100%);
	display: flex;
	display: -webkit-flex;
	justify-content: center;
	-o-justify-content: center;
	-ms-justify-content: center;
	-moz-justify-content: center;
	-webkit-justify-content: center;
	align-items: center;
	-o-align-items: center;
	-ms-align-items: center;
	-moz-align-items: center;
	-webkit-align-items: center;
				position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);

}
.form-v6-content  {
	background: #fff;
	width: 1000px;
	border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 8px;
	margin: 200px 0;
	font-family: 'Nunito', sans-serif;
	color: #fff;
	font-weight: 700;
	position: relative;
	display: flex;
	display: -webkit-flex;
}
.form-v6-content .form-left {
	margin-bottom: -6px;
}
.form-v6-content .form-left img {
	border-top-left-radius: 8px;
	border-bottom-left-radius: 8px;
}
.form-v6-content .form-detail {
    padding: 30px 40px;
	position: relative;
	width: 100%;
}
.form-v6-content .form-detail h2 {
	color: #333;
	font-size: 35px;
	text-align: center;
	position: relative;
	padding: 6px 0 0;
	margin-bottom: 47px;
}
.form-v6-content .form-row {
    width: 100%;
}
.form-v6-content .form-detail .form-row-last {
	text-align: center;
}
.form-v6-content .form-detail .input-text {
	margin-bottom: 35px;
}
.form-v6-content .form-detail input {
	width: 92%;
    padding: 0px 15px 10px 15px;
    border: 2px solid transparent;
    border-bottom: 2px solid #e5e5e5;
    appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
    font-family: 'Nunito', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #333;
}
.form-v6-content .form-detail .form-row input:focus {
	border-bottom: 2px solid #0b320b;
}
.form-v6-content .form-detail .register {
	background: #0b320b;
	border-radius: 6px;
	-o-border-radius: 6px;
	-ms-border-radius: 6px;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	width: 160px;
	box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-o-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-ms-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	border: none;
	margin: 11px 0 50px 0px;
	cursor: pointer;
	font-family: 'Nunito', sans-serif;
	color: #fff;
	font-weight: 700;
	font-size: 18px;
}
.form-v6-content .form-detail .register:hover {
	background: #197519;
}
.form-v6-content .form-detail .form-row-last input {
	padding: 13px;
}
input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #666;
  font-size: 16px;
}
input::-moz-placeholder { /* Firefox 19+ */
  color: #666;
  font-size: 16px;
}
input:-ms-input-placeholder { /* IE 10+ */
  color: #666;
  font-size: 16px;
}
input:-moz-placeholder { /* Firefox 18- */
  color: #666;
  font-size: 16px;
}

/* Responsive */
@media screen and (max-width: 991px) {
	.form-v6-content {
		margin: 180px 20px;
		flex-direction:  column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
	}
	.form-v6-content .form-left {
		width: 100%;
	}
	.form-v6-content .form-left img {
		width: 100%;
		border-bottom-left-radius: 0px;
	    border-top-right-radius: 8px;
	}
	.form-v6-content .form-detail {
		padding: 30px 20px 30px 20px;
	    width: auto;
	}
	.form-v6-content .form-detail .form-row input {
		width: 96%;
	}
	.form-v6-content .form-detail .register {
		margin-bottom: 80px;
	}
}
@media screen and (max-width: 767px) {
	.form-v6-content .form-detail .form-row input {
		width: 94%;
	}
}

@media screen and (max-width: 575px) {
	.form-v6-content .form-detail .form-row input {
	    width: 89%;
	}
}@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-LightItalic.ttf') format('truetype');
    font-weight: 300;
    font-style: italic;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-BoldItalic.ttf') format('truetype');
    font-weight: bold;
    font-style: italic;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-ExtraLightItalic.ttf') format('truetype');
    font-weight: 200;
    font-style: italic;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-BlackItalic.ttf') format('truetype');
    font-weight: 900;
    font-style: italic;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-SemiBold.ttf') format('truetype');
    font-weight: 600;
    font-style: normal;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-Italic.ttf') format('truetype');
    font-weight: normal;
    font-style: italic;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-Black.ttf') format('truetype');
    font-weight: 900;
    font-style: normal;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-SemiBoldItalic.ttf') format('truetype');
    font-weight: 600;
    font-style: italic;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-Light.ttf') format('truetype');
    font-weight: 300;
    font-style: normal;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-ExtraLight.ttf') format('truetype');
    font-weight: 200;
    font-style: normal;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-ExtraBoldItalic.ttf') format('truetype');
    font-weight: 800;
    font-style: italic;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-ExtraBold.ttf') format('truetype');
    font-weight: 800;
    font-style: normal;
}

@font-face {
    font-family: 'Nunito';
    src: url('../fonts/Nunito/Nunito-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
</style>