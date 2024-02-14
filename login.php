<?php 

if(isset($_POST['submit'])){
    print_r($_POST['nome']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(141, 212, 230), rgb(195, 228, 225));
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 88%;
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <div class="tela-login">
            <h1>Login</h1>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br><br>
            <button>Entrar</button>
            <p>Não tem uma conta? <a href="cadastro.php">Faça o cadastro</a></p>
        </div>
    </form>
</body>
</html>