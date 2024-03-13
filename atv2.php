<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>12/03 - ATV 2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Verificação de número - Redondo</h1>
    <form method="post">
        <label for="num">Número:</label>
        <input type="number" name="num" />
        <input type="submit" name="submit" value="Validar" />
    </form>

    <?php
        if (isset($_POST["num"])) {
            $num = $_POST["num"];
            
            if ($num % 10 == 0) {
                echo "O número informado é redondo";
            } else {
                echo "O número informado não é redondo";
            }
        }
    ?>
</body>
</html>
