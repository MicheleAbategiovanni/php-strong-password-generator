<?php

include_once "functions.php";

$passwordLenght = isset($_GET["length"]) ? $_GET["length"] : '';

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    <head>
        <nav class="nav py-3">

            <h1 class="text-center">Strong Password</h1>

        </nav>


    </head>

    <main>

        <section>

            <div class="container">

                <form action="" method="get">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Lunghezza</span>
                        <input type="text" class="form-control" placeholder="" name="length">
                        <button class="btn btn-danger">Invia</button>
                    </div>

                </form>


                <div>
                    <h2>

                        <?php if (isset($_GET['length'])) { ?>
                            <div class="alert alert-warning" role="alert">
                                <h5 class="text-black">La password generata per te è:</h5>
                                <p class="text-danger"> <?php randomChar($passwordLenght) ?> </p>
                            </div>
                        <?php } ?>

                    </h2>
                </div>


            </div>

        </section>

    </main>

</body>

</html>