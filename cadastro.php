<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #DDFE8E;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .tela-cadastro{
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
        <div class="tela-cadastro">
            <form action="testcadastro.php" method="POST">
                <img src="img/GoGymNavbar.png" alt="GoGym" width="128" height="44">
                <h2>Cadastro</h2>
                <input type="text" name="nome" id="nome" placeholder="Nome de usuário">
                <br><br>
                <input type="email" name="email" id="email"  placeholder="Email">
                <br><br>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Cadastrar">
                <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
            </form>
        </div>
    </form>
</body>
</html>
