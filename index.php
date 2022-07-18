<?php
require_once('autoload.php');

if(isset($_POST['cadastrar'])) {
  $titulo = $_POST['titulo'];
  $editora = $_POST['editora'];
  $imagem = $_POST['imagem'];
  $autor = $_POST['autor'];

  $cadastro = new Livros($titulo, $editora, $imagem, $autor);

  $cadastro->insert();

 
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

          <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button> <?php if (isset($cadastro->status['erro'])) { echo $cadastro->status['erro']; } if(isset($cadastro->status['sucess'])){echo $cadastro->status['sucess']; }?>

    </form>
      <p>

</p>
    <form method="POST" action="">

          <h2>Pesquisar</h2>

          <p>Busque seu livro!</p>

          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Título</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="busca_titulo" placeholder="Digite o título do livro aqui" >
          </div>

          <!-- 
            Campo para inserir o nome do autor:  
          
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Autor</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="busca_autor" placeholder="Digite o nome do autor para encontrar todos os livros deste" >
          </div> -->

          <button type="submit" class="btn btn-primary" name="buscar">Buscar</button> <br>


          <?php

            if (isset($_POST['buscar'])) {
                $titulo = $_POST['busca_titulo'];

                $buscar = new Livros();

                $buscar->titulo = $titulo;


                $valor = $buscar->select($buscar->titulo);
                /*echo "<pre>";
                print_r($valor);
                echo "</pre>";*/

                if($valor == 'Livro não encontrado') {
                  echo $valor;
                } else {

                echo "Título: ".$valor['titulo']."<br>
                      Editora: ".$valor['editora']."<br>
                      Link da imagem: <a href='".$valor['imagem']."' target='_blank'>".$valor['imagem']."<a/><br>
                      Autor: ".$valor['autor'];
                }

            } 
            
            
            /* 
              Condição para localizar livros pelo autor:
            
              elseif (isset($_POST['busca_autor'])) {
              $autor = $_POST['busca_autor'];

              $buscar = new Livros();

              $buscar->titulo = $autor;


              $valor = $buscar->select($buscar->autor);

              echo "<pre>";
              print_r($valor);
              echo "</pre>";

            } */
          ?>


            <p><br>
              <button type="submit" class="btn btn-primary" name="editar">Mostrar livros cadastrados</button>
            </p>

            <?php
              if(isset($_POST['editar'])) {
                $select = new Livros();

                $retorno = $select->selectAll();

                foreach($retorno as $key => $value) {
                  echo "<p> Título: ".$value['titulo']."<br>
                        Editora: ".$value['editora']."<br>
                        Link da imagem: <a href='".$value['imagem']."' target='_blank'>".$value['imagem']."</a><br>
                        Autor: ".$value['autor']."</p>";
                }
              }
            ?>
    </form>
     


</body>
</html>


