<h1>Salvar Aluno</h1>
    <?php 
        switch ($_REQUEST['acao']) {
            case 'cadastrar':
                $sql = "INSERT INTO aluno 
                            (alu_nome) 
                        VALUES 
                            ('".$_POST['nome_aluno']."')";
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
                $sql = "UPDATE aluno SET 
                alu_nome='" . $_POST["alu_nome"] . "'
              WHERE 
                alu_codigo=" . $_POST["alu_codigo"];
                $res = $conn->query($sql);

                // ALERTA USUÁRIO SE DEU CERTO A EDIÇÃO OU NÃO
                if($res==true){
                    echo "<script>alert('Editado com sucesso!')</script>";
                    echo "<script>location.href='?page=aluno-listar';</script>";
                } else {
                    echo "<script>alert('Não foi possível')</script>";
                }

            case 'excluir':

                break;
                
        }
    ?>