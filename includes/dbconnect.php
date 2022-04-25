<?php

$server = 'localhost';
$user = '';
$password = '';
$db = 'BMS';

$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    die('Could not connect');
}
