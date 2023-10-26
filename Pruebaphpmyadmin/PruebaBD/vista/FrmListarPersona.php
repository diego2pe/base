<?php
session_start();
$lista= $_SESSION['lista'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Personas</title>
    <script>
        function regresar(){
            document.forms[0].action="../controlador/PersonaControlador.php";
            document.forms[0].method="GET";
            document.forms[0].op.value="2";
            document.forms[0].submit();
        }
        function eliminar (codigo){
            if(confirm("Estas seguro de eliminar esta persona?")){
                document.forms[0].action ="../controlador/PersonaControlador.php";
                document.forms[0].method ="GET";
                document.forms[0].op.value ="3";
                document.forms[0].cod.value = codigo;
                document.forms[0].submit();

            }
        }
    </script>
</head>
<body>
    <center>
        <form name="form">
            <input type="hidden" name="op" />
            <input type="hidden" name="cod" />
            <table border="1">
                <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $reg) { ?>
                        <tr>
                            <td><?php echo $reg['codperso']; ?></td>
                            <td><?php echo $reg['nombperso']; ?></td>
                            <td><?php echo $reg['apelliperso']; ?></td>
                            <td class="center">
                                <a href="javascript:eliminar('<?php echo $reg['codperso']; ?>')">
                                    <img src ="../imagenes/delete.png" width="40" height="40" alt="Eliminar">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="button-container">
                <button onclick="regresar()">Regresar</button>
            </div>
        </form>
    </center>
</body>
</html>