<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <link rel="stylesheet" href="login.css"/>
</head>
<body>

<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="welcome.php">
      <img src="logo.svg" alt="Weight Loss" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button has-background-light">
              <span class="icon">
              <i class="fas fa-user"></i>
              </span>
              <span>
              <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button has-background-white has-text-dark" href="logout.php">
              <span class="icon">
              <i class="fas fa-sign-out-alt"></i>
              </span>
              <span>Sign out</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>


<div class="section">
  <div class="columns">
    <aside class="column is-2">
      <nav class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a class="is-active">Dashboard</a></li>
          <li><a>Customers</a></li>
        </ul>
        <p class="menu-label">
          Administration
        </p>
        <ul class="menu-list">
          <li><a>Team Settings</a></li>
          <li>
            <a class="">Manage Your Team</a>
            <ul>
              <li><a>Members</a></li>
              <li><a>Plugins</a></li>
              <li><a>Add a member</a></li>
            </ul>
          </li>
          <li><a>Invitations</a></li>
          <li><a>Cloud Storage Environment Settings</a></li>
          <li><a>Authentication</a></li>
        </ul>
        <p class="menu-label">
          Transactions
        </p>
        <ul class="menu-list">
          <li><a>Payments</a></li>
          <li><a>Transfers</a></li>
          <li><a>Balance</a></li>
        </ul>
      </nav>
    </aside>
    
    <main class="column">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="title">Dashboard</div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <button type="button" class="button is-small">
              March 8, 2017 - April 6, 2017
            </button>
          </div>
        </div>
      </div>
      
      <div class="columns is-multiline">
        <div class="column">
          <div class="box">
            <div class="heading">Top Seller Total</div>
            <div class="title">56,950</div>
            <div class="level">
              <div class="level-item">
                <div class="">
                  <div class="heading">Sales $</div>
                  <div class="title is-5">250,000</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Overall $</div>
                  <div class="title is-5">750,000</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Sales %</div>
                  <div class="title is-5">25%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="heading">Revenue / Expenses</div>
            <div class="title">55% / 45%</div>
            <div class="level">
              <div class="level-item">
                <div class="">
                  <div class="heading">Rev Prod $</div>
                  <div class="title is-5">30%</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Rev Serv $</div>
                  <div class="title is-5">25%</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Exp %</div>
                  <div class="title is-5">45%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="heading">Feedback Activity</div>
            <div class="title">78% &uarr;</div>
            <div class="level">
              <div class="level-item">
                <div class="">
                  <div class="heading">Positive</div>
                  <div class="title is-5">1560</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Negative</div>
                  <div class="title is-5">368</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Pos/Neg %</div>
                  <div class="title is-5">77% / 23%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="heading">Orders / Returns</div>
            <div class="title">75% / 25%</div>
            <div class="level">
              <div class="level-item">
                <div class="">
                  <div class="heading">Orders $</div>
                  <div class="title is-5">425,000</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Returns $</div>
                  <div class="title is-5">106,250</div>
                </div>
              </div>
              <div class="level-item">
                <div class="">
                  <div class="heading">Success %</div>
                  <div class="title is-5">+ 28,5%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="columns is-multiline">
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              Expenses: Daily - $700
            </p>
            <div class="panel-block">
              <figure class="image is-16x9">
                <img src="https://placehold.it/1280x720">
              </figure>
            </div>
          </div>
        </div>
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              Refunds: Daily - $200
            </p>
            <div class="panel-block">
              <figure class="image is-16x9">
                <img src="https://placehold.it/1280x720">
              </figure>
            </div>
          </div>
        </div>
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              Something
            </p>
            <div class="panel-block">
              <figure class="image is-16x9">
                <img src="https://placehold.it/1280x720">
              </figure>
            </div>
          </div>
        </div>
        <div class="column is-6">
          <div class="panel">
            <p class="panel-heading">
              Something Else
            </p>
            <div class="panel-block">
              <figure class="image is-16x9">
                <img src="https://placehold.it/1280x720">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>




</body>
</html>