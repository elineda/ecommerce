<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vampy Bat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="boutton.css" />
    <link rel="stylesheet" href="panier.css"/>
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

    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="titre">La vampy Bat</div>
          </div>
          <div class="col-lg-4">
            <img src="logo.png"></img>
          </div>
          <div class="col-lg-4">
            <div class="barre">
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#insciption">Inscription</button>
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#connexion">Connexion</button>
        <a class="btn btn-outline-dark" href="http://51.75.126.53/ecommerce/panier.php" role="button">Panier</a>
      </div>
          </div>
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
        <a href="http://51.75.126.53/ecommerce/index1.php">
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
        <a href="http://51.75.126.53/ecommerce/contact.php">
          <span class="text">Contact</span>
          <span class="line -right"></span>
          <span class="line -top"></span>
          <span class="line -left"></span>
          <span class="line -bottom"></span>
        </a>
      </li>
          </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>
    </header>
    <main>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
<!-- caroussel
<br
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> liiste article-->
<div class="container article">
  <div class="row">
    <!-- carte-->
    <div class="col-lg-4 col-md-6 col-sm-12 colonne">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://medias.expertissim.com/media/cache/media_zoom/uploads/object/2015/03/16/12237184/3000x3000_55363ba1dae02.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">1 litre O-</h5>
          <p class="card-text">Toutes nos bouteilles sont prelevées sur des humains en bonne santé et sont certifiées par l'Autorité</p>
        </div>
          <a href="http://51.75.126.53/ecommerce/produit.php" class="btn btn-dark">Acheter</a>

      </div>
    </div>
    <!-- fin-->
    <!-- carte-->
    <div class="col-lg-4 col-md-6 col-sm-12 colonne colonne">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://medias.expertissim.com/media/cache/media_zoom/uploads/object/2015/03/16/12237184/3000x3000_55363ba1dae02.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">1 litre AB+</h5>
          <p class="card-text">Toutes nos bouteilles sont prelevées sur des humains en bonne santé et sont certifiées par l'Autorité</p>
          </div>
          <a href="#" class="btn btn-dark">Acheter</a>
        </div>
    </div>
    <!-- fin-->
    <!-- carte-->
    <div class="col-lg-4 col-md-6 col-sm-12 colonne colonne">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="livre.jpg?" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">L'Histoire</h5>
          <p class="card-text">L'histoire glorieuse de notre race. Le livre contient les 4 000 dernières années. Pour plus loin, nous vous conseillons nos autres tomes.</p>
          </div>
          <a href="#" class="btn btn-dark">Acheter</a>

      </div>
    </div>
    <!-- fin-->
    <!-- carte-->
    <div class="col-lg-4 col-md-6 col-sm-12 colonne colonne">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="necromonticon.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Le necronomicon</h5>
          <p class="card-text">Invoquer tout et surtout n'importe quoi. Amusement garanti. Nous rappelons à notre chère clientèle que l'invocation de grands anciens est interdite par l'Autorité.</p>
          </div>
          <a href="#" class="btn btn-dark">Acheter</a>

      </div>
    </div>
    <!-- fin-->
    <!-- carte-->
    <div class="col-lg-4 col-md-6 col-sm-12 colonne colonne">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="chat.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Ailes de chauve souris</h5>
          <p class="card-text">Votre compagnon preferé à aussi besoin de voler. Nous vous porposons de lui offrir des ailes. Celà lui permettra de chasser les oiseaux dans les airs.</p>
          </div>
          <a href="#" class="btn btn-dark">Acheter</a>

      </div>
    </div>
    <!-- fin-->
    <!-- carte-->
    <div class="col-lg-4 col-md-6 col-sm-12 colonne colonne">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="robe.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Robe Rouge</h5>
          <p class="card-text">Soyez la reine de la nuit avec cette robe en soie rouge. Fabriquée en France. Nombreuses tailles disponibles.</p>
        </div>
          <a href="#" class="btn btn-dark">Acheter</a>
      </div>
    </div>
    <!-- fin-->
  </div>
</div>


    </main>

    <!--footer-->
    <footer>
      <div class="fooot"></div>
      <div class="container foot">
        <div class="row">
          <div class="col-lg-6">
            <h5>Suivez nous !</h5>
              <ul class="cont">
                <li class="one-button">
                  <i class="fa fa-twitter fa-2x"></i>
                </li>
                <li class="one-button">
                  <i class="fa fa-facebook fa-2x"></i>
                </li>
                <li class="one-button">
                  <i class="fa fa-youtube fa-2x"></i>
                </li>
              </ul>
          </div>
          <div class="col-lg-6 cond">
            <ul>
              <li><a href="#">Condition d'utilisation<a></li>
              <li><a href="#">Livraison</a></li>
              <li><a href="#">La charte</a></li>
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
