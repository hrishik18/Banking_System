<header>
<link rel="stylesheet" href="./styles/nav.css">
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
    </div>
</header>