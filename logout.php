<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	session_destroy();
	unset($_SESSION['usr_id']);
	header("Location: user.php");
} else {
	header("Location: user.php");
}
