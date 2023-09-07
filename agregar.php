
<html>
<head><center><b><h1>Agregar Clientes</h1></b></head>
<body bgcolor="31B31B">
<?php error_reporting(0);?>
<form method="post">
	

	
    <table border="0"> 
       
    
    
		<tr>  
    	<td>Rut:</td>
    	<td>	<input type="text" name="txtRut" value=""></td>
    </tr>
    <tr>  
    	<td>Nombre:</td>
    	<td>	<input type="text" name="txtNom" value=""></td>
    </tr>
    <tr>  
    	<td>Apellido:</td>
    	<td>	<input type="text" name="txtApe" value=""></td>
    </tr>
    <tr>  
    	<td>Fecha Nacimiento:</td>
    	<td><input type="date" name="txtNac" value=""></td>
    </tr>
    <tr>  
      <td>Sexo:</td>
  	  <td>
        <select name = "SelSex">
          <option value = "Masculino">Masculino</option>
          <option value = "Fememnino">Fememnino</option>
          <option value = "Otro">Otro</option>
        </select>
      </td>
    </tr>
       <!--<tr>  
    		<td>Me gusta:</td>
    		<td><input type="checkbox" name="chkGusta" value="jugar play">jugar play
    		<input type="checkbox" name="chkGusta" value="leer">leer
    	    </td>
        </tr>-->
    <tr>
     	<td>Region:</td>
      <td><select name="selRegion" >
            <option value="Tarapaca">Tarapaca</option>
            <option value="Antofagasta">Antofagasta</option>
            <option value="Atacama">Atacama</option>
			  	  <option value="Coquimbo">Coquimbo</option>
				    <option value="Valparaiso">Valparaiso</option>
				    <option value="Ohiggins">O'higgins</option>
				    <option value="Maule">Maule</option>
				    <option value="Bio-bio">Bio-bio</option>
				    <option value="La Araucania">La Araucania</option>
				    <option value="Los Lagos">Los Lagos</option>
				    <option value="Aysen">Aysen</option>
				    <option value="Magallanes">Magallanes</option>
				    <option value="Metropolitana">Metropolitana</option>
				    <option value="Los Rios">Los rios</option>
				    <option value="Arica y Parinacota">Arica y Parinacota</option>
				    <option value="Nuble">Nuble</option>
          </select>
      </td>
    </tr>
    <tr>
      <td>Fono:</td>
      <td><input type ="text" name="txtFono" value=""></td>
    </tr>
		
		<tr>
      <td></td>
			<td ><input type="submit" name="btnRegistrar" value="Registrar"></td>
		</tr>
            
    <?php
    if($_POST['btnRegistrar']=='Registrar'){
        include("funciones.php");
        $cnn = Conectar();
        $rut = $_POST['txtRut'];
        $nom = $_POST['txtNom'];
        $ape = $_POST['txtApe'];
        $nac = $_POST['txtNac'];
        $sex = $_POST['SelSex'];
        $reg = $_POST['selRegion'];
        $fon = $_POST['txtFono'];

        $sql ="insert into Clientes values('$rut','$nom','$ape','$nac','$sex','$reg','$fon');";
        
        mysqli_query($cnn,$sql);
        echo "<script>alert('REGISTRADO CON EXITO')</script>";
    }

?>  


	</center>

 </table>
 <center><a href="index.php">Volver</a></center>

			 


	
	


</form>


</body>
</html>
 