<?php
session_start();
var_dump($_SESSION['num']);


$_SESSION['num'] += 1;
echo $_SESSION['num'];
