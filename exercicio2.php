<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
    input{position:relative;left:5px;background-color:white;}
    form{position:relative;left:450px;background-color:grey;height:500px;width:300px}
    </style>
</head>
<body>

<form action="" method="POST">
<h2>digite seu nome</h2>
<input  type="text" name="nome"><br>
<input class="btn1" type="submit" name="ENVIAR"><br>


<?php


if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
    echo "registrado como ", $nome;    
       
}
else{
    $nome = false;
    echo "cadastre-se!";
}
?>
</form>
</body>
</html>