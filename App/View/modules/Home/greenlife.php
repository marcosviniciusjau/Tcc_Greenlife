<!doctype html>
  <html lang="pt-br">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
  <link rel="stylesheet" type="text/css" href="greenlife.css" />
  <link rel="stylesheet" type="text/css" href="produto.css" />

      <script src="bootstrap/css/"></script>

      <title>GL - Página Inicial</title>
      <link rel="icon" href="View/Imagens/Icone/leaf.png" type="image/icon type">
   
    </head>
    <body>
   
    <nav class="navbar navbar-expand-md navbar-dark bg-success">
    <div class="container-fluid">
      <a href="/"><img src="View/Imagens/Rodape/logorodape.png" class="navbar-brand" width="157" height="43"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="promocoes">Promoções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="alimentacao">Alimentação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="vestuario">Vestuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="higiene">Higiene</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cosmeticos">Cosméticos</a>
          </li>
        </ul>

        <div class="text-end">
          <a href="login_usuario"><button type="button" class="btn btn-outline-light me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
              <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg> Login</button></a>
          <a href="usuario/form"><button type="button" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg> Cadastro</button></a>
        </div>
      </div>
    </div>
  </nav>
  <br><br>
  <br>
  <br>
  <br>


    <div class="content">
    <div class="slides">
      <input type="radio" name="radio" id="slide1" checked>
      <input type="radio" name="radio" id="slide2">
      <input type="radio" name="radio" id="slide3">
     


      <div class="slide s1">
        <a href="/alimentacao"><img src="View/Imagens/PaginaInicial/1.png" ></a>
      </div>
      <div class="slide">
        <img src="View/Imagens/PaginaInicial/2.png" >
      </div>
      <div class="slide">
        <img src="View/Imagens/PaginaInicial/3.png" >
      </div>
     
    </div>

      <div class="navigation">
         <label class="bar" for="slide1"></label>
         <label class="bar" for="slide2"></label>
         <label class="bar" for="slide3"></label>
       
      </div>
      
       </div>

  <br>

  <br>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
<font size="10" style= "font-family: 'Corbel'"><center>⎯ DESTAQUES ⎯</center></font>

  <div class="container text-center">
    <div class="row">
    <?php foreach($model->rows as $item): ?>
      <div class="col">
  
  <div class="thumbnail">  
  <center>   
  <div class="card" style="width: 18rem;">
  

   <img  src="/View/Uploads/<?= $item->imagem ?>" class="card-img-top"  alt="...">
   
      <div class="card-body">
      <h5 class="card-title"><center><?= $item->nome ?></center></h5>
      
    <p class="card-text">  <font face="Arial Light" size="5"> R$ <?= $item->valor ?></font></p>
    

    <center><a href="<?= $item->link ?>" class="btn btn-success"><b>Comprar</b></center></a>
     </div>
  </div>
  </center>
  </div> 
  
    <br>
  
      </div>

      <?php endforeach ?>
      </div>








        <br> <br> <br>

        <font size="10" style= "font-family: 'Corbel'"><center>⎯ CATEGORIAS ⎯</center></font>
     
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              
              <div class="col">
                <a href="alimentacao"><img id="alimentacao" class="thumbnail" src="View/Imagens/PaginaInicial/alimentacao1.png"></a>
                <br>
                <font size="5" style="font-family: Corbel">ALIMENTAÇÃO</font>
              </div>

              <div class="col">
                <a href="vestuario"><img id="vestuario" class="thumbnail" src="View/Imagens/PaginaInicial/vestuario1.png"></a>
                <br>
                <font size="5" style="font-family: Corbel">VESTUÁRIO</font>
              </div>

              <div class="col">
                <a href="higiene"><img id="higiene"class="thumbnail" src="View/Imagens/PaginaInicial/higiene1.png"></a>
                <br>
                <font size="5" style="font-family: Corbel">HIGIENE</font>
              </div>

              <div class="col">
                <a href="cosmeticos"><img id="cosmeticos" class="thumbnail" src="View/Imagens/PaginaInicial/cosmeticos1.png"></a>
                <br>
                <font size="5" style="font-family: Corbel">COSMÉTICOS</font>
              </div>

            </div>
        </div>
        <br><br><br>
        <font size="10" style= "font-family: 'Corbel'"><center>⎯ AVALIAÇÕES ⎯</center></font>
  <div class="container text-center">
    <div class="row">
    <?php foreach($model1->rows1 as $item1): ?>
      <div class="col">
  
  <div class="thumbnail">  
  <center>   
  <div class="card" id="card2" style="width: 18rem;">
  

   <img  src="/View/Uploads/<?= $item1->foto_perfil ?>" class="card-img-top" id="card" alt="...">
   
      <div class="card-body">
      <h5 class="card-title"><center><?= $item1->nome_usuario ?></center></h5>
      <p class="card-text"><center>  <font size="4" style="font-family: Corbel"><?= $item1->descricao ?></font></p>
    </div>
  </div>
  </center>
  </div> 
  
    <br>
  
      </div>

      <?php endforeach ?>
      </div>
  </div>

    
  <br>

  <br>

  <br>

  </div>

  <footer class="footer-distributed">

<div class="footer-left">

<a href="/"> <img src="View/Imagens/Rodape/logorodape.png" width="230" height="55"></a>

  <p class="footer-links">
    <a href="/" class="link-1">Home</a>
    <a href="login_adm" >Sessão Administrativa</a>
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
  #card {
    width: 50%;
    border: 4px solid #198754;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
  }
  #card2 {
    padding: 1.5em .5em .5em;
    text-align: justify;
  }
  .navigation {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translate(-50%);
    display: flex;
  }
  .thumbnail { 
    top:-50px; 
    left:-35px; 
    display:block; 
    z-index:999; 
    cursor: pointer; 
    -webkit-transition-property: all; 
    -webkit-transition-duration: 0.3s; 
    -webkit-transition-timing-function: ease; 
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
  /*change the number below to scale to the appropriate size*/ 
  .thumbnail:hover { 
    transform: scale(1.1); 

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
