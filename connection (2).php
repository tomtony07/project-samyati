<?php
$localhost="127.0.0.1";
$username="root";
$passwd="";
$dbname="samyati";
$connect=new mysqli($localhost,$username,$passwd,$dbname);
if($connect->connect_error)
{
    die("connection failed");
}
?>