<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div id="conteudo">
        <h3>Olá, esta é uma tag H3</h3>

        <p>Um parágrafo.</p>
    </div>
    <div id="editor"></div>
    <button id="btGerarPDF">gerar PDF</button>

    <script>
        var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function(element, renderer) {
                return true;
            }
        };

        $('#btGerarPDF').click(function() {
            doc.fromHTML($('#conteudo').html(), 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
            });
            doc.save('exemplo-pdf.pdf');
        });
    </script>

    <?php include_once('footer.php'); ?>
</body>
</html> 