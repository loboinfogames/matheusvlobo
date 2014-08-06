<?php

$nome = $_POST['nome']; 
$usuario = $_POST['usuario'];
$senha = MD5($_POST['senha']);

$connect = mysql_connect('localhost','matheusv','Controle123');

$db = mysql_select_db('matheusv_login');
$query_select = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];
 
    if($usuario == "" || $usuario== null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";
 
        }else{
            if($logarray == $usuario){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (nome,usuario,senha) VALUES ('$nome','$usuario','$senha')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
                }
            }
        }
?>