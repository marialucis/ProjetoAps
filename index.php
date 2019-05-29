<!-- layout de exemplo https://www.designyourway.net/diverse/5/logininsp/2541459.jpg -->

<!DOCTYPE html>
<html class="htmlcorpo">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Layout sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="fontawesome/css/all.css" />
</head>

<body class="corpo">
    <div class="container">
        <div class="centralizar col-lg-4 offset-lg-4">
            <form action="checaLogin.php" method="post">
                <img src="img/unipe.png" alt="img-logo" class="img-fluid logo col-lg-6 col-md-4 col-sm-4 col-xs-2 offset-lg-3 offset-md-4 offset-sm-4 offset-xs-5">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input id="login" type="text" class="form-control" name="login" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="senha">
                </div>
                <input type="submit" class="btn btn-dark btn-block" value="Logar" />
                <a href="#" class="nav-link text-right">Esqueceu a senha?</a>

                <p class="text-center col linha"><span class="">Lorem, ipsum dolor sit ame</span></p>

                <div class="text-center redes-sociais row">

                    <div class="col">
                        <a href="#" class="btn btn-primary">
                            <i class="fab fa-facebook-f"></i>
                            Facebook
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" class="btn btn-danger">
                            <i class="fab fa-google"></i>
                            Google
                        </a>
                    </div>

                    <div class="col">
                        <a href="cadastrar-usuario.php" class="btn btn-dark">
                            <i class="fas fa-user-plus"></i>
                            Token
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center rodape">
            <p>
                Template desenvolvido para fins educacionais <br>
                Desenvolvido por
                <a href="#">
                    <i class="fas fa-user"></i>
                    Isaque Lopes
                </a>
                Aluno do 3º Período de SPI
            </p>
        </div>
    </div>
</body> 