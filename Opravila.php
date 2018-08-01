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
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Opravila</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/calendar.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/calendar.js"></script>
</head>
<body id="w-background">



    <nav class="navbar fixed-top navbar-expand-lg navbar-light">

        <a class="navbar-brand poppins font-size-normal font-weight-400" href="#">
            Opravila
        </a>


        <div class="dash dash-fw">
             <span class="hamburger display-inlineblock hamburger-menu is-active" id="hamburger-1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </span>
        </div>

        <ul class="nav navbar-nav flex-row justify-content-between ml-auto text-white">
         <span class="icon">
              <i class="far fa-user padding-5-right"></i>
              </span>
            <span class="padding-15-right">
              <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>
              </span>

            <a class="button has-background-white text-secondary" href="logout.php">
              <span class="icon">
              <i class="fas fa-power-off"></i>
              </span>
                <span>Odjava</span>
            </a>
        </ul>
    </nav>
    <div id="main">
    <div id="mySidenav" class="sidenav">
        <div class="poppins font-weight-500 menu-title text-upper">Meni</div>

        <ul class="no-dots">
            <li><a href="welcome.php"><i class="fas fa-tachometer-alt icon-padding"></i>Pregled</a></li>
            <li class="li-active"><a href="Opravila.php"><i class="fas fa-tasks icon-padding"></i>Opravila</a></li>
            <li><a href="#"><i class="fas fa-external-link-square-alt icon-padding"></i>Napredek</a></li>
            <li><a href="#"><i class="far fa-calendar-alt icon-padding"></i>Koledar</a></li>
            <li><a href="#"><i class="fas fa-thumbtack icon-padding"></i>Obvestila</a></li>
            <li><a href="#"><i class="fas fa-utensils icon-padding"></i>Kuhanje</a></li>
            <li><a href="#"><i class="fas fa-chart-line icon-padding"></i>Statistika</a></li>
            <li><a href="#"><i class="fas fa-shopping-cart icon-padding"></i>Nakupi</a></li>
        </ul>
    </div>

        <div class="container-menu" id="auto-dash">
            <div class="row"></div>
        </div>


</body>
</html>