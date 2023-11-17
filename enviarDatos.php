<?php
error_reporting(0);
            require_once 'clases/conexion.php';
            $conexion = new Conexion();
            date_default_timezone_set('America/Monterrey');
            $DateAndTime = date('Y-m-d');
            extract($_POST);

            try{
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
                $conexion->beginTransaction();

                $consulta = $conexion->prepare("SELECT curp, rfc from datospersonales where curp = :curp and fechainicio between '2023-01-01' and '2023-12-31'");
                    $consulta->execute(array(
                        ':curp'=>$curp
                    ));
                        $row = $consulta->fetch();
                        $validacurp = $row['curp'];
                        $rfcvalida = $row['rfc'];

    if($validacurp != $curp || $rfc != $rfcvalida ){
                $sql = $conexion->prepare("INSERT INTO datospersonales(puesto, profesion, curp, nombre, appaterno, apmaterno, estado, delegacion, localidad, colonia, calle, numexterior, numinterior, codigopostal,
                fechanacimiento, entidadnacimiento, rfc, sexo, cartanaturalizacion, telefonocasa, telefonocelular, otrotelefono, correoelectronico, fechainicio) 
                VALUES(:puesto, :profesion, :curp, :nombre, :appaterno, :apmaterno, :estado, :delegacion, :localidad, :colonia, :calle, :numexterior, :numinterior, :codigopostal, :fechanacimiento, 
                :entidadnacimiento, :rfc, :sexo, :cartanaturalizacion, :telefonocasa, :telefonocelular, :otrotelefono, :correoelectronico, :fechainicio)");
                $sql->execute(array(
                    ':puesto'=>$select_puesto,
                    ':profesion'=>$profesion,
                    ':curp'=>$curp,
                    ':nombre'=>$nombre,
                    ':appaterno'=>$appaterno,
                    ':apmaterno'=>$apmaterno,
                    ':estado'=>$cbx_estado,
                    ':delegacion'=>$cbx_municipio,
                    ':localidad'=>$cbx_localidad,
                    ':colonia'=>$colonia,
                    ':calle'=>$calle,
                    ':numexterior'=>$numexterior,
                    ':numinterior'=>$numinterior,
                    ':codigopostal'=>$codigopostal,
                    ':fechanacimiento'=>$fechanacimiento,
                    ':entidadnacimiento'=>$entidadnacimiento,
                    ':rfc'=>$rfc,
                    ':sexo'=>$sexo,
                    ':cartanaturalizacion'=>$naturalizacion,
                    ':telefonocasa'=>$telefonocasa,
                    ':telefonocelular'=>$telefonocelular,
                    ':otrotelefono'=>$otrotelefono,
                    ':correoelectronico'=>$correo,
                    ':fechainicio'=>$DateAndTime
                ));
                
                $id_user = $conexion->lastInsertId();
                $sql = $conexion->prepare("INSERT INTO estudiosmediosup(nombreformacionmedia, nombremediasuperior, fechainicio, fechatermino, tiempocursado, documentomediosuperior, id_postulado) 
                    VALUES(:nombreformacionmedia, :nombremediasuperior, :fechainicio, :fechatermino, :tiempocursado, :documentomediosuperior,:id_postulado)");
                $sql->execute(array(
                    ':nombreformacionmedia' => $nombreformacionmedia,
                    ':nombremediasuperior' => $nombremediasuperior,
                    ':fechainicio' => $fechainicio,
                    ':fechatermino' => $fechatermino,
                    ':tiempocursado' => $tiempocursado,
                    ':documentomediosuperior' => $documentomediosuperior,
                    ':id_postulado' => $id_user
                ));
            if($nombreformacionPostecnico != '' and $nombreinstitucionPostecnico != ''){
                $arraynombreformacionPostecnico = array_map("htmlspecialchars", $nombreformacionPostecnico);
                $arraynombreinstitucionPostecnico = array_map("htmlspecialchars", $nombreinstitucionPostecnico);
                $arrayfechainiciosupPostecnico = array_map("htmlspecialchars", $fechainiciosupPostecnico);
                $arrayfechaterminosupPostecnico = array_map("htmlspecialchars", $fechaterminosupPostecnico);
                $arraytiempocursadosupPostecnico = array_map("htmlspecialchars", $tiempocursadosupPostecnico);
                $arraydocumentorecibePostecnico = array_map("htmlspecialchars", $documentorecibePostecnico);
            
                foreach ($arraynombreformacionPostecnico as $clavep => $nombreformacionPostecnico) {
                    $nombreinstitucionPostecnico = $arraynombreinstitucionPostecnico[$clavep];
                    $fechainiciosupPostecnico = $arrayfechainiciosupPostecnico[$clavep];
                    $fechaterminosupPostecnico = $arrayfechaterminosupPostecnico[$clavep];
                    $tiempocursadosupPostecnico = $arraytiempocursadosupPostecnico[$clavep];
                    $documentorecibePostecnico = $arraydocumentorecibePostecnico[$clavep];
                    $datoUnicoP[] = '("' . $nombreformacionPostecnico . '", "' . $nombreinstitucionPostecnico . '", "' . $fechainiciosupPostecnico . '", "' . $fechaterminosupPostecnico . '", "' . $tiempocursadosupPostecnico . '", "' . $documentorecibePostecnico . '", "' . $id_user . '")';
                    $sql = $conexion->prepare("INSERT into  estudiospostecnico(nombreformacionpostecnico,nombreinstitucionpostecnico,fechainiciosuppostecnico,fechaterminosuppostecnico,tiempocursadosuppostecnico,documentorecibepostecnico,id_empleado) VALUES " . implode(', ', $datoUnicoP));
                    
            }
            $sql->execute();
            }
            if($nombreformacion != '' and $nombreinstitucion != ''){
                $arraynombreformacion = array_map("htmlspecialchars", $nombreformacion);
                $arraynombreinstitucion = array_map("htmlspecialchars", $nombreinstitucion);
                $arrayfechainicio = array_map("htmlspecialchars", $fechainiciosup);
                $arrayfechaterminosup = array_map("htmlspecialchars", $fechaterminosup);
                $arraytiempocursadosup = array_map("htmlspecialchars", $tiempocursadosup);
                $arraydocumentorecibe = array_map("htmlspecialchars", $documentorecibe);
                $arraynumerocedula = array_map("htmlspecialchars", $numerocedula);
            
                foreach ($arraynombreformacion as $clave => $nombreformacion) {
                    $nombreinstitucion = $arraynombreinstitucion[$clave];
                    $fechainicio = $arrayfechainicio[$clave];
                    $fechatermino = $arrayfechaterminosup[$clave];
                    $tiempocursado = $arraytiempocursadosup[$clave];
                    $documentorecibe = $arraydocumentorecibe[$clave];
                    $numerocedula = $arraynumerocedula[$clave];
                    $datoUnico[] = '("' . $nombreformacion . '", "' . $nombreinstitucion . '", "' . $fechainicio . '", "' . $fechatermino . '", "' . $tiempocursado . '", "' . $documentorecibe . '", "' . $numerocedula . '", "' . $id_user . '")';
                    $sql = $conexion->prepare("INSERT into  estudiossuperior(nombreformacionsuperior,nombresuperior,fechasuperiorinicio,fechasuperiortermino,tiempocursadosuperior,documentosuperior,numerocedulasuperior,id_empleado) VALUES " . implode(', ', $datoUnico));
                    
            }
            $sql->execute();
        }
        if($nombreformacionmaestria != '' and $nombreinstitucionmaestria != ''){
                $arraynombreformacionmaestria = array_map("htmlspecialchars", $nombreformacionmaestria);
                $arraynombreinstitucionmaestria = array_map("htmlspecialchars", $nombreinstitucionmaestria);
                $arrayfechainiciomaestria = array_map("htmlspecialchars", $fechainiciosupmaestria);
                $arrayfechaterminomaestria = array_map("htmlspecialchars", $fechaterminosupmaestria);
                $arraytiempocursadomaestria = array_map("htmlspecialchars", $tiempocursadosupmaestria);
                $arraydocumentorecibemaestria = array_map("htmlspecialchars", $documentorecibemaestria);
                $arraynumerocedulamaestria = array_map("htmlspecialchars", $numerocedulamaestria);
            
                foreach ($arraynombreformacionmaestria as $clavemaestria => $nombreformacionmaestria) {
                    $nombreinstitucionmaestria = $arraynombreinstitucionmaestria[$clavemaestria];
                    $fechainiciomaestria = $arrayfechainiciomaestria[$clavemaestria];
                    $fechaterminomaestria = $arrayfechaterminomaestria[$clavemaestria];
                    $tiempocursadomaestria = $arraytiempocursadomaestria[$clavemaestria];
                    $documentorecibemaestria = $arraydocumentorecibemaestria[$clavemaestria];
                    $numerocedulamaestria = $arraynumerocedulamaestria[$clavemaestria];
                    $datoUnicomaestria[] = '("' . $nombreformacionmaestria . '", "' . $nombreinstitucionmaestria . '", "' . $fechainiciomaestria . '", "' . $fechaterminomaestria . '", "' . $tiempocursadomaestria . '", "' . $documentorecibemaestria . '", "' . $numerocedulamaestria . '", "' . $id_user . '")';
                    $sql = $conexion->prepare("INSERT into  estudiosmaestria(nombreformacionmaestria,nombremaestria,fechamaestriainicio,fechamaestriatermino,tiempocursadomaestria,documentomaestria,numerocedulamaestria,id_empleado) VALUES " . implode(', ', $datoUnicomaestria));
                    
                } 
                $sql->execute();
            }
            if($nombreformacionposgradoespecialidad != '' and $nombreinstitucionposgradoespecialidad != ''){
                $arraynombreformacionposgradoespecialidad = array_map("htmlspecialchars", $nombreformacionposgradoespecialidad);
                $arraynombreinstitucionposgradoespecialidad = array_map("htmlspecialchars", $nombreinstitucionposgradoespecialidad);
                $arrayfechainicioposgradoespecialidad = array_map("htmlspecialchars", $fechainiciosupposgradoespecialidad);
                $arrayfechaterminoposgradoespecialidad = array_map("htmlspecialchars", $fechaterminosupposgradoespecialidad);
                $arraytiempocursadoposgradoespecialidad = array_map("htmlspecialchars", $tiempocursadosupposgradoespecialidad);
                $arrayunidadhospitalariaposgradoespecialidad = array_map("htmlspecialchars", $unidadhospitalariaposgradoespecialidad);
                $arraydocumentorecibeposgradoespecialidad = array_map("htmlspecialchars", $documentorecibeposgradoespecialidad);
                $arraynumerocedulaposgradoespecialidad = array_map("htmlspecialchars", $numerocedulaposgradoespecialidad);
        
            
                foreach ($arraynombreformacionposgradoespecialidad as $claveposgradoespecialidad => $nombreformacionposgradoespecialidad) {
                    $nombreinstitucionposgradoespecialidad = $arraynombreinstitucionposgradoespecialidad[$claveposgradoespecialidad];
                    $fechainicioposgradoespecialidad = $arrayfechainicioposgradoespecialidad[$claveposgradoespecialidad];
                    $fechaterminoposgradoespecialidad = $arrayfechaterminoposgradoespecialidad[$claveposgradoespecialidad];
                    $tiempocursadoposgradoespecialidad = $arraytiempocursadoposgradoespecialidad[$claveposgradoespecialidad];
                    $unidadhospitalariaposgradoespecialidad = $arrayunidadhospitalariaposgradoespecialidad[$claveposgradoespecialidad];
                    $documentorecibeposgradoespecialidad = $arraydocumentorecibeposgradoespecialidad[$claveposgradoespecialidad];
                    $numerocedulaposgradoespecialidad = $arraynumerocedulaposgradoespecialidad[$claveposgradoespecialidad];
                    
                    $datoUnicoposgradoespecialidad[] = '("' . $nombreformacionposgradoespecialidad . '", "' . $nombreinstitucionposgradoespecialidad . '","' . $unidadhospitalariaposgradoespecialidad . '", "' . $fechainicioposgradoespecialidad . '", "' . $fechaterminoposgradoespecialidad . '", "' . $tiempocursadoposgradoespecialidad . '", "' . $documentorecibeposgradoespecialidad . '", "' . $numerocedulaposgradoespecialidad . '", "' . $id_user . '")';
                    $sql = $conexion->prepare("INSERT into  especialidad(nombreformacionacademica,nombreinstitucion,unidadhospitalaria,fechainicioespecialidad,fechaterminoespecialidad,anioscursados,documentorecibeespecialidad,numerocedulaespecialidad,id_empleado) VALUES " . implode(', ', $datoUnicoposgradoespecialidad));
                    
                }
            
                $sql->execute();
            }
            if($nombreformaciondoctorado != '' and $nombreinstituciondoctorado != ''){
                $arraynombreformaciondoctorado = array_map("htmlspecialchars", $nombreformaciondoctorado);
                $arraynombreinstituciondoctorado = array_map("htmlspecialchars", $nombreinstituciondoctorado);
                $arrayfechainiciodoctorado = array_map("htmlspecialchars", $fechainiciosupdoctorado);
                $arrayfechaterminodoctorado = array_map("htmlspecialchars", $fechaterminosupdoctorado);
                $arraytiempocursadodoctorado = array_map("htmlspecialchars", $tiempocursadosupdoctorado);
                $arrayunidadhospitalariadoctorado = array_map("htmlspecialchars", $unidadhospitalariadoctorado);
                $arraydocumentorecibedoctorado = array_map("htmlspecialchars", $documentorecibedoctorado);
                $arraynumeroceduladoctorado = array_map("htmlspecialchars", $numeroceduladoctorado);
            
                foreach ($arraynombreformaciondoctorado as $clavedoctorado => $nombreformaciondoctorado) {
                    $nombreinstituciondoctorado = $arraynombreinstituciondoctorado[$clavedoctorado];
                    $fechainiciodoctorado = $arrayfechainiciodoctorado[$clavedoctorado];
                    $fechaterminodoctorado = $arrayfechaterminodoctorado[$clavedoctorado];
                    $tiempocursadodoctorado = $arraytiempocursadodoctorado[$clavedoctorado];
                    $unidadhospitalariadoctorado = $arrayunidadhospitalariadoctorado[$clavedoctorado];
                    $documentorecibedoctorado = $arraydocumentorecibedoctorado[$clavedoctorado];
                    $numeroceduladoctorado = $arraynumeroceduladoctorado[$clavedoctorado];
                    $datoUnicodoctorado[] = '("' . $nombreformaciondoctorado . '", "' . $nombreinstituciondoctorado . '","' . $unidadhospitalariadoctorado . '", "' . $fechainiciodoctorado . '", "' . $fechaterminodoctorado . '", "' . $tiempocursadodoctorado . '", "' . $documentorecibedoctorado . '", "' . $numeroceduladoctorado . '", "' . $id_user . '")';
                    $sql = $conexion->prepare("INSERT into  doctorado(nombreformaciondoctorado,nombreinstituciondoctorado,unidadhospitalariadoctorado,fechainiciodoctorado,fechaterminodoctorado,anioscursadosdoctorado,documentorecibedoctorado,numeroceduladoctorado,id_empleado) VALUES " . implode(', ', $datoUnicodoctorado));
                    
                }
                $sql->execute();
            }
            if($nombreformaciondiplomado != '' and $nombreinstituciondiplomado != ''){
                $arraynombreformaciondiplomado = array_map("htmlspecialchars", $nombreformaciondiplomado);
        $arraynombreinstituciondiplomado = array_map("htmlspecialchars", $nombreinstituciondiplomado);
        $arrayfechainiciosupdiplomado = array_map("htmlspecialchars", $fechainiciosupdiplomado);
        $arrayfechaterminosupdiplomado = array_map("htmlspecialchars", $fechaterminosupdiplomado);
        $arraytiempocursadosupdiplomado = array_map("htmlspecialchars", $tiempocursadosupdiplomado);
        $arraymodaldaddiplomado = array_map("htmlspecialchars", $modaldaddiplomado);
        $arraydocumentorecibediplomado = array_map("htmlspecialchars", $documentorecibediplomado);
        $arrayasistecomodiplomado = array_map("htmlspecialchars", $asistecomodiplomado);
    
    
        foreach($arraynombreformaciondiplomado as $clavediplomado => $nombreformaciondiplomado){
            $nombreinstituciondiplomado = $arraynombreinstituciondiplomado[$clavediplomado];
            $fechainiciosupdiplomado = $arrayfechainiciosupdiplomado[$clavediplomado];
            $fechaterminosupdiplomado = $arrayfechaterminosupdiplomado[$clavediplomado];
            $tiempocursadosupdiplomado = $arraytiempocursadosupdiplomado[$clavediplomado];
            $modaldaddiplomado = $arraymodaldaddiplomado[$clavediplomado];
            $documentorecibediplomado = $arraydocumentorecibediplomado[$clavediplomado];
            $asistecomodiplomado = $arrayasistecomodiplomado[$clavediplomado];
        $datoDiplomado[] = '("' . $nombreformaciondiplomado . '", "' . $nombreinstituciondiplomado . '","' . $fechainiciosupdiplomado . '", "' . $fechaterminosupdiplomado . '", "' . $tiempocursadosupdiplomado . '", "' . $modaldaddiplomado . '", "' . $documentorecibediplomado . '", "' . $asistecomodiplomado . '","' . $id_user . '")';
            $sql = $conexion->prepare("INSERT into diplomado(nombreDiplomado,nombreInstitucion,fechaInicio,fechaTermino,totalHoras,modalidad,documentoRecibe,asisteComo,id_empleado) values  " . implode(', ', $datoDiplomado));
        }
        $sql->execute();
    } 
                /*
                $sql = $conexion->prepare("INSERT INTO otrosestudiosaltaesp(nombreformacionaltaesp, nombrealtaespecialidad, unidadhospaltaesp, fechainicioaltaesp, fechaterminoaltaesp, tiempocursadoaltaesp, documentorecibealtaesp, 
                    nombreformacionotros,nombreotrosestudiosuno,fechainiciootrosestudiosuno,  fechaterminootrosestudiosuno, documentorecibeestudiosuno,
                    nombreformacionotrosdos, nombreotrosestudiosdos, fechainiciootrosestudiosdos, fechaterminootrosestudiosdos, documentorecibeestudiosdos,  id_postulado)
                    VALUES(:nombreformacionaltaesp,:nombrealtaespecialidad,:unidadhospaltaesp,:fechainicioaltaesp,:fechaterminoaltaesp,:tiempocursadoaltaesp,:documentorecibealtaesp, 
                    :nombreformacionotros,:nombreotrosestudiosuno, :fechainiciootrosestudiosuno, :fechaterminootrosestudiosuno, :documentorecibeestudiosuno, 
                    :nombreformacionotrosdos,:nombreotrosestudiosdos, :fechainiciootrosestudiosdos, :fechaterminootrosestudiosdos, :documentorecibeestudiosdos, :id_postulado)");
                $sql->execute(array(
                    ':nombreformacionaltaesp' => $nombreformacionaltaesp,
                    ':nombrealtaespecialidad' => $nombrealtaespecialidad,
                    ':unidadhospaltaesp' => $unidadhospaltaesp,
                    ':fechainicioaltaesp' => $fechainicioaltaesp,
                    ':fechaterminoaltaesp' => $fechaterminoaltaesp,
                    ':tiempocursadoaltaesp' => $tiempocursadoaltaesp,
                    ':documentorecibealtaesp' => $documentorecibealtaesp,
                    ':nombreformacionotros' => $nombreformacionotros,
                    ':nombreotrosestudiosuno' => $nombreotrosestudiosuno,
                    ':fechainiciootrosestudiosuno' => $fechainiciootrosestudiosuno,
                    ':fechaterminootrosestudiosuno' => $fechaterminootrosestudiosuno,
                    ':documentorecibeestudiosuno' => $documentorecibeestudiosuno,
                    ':nombreformacionotrosdos' => $nombreformacionotrosdos,
                    ':nombreotrosestudiosdos' => $nombreotrosestudiosdos,
                    ':fechainiciootrosestudiosdos' => $fechainiciootrosestudiosdos,
                    ':fechaterminootrosestudiosdos' => $fechaterminootrosestudiosdos,
                    ':documentorecibeestudiosdos' => $documentorecibeestudiosdos,
                    ':id_postulado' => $id_user
                ));
*/

                $sql = $conexion->prepare("INSERT INTO socialpracticas(nombreserviciosocial, fechainicioservicio, fechaterminoservicio, laboresservicio, documentorecibeservicio,
                        nombrepracticas, fechainiciopracticas, fechaterminopracticas, laborespracticas, documentorecibepracticas, id_postulado) 
                        VALUES(:nombreserviciosocial,:fechainicioservicio,:fechaterminoservicio,:laboresservicio,:documentorecibeservicio,
                        :nombrepracticas,:fechainiciopracticas, :fechaterminopracticas,:laborespracticas, :documentorecibepracticas, :id_postulado)");
                $sql->execute(array(
                    ':nombreserviciosocial' => $nombreserviciosocial,
                    ':fechainicioservicio' => $fechainicioservicio,
                    ':fechaterminoservicio' => $fechaterminoservicio,
                    ':laboresservicio' => $laboresservicio,
                    ':documentorecibeservicio' => $documentorecibeservicio,
                    ':nombrepracticas' => $nombrepracticas,
                    ':fechainiciopracticas' => $fechainiciopracticas,
                    ':fechaterminopracticas' => $fechaterminopracticas,
                    ':laborespracticas' => $laborespracticas,
                    ':documentorecibepracticas' => $documentorecibepracticas,
                    ':id_postulado' => $id_user
                ));

/*
                $sql = $conexion->prepare("INSERT INTO cerficacion(nombreformacioncertificauno, nombrecertificacionuno, fechainiciocertificacionuno, fechaterminocertificacionuno, documentocertificacionuno,
                    nombreformacioncertificaciondos,nombrecertificaciondos ,fechainiciocertificaciondos, fechaterminocertificaciondos, documentocertificaciondos,id_postulado)
                    VALUES(:nombreformacioncertificauno,:nombrecertificacionuno,:fechainiciocertificacionuno,:fechaterminocertificacionuno,:documentocertificacionuno,
                    :nombreformacioncertificaciondos,:nombrecertificaciondos, :fechainiciocertificaciondos, :fechaterminocertificaciondos, :documentocertificaciondos,:id_postulado)");
                $sql->execute(array(
                    ':nombreformacioncertificauno' => $nombreformacioncertificauno,
                    ':nombrecertificacionuno' => $nombrecertificacionuno,
                    ':fechainiciocertificacionuno' => $fechainiciocertificacionuno,
                    ':fechaterminocertificacionuno' => $fechaterminocertificacionuno,
                    ':documentocertificacionuno' => $documentocertificacionuno,
                    ':nombreformacioncertificaciondos' => $nombreformacioncertificaciondos,
                    ':nombrecertificaciondos' => $nombrecertificaciondos,
                    ':fechainiciocertificaciondos' => $fechainiciocertificaciondos,
                    ':fechaterminocertificaciondos' => $fechaterminocertificaciondos,
                    ':documentocertificaciondos' => $documentocertificaciondos,
                    ':id_postulado' => $id_user
                ));

                $sql = $conexion->prepare("INSERT INTO actualizacionacademica(nombrecursouno, institucioncursouno, fechainiciocursouno, fechaterminocursouno, documentorecibecursouno, nacionalprimero,
                    nombrecursodos, institucioncursodos,fechainiciocursodos,fechaterminocursodos,documentorecibecursodos, nacionalsegundo, 
                    nombrecursotres, institucioncursotres, fechainiciocursotres, fechaterminocursotres, documentorecibecursotres,nacionaltercero ,id_postulado)
                    VALUES(:nombrecursouno,:institucioncursouno,:fechainiciocursouno,:fechaterminocursouno,:documentorecibecursouno,:nacionalprimero,
                    :nombrecursodos,:institucioncursodos,:fechainiciocursodos,:fechaterminocursodos,:documentorecibecursodos, :nacionalsegundo,
                    :nombrecursotres, :institucioncursotres,:fechainiciocursotres, :fechaterminocursotres, :documentorecibecursotres, :nacionaltercero, :id_postulado)");
                $sql->execute(array(
                    ':nombrecursouno' => $nombrecursouno,
                    ':institucioncursouno' => $institucioncursouno,
                    ':fechainiciocursouno' => $fechainiciocursouno,
                    ':fechaterminocursouno' => $fechaterminocursouno,
                    ':documentorecibecursouno' => $documentorecibecursouno,
                    ':nacionalprimero' => $nacionalprimero,
                    ':nombrecursodos' => $nombrecursodos,
                    ':institucioncursodos' => $institucioncursodos,
                    ':fechainiciocursodos' => $fechainiciocursodos,
                    ':fechaterminocursodos' => $fechaterminocursodos,
                    ':documentorecibecursodos' => $documentorecibecursodos,
                    ':nacionalsegundo' => $nacionalsegundo,
                    ':nombrecursodos' => $nombrecursodos,
                    ':institucioncursodos' => $institucioncursodos,
                    ':fechainiciocursodos' => $fechainiciocursodos,
                    ':fechaterminocursodos' => $fechaterminocursodos,
                    ':documentorecibecursodos' => $documentorecibecursodos,
                    ':nacionalsegundo' => $nacionalsegundo,
                    ':nombrecursotres' => $nombrecursotres,
                    ':institucioncursotres' => $institucioncursotres,
                    ':fechainiciocursotres' => $fechainiciocursotres,
                    ':fechaterminocursotres' => $fechaterminocursotres,
                    ':documentorecibecursotres' => $documentorecibecursotres,
                    ':nacionaltercero' => $nacionaltercero,
                    ':id_postulado' => $id_user
                ));
            */
                $sql = $conexion->prepare("INSERT INTO explaboralpublico(empresauno, cbx_dependenciauno, puestoempresauno, tipopuestouno, empresadirecionuno, telcontactouno, extencionuno, jefedirectouno, motivoseparacionuno, funcionespricipalesuno, fechainiciouno, fechaterminouno, 
                    empresados,cbx_dependenciados,puestoempresados,tipopuestodos,empresadirecdos, telcontactodos,extenciondos,jefedirectodos,motivoseparaciondos,funcionespricipalesdos,fechainicidos,fechaterminodos,
                    empresatres, cbx_dependenciatres,puestoempresatres, tipopuestotres, empresadirectres,telcontactotres,extenciontres,jefedirectotres, motivoseparaciontres,funcionespricipalestres, fechainiciotres,fechaterminotres,id_postulado)
                    VALUES(:empresauno,:cbx_dependenciauno,:puestoempresauno,:tipopuestouno,:empresadirecionuno,:telcontactouno,:extencionuno,:jefedirectouno,:motivoseparacionuno,:funcionespricipalesuno,:fechainiciouno,:fechaterminouno,
                    :empresados,:cbx_dependenciados,:puestoempresados,:tipopuestodos, :empresadirecdos,:telcontactodos, :extenciondos,:jefedirectodos,:motivoseparaciondos, :funcionespricipalesdos,:fechainicidos,:fechaterminodos,
                    :empresatres, :cbx_dependenciatres, :puestoempresatres, :tipopuestotres, :empresadirectres,:telcontactotres, :extenciontres, :jefedirectotres, :motivoseparaciontres, :funcionespricipalestres, :fechainiciotres,:fechaterminotres,:id_postulado)");
                $sql->execute(array(
                    ':empresauno' => $cbx_empresaone,
                    ':cbx_dependenciauno' => $cbx_dependenciaone,
                    ':puestoempresauno' => $puestoempresauno,
                    ':tipopuestouno' => $empresa,
                    ':empresadirecionuno' => $empresadirecionuno,
                    ':telcontactouno' => $telcontactouno,
                    ':extencionuno' => $extencionuno,
                    ':jefedirectouno' => $jefedirectouno,
                    ':motivoseparacionuno' => $motivoseparacionuno,
                    ':funcionespricipalesuno' => $funcionespricipalesuno,
                    ':fechainiciouno' => $fechainiciouno,
                    ':fechaterminouno' => $fechaterminouno,
                    ':empresados' => $cbx_empresados,
                    ':cbx_dependenciados' => $cbx_dependenciados,
                    ':puestoempresados' => $puestoempresados,
                    ':tipopuestodos' => $tipopuestodos,
                    ':empresadirecdos' => $empresadirecdos,
                    ':telcontactodos' => $telcontactodos,
                    ':extenciondos' => $extenciondos,
                    ':jefedirectodos' => $jefedirectodos,
                    ':motivoseparaciondos' => $motivoseparaciondos,
                    ':funcionespricipalesdos' => $funcionespricipalesdos,
                    ':fechainicidos' => $fechainicidos,
                    ':fechaterminodos' => $fechaterminodos,
                    ':empresatres' => $cbx_empresatres,
                    ':cbx_dependenciatres' => $cbx_dependenciatres,
                    ':puestoempresatres' => $puestoempresatres,
                    ':tipopuestotres' => $tipopuestotres,
                    ':empresadirectres' => $empresadirectres,
                    ':telcontactotres' => $telcontactotres,
                    ':extenciontres' => $extenciontres,
                    ':jefedirectotres' => $jefedirectotres,
                    ':motivoseparaciontres' => $motivoseparaciontres,
                    ':funcionespricipalestres' => $funcionespricipalestres,
                    ':fechainiciotres' => $fechainiciotres,
                    ':fechaterminotres' => $fechaterminotres,
                    ':id_postulado' => $id_user
                ));
            if($nombrelaboralprivada != '' and $tipopuestoprivada != ''){
                $arraynombrelaboralprivada  = array_map("htmlspecialchars", $nombrelaboralprivada);
                $arraytipopuestoprivada  = array_map("htmlspecialchars", $tipopuestoprivada);
                $arraydireccionempresaprivada  = array_map("htmlspecialchars", $direccionempresaprivada);
                $arraytelefonoempresaprivada  = array_map("htmlspecialchars", $telefonoempresaprivada);
                $arrayextencionempresaprivada  = array_map("htmlspecialchars", $extencionempresaprivada);
                $arraynombrejefeprivada  = array_map("htmlspecialchars", $nombrejefeprivada);
                $arraymotivoseparacionprivada  = array_map("htmlspecialchars", $motivoseparacionprivada);
                $arrayfuncionesprivada  = array_map("htmlspecialchars", $funcionesprivada);
                $arrayfechainicioprivada  = array_map("htmlspecialchars", $fechainicioprivada);
                $arrayfechaterminoprivada  = array_map("htmlspecialchars", $fechaterminoprivada);

                foreach($arraynombrelaboralprivada as $claveprivada => $nombrelaboralprivada){
                    $tipopuestoprivada = $arraytipopuestoprivada[$claveprivada];
                    $direccionempresaprivada = $arraydireccionempresaprivada[$claveprivada];
                    $telefonoempresaprivada = $arraytelefonoempresaprivada[$claveprivada];
                    $extencionempresaprivada = $arrayextencionempresaprivada[$claveprivada];
                    $nombrejefeprivada = $arraynombrejefeprivada[$claveprivada];
                    $motivoseparacionprivada = $arraymotivoseparacionprivada[$claveprivada];
                    $funcionesprivada = $arrayfuncionesprivada[$claveprivada];
                    $fechainicioprivada = $arrayfechainicioprivada[$claveprivada];
                    $fechaterminoprivada = $arrayfechaterminoprivada[$claveprivada];

                $datoPrivada[] = '("' . $nombrelaboralprivada . '", "' . $tipopuestoprivada . '","' . $direccionempresaprivada . '", "' . $telefonoempresaprivada . '", "' . $extencionempresaprivada . '", "' . $nombrejefeprivada . '", "' . $motivoseparacionprivada . '", "' . $funcionesprivada . '","' . $fechainicioprivada . '","' . $fechaterminoprivada . '","' . $id_user . '")';

                $sql = $conexion->prepare("INSERT INTO explaboralprivado(nombrelaboralprivada, tipopuestoprivada, direccionempresaprivada, telefonoempresaprivada, extencionempresaprivada, nombrejefeprivada, motivoseparacionprivada, funcionesprivada, fechainicioprivada, fechaterminoprivada, id_postulado) values  " . implode(', ', $datoPrivada));
                }
                $sql->execute();
            }


                $sql = $conexion->prepare("INSERT INTO cientificaidioma(nombrepublicacion, tiempopublicacion, publicadoen, paisdepublicacion,
                        nombreidioma, nivel, niveldedominio, documentoacredita, otrashabilidades, id_postulado)
                        VALUES(:nombrepublicacion,:tiempopublicacion,:publicadoen,:paisdepublicacion,
                        :nombreidioma, :nivel,:niveldedominio, :documentoacredita,:otrashabilidades, :id_postulado)");
                $sql->execute(array(
                    ':nombrepublicacion' => $nombrepublicacion,
                    ':tiempopublicacion' => $tiempopublicacion,
                    ':publicadoen' => $publicadoen,
                    ':paisdepublicacion' => $paisdepublicacion,
                    ':nombreidioma' => $nombreidioma,
                    ':nivel' => $nivel,
                    ':niveldedominio' => $niveldedominio,
                    ':documentoacredita' => $documentoacredita,
                    ':otrashabilidades' => $otrashabilidades,
                    ':id_postulado' => $id_user
                ));
                $sql = $conexion->prepare("INSERT INTO manifiesto(familiaresenhraei, autorizodatoscorreo, autorizodatostelefono, autorizodatosgenerales,id_postulado)
                    VALUES(:familiaresenhraei,:autorizodatoscorreo,:autorizodatostelefono,:autorizodatosgenerales,:id_postulado)");
                $sql->execute(array(
                    ':familiaresenhraei' => $selCombo,
                    ':autorizodatoscorreo' => $correo_elect,
                    ':autorizodatostelefono' => $telefono_enlace,
                    ':autorizodatosgenerales' => $selCombo5,
                    ':id_postulado' => $id_user
                ));
                $validatransac = $conexion->commit();

                if($validatransac != false) {
                    echo "<script>Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Tus datos han sido enviados exitosamente',
                        showConfirmButton: false,
                        timer: 1500
                    })</script>";
    }
}else{
    echo "<script>Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Lo sentimos ya te has postulado recientemente a una vacante, no te puedes volver a postular.!',
        showConfirmButton: false,
        timer: 1500
    })</script>";
    
}
}catch(Exception $e) {
    ?><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    echo $e;
    $conexion->rollBack();
    echo "<script>Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Error al enviar tus datos',
        showConfirmButton: false,
        timer: 1500
    })</script>";
}
                
            ?>  