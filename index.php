<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGym</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

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


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alunos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=aluno-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=aluno-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
  
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
          //ALUNOS
          case 'aluno-listar':
            include('aluno-listar.php');
            break;

          case 'aluno-cadastrar':
            include('aluno-cadastrar.php');
            break;

          case 'aluno-editar':
            include('aluno-editar.php');
            break;
          
          case 'aluno-salvar':
            include('aluno-salvar.php');
            break;

          //EXERCÍCIOS
          case 'exercicio-listar':
            include('exercicio-listar.php');
            break;

          case 'exercicio-cadastrar':
            include('exercicio-cadastrar.php');
            break;

          case 'exercicio-editar':
            include('exercicio-editar.php');
          
          case 'exercicio-salvar':
            include('exercicio-salvar.php');
            break;

          default:
            echo ' 
            <div class="container">
            <div class="row">
              <div class="col-sm">
              <a href="?page=aluno-listar"><button type="button" class="btn btn-info btn-lg" style="height: 150px; width: 200px;">Alunos</button></a>
              </div>
              <div class="col-sm">
              <a href="?page=exercicio-listar"><button type="button" class="btn btn-info btn-lg" style="height: 150px; width: 200px;">Exercícios</button></a>
              </div>
              <div class="col-sm">
              <button type="button" class="btn btn-info btn-lg" style="height: 150px; width: 200px;">Treinos</button>
              </div>
              <div class="col-sm">
              <button type="button" class="btn btn-info btn-lg" style="height: 150px; width: 200px;">Avaliações</button>
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