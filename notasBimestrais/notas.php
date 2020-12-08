<html>

<head>
</head>
<body>
    <form action="http://localhost/notasBimestrais/mediaBim.php" method="POST">
        <?php
            for($i=1; $i<5; $i++)
            {
                echo "<label>Digite a nota " . ($i) . ": </label>";
                echo "<input type='text' id='nota".($i)."' name='nota".($i)."' size='10'>";
                echo "<br><br>";
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>