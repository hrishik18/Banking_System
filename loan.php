<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/form_l.css">
    <link rel="stylesheet" href="./styles/nav.css">
    <title>Loan</title>
</head>

<body>

    <?php include 'includes/sess.php'; 
    include('./includes/namespace.html'); ?>
    <?php
    include 'includes/dbconnect.php';
    $contactErr = $fnameErr = $lnameErr = $typeErr = $amtErr = $rateErr = "";
    $fname = $lname = $contact = $type = $amt = $emi = $rate = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "first Name is required";
        } else {
            $name = input_data($_POST["fname"]);

            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $fnameErr = "Only alphabets and white space are allowed";
            }
        }
        if (empty($_POST["lname"])) {
            $lnameErr = "last Name is required";
        } else {
            $name = input_data($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
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
        if (empty($_POST["amt"])) {
            $amtErr = "Amount is required";
        } else {
            $amt = input_data($_POST["amt"]);
            // check if mobile no is well-formed  
            if (!preg_match("/^[0-9]*$/", $amt)) {
                $amtErr = "Only numeric value is allowed.";
            }
            if ($amt < 0) {
                $amtErr = "Cant be negative";
            }
        }
        //form input
        if (!isset($_POST['rate'])) {
            $rateErr = "You forgot to select your Rate & Maturity period!";
        } else {
            $time = input_data($_POST["rate"]);
            if ($time == "6m") {
                input_data($_POST["amt"]);
                $rate = 0.75;
            } elseif ($time == "1y")
                $rate = 1.85;
            elseif ($time == "2y")
                $rate = 2.7;
            else
                $rate = 3.95;
        }
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
        Apply for your Loan !
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
            <br></br>
            <div class="row">
                <label for="FD"><b>Loan Type: </b></label>
                <select name="type" id="type">
                    <option>Select Option</option>
                    <option value="home">Home</option>
                    <option value="car">Car</option>
                    <option value="education">Education</option>
                    <option value="personal">Personal</option>
                    <option value="gold">Gold</option>
                </select>
            </div>
            <span class="error"> <?php echo $typeErr; ?> </span>
            <br></br>
            <div class="row">
                <label for="Age">Loan Amount: </label>
                <input type="text" id="Age" name="amt" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $amtErr; ?> </span>
            <br>
            <div class="row">
                <label for="rate"><b>Rate and EMI: </b></label>
                <select name="rate" id="rate">
                    <option>Select Option</option>
                    <option value="6m">0.75% pa with 1000rs</option>
                    <option value="1y">1.85% pa with 850rs</option>
                    <option value="2y">2.70% pa with 600rs</option>
                    <option value="3y">3.95% pa for 350rs</option>
                </select>
            </div>
            <span class="error"> <?php echo $rateErr; ?> </span>
            <br></br>
            <div id="submit">
                <input type="submit" value="submit">
            </div>
        </form>
        <br>
        <br>
        <br>
    </div>
    </div>
</body>

</html>