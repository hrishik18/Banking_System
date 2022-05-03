<?php
include 'includes/dbconnect.php';
session_start();
$select="SELECT * FROM `transaction` WHERE `trans_cust_id`= '" . $_SESSION['usr_id'] . "'";
$con=OpenCon();
$select_query=mysqli_query($con,$select);
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>THIS Bank</title>
</head>

<body style="background-color: #0000ff;">
<div class="bg">
<div class="container">
<div class="row">
<h2 class="text-center" style="margin-top: 100px; color: #ffff00;">History</h2>
<br>

<div class="col-md-offset-2 col-md-8">
<table class="table">
<thead>
<tr>
<th></th>
<th>Receiver</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<?php 
$row=mysqli_fetch_array($select_query);


while($row=mysqli_fetch_assoc($select_query)){
    // $select_f="SELECT ben_name FROM beneficary WHERE ben_id='" . $row['trans_ben_id'] . "' ";
    // $select_query1=mysqli_query($con,$select_f);
    // $select_s="SELECT fname FROM customer WHERE cust_id= '" . $_SESSION['usr_id'] . "' ";
    // $select_query2=mysqli_query($con,$select_s);
    // $row1=mysqli_fetch_array($select_query1);
    // $row2=mysqli_fetch_array($select_query2);
?>
<tr style="color: black">
<td ><?php echo $row['trans_id']?></td>
<td ><?php echo $row['trans_date']?></td>
<td ><?php echo $row['trans_cust_id']?></td>
<td ><?php echo $row['trans_ben_id']?></td>
<td ><?php echo $row['trans_amt']?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</body>

</html>