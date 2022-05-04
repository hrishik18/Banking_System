<?php
include 'includes/sess.php';
// include('./includes/namespace.html');
include_once 'includes/dbconnect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bank</title>
    <link rel="stylesheet" href="./styles/vcard.css">
    <link rel="stylesheet" href="./styles/nav.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="col-lg-2">
        <div class="container">
            <article class="row">
                <section class="col-lg-8">
                    <div class="page-header">
                        <h2>Debit Card information</h2>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <th>Debit card id</th>
                            <th>CVV</th>
                            <th>Valid from</th>
                            <th>Valid through</th>
                            <th>max limit</th>
                            <th>Card Number</th>
                        </thead>
                        <?php

                        $ins_sql = "SELECT * FROM debit_card WHERE deb_cust_id= '" . $_SESSION['usr_id'] . "' " ;
                        $con = OpenCon();
                        $run_sql = mysqli_query($con, $ins_sql);

                        while ($rows = mysqli_fetch_array($run_sql)) {

                            echo '
					    <tbody>
					      <tr>
					        <td>' . $rows['deb_card_id'] . '</td>
					        <td>' . $rows['cvv'] . '</td>
					        <td>' . $rows['valid_from'] . '</td>
					        <td>' . $rows['valid_through'] . '</td>
					        <td>' . $rows['max_limit'] . '</td>
                            <td>' . $rows['card_number'] . '</td>
					      </tr>
					    </tbody>
					';
                        }
                        ?>
                    </table>

            </article>
            </section>


        </div>
    </div>

</body>

</html>