<!doctype html>
<html lang="en">
  <head>
    <title>PCTeck</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php 
        require_once("templetes/header.php");
    ?>
  <!-- Sección para visualizar los productos -->
	<?php foreach ($datos as $value): ?> 
		<?php  foreach ($value as $v ): ?>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-sm-6">
                        <img style="width:400px" src="data:image/jpg;charset=utf8;base64,<?php echo $v['image'] ?>" />
                    </div>
                    <div class="col-sm-6">
                        <h3><?php echo $v['Especificaciones'] ?> </h3><br>
                        <h1>$<?php echo $v['Precio'] ?></h1>
                       <p style="font-size:20px">en 6 x  <b style="color:#E75A7C"> $<?php $seismeses = $v['Precio']/6; echo round($seismeses, 2);?></b> a MSI | 12 x  <b style="color:#E75A7C"> $<?php $docemeses = $v['Precio']/12; echo round($docemeses, 2);?></b> a MSI</p>
                        <h4><i class='fas fa-bolt' style="color:#E75A7C"></i> <?php echo $v['CalificacionPromedio']?>/5 </h4><br>
                        <p>Modelo: <?php echo $v['Modelo'] ?></p>
                        <a href="#" class="btn btn-dark btn-block">
                          <i class='fas fa-shopping-cart' style='color:with'> </i>
                           Agregar al carrito
                        </a> 
                    </div>
                </div>
            </div>
		<?php endforeach ?>
	<?php endforeach ?>


<!-- Sección para mostrar los comentarios -->
<?php if(!empty($datosComentarios)): ?>
  <?php foreach ($datosComentarios as $value): ?> 
		<?php  foreach ($value as $v ): ?>
            <div class="container">
                <div class="row mt-5">
                  <div class="col-sm-12" style="text-align:center">
                    <h3>Comentarios recientes</h3>
                  </div>
                  <div class="row mt-3 p-3" style="box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.08);">
                    <div class="col-sm-1">
                      <img style="border-radius:50%; width:80px" src="data:image/jpg;charset=utf8;base64,<?php echo $v['image'] ?>" />
                    </div>
                    <div class="col-sm-11">
                        <h4><?php echo $v['Nombre']?></h4>
                        <h6><i class='fas fa-bolt' style="color:#E75A7C"></i> <?php echo $v['Calificacion']?></h6>
                        <p><?php echo $v['Texto'] ?> </p>
                    </div>
                  </div>
                </div>
            </div>
            <br>
		<?php endforeach ?>
	<?php endforeach ?>
  <?php else: ?>
    <div class="container">
      <div class="row mt-5">
        <div class="col-sm-12" style="text-align:center">
          <h3>Comentarios recientes</h3>
          <h6 class="mt-4">No hay comentarios</h6>
        </div>
      </div>
    </div>
  <?php endif ?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

