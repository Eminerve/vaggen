<!DOCTYPE html>
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

    <!-- Baniere -->

    <div class="baniere">

      <div class="img-wrapper">
        <a href="https://www.instagram.com/bezzwalls/?hl=fr" target="_blank" class="a-img-txt">
          <img class="a-img" src="images/daily-1.jpg" alt="artist1">
          <span class="a-txt c1">BEZZ <br>Daily</span>
        </a>
      </div>

      <div class="img-wrapper">
        <a href="weekly.php" class="a-img-txt">
          <img class="a-img" src="images/weekly-1.JPG" alt="artist1">
          <span class="a-txt c2">CHEAT, KIDKASH, KISS<br>Weekly</span>
        </a>
      </div>

      <div class="img-wrapper">
        <a href="monthly.php" class="a-img-txt">
          <img class="a-img" src="images/month-1.jpg" alt="artist1">
          <span class="a-txt c3">#1 Dart<br> Monthly</span>
        </a>
      </div>
    </div>

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
        <h2>Opening</h2>
        <p>Väggen invites you to come and visit! Opening artist is <strong>DART</strong> who will paint for us on <strong>April 10th</strong>. His artwork will be up for show until <strong>May 1st</strong>.  <br> <br><em>We hope that many people will come and visit us! Please keep distance and follow the Covid Restrictions.</em><br> <br>Address: <a href="https://www.google.com/search?q=Sickla+industriv%C3%A4g+6%2C+131+34+Nacka&sxsrf=ALeKk00j1Z4FIb-8SPe1u18T40A4YVOQPg%3A1617952895913&ei=fwBwYLmcN_KnrgSot7WACw&oq=Sickla+industriv%C3%A4g+6%2C+131+34+Nacka&gs_lcp=Cgdnd3Mtd2l6EANQ-qkEWPqpBGDCsARoAHACeACAAeQBiAGGA5IBBTAuMS4xmAEAoAECoAEBqgEHZ3dzLXdpesABAQ&sclient=gws-wiz&ved=0ahUKEwj51_6c0PDvAhXyk4sKHahbDbAQ4dUDCA0&uact=5" target="_blank"><strong>Sickla industriväg 6, 131 34 Nacka</strong></a> </p>
      </div>

    </div>

      <div class="contact">
        <h2>contact</h2>
        <p>The walls are bookable. Contact Nabil Dorbane for info or availability <br>at 07 63 129 399 or via vaggen@konstjord.com.</p>
      </div>


      <div class="annonce_construction">
        <p>This website is under construction, you will soon be able to find all the artists of the Wall!</p>
      </div>
      <style media="screen">

      /* Général */
      @font-face {
        font-family: 'AvantGardeRegular';
        src: url();
      }

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
        padding-bottom: 5rem;
        display: flex;
        flex-direction: row;
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

      .img-wrapper img {
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
        letter-spacing: 0.05;
      }

      /* les couleurs c1 et c2 */
      .c1{
        background:rgba(0,0,0,0.20); /* avec alpha */
      }

      .c2{
        background:rgba(0,0,0,0.20); /* avec alpha */
      }

      .c3{
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
        font-weight: 600;
        text-align: left;
      }

      .en_construction p {
        font-size: 1em;
        letter-spacing: 0.05;
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
