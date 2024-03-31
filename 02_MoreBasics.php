<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1> Lets learn about PHP </h1>
        <p>Your party status is here: </p>
        <?php
        $age =34;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==7){
            echo "you are 7 years old";
        }
        else{
            echo "you canot go to the party";
        }
        echo "<br>";
        //Array in Php
    
        $language = array("python","c++","php","Nodejs");
        echo count($language);
        echo "<br>";
        echo $language[0];

        //Loops in php
        $a = 0;
        while($a <= 10){
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }

        //Iterating array in php using while loop
        echo "<h4>While Loop</h4>";
        $a = 0;
        while($a < count($language)){
            echo "<br>The value of languages is: ";
            echo $language[$a];
            echo $a;
            $a++;
        }

        //do while loop
         echo "<h4> Do While Loop</h4>";
        $a = 0;
        do{
            echo "<br>The value of languages is: ";
            echo $a;
            $a++;
        }while ($a < 10);

        //For Loop
         echo "<h4>For Loop</h4>";
        $a = 200;
        for($a=0;$a<10;$a++){
           echo "<br>The value of languages is: ";
            echo $a;
            //Foreach
             echo "<h4>ForEach Loop</h4>";
            foreach ($language as $value){
                echo "<br>The value is";
                echo $value;
            }
        }


        //Function
         echo "<h4>Fuction</h4>";

         function print5(){
            echo "FIVE";
         }
         print5();

         function print_number($number){
            echo "<br>Your Number Is: ";
            echo $number;
         }
         print_number(34);

        ?>
        <?php
        //String
        echo "<h4>String</h4>";
        $str = "This<br>";
        echo $str;
        $lenn = strlen($str);
        echo "The lengt this string is: ".$lenn.".Thank you <br>";
        echo "The Number of word  this string is: ".str_word_count($str).".Thank you <br>";
        //echo $lenn;
        ?>

    </div>
</body>
</html>