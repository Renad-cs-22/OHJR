<?php
//kill sessions
session_start();

$_SESSION["login"] = '';
$_SESSION["user"] = '';
session_destroy();
header("Location: ../index.php");
?>