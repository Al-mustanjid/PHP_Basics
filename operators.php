
<?php
//An operator is a charecteristic that represents an action
/* three types of operator
    1. Unary Operator - an operator takes action only for one operands; ++, --
    2. Binary Operator - an operator takes action for two operands; +, -, *, /
    3. Tenary Operator - an operator takes action for three operands; ?: */

    //classification of operators
   // 1. Arithmetic operators
    $x= 12; $y= 7;
    echo "negation of x: (-$x)";
    echo "<br/>";
    echo "addition of x & y: ".($x + $y);
    echo "<br/>";
    echo "subtraction of x & y: ".($x - $y);
    echo "<br/>";
    echo "multiplication of x & y: ".($x * $y);
    echo "<br/>";
    echo "division of x & y: ".($x / $y);
    echo "<br/>";
    echo "modulus of x & y: ".($x % $y);
    echo "<br/>";
    echo "exponenation of x & y: ".($x ** $y);
    echo "<br/>";

    //2.Assignment operator
    // we can also call combined operator such as +=
    $x += 12; // $x = $x +12
    echo "$x";
    echo "<br/>";

    $str1 = "Assignment";
    $str1 .= " Operator";
    echo $str1;
    echo "<br/>";

    //3.Assignment by reference
    // we can assign value of one variable to another variable using &
    $var_1 = 6;
    $var_2 =&$var_1;
    echo $var_2;
    echo "<br/>";

    //4.bitwise operator
    //and, or, Xor, not, <<, >>

    //And Example
    //common between each one
    function check_and($param1, $param2){
        if($param1 & $param2){
            echo $param1 & $param2;
        }
        else{
            echo "no common";
        }
    }
    check_and($var_1,$var_2);
    echo "<br/>";

    //Or example
    //common of any one
    $num = 15;
    $num2 = 3;
    function check_or($param1, $param2){
        if($param1 | $param2){
            echo $param1 | $param2;
        }
        else{
            echo "no common";
        }
    }
    check_or($num, $num2);
    echo "<br/>";

    //Xor
    //not common between each one
    function check_Xor($param1, $param2){
        if($param1 ^ $param2){
            echo $param1 ^ $param2;
        }
        else{
            echo "no common";
        }
    }
    check_Xor($num, $num2);
    echo "<br/>";

    //Not operator
    //excluding the selected one
    function check_Not($param1, $param2){
        if(~$param1 & $param2){
            echo ~$param1 & $param2;
        }
        else{
            echo "no common";
        }
    }
    check_Not($num, $num2);
    echo "<br/>";

    //<< shift left operator
    //$v1 << $v2 means $v1 will multiplicates 2 times(<<) with the $v2 value
    $V1 = 30;
    $V2 = 2;

    echo $V1 << $V2;
    echo "<br/>";

    //>> shift right operator
    // the reverse of >> but it divise 

    echo $V1 >> $V2;
    echo "<br/>";

    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    comparison operator
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    if($V1 == $V2){
        echo "$V1 and $V2 are equal";
    }
    else{
        echo "Not equal";
    }
    echo "<br/>";
    var_dump($V1 === $V2);
    echo "<br/>";
    var_dump($V1 != $V2);
    echo "<br/>";
    var_dump($V1 <> $V2);
    echo "<br/>";
    echo "<br/>";

    //what about string and number comparison??
    // php takes string and truns into number then compare

    var_dump("1" === 1); //false cause both of them are not string
    echo "<br/>";
    var_dump("1" === "01"); //flase
    echo "<br/>";
    var_dump("1" == "01");//true
    echo "<br/>";
    var_dump(0 == 'test');//true
    echo "<br/>";

    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Logical Operator
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    $a = 15;
    $b = 5;
    //and ----- or
    // and:&& same but && more faster and it will execute first
    if($a < $b and $a + $b > 10){
        echo "both are true";
    }
    else if($a < $b or $a + $b > 10){
        echo "at least one of them is true";
    }
    echo "<br/>";

    $c = TRUE and FALSE;// here ($c = TRUE) and False is ignored and True is assigned to $c thats why output returns 1
    echo $c;
    echo "<br/>";
    $d = TRUE && FALSE; // here $c = (TRUE && FALSE) both true and false are assigned to $c
    echo "$d";
    echo "<br/>";

    $e = TRUE or FALSE; //here previusoly alike ($e=True) and false is ignored
    echo $e; // output:1 -- true
    echo "<br/>";
    $e = TRUE || FALSE; // here previously alike ($e = (TRUE || FALSE), both false and true are assigned to $e
    echo $e;
    echo "<br/>";

    $f = TRUE === FALSE; // ($f = TRUE) and FALSE
    echo $f;
    echo "<br/>";
    $f = TRUE || FALSE; // $f = (TRUE || FALSE)

    //the rest will be same (xor, !=, <>, !==)

    //array operator : +, ==, ===, !=, <>, !== 

    $area1 = array(1=>"Bogura", "Dhaka","Cumilla");
    $area2 = array("Hong Kong","Tokyo");
    $area3 = array(0=>"Rajshahi",1=>"Rangpur");

    $x = array(1 => "Dhaka", 2=> "Rangpur");
    $y = array("two" => "Chittagong", 3 => "Sylhet", 4 => "Khulna");

    //Array addition
    echo '<pre>';

    echo "<h3>Same value array will not add properly";
    print_r($area3 + $area2);
    var_dump($area3 + $area2);
    //But own indexing and same parameter add
    echo "<br/>";
    print_r($area1 + $area2).'<br/>';
    var_dump($area1 + $area2);
    
    echo "<br/>";
    print_r($x + $y).'<br/>';
    echo "<br/>";
    var_dump($x + $y);

    //identity
    $r1 = array(0 => "Dhaka", 1 => "Rangpur");
    $r2 = array("Dhaka", "Rangpur");
    var_dump($r1 == $r2);

    var_dump($area1 === $area2);
    var_dump($area2 == $area3);