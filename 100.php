 <?php

   

    for($i = 1; $i <= 100; $i++)
     {

$liczba = rand(0,100);
if($liczba%2==0){
    echo $liczba;
    echo ("<br>");
}





    }

   ?>

<html>
<body>
<form action="" method="GET">
<input type="text" id="licz">
<input type="submit" id="oblicz" value="oblicz">








</body>
</html>
