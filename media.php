<html >
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Atividade 1</title>
</head>
<body>
<div class="container">
    <form method="get" action="media01.php">
        <h2>Calculando a média de 10 números</h2><br>
        <?php
        $e = 1;
        while ($e <= 10){
            $value = "Número".$e;
            echo "<label for='$value'>Número $e: </label>
                    <input type='number' id='$value' name='$value' placeholder='$e.° numero.' required><br>";
            $e++;
        }
        ?>
        <br><button type="submit" class="btn btn-primary">Média</button>
    </form>
</div>
</body>
</html>