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

      <title>Cadastro de Categorias</title>
      <link rel="icon" href="/View/Imagens/Icone/leaf.png" type="image/icon type">
   
    </head>
    <body>
    
  <nav class="navbar navbar-light">
  <div class="container-fluid">
     <a href="/"><img src="/View/Imagens/Header/logo4.png" class="img-fluid" width="370" height="103">
    <a class="navbar-brand" href="#">

<div class="seila">
<div id="wpp"><a href="https://web.whatsapp.com"><img src="/View/Imagens/Header/whatsapp.png" width="40" height="40"></a></div>
<div id="fb"><a href="https://pt-br.facebook.com"><img src="/View/Imagens/Header/facebook.png" width="40" height="40"></a></div>
<div id="ig"><a href="https://instagram.com"><img src="/View/Imagens/Header/instagram.png" width="40" height="40"></a></div>
<div id="tel"><a href="https://web.whatsapp.com"><img src="/View/Imagens/Header/phone-call.png" width="40" height="40"></a></div>
<div id="email"><a href="https://mail.google.com/mail/"><img src="/View/Imagens/Header/email.png" width="40" height="40"></a></div>
</div>

</a>
  </div>

  </nav>
   <nav class="navbar navbar-light" style="background-color: #023418">
    <div class="container-fluid">
       <a class="navbar-brand" href="/categoria/form">
          <font face="Corbel Light" size="4.5" color="white">Cadastar Categorias</a>
       
      </a></font>

        <form class="d-flex">
        <input class="form-control me-4" type="search" placeholder="Pesquisar" aria-label="Search">
       
      <a class="navbar-brand" href="#">
        <a href="login"><img src="/View/Imagens/Header/bag.png" class="img-fluid" alt="" width="50" height="50" class="d-inline-block align-text-top">
        
        <br>
      </a></font>

      </form>
       <a class="navbar-brand" href="#">
         <a href="login"><img src="/View/Imagens/Header/user.png" class="img-fluid" alt="" width="35" height="35" class="d-inline-block align-text-top">
          
      </a></font>
      
    </div>
  </nav>
  </nav>

  <br>
  <br>
  <br>
 
    <body>
        


        <main class="container mt-3">

            <?php if(isset($_GET['excluido'])): ?>
            <p>Categoria foi excluida!<p>
            <?php endif ?>

            <h4>
                Lista de Categorias
            </h4>

            <table class="table table-hover mt-3">
                <thead class="thead-dark">
                    <tr>
                       
                        <th scope="col">Id</th>
                        <th scope="col-lg-9">Descrição:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<$total_categorias; $i++): ?>
                    <tr>
                     
                        </th>
                        <td> <?= $lista_categorias[$i]->id ?> </td>
                        <td> <?= $lista_categorias[$i]->descricao  ?> </td>
                    </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </main>


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
