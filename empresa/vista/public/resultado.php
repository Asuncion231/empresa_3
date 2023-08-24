<?php
include "../../modelo/BD/config.php";
include "../../modelo/BD/dataBase.php";
$dbname=new DataBase();
$query="SELECT * FROM tbproducto";
$read =$dbname->select($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="curso de php Segundo año">
  <meta name="keywords" content="Introduccion al lenguaje Php">
  <title>Resultado</title>
   <link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
</head>
<body>
  <section class="container bg-light mt-5 p-4 rounded fade-in">
 <main class="row my-4">
 		<div class="col-lg-12">

         	<table class="table table-hover">
         		<thead>
         			<tr class="text-light bg-dark text-center">
         				<th scope="col">id_producto</th>
         				<th scope="col">nombre</th>
         				<th scope="col">cantidad</th>
         				<th scope="col">precio</th>
         				<th scope="col">Categoria</th>
         				<th scope="col">Proveedor</th>
                
         			</tr>
         		</thead>
         		<tbody class="text-center">
         			<?php foreach ($read as $row) {?>
              <tr>
         			<td class="bg-light text-uppercase"><?php echo $row['id_producto'];?></td>
         			<td class="bg-light text-uppercase"><?php echo $row['nombre'];?></td>
         			<td class="bg-light text-uppercase"><?php echo $row['cantidad'];?></td>
         			<td class="bg-light text-uppercase"><?php echo $row['precio'];?></td>
         			<td class="bg-light text-success fw-semibold fst-italic"><?php 
              switch ($row['id_categoria']) {
                case 1:
                  echo"Dulces";
                  break;
                  case 2:
                  echo"Fideos";
                  break; 
                  case 3:
                  echo"Ola";
                  break;
                default:
                  echo 'No existe dato';
                  break;
              }
            ?></td>

          <td class="bg-light text-success fw-semibold fst-italic"><?php 
              switch ($row['id_proveedor']) {
                case 1:
                  echo"Soalpro";
                  break;
                  case 2:
                  echo"Estrella";
                  break; 
                  case 3:
                  echo"Arcor";
                  break;
                default:
                  echo 'No existe dato';
                  break;
              }
            ?></td>

         			<?php } ?>
         		</tr>
         			
         		</tbody>
         	</table>	
 	</div>
 	
 </main>
 </section>
<script type="../vista/bootstrap/js/bootstrap.min.css"></script>
</body>
</html>

