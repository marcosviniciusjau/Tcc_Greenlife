    <!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="greenlife.css" />
<link rel="stylesheet" type="text/css" href="produto.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
    <title>GL - Vestuário</title>
    <link rel="icon" href="View/Imagens/Icone/leaf.png" type="image/icon type">

  </head>
  <body>
  
<nav class="navbar navbar-light">
  <div class="container-fluid">
     <a href="/"><img src="View/Imagens/Header/logofundo.png" class="img-fluid" width="370" height="103">
    <a class="navbar-brand" href="#">

<div id="wpp"><a href="https://web.whatsapp.com"><img src="View/Imagens/Header/whatsapp.png" width="40" height="40"></a></div>
<div id="fb"><a href="https://www.facebook.com/Green-Life-113598344685626"><img src="View/Imagens/Header/facebook.png" width="40" height="40"></a></div>
<div id="ig"><a href="https://www.instagram.com/greenlifevegan01/"><img src="View/Imagens/Header/instagram.png" width="40" height="40"></a></div>
<div id="tel"><a href="https://web.whatsapp.com"><img src="View/Imagens/Header/phone-call.png" width="40" height="40"></a></div>
<div id="email"><a href="https://mail.google.com/mail/"><img src="View/Imagens/Header/email.png" width="40" height="40"></a></div>
</div>

</a>
  </div>

  </nav>

   <nav class="navbar navbar-light" style="background-color: #023418">
    <div class="container-fluid">
       <a class="navbar-brand" href="promocoes">
          <font face="Corbel Light" size="4.5" color="white">ﾠﾠﾠPROMOÇÕES</a>
       
      </a></font>

     <nav class="navbar navbar-light" style="background-color: #023418">
    
    <div class="container-fluid">
          <a class="navbar-brand" href="alimentacao">
        
         <font face="Corbel Light" size="4.5" color="white"> ALIMENTAÇÃO</a>
       
      </a></font>
       <a class="navbar-brand" href="vestuario">
       
          <font face="Corbel Light" size="4.5" color="white">VESTUÁRIO</a>
      </a></font>
      <br>
       <a class="navbar-brand" href="higiene">
         
         <font face="Corbel Light" size="4.5" color="white">HIGIENE</a>
        
      </a></font>
          <a class="navbar-brand" href="cosmeticos">
         
          <font face="Corbel Light" size="4.5" color="white">COSMÉTICOS</a>
         </a></font>
        <form class="d-flex">
        <input class="form-control me-4" type="search" placeholder="Pesquisar" aria-label="Search">
       
      <a class="navbar-brand" href="#">
        <a href="login.html"><img src="View/Imagens/Header/bag.png" class="img-fluid" alt="" width="50" height="50" class="d-inline-block align-text-top">
        
        <br>
      </a></font>

      </form>
       <a class="navbar-brand" href="#">
         <a href="login.html"><img src="View/Imagens/Header/user.png" class="img-fluid" alt="" width="35" height="35" class="d-inline-block align-text-top">
          
      </a></font>
      
    </div>
  </nav>
  </nav>

  <br>

    <div id="conteudo">
  <table border="0" cellspacing="10" cellpadding="10" style="margin:0 auto" >
   <tr><th colspan="10"><font size="10" style= "font-family: 'Corbel'"><center>── VESTUÁRIO ──</center></font>
   <div class="container text-center">
   <div class="row row-cols-4">
    <?php foreach($model->rows as $item): ?>
      
      <div class="col">
      <div class="card" >
      <div class="card-body">
      <img src="/View/Uploads/<?= $item->imagem ?>" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
    <h5 class="card-title"><center><?= $item->nome ?></center></h5>
    <p class="card-text"> <font face="Arial Light" size="3">ﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠ</font></p>
    <p class="card-text"> <font face="Arial Light" size="5">  R$ <?= $item->valor ?></font></p>

    <center><a href="#" class="btn btn-primary" style="background-color: #023418;"><b>Mais detalhes</b></center></a>
      </div>
  
      </div>
      <?php endforeach ?>
   </div>
   </div>
  

    </table>

    <br><br><br>

    <footer class="footer-distributed">

<div class="footer-left">

<a href="/"> <img src="View/Imagens/Rodape/logorodape.png" width="230" height="55"></a>

  <p class="footer-links">
    <a href="/" class="link-1">Home</a>
    
    <a href="promocoes">Promoções</a>
  
    <a href="alimentacao">Alimentação</a>
  
    <a href="vestuario">Vestuário</a>
    
    <a href="higiene">Higiene</a>
    
    <a href="cosmeticos">Cosméticos</a>
      <br>
    <a href="#" class="link-1">Política de Privacidade</a>
    <a href="#">Política de Pagamentos</a>
    <a href="#">Sobre Nós</a>
    </p>

  <br> <br>
  <p class="footer-company-name">GreenLife © 2022 - Todos os direitos reservados</p>
  <p class="footer-company-name">Desenvolvido por AEMMS</p>
</div>          

</footer>


  </body>
</html>

<style type="text/css">
  
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