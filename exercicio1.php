<?php 
session_Start();

error_reporting(0)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input placeholder="Nome" type="text" method="post" name="nome"><br>
    <input type="text" method="post" placeholder="Senha" name="senha"><br><!--KKKKKKKKKKKK-->
    <button type="submit">login</button>    
    </form>
<?php
$login = $_POST['nome'];
$senha = $_POST['senha'];

if(isset($_POST['nome'])&&isset($_POST['senha'])&&(($_POST['nome'])&&($_POST['senha'])!="")){
    $_SESSION['usuario']=$_POST['nome'];
    echo "registrado como  ",$_SESSION['usuario'];


}else{
    $_SESSION['usuario']==false;
    echo "registre-se, por favor";
}
?>
</body>
</html>