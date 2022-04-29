<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="./styles/ben.css">
</head>

<body>

    <?php
    $ifcsErr = $branchErr = $benidErr = "";
    $ifcs = $branch  = $benid =  "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["branch"])) {
            $branchErr = "Branch is required";
        } else {
            $name = input_data($_POST["branch"]);

            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $branchErr = "Only alphabets and white space are allowed";
            }
        }
        if (empty($_POST["ifcs"])) {
            $ifcsErr = "last Name is required";
        } else {
            $name = input_data($_POST["ifcs"]);
            if (!preg_match("[^A-Za-z0-9]+/", $name)) {
                $ifcsErr = "Only alphabets and numerics are allowed";
            }
        }
        if (empty($_POST["benid"])) {
            $benidErr = "Beneficiary id is required";
        } else {
            $benid = input_data($_POST["benid"]);
            if (!preg_match("/^[0-9]*$/", $benid)) {
                $benidErr = "Only numeric value is allowed.";
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


    <div class="title">
        Add your Beneficiary !
    </div>
    <div class="container">
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="row">
                <label for="benid"><b>Beneficiary ID: </b></label>
                <input type="text" id="benid" name="benid" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $benidErr; ?> </span>
            <br></br>
            <div class="row">
                <label for="Contact"><b>IFSC code: </b></label>
                <input type="text" id="Contact" name="ifcs" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $ifcsErr; ?> </span>
            <br></br>
            <div class="row">
                <label for="Contact"><b>Branch: </b></label>
                <input type="text" id="Contact" name="branch" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $branchErr; ?> </span>
            <br></br>
            <div id="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
        <br>
        <br>
        <br>

    </div>
    </div>
</body>

</html>