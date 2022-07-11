<?php
require_once('../model/Livros.php');

if(isset($_POST['titulo'])) {
  $titulo = $_POST['titulo'];
  $editora = $_POST['editora'];
  $imagem = $_POST['imagem'];
  $autor = $_POST['autor'];


  echo "$titulo <br> $editora <br> $autor <br> $imagem";

  $cadastro = new Livros($titulo, $editora, $imagem, $autor);

  $cadastro->insert();

  if(!$cadastro->insert()) {
    echo "Falha ao cadastrar";
  } else {
    $ok = "Livro cadastrado com sucesso!";
  }
 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Burkina Faso</title>
</head>
<body>


    <form method="POST" action="" enctype="multipart/form-data">

        <h1>Biblioteca Burkina Faso</h1>

        <p>Cadastre seu livro aqui</p>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Título</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="titulo"  required>
          </div>

          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Editora</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="editora"  required>
          </div>

          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Link da Imagem</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="imagem"  required>
          </div>

          <div class="input-group input-group-sm mb-2">
            <span class="input-group-text" id="inputGroup-sizing-sm">Autor</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="autor"  required>
          </div>

          <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>

          <p>

            <?php
              if(isset($cadastro->erro['erro'])){
                echo $cadastro->erro;
              } 
              
              if(isset($ok)) {
                echo $ok;
              }
            ?>

          </p>
    </form>

    <form method="POST" action="">

          <h2>Pesquisar</h2>

          <p>Busque seu livro ou autor aqui!</p>

          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Título</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="busca_tiutlo" placeholder="Digite o título do livro aqui" >
          </div>

          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Autor</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="busca_autor" placeholder="Digite o nome do autor para encontrar todos os livros deste" >
          </div>

          <button type="button" class="btn btn-primary" name="buscar">Buscar</button>
    </form>
     
</body>
</html>


