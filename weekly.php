<html lang="en" dir="ltr">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon1/favicon-16x16.png">
    <link rel="manifest" href="favicon1/site.webmanifest">
    <link rel="mask-icon" href="favicon1/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Väggen.se</title>
  </head>
  <body>

    <!-- Barre de navigation -->
    <div class="nav-screen">
      <?php include 'navigation.php'; ?>
    </div>

    <div class="nav-mob">
      <?php include 'nav-mobile.php'; ?>
    </div>

    <div class="Banniere">
      <img class="Banniere-img screen" src="images-week\2021\Week15.jpg" height="auto" alt="banner photo väggen week 15 Cheat Kidkash Kiss Spray-it Konstjord">
      <img class="Banniere-img mobile" src="images-week\2021\Week15-mini.png" height="auto" alt="banner photo väggen week 15 Cheat Kidkash Kiss Spray-it Konstjord">
      <span class="Banniere-txt"><em>Week 15</em></span>
    </div>

    <div class="descriptif_artist-week">
      <p> <strong><a href="https://www.instagram.com/cheat_122/?hl=fr" target="_blank">Cheat</a>, <a href="https://www.instagram.com/kidkash78/?hl=fr" target="_blank">Kidkash</a>, <a href="https://www.instagram.com/kiss_cas_pyc/?hl=fr" target="_blank">Kiss</a></strong>
        <br><em>Week 15</em>
        <br><br>For this first week, this collaboration perfectly highlights Väggen's spirit: letters, characters and the right amount of humor and messages. <br>Thanks to them !
      </p>
      <p>
        You can find all the photos of the wall on the <a href="https://www.instagram.com/vaggensickla/?hl=fr" target="_blank">Väggen intasgram</a> or follow the artists' news by clicking on their name!
      </p>
    </div>

  </body>
  <style media="screen">

    html{
    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    }

    body{
    margin: 0;
    width: auto;
    overflow-x: hidden;
    }

/* Brarre de navigation */
    /* au dessus de 600px */
    .nav-mob{
      display: none;
    }


    /* en dessous de 600px */
    @media only screen and (max-width: 600px) {
      .nav-mob{
        display: contents;
      }

      .nav-screen{
        display: none;
      }

      .screen{
        display: none;
      }

      .mobile{
        display: contents;
      }

      .Banniere{
        background: url("https://i.ibb.co/cT1bLb5/Week15-inter.jpg");
        width: 100%;
        height: 300px;
      }

      .descriptif_artist-week {
        font-size: 0.8em;
        padding-bottom: 2rem;
        margin-bottom: 5rem;
      }

      .descriptif_artist-week p{
        text-align: justify;
      }

      span.Banniere-txt{
      text-align: left;
      padding-left: 1em;
      padding-bottom: 7em;
      font-size: 2em;
      }
    }

    @media only screen and (max-width: 522px){
      .Banniere{
        background: url("https://i.ibb.co/fNW1MmH/Week15-inter1.png");
        width: 100%;
        height: 300px;
      }

      span.Banniere-txt{
      text-align: left;
      padding-left: 1em;
      padding-bottom: 7em;
      font-size: 2em;
      }
    }

      @media only screen and (max-width: 370px){
        .Banniere{
          background: url("https://i.ibb.co/H2Qwzrn/Week15-mini.png");
          width: 100%;
          height: 300px;
        }

        span.Banniere-txt{
        text-align: left;
        padding-left: 1em;
        padding-bottom: 1em;
        font-size: 2em;
        }

      }



    /* Au dessus de 600px */
    .mobile{
      display: none;
    }

    .Banniere{
      width: 100%;
      display:grid;
    }

    .Banniere img{
      width: 100%;
    }

    /* les enfants se superposent */
    .Banniere>*{
        grid-area:1/1/-1/-1;
    /* raccourci pour grid-row et grid-column */
    }

    /* le texte */
    .Banniere-txt{
    text-align: right;
    padding-left: 1em;
    padding-bottom: 1em;
    display:flex;
    justify-content: flex-start;
    align-items: flex-end;
    color:#fff;
    opacity:1;
    filter:invert(0); /* antibug si effet sur a-img */
    transition:opacity .8s;
    text-transform: uppercase;
    font-size: 2.5em;
    font-weight: bold;
    letter-spacing: 0.05;
    }

    .descriptif_artist-week{
      padding-top: 1rem;
      width: 70%;
      margin: auto;
      text-align: left;
      align-content: center;
      justify-content: center;
      align-items: center;
      margin: auto;
      font-size: 1em;
      height: 10rem;
      background-color: white;
      color: #303133;
      padding-bottom: 5rem;
      margin-bottom: 2rem;
      letter-spacing: 0.05;
    }

    .descriptif_artist-week a{
      color: #303133;
      text-decoration: none;
      font-weight: 600;
    }

    .descriptif_artist-week a:hover{
      text-decoration: underline;
    }

    .descriptif_artist-week strong a{
      font-weight: 600;
      font-size: 1.5em;
      color: #303133;
      text-decoration: none;
    }

    .descriptif_artist-week strong a:hover{
      text-decoration: underline;
    }
  </style>
</html>
