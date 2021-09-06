<?php

   
$pobierz = $_POST('name');
for($i = 0; $i < $pobierz; $i++)
 {
$liczba = rand(0,100);
if($liczba%2==0) {

     echo $liczba;
    echo "<br>";
  }
 }








?>

<html>
<body>
<form action="" method="POST">
<input type="text" id="licz">
<input type="submit" id="oblicz" value="oblicz">








</body>
</html>
