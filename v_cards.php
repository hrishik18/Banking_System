<?php
include 'includes/sess.php';
include 'includes/dbconnect.php';
$select = "SELECT * FROM `credit_card` WHERE `cre_cust_id`='".$_SESSION['usr_id']."'";
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./styles/form_c.css">
    <link rel="stylesheet" href="./styles/nav.css">
    <title>Transaction</title>
</head>

<body>
    <?php include('./includes/namespace.html'); ?>
    <div class="title">
      Your credit card details
    </div>
    <br>
    <div class="bg">
            <div class="container" style="background-color:#d8d5e6;">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Credit card id</th>
                            <th>CVV</th>
                            <th>Valid from</th>
                            <th>Valid through</th>
                            <th>max limit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($select_query)) {
                            ?>
                            <tr style="color:black;font-family: 'Questrial', sans-serif; ">
                                <td><?php echo $row['cre_card_id'] ?></td>
                                <td><?php echo $row['cvv'] ?></td>
                                <td><?php echo $row['valid_from'] ?></td>
                                <td><?php echo $row['valid_through'] ?></td>
                                <td><?php echo $row['max_limit'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>