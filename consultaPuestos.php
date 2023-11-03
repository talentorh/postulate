<?php
require_once 'clases/conexion.php';
$conexion = new Conexion();
$tabla = "";
$sql = $conexion->prepare("SELECT * FROM descripcionpuestos order by puesto asc");
    $sql->execute();
    $tabla .=

        '
        <table id="ghatable" class="display table table-bordered table-striped table-hover" style="cursor: pointer; margin-top: 0px; font-size: .9em;" cellspacing="0" >
    
            <tr style="background-color: #7C7C7C; color: white; font-style: italic;">
                <td>Puesto</td>
                <td>Requisitos academicos</td>
                <td>Experiencia</td> 
                <td>Sueldo bruto quincenal</td> 
            </tr>';


    while ($row = $sql->fetch()) {


        $tabla .=
            '<tr>
                <td>' . $row['puesto'] . '</td>
                <td>' . $row['requisitos'] . '</td>
                <td>' . $row['experiencia'] . '</td>
                <td>$' . $row['sueldo'] . '</td>
                
            </tr>';
    }

   echo $tabla .= '</table>';
