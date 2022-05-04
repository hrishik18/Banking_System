<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="./styles/reg.css">
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include 'includes/sess.php'; 
    include 'includes/dbconnect.php';
    include 'includes/namespace.html';
    $contactErr = $fnameErr = $lnameErr = $addhErr = $dobErr = $cityErr = $balErr = "";
    $fname = $lname = $contact = $addh = $city = $dob = $bal = "";
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
    if (empty($_POST["city"])) {
    $cityErr = "city is required";
    } else {
    $city = input_data($_POST["city"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
    $cityErr = "Only alphabets and white space are allowed";
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
    if (empty($_POST["balance"])) {
    $balErr = "Balance is required";
    } else {
    $bal = input_data($_POST["balance"]);
    // check if mobile no is well-formed
    if (!preg_match("/^[0-9]*$/", $contact)) {
    $balErr = "Only numeric value is allowed.";
    }
    }
    if (empty($_POST["addh"])) {
    $addhErr = "Aadhar card number is required";
    } else {
    $addh = input_data($_POST["addh"]);

    if (!preg_match("/^[0-9]*$/", $addh)) {
    $addhErr = "Only numeric value is allowed.";
    }
    }
    if (empty($_POST["dob"])) {
    $dobErr = "DOB is required";
    } else {
    $dob = $_POST["dob"];
    $dob = date("Y-m-d", strtotime($dob));
    }
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
        Registeration form
    </div>
    <div class="container">
        <br>
        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row">
                <label for="fname">First Name: </label>
                <input type="text" id="fname" name="fname" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $fnameErr; ?>
            </span>

            <div class="row">
                <label for="lname">Last Name: </label>
                <input type="text" id="lname" name="lname" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $lnameErr; ?>
            </span>
            <br>
            <div class="row">
                <label for="birthday">Date of birth: </label>
                <input type="date" id="birthday" name="dob">
            </div>
            <span class="error">
                <?php echo $dobErr; ?>
            </span>
            <div class="row">
                <label for="Contact">Contact: </label>
                <input type="text" id="Contact" name="contact" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $contactErr; ?>
            </span>
            <br>
            <div class="row">
                <label for="Age">Aadhar card no. </label>
                <input type="text" id="Age" name="addh" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $addhErr; ?>
            </span>
            <br>
            <div class="row">
                <label for="Age">City: </label>
                <input type="text" id="Age" name="city" placeholder="Enter..">
            </div>
            <br>
            <span class="error">
                <?php echo $cityErr; ?>
            </span>
            <div class="row">
                <label for="balance">Balance: </label>
                <input type="text" id="balance" name="balance" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $balErr; ?>
            </span>
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
        $con = OpenCon();
        $id = $_SESSION['usr_id'];
        $insert = "UPDATE customer SET `f_name`='$fname' ,`l_name`='$lname',`dob`='$dob',`contact`='$contact',`aadhar_num`='$addh',`city`='$city',`balance`='$bal' WHERE `cust_id`='$id' ";

        $query = mysqli_query($con, $insert);
        if ($query) {
            echo "<script> alert('Account made succesfully!');
        </script>";
        }
        header("Location: home.php");
    }
    ?>

</body>

</html>