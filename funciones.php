<?php
	function Conectar()
	{
		//if(!($cnn = mysqli_connect("SERVIDOR","USUARIO","CONTRASEÑA")))
		if(!($cnn = mysqli_connect("localhost","root","")))
		{
			exit();
		}
		if(!mysqli_select_db($cnn,"EMPRESA2"))
		{
			exit();
		}
		return $cnn;
	}
?>