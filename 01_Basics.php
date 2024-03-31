<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $variable1 = 10;
    $variable2 = 20;
    echo $variable1;
    echo $variable2;

    echo $variable1 + $variable2;
    echo "<br>";

    //operators In PHP
    //Arthematic Operatoers

    echo "The value of variable1 + variable2 is: ";
    echo "<br>";
    echo  $variable1 + $variable2;

    echo "<br>";
    echo "The value of variable1 - variable2 is: ";
    echo "<br>";
    echo  $variable1 - $variable2;

    echo "<br>";
    echo "The value of variable1 * variable2 is: ";
    echo "<br>";
    echo  $variable1 * $variable2;


    echo "<br>";
    echo "The value of variable1 / variable2 is: ";
    echo "<br>";
    echo  $variable1 / $variable2;
    echo "<br>";
    echo "<br>"; 

    //Assignment operators
    echo "<h4>Assignment Oerators</h4>";
    $var = $variable1;
    $var  += 1;
    //$var  -= 1;
    //$var  *= 1;
    //$var  /= 1;
    echo "The value of new variable is: ";
    echo $var;

    //comparision operator
    echo "<h4>Comparion Operator</h4>";

    echo "The value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1==4 is";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1==4 is";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1==4 is";
    echo var_dump(1<=4);
    echo "<br>";

    //Increment/Dectement Operators

    echo   "<h4>Incremet/Decrement Operators</h4>";

    echo $variable1++;
    echo "<br>";
    echo $variable1--;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";

    //Logical Operators
    echo "<h4>Logical Operators</h4>";

    $MyVar = (true and true);
    echo var_dump($MyVar);
    echo "<br>";

    $MyVar = (false and true);
    echo var_dump($MyVar);
    echo "<br>";

    $MyVar = (false and false);
    echo var_dump($MyVar);
    echo "<br>";

    $MyVar = (true and false);
    echo var_dump($MyVar);
    echo "<br>";

    $MyVar = (true or false);
    echo var_dump($MyVar);
    echo "<br>";

    $MyVar = (true xor true);
    echo var_dump($MyVar);
    echo "<br>";
    ?>
    <?php
    define('PI',3.14);

    //Data types in   php
    //1.String
    echo "<h4>String</h4>";
    echo "<br>Data Types  <br>";
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";

    //2.Integer
    echo "<h4>Integer</h4>";
    echo "<br>Data Types  <br>";
    $var = 67;
    echo var_dump($var);
    echo "<br>";

    //3.Float
    echo "<h4>Float</h4>";
    echo "<br>Data Types  <br>";
    $var = 67.1;
    echo var_dump($var);
    echo "<br>";

    //4.Boolean
    echo "<h4>Boolean</h4>";
    echo "<br>Data Types  <br>";
    $var = true;
    echo var_dump($var);
    echo "<br>";

     //5.Array
    //6.Object 

    //constant
    echo "<h4>Constant</h4>";
    echo PI;

    













    ?>
</body>
</html>