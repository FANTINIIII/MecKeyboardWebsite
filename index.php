<?php

session_start();
$_SESSION["idLogged"] = False;

header("location: ./HomePage/homeIndex.php");

?>