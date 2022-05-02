<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "apek_sql";
    //  $dbpass = "K)tB@D8vZ)JEQ(NK";
    // $dbpass="pass";
    $db = "bank";
    $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);

    return $con;
}

function CloseCon($con)
{
    $con -> close();
}
