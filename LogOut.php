<?php
/*
    File digunakan untuk logout user
*/

session_start();
unset($_SESSION["users"]);
header("Location: index.php");
