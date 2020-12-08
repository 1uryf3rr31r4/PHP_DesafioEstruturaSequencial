<?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


    echo "A média das notas bimestrais é ". ($media);
?>

<html>

<head>
</head>

<body>

    <form action="http://localhost/notasBimestrais/notas.php">
        <input type="submit" value="Voltar">
    </form>
    
</body>

</html>
