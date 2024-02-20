<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #DDFE8E;
        }
        .caixaInput {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 88%;
        }
        .tela-login {
            width: 400px;
            height: 500px;
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        .inputSubmit {
            background-color: #DDFE8E;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
        }
        .inputSubmit:hover {
            background-color: #92AF4D;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="tela-login">
        <form class="needs-validation" action="testlogin.php" method="POST" novalidate>

            <div class="col mb-3">
                <img src="img/GoGymNavbar.png" alt="GoGym" width="128" height="44">
            </div>
                
            <div class="col mb-3">    
                <div class="input-group has-validation">
                    <input class="caixaInput form-control" type="text" name="nome" id="nome" placeholder="Nome de usuário" required>
                    <div class="invalid-feedback">Nome de usuário inválido.</div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="input-group has-validation">
                    <input class="caixaInput form-control" type="password" name="senha" id="senha" placeholder="Senha" required>
                    <div class="invalid-feedback">Senha inválida.</div>
                </div>
            </div>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <p>Não tem uma conta? <a href="cadastro.php">Faça o cadastro</a></p>
        </form>
    </div>
    
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>