<!DOCTYPE html>
<html>
    <head>
        <title>Pagina de formulario</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="./Estilo/F_acceso.css"/>
    </head>
    </html>
    <body>
        <?php
            session_start();
            if (isset($_POST['submit'])) {
                $usuario=$_POST['usuario'];
                $clave=$_POST['contraseña'];
                $_SESSION= $_POST['usuario'];
                $_SESSION=$_POST['contraseña'];
                if ($usuario=="profesor") {
                    header("Location: form_cursos.php");
                }
                elseif ($usuario=="administrador") {
                    header("Location: registro_aulas.php");
                }
                else {
                    header("Location: form_reg_alumno.html");
                }
            }
        ?>
        <h1>Formulario de Registro</h1>
        <form method="POST">
            <p>Nombre de usuario: <input type="text" name="usuario"></p>
            <p>Clave: <input type="password" name="contraseña" ></p>
            <input type="submit" value="Acceder" name="submit">
            <a href=".\index.html"><input type="button" value="Atras"></a>
        </form>
    </body>
</html>