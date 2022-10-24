<html>
    <head>
        <title>Sistema</title>
      
    </head>
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
                <?php foreach($model->rows as $item): ?>
                    <tr>
                    <td> <?= $lista_categorias[$i]->id ?> </td>
                        <td> <?= $lista_categorias[$i]->descricao  ?> </td>
                   
                    </tr>
                    <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
                </tbody>
            </table>
        </main>
    </body>
</html>