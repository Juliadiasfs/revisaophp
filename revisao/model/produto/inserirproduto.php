<?php
if($_POST["cxproduto"] != ""){
    include_once "../../factory/conexao.php";
    $produto = $_POST["cxproduto"];
    $fabricante = $_POST["cxfabricante"];
    $valor = $_POST["cxvalor"];
    $sql = "INSERT into tbproduto(produto,fabricante,valor)values('$produto','$fabricante,'$valor')";
    $executar = mysqli_query($caminho,$sql);
    echo "<script>
        alert('cadastrado com sucesso!');
        document.location.href = '../../index.php'
    </script>";
}
else
{
 echo "Dados não cadastrados";
}

?>