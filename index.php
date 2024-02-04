<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previsão do Tempo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./imgs/unnamed.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-previsao">
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo $cidade; ?></p>
                        <h2><?php echo $dataHoje; ?></h2>
                        <h1><?php echo $horario; ?></h1>
                        <p><?php echo $descricao; ?></p>
                        <h1><?php echo $temperatura; ?>°C</h1>
                    </div>
                </div>
                <div class="row card-previsao-pai">
                    <div class="col-md-2 card-previsao">
                        <h3>Seg</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4> <?php echo implode($tempMaxDia['05/02']); ?>°C</h4>
                        <h4> <?php echo implode($tempMinDia['05/02']); ?>°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Ter</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4><?php echo implode($tempMaxDia['06/02']); ?>°C</h4>
                        <h4><?php echo implode($tempMinDia['06/02']); ?>°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Qua</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4><?php echo implode($tempMaxDia['07/02']); ?>°C</h4>
                        <h4><?php echo implode($tempMinDia['07/02']); ?>°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Qui</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4><?php echo implode($tempMaxDia['08/02']); ?>°C</h4>
                        <h4><?php echo implode($tempMinDia['08/02']); ?>°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Sex</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4><?php echo implode($tempMaxDia['09/02']); ?>°C</h4>
                        <h4><?php echo implode($tempMinDia['09/02']); ?>°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Sáb</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4><?php echo implode($tempMaxDia['10/02']); ?>°C</h4>
                        <h4><?php echo implode($tempMinDia['10/02']); ?>°C</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>