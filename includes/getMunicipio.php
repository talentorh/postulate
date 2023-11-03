<?php
	
	require_once '../clases/conexion.php';
                $conexion = new Conexion();
	
	$id_estado = $_POST['id_estado'];
	
	$queryM = $conexion->prepare("SELECT id_municipio, municipio FROM t_municipio WHERE id_estado = :id_estado ORDER BY municipio");
	$queryM->execute(array(
		':id_estado'=>$id_estado
	));
	
	$html= "<option value='0'>Seleccionar Municipio</option>";
	
	while($rowM = $queryM->fetch())
	{
		$html.= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";
	}
	
	echo $html;
?>			