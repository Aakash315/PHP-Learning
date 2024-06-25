
<html>
    <body>
        <h1>demo3</h1>
<?php
$x="Welcome";
$y="Aakash";
$n="$x $y";
echo $n;
echo "<br>";
?>

<h2>Slicing</h2>
<?php
$x= "Welcome to PhP";
echo substr ($x,5,2);
echo "<br>";
$y= "Where is mobile phone.";
echo substr($y,3,9);
echo "<br>";
$a=5;
$b=2.55;
$c="59";
echo var_dump($a)."<br>";
echo var_dump($b)."<br>";
echo var_dump($c)."<br>";
$d=255;
echo is_int($d)."<br>";
$e=3.99;
echo is_float($e)."<br>";
?>
<h2> casting</h2>
<?php
$a="590590";
$int_cast =(int)$a;
echo $int_cast."<br>";
$b=2.9;
$c="55";
$b=(int)$b;
$c=(float)$c;
echo var_dump($b)."<br>";
echo var_dump($c)."<br>";
$d=(-6.7);
echo (abs($d))."<br>";
echo (rand())."<br>";
define("welcome","to php world.");
echo welcome."<br>";
const mybike= "unicorn";
echo "mostly i'm usnig"." ".mybike." "."for riding."."<br>";
define("bikes",["bmw","suzuki","honda","hero"]);
echo bikes[2]."<br>";
?>
<h2>operaters</h2>
<?php
$x = 8;
$y =4;
echo $x+$y."<br>";
echo $x-$y."<br>";
echo $x*$y."<br>";
echo $x/$y."<br>";
echo $x**$y."<br>";
echo $x%$y."<br>";
$a = 9;
$b = 3;
$a+=$b;
echo $a."<br>";
// $a=$b;
// echo $a."<br>";
$a-=$b;
echo $a."<br>";
$a*=$b;
echo $a."<br>";
$a/=$b;
echo $a."<br>";
echo "<br>";
?>
<h2>If..else..elseif</h2>
<?php
$x= 50;
$y =50;
if ($x<$y){
    echo "number is greater";
}elseif($x>$y){
    echo "number is lower";
}else{
    echo "number is equal"."<br>";
}
$a =20;
if ($a<18){
    echo "under age"."<br>";
}if($a<12){
    echo "minner"."<br>";
}else{
    echo "above age"."<br>";
}



      //switch case...
echo "<br>";
$favpalce = "nepal";
switch($favpalce){
    case "mumbai":
        echo "your favourite location is mumbai";
        break;
    case "nepal":
        echo "your favourite location is nepal";
        break;
    case "delhi":
        echo "your favourite location is delhi";
        break;
    case "defoult":
        echo "none of above this";
    
}
echo "<br>";
$n = 8;

switch($n){   
  case 1:
  case 2 :
  case 3:
  case 4:
  case 5:
    echo "working day";
    break;
  case 6:
  case 0:
    echo "Weekend";
    break;
  default:
    echo "somewent wrong";
}
echo "<br>";
/*$d = 0;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}*/



       // while loop
echo "<br>";
$i = 2;
while ($i <= 20) {
  echo $i."<br>";
  $i++;
}
echo "<br>";
$k = 1;
while ($k < 6) {
  if ($k == 3) break;
  echo $k."<br>";
  $k++;
}
echo "<br>";
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i."<br>";
}
echo "<br>";
$i = 1;
while ($i < 6):
  echo $i."<br>";
  $i++;
endwhile;
echo "<br>";
$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i. "<br>";
}



?>
    </body>
</html>