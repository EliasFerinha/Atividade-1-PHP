<html >
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Atividade 6 - Média</title>
</head>
<body>
<div class="container">
    <?php
    $e = 0;
    while ($e < 10){
        $e++;
        $key = "Número".$e;
        $value = $_GET["$key"];
        $sum += $value;
    }
    $average = $sum/$e;
    echo "<div class='alert alert-success'>A média dos números digitados é $average</div>";
    ?>
</div>
</body>
</html>