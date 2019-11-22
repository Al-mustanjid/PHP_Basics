<?php
    if(isset($_POST['submit'])){
        //extracting the form info
        $username = $_POST['username'];
        $password = $_POST['password'];

        // echo "Username: ". $username;
        // echo "<br/>";
        // echo "Password: ". $password;
        define("minimum", 5);
        define("maximum", 10);
        $name = array("Ron","Roy","Tom","Ria","Karim8","Sizar");
        //validating form inputs
        if(strlen($username) < minimum){
            echo "Usename is too short; must not be less than 5";
        }
        if(strlen($username) > maximum){
            echo "Usename is too big; must not be longer than 10";
        }
        if(!in_array($username,$name)){
            echo "Sorry this username has already taken";
        }else{
            echo "Welcome";
        }
    }
    echo 'Your entered word : '. $_GET['q'];