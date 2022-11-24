<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>GL - Fazer Comentario</title>
      <link rel="icon" href="View/Imagens/Icone/leaf.png" type="image/icon type">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<?php include PATH_VIEW . 'includes/cabecalho_usuario.php' ?>
  <br>
  <br>
  <form method="post" action="/comentarios/form/save" >


<fieldset>
<br>
  <br>
  <center><label class="col-md-4 control-label" for="textarea" ><font style="font-family: Corbel" color="black">Faça seu Comentário</label></center>
  <br>
  <center><div class="col-md-4">                     
    <textarea class="form-control" id="descricao" name="descricao" placeholder="Escreva o que você achou dos nossos produtos"></textarea>
  </div></center>
</div>

<br>
<center><button type="submit" class="btn btn-success">Enviar</button></center>
<br>

<center><label class="col-md-4 control-label" for="textarea" >Obs: Seu Comentário irá aparecer na tela inicial</label></center></font>
</fieldset>
        </form>
</body>

</html>