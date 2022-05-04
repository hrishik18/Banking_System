<?php
include 'includes/sess.php';
include 'includes/dbconnect.php';
$select = "SELECT * FROM `customer` WHERE `cust_id`= '" . $_SESSION['usr_id'] . "'";
$con = OpenCon();
$select_query = mysqli_query($con, $select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="stylesheet" href="./styles/transfer.css">
    <title>Customer</title>
</head>

<body>
    <?php include('./includes/namespace.html'); ?>
    <div class="bg">
        <div class="container" style="width: 800px; margin-left: 450px;">
            <div class="row">
                <h2 class="text-center"><b>Account Details</b></h2>
                <br>

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>First name</th>
                                <th>last name</th>
                                <th>username</th>
                                <th>DoB</th>
                                <th>Contact</th>
                                <th>Aadhar card </th>
                                <th>City</th>
                                <th>balance</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($select_query)) {
                            ?>
                                <tr style="color: black; margin-left: 10px;">
                                    <td> </td>
                                    <td><?php echo $row['f_name'] ?></td>
                                    <td><?php echo $row['l_name'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['dob'] ?></td>
                                    <td><?php echo $row['contact'] ?></td>
                                    <td><?php echo $row['aadhar_num'] ?></td>
                                    <td><?php echo $row['city'] ?></td>
                                    <td><?php echo $row['balance'] ?></td>
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