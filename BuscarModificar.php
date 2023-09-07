<html>
	<head>
		<title>FORMULARIO</title>
	</head>

	<body bgcolor="31B31B">
		
	<center>
		<H1>MODIFICAR DATOS</H1>
		<form action="" method="post" enctype="text">
		<?php error_reporting(0);?>
		<?php
		
			if ($_POST['BtnBuscar']=="Buscar")
			{
				include("funciones.php");
				$cnn = Conectar();
				$rut = $_POST['txtRut'];
				$rs = mysqli_query($cnn, "SELECT * FROM Clientes WHERE RUT = '$rut'");
				if($row = mysqli_fetch_array($rs))
				{
					$nombre = $row[1];
					$apellido = $row[2];
					$nacimiento = $row[3]; 
					$sexo = $row[4];
					$region = $row[5];
					$fono = $row[6];

				}
				else
				{
					echo"<script>alert('NO SE ENCONTRARON DATOS ASOCIADOS AL RUT')</script>";
				}
			}
		?>
			<table border=0>
				<tr>
					<td>Rut:</td>
					<td><input type = "text" name = "txtRut" value ="<?php echo $rut; ?>"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><center><input type="Submit" name="BtnBuscar" value="Buscar"></center></td>
					<td></td>
				</tr>	
				<tr>
					<td>DATOS ACTUALES</td>
					<td>NUEVOS DATOS</td>
				</tr>
				<tr>
					<td>NOMBRE</td>
					<td><input type = "text" name = "nombre" value ="<?php echo $nombre; ?>"readonly></td>
					<td><input type="text" name="txtNom" value=""></td>
				</tr>
				<tr>
					<td>APELLIDO</td>
					<td><input type = "text" name = "apellido" value ="<?php echo $apellido; ?>"readonly></td>
					<td><input type="text" name="txtApe" value=""></td>
				</tr>	
				<tr>
					<td>FECHA NACIMIENTO</td>
					<td><input type = "text" name = "Fecha Nacimiento" value = "<?php echo $nacimiento?>"readonly></td>
					<td><input type="date" name="txtNac" ></td>
				</tr>
				<tr>
					<td>Sexo</td>
					<td><input type = "text" name = "sexo" value = "<?php echo $sexo?>"readonly></td>
					<td>
						<select name = "SelSex">
							<option value = "Masculino">Masculino</option>
							<option value = "Fememnino">Fememnino</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>REGION</td>
					<td><input type = "text" name = "region" value = "<?php echo $region?>"readonly></td>
					<td><select name = "SelRegion">
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
					<td>FONO</td>
					<td><input type = "text" name = "fono" value = "<?php echo $fono?>"readonly></td>
					<td><input type = "text" name = "txtFono" value = ""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="Submit" name = "BtnActualizar" value =  "Actualizar Datos"></td>
					<td></td>
					
				</tr>
			</table>
		<?php
			if($_POST['BtnActualizar']=="Actualizar Datos")
			{
				include("funciones.php");
				$cnn = Conectar();
				$rut = $_POST['txtRut'];
				$nom = $_POST['txtNom'];
				$ape = $_POST['txtApe'];
				$nac = $_POST['txtNac'];
				$sex = $_POST['SelSex'];
				$reg = $_POST['SelRegion'];
				$fon = $_POST['txtFono'];
				
				$sql ="update Clientes  SET nombre='$nom', apellido='$ape',fechanacimiento='$nac',sexo='$sex',region='$reg',fono='$fon' where rut='$rut'";
				
				mysqli_query($cnn,$sql);
				
				echo"<script>alert('LOS DATOS SE HAN ACTUALIZADO CON EXITO')</script>";
			}
		?>
		</form>
		  <a href="index.php">Volver</a>
	</center>
  
	</body>
</html>