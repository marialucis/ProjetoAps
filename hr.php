<?php include_once('header.php') ?>
<!-- Flexbox container for aligning the toasts -->
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="img/admin.jpg" class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>a
</div>

<!-- inicio list-group -->
<div class="">
    <div class="col-1">
        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
        </div>
    </div>

    <div class="col">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">1</div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">2</div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">3</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">4</div>
        </div>
    </div>
</div>
<!-- fim list-group -->
<?php include_once('footer.php') ?>










<div class="tab-pane fade show" id="list-relatorio" role="tabpanel" aria-labelledby="list-messages-list">
    <div class="col-lg-12 text-center">
        <div class="texto-lista text-left">
            <h3>Relatorio de exclusões</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
        </div>
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

        <!-- table relatorio de acesso -->
        <div class="texto-lista text-left">
            <h3>Relatorio de Acesso login</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
        </div>
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

        <!-- table relatorio cadastro usuario -->
        <div class="texto-lista text-left">
            <h3>Relatorio cadastro usuario</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
        </div>
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

        <!-- table relatorio cadastro veiculo -->
        <div class="texto-lista text-left">
            <h3>Relatorio cadastro veiculo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio labore, aperiam quasi, dolor debitis quidem quibusdam voluptas.</p>
        </div>
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
    <!--  -->
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav> 