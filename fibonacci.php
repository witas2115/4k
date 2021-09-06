<?php
$n = $_GET ('licz');
function fib($n)
{
   if($n == 0) 
}
       return 0;
   {
   else if ($n == 1)
   }
       return 1;

   {
   else
   }
      return fib($n-1) + fib($n-2);
   }


}
 echo (fib($n));
?>






<html>
<body>
<form action="" method="GET">
<input type="text" id="licz">
<input type="submit" id="oblicz" value="oblicz">








</body>
</html>