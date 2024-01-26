<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGym</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<!-- -----------------------------------------------------
     TOPO E TÍTULO CARROS DO NAVBAR
     ----------------------------------------------------- -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">GoGym - Controle de Treinamentos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>

<!-- -----------------------------------------------------
     ALUNOS NO NAVBAR
     ----------------------------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alunos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=marca-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=marca-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
<!-- -----------------------------------------------------
     MODELOS NO NAVBAR
     ----------------------------------------------------- -->      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Exercícios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=modelo-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=modelo-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">
  <div class="row">
    <div class="col">
    
      <?php 
        // CONEXÃO COM O BANCO DE DADOS
        include('config.php');

        // INCLUDE DAS PÁGINAS
        switch (@$_REQUEST['page']) {
          //MARCAS
          case 'marca-listar':
            include('marca-listar.php');
            break;

          case 'marca-cadastrar':
            include('marca-cadastrar.php');
            break;

          case 'marca-editar':
            include('marca-editar.php');
            break;
          
          case 'marca-salvar':
            include('marca-salvar.php');
            break;

          //MODELOS
          case 'modelo-listar':
            include('modelo-listar.php');
            break;

          case 'modelo-cadastrar':
            include('modelo-cadastrar.php');
            break;

          case 'modelo-editar':
            include('modelo-editar.php');
          
          case 'modelo-salvar':
            include('modelo-salvar.php');
            break;

          default:
            echo ' 
            <div class="container">
            <div class="row">
              <div class="col-sm">
              <a href="?page=marca-listar"><button type="button" class="btn btn-info btn-lg" style="height: 150px; width: 200px;">Alunos</button></a>
              </div>
              <div class="col-sm">
                <button type="button" class="btn btn-info btn-lg" style="height: 150px; width: 200px;">Exercícios</button>
              </div>
              <div class="col-sm">
              <button type="button" class="btn btn-info btn-lg" style="height: 150px; width: 200px;">Treinos</button>
              </div>
            </div>
          </div>';

            break;
        }
      ?>

    </div>
  </div>
</div>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>