<?php
global $config;
include('config.php');

$con = mysqli_connect($config['host'], $config['user'], $config['pass'], $config['database']) or die("Could not connect to the database!");
?>