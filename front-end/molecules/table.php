<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a class="button" href="nuevo.php">Crear</a></p>
    <table>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Autor</th>
            <th>¿Disponible?</th>
            <td></td>
            <td></td>
        </tr>
    <?php foreach ($miConsulta as $clave => $valor): ?> 
        <tr>
           <td><?= $valor['codigo']; ?></td>
           <td><?= $valor['titulo']; ?></td>
           <td><?= $valor['autor']; ?></td>
           <td><?= $valor['disponible'] ? 'Si' : 'No'; ?></td>
           <!-- Se utilizará más adelante para indicar si se quiere modificar o eliminar el registro -->
           <td><a class="button" href="modificar.php?codigo=<?= $valor['codigo'] ?>">Modificar</a></td>
           <td><a class="button" href="borrar.php?codigo=<?= $valor['codigo'] ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>