<div class="box">
    <form class="row g-3" action="?page=aluno-salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <fieldset class="border border-3 rounded p-3">
            <legend>Cadastrar Aluno</legend>
            <hr>
            <div class="row g-3">
                <div class="col-md-7">
                    <label class="form-label">Nome Completo</label>
                    <input type="text" name="nome_aluno" class="form-control">
                </div>
                <div class="col-md-5">
                    <label for="celular_aluno" class="form-label">Celular</label>
                    <input type="tel" class="form-control" id="celular_aluno" name="celular_aluno" placeholder="(xx) xxxxx-xxxx">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-8">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <input type="text" name="email_aluno" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="dataNascimento" class="col col-form-label">Data Nascimento</label>
                    <input type="date" class="form-control" id="dataNascimento_aluno" name="dataNascimento_aluno">
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-8">
                    <label for="cidade_aluno" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade_aluno" name="cidade_aluno">
                </div>
                <div class="col-md-4">
                    <label for="estado_aluno" class="form-label">Estado</label>
                    <select id="estado_aluno" name="estado_aluno" class="form-select">
    <option selected disabled>Escolha um estado</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select>
                </div>
            </div>
            <div class="col">
                    <label for="sexo" class="form-label">Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo_aluno" id="sexo-masculino" value="MASCULINO">
                        <label class="form-check-label" for="sexo-masculino">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo_aluno" id="sexo-feminino" value="FEMININO">
                        <label class="form-check-label" for="sexo-feminino">Feminino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo_aluno" id="sexo-outro" value="OUTRO">
                        <label class="form-check-label" for="sexo-outro">Outro</label>
                    </div>
                </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn" style="background-color: #DDFE8E;">Enviar</button>
            </div>
        </fieldset>
    </form>
</div>

