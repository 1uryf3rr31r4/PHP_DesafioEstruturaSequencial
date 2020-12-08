<?php

    $raioC = $_POST['raioC'];

    $areaC = 3.14159 * ($raioC * $raioC);

    echo "A área do Círculo é ". ($areaC);
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
