<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
  <title>La Conciergerie - Page Privé</title>
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
          <h2><a href="#">Page privé</a></h2>
        </header>
        <section>
          <header>
            <h3>Connexion</h3>
              <input type="text" v-model="username">
              <input type="password" v-model="password">
              <button v-on:click="connexion()">Connexion</button>
          </header>
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
            username: '',
            password: ''
        },
        mounted: function () {
        },

        methods: {
            connexion: () => {
                console.log(app.username)
                console.log(app.password)
                let formData = new FormData();
                formData.append('username', app.username);
                formData.append('password', app.password);
                const login = {};
                formData.forEach((value, key) => {
                    login[key] = value;
                });
                console.log(login)

                axios({
                    method: 'post',
                    url: 'api/private.php',
                    data: {
                        username: app.username,
                        password: app.password
                    },
                    config: { headers: {'Content-Type': 'multipart/form-data' }}
                })
                    .then(function (response) {
                        //handle success
                        console.log(response)
                        // app.contacts.push(contact)
                        // app.resetForm();
                    })
                    .catch(function (response) {
                        //handle error
                        console.log(response)
                    });
            },
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
                formData.append('username', this.username)
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
                this.username = '';
                this.country = '';
                this.city = '';
                this.job = '';
            }
        }
    })
</script>

</body>
</html>