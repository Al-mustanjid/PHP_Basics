<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    /* variable is a container where we store our various types of data
    In php varible declaration is easy
    As it is loosely type so it can detect the data types automatically. */
    
    $hello = "hi"; // $var_name = value
    $name = "Arif";
    $a_number = 10;
    $another_number = 20;
    $number3 = "10"; //it is string not number
    $total = $a_number + $another_number;
    echo $total . "<br/>";
    
    //______________________________________________________________________________
    //      Concatenation 
    //______________________________________________________________________________
    // in php we can concatenate two variables using .
    
    echo $hello." ". $name;
    
    // we can also use html tag in string variable. actually many types of attributes such as img etc. can use but only one value at a time can assign
    
    $gender = "<h1> Female </h1>";
    echo $gender. "<br/>";
    
    $number; //assign as null by default
    $number=0;
    $number++;
    echo $number;
    echo "<br/>";
    
    //______________________________________________________________________________
    //      Variable Scopes 
    //______________________________________________________________________________
    /* Like other programming languages php has also variable scopes
    one is local and another one is global
    local can use in a specific area such as function and can not access from outside of this area
    global can use anywhere in code */
    
   //global variable
    $first_number = 10;

     //Local variable example
    function calculation(){
        $first_number = 20;
        $second_number = 10;
        $add_number = $first_number + $second_number;
        
        echo $add_number;
    }

    echo "The \$first_number value is $first_number while it is outside of calculation function";
    echo "<br/>";
    calculation();
    echo "<br/>";

    /* In above code see that first_number value is globally different and 
    when it is in the function then its value changed and it is 20. 
     This is also called variable scope* as it is using in a specific area */

     //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
     /* N. B - in above we said that we can use global variable anywhere. But we cant use the first_number var !!!!
     To use global variable in a function there are two options for that */
     //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
     /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        $Globals['number']
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    function calculationAgain(){
        $GLOBALS['first_number'];
        $first_number = 20;
        $second_number = 10;
        $add_number = $second_number + $GLOBALS['first_number'];
        
        echo $add_number . "<br/>";
    }
    
    calculationAgain();

    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
       global $number
       ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
       /* suppose you have to write the global variable again and again. will u write the global $number?
         nope... we write just $number, see the example below */

         function calculate (){
            global $first_number;
            $first_number = 12; //now we can assign new value too.
            $another_number = 22;

            $add_number = $first_number + $first_number;

            echo $add_number. "<br/>";
         }

         echo $first_number. "<br/>";  // it will print 10 as global and outside of function
         calculate();

         //keep in mind that the last value assign to the variable is the current value of that variable

         $a = 1;
         $a = 2;
         $a = 3;

         echo $a. "<br/>"; //what will be output? of course the last one assign to the variable

    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Static Variable
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
     /* If we set static before a variable it turns into static variable. Normally if we declare a variable
     in function, the variable value destroys when it executed. But static variable does not destroy or forget the value. */

     function test_staticValue (){
        // $a_normal_value = 0;
        // $a_normal_value++;

        static $a_stat_value = 0;
        $a_stat_value++;

        //echo $a_normal_value. "<br/>";
        echo $a_stat_value. "<br/>";
     }
     test_staticValue();
     test_staticValue();
     test_staticValue();


/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Constant Variable
     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
     /* If we dont want to change the value of our variable and remain constant 
     then we can declare a variable as constant */
     define('const_value', 10);
     echo const_value. "<br/>";

    ?>
</body>
</html>