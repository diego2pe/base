<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function listar(){
            document.form.action= "../controlador/PersonaControlador.php";
            document.form.method="GET";
            document.form.op.value="1";
            document.form.submit();    
        }
        function ingresarPersona() {
            document.form.action= "../controlador/PersonaControlador.php";
            document.form.method= "GET";
            document.form.op.value = "4";
            document.form.submit();
        }
    </script>
</head>
<body>
    <center>
        <form name="form">
            <input type="hidden" name="op">
            <button onclick = "listar()">Listar Persona</button>
            <button onclick = "ingresarPersona()">ingresar Persona</button>
        </form>
    </center>
</body>
</html>
