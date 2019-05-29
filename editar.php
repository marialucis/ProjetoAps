<?php
session_start();
if ($_SESSION['logou'] == 1) {
    $id = $_GET['id'];
    $servidor = mysqli_connect("localhost", "root", "", "veiculos");
    $veiculos = mysqli_query($servidor, "select * from cadastro where id=$id");
    while ($veiculo = mysqli_fetch_array($veiculos)) {
        echo "
                <form action='checaEdicao.php' method='POST'>
                    <input type='hidden' name='id' value='" . $veiculo['id'] . "'> <br>
                    <label> Placa </label> <input type='text' name='placa' value='" . $veiculo['placa'] . "'> <br><br>
                    <label> Marca </label> <input type='text' name='marca'value='" . $veiculo['marca'] . "'> <br><br>
                    <input type='submit' value='Alterar'>
                </form>
            ";
    }
} else {
    header('Location: index.php');
}
 