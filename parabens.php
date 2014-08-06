<?php
   include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página

 include("cabeca.php");


/*echo "<div>
    <h1>Parabens você logou</h1>

</div>";*/

echo "Olá, " . $_SESSION['usuarioNome'];

  include("fim.php");

?>
