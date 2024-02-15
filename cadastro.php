<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
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
        }
        .tela-cadastro{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
        <div class="tela-cadastro">
            <form action="testcadastro.php" method="POST">
                <h1>Cadastro</h1>
                <input type="text" name="nome" id="nome" placeholder="Nome">
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
