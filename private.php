<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
  <title>La Conciergerie - Page Privé</title>
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
        <h1><a href="index.php" id="logo">La Conciergerie</a></h1>
      </header>
    </div>

    <!-- Nav -->
		<?php include 'nav.html';?>

  </div>

  <!-- Main -->
  <div class="wrapper style1" id='vueapp'>

    <div class="container">
      <header>
        <h2><a href="#">Page privé</a></h2>
      </header>
      <article id="main" class="special" v-if="!isLogged">
        <section>
          <header>
            <h3>Connexion</h3>
          </header>
          <input type="text" v-model="username">
          <input type="password" v-model="password">
          <button v-on:click="connexion()" id="connexion">Connexion</button>
        </section>
      </article>

      <button id="private-button-left" v-if="isLogged" v-on:click="page = 'services'" v-bind:class="{'onButtonClicked' : (page === 'services')}">Services</button>
      <button id="private-button-right" v-if="isLogged" v-on:click="page = 'guestbook'" v-bind:class="{'onButtonClicked' : (page === 'guestbook')}">Livre d'or</button>

      <article id="main" class="special private-data" v-if="isLogged" v-show="page === 'services'">
        <h3>Ajouter un service</h3>
        <section>
          <div>
            <form class="row">
              <div class="col-4">
                <label>Nom</label>
                <input type="text" v-model="service.name">
              </div>
              <div class="col-4">
                <label>Durée</label>
                <input type="text" v-model="service.duration">
              </div>
              <div class="col-4">
                <label>Prix</label>
                <input type="text" v-model="service.price">
              </div>
              <div class="col-12">
                <label>Description</label>
                <textarea v-model="service.description"></textarea>
              </div>
              <div class="col-12">
                <label>Mots-clés</label>
                <input type="text" v-model="service.tags">
              </div>
              <div class="col-12">
                <input type="button" value="Valider" v-on:click="addService(service)">
              </div>
            </form>
          </div>
        </section>
        <hr class="private-separator">
        <h3>Services déjà enregistrés</h3>
        <section>
          <div class="row">
          <div v-for="service in services" class="private-data-card">
            <div>
              <p>{{service.name}}</p>
              <p>{{service.description}}</p>
              <button v-on:click="deleteService(service.id)">Supprimer</button>
            </div>
          </div>
          </div>
        </section>
      </article>

      <article id="main" class="special private-data" v-if="isLogged" v-show="page === 'guestbook'">
        <h3>Ajouter un commentaire</h3>
        <section>
          <div>
            <form class="row">
              <form class="row">
                <div class="col-4">
                  <label>Nom</label>
                  <input type="text" v-model="comment.name">
                </div>
                <div class="col-4">
                  <label>Origine</label>
                  <input type="text" v-model="comment.origin">
                </div>
                <div class="col-4">
                  <label>Jour</label>
                  <input type="date" v-model="comment.day">
                </div>
                <div class="col-12">
                  <label>Mail</label>
                  <input type="email" v-model="comment.mail">
                </div>
                <div class="col-12">
                  <label>Commentaire</label>
                  <textarea v-model="comment.comment"></textarea>
                </div>
                <div class="col-12">
                  <input type="button" value="Valider" v-on:click="addComment(comment)">
                </div>
              </form>
            </form>
          </div>
        </section>
        <hr class="private-separator">
        <h3>Commentaires déjà enregistrés</h3>
        <section>
          <div class="row">
          <div v-for="comment in comments" class="private-data-card">
            <div>
              <p>{{comment.name}} ({{comment.email}})</p>
              <p>{{comment.comment}}</p>
              <button v-on:click="deleteComment(comment.id)">Supprimer</button>
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
      username: '',
      password: '',
      isLogged: false,
      page: 'services',
      comments: [],
      comment: {},
      services: [],
      service: {},
    },
    methods: {
      test: () => {
        console.log(app.comment);
      },
      addComment: (comment) => {
        axios({
          method: 'post',
          url: 'api/guestBook.php',
          data: Object.assign({crud: 'add'}, comment),
          config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
          .then(response => {
            app.comments = response.data;
            app.comment = {};
          })
          .catch(error => {
            console.log(error);
          });
      },
      addService: (service) => {
        axios({
          method: 'post',
          url: 'api/services.php',
          data: Object.assign({crud: 'add'}, service),
          config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
          .then(response => {
            app.services = response.data;
            app.service = {};
          })
          .catch(error => {
            console.log(error);
          });
      },
      connexion: () => {
        axios({
          method: 'post',
          url: 'api/private.php',
          data: {
            username: app.username,
            password: app.password
          },
          config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
          .then(response => {
            app.isLogged = (response.data.length === 1);
            app.getAllData();
          })
          .catch(response => {
            console.log(response)
          });
      },
      deleteComment: (id) => {
        console.log(id);
        if (confirm (`Voulez-vous vraiment supprimer ce commentaire ?`)) {
          axios({
            method: 'post',
            url: 'api/guestBook.php',
            data: {
              crud: 'delete',
              id
            },
            config: {headers: {'Content-Type': 'multipart/form-data'}}
          })
            .then(response => {
              app.comments = response.data;
            })
            .catch(error => {
              console.log(error);
            });
        }
      },
      deleteService: (id) => {
        console.log(id);
        if (confirm (`Voulez-vous vraiment supprimer ce service ?`)) {
          axios({
            method: 'post',
            url: 'api/services.php',
            data: {
              crud: 'delete',
              id
            },
            config: { headers: {'Content-Type': 'multipart/form-data' }}
          })
            .then(response => {
              app.services = response.data;
            })
            .catch(error => {
              console.log(error);
            });
        }
      },
      getAllData: () => {
        app.getComments();
        app.getServices();
      },
      getComments: () => {
        axios.get('api/guestBook.php?order=day')
          .then(response => {
            app.comments = response.data;
          })
          .catch(error => {
            console.log(error);
          });
      },
      getServices: () => {
        axios.get('api/services.php')
          .then(response => {
            app.services = response.data;
          })
          .catch(error => {
            console.log(error);
          });
      },
    }
  })
</script>

</body>
</html>