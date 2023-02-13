<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
</head>

<body>
    <form action="" method="post">
    <p>
            <label for="coder">Coder</label>
            <input id="coder" type="text" name="coder" 
            value="<?= $songs['coder'] ?>">
        </p>    
    <p>
            <label for="titulo">Titulo</label>
            <input id="titulo" type="text" name="titulo" 
            value="<?= $songs['titulo'] ?>">
        </p>
        <p>
            <label for="artist">Artist</label>
            <input id="artist" type="text" name="artist" 
            value="<?= $songs['artist'] ?>">
        </p>
        <p>
            <label for="genre">Genre</label>
            <input id="genre" type="text" name="genre" 
            value="<?= $songs['genre'] ?>">
        </p>
        <p>
            <label for="url">Url</label>
            <input id="url" type="text" name="url" 
            value="<?= $songs['url'] ?>">
        </p>
        <p>
            <input type="submit" value="Guardar">
        </p>
    </form>
</body>
</html>