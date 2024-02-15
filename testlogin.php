<?php 
session_start();

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE usu_nome = '$nome' and usu_senha = '$senha'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
    } else {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}

?>