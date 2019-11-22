<?php
//there are some very useful builtin superglobal variables
//It needs often while we develop our website
/* $_GET
   $_POST
   $_REQUEST
   $_SERVER
   $_SESSION
   $_FILES
   $_COOKIE
   $_ENV
*/
//$_SERVER
//It is an array
//It is used for store and save server info such domain info, script path, 
//server ip address etc.

//To find out http_host (the file stored in domain)
echo "HTTP_HOST: ".$_SERVER['HTTP_HOST'];
echo "<br>";

//to identify the server software in which the script is stored
echo "Server Software: ".$_SERVER['SERVER_SOFTWARE'];
echo "<br>";

//to identify the script ip addresse
echo "Remote Adder: ".$_SERVER['REMOTE_ADDR'];
echo "<br>";

//to identify the address of script (document root)
echo "Document Root: ". $_SERVER['DOCUMENT_ROOT'];
echo "<br>";

//to identify the url of running script 
echo "Request URI: ". $_SERVER['REQUEST_URI'];
echo "<br>";

//to see all the info about server use print_r
echo "ALL Server info: ";
echo '<pre>';
print_r($_SERVER);

