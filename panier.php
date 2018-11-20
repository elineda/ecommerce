<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Design Tech Académie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="boutton.css" />
    <link rel="stylesheet" href="panier.css" />
  </head>
  <body>
    <header>
      <div class="head">
        <div class="titre">La vampy Bat</div>
      <div class="logo">

        <img src="logo.png"></img></div>
            <div class="barre">
        <button type="button" class="btn btn-outline-dark">Inscription</button>
        <button type="button" class="btn btn-outline-dark">Connection</button>
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
          <span class="text">Aceuil</span>
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
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>

      <!--Panier-->
      <h1> Vampy Panier</h1>

      <br>
            <div class="container">
              <div class="row">

                <div class="col-lg-4 ">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://medias.expertissim.com/media/cache/media_zoom/uploads/object/2015/03/16/12237184/3000x3000_55363ba1dae02.jpg" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text"> Bien verifier avant de mettre dans le panier qu'il reste du sang en boutique sinon bien faire votre commande !</p>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="buttonHolder">
                    <a href="#" class="button tick"></a>
                    <a href="#" class="button cross"></a>
                  </div>
                </div>

                <div class="col-lg-4">
                  <button type="Suprimer" class="btn btn-light supprimer">Supprimer</button>
                </div>
              </div>
            </div>





                  <br>
                        <div class="container">
                          <div class="row">

                            <div class="col-lg-4 ">
                              <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="livre.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text"> Bien verifier avant de mettre dans le panier qu'il reste du sang en boutique sinon bien faire votre commande !</p>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="buttonHolder">
                                <a href="#" class="button tick"></a>
                                <a href="#" class="button cross"></a>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <button type="Suprimer" class="btn btn-light supprimer">Supprimer</button>
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
