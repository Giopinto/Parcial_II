<?php 
	include 'conexion.php';
	$id=$_POST['TxtId'];
	$nom=$_POST['TxtNom'];
	$ap=$_POST['TxtAp'];
	$tel=$_POST['TxtTel'];
	$contra=$_POST['TxtContra'];

	$sql="insert into encargado (id_encargado,nombre,apellido,telefono,contra) 
	values (".$id.",'".$nom."','".$ap."',".$tel.",'".$contra."')";
	$eje=mysqli_query($conexion,$sql);
	if (!$eje) {
		echo "Error";
	}else{
		//echo "Guardado";
		header("Location:nest3.php?id=$id");
		//header("Location:est3.php?doc1=$doc1 & doct1=$doct1");
	}
 ?>