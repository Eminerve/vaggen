<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <title>navigation</title>
  </head>
  <header>
    <div class="logo">
      <a href="index.php"><img src="images/logo1.png" alt="logo väggen vaggen" width="100px" height="100px"></a>
    </div>

    <div class="barre_nav">
      <ul>
        <li> <a href="#">Video</a></li>
        <li><a href="#">Daily</a></li>
        <li><a href="weekly.php">Weekly</a></li>
        <li><a href="monthly.php">Monthly</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>

    <div class="instagram">
      <a href="https://www.instagram.com/vaggensickla/?hl=fr" target="_blank"><img src="images\ig_bc.png" alt="väggen instagram" width="20px"></a>
    </div>
  </header>


<body>

<style media="screen">
html{
font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
}

body{
margin: 0;
width: auto;
}

/* header */
header{
margin: auto;
padding: 5px 50px 5px 50px;
height: 6em;
width: 100%;
background-color: #1B1C1F;
display: flex;
flex-direction: row;
align-content: center;
align-items: center;
box-shadow: 0 24px 12px lightGray;
}

header ul{
display: flex;
flex-direction: row;
list-style: none;
text-align: center;
align-items:center;
margin: 0em;
margin-left: 2rem;
color: #000;
border-right: solid 0.5px lightGray;
padding-right: 40px;
height: 6em;
}

header li{
list-style: none;
text-align: center;
padding: 0 15px 0 15px;
font-size: 100%;
text-transform: uppercase;
}

header li:hover{
color: #999;
}

.logo {
width: 10%;
align-items: center;
}

.barre_nav{
width: 78%;
}

header a{
  text-decoration: none;
  color: #fff;
  font-weight: 600;
  letter-spacing: 0.05em;
  font-size: 14px;
}

header a:hover{
  color: #777;
}


.instagram {
  display: flex;
  width: 12%;
  height: 6em;
  margin-right: 3rem;
  justify-content: center;
  align-content: center;
  align-items: center;
}

@media only screen and (max-width: 750px) {
  header ul{
  padding-right: 20px;
  }

  }
</style>
  </body>

  </body>
</html>
