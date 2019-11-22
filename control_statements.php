<center>
<?php 

//if....else

if ( 4 < 10){
    echo "4 is greater than 10";
}else{
    echo "4 is smaller than 10";
}
echo "<br/>";

//if....else if
$age = 9;
if($age<10 && $age >5){
    echo "You are a child";
}else if($age<18 && $age>=10 ){
    echo "You are a teenager";
}else if($age > 18 || $age == 18){
    echo "You are above 18 and you can do as you wish!";
}
echo "<br/>";

//switch
$age2 = 10;

switch($age2){
    case 15: 
    echo "You are the right aged person";
    break;

    case 16:
    echo "You are above age person";
    break;

    case 10:
    echo "You are under aged person";
    break;

    default:
    echo "Nothing found";
}

echo "<br/>";

//while loop
 $counter = 0;

 while($counter <= 10){
     echo $counter."<br/>";
     $counter++;
 }
 echo "<br/>";
 echo "<br/>";

 //for loop
 for($i=0; $i<10; $i++){
     echo $i;
 }
 echo "<br/>";
 $k=0;

 for(;$k<10; $k++){
     echo $k;
 }
 echo "<br/>";
 //breaking  the loop without assigning the control condition
 for($i=0; ;$i++){
     if($i > 6){
         break;
     }
     echo "For loop iteration: $i". "<br/>";
 }
 echo "<br/>";


 function pyramid($input){
    for($i=1; $i<=$input; $i++){ // first for running loop as input number and the heighst
    for($j=1; $j<=$i; $j++){ //print the * through each iteration
    echo '*';
    }
    echo '<br/>';
    }
}
    pyramid(5);
    echo '<br/>';
    echo '<br/>';
    //function reverse pyramid
    function pyramid_reverse($input){
        for($i=$input; $i>0; $i--){
            for($j=$i; $j>0; $j--){
                echo "*";
            }
            echo '<br/>';
        }
    }
    pyramid_reverse(5);

 
 //foreach loop
//it is actually use for array
$students = array(12,14,15,16,18);

foreach($students as $student){
    echo $student. "<br/>";
}

?>
</center>
