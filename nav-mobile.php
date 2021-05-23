<!DOCTYPE html>
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
body {
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
}
@media only screen and (max-width: 600px) {
  .mobile-container {
    max-width: 600px;
    margin: auto;
  }

  .topnav {
    overflow: hidden;
    background-color: #1B1C1F;
    position: relative;
  }

  .topnav #myLinks {
    display: none;
  }

  .topnav a {
    float: left;
    color: white;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 15px;
    text-transform: uppercase;
  }

  .topnav a.icon {
    float: right;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .active {
    color: white;
  }

  .topnav .logo img{
    width: 60px;
    height: 60px;
  }
}
</style>
</head>
<body>

<!-- Simulate a smartphone / tablet look -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="index.php" class="active logo"><img src="images/logo1.png" alt="logo väggen vaggen" width="100px" height="100px"></a>
  <div id="myLinks">
    <a href="#t">Videos</a>
    <a href="daily.php">Daily</a>
    <a href="weekly.php">Weekly</a>
    <a href="monthly.php">Monthly</a>
    <a href="#">About</a>
    <a href="https://www.instagram.com/vaggensickla/?hl=fr" target="_blank"><img src="images\ig_bc.png" alt="väggen instagram" width="15px"></a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!-- End smartphone / tablet look -->
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html>
