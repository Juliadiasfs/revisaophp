<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "../../factory/conexao.php";
    $pesquisa = $_POST["cxpesquisa"];
    $consulta = "select *from tbproduto where produto = '$pesquisa' ";
    $executar= mysqli_query($caminho,$consulta);
    $linha = mysqli_fetch_array(); 
    ?>

    Produto:</br>
    <input type="text"
    value="<?php $linha["produto"]?>"/><br/>
    Fabricante:</br>
    <input type="text"
    value="<?php $linha["fabricante"]?>"/><br/>
    Valor:</br>
    <input type="text"
    value="<?php $linha["valor"]?>"/><br/>
</body>
</html>