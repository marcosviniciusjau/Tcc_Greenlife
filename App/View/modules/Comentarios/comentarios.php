<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>GL - Tela Cliente</title>
      <link rel="icon" href="View/Imagens/Icone/leaf.png" type="image/icon type">
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
     <a href="/"><img src="View/Imagens/Header/logo4.png" class="img-fluid" width="370" height="103">
    <a class="navbar-brand" href="#">

<div class="seila">
<div id="wpp"><a href="https://web.whatsapp.com"><img src="View/Imagens/Header/whatsapp.png" width="40" height="40"></a></div>
<div id="fb"><a href="https://pt-br.facebook.com"><img src="View/Imagens/Header/facebook.png" width="40" height="40"></a></div>
<div id="ig"><a href="https://instagram.com"><img src="View/Imagens/Header/instagram.png" width="40" height="40"></a></div>
<div id="tel"><a href="https://web.whatsapp.com"><img src="View/Imagens/Header/phone-call.png" width="40" height="40"></a></div>
<div id="email"><a href="https://mail.google.com/mail/"><img src="View/Imagens/Header/email.png" width="40" height="40"></a></div>
<a href="logout"><button  type="submit" class="btn btn-success">Sair</button></a>
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
  <br>
  <br>

  <table border="0" cellspacing="10" cellpadding="10" style="margin:0 auto" >
           <tr><th colspan="10"><font size="10" style= "font-family: 'Corbel'"><center>── COMENTÁRIOS ──</center></font>
           </table>
           <br>
    <br>
   
  <div class="form-group">
  <center><label class="col-md-4 control-label" for="textarea">Faça seu Comentário</label></center>
  <br>
  <center><div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">Escreva o que você achou dos nossos produtos</textarea>
  </div></center>
</div>
<br>
<center><button type="submit" class="btn btn-success">Enviar</button></center>