<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "K)tB@D8vZ)JEQ(NK";
//   put your password inside config . inc . php which is in  in XAMPP\PHPMYADMIN folder.
 $db = "bank";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
