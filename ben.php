<?php
include 'includes/dbconnect.php';
include 'includes/sess.php';
include('./includes/namespace.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiary</title>
    <link rel="stylesheet" href="./styles/ben.css">
    <link rel="stylesheet" href="./styles/nav.css">
</head>

<body>
    
    <?php
    
    $ifcsErr = $branchErr = $benidErr = $ben_nameErr ="";
    $ifcs = $branch  = $benid =  $ben_name="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["branch"])) {
            $branchErr = "Branch is required";
        } else {
            $branch = input_data($_POST["branch"]);

            if (!preg_match("/^[a-zA-Z ]*$/", $branch)) {
                $branchErr = "Only alphabets and white space are allowed";
            }
        }
        if (empty($_POST["ben_name"])) {
            $ben_nameErr = "Name is required";
        } else {
            $ben_name = input_data($_POST["ben_name"]);

            if (!preg_match("/^[a-zA-Z ]*$/", $ben_name)) {
                $ben_nameErr = "Only alphabets and white space are allowed";
            }
        }
        if (empty($_POST["ifcs"])) {
            $ifcsErr = "IFCS code is required";
        } else {
            $ifcs = input_data($_POST["ifcs"]);
            if (!preg_match("/^[0-9]*$/", $ifcs)) {
                $ifcsErr = "Only numerics are allowed";
            }
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
        Add your Beneficiary !
    </div>
    <div class="container">
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row">
                <label for="ben_name"><b>Name: </b></label>
                <input type="text" id="ben_name" name="ben_name" placeholder="Enter..">
            </div>
            <span class="error"> <?php echo $ben_nameErr; ?> </span>
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
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
        <br>
        <br>
        <br>

    </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $con = OpenCon();
        $id= $_SESSION['usr_id'];
        $insert = "INSERT INTO beneficary(`branch`,`ifsc_code`,`max_limit`,`ben_name`,`ben_cust_id`) VALUES ('$branch','$ifcs',0,'$ben_name',$id)";
        $query = mysqli_query($con, $insert);
         
        if ($query) {
            echo "<script> alert('Your beneficiary has been added succesfully!');
        </script>";
        }
    }
    ?>
</body>

</html>