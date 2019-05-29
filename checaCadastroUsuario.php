<?php
session_start();
$servidor = mysqli_connect("localhost", "root", "", "veiculos");
$nome = $_POST['nome'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$token = $_POST['token'];

$token1 = array('unipe', 'unipe2019', 'administrador2019');

if (in_array($token, $token1)) {
    $cadastrou = mysqli_query($servidor, "insert into usuarios (nome, login, senha, email, token) values ('$nome','$login','$password','$email','$token')");
    if ($cadastrou) {
        // relatorio de cadastro de usuario
        // data atual
        date_default_timezone_set('America/Sao_Paulo');
        $dataatual = Date("Y-m-d H:i:s");
        mysqli_query($servidor, "insert into relatoriocadastrousuario (loginafetado, emailafetado, datacriacao) values ('$login','$email','$dataatual')");

        echo "Cadastro realizado com sucesso!";
        header('Location: principal.php');
    } else {
        echo "Por favor inserir um login inexistente!";
    }
} else {
    echo "Token inexistente!";
}
?>