<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Questão 8 - De Maior ou de Menor</title>
</head>
<body>
<div class="container"><br><br>
    <?php
    $key = $_GET["idade"];
    $anos = explode(",",$key);
    $maioridade = 0;

    foreach($anos as $ano){
        if($ano >= 18){
            $maioridade++;
        }
    }
    $menoridade= count($anos) - $maioridade;

    echo "Das idades digitadas, $maioridade são maiores de idade e $menoridade são menores de idade.";

    ?>
</div>
</body>
</html>