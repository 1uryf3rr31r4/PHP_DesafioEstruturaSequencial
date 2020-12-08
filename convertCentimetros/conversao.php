<?php

    $metro = $_POST['metro'];

    $centm = $metro * 100;

    echo "A distância equivalente a centrimetros é ". ($centm);
?>

<html>

<head>
</head>

<body>
    <br><br>
    <form action="http://localhost/convertCentimetros/metragem.php">
        <input type="submit" value="Voltar">
    </form>
    
</body>

</html>
