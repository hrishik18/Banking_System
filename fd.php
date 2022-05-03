<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./styles/form_f.css">
<link rel="stylesheet" href="./styles/nav.css">
<title>Fixed Deposit</title>

<body>
    <?php include 'includes/sess.php'; 
    include('./includes/namespace.html'); ?>
    <?php
    $contactErr = $fnameErr = $lnameErr = $custidErr = $pamtErr = $rateErr = "";
    $fname = $lname = $contact = $custid = $pamt = $time = $rate = "";
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
        if (empty($_POST["pamt"])) {
            $pamtErr = "Max limit is required";
        } else {
            $pamt = input_data($_POST["pamt"]);
            // check if mobile no is well-formed  
            if (!preg_match("/^[0-9]*$/", $pamt)) {
                $pamtErr = "Only numeric value is allowed.";
            }
            if ($pamt < 0) {
                $pamtErr = "Cant be negative";
            }
        }
        //form input
        if (!isset($_POST['rate'])) {
            $rateErr = "You forgot to select your Rate & Maturity period!";
        } else {
            $time = input_data($_POST["rate"]);
            if ($time == "6m")
                $rate = 0.75;
            elseif ($time == "1y")
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

    <div class="title"> Apply for your Fixed Deposit !
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
                <label for="rate"><b>Rate and Maturity Period: </b></label>
                <select name="rate" id="rate">
                    <option>Select Option</option>
                    <option value="6m">0.75% pa for 6 months</option>
                    <option value="1y">1.85% pa for 1 year</option>
                    <option value="2y">2.70% pa for 2 years</option>
                    <option value="3y">3.95% pa for 3 years</option>
                </select>
            </div>
            <span class="error"> <?php echo $rateErr; ?> </span>
            <div class="row">
                <label for="Age">Principal amount: </label>
                <input type="text" id="Age" name="pamt" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $pamtErr; ?> </span>
            <br></br>
            <br></br>
            </br>
            </br>
            <div id="submit">
                <input type="submit" value="submit">
            </div>
        </form>

    </div>
    </div>
</body>

</html>