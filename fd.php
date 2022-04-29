<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./styles/form_f.css">
<title>Fixed Deposit</title>

<body>
    <?php
    $contactErr = $fnameErr = $lnameErr = $custidErr = $pamtErr = "";
    $fname = $lname = $contact = $custid = $pamt = "";
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

    <div class="title"> Apply for your Fixed Deposit !
    </div>
    <div class="container">
        <br>
        <form method="POST" action="creditcard.html">

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
                <label for="Age">Customer id: </label>
                <input type="text" id="Age" name="custid" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $custidErr; ?> </span>
            <br></br>
            <div class="row">
                <label for="Age">Principal amount: </label>
                <input type="text" id="Age" name="pamt" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $pamtErr; ?> </span>
            <br>

            <div id="submit">
                <input type="submit" value="Submit">
            </div>
            <br>
            <br>
            <br>
        </form>
    </div>
    </div>
</body>

</html>