<?php 
	include 'conexion.php';
	$id=$_POST['TxtId'];
	$nom=$_POST['TxtNom'];
	$ap=$_POST['TxtAp'];
	$tel=$_POST['TxtTel'];
	$contra=$_POST['TxtContra'];
	$admin=$_POST['TxtAdmin'];
	$enc=$_POST['TxtEnc'];

	$sql="insert into estudiantes (id_estudiante,nombre,apellido,telefono,contra,id_admin,id_encargado) 
	values (".$id.",'".$nom."','".$ap."',".$tel.",'".$contra."',".$admin.",".$enc.")";
	$eje=mysqli_query($conexion,$sql);
	if (!$eje) {
		echo "Error";
	}else{
		//echo "Guardado";
		header("Location:nest5.php?id=$id");
		//header("Location:est3.php?doc1=$doc1 & doct1=$doct1");
	}
 ?>