<!DOCTYPE html>
<html>

<head>
    <title>Credit Card</title>
    <link rel="stylesheet" href="./styles/form_c.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('./includes/namespace.php'); ?>
    <?php
    include 'includes/dbconnect.php';
    $contactErr = $fnameErr = $lnameErr = $maxlimitErr = "";
    $fname = $lname = $contact  = $maxlimit = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "first Name is required";
        } else {
            $fname = input_data($_POST["fname"]);

            if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
                $fnameErr = "Only alphabets and white space are allowed";
            }
        }
        if (empty($_POST["lname"])) {
            $lnameErr = "last Name is required";
        } else {
            $lname = input_data($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
                $lnameErr = "Only alphabets and white space are allowed";
            }
        }
        if (empty($_POST["contact"])) {
            $contactErr = "Mobile no is required";
        } else {
            $contact = input_data($_POST["contact"]);
            // check if mobile no is well-formed
            if (!preg_match("/^[0-9]*$/", $contact)) {
                $contactErr = "Only numeric value is allowed.";
            }
            //check mobile no length should not be less and greator than 10
            if (strlen($contact) != 10) {
                $contactErr = "Mobile no must contain 10 digits.";
            }
        }
        if (empty($_POST["maxlimit"])) {
            $maxlimitErr = "Max limit is required";
        } else {
            $maxlimit = input_data($_POST["maxlimit"]);
            // check if mobile no is well-formed
            if (!preg_match("/^[0-9]*$/", $maxlimit)) {
                $maxlimitErr = "Only numeric value is allowed.";
            }
            if ($maxlimit < 0) {
                $maxlimitErr = "Cant be negative";
            }
        }
        $validf = new DateTime();
        //custid is auto filled
    }
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="title">
        Apply for your Credit Card now!
    </div>
    <div class="container">
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row">
                <label for="fname">First Name: </label>
                <input type="text" id="fname" name="fname" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $fnameErr; ?> </span>

            <div class="row">
                <label for="lname">Last Name: </label>
                <input type="text" id="lname" name="lname" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $lnameErr; ?> </span>

            <br></br>
            <div class="row">
                <label for="Contact">Contact: </label>
                <input type="text" id="Contact" name="contact" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $contactErr; ?> </span>

            <div class="row">
                <label for="Age">Maximum Limit: </label>
                <input type="text" id="Age" name="maxlimit" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $maxlimitErr; ?> </span>
            <br>
            <div id="submit">
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
        <br>
    </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $id = $_SESSION['usr_id'];
        $insert = "UPDATE customer SET `f_name`='$fname' ,`l_name`='$lname',`dob`='$dob',`contact`='$contact',`aadhar_num`='$addh',`city`='$city',`balance`='$bal' WHERE `cust_id`='$id' ";

        $query = mysqli_query($con, $insert);
        if ($query) {
            echo "<script> alert('credit card made succesfully!');
        </script>";
        }
        header("Location: v_cards.php");
    }
    ?>

</body>

</html>