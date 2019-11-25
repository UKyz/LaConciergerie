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
  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
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
        <h1><a href="index.php" id="logo">La Conciergerie</a></h1>
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
          <h2><a href="#">Nos services</a></h2>
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
        <section>
          <header>
            <h3>Notre annuaire</h3>
          </header>
          <p>
            Rechercher un service :
            <input type="text" placeholder="Peinture, Promener les chiens, Garde d'enfant ..."/>
          </p>
        </section>
        <section>
          <div class="row">
            <div class="col-3">
              <h5>Filtres :</h5>
              <div id="services-filters">
                Type de service:
                <form>
                  <div class="checkbox">
                    <input type="checkbox" name="type" id="type"><label for="type">Option 1</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Option 2</label>
                  </div>
                  <div class="checkbox disabled">
                    <label><input type="checkbox" value="" disabled>Option 3</label>
                  </div>
                </form>
              </div>
                <select name="type">
                  <option value="type1">Variable</option>
                  <option value="type1">1h</option>
                  <option value="type2">2h</option>
                  <option value="type3">Demi-journée</option>
                  <option value="type4">Journée</option>
                </select>
            </div>
            <div class="col-9">
              <div class="row">
                <div class="col-5 service-article logo-writting">
                  <h3 class="card-title">Menage</h3>
                  <table>
                    <tr><td class="card-table">Tarif :</td><td>20€</td></tr>
                    <tr><td>Durée :</td><td>1h minimum</td></tr>
                    <tr><td>Description :</td><td class="card-service-pres">Prestation de ménage de tout ordre selon demande</td></tr>
                  </table>
                </div>
                <div class="col-5 service-article logo-writting">
                  <h3 class="card-title">Jardinage</h3>
                  <table>
                    <tr><td class="card-table">Tarif :</td><td>20€</td></tr>
                    <tr><td>Durée :</td><td>1h minimum</td></tr>
                    <tr><td>Description :</td><td class="card-service-pres">Prestation de ménage de tout ordre selon demande</td></tr>
                  </table>
                </div>
                <div class="col-5 service-article logo-writting">
                  <h3 class="card-title">Garde d'enfants</h3>
                  <table>
                    <tr><td class="card-table">Tarif :</td><td>20€</td></tr>
                    <tr><td>Durée :</td><td>1h minimum</td></tr>
                    <tr><td>Description :</td><td class="card-service-pres">Prestation de ménage de tout ordre selon demande</td></tr>
                  </table>
                </div>
                <div class="col-5 service-article logo-writting">
                  <h3 class="card-title">Bricolage</h3>
                  <table>
                    <tr><td class="card-table">Tarif :</td><td>20€</td></tr>
                    <tr><td>Durée :</td><td>1h minimum</td></tr>
                    <tr><td>Description :</td><td class="card-service-pres">Prestation de ménage de tout ordre selon demande</td></tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </section>
      </article>
      <!--						<hr />-->
      <!--						<div class="row">-->
      <!--							<article class="col-4 col-12-mobile special">-->
      <!--								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>-->
      <!--								<header>-->
      <!--									<h3><a href="#">Gravida aliquam penatibus</a></h3>-->
      <!--								</header>-->
      <!--								<p>-->
      <!--									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam-->
      <!--									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.-->
      <!--								</p>-->
      <!--							</article>-->
      <!--							<article class="col-4 col-12-mobile special">-->
      <!--								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>-->
      <!--								<header>-->
      <!--									<h3><a href="#">Sed quis rhoncus placerat</a></h3>-->
      <!--								</header>-->
      <!--								<p>-->
      <!--									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam-->
      <!--									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.-->
      <!--								</p>-->
      <!--							</article>-->
      <!--							<article class="col-4 col-12-mobile special">-->
      <!--								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>-->
      <!--								<header>-->
      <!--									<h3><a href="#">Magna laoreet et aliquam</a></h3>-->
      <!--								</header>-->
      <!--								<p>-->
      <!--									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam-->
      <!--									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.-->
      <!--								</p>-->
      <!--							</article>-->
      <!--						</div>-->
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
            service: '',
            description: '',
            tarif: '',
            duree: '',
            services: []
        },
        mounted: function () {
            this.getServices()
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
            createContact: function(){
                console.log("Create contact!")

                let formData = new FormData();
                console.log("name:", this.name)
                formData.append('name', this.name)
                formData.append('email', this.email)
                formData.append('city', this.city)
                formData.append('country', this.country)
                formData.append('job', this.job)

                var contact = {};
                formData.forEach(function(value, key){
                    contact[key] = value;
                });

                axios({
                    method: 'post',
                    url: 'api/contacts.php',
                    data: formData,
                    config: { headers: {'Content-Type': 'multipart/form-data' }}
                })
                    .then(function (response) {
                        //handle success
                        console.log(response)
                        app.contacts.push(contact)
                        app.resetForm();
                    })
                    .catch(function (response) {
                        //handle error
                        console.log(response)
                    });
            },
            resetForm: function(){
                this.name = '';
                this.email = '';
                this.country = '';
                this.city = '';
                this.job = '';
            }
        }
    })
</script>

</body>
</html>