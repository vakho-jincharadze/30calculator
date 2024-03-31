<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="form">
    <form action="calculator.php" method="post">
    <div class="calculator_form">
    <h1>Calculator</h1>
    </br>
        <input type="number" class="input" name="number1" placeholder="Enter first number">
        </br>
        <input type="number" class="input" name="number2" placeholder="Enter second number">
        </br>
        <select Name="operator" class="input">  
            <option>+</option>  
            <option>-</option>  
            <option>*</option>  
            <option>/</option> 
        </select>  
        </br>
        <button type="submit" class="button">Calculate</button> 
    </div>
    </form>
</body>
</html>