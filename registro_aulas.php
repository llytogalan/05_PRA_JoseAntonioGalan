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

            if (isset($_POST['leer'])) {
                $_SESSION['nombre_aula'] = $_POST['nombre'];
                $_SESSION['capacidad_aula'] = $_POST['capacidad'];
                $_SESSION['planta'] = $_POST['planta'];
                $_SESSION['descripcion'] = $_POST['descripcion'];
                if ($_SESSION['usuario']=="profesor") {
                    echo "El nombre del Aula es ".$_SESSION['nombre_aula']."<br>";
                    echo "La capacidad es ".$_SESSION['capacidad_aula']."<br>";
                    echo "La planta es ".$_SESSION['planta']."<br>";
                    echo "La descripcion es ".$_SESSION['descripcion']."<br>";
                    echo "El codigo de curso es ".$_SESSION['codigo_curso']."<br>";
                    echo "El nombre del curso es ".$_SESSION['nombre']."<br>";
                    echo "El estilo es ".$_SESSION['estilo']."<br>";
                    echo "Las horas de duracion es ".$_SESSION['horas_duracion']."<br>";
                    echo "La descripcion de los cursos".$_SESSION['descripcion_cursos']."<br>";
                }
                if ($_SESSION['usuario']=="administrador") {
                    echo "El nombre del Aula es ".$_SESSION['nombre_aula']."<br>";
                    echo "La capacidad es ".$_SESSION['capacidad_aula']."<br>";
                    echo "La planta es ".$_SESSION['planta']."<br>";
                    echo "La descripcion es ".$_SESSION['descripcion']."<br>";
                } 
            } else {?>
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
                <td colspan="2"><input type="submit" value="Aceptar" name="aceptar">
                    <input type="button" value="Cancelar" name="cancelar">
                    <input type="submit" value="Leer" name="leer"></td>
            </tr>
        </table>
    </form>
            <?php
            }
            
        ?>        
        </table>
    </form>
</body>
</htlm>