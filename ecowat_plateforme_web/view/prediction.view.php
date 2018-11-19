<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Serge Lawson">

    <title>Ecowat - résultats de la prédiction</title>

    <!-- Bootstrap core CSS -->
    <link href="../style/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style/style.css" rel="stylesheet">
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
        <div class="row">
          <div class="col-md-12 col-sx-12 col-lg-12">
             <table class="table table-bordered table-striped table-hover">
                    <thead style="background: #31b0d5; color: white;">
                      <tr>
                        <td>Année</td>
                        <td>Population urbainse</td>
                        <td>Population rurale</td>
                        <td>Consomation urbaine</td>
                        <td>Consomation rurale</td>
                        <td>Consomation totale annuelle</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td><?php echo $annee; ?></td>
                      <td><?php echo $pop_u; ?> habitants</td>
                      <td><?php echo $pop_r; ?> habitants</td>
                      <td>
                      <?php echo $conso_u; ?> m3
                      </td>
                      <td><?php echo $conso_r; ?> m3</td>
                       <td><?php echo $conso_u+$conso_r; ?> m3</td>
                  </tr>
                    </tbody>
                </table>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-4">

          </div>
          </div>
          <div class="col-md-4">

          </div>
        </div>

        <hr>
    </main>

    <footer class="container">
      <p>© Ecowat 2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
  

</body></html>