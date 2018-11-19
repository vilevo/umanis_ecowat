<?php include('functions/prediction.func.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Serge Lawson">

    <title>Ecowat - acceuil</title>

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/style.css" rel="stylesheet">
  </head>

  <body cz-shortcut-listen="true">

    <nav class="navbar navbar-expand-md navbar-light navbar-enginnova fixed-top">
      <a class="navbar-brand" href="#">Ecowat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index">Acceuil</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron heading-area">
        <div class="container">
          <h3 class="page-heading text-center">Meilleur gestion de l'eau</h3>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <h3>Decouvrire Ecowat</h3>
        <p>"L'eau est un enjeu des plus importants pour la population et les activités qui en sont tributaires . L'avoir à disposition en quantité suffisante, en qualité contribue au maintient de la santé. Dans le monde, 80% des maladies sont attribuées au manque d'eau solubre et à l'inadaptation des systèmes d'assainissement (OMS, 2004)." : <em>Melissa GANDJI MGBATOU</em>.</p>
        <p>Le graphe ci dessous montre qu'au togo plus de la moitié de la population n'a pas accès à l'eau potable et continue toujours pas utilisé de l'eau de puit .</p>
        <img src="image/image.JPG" width="" height="">

        <p>Ecowat perment alors de prédire le besoin réel en eau potable de la population et son optimisation pour que tout le monde puisse y avoir accès .</p>
        <div class="row mt-3">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
           <div class="u-card" id="card">
             <div class="u-card-header text-center">
               <h6>Ecowat</h6>
               <p>Pour une bonne gestion de l'eau</p>
               <p>@Enginnova @Umanis</p>
             </div>
             <!--<img src="" class="d-block avt-img">-->
             <div class="u-card-body">
               <p class="text-center">Pour prédire le besoin en eau de la population togolaise dans n'importe qu'elle année, veuillez cliquer sur commencer !</p>
             </div>
             <div class="u-card-footer d-flex justify-content-center">
               <button class="btn btn-primary" data-toggle="modal" data-target="#mentorm">Commencer</button>
             </div>
           </div>
          </div>
          </div>
          <div class="col-md-4">

          </div>
        </div>

        <hr>

      </div> <!-- /container -->
    <div class="modal fade" id="mentorm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Formulaire</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Veuillez renseigner l'année voulue ci dessous 
          <div class="row p-1">
            <div class="col-2">
              <strong> </strong>
            </div>
            <div class="col-10"><strong> </strong></div>
          </div>
          <div class="row">
            <form method="post" action="" method="POST">
            <div class="col-2">
              <strong></strong>
            </div>
            <div class="col-10">
             <label>Année :</label><input type="text" name="annee" autocomplete required placeholder="Ex: 2017">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="confirmer" class="btn btn-primary">Confirmer</button>
        </div>
        </form>
      </div>
    </div>
  </div>
    </main>

    <footer class="container">
      <p>© Ecowat 2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  

</body></html>