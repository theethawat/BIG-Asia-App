<?php
session_start();
$_SESSION["user"]="Guest";
print "<meta http-equiv='refresh' content='0;url=home.php'>";
?>