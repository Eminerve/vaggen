<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Väggen.se</title>
  </head>
  <body>

    <!-- Barre de navigation -->
    <?php include 'navigation.php'; ?>

    <div class="baniere">
      <div class="img-wrapper">
        <img src="images/image_1.png" width="500" alt="artist1">
      </div>
      <div class="img-wrapper">
        <img src="images/image_2.png" width="500" alt="artist1">
      </div>
      <div class="img-wrapper">
        <img src="images/image_3.png" width="500" alt="artist1">
      </div>
    </div>

<<<<<<< HEAD
    <div class="en_construction">

      <div class="opening">
        <h2>Opening</h2>
        <p>The Väggen will invite to the opening the Artist who will paint for us on <strong>March 13</strong> and let his art on the wall until <strong>April 9</strong>. <br>We hope that many of you will come to meet this artist and his art. <br>C'est au pied du mur qu'on voit le mieux le mur...</p>
      </div>
=======
    <!-- Page d'attente de construction -->
    <div class="en_cour">

      <div class="opening">
        <h2>Opening</h2>
        <p>The Väggen will invite to the opening the Artist <strong>Dart</strong> who will paint for us on <strong>April 10</strong> and let his art on the wall until <strong>May 1st</strong>. We hope that many of you will come to meet this artist and his art.</p>

          <div class="artistimg">
            <img src="images/image_1.jpg" width="300px" height="auto" alt="artist1">
          </div>
      </div>

>>>>>>> e6d6a8b22464e2b6796b08bdaa3ab28092afa74b
      <div class="concept">
        <h2>Concept</h2>
        <p>Väggen offers to artists the way to have a free expression wall and more, an exhibition wall around Stockholm valuing by that, the district, the graffiti, and the Street Art.</p>
        <p>Väggen will be divided in three sections to diversify the artistic approaches:
          <ul>
            <li>•	<strong>The daily</strong> wall where you can test, do quick pieces, and be initiated to graffiti.</li><br>
            <li>•	<strong>The weekly</strong> wall which will used by artists who want to take their time to work on their composition.</li><br>
            <li>•	<strong>The monthly</strong> wall is an open-air gallery which invites one artist per month and offers to him to be discovered during this period.</li>
          </ul>
        </p>
<<<<<<< HEAD
        <p>Curated by <a href="https://www.instagram.com/sprayit.collective/?hl=fr" target="_blank"><strong>Spray-it</strong> et <a href="https://konstjord.com/" target="_blank"><strong>KonstJörd</strong></a> </p>
      </div>
=======
        <p>Curated by <strong>Nabil Dorbane</strong> et <a href="https://konstjord.com/" target="_blank"><strong>KonstJörd</strong></a> </p>
      </div>


>>>>>>> e6d6a8b22464e2b6796b08bdaa3ab28092afa74b

      <div class="contact">
        <h2>contact</h2>
        <p>The walls are bookable ... please contact Nabil Dorbane for availability. <br>You can reach him on 07 63 129 399.</p>
      </div>
    </div>

      <style media="screen">
            /* Général */
            html{
            font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
            }

            body{
            margin: 0;
            width: auto;
            }

            /* Banniere */
            .baniere {
              height: 22rem;
              background-color: #0A1218;
              width: 100%;
              padding-bottom: 2rem;
              display: flex;
              flex-direction: row;
            }


            .img-wrapper {
                display: inline-block;
                overflow: hidden;
                width: 33,3%;
                margin: auto;
            }

            .img-wrapper img {
                height: 350px;
                -webkit-transition: all .2s ease;
                -moz-transition: all .2s ease;
                -ms-transition: all .2s ease;
                -o-transition: all .2s ease;
                transition: all .2s ease;

                vertical-align: middle;
            }

            .img-wrapper img:hover {
                -webkit-transform:scale(1.5); /* Safari and Chrome */
                -moz-transform:scale(1.5); /* Firefox */
                -ms-transform:scale(1.5); /* IE 9 */
                -o-transform:scale(1.5); /* Opera */
                transform:scale(1.5);
            }
      </style>
  </body>
</html>
