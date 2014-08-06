<?php
include("cabeca.php");

?>

  <div>

      <div>
        <h1>Meu Portfólio</h1>
        <p>(pagina meramente ilustrativa)</p>
        <ul>
          <h3>Exercício 1:Loja Virtual Padrão</h3>
          <p>Neste exercício devemos fazer uma loja virtual, com envio e consulda de produtos, com acesso ao banco de dados, no caso MySql.</p>
          <p><a href='portifolio/04/index.php'>Acessar exercício</a></p>
          <p>Exemplo: <a href="portifolio/rose/index.php">Diva Boleria</a></p>
        </ul>
        <p><br />
        </p>
        <hr />
        <br />
        <h3>Exercício 2 - Item A: Cálculo de MDC</h3>
        <br />
        <p> Neste exercício desenvolvi uma página para efetuar o calculo do Máximo  						Divisor Comum (MDC), foram criadas 3 páginas, a primeira consiste em uma  						página HTML com um formulário para ser inserido os valores, a segunda página  						em PHP é responsável por efetuar os calculos e enviálos para terceira  						página também em PHP para que os dados entrados no formulário e o resultado  						do calculo seja mostrado na tela. </p>
        <br />
        <h3>Vetores e funções utilizados:</h3>
        <ul>
          <li>$_POST</li>
          <li>$_SESSION</li>
          <li>session_start()</li>
          <li>header()</li>
        </ul>
        <br />
        <a href='portifolio/02/a/formulario.html'>Acessar exercício</a> <br />
        <h3>Exercício 2 - Item B: Sequência de Fibonacci</h3>
        <br />
        <p> Neste exercício foi desenvolvido uma página que irá receber um número  						através de formulário para que seja enviado para outra página, esta irá  						segunda páginá irá fazer a verificação se o usuário acertou o valor da  						Sequência de Fibonacci. </p>
        <p> A página do formulário foi codificada usando <strong>HTML 5</strong> e a  						página que irá verificar se o usuário acertou o valor da sequênci foi codificada  						com <strong>HTML 5</strong> e <strong>PHP</strong>. </p>
        <br />
        <h3>Vetores utilizados:</h3>
        <ul>
          <li>$_POST</li>
        </ul>
        <br />
        <a href='portifolio/02/b/formulario.html'>Acessar exercício</a> <br />
        <hr />
        <br />
        <h3>Exercício 3: Armazenar dados do usuário utilizando vetor $_COOKIE</h3>
        <br />
        <p> Neste exercício devemos cadastrar o usuário e enviar suas informações  						para outra página utilizando o vetor <strong>$_POST</strong> da linguagem  						PHP, os dados enviados para esta página serão armazenados no vetor <strong>$_COOKIE</strong>, o cookie terá validade de 24 horas, a página  						irá apresentar uma mensagem informando que os dados foram armazenados   						com sucesso e o navegador já pode ser fechado. </p>
        <p> Com isso ao acessar novamente a página de cadastro, o navegador irá ler  						os dados armazenados no vetor $_COOKIE redirecionando o usuário para   						página de login para que o usuário possa acessar o sistema. Ao entrar  						com o email e a senha cadastrados, a página de login irá verificar se os  						dados enviados são os mesmos que estão armazenados no vetor $_COOKIE, se  						os dados estiverem corretos, o usuário será redirecionado para a página  						de usuário logado, esta página irá exibir uma mensagem de &quot;Olá,&quot; mais no  						nome do usuário cadastrado no vetor $_COOKIE. </p>
        <p> Se os dados inseridos na página de login estiverem incorretos, será exibido  						um alerta em javascript informando que os dados estão errados. </p>
        <br />
        <h3>Vetores e funções utilizados:</h3>
        <ul>
          <li>$_POST</li>
          <li>$_COOKIE</li>
          <li>header()</li>
          <li>setcookie()</li>
          <p><br />
          <a href='portifolio/03/usuario-novo.php'>Acessar exercício</a><br />
          </p>
          <hr/>
          <br/>
          <h3>Exercício 4:Loja Virtual</h3>
          <p>Neste exercício devemos fazer uma loja virtual, com envio e consulda de produtos, com acesso ao banco de dados, no caso MySql.</p>
          <p><a href='portifolio/04/index.php'>Acessar exercício</a></p>
          <p>&nbsp;</p>
        </ul>
        <br />
        <hr />
      </div>
    </div>


<?php

include("fim.php");
?>