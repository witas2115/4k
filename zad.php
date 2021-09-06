<?php
$login = $_POST ['login'];
$pass = $_POST["pass"];
$tab_log = ['jacek', 'bartosz', 'zygmunt', 'klaudia', 'wiktoria'];
$tab_pass = ['owca', 'baran', 'dzik', 'kuna', 'rys'];
if($tab_log[0] == $login && $pass == $tab_pass[0]) {
    echo "zostałeś zalogowany";
}
else{
    echo "to moje expo wyjazd";
}

?>






<html>
<body>
<form action="" method="POST">
<input type="text" name="login">
<input type="text" name="pass">
<input type="submit" id="oblicz" value="oblicz">








</body>
</html>