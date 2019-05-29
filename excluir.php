<?php
session_start();

if ($_SESSION['logou'] == 1) {
    $servidor = mysqli_connect("localhost", "root", "", "veiculos");
    $id = $_GET['id'];
    // query pesquisa por id
    // echo "id: $id <br>";
    // relatorio exclusão
    $pesquisarautomovel = mysqli_query($servidor, "select automovel as automovel, marca as marca from cadastro where id = '$id'");
    $transporteValorAutomovel = mysqli_fetch_assoc($pesquisarautomovel);
    $automovelafetado = $transporteValorAutomovel['automovel'];
    $marcaafetada = $transporteValorAutomovel['marca'];
    // echo "login utilizado" . $_SESSION['login'];
    $loginafetado = $_SESSION['login'];
    // echo "$automovelafetado";

    date_default_timezone_set('America/Sao_Paulo');
    $dataAtual = date('Y-m-d H:i:s');
    // echo "$dataAtual";
    mysqli_query($servidor, "insert into relatorioexclusao (dataExclusao, automovelafetado, marcaafetada, loginafetado) values ('$dataAtual','$automovelafetado','$marcaafetada','$loginafetado')");    


    // excluir
    mysqli_query($servidor, "delete from cadastro where id = $id");

    header("Location: principal.php");
    
    
} else {
    header('Location: index.php');
}
 ?>