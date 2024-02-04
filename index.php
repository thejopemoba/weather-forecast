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
                    <div class="col-md-6">
                        <p>Cidade</p>
                        <h2>Janeiro 4</h2>
                        <h1>12:37</h1>
                        <p>Nublado</p>
                    </div>
                    <div class="col-md-6">
                        <p>Pressure</p>
                        <p>Sunrise</p>
                        <p>Sunset</p>
                        <h1>20°C</h1>
                    </div>
                </div>
                <div class="row card-previsao-pai">
                    <div class="col-md-2 card-previsao">
                        <h3>Seg</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4>20°C</h4>
                        <h4>18°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Ter</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4>20°C</h4>
                        <h4>18°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Qua</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4>20°C</h4>
                        <h4>18°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Qui</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4>20°C</h4>
                        <h4>18°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Sex</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4>20°C</h4>
                        <h4>18°C</h4>
                    </div>
                    <div class="col-md-2 card-previsao">
                        <h3>Sáb</h3>
                        <img width="80px"  src="./imgs/sol.png">
                        <h4>20°C</h4>
                        <h4>18°C</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>