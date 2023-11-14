<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="public11/css/main.css">
</head>


  <body>
    
    <section class="introduccion" id="introduccion-te">
      <h2 class="titulo">-NUESTROS PRODUCTOS-</h2>
      <img class="icono" src="public11/imagenes/te-verde.png"> 
      </section>

    <table class="table">
      <thead>
        <tr>
          <th scope="col" id="inicio">PRODUCTO</th>
          <th scope="col" id="inicio">DESCRIPCION</th>
          <th scope="col" id="inicio">STOCK</th>
          <th scope="col" id="inicio">PRECIO</th>
          <th scope="col" id="inicio">ACCIONES</th>
          </tr>
        </thead>
      <tbody class="table-group-divider">
          

    <?php

      $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

      $query = "SELECT * FROM productos";

      $resultado = mysqli_query($conexion, $query);

      while($unafila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
          echo "<td>". $unafila["nombre_producto"]."</th>";
          echo "<td>". $unafila["descripcion_producto"]."</td>";
          echo "<td>". $unafila["cantidad_producto"]."</td>";
          echo "<td>". $unafila["precio_producto"]."</td>";
          echo "<td><a href='./eliminar_producto.php?id=".$unafila["id_producto"]."'>Eliminar</a></td>";
        echo "/<tr>";

        }

      mysqli_close($conexion);

    ?>


        </tbody>
      </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>











