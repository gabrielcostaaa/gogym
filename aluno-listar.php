<h1>Alunos</h1>
    <?php 
        $sql = "SELECT * FROM aluno";
        $res = $conn -> query($sql);
        $qtd = $res->num_rows;

        if($qtd > 0){
            echo "<p>Encontrou <b>$qtd</b> resultado(s). </p>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<th scope='col'>Id</th>";
            echo "<th scope='col'>Nome</th>";
            echo "<th scope='col'>Ações</th>";
            while($row = $res->fetch_object()){
                echo "<tr>";
                echo "<td>".$row->alu_codigo."</td>";
                echo "<td>".$row->alu_nome."</td>";
                echo "<td>
                        <button onclick=\"location.href='?page=aluno-editar&alu_codigo=".$row->alu_codigo."';\"class='btn btn-primary'>Editar</button>
                        <button class='btn btn-danger'>Excluir</button>
                    </td>";
                echo "</tr>";
            }
            echo "</thead>";
            echo "</table>";
            echo "<button onclick=\"location.href='?page=aluno-cadastrar'\" class='btn btn-primary'>Cadastrar Aluno</button>";
        } else {
            echo "Não encontrou resultado";
        }
    ?>