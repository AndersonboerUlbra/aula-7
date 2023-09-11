<?php $listaProfessores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

        <img class="w-40 d-block mx-auto border border-primary border-3 mt-5" src="imagem1.png" alt="conjunto de imagens cartooniando que representam afoordances simbolizando acessibilidade">
    
        <div><h3 class="text-primary text-center">Semana da Acessibilidade</h1></div>

        <div class="container text-center mt-5">
      <a href="/<?php echo FOLDER; ?>/?class=Professor&acao=salvar" class="btn btn-primary">Cadastrar Professor</a>
    </div>
       
        <div class="container mb-5 mt-1 bg-primary ">
    <table class="table table-bordered table-striped table-dark border border-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Açoes</th>
    </tr>
  </thead>
  <tbody>
    
    
    <?php foreach ($listaProfessores as $professor) { ?>
           <tr>
                
                <td><?php echo $professor["id"]; ?></td>
                <td><?php echo $professor["nome"]; ?></td>
                <td><?php echo $professor["idade"]; ?></td>
                <td>
                    <a href="/<?php echo FOLDER; ?>?class=Professor&acao=editar&id=<?php echo $professor['id']; ?>" class="btn btn-primary">Editar</a>
                    <a href="/<?php echo FOLDER; ?>?class=Professor&acao=excluir&id=<?php echo $professor['id']; ?>" class="btn btn-primary">Excluir</a>
                </td>
           </tr>
    
        <?php } ?>
  </tbody>
</table>


    </div>
    </div>
</body>
</html>