<html>
    <head>BUSCAR TODOS</head>
    <body>
    <form action="" method="post" enctype="text">
        <table>
            <input type="submit" name="btnMostrarTodos" value="ver">
            <?php
                
                if ($_POST['btnMostrarTodos']=="ver")
                {
                    include("funciones.php");
                    $cnn = Conectar();
                    $rs = mysqli_query($cnn, "SELECT * FROM Clientes");
                        echo "<table align='center' border='1'>";
                        echo "<tr align='center'>";
                        echo "<td><b>Rut</td>";
                        echo "<td><b>Nombres</td>";
                        echo "<td><b>Apellidos</td>";
                        echo "<td><b>F.Nacimiento</td>";
                        echo "<td><b>Sexo</td>";
                        echo "<td><b>Region</td>";
                        echo "<td><b>Fono</td>";
                        echo "</tr>";
                    while ($row = mysqli_fetch_array($rs))
                    {
                       echo "<tr>";
                       echo "<td> $row[0]";
                       echo "<td> $row[1]";
                       echo "<td> $row[2]";
                       echo "<td> $row[3]";
                       echo "<td> $row[4]";
                       echo "<td> $row[5]";
                       echo "<td> $row[6]";
                    }
                      echo"</table>";
                    
                }
                ?>
            </table>
            </form>

<a href="index.php">Volver</a>
</body>
</html>