<?php
$server = "mysql:host=localhost;dbname=faizan";
$user = "root";
$password = "";
$pdo = new PDO($server, $user, $password);
if($pdo){
// echo"<script>alert('connected')</script>";
}
?>