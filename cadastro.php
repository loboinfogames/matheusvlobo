<?php
include("cabeca.php");

?>
<div>
    <h3>Cadastro de Usuario</h3>
<form method="POST" action="envia_cadastro.php">
<label>Nome:</br>  </label><input type="text" name="nome" maxlength="30" id="nome"><br>
<label>Email:</br>  </label><input type="text" name="email" maxlength="50" id="email"><br>
<label>Usuario:</br></label><input type="password" name="usuario" maxlength="20" id="usuario"><br>
<label>Senha:</br></label>  
<input type="password" name="senha" maxlength="20" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
<input type="reset" class="btn" value="Cancelar" />
</form>

<?php

include("fim.php");
?>