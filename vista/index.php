<!doctype html>
<html lang="en">
  <head>
    <title>PCTeck</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="vista/css/indexstyle.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php 
        require_once("templetes/header.php");
    ?>
    <?php
        require_once("templetes/slide.php")
    ?>
    <div class="container">

        <div class="row">
        <div class="submenu col-sm-12 p-2" style="text-align:center">
            <a href="index.php?OrdCal=ordenarcalificacion">Mejor calificación</a>
            <a href="index.php?OrdPre=ordenarprecio"> Menor precio</a>
        </div>
            <?php
                if(!empty($datos)):
                    foreach($datos as $key => $value)
                        foreach ($value as $v):
            ?>
                <div class="col-sm-3 p-2">
                        <div class="card" >
                            <img style="" src="data:image/jpg;charset=utf8;base64,<?php echo $v['image'] ?>" />
                            <a href='index.php?AbrirProd=producto&Modelo=<?php echo $v['Modelo']?>' class="hrefCard"> 
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$", $v['Precio']?> </h5>
                                    <p class="card-text"><i class='fas fa-bolt' style="font-size:16px; color:#E75A7C;"></i> <?php echo $v['CalificacionPromedio']?>/5 </p>
                                    <p class="card-text"><?php echo $v['Especificaciones']?></p>
                                    <p>Modelo: <?php echo $v['Modelo']?></p>
                                    <a href='index.php?AgregarCarrito=producto&Modelo=<?php echo $v['Modelo']?>' class="btn btn-dark">
                                        <i class='fas fa-shopping-cart' style='color:with'></i>
                                    </a> 
                                </div>
                            </a>
                        </div>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                    <td>No hay registros</td> 
            <?php endif ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>