<head>
    <link rel="stylesheet" href="htps://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Questão 7</title>
</head>
<body>
<div class="container"><br>

    <?php
    $numeros = array(5,8,7,9,2);
    $maior = 0;
    foreach ($numeros as $numero){
        if($numero > $maior){
            $maior = $numero;
        }
    }
    echo "<p>O número $maior é o maior dentre os digitados.</p>";

    ?>
</div>
</body>
</html>