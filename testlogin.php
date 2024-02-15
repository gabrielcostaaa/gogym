<?php 

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE usu_nome = '$nome' and usu_senha = '$senha'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        header('Location: index.php');
    } else {
        echo 'Usuário ou senha inválidos';
    }
} else {
    header('Location: login.php');
}

?>