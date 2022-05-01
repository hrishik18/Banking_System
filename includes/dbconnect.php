<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "K)tB@D8vZ)JEQ(NK";
 //K)tB@D8vZ)JEQ(NK
 //apek_sql
 $db = "bank";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);
 
 return $con;
 }
 
function CloseCon($con)
 {
 $con -> close();
 }
