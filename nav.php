<?php
    $servidor = mysqli_connect("localhost","root","","veiculos");
    $consulta = mysqli_query($servidor, "select count(id) as notificacao from cadastro");
    $notificacao = mysqli_fetch_assoc($consulta);
    // echo "Quantidade: " . $notificacao['notificacao'];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-escuro">
    <!-- <a href="#" class="navbar-brand">Projeto Academico</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a href="#" class="nav-link">
                    <i></i>
                    Professor
                </a>
            </li> -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i></i>
                    Projeto
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    Atividades
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Exercicio 1</a>
                    <a class="dropdown-item" href="#">Exercicio 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Exercicio 3</a>
                </div>
            </li>
        </ul>
        <!-- <form class="form-inline">
            <input class="form-control" type="search" placeholder="Search">
            <button class="btn btn-dark" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form> -->
        <span class="lagout nav-link espaco-lateral-usuario">



            <!-- inicio script data e hora -->
            <span id="time"></span>
            <script>
                function checkTime(i) {
                    if (i < 10) {
                        i = "0" + i;
                    }
                    return i;
                }

                function startTime() {
                    var data = new Date();
                    var dia = data.getDate();
                    var mes = data.getMonth();
                    var ano = data.getFullYear();
                    var h = data.getHours();
                    var m = data.getMinutes();
                    var s = data.getSeconds();
                    // add a zero in front of numbers<10
                    m = checkTime(m);
                    s = checkTime(s);
                    document.getElementById('time').innerHTML = dia + "/" + (mes + 1) + "/" + ano + " | " + h + ":" + m + ":" + s;
                    t = setTimeout(function() {
                        startTime()
                    }, 500);
                }
                startTime();
            </script>
            <!-- fim script data e hora -->
            <button class="btn btn-default">
                <i class="fas fa-bell lagout"></i>
                <span class="badge badge-secondary badge-pill"><?php echo $notificacao['notificacao']; ?></span>
            </button>
            <img src="img/admin.jpg" class="img-fluid img-circle" alt="usuario">
            Olá, <?php echo $_SESSION['login']; ?>
        </span>
    </div>
</nav> 