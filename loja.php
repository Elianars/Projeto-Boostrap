<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>full stack eletro </title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>

    <!-- Inicio Menu -->

    <?php
include('menu.html');
?>
    
    <!-- Fim do menu -->
    <header>
        <h2>Lojas</h2>
    </header>
    <hr>
    <section class="container">
    <div class="d-flex align-items-end flex-column">
        <div class="container p-2">
            <div class="row my-5 flex-column flex-sm-row">
            <div class="col text-center my-4">
            <h3>
                Rio de janeiro
            </h3>
            <p>
                Avenida Presidente vargas, 5000
            </p>
            <p>
                10 &ordm; andar
            </p>
            <p>
                Centro
            </p>
            <p>
                (21) 3333-3333
            </p>

        </div>

        <div class="col text-center my-4">
            <h3>
                São Paulo
            </h3>
            <p>
                Avenida Paulista,985
            </p>
            <p>
                3 &ordm; andar
            </p>
            <p>
                Jardins
            </p>
            <p>
                (11) 4444-4444
            </p>

        </div>

        <div class="col text-center my-4">
            <h3>
                Santa Catarina
            </h3>
            <p>
                Rua Major &Aacute;Vila, 370
            </p>
            <p>
                Vila Mariana
            </p>
            <p>
                (47) 5555-5555
            </p>
        </div>

            </div>
        </div>
    </div>

        
    </section>
   
    <?php
    include('rodape.html');
    ?>
    
    <script src="./js/script.js"></script>
</body>

</html>