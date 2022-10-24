<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pagamento</legend>

        <form method="post" action="/pagamento/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="numero">Numero:</label>
            <input id="numero" name="numero" value="<?= $model->numero ?>" type="number" />

            <label for="data_validade">Data Validade:</label>
            <input id="data_validade" value="<?= $model->data_validade ?>" name="data_validade" type="date" />
            
            <label for="cvv">CVV:</label>
            <input id="cvv" name="cvv" value="<?= $model->cvv ?>" type="number" />

            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>