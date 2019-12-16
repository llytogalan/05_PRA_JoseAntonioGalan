<htlm>
<head>
    <title>registro_aulas</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="./Estilo/registro_aulas.css"/>
</head>
<body class="center">
    <h1>Formulario Registro de Aulas</h1>
    <?php
            session_start();
            echo "Estas registrador como ".$_SESSION['usuario']."<br>"; 
        ?>
    <form action="#" method="POST">
        <table>
            <tr>
                <td>Nombre del aula: </td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Capacidad: </td>
                <td><input type="text" name="capacidad"></td>
            </tr>
            <tr>
                <td>Planta: </td>
                <td><input type="text" name="planta"></td>
            </tr>
            <tr>
                <td>Descripcion: </td>
                <td><textarea name="descripcion" id="descripcion" cols="18" rows="5">Introduce descripcion...</textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Aceptar" name="aceptar">
                    <input type="button" value="Cancelar" name="cancelar"></td>
            </tr>
            
            

        </table>
    </form>
</body>
</htlm>