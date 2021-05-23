<!DOCTYPE html>
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

    <!-- Baniere -->
<div class="w3-animate-bottom">
    <div class="baniere">

      <div class="img-wrapper">
        <a href="daily.php" class="a-img-txt">
          <img class="a-img" src="https://i.ibb.co/H4c8hbG/Tonk-compress.jpg" alt="Tonk daily Spray-it väggen month konstjord">
          <span class="a-txt">Tonk<br>Daily</span>
        </a>
      </div>

      <div class="img-wrapper">
        <a href="weekly.php" class="a-img-txt">
          <img class="a-img" src="https://i.ibb.co/gdkbCj8/Weekly-2-Artists-Ocur-Gouge-Morgue-Holem-Rabeks.jpg" alt=" Ocur Gouge Morgue Holem Rabeks Spray-it väggen week konstjord">
          <span class="a-txt">Ocur, Gouge, Morgue, <br>Holem, Rabeks<br>Weekly</span>
        </a>
      </div>

      <div class="img-wrapper">
        <a href="monthly.php" class="a-img-txt">
          <img class="a-img" src="https://i.ibb.co/x2mLkFb/Monthly-11-maj-2021-8.jpg" alt="The highness Spray-it väggen month konstjord">
          <span class="a-txt">#2 The Highness<br>Monthly</span>
        </a>
      </div>
    </div>

<!--    <div class="promotion">
      <img class="screen" src="images/promotion/Artist-2.jpg" width="100%" alt="promotion">
      <img class="mobile" src="images/promotion/Artist-2-mini.jpg" width="100%" alt="prmotion">
    </div> -->
    <!-- Page d'attente de construction -->

    <div class="en_construction">

      <div class="element">
          <h2>Concept</h2>
          <p>Väggen aims to offer artists a wall of free expression as well as to provide Stockholm with a go to place for contemporary and interesting graffiti.</p>
          <p>Väggen is divided in three sections to diversify the artistic approaches:
            <ul>
              <li><strong>The daily</strong> wall where you can test, do quick pieces, and be initiated to graffiti.</li>
              <li><strong>The weekly</strong> wall which is used by artists who want to take their time to work on their composition.</li>
              <li><strong>The monthly</strong> wall is an open-air gallery which invites a new artist every month to paint the wall.</li>
            </ul>
          </p><br>

          <p>Curated by <a href="https://www.instagram.com/sprayit.collective/?hl=fr" target="_blank"><strong>Spray-it</strong></a> powered by <a href="https://konstjord.com/" target="_blank"><strong>Konstjord</strong></a> </p>
      </div>

      <div class="element">
        <h2>Come to visit</h2>
        <p>Väggen invites you to come and visit! The next artist is <strong>THE HIGHNESS</strong> who will paint for us on <strong>May 1st</strong>. His artwork will be up for show until <strong>May 21th</strong>.  <br> <br><em>We hope that many people will come and visit us! Please keep distance and follow the Covid Restrictions.</em><br> <br>Address: <a href="https://www.google.com/search?q=Sickla+industriv%C3%A4g+6%2C+131+34+Nacka&sxsrf=ALeKk00j1Z4FIb-8SPe1u18T40A4YVOQPg%3A1617952895913&ei=fwBwYLmcN_KnrgSot7WACw&oq=Sickla+industriv%C3%A4g+6%2C+131+34+Nacka&gs_lcp=Cgdnd3Mtd2l6EANQ-qkEWPqpBGDCsARoAHACeACAAeQBiAGGA5IBBTAuMS4xmAEAoAECoAEBqgEHZ3dzLXdpesABAQ&sclient=gws-wiz&ved=0ahUKEwj51_6c0PDvAhXyk4sKHahbDbAQ4dUDCA0&uact=5" target="_blank"><strong>Sickla industriväg 6, 131 34 Nacka</strong></a> </p>
      </div>

    </div>

      <div class="contact">
        <h2>contact</h2>
        <p>The walls are bookable. Contact Nabil Dorbane for info or availability <br>at 07 63 129 399 or via vaggen@konstjord.com.</p>
      </div>


</div>
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
        .promotion{
          background-image: url('https://i.ibb.co/T28Yjf4/artist-2-500.jpg');
          margin: auto;
          height: 60vh;
          background-repeat: space;
          background-position: center;
        }
      }


      @media only screen and (max-width: 500px) {
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
        .promotion{
          background-image: url('https://i.ibb.co/jVJRZVC/artist-2-400.jpg');
          margin: auto;
          height: 50vh;
          background-repeat: space;
          background-position: center;
        }
      }
      /* en dessous de 600px */
      @media only screen and (max-width: 600px) {

      }

      .mobile{
        display: none;
      }

      /* Banniere */
      .baniere {
        background-color: #0A1218;
        width: 100%;
        padding-bottom: 4rem;
        display: flex;
        flex-direction: row;
        font-weight: bold;
      }


      .img-wrapper {
        display: inline-block;
        overflow: hidden;
        width: 33.3%;
        height: auto;
        margin: auto;
        margin-top: 0;
      }

      @media only screen and (max-width: 600px) {
        .baniere {
          height: auto;
          background-color: #0A1218;
          width: 100%;
          padding-bottom: 0.5rem;
          display: flex;
          margin: auto;
          justify-content: space-around;
          align-items: center;
          flex-direction: column;
        }

        .img-wrapper {
          width: 100%;
          height: auto;
        }

        .img-wrapper img{
          width: 100%;
        }

        .en_construction {
          display: flex;
          flex-wrap: wrap;
          max-width: 90%;
          margin: auto;
          margin-top: 1rem;
        }

      }
      @keyframes anim {
        0% {
    display: none;
    opacity: 0;
  }
  1% {
    display: block;
    opacity: 0;
    transform: scale(0);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
      }
      .img-wrapper img {
        animation: anim .5s ease-in-out;
        height: auto;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;

        vertical-align: middle;
      }

      .img-wrapper img:hover {
        -webkit-transform:scale(1.2); /* Safari and Chrome */
        -moz-transform:scale(1.2); /* Firefox */
        -ms-transform:scale(1.2); /* IE 9 */
        -o-transform:scale(1.2); /* Opera */
        transform:scale(1.2);
      }

      /*supperpostion images text*/

      .a-img-txt{
        display:grid;
      }

      /* les enfants se superposent */
      .a-img-txt>*{
        grid-area:1/1/-1/-1;
        /* raccourci pour grid-row et grid-column */
      }


      /* le texte */
      .a-txt{
        text-align: right;
        padding-right: 1em;
        padding-bottom: 1rem;
        display:flex;
        justify-content: flex-end;
        align-items: flex-end;
        color:#fff;
        opacity:1;
        filter:invert(0); /* antibug si effet sur a-img */
        transition:opacity .8s;
        text-transform: uppercase;
        font-size: 1.5em;
        font-weight: bold;
        letter-spacing: 0.07;
        background:rgba(0,0,0,0.20); /* avec alpha */
      }

      /* le survol */
      .a-txt:hover{
        opacity:0;
      }

      .a-img-txt:hover .a-img{
        filter:invert(0);
        -webkit-transform:scale(1.2); /* Safari and Chrome */
        -moz-transform:scale(1.2); /* Firefox */
        -ms-transform:scale(1.2); /* IE 9 */
        -o-transform:scale(1.2); /* Opera */
        transform:scale(1.2);
      }

      img{
        max-width:120%;
        height:auto;
      }

      a{
        text-decoration:none;
        color: color: #303133;
      }

      a:visited {
        text-decoration:none;
        color: color: #303133;
      }

      a:link {
        text-decoration:none;
        color: color: #303133;
      }

      .en_construction {
        font-family: 'AvantGardeLight';
        font-weight: 300;
        display: flex;
        flex-direction: row;
        width: 90%;
        margin: auto;
        margin-bottom: 1rem;
      }

      .element {
        padding: 0 2rem 0 2rem;
        flex: 1;
      }

      .en_construction h2 {
        font-size: 2em;
        text-transform: uppercase;
        color: #303133;
        font-family: 'AvantGardeDemiBold';
        font-weight: bold;
        text-align: left;
      }

      .en_construction p {
        font-size: 1em;
        letter-spacing: 0.05;
        line-height: 1.5em;
        color: #777;
        font-weight: 400;
        text-align: justify;
      }

      .en_construction em {
        font-size: 1em;
        color: #777;
        font-weight: 400;
        text-align: justify;
        text-decoration: underline;
      }

      .en_construction li{
        font-size: 1em;
        color: #777;
        font-weight: 400;
        text-align: justify;
        line-height: 1.5em;
      }

      .en_construction strong{
        font-size: 1em;
        color: ##303133;
        font-weight: 600;
        text-align: justify;
      }

      .en_construction a{
        font-size: 1em;
        color: #303133;
        font-weight: 600;
        text-align: justify;
        text-decoration: none;
      }

      .element a:hover {
        text-decoration: underline;
      }

      /* Promotion */
      .promotion{
        width: 100%;
        background-color: white;
        padding-top: 4em;
        padding-bottom: 4rem;
      }
      /* annonce_construction */

      .annonce_construction{
        justify-content: center;
        width: 70%;
        text-transform: uppercase;
        color: #303133;
        text-align: center;
        margin: auto;
      }
      /* Contact */

      .contact {
        width: 100%;
        margin: auto;
        background-color: #0A1218;
        color: #fff;
        padding-top: 2rem;
        padding-bottom: 4rem;
      }

      .contact h2{
        font-size: 2em;
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
      }

      .contact p{
        width: 90%;
        margin: auto;
        text-align: center;
        font-size: 1em;
        font-weight: 400;
      }
      </style>
  </body>
</html>
