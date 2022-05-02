<?php
include 'includes/dbconnect.php';
session_start();
$sid=$_GET['id'];
$select = "SELECT * FROM beneficary where ben_id=$sid";
$con=OpenCon();
$select_query=mysqli_query($con,$select);
$row = mysqli_fetch_assoc($select_query);
if(isset($_POST['submit']))
{
$from =$_SESSION['usr_id'];
$amount = $_POST['amount'];

$select = "SELECT * from customer where cust_id=$from";
$select_query = mysqli_query($con,$select);
$row1 = mysqli_fetch_array($select_query); // returns array or output of user from which the amount is to be transferred.

$receiver = "SELECT * from beneficary where ben_id=$sid ";
$query = mysqli_query($con,$receiver);
$row2 = mysqli_fetch_array($query);


if (($amount)<0)
{
echo '<script>';
echo ' alert("Oops! Negative values cannot be transferred")'; 
echo '</script>';
}
else if($amount > $row1['balance']) 
{
echo '<script>';
echo ' alert("Bad Luck! Insufficient Balance")';
echo '</script>';
}
// constraint to check zero values
else if($amount == 0){
echo "<script>";
echo "alert('Oops! Zero value cannot be transferred')";
echo "</script>";
}
else {
$newbalance = (($row1['balance']) - $amount);
echo $amount;
$new = "UPDATE `customer` SET `balance` = $newbalance WHERE `customer`.`cust_id` = $from";
mysqli_query($con,$new);
$sender = $row1['f_name'];
$receivr = $row2['ben_name'];
// $insert = "INSERT INTO transfer(`sender`, `receiver`, `amount`) VALUES ('$sender','$receivr','$amount')";
// $query=mysqli_query($con,$insert);

if($query){
echo "<script> alert('Transaction Successful');
</script>";

}
$newbalance= 0;
$amount =0;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./styles/transfer.css">
    <title>Amount Transfer</title>
</head>

<body>
<div class="title">
        Transfer Money
    </div>
<div class="bg">
<div class="container">
<br>
<br>
<div class="row">
<form method="POST" name="send">
<br><br>
<label style="color: black; ">Amount to be transferred:</label>
<input type="number" class="form-control" step="0.01" name="amount" required>   
<br><br>
<div class="text-center" >
<button class="btn btn-danger" name="submit" type="submit">Transfer</button>
</form>
</div>
</div>
</div>
</body>
</html>