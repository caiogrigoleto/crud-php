<?php
require("database/global.php");

$produtos = $conn->prepare("SELECT * FROM produtos");
$produtos->execute();

$produtos = $produtos->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Cadastro de Produto - Teste Aplicativo</title>
</head>

<body>

  <div>
    <h1>Lista de Produtos</h1>
  </div>

    <table id="example" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Quantidade</th>
          <th>Valor</th>
          <th>Imagem</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($produtos as $p) : ?>
          <tr>
            <td><?php echo $p['nome']; ?></td>
            <td><?php echo $p['qtd']; ?></td>
            <td><?php echo $p['valor']; ?></td>
            <td><img src="<?php echo $p['imagem']; ?>" height="50" width="50" id="preview-image"></td>
            <td><a href="src/edit.php"><span class="material-symbols-outlined">edit</span></a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <center><a type="button" class="btn btn-primary" href="src/novo.php" value="Novo produto">Novo Produto</a></center>
  </div>

  <!-- <div>
    <label><h1>Cadastre o Produto</h1></label> 
</div>
  <div>
    <label>Nome:</label>
    <input type="text" name="nome">
  </div>
  <div>
    <label>Quantidade:</label>
    <input type="text" name="quantidade">
  </div>
  <div>
    <label>Preço:</label>
    <input type="text" name="preco">
  </div>
  <div>
    <label>Imagem:</label>
    <input type="text" name="imagem">
  </div>


  <div>
    <input type="submit" value="Cadastrar">
  </div> -->
  <script>
    $(document).ready(function() {
      $('#produtos-tb').DataTable();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>