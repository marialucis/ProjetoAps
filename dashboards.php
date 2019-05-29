<?php 
$servidor = mysqli_connect("localhost", "root", "", "veiculos");
$totalcadastro = mysqli_query($servidor, "select count(id) as totalcadastro from cadastro");
$total = mysqli_fetch_assoc($totalcadastro);

$totalcadastrofabricacao = mysqli_query($servidor, "select count(id) as totalcadastrofabricao from cadastro where anofabricacao=2005");
$totalfabricacao = mysqli_fetch_assoc($totalcadastrofabricacao);

$totalcadastroautomovelpublico = mysqli_query($servidor, "select count(id) as totalcadastroautomovelpublico from cadastro where categoria='publico'");
$totalcadastro = mysqli_fetch_assoc($totalcadastroautomovelpublico);

$totalcadastroautomovelhonda = mysqli_query($servidor, "select count(id) as totalcadastroautomovelhonda from cadastro where marca='honda'");
$totalcadastrohonda = mysqli_fetch_assoc($totalcadastroautomovelhonda);

$totalcadastroautomovelchampion = mysqli_query($servidor, "select count(id) as totalcadastroautomovelchampion from cadastro where marca='champion'");
$totalcadastrochampion = mysqli_fetch_assoc($totalcadastroautomovelchampion);

?>

<div class="container">
    <div class="row dashboard-numerico">
        <div class="col quadro">
            <p class="texto">
                <i class="fas fa-coins cor-texto-verde"></i>
                Veiculos cadastrados:
            </p>
            <p class="estatistica">
                <span> <?php echo $total['totalcadastro']; ?> </span>
            </p>
            <p class="descricao-curta">
                <span class="cor-texto-verde">
                    4%
                </span>
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>

        <div class="col quadro">
            <p class="texto">
                <i class="fas fa-coins cor-texto-verde"></i>
                Veiculos lançado em 2005:
            </p>
            <p class="estatistica">
                <span> <?php echo $totalfabricacao['totalcadastrofabricao']; ?> </span>
            </p>
            <p class="descricao-curta">
                <span class="cor-texto-verde">
                    8%
                </span>
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>

        <div class="col quadro">
            <p class="texto">
                <i class="fas fa-coins cor-texto-verde"></i>
                Veiculos marca champion:
            </p>
            <p class="estatistica">
                <span> <?php echo $totalcadastrochampion['totalcadastroautomovelchampion']; ?> </span>
            </p>
            <p class="descricao-curta">
                <span class="cor-texto-verde">
                    5%
                </span>
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>

        <div class="col quadro">
            <p class="texto">
                <i class="fas fa-coins cor-texto-verde"></i>
                Veiculos marca honda:
            </p>
            <p class="estatistica">
                <span> <?php echo $totalcadastrohonda['totalcadastroautomovelhonda']; ?> </span>
            </p>
            <p class="descricao-curta">
                <span class="cor-texto-verde">
                    50%
                </span>
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>

        <div class="col quadro">
            <p class="texto">
                <i class="fas fa-coins cor-texto-verde"></i>
                Veiculos do tipo público:
            </p>
            <p class="estatistica">
                <span> <?php echo $totalcadastro['totalcadastroautomovelpublico']; ?> </span>
            </p>
            <p class="descricao-curta">
                <span class="cor-texto-verde">
                    2%
                </span>
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>
    </div>







</div> 