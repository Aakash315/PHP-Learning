<html>
    <body>
    <h1>display text</h1>
<?php
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
echo "This string was made with multiple parameters";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>" . $txt1 . "</h2>";
print "<p> Study PHP at " . $txt2 . "</p>";

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
$x = 5985;
var_dump($x);
echo "<br>";
$y = 2.99;
var_dump($y);
echo "<br>";
$a = array("Aakash","dilip","shivam");
var_dump($a);
echo "<br>";
$c = "John";
echo "Hello $c"."<br>";
/*$x = 'John';
echo 'Hello $x';*/
echo strlen($c);

?>
<?php
echo str_word_count("Hello world!")."<br>";
echo strpos("Hello   world!", "world")."<br>";
$h = "  hello  vipin  ";
$g = explode( " ",$h);
echo strtoupper($h)."<br>";
echo strtolower($h)."<br>";
echo strrev($h)."<br>";
echo trim($h)."<br>";
print_r($g);
//echo strlen("Hello world!");
echo "<br>";
?>
<h2> concatenation </h2>
<?php
$c ="hello";
$d ="hemant";
$e = "$c $d";
echo $e;
echo"<br>";
$x = "my name is aakash jaiswal";
echo substr($x, 8,-2);
echo "<br>";
//$x = "We are the so-called "Vikings" from the north.";
echo "<br>";
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;

echo "<br>";
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

var_dump($a);
echo "<br>";
var_dump($c);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);
echo "<br>";
echo (pi());
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(max(0,150, 30, 20, -8, -200));
echo "<br>";
echo(abs(-6.7));
echo"<br>";
echo (sqrt(64));
echo "<br>";
echo (sqrt(55));
echo "<br>";
echo(round(0.49));
echo "<br>";
echo (rand(1,100));
echo "<br>";
define("GREETING", "Welcome Aakash jaiswal");
echo GREETING;
echo "<br>";
const MyName = "Aakash";
echo MyName;
echo "<br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[2];
  echo "<br>";
  







?>



</body>
</html>
