<?php
include("cabeca.php");

?>
<div>
    <h1>Faça seu Login</h1>
</div>

<form method="post" action="valida.php">
<label>Usuário</label>
<input type="text" name="usuario" maxlength="20" />
<label>Senha</label>
<input type="password" name="senha" maxlength="20" />
<input type="submit" class="btn" value="Entrar" />
<input type="submit" class="btn" value="Cancelar" />
</form>
<br/>

<?php

include("fim.php");
?>