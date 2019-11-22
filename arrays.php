<?php
 /*Array data types
        Array is a special data type for stroing multiple data at a time or series of element.*/

        //Declaration
        // array_name = array(list of elements)
        $studentList = array("Arif","Karim","Rana","Jodu","Modu");
        $student = ["Arif","Karim","Rana","Jodu","Modu"]; //both are the same but declaration way is different

        //with multiple types
        $element_list = [1,2,45.6, "455",23, "Arif", "<h1>An Array</h1>"];

        //if we want to change the indexing num we can do that by following
        $studentList=array(2=>"Arif","Karim","Rana","Jodu","Modu"); // the indexing number has been changed and starts from 2

        //the funniest thing is that we can assign indexing number for every element by this way
        $studentList=array(2=>"Arif",4=>"Karim","Rana","Jodu","Modu"); // see here we assign 4 indexing num for karim

        //Access and show data
        // we previously have known that we can see array element using print language characteristic
        //We also know that we can acess or show data through array indexing and it starts at 0

        print "$studentList[2]"; // output: Arif
        echo "<br/>";
        print "$studentList[4]"; //output: karim not modu
        echo "<br/>";

        //echo can also use
        echo $student[3];
        //print_r($studentList);
        echo "<br/>";

        //there is another way to print all elements of an array: print_r()
        print_r($element_list);
        echo "<br/>";

        //Associative Array
        /* Previously we have seen that we can assign indexing by our own. 
        But we use only numeric but we can use any as our need.
        Further we need to group elements as per our needs. 
        It is also called associative array */
        $group1 = array("A", "B", "C");
        $group_members = array("group_1"=>($group1), "group_2"=>array("lead"=>"C","D","E"));
        print_r($group_members);
        echo "<br/>";

        //Multidimensional Array
        /* An array can be an element of an array or a variable or any other. 
        The above example is also an example of multidimensional array. */
        $total = 7;
        $thana = array("Dhaka"=>array("Dhanmondi","Tejgaon","Sher-e-bangla Nagar",
        "Mirpur","Mohammadpur","Kalabagan","Uttara","Badda"),"count"=>($total), 
        "city"=>array("North","South"));
        //print $thana["Dhaka"][0];
        print_r($thana["Dhaka"][2]);
        echo "<br/>";

        //foreach loop is used for show array elements
        //simply foreach loop for simple array
        foreach ($group1 as $value){
            echo "$value.<br/>";
        }

        echo "<br/>";

        //the follwing func does not work for multidimensional array as we have different kinds of element
        /*foreach($group_members as $value){
            echo "$value.<br/>";
        }*/

        //we have to do in another way
        /*First we took our array as parameters in func parameter 
            then to access each element of the array use foreach
            then we set the array value as key and also input the elements in a new index-- value
            check the variable is_array or not, again we loop the the array 
            we can pass any mutidimensional array through this func
        */
        function recursive_loop($array){
            foreach($array as $key => $value){
                if(is_array($value)){
                    recursive_loop($value);
                }
                else{
                    echo $value . PHP_EOL;
                }
            }
        }

        echo recursive_loop($thana);
        echo "<br/>";

        //creating an array using range() func
        foreach(range(10,15) as $numeric){
            echo "$numeric." ,"";
        }
        echo "<br/>";
         //similarly (both are the same)
         //$numeric = array(10,11,12,13,14,15);
         
         //even series
         foreach(range(10,20,2) as  $even_num_series ){
             echo "$even_num_series." ,"";
         }
         echo "<br/>";
        
         //odd series
         $odd_num_series = range(15,30,1);

         //letter series
         foreach(range("c","k") as $letter_series){
             echo " $letter_series." ,"";
         }

         //if we want to check a variable is array or not, we can check by is_array()
         if(is_array($thana)){
             echo "this is array";
         }
         else{
             echo "not an array";
         }
         echo "<br/>";

         /*~~~~~~~~~~~~~~~~~~~~~~~
         array built-in functions
         ~~~~~~~~~~~~~~~~~~~~~~~~*/
         //if we want to add elements in index of an array we can use array_unshift() func
         $books = array("Adultery","The God of samll things","Crime and Punishment");
         //now we add two more books starting at first indexing
         array_unshift($books,"The other side of midnight","The vinci code");
         

         //We can also add elements at last of an array using array_push() func
         // now the books added first previously,this time it goes to last
         array_push($books,"The other side of midnight","The vinci code");
         print_r($books);
         echo "<br/>";
         echo "<br/>";         

         //if we want to delete elements at first indexing we can use array_shift() func
         //It also returns the value that removed we can save it as another array
         $new_book;
         for($i=0; $i<2; $i++){
             global $new_book;
             $new_book = array_shift($books);
         }
         print_r($books);
         echo "<br/>";
         print_r($new_book);
         echo "<br/>";

         //If we want to delete elements at last then use array_pop() func
         $delete_book = array_pop($books);
         print_r($delete_book);
         echo "<br/>";

         //if we want to find an element that exist in an array then we can use in_array() func
         $e_book= "Adultery";
         if (in_array($e_book,$books)){
             echo "$e_book exist in \$books array";
         }
         echo "<br/>";
         //if we want to sort(ascending order), then we can use sort() func
         $num_series = array(2,4,8,1,3,10);
         sort($num_series);
         print_r($num_series);
         echo "<br/>";
         //if we want to reverse order (descending) then we can use rsort()
         rsort($num_series);
         print_r($num_series);

         