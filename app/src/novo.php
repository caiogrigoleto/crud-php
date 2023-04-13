<?php
require('../database/global.php');
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];

if ($_POST['nome'] <> '') {
  $sql = "INSERT INTO produtos (nome, qtd, valor, imagem) VALUES ('$nome', $quantidade, $preco, '$imagem')";

  $conn->exec($sql);

  echo "Produto cadastrado com sucesso!";
  echo "<button class='btn btn-primary' href='../index.php'>Voltar</button>";
  die();
} else {
  echo "Preencha todos os campos!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Novo Produto</title>
</head>

<body>

  <div class="form-control">
    <h1>Novo Produto</h1>
  </div>

  <form action="novo.php" method="post">
    <div class="form-control">
      <label class="form-control">Nome:</label>
      <input class="form-control" type="text" name="nome">
    </div>

    <div class="form-control">
      <label class="form-control">Quantidade:</label>
      <input class="form-control" type="text" name="quantidade">
    </div>

    <div class="form-control">
      <label class="form-control">Preço:</label>
      <input class="form-control" type="text" name="preco">
    </div>

    <div class="form-control">
      <label class="form-control">Imagem:</label>
      <input class="form-control" type="text" name="imagem">
    </div>
    <div class="form-control">
      <center></center:><div class="col">
        <a class="btn btn-danger mt-5" href="../index.php">Voltar</a>
   
       <input class="btn btn-success mt-5" type="submit" value="Cadastrar">
      </div></center>
    </div>

  </form>

</body>

</html>