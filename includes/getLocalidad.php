<?php
	require_once '../clases/conexion.php';
	$conexion = new Conexion();
	
	$id_municipio = $_POST['id_municipio'];
	
	$query = $conexion->prepare("SELECT id_localidad, localidad FROM t_localidad WHERE id_municipio = :id_municipio ORDER BY localidad");
		$query->execute(array(
			':id_municipio'=>$id_municipio
		));
	
	while($row = $query->fetch())
	{
		$html.= "<option value='".$row['id_localidad']."'>".$row['localidad']."</option>";
	}
	echo $html;
?>