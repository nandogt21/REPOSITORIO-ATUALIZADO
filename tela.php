<html>
    <head>
       <?php
        session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
    }
 
$logado = $_SESSION['login'];
?>
    <body>
    <center>Cadastro Efetuado com sucesso!</center>
        <p>CLICK AQUI PRA VOLTAR PARA PAGINA DE LOGIN</p>
        
    </body>
    </head>
</html>
   