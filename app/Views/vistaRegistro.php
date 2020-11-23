<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar de Adopcion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css")) ?>">
</head>
<body>
    
    <header class="header">

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
            <img src="<?php echo(base_url("public/img/icono.png"))?>" id="icono">
            <a class="navbar-brand">Hogar de Adopción</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/manual/public/animales">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/manual/public/animales/listar">Listar</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    
    </header>

    <main>
    
        <div class="container">
            
            <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo(base_url("public/img/logo1.png"))?>" class="d-block w-100 imagenes" alt="imagen1">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo(base_url("public/img/logo2.jpg"))?>" class="d-block w-100 imagenes" alt="imagen2">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo(base_url("public/img/logo3.jpg"))?>" class="d-block w-100 imagenes" alt="imagen3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <h1><?php echo($nombre1)?></h1>
            <h1><?php echo($nombre2)?></h1>

            <form class="mt-5" action="<?php echo(base_url("public/animales/registro"))?>" method="POST">
                <h5>REGISTRO DE ANIMALES:</h5>
                <br>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombreAnimal">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="number" class="form-control" placeholder="Edad" name="edadAnimal">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Comida" name="comidaAnimal">
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-control" name="tipoAnimal">
                            <option value="0">Tipo de Animal</option>
                            <option value="1">Domestico</option>
                            <option value="2">Silvestre</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <textarea class="form-control" rows="3" name="descripcion" placeholder="Descripción"></textarea>
                    </div>   
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="URL (foto)" name="foto">
                    </div>   
                </div>

                <button type="submit" class="btn btn-info mt-3" id="btn">registrar</button>

                <h5><?php echo(session('mensaje'))?></h5>

            </form>

        <br><br><br><br>
        </div>
    
    <footer class="navbar-dark bg-dark" id="footer">
        <p> &copy; Laura Salazar - 2020</p>
    </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>