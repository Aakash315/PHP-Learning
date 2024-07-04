
<html>
    <body>
        &copy 2010-
        <?php
        echo "the different between year is: "
        .date("y")."<br>"; 
        echo "today date is: ".date("d-m-y")."<br>";
        echo "today date is: ".date("d.m.y")."<br>";
        echo "today is ".date("l")."<br>";
        echo "today date is: ".date("d/m/y")."<br>";
        echo "<br>";
        echo "<br>";
        date_default_timezone_set("Asia/Calcutta");
        echo "the time is ".date("h:i:sa")."<br>";
        $a=mktime(9,54,56,9,25,2009);
        echo date("d/m/Y h:i:sa",$a)."<br>";
        $b=strtotime("10:20pm april 17 1999");
        echo date("d/m/Y h:i:sa",$b)."<br>";
        $c=strtotime("+1 year");
        echo date("d/m/Y h:i:sa",$c)."<br>";
        $d=strtotime("tomorrow");
        echo date("d/m/Y h:i:sa", $d)."<br>";
        $e=strtotime("yesterday ");
        echo date("d/m/Y h:i:sa");
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $startdate=strtotime("april");
        $enddate=strtotime("+5 Year",$startdate);
        while ($startdate<$enddate){
            echo date(" d M Y ",$startdate)."<br>";
            $startdate=strtotime("+1 year",$startdate);
        }
        echo "<br>";
        echo "<br>";
        $startdates=strtotime("+3 monday");
        $enddates=strtotime("+1 month",$startdates);
        while($startdates<$enddates){
            echo "Shravan date is: ".date("M d l",$startdates)."<br>";
            $startdates=strtotime("+1 week",$startdates);
        }    
        echo "<br>";
        echo "<br>";
        echo "<h2>readfile function</h2>";
        echo readfile("aa.txt");
        echo "<br>";
        echo "<br>";
        echo "<h2>open/ read </h2>";
        $myfile = fopen("aa.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("aa.txt"));
        fclose($myfile);
        echo "<br>";
        echo "<br>";
        $myfile =fopen("aa.txt", "r") or die("Unable to open file!");
        echo fgets($myfile)."<br>";
        echo fgets($myfile)."<br>";
        fclose($myfile);
        echo "<br>";
        echo "<br>";
        $myfile = fopen("aa.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
          echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        echo "<br>";
        echo "<br>";
        $myfile=fopen("aa1.txt", "w") or die("Unable to open file!");
        $txt="Aakash Jaiswal\n";
        fwrite($myfile, $txt);
        fclose( $myfile);
        echo "<br>";
        $myfile=fopen("aa1.txt","a") or die ("Unable to open file!");
        $txt="Aadarsh jaiswal\n";
        fwrite($myfile,$txt);
        fclose($myfile);
        echo "<br>";
        ?>
    </body>
</html>