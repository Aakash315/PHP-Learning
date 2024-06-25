<html>
    <body>
        <h1>Do while loop</h1>
<?php
$j =1;
while($j<7){
    echo $j."<br>";
    $j++;
}
echo "<br>";
echo "break statement";
$i =1;
while($i<7){
    if($i==3) break;
    echo $i."<br>";
    $i++;
}
echo "<br>";
echo "continue statement";
echo "<br>";
$k =0;
while($k<10){
    $k++;
    if($k==4) continue;
    echo $k."<br>";
}
echo "<br>";
$l =0;
while($l<100){
    $l+=10;
    echo $l."<br>";
}
echo "<br>";
echo "do..while loop";
echo "<br>";
// $m =1;
// do{
//     echo $m."<br>";
//     $m++;
// }while($m<6)

echo "<br>";
echo "do..while break statement";
echo "<br>";
$n =1;
do{
    if($n==3) break;
    echo $n."<br>";
    $n++;
}while($n<10)
?>
<?php
echo "for loop";
echo "<br>";
for($o =0 ; $o<=10 ; $o++) {
    echo $o."<br>";
}
for ($p=1 ; $p<=10; $p++) {
    if($p==4) continue;
    echo "the number is: $p.<br>";
}
echo "<br>";
echo "foreach statement";
echo "<br>";
echo "<br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "the color is:$x <br>";
}
echo "<br>";
$bikes =array("honda", "hero", "tvs","jawa","royal enfield");
foreach ($bikes as $q){
    echo "the bike company name is:". strtoupper ($q). "<br>";
}
echo "<br>";
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo " name and markes is :$x : $y <br>";
}
echo "<br>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
  }
  echo "<br>";
  $cars =array("honda","bmw","volvo","tata","mg");

  foreach ($cars as $s) {
    if ($s=="tata") continue;
    echo "the car name is:". strtoupper ($s)."<br>";
  }
  echo "<br>";
  echo "foreach byref";
  echo "<br>";
  echo "<br>";
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
  echo "The color is:". strtoupper ($x)."<br>";
}
echo "<br>";
echo "break statement";
echo "<br>";
echo "<br>";
for($t=0; $t<=10 ; $t++){
    if ($t==8){
        break;
    }echo "the number is:".$t."<br>";
}
echo "<br>";
echo "<br>";
$u =0;
while($u<10){
    if($u==7){
        break;
    }echo "the number is:".$u."<br>";
    $u++;
}
echo "<br>";
echo "continue statement";
echo "<br>";
for ($v =0; $v<=10 ; $v++){
    if($v==5){
        continue;
    }echo "the number is:".$v."<br>";
}
echo "<br>";
echo "<br>";
// $w=0;
// while($w<5){
//     if($w==2){
//       continue;
//     }
//     echo "the continue number is:".$w."<br>";
//     $w++;
// }
$x = 0;

while($x < 10) {
    $x++;
  if ($x == 8) {
    continue;
  }
  echo "The number is: $x <br>";
}
echo "<br>";
echo "<br>";
echo "Function";
echo "<br>";
echo "<br>";
echo "<br>";
function myMessage (){
    echo "hello Aakash";
}
myMessage();
echo "<br>";
function myCar(){
    echo "Tata";
}
myCar();
echo "<br>";
// function familyName($fname) {
//     echo "$fname Refsnes.<br>";
//   }
  
//   familyName("Jani");
//   familyName("Hege");
//   familyName("Stale");
//   familyName("Kai Jim");
//   familyName("Borge");
  echo "<br>";
  echo "<br>";
  function carName($cname){
    echo "$cname  my favourite car.<br>";
  }
  carName("hondacity");
  carName("namo");
  carName("aulto");
  carName("hector");
  echo "<br>";
  function familyName($fname, $fyear){
    echo "$fname  dob is. $fyear .<br>";
  }
  familyName("Aakash","1999");
  familyName("Aadarsh","2009");
  familyName("anmol","2005");
  echo "<br>";
  echo "<br>";
  function setAge($maxage=60){
    echo "the age is: $maxage <br>";
  }
  setAge(50);
  setAge();
  setAge(40);
  setAge(20);
  echo "<br>";
  echo "<br>";
  function sum($x,$y){
    $z=$x+$y;
    return $z;
  }
  echo sum(20,5)."<br>";
  echo sum(4,6)."<br>";
  echo sum(2,3)."<br>";
  echo sum(5,9)."<br>";


?>
    </body>
</html>