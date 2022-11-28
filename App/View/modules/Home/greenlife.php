<!doctype html>
  <html lang="pt-br">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   </head>
   <link href="carousel.css" rel="stylesheet">
     

      <title>GL - Página Inicial</title>
      <link rel="icon" href="View/Imagens/Icone/leaf.png" type="image/icon type">
   
    </head>
    <body>
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
 
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="/alimentacao"><img src="View/Imagens/PaginaInicial/1.png" ></a>
    </div>
    <div class="carousel-item">
    <img src="View/Imagens/PaginaInicial/2.png" >
    </div>
    <div class="carousel-item">
    <img src="View/Imagens/PaginaInicial/3.png" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br><br>
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
      <p class="card-text">  <font face="Arial Light" size="5"> <?= $item->descricao ?></font></p>
    
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
                <center><a href="alimentacao"><img id="alimentacao" class="thumbnail" src="View/Imagens/PaginaInicial/alimentacao1.png"></a></center>
                <br>
                <center><font size="5" style="font-family: Corbel">ALIMENTAÇÃO</font></center>
              </div>

              <div class="col">
              <center><a href="vestuario"><img id="vestuario" class="thumbnail" src="View/Imagens/PaginaInicial/vestuario1.png"></a></center>
                <br>
                <center><font size="5" style="font-family: Corbel">VESTUÁRIO</font></center>
              </div>

              <div class="col">
              <center><a href="higiene"><img id="higiene"class="thumbnail" src="View/Imagens/PaginaInicial/higiene1.png"></a></center>
                <br>
                <center><font size="5" style="font-family: Corbel">HIGIENE</font></center>
              </div>

              <div class="col">
              <center><a href="cosmeticos"><img id="cosmeticos" class="thumbnail" src="View/Imagens/PaginaInicial/cosmeticos1.png"></a></center>
                <br>
                <center><font size="5" style="font-family: Corbel">COSMÉTICOS</font></center>
              </div>

            </div>
        </div>
        <br><br><br>
        <font size="10" style= "font-family: 'Corbel'"><center>⎯ AVALIAÇÕES ⎯</center></font>
  <div class="container text-center">
    <div class="row">
    <?php 
    
    //var_dump($model1);
    
    foreach($model->arr_comentarios as $item1): ?>
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

  
<?php include PATH_VIEW . 'includes/rodape.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 


    </body>
  </html>

  <style type="text/css">
    #alimentacao {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
  }

  #vestuario {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
  }

  #higiene {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
  }

  #cosmeticos {
    width: 200px;
    height: 200px;
    border: 6px solid #198754;
    border-radius: 100%;
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

  /*change the number below to scale to the appropriate size*/ 
  .thumbnail:hover { 
    transform: scale(1.1); 

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
    text-align: center;
  }

  .featurette-divider{
    width: 1200px;
  }
  </style>