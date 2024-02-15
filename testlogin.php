<?php 

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE usu_nome = '$nome' and usu_senha = '$senha'";

    $result = $conn->query($sql);

    print_r($result);
} else {
    header('Location: login.php');
}

?>