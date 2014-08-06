<?php
	include("cabeca.php");
?>

		<h1>Envia Imagem</h1>
    <div align="left">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="send_imagem" >
Nome da foto:<br/>
			<input type="text" name="nome"/><br/><br/><br/>
Foto de exibição:<br/>
			<input type="file" name="foto"/><br/><br/>
			<input type="submit" name="enviar" value="Enviar" />
		</form>
	</div>

<?php
	include("fim.php");
?>
