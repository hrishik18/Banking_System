<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="styles/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    $contactErr = $fnameErr = $lnameErr = $addhErr = $panErr = $dobErr = $cityErr = $emailErr = "";
    $fname = $lname = $contact = $addh = $pan = $city = $email =  $dob = "";
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
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = input_data($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["dob"])) {
            $dobErr = "DOB is required";
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
            <div class="row">
                <label for="birthday"><b>Date of birth: </b></label>
                <input type="date" id="birthday" name="dob">
            </div>
            <span class="error">
                <?php echo $dobErr; ?>
            </span>
            <br></br>
            <div class="row">
                <label for="Contact">Contact: </label>
                <input type="text" id="Contact" name="contact" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $contactErr; ?>
            </span>
            <div class="row">
                <label for="Age">Aadhar card no. </label>
                <input type="text" id="Age" name="addh" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $addhErr; ?>
            </span>
            <br></br>
            <div class="row">
                <label for="Age">city: </label>
                <input type="text" id="Age" name="city" placeholder="Enter..">
            </div>
            <span class="error">
                <?php echo $cityErr; ?>
            </span>
            </br>
            <div id="submit">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
        <br>
    </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        //add in data base 
    }
    ?>

</body>

</html>