<?php
include("cabeca.php");
?>

    
    <div align="left">
    
    
	

<table width="100%" cellpadding="5" cellspacing="0">
                     <tr>
  <td width="150" class="direita" >
   <label >Nome</label></td>
  <td class="esquerda" >
   <input type="text" size="20" name="textbox0" class="text" value="" id="q0"  onblur="validate(this,'Required')"  maxlength="100" maxsize="100" />
  </td>
 </tr>
 <tr>
  <td width="150" class="direita" >
   <label >Sobrenome:</label>
  </td>
  <td class="esquerda" >
   <input type="text" size="20" name="textbox1" class="text" value="" id="q1"  onblur="validate(this,'Required')"  maxlength="100" maxsize="100" />
  </td>
 </tr>
 <tr>
  <td width="150" class="direita" >
   <label >E-mail <span class="required">*</span></label>:</td>
  <td class="esquerda" >
   <input type="text" size="20" name="textbox2" class="text" value="" id="q2"  onblur="validate(this,'Email')"  maxlength="100" maxsize="100" />
  </td>
 </tr>
 <tr>
  <td width="150" class="direita" >
   <label >Telefone:</label></td>
  <td class="esquerda" >
   <input type="text" size="20" name="textbox12" class="text" value="" id="q12"  maxlength="100" maxsize="100" />
  </td>
 </tr>
 <tr>
  <td width="150" class="direita" valign="top"  >
   <label>Sua mensagem:</label></td>
  <td class="esquerda" >
   <textarea cols="35" rows="10" name="textarea7" class="text" id="q7"  onblur="validate(this,'Required')" ></textarea>
  </td>
 </tr>
 <tr>
  <td width="150" class="direita" >&nbsp;
   
  </td>
  <td class="esquerda">
  <input type="submit" class="btn" value="Enviar" />
  <input type="reset" class="btn" value="Cancelar" />
  </td>
 </tr>
 <tr>
  <td width="150" class="direita" >&nbsp;</td>
  <td class="esquerda">&nbsp;</td>
 </tr>
                    </table>

<p>
Caso apresente algum erro, favor enviar email direto: <a href="matheus.v.lobo@gmail.com">matheus.v.lobo@gmail.com</a></p>
<p>&nbsp;</p>
<p>Redes sociais:</p>
<p>&nbsp;</p>
    

    </div>
    
<?php

include("fim.php");
?>