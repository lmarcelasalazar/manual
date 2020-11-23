<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css")) ?>">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="<?php echo(base_url("public/img/icono.png"))?>" id="icono">
  <a class="navbar-brand">Hogar de Adopción</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/manual/public/animales">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/manual/public/animales/listar">Listar</a>
      </li>
    </ul>
  </div>
</nav>
    </header>
    <main>
    
        <div class="container">
        
            <div class="row row-cols-1 row-cols-md-3">

                <?php foreach($animales as $animal):?>
                    
                    <div class="col mb-4">
                        
                        <div class="card h-100">
                            <img src="<?php echo($animal["foto"])?>" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h3 class="card-title"><strong>Nombre:</strong> <?php echo($animal["nombreanimal"])?></h3>
                                <h5 class="card-title"><strong>Edad: </strong><?php echo($animal["edad"])?></h5>
                                <h5 class="card-title"><strong>Comida: </strong><?php echo($animal["comida"])?></h5>
                                <h5 class="card-title"><strong>Tipo Animal: </strong><?php echo($animal["tipoanimal"])?></h5>
                                <h5 class="card-title"><strong>Descripción: </strong><?php echo($animal["descripcion"])?></h5>

                                <a href="<?php echo(base_url("public/animales/eliminar/".$animal["id"]))?>" class="btn btn-danger">Eliminar</a>
                                

                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($animal["id"])?>">
                                    Editar
                                </button>
                                <br>
                                <h6><?php echo(session('mensaje'))?></h6>
                            </div>
                        </div>

                        <div class="modal fade" id="editar<?php echo($animal["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edición de animal:</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo(base_url("public/animales/editar/".$animal["id"]))?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($animal["nombre"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Edad:</label>
                                                <input type="number" class="form-control" name="edadEditar" value="<?php echo($animal["edad"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Comida:</label>
                                                <input type="text" class="form-control" name="comidaEditar" value="<?php echo($animal["comida"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descEditar"><?php echo($animal["descripcion"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                <?php endforeach?>


            </div>

        </div>
        <footer class="navbar-dark bg-dark" id="footer">
        <p> &copy; Laura Salazar - 2020</p>
    </footer>
    </main>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>