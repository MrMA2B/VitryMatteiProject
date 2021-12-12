<!DOCTYPE html>
<html>
    <head>
        <title>Blog MVC Miage</title>
        <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
        <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    </head>

    <body>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Concessionaire Auto Paris</h1>
                <p class="col-md-8 fs-4"></p>
               <a href="src/view/admin.php">Admin </a><br>
               <a href="src/view/connexion.php">Connexion </a>
            </div>
        </div>

        <div class="container">
            <?=  $content ?>
        </div>

        <footer>
            Copyright
        </footer>
    </body>
</html>