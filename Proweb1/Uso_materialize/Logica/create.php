<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO users (name, email, telefono) VALUES ('$name', '$email', '$telefono')";
    
    if ($conexion->query($sql) === TRUE) {
        header('Location: ./create.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
   <link rel="stylesheet" href="../Vistas/css/1-style.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    
    <header class="coffe">
     <section class="container centet-align">
       <h1 class="white-text">Fes Aragon</h1>
       </section>
   
    </header>
  
    <main>
    <section>
    <div>
      <form action="create.php" method="POST">
    <label for="name">Nombre:</label><br><br>
    <input type="text" id="name" name="name" required><br><br>
        
    <label for="email">Correo:</label><br><br>
    <input type="email" id="email" name="email" required><br><br>
        
    <label for="telefono">Telefono:</label><br><br>
    <input type="number" id="telefono" name="telefono" required><br><br>
        <section class="center-align"></section>
    <input class="input waves-effect waves-light light-blue darken-4" type="submit" value="Guardar Usuario">
    </form><br> 
     <button class="btm waves-effect waves-light"><a href="../index.php">Regresar a la lista</a></button>

            </div>
        </section>
    </main><br><br>
   <footer class="page-footer deep-coffe accent-3">
          <div class="container center-align">
            <div>
              <div>
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright center-align">
            <div class="container">
            © 2025 Copyright Text
            </div>
          </div>
        </footer>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    

</body>
</html>