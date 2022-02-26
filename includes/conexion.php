<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'project1';
$db = mysqli_connect($server,$username,$password,$database);
mysqli_query($db,"SET NAMES 'utf8'");
session_start();
