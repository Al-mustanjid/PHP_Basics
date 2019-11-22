<?php
        /*In PHP, there are core two data types
            1.Scaler data
            2.Compound data
        */

        /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Scaler data
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
        /* Scaler data has 4 types
        1.Boolean 2.Integer 3.Float 4.String */

        //Boolean
        $a = TRUE;
        $b = FALSE;
        $c = 7;

        var_dump(is_bool($a)); //output : true
        var_dump(is_bool($c)); //output : false
        echo "<br/>";

        //Integer
        $num1 = 1101010;
        is_int($num1);
        var_dump($num1);
        echo "<br/>";

        //float
        $float_num = 23.5698;
        var_dump($float_num);
        echo "<br/>";
        echo "<br/>";

        //string
        $name = "PHP String Data type";
        var_dump($name);
        echo "<br/>";

        /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Compound data
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
        /* Compound data has 2 types
        1.Array data types 2.Object and class */

        //as compound data and its agendas are long thats why it has been practiced seperately
        // array.php object_class.php

        /* Type juggling
        When we declare a variable, we must define its type. But php does it automatically
        thats why php is so powerful */

        //type casting
        /* Suppose we declare a variable as numeric but we need it as string next
        Further, we can change the type while we fetch the data from db or store in db
        we can do that by type casting. some of the examples are given below
        for int: (int)
        for bool: (bool)
        for double/float/real: (float)
        for string: (string)
        for array: (array)
        for object: (object)
        *for null: (unset)  */

        $x = 7;
        $x = (string) 7;
        var_dump($x);
        echo "<br/>";

        $name ="123";
        $name = (int) "123";
        var_dump($name);
        echo "<br/>";
        $y = (array) $name;
        var_dump($y);
        echo "<br/>";


         // this page contains only php code thats why there is no closing tag
         /*it is best to omit closing tag while file contains only php code
         as it prevents whitespace or new line adding problem 
         this occurs output buffering */

