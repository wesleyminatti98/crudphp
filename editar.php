<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios
            WHERE id=". $_REQUEST["id"];

    $resultado = $conexao->query($sql);
    $row = $resultado->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <div class="mb-3">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <label for=""> Nome:</label>
        <input type="text" name="nome"  value="<?php print $row->nome; ?>"
        id="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> Email:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" 
        id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for=""> Senha: </label>
        <input type="password" name="senha" 
        id="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for=""> Data de Nascimento: </label>
        <input type="date" name="dt_nascimento" value="<?php print $row->dt_nascimento; ?>"
        id="dt_nascimento" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>