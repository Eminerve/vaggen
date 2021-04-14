<html lang="en" dir="ltr">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Väggen.se</title>
  </head>
  <body>

    <!-- Barre de navigation -->

    <?php include 'navigation.php'; ?>

    <div class="Banniere">
      <img class="Banniere-img" src="images-month\2021\1-Dart_1.jpg" alt="">
      <span class="Banniere-txt">#1 DART</span>
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
              font-size: 3em;
              font-weight: bold;
              letter-spacing: 0.05;
            }
  </style>
</html>
