<?php 
$login = $_SESSION['login'];
$servidor = mysqli_connect("localhost", "root", "", "veiculos");
$usuarios = mysqli_query($servidor, "select * from usuarios where login = '$login'");
$usuarioId = mysqli_fetch_assoc($usuarios);
// echo "dado: ".$usuarioId['id'];
?>

<?php include_once('header.php'); ?>

<!-- menus -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-1 menu-esquerdo text-center">

            <div class="dados-empresa">
                <figure class="">
                    <img src="img/empresa.png" class="img-fluid" alt="empresa">
                    <div class="descricao-empresa">
                        <p class="titulo">
                            Study Lab
                        </p>
                        <p class="subtitulo">
                            Painel de controle
                            <i class="fas fa-check-square ativo-verde"></i>
                        </p>
                    </div>
                </figure>
            </div>

            <div class="list-group" id="list-tab" role="tablist">

                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                    <i class="fas fa-home"></i>
                </a>

                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-cadastra" role="tab" aria-controls="profile" data-toggle="tooltip" data-placement="right" title="Cadastrar veiculos">
                    <i class="fas fa-clipboard-list"></i>
                </a>

                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-listar" role="tab" aria-controls="profile" data-toggle="tooltip" data-placement="right" title="Listar veiculos">
                    <i class="fas fa-folder-open "></i>
                </a>

                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-relatorio" role="tab" aria-controls="messages" data-toggle="tooltip" data-placement="right" title="Relatorio">
                    <i class="fas fa-list-alt"></i>
                </a>

                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-configuracao" role="tab" aria-controls="settings" data-toggle="tooltip" data-placement="right" title="Configuração">
                    <i class="fas fa-cogs"></i>
                </a>

            </div>

            <div class="text-center grupo-icones">
                <a href="logout.php?id=<?php echo $usuarioId['id'] ?>" class="a-icones">
                    <i class="fas fa-power-off"></i>
                </a>
                <a href="#" class="a-icones">
                    <i class="fas fa-cog"></i>
                </a>
                <a href="#" class="a-icones">
                    <i class="fas fa-bug"></i>
                </a>
                <a href="#" class="a-icones">
                    <i class="fas fa-sync"></i>
                </a>
            </div>

        </div>
        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-11 max-largura">
            <?php include_once('nav.php'); ?>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <?php include_once('dashboards.php'); ?>
                </div>
                <div class="tab-pane fade show" id="list-cadastra" role="tabpanel" aria-labelledby="list-profile-list">
                    <!-- inicio formulario -->
                    <div class="col-lg-6 offset-lg-3">
                        <div class="texto-cadastro">
                            <h3>Cadastro de disciplina</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
                        </div>
                        <form action="checaCadastro.php" method="POST" class="formulario">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="nome">Nome</label>
                                    <input id="nome" class="form-control" type="text" name="nome" placeholder="ex: Português" autofocus maxlength=50>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="conteudo">Conteúdo</label>
                                    <input id="conteudo" class="form-control" type="text" name="conteudo" placeholder="Ex: Figuras de linguagem" maxlength=50>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label for="anofabricacao">Ano de Fabricacao</label>
                                    <input id="anofabricacao" class="form-control" type="text" name="anoFabricacao" placeholder="Ex: 2010" maxlength=4>
                                </div>
                                <div class="col-lg-6">
                                    <label for="modelo">Ano do Modelo</label>
                                    <input id="modelo" class="form-control" type="text" name="anoModelo" placeholder="Ex: 2011" maxlength=4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="categoria">Categoria</label>
                                    <select class="custom-select" id="categoria" name="categoria">
                                        <option>Selecione</option>
                                        <option value="ensinoFundamental">Ensino Fundamental</option>
                                        <option value="ensinoMedio">Ensino Médio</option>
                                        <option value="ensinoSuperior">Ensino Superior</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="submit" value="Cadastrar" class="btn btn-dark btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- fim formulario -->
                </div>
                <div class="tab-pane fade show" id="list-listar" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="col-lg-12 text-center">
                        <div class="texto-lista text-left">
                            <h3>Listagem dos automoveis</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
                        </div>
                        <!-- table -->
                        <table class="table">

                            <thead class="thead">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Ano Fabricação</th>
                                    <th scope="col">Ano Modelo</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Data e hora cadastro</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $servidor = mysqli_connect("localhost", "root", "", "veiculos");
                                $veiculos = mysqli_query($servidor, "select * from cadastro");
                                while ($veiculo = mysqli_fetch_array($veiculos)) {
                                    ?>
                                <tr>
                                    <td scope="row"><?php echo $veiculo["id"]; ?></td>
                                    <td><?php echo $veiculo["placa"]; ?></td>
                                    <td><?php echo $veiculo["marca"]; ?></td>
                                    <td><?php echo $veiculo["anoFabricacao"]; ?></td>
                                    <td><?php echo $veiculo["anoModelo"]; ?></td>
                                    <td><?php echo $veiculo["categoria"]; ?></td>
                                    <td>
                                        <?php
                                        echo date("d/m/Y H:i:s", strtotime($veiculo['dataCadastro']));
                                        ?>
                                    </td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                            Editar
                                        </a>
                                        <a href="excluir.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                            } ?>
                            </tbody>
                        </table>
                        <!-- fim table -->
                    </div>
                </div>
                <!-- inicio de relatorios -->
                <div class="tab-pane fade show" id="list-relatorio" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="">
                        <div class="col-12">
                            <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#rel-exclusao" role="tab" aria-controls="rel-exclusao">Relatorio de exclusões</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#rel-acesso-login" role="tab" aria-controls="rel-acesso-login">Relatorio de acesso a login</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#rel-cadastro-usuario" role="tab" aria-controls="rel-cadastro-usuario">Relatorio cadastro de usuarios</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#rel-cadastro-veiculo" role="tab" aria-controls="rel-cadastro-veiculo">Relatorio cadastro de veiculos</a>
                            </div>
                        </div>

                        <div class="col">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="rel-exclusao" role="tabpanel" aria-labelledby="list-home-list">
                                    <!-- table relatorio de exclusão -->
                                    <table class="table">

                                        <thead class="thead">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Automovel</th>
                                                <th scope="col">Marca</th>
                                                <th scope="col">Data exclusão</th>
                                                <th scope="col">Login utilizado</th>
                                                <!-- <th scope="col">Ações</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $servidor = mysqli_connect("localhost", "root", "", "veiculos");
                                            $veiculos = mysqli_query($servidor, "select * from relatorioexclusao");
                                            while ($veiculo = mysqli_fetch_array($veiculos)) {
                                                ?>
                                            <tr>
                                                <td scope="row"><?php echo $veiculo["id"]; ?></td>
                                                <td><?php echo $veiculo["automovelafetado"]; ?></td>
                                                <td><?php echo $veiculo["marcaafetada"]; ?></td>
                                                <td>
                                                    <?php
                                                    echo date("d/m/Y H:i:s", strtotime($veiculo['dataExclusao']));
                                                    ?>
                                                </td>
                                                <td><?php echo $veiculo["loginafetado"]; ?></td>
                                                <!-- <td>
                            <a href="editar.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i>
                                Editar
                            </a>
                            <a href="excluir.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                Eliminar
                            </a>
                        </td> -->
                                            </tr>
                                            <?php 
                                        } ?>
                                        </tbody>
                                    </table>
                                    <!-- fim table -->
                                </div>
                                <div class="tab-pane fade" id="rel-acesso-login" role="tabpanel" aria-labelledby="list-profile-list">
                                    <!-- table relatorio de acesso -->
                                    <table class="table">

                                        <thead class="thead">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Login</th>
                                                <th scope="col">Data acesso</th>
                                                <th scope="col">Data saida</th>
                                                <!-- <th scope="col">Ações</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $servidor = mysqli_connect("localhost", "root", "", "veiculos");
                                            $veiculos = mysqli_query($servidor, "select * from relatorioacesso");
                                            while ($veiculo = mysqli_fetch_array($veiculos)) {
                                                ?>
                                            <tr>
                                                <td scope="row"><?php echo $veiculo["id"]; ?></td>
                                                <td><?php echo $veiculo["loginafetado"]; ?></td>
                                                <td>
                                                    <?php
                                                    echo date("d/m/Y H:i:s", strtotime($veiculo['dataacesso']));
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo date("d/m/Y H:i:s", strtotime($veiculo['datasaida']));
                                                    ?>
                                                </td>
                                                <!-- <td>
                            <a href="editar.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i>
                                Editar
                            </a>
                            <a href="excluir.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                Eliminar
                            </a>
                        </td> -->
                                            </tr>
                                            <?php 
                                        } ?>
                                        </tbody>
                                    </table>
                                    <!-- fim table -->
                                </div>
                                <div class="tab-pane fade" id="rel-cadastro-usuario" role="tabpanel" aria-labelledby="list-messages-list">
                                    <!-- table relatorio cadastro usuario -->
                                    <table class="table">

                                        <thead class="thead">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Login</th>
                                                <th scope="col">E-mail</th>
                                                <th scope="col">Data criação</th>
                                                <!-- <th scope="col">Ações</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $servidor = mysqli_connect("localhost", "root", "", "veiculos");
                                            $veiculos = mysqli_query($servidor, "select * from relatoriocadastrousuario");
                                            while ($veiculo = mysqli_fetch_array($veiculos)) {
                                                ?>
                                            <tr>
                                                <td scope="row"><?php echo $veiculo["id"]; ?></td>
                                                <td><?php echo $veiculo["loginafetado"]; ?></td>
                                                <td><?php echo $veiculo["emailafetado"]; ?></td>
                                                <td>
                                                    <?php
                                                    echo date("d/m/Y H:i:s", strtotime($veiculo['dataCriacao']));
                                                    ?>
                                                </td>
                                                <!-- <td>
                            <a href="editar.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i>
                                Editar
                            </a>
                            <a href="excluir.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                Eliminar
                            </a>
                        </td> -->
                                            </tr>
                                            <?php 
                                        } ?>
                                        </tbody>
                                    </table>
                                    <!-- fim table -->
                                </div>
                                <div class="tab-pane fade" id="rel-cadastro-veiculo" role="tabpanel" aria-labelledby="list-settings-list">
                                    <!-- table relatorio cadastro veiculo -->
                                    <table class="table">

                                        <thead class="thead">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Login cadastrante</th>
                                                <th scope="col">Placa</th>
                                                <th scope="col">Data criação</th>
                                                <!-- <th scope="col">Ações</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $servidor = mysqli_connect("localhost", "root", "", "veiculos");
                                            $veiculos = mysqli_query($servidor, "select * from relatoriocadastroveiculo");
                                            while ($veiculo = mysqli_fetch_array($veiculos)) {
                                                ?>
                                            <tr>
                                                <td scope="row"><?php echo $veiculo["id"]; ?></td>
                                                <td><?php echo $veiculo["loginafetado"]; ?></td>
                                                <td><?php echo $veiculo["placaafetada"]; ?></td>
                                                <td>
                                                    <?php
                                                    echo date("d/m/Y H:i:s", strtotime($veiculo['dataCriacao']));
                                                    ?>
                                                </td>
                                                <!-- <td>
                            <a href="editar.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i>
                                Editar
                            </a>
                            <a href="excluir.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                Eliminar
                            </a>
                        </td> -->
                                            </tr>
                                            <?php 
                                        } ?>
                                        </tbody>
                                    </table>
                                    <!-- fim table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim relatorios -->
                <div class="tab-pane fade show" id="list-configuracao" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="col-lg-4 offset-lg-4 text-center configuracao-usuario">
                        <figure>
                            <img src="img/admin.jpg" class="img-fluid img-circle" alt="usuario-logado">
                            <p class="nomeEpatente">
                                <?php echo $usuarioId['nome'] . " | " . $usuarioId['prioridade'] ?>

                                <!-- Isaque Lopes | Admin -->
                                <i class="fas fa-check-square ativo-verde"></i>
                            </p>
                            <p class="cargo">
                                <!-- <i class="fas fa-laptop-code"></i> -->
                                <?php echo $usuarioId['cargo'] ?>
                                <!-- Gerente de desenvolvimento web -->
                            </p>
                        </figure>
                        <form action="" method="" class="formulario text-left">
                            <?php
                            $usuarios = mysqli_query($servidor, "select * from usuarios where login = '$login'");
                            while ($usuario = mysqli_fetch_array($usuarios)) {
                                ?>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="nome">Nome completo</label>
                                    <input class="form-control" type="text" name="nome" value="<?php echo $usuario['nome']; ?>">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" type="email" name="email" value="<?php echo $usuario['email']; ?>">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="login">Login</label>
                                    <input class="form-control" type="text" name="login" value="<?php echo $usuario['login']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" value="<?php echo $usuario['senha']; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="password">Confirme password</label>
                                    <input class="form-control" type="password" name="confirmacaoPassword">
                                </div>
                            </div>
                            <?php 
                        } ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-dark btn-block" value="Atualizar cadastro">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fim menus -->
<?php include_once('footer.php') ?> 