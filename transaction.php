<?php
include 'includes/dbconnect.php';
$select = "SELECT * FROM `beneficary`";
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
    <link rel="stylesheet" type="text/css" href="./styles/trans.css">
    <title>Transaction</title>
</head>

<body>
    <div class="title">
        Transfer Money with secure payment gateways!
    </div>
    <br>
    <div class="bg">
        <div class="row">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($select_query)) {
                            ?>
                            <tr style="color:black;font-family: 'Questrial', sans-serif; ">
                                <td><?php echo $row['ben_id'] ?></td>
                                <td><?php echo $row['ben_name'] ?></td>
                                <td><?php echo $row['branch'] ?></td>
                                <td><a href="transfer.php?id= <?php echo $row['ben_id'] ; ?>"> <button type="button" class="btn">Transfer</button></a></td> 
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



