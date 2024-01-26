<h1>Salvar Marca</h1>
    <?php 
        switch ($_REQUEST['acao']) {
            case 'cadastrar':
                $sql = "INSERT INTO marca 
                            (nome_marca) 
                        VALUES 
                            ('".$_POST['nome_marca']."')";
                $res = $conn->query($sql);
                
                // ALERTA USUÁRIO SE DEU CERTO O REGISTRO OU NÃO
                if($res==true){
                    echo "<script>alert('Cadastrou com sucesso!')</script>";
                    echo "<script>location.href='?page=marca-listar';</script>";
                } else {
                    echo "<script>alert('Não foi possível')</script>";
                }
                
                break;
                
            case 'editar':
                $sql = "UPDATE marca SET 
                nome_marca='" . $_POST["nome_marca"] . "'
              WHERE 
                id_marca=" . $_POST["id_marca"];
                $res = $conn->query($sql);

                // ALERTA USUÁRIO SE DEU CERTO A EDIÇÃO OU NÃO
                if($res==true){
                    echo "<script>alert('Editado com sucesso!')</script>";
                    echo "<script>location.href='?page=marca-listar';</script>";
                } else {
                    echo "<script>alert('Não foi possível')</script>";
                }

            case 'excluir':

                break;
                
        }
    ?>