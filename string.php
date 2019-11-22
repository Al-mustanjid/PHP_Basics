<?php
//String is needed evreywhere
/* while we need a string to use for multiple time 
then we can store it in a variable rather than write it repeatedly */

$str = "This is a string in php";
echo "This is a string in php";
echo "<br/>";
echo "$str";
echo "<br/>";

//we can also use single quote but double quote is better
$str_2 = 'this is a \'single qoute string in php';
echo "$str_2";

//there is another powerful way to write long string in php and it is called "hereafter"
// start with <<< , then declare a heredoc and also declare at the last of string
// $my_str = <<<TEST This is a string without using double quote! TEST;
// echo "$my_str";