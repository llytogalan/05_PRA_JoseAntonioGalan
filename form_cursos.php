<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=".\Estilo\form_cursos.css">
    </head>
    <body>
        <h1>Formulario de Registro de Cursos</h1>
        <?php
            session_start();
            echo "Estas registrador como ".$_SESSION['usuario']."<br>"; 
        ?>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td>Codigo Cursos: </td>
                    <td><input type="text" name="codigo_curso" ></td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="nombre" ></td>
                </tr>
                <tr>
                    <td coldspan="2"><?php $estilo = array('Presencial', 'A distancia', 'Semipresencial'); ?>
                    <?php foreach ($estilo as $val) {?>
                        <input type="radio" name="estilo" value="<?php echo $val ?>">  <?php echo $val ?>
                    <?php }?>
                    </td>
                </tr>
                <tr>
                    <td>Horas duracion: </td>                      
                    <td><input type="text" name="horas_duracion" ></textarea></td>
                </tr>
                <tr>
                    <td>Descripcion: </td>
                    <td><textarea name="descripcion" id="descripcion" cols="18" rows="5">Introduce descripcion...</textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Aceptar" name="aceptar">
                        <input type="button" value="Cancelar" name="cancelar"></td>
                    <td><a href="registro_aulas.php">Registro de Aulas</a></td>
                </tr>    
            </table>
        </form>
        
    </body>
</html>