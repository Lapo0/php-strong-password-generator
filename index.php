<?php

    var_dump(__DIR__);

    // includere function.php nel file
    include __DIR__. '/partials/function.php';

    $password = $_GET['password'];
    var_dump($password);

    $random_password = getPassword($password);
    var_dump($random_password);

  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSWORD GENERATOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

    <main>
        <section class="py-5 bg-primary">
            <div class="container text-center">
                <h1 class="text-body-secondary">
                    Strong Password Generator
                </h1>
                <h2 class="text-light">
                    Genera una password sicura
                </h2>
            </div>

            <div class="container">
                <div class="row bg-primary-subtle rounded my-4">
                    <?php 
                        // se $random_password è vuoto...
                        if (empty($random_password)) {
                            ?>
                                <p class="fs-4 m-0 py-3">
                                    Nessun parametro inserito
                                </p>
                            <?php
                          // altrimenti stampa la $password_random...
                        } else {
                            ?>
                                <p class="fs-4 m-0 py-3">
                                    La tua password è : 
                                    <?php echo $random_password ?>
                                </p>
                            <?php
                        }
                    ?>
                </div>
            </div>

            <div class="container">
                <form action="./index.php" method="GET">
                    <input type="text" name="password" placeholder="Lunghezza password...">
                    
                    <input type="submit">
                </form>
            </div>
        </section>
    </main>
    
</body>
</html>