
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
        <body>
        <h1>pasos para hacer la conexion a una base de datos</h1>
        <h3>1.- CONEXIÓN A LA BASE DE DATOS: NOMBRE DE SU BASE DE DATOS A CONECTAR:</h3>
        <?php
            $db_host    = "localhost";
            $db_usuario = "root";
            $db_pass    = "";
            $db_nombre  = "base";     //AQUÍ NOMBRE DE SU BASE DE DATOS EN MI CASO SE LLAMA ACCESO
            $conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
            if (mysqli_connect_errno()) {       //AQUÍ FUNCION QUE MANDA ERROR SI NO LOGRA LA CONEXION
                echo "fallo la conexion primer if....";
                exit();
            }
            mysqli_set_charset ($conexion, "utf8");
            if ($conexion) {
                echo "acceso correcto";
            }else{
                echo "fallo la conexion";
            }
            echo "<br>";
            echo "<br>";
            $consulta = "select * from usuarios";
            $resultadoconsulta = mysqli_query($conexion, $consulta);
            $registros = 0;
            while ($registros < 2) {
                $fila_array = mysqli_fetch_row($resultadoconsulta);
                echo "$fila_array[0]" . " / ";
                echo "$fila_array[1]" . "";
                $registros++;
                echo "<br>";
            }
        ?>
    </body>
</html>