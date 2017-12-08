<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WAS | Error</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>

<div class="jumbotron">
    <h1 class="display-3">Error!</h1>
    <p class="lead">Ops, it looks like something went wrong during this operation.</p>
    <hr class="my-4">
    <?php
    if(isset($_GET['error'])) {

        include "models/Utilities.php";
        /*
         * As we can directly hit error page so loading configuration again here.
         */
        $configuration = Utilities::readJSON('configuration.json');

        if($configuration['environment'] == 'dev') {
            ?>
            <div class="alert alert-danger"><?= $_GET['error']; ?></div>
            <?php
        }
    }
    ?>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="index.php" role="button">Go to Home</a>
    </p>
</div>

</body>
</html>