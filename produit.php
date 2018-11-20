<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Design Tech Académie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="boutton.css" />
  </head>
  <body>

<!-- Modal inscitpion -->
<div class="modal fade" id="insciption" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1"><br>
          <input type="text" class="form-control" placeholder="Prenom" aria-label="Username" aria-describedby="basic-addon1"><br>
          <input type="number" class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1"><br>
          <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1"><br>
          <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1"><br>
          <input type="password" class="form-control" placeholder="Verification" aria-label="Username" aria-describedby="basic-addon1">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-dark">Inscription</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal connexion -->
<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1"><br>
          <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1"><br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-dark">Connexion</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal commentaires -->
<div class="modal fade" id="commentaires" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Victor</h5>
        <p>Un produit de bonne qualité. Presque aussi bien qu'un prelevé à la gorge. Je recommande.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

    <header>
      <div class="head">
        <div class="titre">La vampy Bat</div>
      <div class="logo">

        <img src="logo.png"></img></div>
            <div class="barre">
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#insciption">Inscription</button>
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#connexion">Connexion</button>
        <button type="button" class="btn btn-outline-dark">Panier</button>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="portfolio-experiment">
        <!--<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>-->
        <a>
          <span class="text">Accueil</span>
          <span class="line -right"></span>
          <span class="line -top"></span>
          <span class="line -left"></span>
          <span class="line -bottom"></span>
        </a>
      </li>
      <li class="portfolio-experiment">
      <!--  <a class="nav-link" href="#">Banque de sang</a>-->
      <a>
        <span class="text">Banque de sang</span>
        <span class="line -right"></span>
        <span class="line -top"></span>
        <span class="line -left"></span>
        <span class="line -bottom"></span>
      </a>
      </li>
      <li class="portfolio-experiment">
        <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <a>
          <span class="text">Vetements</span>
          <span class="line -right"></span>
          <span class="line -top"></span>
          <span class="line -left"></span>
          <span class="line -bottom"></span>
        </a>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Femme</a>
          <a class="dropdown-item" href="#">Homme</a>
        </div>
      </li>
      <li class="portfolio-experiment">
        <!--<a class="nav-link " href="#">Librairie</a>-->
        <a>
          <span class="text">Librairie</span>
          <span class="line -right"></span>
          <span class="line -top"></span>
          <span class="line -left"></span>
          <span class="line -bottom"></span>
        </a>
      </li>
      <li class="portfolio-experiment">
        <!--<a class="nav-link " href="#">Contact</a>-->
        <a>
          <span class="text">Contact</span>
          <span class="line -right"></span>
          <span class="line -top"></span>
          <span class="line -left"></span>
          <span class="line -bottom"></span>
        </a>
      </li>
          </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    </header>
    <main>
      <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Home</li>
        <li class="breadcrumb-item" aria-current="page">Banque de sang</li>
        <li class="breadcrumb-item active" aria-current="page">1 litre O-</li>
      </ol>
<div class="container produit">
  <div class="row">
    <div class="col-12 tprod">
      Un litre de Sang O-
    </div>
    <div class="col-4">
      <img class="card-img-top" src="https://medias.expertissim.com/media/cache/media_zoom/uploads/object/2015/03/16/12237184/3000x3000_55363ba1dae02.jpg" alt="Card image cap">
    </div>
    <div class="col-7 xprod">
      <h5>7.5€</h5>
      <p>Toutes nos bouteilles sont prelevées sur des humains en bonne santé et sont certifiées par l'Autorité.
      Nous rappelons que personne n'est mort durant le prelevement et que le sang d'un seul humain est présent dans la bouteille. Sang non cloné.</p>
      <input id="achat" type="number" class="form-control" placeholder="Quantité" aria-label="Username" aria-describedby="basic-addon1">
      <br><div class="bprod"><button type="button" class="btn btn-dark">Acheter</button>
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#commentaires">Commentaires</button></div>
    </div>
  </div>
</div>

    </main>

    <!--footer-->
    <footer>
      <div class="container foot">
        <div class="row">
          <div class="col-lg-6">
            Facebook et Twitter
          </div>
          <div class="col-lg-6">
            <ul>
              <li>Condition d'utilisation</li>
              <li>Livraison</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copy">
        Copyright. Site appartenant à l'Autorité.
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
  </body>
</html>