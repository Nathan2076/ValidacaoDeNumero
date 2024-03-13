<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>12/03 - ATV 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Verificação de número - Par ou ímpar</h1>
    <form method="post">
        <label for="num">Número:</label>
        <input type="number" name="num" />
        <input type="submit" name="submit" value="Validar" />
    </form>

    <?php
        if (isset($_POST["num"])) {
            $num = $_POST["num"];
            
            if ($num % 2 == 0) {
                echo "O número informado é PAR";
            } else {
                echo "O número informado é ÍMPAR";
            }
        }
    ?>
</body>
</html>
