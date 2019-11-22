<?php
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    What is function?
    - A function is well organized, reusable code that performs a specific task.
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

// A function name can be declare using _ or letter but no number at starting point
//function works only when we declare it 
// we can declare function before creating it
function init(){
    echo "My name is ";
    writeName();
    wirteName("This line is a function argument or parameter");
    echo "<br/>";
    add_two_numbers(10, 15);
}

init();

function writeName(){
echo "Md. Arif";
}
echo "<br/>";

//Adding parameters and sending arguments in function
//we can add more functionality adding parameters 
function wirteName($input){
    echo $input;
}

function add_two_numbers($f_number, $s_number){
    $total = $f_number + $s_number;
    echo "Total: $total <br/>";
}

//add_two_numbers(10); // this creates error as one of the arguments is missing

//we can also send variables as arguments
$num1 = 9; $num2 = 15;
add_two_numbers($num1,$num2);

//we can set parameters default value
function add_numbers($f_number, $s_number=20){
    $total = $f_number + $s_number;
    echo "Total: $total <br/>";
}
add_numbers($num1);
add_numbers($num1,$num2); //the default value this time will not work
echo "<br/>";

//passsing argument by reference 
/*we declare a varibale as global and you change the value of the variable in a function. 
now you also want to initialize that value also in global, 
then you have to assign "&" before the var in function*/

$cost = 100;
$vat = 0.15;
function calculatePrice(&$cost, $vat){
    $cost = $cost + ($cost * $vat);
    $vat += 4;
    echo $cost;
}
calculatePrice($cost,$vat); // cost is now 115 in func
echo "<br/>";
echo $cost; // it is also now 115 globally
echo "<br/>";

/* return value through func 
to return a value in function we must use "return" key 
*/
function add($x,$y){
    $total = $x + $y;
    return $total;
}

$result = add(14,56);
echo $result;
echo "<br/>";
$result = add(100,$result);
echo $result;
echo "<br/>";

//to return multiple values list() can use
function productDescription(){
    // $desc[] = "Reliable";
    // $desc [] = "Colorful";
    // $desc[] = "Durable";
    $desc = array("1",2,2);
    return $desc;
}
list($i1,$i2) = productDescription(); // the values in func are assigning in list
echo "Product is $i1, $i2";



