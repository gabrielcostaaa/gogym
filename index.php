<?php 
    session_start();
    
    if(!isset($_SESSION['nome']) && !isset($_SESSION['senha'])){
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGym</title>
    <link rel="shortcut icon" href="img/faviconGogym.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
      <a href="index.php">
      <img src="img/GoGymNavbar.png" alt="GoGym" width="128" height="44">
      </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="?page=aluno-listar" class="nav-link px-2 text-white">Alunos</a></li>
          <li><a href="?page=exercicio-listar" class="nav-link px-2 text-white">Exercícios</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Treinos</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Avaliações</a></li>
        </ul>
        <?php echo "Olá, ".$_SESSION['nome'];?>
        <div class="text-end">
          <button onclick="location.href='login.php'" type="button" class="btn btn-outline-light ms-5 me-2">Login</button>
          <button onclick="location.href='cadastro.php'" type="button" class="btn" style="background-color: #DDFE8E;">Cadastro</button>
        </div>
      </div>
    </div>
  </header>

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


            break;
        }
      ?>

    </div>
  </div>
</div>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>