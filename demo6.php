<html>
    <body>
        <?php
        $x=1;
        while($x<=8){
            echo $x."<br>";
            $x++;
        }
        echo "<br>";
        echo "<br>";
        for($y=0; $y<=10; $y++){
            echo $y."<br>";
        }
        echo "<br>";
        $z=1;
        do{
            echo $z."<br>";
            $z++;
        }while($z<=10);
        echo "<br>";
        echo "<br>";
        $name= array("Aakash","dilip","shivam");
        foreach($name as $b){
            echo $b."<br>";
        }
        echo "<br>";
        echo "<br>";
        function add_seven(&$value) {
            $value += 7;
          }
          
          $num = 2;
          add_seven($num);
          echo $num;
          echo "<br>";
          echo "<br>";
          echo "<h2> Array</h2>";
          $bikes= array ("tvs","honda","hero","bmw","suzuki");
          $bikes[2]="yamaha";
          var_dump($bikes);
          foreach ($bikes as $c){
            echo $c."<br>";
          }
          array_push($bikes, "jawa");
          var_dump($bikes);
          echo "<br>";
          echo "<br>";
          $car =array ("name"=>"mg", "model"=>"hector", "year"=>2018);
          var_dump($car);
          echo "<br>";
          $car["model"]="hector intenet";
          var_dump($car);
          echo "<br>";
          foreach ($car as $x=>$y){
            echo "$x:$y <br>";
          }
          echo "<br>";
          $name = array("aakash","dilip","shivam","shiva",);
          var_dump($name);
          echo "<br>";
          echo "<br>";
          foreach ($name as &$d){
            $d="jaiswal ji";
          }
          $d= "gupta";
          var_dump($name);
          echo "<br>";
          echo "<br>";
          $fruits= array("apple","mango","banana","lichi","orange");
          echo "<h3> remove last item..</h3>";
          array_pop($fruits);   //remove last item...
          var_dump($fruits);
          echo "<br>";
          echo "<h3> remove first item..</h3>";
          array_shift($fruits);    //remove first item...
          var_dump($fruits);
          echo "<br>";
          echo "<br>";
          $vegitables= array ("tomato","chilli","ginger","garlic","onion","potato");
          echo "<h3> Ascending Order..</h3>";
          sort($vegitables);       // ascending order
          var_dump($vegitables);
          echo "<br>";
          echo "<h3> Decending order..</h3>";
          rsort($vegitables);        //decending order
          var_dump($vegitables);  
          echo "<br>";
          echo "<br>";    
          $cars = array ("name" => "tata" , "model" => "nexon" , "year" => 2018);
          echo "<h3> Ascending Order..(According to value)</h3>";
          asort($cars);         //ascending order (according to value)
          echo "<br>";
          var_dump ($cars);
          echo "<h3> Ascending Oreder.. (According to Key)</h3>";
          ksort ($cars);         //ascending order (according to key)
          echo "<br>";
          var_dump ($cars);
          echo "<br>";
          echo "<h3> Decending Order..(According to value)</h3>";
          arsort($cars);        //decending order (according to value)
          var_dump($cars);
          echo "<br>";
          echo "<h3> Decending order..(According to Key)</h3>";
          krsort($cars);         //decending order (according to key)
          var_dump($cars);
          echo "<br>";
          echo "<br>";
          echo "<h1> 2 Dimensional Array </h1>";
          $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );
          for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
              for ($col = 0; $col < 3; $col++) {
                echo "<li>".$cars[$row][$col]."</li>";
              }
            echo "</ul>";
          }
          echo "<br>";
          $bikes =array(array("hero",24,2000),
                    array("honda",19,2005),
          array("royel enfield",34,1990),
          array("jawa",30,1994)
          );
          for($row=0 ; $row <4 ;$row++){
            echo"<b>Row number $row</b>";
            echo "<ul>";
              for($col=0 ; $col<3 ;$col++){
                echo "<li>".$bikes[$row][$col]."</li>";
              }
              echo "</ul>";
          }
          $x="hello World..";
          function myFunction(){
            global $x;
            echo $x;

          }
          myFunction();



        ?>
    </body>
</html>


