<?php
require 'src\Util\ScanFile.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./public/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./public/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Andy Agustian</a>

    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Search File Contents</h1>
          </div>

          <div> 
                <form action="?act=count" method="post">
                <div class="form-group">
                    <label for="path">Path</label>
                     <input type="text" class="form-control" id="inputPath" name="inputPath">
                </div>
                <div class="form-group">
                    <label for="phrase">Phrase</label>
                     <input type="text" class="form-control" id="inputPhrase" name="inputPhrase">
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="submit" name="submit" value="submit" id="btn-submit" class="btn btn-primary mb-2">Count</button>
                    <button type="reset" name="reset" id="btn-reset" class="btn btn-secondary mb-2" onClick="location.href='?act=index'">Reset</button>
                </div>
              </form>
              <?php
                // switch
                $action = (!isset($_GET['act']))?"index":$_GET['act'] ;
                switch ($action){
                    case "index" : include("default.php");
                        break;
                    case "count" : include("count.php");
                        break;
                    default: include("default.php");
                        break;
                }
              ?>
          </div>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./public/bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./public/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="./public/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>


  </body>
</html>