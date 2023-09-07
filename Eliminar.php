<!DOCTYPE html>
<html>
<head>
    <center><h2>Eliminar</h2>
</head>
<body bgcolor="31B31B">
<?php error_reporting(0);?>
<?php 
   
    if($_POST['buscar']=='Buscar'){
        include("funciones.php");
        $cnn = Conectar();
        $rut = $_POST['rut'];
        #$sql = "select nombres, apellidos from clientes where rut = ($rut) ";
        $sql = "select nombre, apellido from Clientes where rut='$rut'";
        $rs = mysqli_query($cnn,$sql);
            if ($row = mysqli_fetch_array($rs)){
                $nombre = $row[0];
                $apellido = $row[1];
                //echo "<script>alert('$nombre, $apellido')</script>";
            }else{
                echo "<script>alert('NO SE ENCONTRARON DATOS ASOCIADOS AL RUT')</script>";
            }
            
        
    }

?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label>RUT</label>
                </td>
                <td>
                    <input type="text" name="rut" value="<?php echo "$rut"?>">
                    <input type="submit" name="buscar" value="Buscar">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nombre</label>
                </td>
                <td>
                    <input type="text" name="nombre" value="<?php echo "$nombre"?>"readonly>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <label>Apellido</label>
                </td>
                <td>
                    <input type="text" name="apellido" value="<?php echo "$apellido"?>"readonly>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" name="eliminar" value="Eliminar">
                </td>
            </tr>
        </table>
        <?php if($_POST['eliminar']=='Eliminar'){
        include("funciones.php");
        $cnn = Conectar();
        $rut = $_POST['rut'];
        $sql = "delete from Clientes where rut='$rut'";   
        mysqli_query($cnn,$sql);
        echo "<script>alert('EL USUARIO SE ELIMINO CON EXITO')</script>";
    }?>
    </form>
    <a href="index.php">Volver</a></center>

</body>
</html>