<h1>Editar Aluno</h1>
<?php 
    $sql = "SELECT * FROM marca WHERE id_marca=".$_REQUEST['id_marca'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<h1>Testando novamente agora</h1>
<form action="?page=marca-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_marca" value="<?php echo $row->id_marca; ?>">
    <div class="mb-3">
        <label>Nome do Aluno</label>
        <input type="text" name="nome_marca" value="<?php echo $row->nome_marca; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>

<h1>TESTANDO BRANCH</h1>