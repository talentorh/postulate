<?php
	
	require_once '../clases/conexion.php';
                $conexion = new Conexion();
	
	$id_catalogo = $_POST['id_catalogo'];
	
	$queryM = $conexion->prepare("SELECT * FROM dependencias WHERE ramo = :ramo ORDER BY nombreunidad asc");
	$queryM->execute(array(
		':ramo'=>$id_catalogo
	));
	
	$html= "<option value='0'>Selecciona la dependencia</option>";
	
	while($rowM = $queryM->fetch())
	{
		$html.= "<option value='".$rowM['id_dependencia']."'>".$rowM['nombreunidad']."</option>";
	}
	
	echo $html;
?>