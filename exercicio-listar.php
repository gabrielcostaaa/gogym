<h1>Exercícios</h1>
    <?php 
        $sql = "SELECT * FROM exercicio";
        $res = $conn -> query($sql);
        $qtd = $res -> num_rows;


    if ($qtd >0){
        echo "<p>Encontrou <b>$qtd</b> resultado(s). </p>";
        echo "<table class='table table-bordered'>";
        echo "<thead>";
        echo "<th scope='col'>Id</th>";
        echo "<th scope='col'>Grupo Muscular</th>";
        echo "<th scope='col'>Exercício</th>";
        echo "<th scope='col'>Ações</th>";
        while ($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->exe_codigo."</td>";
            echo "<td>".$row->exe_grupo_muscular."</td>";
            echo "<td>".$row->exe_nome."</td>";
            echo "<td>
                    <button onclick=\"location.href='?page=exercicio-editar&exe_codigo=".$row->exe_codigo."';\"class='btn btn-primary'>Editar</button>
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