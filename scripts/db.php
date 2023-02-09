<?php
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect=mysqli_connect ("localhost","root","")or die("Could not connected:".mysqli_error());
mysqli_select_db ($connect,"demo");
mysqli_set_charset($connect,"utf8");
?>