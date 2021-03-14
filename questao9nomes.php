<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Questao 9 Ordem Invertida</title>
</head>
<body>
<div class="container"><br><br>
    <?php
    $key = isset($_GET["nome"])?$_GET["nome"]:0;

    $digitado = explode(",",$key);

    $inverted = array_reverse($digitado);

    foreach ($inverted as $ordem){
        echo $ordem."<hr>";
    }

    ?>
</div>
</body>
</html>