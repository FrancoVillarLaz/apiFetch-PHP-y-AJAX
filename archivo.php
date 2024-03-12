<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api fetch</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
    <form action="carga.php" method="post" enctype="multipart/form-data" class="formularioAjax">
        <input type="file" name="archivos" accept=".jpg, .png, .jpeg">
        <br><br>
        <button type="submit">Enviar</button>

    </form>
    <script src="ajax.js"></script>
</body>
</html>