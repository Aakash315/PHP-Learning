
    <html>
        <body>
            <h1>2 dimensinonal Array</h1>
            <?php
            $car = array(array("Tata",1990,34),
            array("volvo",2005,19),
            array("mg",2018,6),
            array("honda",2014,10));
            for($row=0; $row<4;$row++){
                echo"<p><b>Row number $row</p></b>";
                echo "<ul>";
                for($col =0; $col<3;$col++){
                    echo "<li>".$car[$row][$col]."</li>";
                }
                echo "</ul>";
            }
            $x=4;
            echo $x,"<br>";
            $x++;
            echo $x."<br>";
            $x--;
            echo $x;  
            echo "<br>";  
            $y = 1;
            while($y <=10){
                if($y==3){
                 break;
                }
                echo "the number is:".$y."<br>";
                $y++;
            }
            echo "<br>";
            $a=1;
            do {
                echo $a."<br>";
                $a++;
            } while ($a <= 10);
            echo "<br>";
            $b=array ("name"=> "Aakash", "age"=>24, "year"=>2000);
            foreach ($b as $c=>$d){
                echo "$c:$d.<br>";
            } 
            echo "<br>";
            function myfamily($fname,$age){
                echo "my name is ".$fname." i am ".$age." old."."<br>";
            }
            myfamily("Aakash",24);
            myfamily("Aadarsh",14);
            echo "<br>";
            function average ($x ,$y){
                $average = ($x+$y)/2;
                 echo "the average of number is :".$average."<br>";
                // echo "the average of number is :".($x+ $y)/2 ."<br>";
            }
            echo average(4,6);
            echo average(8,4);
            echo "<br>";
            function area_squre($a){
                $area = $a*$a;
                return $area."<br>";
            }
            echo area_squre(5);
            echo area_squre(8);
            echo "<br>";

            ?>
<html>
<body>

<!-- <form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
PASSWORD: <input type="password" name="password"><br>
Comment :<textarea type="Comment" rows="10" cols="50" ></textarea> 
<input type="submit">
<br> -->
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<br><br>
        </form>
        </body>
        </html>
