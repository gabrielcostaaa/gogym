<?php 

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (usu_nome, usu_email, usu_senha) VALUES ('$nome', '$email', '$senha')";

    $result = $conn->query($sql);

    header('Location: login.php');
} else {
    header('Location: login.php');
}

?>