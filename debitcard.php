<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/styles/form_d.css">
<title>Debit Card</title>

<body>


    <?php
    $contactErr = $fnameErr = $lnameErr = $custidErr = $maxlimitErr = "";
    $fname = $lname = $contact = $custid = $maxlimit = "";
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
        Apply for your Debit Card now!
    </div>
    <div class="container">
        <br>
        <div class="row">
            <label for="fname"><b>First Name: </b></label>
            <input type="text" id="fname" name="firstname" placeholder="Enter..">
        </div>

        <div class="row">
            <label for="lname"><b>Last Name: </b></label>
            <input type="text" id="lname" name="lastname" placeholder="Enter..">
        </div>

        <br></br>
        <div class="row">
            <label for="Contact"><b>Contact: </b></label>
            <input type="text" id="Contact" name="Contact" placeholder="Enter..">
        </div>

        <div class="row">
            <label for="Age"><b>Customer id: </b></label>
            <input type="text" id="Age" name="Age" placeholder="Enter..">
        </div>
        <br></br>
        <br></br>
        <div class="row">
            <label for="Age"><b>Maximum Limit: </b></label>
            <input type="text" id="Age" name="Age" placeholder="Enter..">
        </div>
        <br></br>
        <div class="row">
            <label for="birthday"><b>DOB: </b></label>
            <input type="date" id="birthday" name="birthday">
        </div>
        <br>
        <div id="submit">
            <input type="submit" value="Submit">
        </div>
        <br>
        <br>
        <br>
    </div>
    </div>
</body>

</html>