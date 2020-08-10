<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
<header>
<div class="contenedor">
    <h1 class="titulo">Subir Foto</h1>
</div>
</header>
<div class="contenedor">
   <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="formulario" method="POST">
   
        <label for="foto">Selecciona tu foto</label>
        <input type="file" id="foto" name="foto">
        <label for="titulo">Título de la foto</label>
        <input type="text" name="titulo" id="" name="titulo">
        <label for="texto">Descripción:</label>
        <textarea name="texto" id="texto" placeholder="Introduce una descripción" ></textarea>
        <?php if(isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif ?>
        <input type="submit" class="submit" value="Subir Foto">

   </form>
</div>
<footer>
<p class="copyright">Página creada por Juan Antonio Ladrón de Guevara Rueda</p>
</footer>
    
</body>
</html>
