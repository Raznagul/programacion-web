<html>
    <head>
        <title>Prueba de subida de archivos</title>
    </head>
    <body>
        <h1>Subida de archivos</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            seleccione el archivo que desea subir:
            <input type="file" name="file" id = "file">
            <input type="submit" value="Subir archivo" name="submit">
        </form>
    </body>
</html>