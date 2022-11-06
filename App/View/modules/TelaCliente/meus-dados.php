<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Meus Dados</title>
    <link rel="icon" href="/View/Imagens/Icone/leaf.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">



<style type="text/css">
    
    body {
    margin: 0;
    padding: 0;
    height: 100vh;
    widows: 100vw;
  }

  .content {
    height: 520px;
    width: 1100px;
    overflow: hidden;
    position:  absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .navigation {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translate(-50%);
    display: flex;
  }

  .bar {
    width: 20px;
    height: 20px;
    border: 2px solid #fff;
    margin: 6px;
    border-radius: 100px;
    cursor: pointer;
    transition: .4s;
  }

  .bar:hover {
    background-color: white;
  }

  input {
    display: none;
  }

  .content {
    position: absolute;
    top: 470px;
  }

  .slides {
    display: flex;
    width: 500%;
    height: 100%;
  }

  .slide {
    width: 20%;
    transition: .6s;
  }

  .slide img {
    width: 100%;
    height: 100%;
  }

  #slide1:checked ~ .s1 {
    margin-left: 0;
  }

  #slide2:checked ~ .s1 {
    margin-left: -20%;
  }

  #slide3:checked ~ .s1 {
    margin-left: -40%;
  }

  #slide4:checked ~ .s1 {
    margin-left: -60%;
  }

  #slide5:checked ~ .s1 {
    margin-left: -80%;
  }

  #alimentacao {
    width: 200px;
    height: 200px;
    border: 6px solid #023418;
    border-radius: 100%;
  }

  #vestuario {
    width: 200px;
    height: 200px;
    border: 6px solid #023418;
    border-radius: 100%;
  }

  #higiene {
    width: 200px;
    height: 200px;
    border: 6px solid #023418;
    border-radius: 100%;
  }

  #cosmeticos {
    width: 200px;
    height: 200px;
    border: 6px solid #023418;
    border-radius: 100%;
  }

  #filomena {
    width: 180px;
    height: 180px;
    border: 5px solid #023418;
    border-radius: 100%;
  }

  #camila {
    width: 180px;
    height: 180px;
    border: 5px solid #023418;
    border-radius: 100%;
  }

  #luis {
    width: 180px;
    height: 180px;
    border: 5px solid #023418;
    border-radius: 100%;
  }

  section {
  width: 100%;
  display: inline-block;
  background: #023418;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
  background: #023418;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  white;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}

#wpp {
position: absolute;
top: 23px;
left: 1155px;
}

#fb {
position: absolute;
top: 23px;
left: 1217px;
}

#ig {
position: absolute;
top: 23px;
left: 1262px;
}

#tel {
position: absolute;
top: 23px;
left: 1307px;
}

#email {
position: absolute;
top: 23px;
left: 1352px;
}
  </style>


<nav class="navbar navbar-light">
  <div class="container-fluid">
     <a href="/"><img src="/View/Imagens/Header/logo4.png" class="img-fluid" width="370" height="103">
    <a class="navbar-brand" href="/">

<div class="seila">
<div id="wpp"><a href="https://web.whatsapp.com"><img src="/View/Imagens/Header/whatsapp.png" width="40" height="40"></a></div>
<div id="fb"><a href="https://pt-br.facebook.com"><img src="/View/Imagens/Header/facebook.png" width="40" height="40"></a></div>
<div id="ig"><a href="https://instagram.com"><img src="/View/Imagens/Header/instagram.png" width="40" height="40"></a></div>
<div id="tel"><a href="https://web.whatsapp.com"><img src="/View/Imagens/Header/phone-call.png" width="40" height="40"></a></div>
<div id="email"><a href="https://mail.google.com/mail/"><img src="/View/Imagens/Header/email.png" width="40" height="40"></a></div>
<a href="logout"><button type="submit" class="btn btn-success">Sair</button></a>
</div>

</a>
  </div>

  </nav>

   <nav class="navbar navbar-light" style="background-color: #023418">
   

     <nav class="navbar navbar-light" style="background-color: #023418">
    
   
        <br>
      </a></font>

      </form>
   
      </a></font>
      
    </div>
  </nav>
  </nav>
<body>
<div id="global">

   

<main class="container mt-3">

    <h4>
        Meus Dados
    </h4>

    <?php if (isset($retorno['positivo'])) : ?>
        <div class="alert alert-success" role="alert">
            <?= $retorno['positivo'] ?>
        </div>
    <?php endif ?>

    <?php if (isset($retorno['senha_incorreta'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $retorno['senha_incorreta'] ?>
        </div>
    <?php endif ?>

    <?php if (isset($retorno['senha_confirmacao_incorreta'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $retorno['senha_confirmacao_incorreta'] ?>
        </div>
    <?php endif ?>



    <form method="post" action="/usuario/meus-dados/salvar" enctype="multipart/form-data">
    <label for="arquivo_up">Foto:</label>
        <input id="arquivo_up" name="arquivo_up" type="file" value="<?= $meus_dados->foto_perfil ?>"/>

    <td> <img src="/View/Uploads/<?= $meus_dados->foto_perfil ?>" width="100" height="100"/> </td>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome: </label>
                <input name="nome" class="form-control" value="<?= $meus_dados->nome ?>" type="text" required />
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail: </label>
                <input name="email" class="form-control" value="<?= $meus_dados->email ?>" type="email" required />
            </div>
        </div>

        <fieldset class="border rounded p-3 mb-3">
            <legend class="form-label col-auto">Trocar a Senha: </legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nova_senha">Nova Senha: </label>
                    <input name="nova_senha" class="form-control" type="password" placeholder="Alteração de senha é opcional" />
                </div>
                <div class="form-group col-md-6">
                    <label for="confirmacao_nova_senha">Confirme a Nova Senha: </label>
                    <input name="confirmacao_nova_senha" class="form-control" type="password" />
                </div>
            </div>
        </fieldset>

        <fieldset class="border rounded p-3 mb-3 bg-light">
            <legend class="form-label col-auto bg-light">Senha Atual: </legend>

            <div class="form-group border border-danger p-3 p-3 mb-5 rounded">
                <input name="senha_atual" class="form-control" type="password" placeholder="Informe sua senha atual para realizar alterações no seu cadastro:" required />
            </div>
        </fieldset>

        

        <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </main>

    
    </div>
</body>

</html>