<?php
  include("./Logica/db.php");
  $consulta = "SELECT * FROM users";
  $resultado = $conexion->query($consulta); 
  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina web</title>
    <link rel="stylesheet" href="./Vistas/css/style.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
   <header class="blue darken-4">
        <div class="row">
            <div class="col s3">
                <section class="container center-align">
                    <img class="responsive-img" src="./Vistas/Image/Aragon.jpg" alt="Imagen de decoracion" style="width: 120px; height: 120px;">
                </section>
            </div>
            <div class="col s6">
                <section class="container center-align">    
                    <h1 class="white-text">FES Aragon</h1> 
                </section>
            </div>
            <div class="col s3">
                <section class="container center-align">
                    <img class="responsive-img" src="./Vistas/Image/images.png" alt="Imagen de decoracion" style="width: 120px; height: 120px;">
                </section>
            </div>
        </div>
    </header>
    <div class="container">
        <section>
            <h1 class="orange-text center-align">Usuarios</h1>
        </section>
        <section>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td>
                    <a href="./logica/update.php?id=<?php echo $row['id']; ?>"><button class="btn waves-effect waves-light green" type="submit" name="action">Editar</button></a>
                    <a href="./logica/delete.php?id=<?php echo $row['id']; ?>"><button class="btn waves-effect waves-light coffe" type="submit" name="action">Eliminar</button></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <section class="center-align">
            <a href="./logica/create.php"> <button class="btn waves-effect waves-light light-orange darken-4" type="submit" name="action">Agregar Usuarios</button></a>
        </section>
        <br>
    </div>
        <footer class="page-footer deep-orange accent-3">
          <div class="container center-align">
            <div class="row">
              <div class="col s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="yellow-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright center-align">
            <div class="container">
            © 2025 Copyright Text
            </div>
          </div>
        </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>