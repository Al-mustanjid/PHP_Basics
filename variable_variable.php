<?php
/*actually the value of one var assigns as var_name 
and again initialize value to that var. It is called
variable variable. Normally it is recommended not to use.
For dynamic loading it is actually used in templating */

//Using $$ we can assign var var
$x="a_var";
$a_var = "var of var";
echo $$x; // output: var of var
echo "<br/>";

// we can also use {}
echo ${$x};
echo "<br/>";

$js = "assets/js/site.js";
$js1 = "assets/js/js1.js";
$js2 = "assets/js/comet.js";
$assets_array = array('js','js1','js2');
foreach($assets_array as $link){
echo '<script src="'.$$link.'" type="text/javascript"></script>';
}

//another example
$how = "good";
$there = "how";
$hi = "there";
$Hey = "hi";
$b = "Hey";

echo $b."<br/>";
echo $$b."<br/>";
echo $$$b."<br/>";
echo $$$$b."<br/>";
echo $$$$$b."<br/>";



