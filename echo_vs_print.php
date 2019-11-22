<?php
//both echo and print are known as language construct. The both has same duties and it is print various things.

echo "This is a echo print";
echo "</br>";
print "This is print print";
echo "</br>";
//We can also write echo and print with parenthesis
echo ("This is a echo print"); // the same output as before
echo "</br>";
print ("This is print print"); // the same output as before
echo "</br>";
/* but there is a delicate difference between echo and printf 
    echo can take more than one parameters which cant be take by print */
    echo "This ", "is ", "multi "," parameters ","echo";
    echo "</br>";
/* but it must be keep in mind we cant assign these multiparameters with one parenthesis */
   // echo ("This ", "is ", "multi "," parameters ","echo"); // this will create an error output
   //but if we give each parenthesis seperately then it is fine
   echo ("This "), ("is "), ("multi "),("parameters "),("echo");

   