<?php
session_start();
session_destroy();
session_start();
$_SESSION['loginid'] = "";
header("location:index.php");
?>