<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
        
    switch ($operator){
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 !=0){
                $result = $num1 / $num2;
            } else {
                $result = "Error! Cannot Divide by 0";
            }
            break;
            
        default:
            $result = "Invalid Operator";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ACTIVITY 2</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <h1>CALCULATOR</h1>
        <form method="post" action="">
            
            <h2>Enter Number 1:<input type="number" name="num1" placeholder="Enter Number 1" required></h2>
            
            <h3>Enter Operation:
             <select name="operator">
                <option type="text" value="add">ADDITION</option>
                <option type="text" value="subtract">SUBTRACTION</option>
                <option type="text" value="multiply">MULTIPLICATION</option>
                <option type="text" value="divide">DIVISION</option>
                <option type="text" value="invalid">Invalid</option>
            </select>
            </h3>

            <h2>Enter Number 2:<input type="number" name="num2" placeholder="Enter Number 1" required></h2>
            
            <br>
            
            <input type="submit" name="calculate" value="ENTER">
        </form>    
        
        <?php
        if (isset($result)){
            echo "<h1><center>Result:<h1><center>" . $result;
        }
        ?>
        
    </body>
</html>






















