<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Väggen.se</title>
  </head>
  <body>

    <!-- Barre de navigation -->

    <?php include 'navigation.php'; ?>


    <!-- Baniere -->

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

    <!-- Page d'attente de construction -->

    <div class="en_construction">

      <div class="concept">
          <h2>Concept</h2>
          <p>Väggen offers to artists the way to have a free expression wall and more, an exhibition wall around Stockholm valuing by that, the district, the graffiti, and the Street Art.</p>
          <p>Väggen will be divided in three sections to diversify the artistic approaches:
            <ul>
              <li><strong>The daily</strong> wall where you can test, do quick pieces, and be initiated to graffiti.</li>
              <li><strong>The weekly</strong> wall which will used by artists who want to take their time to work on their composition.</li>
              <li><strong>The monthly</strong> wall is an open-air gallery which invites one artist per month and offers to him to be discovered during this period.</li>
            </ul>
          </p>

          <p>Curated by <a href="https://www.instagram.com/sprayit.collective/?hl=fr" target="_blank"><strong>Spray-it</strong></a> et <a href="https://konstjord.com/" target="_blank"><strong>KonstJörd</strong></a> </p>
      </div>

      <div class="opening">
        <h2>Opening</h2>
        <p>The Väggen will invite to the opening the Artist <strong>DART</strong> who will paint for us on <strong>April 10th</strong> and let his art on the wall until <strong>May 1st</strong>. <br> <br>We hope that many of you will come to meet this artist and his art! </p>
      </div>

    </div>

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
              height: 30rem;
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
                margin-top: 0;
            }

            .img-wrapper img {
                height: 350px;
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

            .en_construction {
              display: flex;
              flex-direction: row;
              width: 90%;
              margin: auto;
            }

            .opening, .concept {
              padding: 2rem;
              flex: 1;
            }

            .en_construction h2 {
              font-size: 2em;
              text-transform: uppercase;
              color: #333;
              font-weight: 600;
              text-align: left;
            }

            .en_construction p {
              font-size: 1em;
              color: #777;
              font-weight: 400;
              text-align: justify;
            }

            .en_construction li{
              font-size: 1em;
              color: #777;
              font-weight: 400;
              text-align: justify;
            }

            .en_construction strong{
              font-size: 1em;
              color: #333;
              font-weight: 600;
              text-align: justify;
            }

            .en_construction a{
              font-size: 1em;
              color: #333;
              font-weight: 600;
              text-align: justify;
              text-decoration: none;
            }

            .concept a:hover {
              text-decoration: underline;
            }

            /* Contact */

            .contact {
              width: 100%;
              margin: auto;
              height: 8rem;
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
