<h1>Alunos</h1>
    <?php 
        $sql = "SELECT * FROM marca";
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
                echo "<td>".$row->id_marca."</td>";
                echo "<td>".$row->nome_marca."</td>";
                echo "<td>
                        <button onclick=\"location.href='?page=marca-editar&id_marca=".$row->id_marca."';\"class='btn btn-primary'>Editar</button>
                        <button class='btn btn-danger'>Excluir</button>
                    </td>";
                echo "</tr>";
            }
            echo "</thead>";
            echo "</table>";
        } else {
            echo "Não encontrou resultado";
        }
    ?>