<!DOCTYPE html>
<html>
<body>
<h1>php syntax 1</h1>
<?php
ECHO "Hello World!";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<h2>php syntax</h2>
<?php
$name="Aakash";
echo "my name is ".$name."<br>";
?>

<h3>php singleline comment</h3>
<?php
// result of welcome 
echo "Welcome home";
?>
 
<h4>php multiline comment</h4>
<?php
/*result is given
in the line
*/
echo "welcome home..!"
?>

<h5>php middle of code comment</h5>
<?php
echo 5/*-15*/+10;
?>

<h1>php variable</h1>
<?php
$txt="Borivali";
echo "i live in ".$txt;
?>
<br>
<?php
$x=50;
$y=60;
echo $x+$y;
?>
<br>
<?php
$x=50;
var_dump($x);
var_dump(2.09);
var_dump("Aakash");
var_dump(false);
var_dump([2,5,7]);
var_dump(NULL);
?>
<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
<?php
function myTest1() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest1();
  myTest1();
  myTest1();
  ?>
<br>
  <?php
  $x = "Hello world!";
  $x = null;
  var_dump($x);
?>  
<br>
<?php

$y=40;
$y= (string) $y;
var_dump($y)
?>
<br>
<?php
echo strlen("Hello world!")."<br>";
echo str_word_count("Hello world!")."<br>";
echo strpos(" Welcome Hello world!", "world")."<br>";

$txt = "W3Schools.com";
echo "I love $txt!"."<br>";
$txt = "W3Schools.com";
echo "I love " . $txt . "!";

?>
</body>
</html>
