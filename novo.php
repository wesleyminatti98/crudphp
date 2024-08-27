<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <div class="mb-3">
        <input type="hidden" name="acao" value="cadastrar">
        <label for=""> Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> Email:</label>
        <input type="email" name="email" 
        id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> Senha: </label>
        <input type="password" name="senha" 
        id="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> Data de Nascimento: </label>
        <input type="date" name="dt_nascimento" 
        id="dt_nascimento" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>