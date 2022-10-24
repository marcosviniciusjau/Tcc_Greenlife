<?php


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Carrinho de Compras </title>
    <link href="main.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="corpo">

        <nav>
        </nav>
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
    <p class="card-text"> <font face="Arial Light" size="5">  <?= $item->quantidade ?></font></p>
    <center><a href="#" class="btn btn-primary" style="background-color: #023418;"><b>Mais detalhes</b></center></a>
      </div>
  
      </div>
      <?php endforeach ?>
   </div>
   </div>
        <section id="lista-produtos">
            <div class="item">
            <img src="/View/Uploads/<?= $item->imagem ?>"
            <center><?= $item->nome ?></center>
            <font face="Arial Light" size="5">  R$ <?= $item->valor ?></font>
                <a href="carrinho.php?acao=adicionar">
                    Comprar
                </a>
            </div>
        </section>

    </div>
</body>
</html>