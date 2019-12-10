<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title>La Conciergerie - Livre d'or</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy|Courgette|Solway|Handlee|Cinzel&display=swap" rel="stylesheet">
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body class="no-sidebar is-preload">
<div id="page-wrapper">

  <!-- Header -->
  <div id="header">

    <!-- Inner -->
    <div class="inner">
      <header>
        <a href="index.php" id="logo"><img src="images/logo3.png" class="header-logo"></a>
      </header>
    </div>

    <!-- Nav -->
    <?php include 'nav.html';?>

  </div>

  <!-- Main -->
  <div class="wrapper style1" id='vueapp'>

    <div class="container">
      <article id="main" class="special">
        <header>
          <h2><a href="guest-book.php">Livre d'or</a></h2>
          <p>
            Découvrez les avis de nos clients
          </p>
        </header>
        <p>
          Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
          posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
          lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
          consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
          interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
          natoque aenean scelerisque vel lacinia mollis quam sodales congue.
        </p>
        <section>
          <div class="opinion">
            <p class="opinion-date">03/12/2019</p>
            <p class="opinion-rate">
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star-half-alt"></span>
            </p>
            <p class="opinion-comment">
              Voilà le joli commentaire
              <br/>
              Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere
              accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla
              convallis ut venenatis purus lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices
              tempor sagittis.
            </p>
            <p class="opinion-source">Nom<br/><span>Source</span></p>
          </div>
          <div class="opinion">
            <p class="opinion-date">03/12/2019</p>
            <p class="opinion-rate">
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
            </p>
            <p class="opinion-comment">Voilà le joli commentaire</p>
            <p class="opinion-source">Nom<br/><span>Source</span></p>
          </div>
          <div class="opinion">
            <p class="opinion-date">03/12/2019</p>
            <p class="opinion-rate">
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon solid fa-star"></span>
              <span class="icon far fa-star"></span>
            </p>
            <p class="opinion-comment">Voilà le joli commentaire</p>
            <p class="opinion-source">Nom<br/><span>Source</span></p>
          </div>
          <div class="opinion">
            <p class="opinion-date">03/12/2019</p>
            <p class="opinion-rate no-rate">
              <span class="icon far fa-star"></span>
              <span class="icon far fa-star"></span>
              <span class="icon far fa-star"></span>
              <span class="icon far fa-star"></span>
              <span class="icon far fa-star"></span>
            </p>
            <p class="opinion-comment">Voilà le joli commentaire</p>
            <p class="opinion-source">Nom<br/><span>Source</span></p>
          </div>
          <!-- End of clients opinion -->
          <div>&nbsp;</div>
        </section>
        <section>
          <p>
            Merci pour ces commentaires.
            N'hésitez pas à nous faire parvenir les vôtres afin qu'ils soient ajoutés à cette page.
          </p>
        </section>
      </article>
    </div>

  </div>

  <!-- Footer -->
  <?php include 'footer.html';?>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>