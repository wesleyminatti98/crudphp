<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar ">Listar Usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
        include("config.php"); 
// Verifica se a variável 'page' está presente na requisição
if (isset($_REQUEST["page"])) {
    // Obtém o valor da variável 'page' e remove espaços em branco ao redor
    $page = trim($_REQUEST["page"]);

    // Inclui o arquivo correspondente com base no valor da variável 'page'
    if ($page == "novo") {
        include("novo.php");
    } elseif ($page == "listar") {
        include("listar.php");
    } elseif ($page == "salvar"){
        include("salvar.php");
    } elseif ($page == "editar"){
        include("editar.php");
    } else {
        // Se o valor da variável 'page' não corresponde a nenhum dos casos esperados
        echo "Página não encontrada!";
    }
} else {
    // Se a variável 'page' não estiver presente na requisição
    echo "<h1>Bem-vindo!</h1>";
}
?>

        </div>
    </div>
    
</div>    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap.bundle.min.js"></script>
  </body>
</html>
