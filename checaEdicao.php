<?php
session_start();
if ($_SESSION['logou'] == 1) {
    $id = $_POST['id'];
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $servidor = mysqli_connect("localhost", "root", "", "veiculos");
    mysqli_query($servidor, "update cadastro set placa = '$placa', marca = '$marca' where id = '$id'");
    header('Location: principal.php');
} else {
    header('Location: index.php');
}
?>

meuserrote
