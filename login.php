<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #DDFE8E;
        }
        .caixaInput{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 88%;
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        .inputSubmit{
            background-color: #DDFE8E;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: #92AF4D;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="tela-login">
        <form action="testlogin.php" method="POST">
            <img src="img/GoGymNavbar.png" alt="GoGym" width="128" height="44">
            <h2>Login</h2>
            <input class="caixaInput" type="text" name="nome" id="nome" placeholder="Nome">
            <br><br>
            <input class="caixaInput" type="password" name="senha" id="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <p>Não tem uma conta? <a href="cadastro.php">Faça o cadastro</a></p>
        </form>
    </div>
</body>
</html>