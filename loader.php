<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Loader</title>
  </head>
  <body>
    <section class="section">
      <span class="loader loader-quart"></span>
      Chargement...
    </section>

    <style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  font-size: 40px;
  color: #fff;
  text-align: center;
}

.section{
  background-color: #ffc048;
  height: 100vh;
  line-height: 500px;
}

.loader{
  width: 50px;
  height: 50px;
  display: inline-block;
  vertical-align: middle;
  position: relative;
}
/* --------------------------------------------------------- *\
                    $Loader Quart de Cercle
\* --------------------------------------------------------- */

.loader-quart{
  border-radius: 50px;
  border: 6px solid rgba(255,255,255,0.4);
}

.loader-quart::after{
  content:'';
  position: absolute;
  top: -6px;
  left: -6px;
  bottom: -6px;
  right: -6px;
  border: 6px solid transparent;
  border-top-color: #fff;
  border-radius: 50px;
  animation: spin 1s linear 0s infinite;
  animation-duration: 2s;
}

@keyframes spin {
  0%{
    transform: rotate(0deg);
  }
  100%{
    transform: rotate(360deg);
  }
}

.fondu-out{
  opacity: 0;
  transition: opacity 0.4s ease-out;
}
    </style>


  </body>
</html>
