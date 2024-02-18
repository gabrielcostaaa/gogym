<h1>Salvar Aluno</h1>
    <?php 
        switch ($_REQUEST['acao']) {
            case 'cadastrar':

                // CALCULA A IDADE DO ALUNO DADA A DATA DE NASCIMENTO
                $dataAtual = date("Y-m-d");
                $dataAtual = explode("-", $dataAtual);
                $dataAluno = explode("-", $_POST['dataNascimento_aluno']);
                $anoAluno = $dataAluno[0];
                $mesAluno = $dataAluno[1];
                $diaAluno = $dataAluno[2];
                $anoAtual = $dataAtual[0];
                $mesAtual = $dataAtual[1];
                $diaAtual = $dataAtual[2];
                
                if ($mesAluno > $mesAtual) {
                    $idade = $anoAtual - $anoAluno - 1;
                } elseif ($mesAluno == $mesAtual && $diaAluno > $diaAtual) {
                    $idade = $anoAtual - $anoAluno - 1;
                } else {
                    $idade = $anoAtual - $anoAluno;
                }
                

                $sql = "INSERT INTO aluno 
                            (alu_nome, alu_celular, alu_email, alu_data_nascimento, alu_sexo, alu_cidade, alu_estado, alu_idade) 
                        VALUES 
                            ('".$_POST['nome_aluno']."',
                            '".$_POST['celular_aluno']."',
                            '".$_POST['email_aluno']."',
                            '".$_POST['dataNascimento_aluno']."',
                            '".$_POST['sexo_aluno']."',
                            '".$_POST['cidade_aluno']."',
                            '".$_POST['estado_aluno']."', 
                            '".$idade."')";

                $res = $conn->query($sql);
                
                // ALERTA USUÁRIO SE DEU CERTO O REGISTRO OU NÃO
                if($res==true){
                    echo "<script>alert();</script>";
                    //echo "<script>location.href='?page=aluno-listar';</script>";
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