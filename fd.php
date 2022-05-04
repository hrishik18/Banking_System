<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/styles/form_f.css">
<title>Fixed Deposit</title>

<body>
    <?php
    $contactErr = $fnameErr = $lnameErr = $custidErr = $prinErr=$rateErr = "";
    $fname = $lname = $contact = $custid = $rate = $prin = "";
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
        if (empty($_POST["rate"])) {
            $rateErr = "Rate is required";
        } else {
            $rate = input_data($_POST["rate"]);
            // check if mobile no is well-formed
            if (!preg_match("/^[0-9]*$/", $rate)) {
                $rateErr = "Only numeric value is allowed.";
            }
            //check mobile no length should not be less and greator than 10
            if (strlen($rate) != 10) {
                $rateErr = "Mobile no must contain 10 digits.";
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

    if (isset($_POST['submit'])) {
        //add in data base
    }
    ?>

    <div class="title">
        Apply for your Fixed Deposit !
    </div>
    <div class="container">
        <br>
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

        <br></br>
        <div class="row">
            <label for="Contact">Contact: </label>
            <input type="text" id="Contact" name="contact" placeholder="Enter..">
        </div>
        <span class="error">
            <?php echo $contactErr; ?>
        </span>

        <div class="row">
            <label for="Age">Customer id: </label>
            <input type="text" id="Age" name="custid" placeholder="Enter..">
        </div>
        <span class="error">
            <?php echo $custidErr; ?>
        </span>
        <br></br>
        <div class="row">
            <label for="Age">Customer id: </label>
            <input type="text" id="Age" name="custid" placeholder="Enter..">
        </div>
        <span class="error">
            <?php echo $custidErr; ?>
        </span>
        <br></br>
        <div class="row">
            <label for="prin"><b>Principle Amount: </label>
            <input type="text" id="prin" name="prin" placeholder="Enter..">
        </div>
        <span class="error">
            <?php echo $prinErr; ?>
        </span>
        <br></br>
        <div class="row">
            <label for="rate"><b>Rate and Maturity Period: </b></label>
            <input type="text" id="rate" name="rate" placeholder="Enter..">
        </div>
        <span class="error">
            <?php echo $rateErr; ?>
        </span>
        <br></br>
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
