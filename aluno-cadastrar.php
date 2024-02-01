<h1>Cadastrar Aluno</h1>
<form action="?page=aluno-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Aluno</label>
        <input type="text" name="nome_aluno" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>