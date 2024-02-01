<h1>Editar Aluno</h1>
<?php 
    $sql = "SELECT * FROM aluno WHERE alu_codigo=".$_REQUEST['alu_codigo'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=aluno-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="alu_codigo" value="<?php echo $row->alu_codigo; ?>">
    <div class="mb-3">
        <label>Nome do Aluno</label>
        <input type="text" name="alu_nome" value="<?php echo $row->alu_nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>

