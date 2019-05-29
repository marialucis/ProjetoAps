<?php include_once('header.php') ?>
<div class="container">
    <!-- inicio formulario -->
    <div class="col-lg-6 offset-lg-3">
        <div class="texto-cadastro">
            <h3>Cadastro de usuário</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
        </div>
        <form action="checaCadastroUsuario.php" method="POST" class="formulario">
            <div class="row">
                <div class="col-lg-12 form-group">
                    <label for="nome">Nome completo</label>
                    <input id="nome" class="form-control" type="text" name="nome" autofocus>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 form-group">
                    <label for="login">Login</label>
                    <input id="login" class="form-control" type="text" name="login">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 form-group">
                    <label for="email">E-mail</label>
                    <input id="email" class="form-control" type="email" name="email">
                </div>
                <!-- <div class="col-lg-6 form-group">
                    <label for="categoria">Dominio</label>
                    <select class="custom-select" id="categoria" name="categoria">
                        <option value="@gmail.com">@gmail.com</option>
                        <option value="@hotmail.com">@hotmail.com</option>
                        <option value="@yahoo.com">@yahoo.com</option>
                    </select>
                </div> -->
            </div>

            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="text" name="password">
                </div>
                <div class="col-lg-12 form-group">
                    <label for="token">Token</label>
                    <input id="token" class="form-control" type="text" name="token">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 form-group">
                    <input type="submit" value="Cadastrar" class="btn btn-dark btn-block">
                </div>
            </div>
        </form>
    </div>
    <!-- fim formulario -->
</div>
<?php include_once('footer.php') ?> 