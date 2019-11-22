<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        //To show output in php the echo() func is most used *it is faster than print()
        echo "my first php code\n". "<br/>";
        /*To show output in php another func print() is also used 
        array can only show by print not echo */
        print "this is another php code using printf() func\t". "<br/>";
        //to use dynamic data such as type specifier printf() function is used
        $num1 = 101;
        $num2 = 25.36012345;
        printf("This is a real digit %d, this is float digit %.3f",$num1,$num2);
    
        //to assign a variable as print sprintf() func is used as it can be also print by echo
        $super_print = sprintf("here is the output %.2f", 150.42/20);
        echo $super_print. "<br/>";
    
        //Echo and print is used to show output in PHP. we better say it is as language construct rather than func
        //There are tow ways to show output by echo and print
        echo "This is in quote". "<br/>";
        echo ('This is in quote with bracket'). "<br/>";
        //In above the both will show simmilar output
        //______________________________________________
        //Follwing the same way
        print "This is in quote with print- the language construct". "<br/>";
        print ("This is in quote with bracket with print- the language construct"). "<br/>";
    
        //echo can take more parameters than print as example below
        echo "This", " is", " multi", " parameters", " echo". "<br/>";
        // but if we put the seperate parts into first then it occurs errror
        /* echo ("This", " is", " multi", " parameters", " echo");*/
        //but if we put the ecah part into first barcket then it is right and show the output
        echo ("This"), (" is"), (" multi"), (" parameters"), (" echo"), (" using first bracket"). "<br/>";
    
        //print works as function as it returns some value but not function
        $exp = print "Hello BD". "<br/>";
        var_dump( $exp );
    
        //But keep in mind that both echo and print are not function, they are language construct
    ?>
</body>
</html>