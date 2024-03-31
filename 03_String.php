<?php
        //String
        echo "<h4>String</h4>";
        $str = "This";
        echo $str."<br>";
        $lenn = strlen($str);
        echo "The lengt this string is: ".$lenn.".Thank you <br>";
        echo "The Number of word  this string is: ".str_word_count($str)."<br>";
        echo "The reversed string is: ". strrev($str)."<br>";
        echo "The search for is in this string is: ". strpos($str,"is")."<br>";
        echo "The replaced string is:". str_replace("is","at",$str).".<br>";
        

        //echo $lenn;
        ?>