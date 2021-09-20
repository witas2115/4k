 <?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'oceny';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $numer = $_GET['num'];
             $nazwisko = $_GET['nazw'];
             $ocena = $_GET['ocena'];
$query1 = "SELET * FROM Oceny";             
$query = "Insert into oceny(numer, nazwisko, ocena) values('$numer', '$nazwisko', '$ocena')";
$run =mysqli_query($con,$query) or die(mysqli_error());
$run1 =mysqli_query($con,$query1) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }





if($run1){
         echo "<p>";
         echo "<table boder=\"1\"><tr>";
         echo "<td bgcolor=\"ffff00\"><strong>numer</strong></td>";
         echo "<td bgcolor=\"ffff99\"><strong>nazwisko</strong></td>";
         echo "<td bgcolor=\"ffff00\"><strong>ocena</strong></td>";
         echo "</tr>";

         while ( $row = mysql_fetch_row($run1)) {
            echo "</tr>";
            echo "<td bgcolor=\"ffff00\">" . $row[0] . "</td>";
            echo "<td bgcolor=\"ffff99\">" . $row[1] . "</td>";
            echo "<td bgcolor=\"ffff00\">" . $row[2] . "</td>";
            echo "</tr>";
         }
         echo "</table>";

         if ( !mysql_close() ) {
            echo 'Nie moge zakonczyc polaczenia z baza danych';
            exit (0);
         }
        }
?>

<form action="" method="get">
Numer:<input type="text" name="num"><br>
Nazwisko:<input type="text" name="nazw"><br>
Ocena:<input type="text" name="ocena"><br>
<input name="sub" type="submit" value="ok">
</form>
