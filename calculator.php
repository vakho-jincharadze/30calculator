<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="calculator_form">
    <h1>Result is:</h1>
    <?php
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operator = $_POST["operator"];
            switch ($operator) {
                case "+":
                    echo $number1 + $number2;
                    break;
                case "-":
                    echo $number1 - $number2;
                    break;
                case "*":
                    echo $number1 * $number2;
                    break;
                case "/":
                    echo $number1 / $number2;
                    break;
                default:
                    echo "Operator is wrong!";
            }
    ?>
</body>
</html>