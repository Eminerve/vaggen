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

    <section>
      <div class="fond first">
        <div class="images inline-photo show-on-scroll"><img src="https://i.ibb.co/ysHm74L/Tonk.png" class="img-daily"alt="Tonk Spray it konstjord daily"></div>
        <div class="text show-on-scroll">
          <h2><a href="https://www.instagram.com/tonk_the_trooper/?hl=fr" target="_blank">Tonk</a></h2>
          <p><em>13/05/2021</em></p>
        </div>
      </div>
    </section>

    <section>
      <div class="fond">
        <div class="images inline-photo show-on-scroll"><img src="https://i.ibb.co/x2PtT5r/One-Red-Line-10-04-21.jpg" class="img-daily"alt="One Red Line Spray it konstjord daily"></div>
        <div class="text show-on-scroll">
          <h2><a href="https://www.instagram.com/oneredline/" target="_blank">One Red Line</a></h2>
          <p><em>10/05/2021</em></p>
        </div>
      </div>
    </section>

    <section>
      <div class="fond">
        <div class="images inline-photo show-on-scroll"><img src="https://i.ibb.co/F7pcdCd/Bokis.png" class="img-daily" alt="Bokis Spray it konstjord daily"></div>
        <div class="text show-on-scroll">
          <h2><a href="https://www.instagram.com/iwritebokis/?hl=fr" target="_blank">Bokis</a></h2>
          <p><em>04/05/2021</em></p>
        </div>
      </div>
    </section>

    <section>
      <div class="fond">
        <div class="images inline-photo show-on-scroll"><img src="https://i.ibb.co/Y0qMXgp/Holem-Rabeks.png" class="img-daily"alt="Holem Rabeks Spray it konstjord daily"></div>
        <div class="text show-on-scroll">
          <h2><a href="https://www.instagram.com/holem_one/?hl=fr" target="_blank">Holem</a> & <a href="https://www.instagram.com/rabeks_ask/?hl=fr" target="_blank">Rabeks</a></h2>
          <p><em>27/04/2021</em></p>
        </div>
      </div>
    </section>

    <section>
      <div class="fond">
        <div class="images inline-photo show-on-scroll"><img src="https://i.ibb.co/hBMyf80/Bezz-daily-12-04-21.jpg" class="img-daily"alt="Holem Rabeks Spray it konstjord daily"></div>
        <div class="text show-on-scroll">
          <h2><a href="https://www.instagram.com/bezzwalls/?hl=fr" target="_blank">Bezz</a></h2>
          <p><em>12/04/2021</em></p>
        </div>
      </div>
    </section>

  </body>

  <script type="text/javascript">
  var scroll = window.requestAnimationFrame ||
               // IE Fallback
               function(callback){ window.setTimeout(callback, 1000/60)};
  var elementsToShow = document.querySelectorAll('.show-on-scroll');

  function loop() {

    elementsToShow.forEach(function (element) {
      if (isElementInViewport(element)) {
        element.classList.add('is-visible');
      } else {
        element.classList.remove('is-visible');
      }
    });

    scroll(loop);
  }

  // Call the loop for the first time
  loop();

  // Helper function from: http://stackoverflow.com/a/7557433/274826
  function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
      (rect.top <= 0
        && rect.bottom >= 0)
      ||
      (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.top <= (window.innerHeight || document.documentElement.clientHeight))
      ||
      (rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
  }
  </script>
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

  h2 a{
    font-family: 'AvantGardeBold';
    font-weight: 600;
    font-size: 1.5em;
    color: #303133;
    text-decoration: none;
    text-transform: uppercase;
}

h2{
  font-family: 'AvantGardeBold';
  font-weight: 600;
  font-size: 1.5em;
  color: #303133;
  text-transform: uppercase;
}

  /* --------------- Ecran Ordinateur > 600px ------------------------- */

  /* section */

section{
width: 100%;
margin: auto;
}

.fond{
padding: 0.5rem;
width: 80%;
margin: auto;
margin-left: 18%;
align-content: center;
align-self: center;
margin-top: 2rem;
margin-bottom: 2rem;
display: flex;
flex-direction: row;
align-items: center;
justify-content: center;
}

.fond.first{
margin-top: 4rem;
}



.images{
flex: 1.5;
padding: 1rem;
}

.img-daily {
width: 100%;
}

.text{
flex: 1;
padding: 2rem;
margin-left: 2rem;
transform: translate(-25px);
-webkit-transition: transform .4s .3s ease-out;
transition: transform .4s .3s ease-out,
will-change: transform;
}

.inline-photo {
  opacity: 0;
  -webkit-transition: opacity .4s .3s ease-out;
  transition: opacity .4s .3s ease-out,
  will-change: opacity;
}

.inline-photo.is-visible {
  opacity: 1;
}

.text.is-visible{
  transform: translate(0);
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

    .fond{
    flex-direction: column;
    margin-left: inherit;
    width: 95%;
    }

    .text{
    width: inherit;
    width: 80%;
    align-items: flex-start;
    padding: 1rem;
    margin-left: inherit;
    text-align: right;
    font-size: 1rem;
    }

    h2 a{
      font-family: 'AvantGardeBold';
      font-weight: 500;
      font-size: 1.2em;
    }
  }


</html>
