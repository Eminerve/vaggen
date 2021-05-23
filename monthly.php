<html lang="fr" dir="ltr">
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

<div class="artist_groupe">

  <div class="Banniere artist2 down">
    <img class="Banniere-img screen" src="https://i.ibb.co/RpGH36R/2-The-Highness.jpg" alt="banner photo väggen the highness Spray-it Konstjord">
    <img class="Banniere-img mobile" alt="banner photo väggen the Highness Spray-it Konstjord">
    <span class="Banniere-txt">#2 the Highness <em>- 21.05.01</em></span>
  </div>

  <div class="descriptif_artist-month">
    <p> Born in the North of England and bound for another dimention, <a href="https://www.instagram.com/_the_highness__/?hl=fr" target="_blank"><strong>THE HIGHNESS</strong></a> blurs the lines between street art, fine art and pop culture, exploring themes like futurism and global commerce with humour and skepticism.</p>
    <p><a href="https://www.instagram.com/_the_highness__/?hl=fr" target="_blank"><strong>The Highness</strong></a> will be visible until of <strong>28th of May</strong>.</p>
  </div>

</div>

<div class="artist_groupe">

  <div class="Banniere artist1">
    <img class="Banniere-img screen" src="https://i.ibb.co/s9WX7hP/1-Dart-1.jpg" alt="banner photo väggen DART Spray-it Konstjord">
    <img class="Banniere-img mobile" alt="banner photo väggen DART Spray-it Konstjord">
    <span class="Banniere-txt">#1 DART <em>- 21.04.10</em></span>
  </div>

  <div class="descriptif_artist-month">
    <p> <strong>DART</strong> is a naitive from Stockholm who found his interest for Graffiti in 94, he has travelled the globe to put his touch to the urban landscapes. " Graffiti for me is a raw energy, and today I wanna take elements from the rawness of graffiti and use it as a canvas while I draw the ideas that comes to me". </p>
    <p><strong></strong>.</p>
  </div>

</div>


  </body>
  <style media="screen">

  /* Général */
  @font-face {
    font-family: 'AvantGarde';
    src: url('font/AvantGardeRegular.otf');
    font-weight: normal;
  }

  @font-face {
    font-family: 'AvantGardeLight';
    src: url('font/AvantGardeLight.otf');
    font-weight: lighter;
  }

  @font-face {
    font-family: 'AvantGardeDemiBold';
    src: url('font/AvantGardeDemiBold.otf');
    font-weight: bold;
  }

  @font-face {
    font-family: 'AvantGardeBold';
    src: url('font/AvantGardeBold.otf');
    font-weight: bolder;
  }

  html{
    font-family: 'AvantGardeRegular',-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
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
        max-width: 600px;
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
      }

      .Banniere.artist1{
        background: url("https://i.ibb.co/LZ0WCjQ/month-1.jpg");
      }

      .Banniere.artist2{
        background: url("https://i.ibb.co/QC9ZXqW/Monthly-11-maj-2021-6.jpg");
      }

      .descriptif_artist-month{
        padding-top: 1rem;
        width: 70%;
        text-align: center;
        align-content: center;
        justify-content: center;
        align-items: center;
        margin: auto;
        font-size: 1em;
        background-color: white;
        color: #303133;
        padding-bottom: 2rem;
        margin-bottom: 1rem;
      }

      span.Banniere-txt{
      text-align: left;
      padding-left: 1em;
      padding-bottom: 1em;
      font-size: 1.5em;
      }
    }



    /* Au dessus de 600px */
    .mobile{
      display: none;
    }

    @keyframes Ban1 {
      0% {opacity: 0;}
      20% {transform: translate(0, -5vh); opacity: 0;}
      100% {transform: translate(0, 0vh); opacity: 1;}
    }

    .Banniere{
      animation: Ban1 2s ease;
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
    padding-left: 2em;
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

    .descriptif_artist-month{
      padding-top: 2rem;
      width: 70%;
      text-align: justify;
      align-content: center;
      justify-content: center;
      align-items: center;
      margin: auto;
      font-size: 1.1em;
      background-color: white;
      color: #303133;
      padding-bottom: 1rem;
      margin-bottom: 2rem;
    }

    .descriptif_artist-month strong{
      font-weight: 600;
      color: #303133;
    }

    .descriptif_artist-month a{
      font-weight: 600;
      color: #303133;
      text-decoration: none;
    }
  </style>
</html>
