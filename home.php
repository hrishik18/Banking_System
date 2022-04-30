<!DOCTYPE html>

<html>
<title>
  Main Page
</title>
<!-- <link rel="stylesheet" href="home.css"> <link rel="preconnect" href="https://fonts.googleapis.com"> -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Questrial&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="./styles/nav.css">

<head>
  </div>
</head>

<body>
  <script src="https://kit.fontawesome.com/c07a043b71.js" crossorigin="anonymous"></script>
  <div class="container">
  </div>
</body>
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
          <a href="credit_card_form.html">Apply</a>
          <a href="credit_card_form.html">View</a>
        </div>
      </div>
      </div>
    <div class="column">
      <div class="dropdown">
        <button class="dropbtn" id="deb">Debit Card</button>
        <div class="dropdown-content" id="cred_cont">
          <a href="debit_card_form.html">Apply</a>
          <a href="debit_card_form.html">View</a>
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
            <a href="fd_form.html">Apply</a>
            <a href="fd_form.html">View</a>
          </div>
        </div>
        </div>
      <div class="column">
        <div class="dropdown">
          <button class="dropbtn" id="loan">Loan</button>
          <div class="dropdown-content" id="cred_cont">
            <a href="loan_form.html">Apply</a>
            <a href="loan_form.html">View</a>
          </div>
        </div>
        </div>
      </div>

</div>
<style>

  * {
    box-sizing: border-box;
  }

  .mySlides {
    display: none;
  }

  .container {
    float: right;
  }

  body {
    background-color: #360e24;
    box-sizing: border-box;
  }

  /* Slideshow container */
  .slideshow-container {
    position: absolute;
    margin: auto;
    float: right;

  }

  img {
    height: 700px;
    width: 70%;
    float: right;
    margin-right: 0;
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

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }


  .mySlides fade
</style>
</head>

<body>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="images\1.png">

    </div>

    <div class="mySlides fade">
      <img src="images\1.png">

    </div>

    <div class="mySlides fade">
      <img src="images\1.png">

    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000);
    }

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