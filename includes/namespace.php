<!DOCTYPE html>

<html>
<title>
  Main Page
</title>
<!-- <link rel="stylesheet" href="home.css"> <link rel="preconnect" href="https://fonts.googleapis.com"> -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="../styles/nav.css">

<body class="nav">
  <script src="https://kit.fontawesome.com/c07a043b71.js" crossorigin="anonymous"></script>

<div class="wrapper">
  <div class="sidenav">
    <h1><b>KJSC BANK</b></h1>
    <a href="home.html" class="active"><b>Home</b></a>
    <button class="dropdown-btn" onclick="myFunction()" id="butt"><i class="fas fa-caret-down"></i> Cards  </button>

    <div class="dropdown-container">
    <div class="column">
      <div class="dropdown">
        <button class="dropbtn" id="cred">Credit Card</button>
        <div class="dropdown-content" id="cred_cont">
          <a href="creditcard.php">Apply</a>
          <a href="v_cards.php">View</a>
        </div>
      </div>
      </div>
    <div class="column">
      <div class="dropdown">
        <button class="dropbtn" id="deb">Debit Card</button>
        <div class="dropdown-content" id="cred_cont">
          <a href="debitcard.php">Apply</a>
          <a href="v_cards.php">View</a>
        </div>
      </div>
      </div>
    </div>

    <button class="dropdown-btn" onclick="myFunction()" id="butt"><i class="fas fa-caret-down"></i> FD/Loan
    </button>
    <div class="dropdown-container">
      <div class="column">
        <div class="dropdown">
          <button class="dropbtn" id="fd">Fixed Deposit</button>
          <div class="dropdown-content" id="cred_cont">
            <a href="fd.php">Apply</a>
            <a href="fd.php">View</a>
          </div>
        </div>
        </div>
      <div class="column">
        <div class="dropdown">
          <button class="dropbtn" id="loan">Loan</button>
          <div class="dropdown-content" id="cred_cont">
            <a href="loan.php">Apply</a>
            <a href="loan.php">View</a>
          </div>
        </div>
        </div>
      </div>

      <a href="ben.php"><button class="dropdown-btn" id="fd">Beneficiary</button></a>
      <a href="transaction.php"><button class="dropdown-btn" id="fd">Transfer Money</button></a>
      <a href="trans_hist.php"><button class="dropdown-btn" id="fd">Transaction History</button></a>
      </div>

</div>
</div>
</div>
<style>

  * {
    box-sizing: border-box;
  }


  .container {
    float: right;
  }

  body {
    background-color: #360e24;
    box-sizing: border-box;
  }


  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  .active {
    background-color: #717171;
  }
</style>
</head>

  <script>

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }

    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("butt").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {

  var dropdowns = document.getElementsByClassName("dropdown-content");
  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}
}
  </script>
</body>
</html>
