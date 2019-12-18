<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title>La Conciergerie - Services</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy&display=swap" rel="stylesheet">
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
          <h2><a href="services.php">Nos services</a></h2>
          <p>
            Découvrez tous nos services
          </p>
        </header>
        <!--							<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>-->
        <p>
          Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
          posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
          lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
          consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
          interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
          natoque aenean scelerisque vel lacinia mollis quam sodales congue.
        </p>
        <section>
          <header>
            <h3>Ultrices tempor sagittis nisl</h3>
          </header>
          <p>
            Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
            at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
            feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
            fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus
            egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
          </p>
          <p>
            Eleifend auctor turpis magnis sed porta nisl pretium. Aenean suspendisse nulla eget sed etiam parturient
            orci cursus nibh. Quisque eu nec neque felis laoreet diam morbi egestas. Dignissim cras rutrum consectetur
            ut penatibus fermentum nibh erat malesuada varius.
          </p>
        </section>
        <section id="services-search">
          <header>
            <h3>Notre annuaire</h3>
          </header>
          <p>Affinez votre recherche :</p>
          <input type="text" placeholder="Peinture, Promener les chiens, Garde d'enfant ..."/>
        </section>
        <section>
          <div class="row">
            <div id="services-filters-select">
              <div id="services-filters">
                <p>Type de service :</p>
                <ul>
                  <li>
                    <input type="checkbox" name="type" id="type"><label for="type">Option 1</label>
                  </li>
                  <li>
                    <input type="checkbox" name="type" id="type"><label for="type">Option 2</label>
                  </li>
                  <li>
                    <input type="checkbox" name="type" id="type"><label for="type">Option 3</label>
                  </li>
                </ul>
                <p>Durée :</p>
                <select name="type">
                  <option value="type1">-- Sélectionner --</option>
                  <option value="type1">1h</option>
                  <option value="type2">2h</option>
                  <option value="type3">Demi-journée</option>
                  <option value="type4">Journée</option>
                </select>
              </div>
            </div>
            <div id="services-filters-result">
              <div class="row">
                <div class="service-article logo-writting" v-for="service in services">
                  <h3 class="card-title">{{service.name}}</h3>
                  <img src="images/pin.png" class="card-pin" alt="">
                  <table>
                    <tr>
                      <td class="card-table-head">Tarif</td>
                      <td>{{service.price}}</td>
                    </tr>
                    <tr>
                      <td class="card-table-head">Durée</td>
                      <td>{{service.duration}}</td>
                    </tr>
                    <tr>
                      <td class="card-table-head">Description</td>
                      <td class="card-service-pres"><p>{{service.description}}</p></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

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

<script>
    const app = new Vue({
        el: '#vueapp',
        data: {
            services: []
        },
        methods: {
            getServices: function(){
                axios.get('api/services.php')
                    .then(function (response) {
                        console.log(response.data);
                        app.services = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
        },
        mounted: function () {
            this.getServices()
        },
    })
</script>

</body>
</html>