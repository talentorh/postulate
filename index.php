<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>HRAEI - Bolsa de Trabajo</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href="https://framework-gb.cdn.gob.mx/favicon.ico" rel="shortcut icon">
  <link href="https://www.gob.mx/cms/application.css" rel="stylesheet">
  <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
  <script type="text/javascript" src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/getCatalogos.js"></script>

</head>
<style>
  .carrusel {
    width: 100%;
    height: auto;
    margin-top: 8%;
  }

  .box1 {
    display: grid;
    gap: 1rem;
    grid-template-columns: 1fr;
    margin-top: 0px;
    margin-left: 0px;
    padding: 5px;

  }
  
  #card {
    height: 93vh;
    overflow: hidden;
    padding: 10px;
    background-color: white;
    border: 1px solid #e0e0e0;
    box-shadow: 10px 5px 5px #515151;
    border-radius: 10px;
    color: #333;
    cursor: pointer;
    overflow-y: scroll;
    overflow-x: scroll;
    margin-top: 0;
    margin-bottom: 0;

  }
  #card2 {
    height: 30vh;
    overflow: hidden;
    padding: 10px;
    background-color: white;
    border: 1px solid #e0e0e0;
    box-shadow: 10px 5px 5px #515151;
    border-radius: 10px;
    color: #333;
    cursor: pointer;
    overflow-y: scroll;
    margin-top: 0;
    margin-bottom: 0;

  }

  .adaptar {

    margin-left: auto;
    margin-right: auto;
    display: block;
  }

  h3 {
    color: #000;
    text-align: center;

  }

  h4 {
    color:#000;
    text-align: center;
    font-size: 1.5em;
  }

  .registro {
    width: 100%;
    height: auto;
    background: #C8C8C8;

  }

  label {
    font-size: 13px;
    color: black;
  }


  .form-control {
    box-shadow: 0 0 1px #000;
  }

  p {
    font-size: .9em;
    text-align: justify;
    color: black;
    font-style: normal;
  }
  #cabeceras {
  width: 100%; 
  height: auto; 
  background-color:#6bafcc; 
  text-align:center;
  margin-top:10px; 
  color: white;
}
</style>

<body style="padding: 0px;">

  <div id="tabla_resultado"></div>
  <header>
    <div class="nav" role="navigation">
      <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
        <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces"> <span class="sr-only">Interruptor
              de Navegación</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">HRAEI</a> </div>
        <div class="collapse navbar-collapse" id="subenlaces">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="conocenos.html">Conócenos</a></li>
            <li><a href="pacientes.html">Pacientes</a></li>
            <li><a href="atencion_medica.html">Atención Médica</a></li>
            <li><a href="investigacion.html">Enseñanza e Investigación </a></li>
            <li><a href="marco_juridico.html">Marco Jurídico</a></li>
            <li><a href="transparencia.html">Transparencia</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Buscador <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Acción</a></li>
                <li><a href="#">Otra acción</a></li>
                <li><a href="#">Algo más aquí</a></li>
                <li class="divider"><br>
                </li>
                <li><a href="#">Enlace separado</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </div>

  </header>
  <div class="carrusel">
    <h1 style="text-align: center; font-size: 28px;">Vacantes Disponibles</h1>
    <section id="miSlide" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#miSlide" data-slide-to="0" class="active"></li>
        <li data-target="#miSlide" data-slide-to="1"></li>
        <li data-target="#miSlide" data-slide-to="2"></li>
        <li data-target="#miSlide" data-slide-to="3"></li>
        <li data-target="#miSlide" data-slide-to="4"></li>
        <li data-target="#miSlide" data-slide-to="5"></li>
        <li data-target="#miSlide" data-slide-to="6"></li>
        <li data-target="#miSlide" data-slide-to="7"></li>
        <li data-target="#miSlide" data-slide-to="8"></li>
        <li data-target="#miSlide" data-slide-to="9"></li>
        <li data-target="#miSlide" data-slide-to="10"></li>
        <li data-target="#miSlide" data-slide-to="11"></li>
        <li data-target="#miSlide" data-slide-to="12"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="imagenes/imagenespecilidad1.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad2.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad3.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad4.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad5.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad6.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad7.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad8.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad9.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/imagenespecilidad10.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/reclutamiento1.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/reclutamiento2.jpeg" class="adaptar">
        </div>
        <div class="item">
          <img src="imagenes/7.jpg" class="adaptar">
        </div>
        <!--<div class="item">
          <img src="imagenes/CARTEL_AUXILIAR_ADMINISTRATIVO.png" class="adaptar">
        </div>-->


        <a href="#miSlide" class="left carousel-control" style="color: yellow;" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a href="#miSlide" class="right carousel-control" style="color: yellow;" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </section>
  </div>
  <div class="" style="background: white; ">
    <h1 style="font-size: 1.4em; text-align: center;">Registro de Banco de Talentos</h1>
    <p>Agradecemos su interés por registrar sus datos que conforman su currículum vitae, mediante los cuales, podrá ser seleccionado para participar en el proceso de evaluación, cuando se genere alguna vacante a fin a su perfil académico y/o de su elección.
      Con la finalidad de orientarlo adecuadamente en este proceso, se presenta a continuación, el profesiograma con los requisitos académicos y de experiencia, mínimos, que debe cumplir para estar en posibilidad de registrarse. En el formulario que se presenta al final de la página, en la primera casilla, encontrará: puesto al que se postula, el cual deberá elegir, de conformidad, a lo anteriormente señalado.
    </p>
  </div>
  <br>
  <div class="box1">
    <div id="card2">
      <h1 style="font-size: 2.5rem; text-align: center;"> Aviso de Confidencialidad</h1>
      <strong style="font-size: 1.5rem; text-align: center;">La información contenida en tu currículum vitae institucional, contiene datos personales considerados
        confidenciales en términos de los artículos 23 y 68, fracciones I, II, IV y V, segundo párrafo, y 116
        último parrafo de la Ley General de Transparencia y Acceso a la información Pública; 9, 16, 113, fracciones I y III
        de la ley federal de Transparencia y Acceso a la Información Pública, en correlación con la Ley General de Protección de Datos
        Personales en Posesión de Sujetos Obligados; Trigésimo Octavo y Trigésimo Noveno Lineamentos Generales en Materia de
        Clasificación y Desclasificación de la Información, asi como para la elaboración de versiones Públicas, por lo que serán
        tratados por la Dirección de Administración y Finanzas a través de la Subdirección de Recursos Humanos, y solo serán utilizados
        con fines de reclutamiento, selección y/o contratación según sea el caso. Datos que para que tengan un uso distinto al
        señalado, se deberá contar con su consentimiento.</strong>
    </div>
    <div id="card">
      <?php
      require 'consultaPuestos.php';

      ?>
    </div>

  </div>
  <script>
    function deleteSp() {
      var inputs = $("input[type=text]");
      for (var i = 0; i < inputs.length; i++) {
        var aux = $(inputs[i]).val().trim();
        $(inputs[i]).val(aux);
      }
    }

    function limpiar() {

      setTimeout('document.formulario.reset()', 1000);
      return false;
    }
  </script>

  <div class="data"></div>
  <div class="loader"></div>
  <div class="form-row">
  <form id="formulario" name="formulario" autocomplete="off" onsubmit="return limpiar()" style="padding: 10px;">
  <section style="width: 100%; height: auto;">
  <h3 style="text-align: center;">Registra tu información</h3>
        <h4 style="text-align: center;">Información personal</h4>
    
      <div class="col-md-6" autocomplete="off">
        <label>Puesto al que desea postularse</label>
        <select class="form-control" id="select_puesto" name="select_puesto" style="cursor: pointer;" required onchange="select_proveedor();">

          <option value="">Seleccione el puesto</option>
          <meta charset="UTF-8">
          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $sql_s = $conexion->prepare("SELECT codigopuesto, puesto FROM descripcionpuestos order by puesto asc");
          $sql_s->execute();
          while ($row_s = $sql_s->fetch()) {
            $ID_usuario = $row_s['codigopuesto'];
            $nombre = $row_s['puesto'];
          ?>
            <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

          <?php
          }


          ?>
        </select>
      </div>
      <div class="col-md-6">
        <label>Profesión/Area profesional</label>
        <input type="text" id="profesion" name="profesion" required class="form-control" autocomplete="off">
      </div>
      <div class="col-md-3">
        <label>CURP</label>
        <input type="text" id="curp" name="curp" required class="form-control" autocomplete="off" maxlength="18" minlength="18" onkeyup="deleteSp();">
      </div>
      <div class="col-md-3">
        <label>Nombre</label>
        <input type="text" id="nombre" name="nombre" required class="form-control" autocomplete="off">
      </div>
      <div class="col-md-3">
        <label>Apellido paterno</label>
        <input type="text" id="appaterno" name="appaterno" required class="form-control" autocomplete="off">
      </div>

      <div class="col-md-3">
        <label>Apellido materno</label>
        <input type="text" id="apmaterno" name="apmaterno" required class="form-control" autocomplete="off">
      </div>


      <div class="col-md-6">
        <label>Estado</label>
        <select name="cbx_estado" id="cbx_estado" required class="form-control">
          <option value="0">Seleccionar Estado</option>
          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $query = $conexion->prepare("SELECT id_estado, estado FROM t_estado ");
          $query->execute();
          while ($row = $query->fetch()) { ?>
            <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="col-md-6">
        <label>Delegación o Municipio</label>
        <select name="cbx_municipio" id="cbx_municipio" required class="form-control">

        </select>
      </div>
      <div class="col-md-6">
        <label>Localidad</label>
        <select name="cbx_localidad" id="cbx_localidad" required class="form-control">

        </select>
      </div>

      <div class="col-md-6">
        <label>Colonia</label>
        <input type="text" id="colonia" name="colonia" required class="form-control" autocomplete="off">
      </div>
      <div class="col-md-6">
        <label>Calle</label>
        <input type="text" id="calle" name="calle" required class="form-control" autocomplete="off">
      </div>
      <div class="col-md-3">
        <label>N° exterior</label>
        <input type="text" id="numexterior" name="numexterior" required class="form-control" autocomplete="off">
      </div>
      <div class="col-md-3">
        <label>N° interior</label>
        <input type="text" id="numinterior" name="numinterior" required class="form-control" autocomplete="off">
      </div>
      <div class="col-md-2">
        <label>Código postal</label>
        <input type="text" class="form-control" id="codigopostal" required name="codigopostal" autocomplete="off">
      </div>

      <div class="col-md-2">
        <label>Fecha de nacimiento</label>
        <input type="date" id="fechanacimiento" name="fechanacimiento" required class="form-control" autocomplete="off">
      </div>

      <div class="col-md-2">
        <label>Entidad de nacimiento</label>
        <input type="text" id="entidadnacimiento" name="entidadnacimiento" required class="form-control" autocomplete="off">
      </div>
      <div class="col-md-3">
        <label>R.F.C con homoclave</label>
        <input type="text" id="rfc" name="rfc" required class="form-control" autocomplete="off" maxlength="13" onkeyup="deleteSp();">
      </div>
      <div class="col-md-3">
        <label>Sexo</label>
        <select id="sexo" name="sexo" required class="form-control">
          <option selected>Seleccione</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>
      </div>
      <div class="col-md-2">
        <label>Carta naturalización</label>
        <input type="text" id="naturalizacion" required name="naturalizacion" autocomplete="off" class="form-control">
      </div>
      <div class="col-md-2">
        <label>Teléfono de casa</label>
        <input type="text" id="telefonocasa" required name="telefonocasa" autocomplete="off" class="form-control">
      </div>
      <div class="col-md-2">
        <label>Teléfono celular</label>
        <input type="text" id="telefonocelular" required name="telefonocelular" autocomplete="off" class="form-control">
      </div>
      <div class="col-md-3">
        <label>Otro télefono</label>
        <input type="text" id="otrotelefono" required name="otrotelefono" autocomplete="off" class="form-control">
      </div>
      <div class="col-md-3">
        <label>Correo electrónico</label>
        <input type="email" id="correo" required name="correo" autocomplete="off" class="form-control">
      </div>
  </section>
  <section style="width: 100%; height: auto;">

      <h3 style="text-align: center;">Formación academica<br>
        Nivel medio superior</h3>

      <div class="form-group col-md-6">
        <label>Nombre de la formación académica</label>
        <input type="text" id="nombreformacionmedia" name="nombreformacionmedia" autocomplete="off" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Nombre de la institución educativa</label>
        <input type="text" id="nombremediasuperior" name="nombremediasuperior" autocomplete="off" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de inicio</label>
        <input type="date" id="fechainicio" name="fechainicio" autocomplete="off" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha término</label>
        <input type="date" id="fechatermino" name="fechatermino" autocomplete="off" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Años cursados</label>
        <input type="text" id="tiempocursado" name="tiempocursado" autocomplete="off" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Documento que recibe</label>
        <input type="text" id="documentomediosuperior" name="documentomediosuperior" autocomplete="off" class="form-control">
      </div>
  </section>
  <section style="width: 100%; height: auto;">
  
      <h3 style="text-align: center;">Nivel tecnico</h3>
      

                <div class="col-md-6">
                    <label>Nombre de la formación académica</label>
                    <input type="text" id="nombreinstituciontecnica" name="nombreinstituciontecnica" autocomplete="off" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Nombre de la institución educativa</label>
                    <input type="text" id="nombreformaciontecnica" name="nombreformaciontecnica" autocomplete="off" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Fecha de inicio</label>
                    <input type="date" id="fechainiciotecnico" name="fechainiciotecnico" autocomplete="off" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Fecha término</label>
                    <input type="date" id="fechaterminotecnico" name="fechaterminotecnico" autocomplete="off" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Años cursados</label>
                    <input type="text" id="tiempocursadotecnico" name="tiempocursadotecnico" autocomplete="off" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Documento que recibe</label>
                    <input type="text" id="documentotecnico" name="documentotecnico" autocomplete="off" class="form-control">
                </div>
            
  </section>
  <section>
  <h3 style="text-align: center;">Nivel postecnico</h3>
  <div style="width: 100%; height: auto;">
  <div class="form-group col-md-12">
                    <strong>Agregar postecnico (Solo numeros)</strong>
                    <input type="number" id="quantityp" name="numpostecnico" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
  </div>
                <script>
                    document.getElementById("quantityp").addEventListener("input", (event) => {
                        let content = '';

                        const quantity = event.target.value;

                        for (let i = 0; i < quantity; i++) {
                            content += `<div class="form-row">
                          
                                    <h1 style="font-size:22px; text-align: center;">Información postecnico ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre de la formación académica ${i +1}</label>
                                <input type="text" id="nombreformacionPostecnico[${i}]" name="nombreformacionPostecnico[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreinstitucionPostecnico[${i}]" name="nombreinstitucionPostecnico[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainiciosupPostecnico[${i}]" name="fechainiciosupPostecnico[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminosupPostecnico[${i}]" name="fechaterminosupPostecnico[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Años cursados ${i +1}</label>
                                <input type="text" id="tiempocursadosupPostecnico[${i}]" name="tiempocursadosupPostecnico[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibePostecnico[${i}]" name="documentorecibePostecnico[]" class="form-control">
                                </div>
                          
                            
                        </div>`;
                        }
                        document.getElementById("divGuestsp").innerHTML = content;
                    })
                </script>
                <div id="divGuestsp"></div>
  </section>
  <section>
      <h3 style="text-align: center;">Nivel licenciatura</h3>
      <div class="form-group col-md-12">
                    <strong>Agregar licenciatura (Solo numeros)</strong>
                    <input type="number" id="quantity" name="numlicenciaturas" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                
                </div>
                <script>
                    document.getElementById("quantity").addEventListener("input", (event) => {
                        let content = '';

                        const quantity = event.target.value;

                        for (let i = 0; i < quantity; i++) {
                            content += `<div class="form-row">
                          
                                    <h1 style="font-size:22px; text-align: center;">Información licenciatura ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre de la formación académica ${i +1}</label>
                                <input type="text" id="nombreformacion[${i}]" name="nombreformacion[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreinstitucion[${i}]" name="nombreinstitucion[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainicio[${i}]" name="fechainiciosup[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechatermino[${i}]" name="fechaterminosup[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Años cursados ${i +1}</label>
                                <input type="text" id="tiempocursado[${i}]" name="tiempocursadosup[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibe[${i}]" name="documentorecibe[]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                <label>Numero de cedula ${i +1}</label>
                                <input type="int" id="numerocedula[${i}]" name="numerocedula[]" class="form-control">
                            </div>
                            
                        </div>`;
                        }
                        document.getElementById("divGuests").innerHTML = content;
                    })
                </script>
                <div id="divGuests"></div>
      </section>
<section>
<h3 style="text-align: center;">Nivel Maestria</h3>
<div class="form-group col-md-12">
                    <strong>Agregar maestria (Solo numeros)</strong>
                    <input type="number" id="quantity2" name="maestrias" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity2").addEventListener("input", (event) => {
                        let content = '';

                        const quantity2 = event.target.value;

                        for (let i = 0; i < quantity2; i++) {
                            content += `<div class="form-row">
                            
                                    <h1 style="font-size:22px; text-align: center;">Información maestria ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre de la formación académica ${i +1}</label>
                                <input type="text" id="nombreformacionmaestria[${i}]" name="nombreformacionmaestria[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreinstitucionmaestria[${i}]" name="nombreinstitucionmaestria[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainiciomaestria[${i}]" name="fechainiciosupmaestria[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminomaestria[${i}]" name="fechaterminosupmaestria[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Años cursados ${i +1}</label>
                                <input type="text" id="tiempocursadomaestria[${i}]" name="tiempocursadosupmaestria[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibemaestria[${i}]" name="documentorecibemaestria[]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                <label>Numero de cedula ${i +1}</label>
                                <input type="text" id="numerocedulamaestria[${i}]" name="numerocedulamaestria[]" class="form-control">
                                </div>
                                
                            
                        </div>`;
                        }
                        document.getElementById("divGuests2").innerHTML = content;
                    })
                </script>

                <div id="divGuests2"></div>
</section>
    <section>
    <h3 style="text-align: center;">Nivel Posgrado/Especialidad</h3>
    <div class="form-group col-md-12">
                    <strong>Agregar posgrado/especialidad (Solo numeros)</strong>
                    <input type="number" id="quantity3" name="posgrados" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity3").addEventListener("input", (event) => {
                        let content = '';

                        const quantity3 = event.target.value;

                        for (let i = 0; i < quantity3; i++) {
                            content += `<div class="form-row">
                      
                                    <h1 style="font-size:22px; text-align: center;">Información posgrado/especialidad ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre de la formación académica ${i +1}</label>
                                <input type="text" id="nombreformacionposgradoespecialidad[${i}]" name="nombreformacionposgradoespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreinstitucionposgradoespecialidad[${i}]" name="nombreinstitucionposgradoespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainiciosupposgradoespecialidad[${i}]" name="fechainiciosupposgradoespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminosupposgradoespecialidad[${i}]" name="fechaterminosupposgradoespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Años cursados ${i +1}</label>
                                <input type="text" id="tiempocursadosupposgradoespecialidad[${i}]" name="tiempocursadosupposgradoespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Unidad hospitalaria ${i +1}</label>
                                <input type="text" id="unidadhospitalariaposgradoespecialidad[${i}]" name="unidadhospitalariaposgradoespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibeposgradoespecialidad[${i}]" name="documentorecibeposgradoespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Numero de cedula ${i +1}</label>
                                <input type="int" id="numerocedulaposgradoespecialidad[${i}]" name="numerocedulaposgradoespecialidad[]" class="form-control">
                            </div>
                            
                        </div>`;
                        }
                        document.getElementById("divGuests3").innerHTML = content;
                    })
                </script>

                <div id="divGuests3"></div>
    </section>
<section>
<h3 style="text-align: center;">Nivel Doctorado/Subespecialidad</h3>
<div class="form-group col-md-12">
                    <strong>Agregar doctorado (Solo numeros)</strong>
                    <input type="number" id="quantity4" name="doctorados" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity4").addEventListener("input", (event) => {
                        let content = '';

                        const quantity4 = event.target.value;

                        for (let i = 0; i < quantity4; i++) {
                            content += `<div class="form-row">
                            
                                    <h1 style="font-size:22px; text-align: center;">Información doctorado ${i +1}</h1>
                                
                            <di v class="form-group col-md-6">
                                <label>Nombre de la formación académica ${i +1}</label>
                                <input type="text" id="nombreformaciondoctorado[${i}]" name="nombreformaciondoctorado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreinstituciondoctorado[${i}]" name="nombreinstituciondoctorado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainiciosupdoctorado[${i}]" name="fechainiciosupdoctorado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminosupdoctorado[${i}]" name="fechaterminosupdoctorado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Años cursados ${i +1}</label>
                                <input type="text" id="tiempocursadosupdoctorado[${i}]" name="tiempocursadosupdoctorado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Unidad hospitalaria ${i +1}</label>
                                <input type="int" id="unidadhospitalariadoctorado[${i}]" name="unidadhospitalariadoctorado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibedoctorado[${i}]" name="documentorecibedoctorado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Numero de cedula ${i +1}</label>
                                <input type="text" id="numeroceduladoctorado[${i}]" name="numeroceduladoctorado[]" class="form-control">
                              </div>
                            
                        </div>`;
                        }
                        document.getElementById("divGuests4").innerHTML = content;
                    })
                </script>

                <div id="divGuests4"></div>
</section>
<section>
<h3 style="text-align: center;">Diplomados</h3>
<div class="form-group col-md-12">
                    <strong>Agregar diplomado (Solo numeros)</strong>
                    <input type="number" id="quantity5" name="diplomado" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity5").addEventListener("input", (event) => {
                        let content = '';

                        const quantity5 = event.target.value;

                        for (let i = 0; i < quantity5; i++) {
                            content += `<div class="form-row">
                                    <h1 style="font-size:22px; text-align: center;">Información diplomado ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre del diplomado ${i +1}</label>
                                <input type="text" id="nombreformaciondiplomado[${i}]" name="nombreformaciondiplomado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreinstituciondiplomado[${i}]" name="nombreinstituciondiplomado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainiciosupdiplomado[${i}]" name="fechainiciosupdiplomado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminosupdiplomado[${i}]" name="fechaterminosupdiplomado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Total de horas ${i +1}</label>
                                <input type="text" id="tiempocursadosupdiplomado[${i}]" name="tiempocursadosupdiplomado[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Modalidad ${i +1}</label>
                                <select name="modaldaddiplomado[]" id="modaldaddiplomado[${i}]" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Presencial">Presencial</option>
                                    <option value="A distancia">A distancia</option>
                                    <option value="Mixta">Mixta</option>
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label>Documento que recibe ${i +1}</label>
                                <select name="documentorecibediplomado[]" id="documentorecibediplomado[${i}]" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Cosntancia">Cosntancia</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Reconocimiento">Reconocimiento</option>
                                    <option value="Certificado">Certificado</option>
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Asiste como:</label>
                                    <select class="form-control" name="asistecomodiplomado[]" id="asistecomodiplomado[${i}]" required>
                                        <option value="Sin dato">Seleccione</option>
                                        <option value="Participante">Participante</option>
                                        <option value="Ponente">Ponente</option>
                                        <option value="Coordinador">Coordinador</option>
                                        <option value="Profesor titular">Profesor titular</option>
                                        <option value="Profesor adjunto">Profesor adjunto</option>
                                </select>
                                </div>
                            
                        </div>`;
                        }
                        document.getElementById("divGuests5").innerHTML = content;
                    })
                </script>

                <div id="divGuests5"></div>
</section>
<section>
<h3 style="text-align: center;">Certificaciones</h3>
<div class="form-group col-md-12">
                    <strong>Agregar certificación (Solo numeros)</strong>
                    <input type="number" id="quantity6" name="certificaciones" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity6").addEventListener("input", (event) => {
                        let content = '';

                        const quantity6 = event.target.value;

                        for (let i = 0; i < quantity6; i++) {
                            content += `<div class="form-row">
                                    <h1 style="font-size:22px; text-align: center;">Información certificación ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre de la certificación ${i +1}</label>
                                <input type="text" id="nombreformacioncertificacion[${i}]" name="nombreformacioncertificacion[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreinstitucioncertificacion[${i}]" name="nombreinstitucioncertificacion[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainiciosupcertificacion[${i}]" name="fechainiciosupcertificacion[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminosupcertificacion[${i}]" name="fechaterminosupcertificacion[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Total de horas ${i +1}</label>
                                <input type="text" id="tiempocursadosupcertificacion[${i}]" name="tiempocursadosupcertificacion[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Modalidad ${i +1}</label>
                                <select name="modalidadcertificacion[]" id="modalidadcertificacion[${i}]" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Presencial">Presencial</option>
                                    <option value="A distancia">A distancia</option>
                                    <option value="Mixta">Mixta</option>
                                </select>
                                </div>
                                <div class="form-group col-md-12">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibecertificacion[${i}]" name="documentorecibecertificacion[]" class="form-control">
                                </div>
                                
                            
                        </div>`;
                        }
                        document.getElementById("divGuests6").innerHTML = content;
                    })
                </script>

                <div id="divGuests6"></div>
</section>
<section>
<h3 style="text-align: center;">Estudios Alta especialidad</h3>
<div class="form-group col-md-12">
                    <strong>Agregar Estudios Alta especialidad (Solo numeros)</strong>
                    <input type="number" id="quantity7" name="otrosestudios" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity7").addEventListener("input", (event) => {
                        let content = '';

                        const quantity7 = event.target.value;

                        for (let i = 0; i < quantity7; i++) {
                            content += `<div class="form-row">
                                    <h1 style="font-size:22px; text-align: center;">Información Estudios Alta especialidad ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre de la formación ${i +1}</label>
                                <input type="text" id="nombreformacionaltaesp[${i}]" name="nombreformacionaltaesp[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombrealtaespecialidad[${i}]" name="nombrealtaespecialidad[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Unidad hospitalaria ${i +1}</label>
                                <input type="text" id="unidadhospaltaesp[${i}]" name="unidadhospaltaesp[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainicioaltaesp[${i}]" name="fechainicioaltaesp[]" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminoaltaesp[${i}]" name="fechaterminoaltaesp[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Años cursados ${i +1}</label>
                                <input type="text" id="tiempocursadoaltaesp[${i}]" name="tiempocursadoaltaesp[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibealtaesp[${i}]" name="documentorecibealtaesp[]" class="form-control">
                                </div>
                        </div>`;
                        }
                        document.getElementById("divGuests7").innerHTML = content;
                    })
                </script>

                <div id="divGuests7"></div>
</section>
<section>
<h3 style="text-align: center;">Otros estudios</h3>
<div class="form-group col-md-12">
                    <strong>Agregar otros estudios (Solo numeros)</strong>
                    <input type="number" id="quantity8" name="otrosestudios" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity8").addEventListener("input", (event) => {
                        let content = '';

                        const quantity8 = event.target.value;

                        for (let i = 0; i < quantity8; i++) {
                            content += `<div class="form-row">
                                    <h1 style="font-size:22px; text-align: center;">Información otros estudios ${i +1}</h1>
                                
                            <div class="form-group col-md-6">
                                <label>Nombre de la formación ${i +1}</label>
                                <input type="text" id="nombreformacionotros[${i}]" name="nombreformacionotros[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre de la institución educativa ${i +1}</label>
                                <input type="text" id="nombreotrosestudiosuno[${i}]" name="nombreotrosestudiosuno[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Fecha de inicio ${i +1}</label>
                                <input type="date" id="fechainiciootrosestudiosuno[${i}]" name="fechainiciootrosestudiosuno[]" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Fecha termino ${i +1}</label>
                                <input type="date" id="fechaterminootrosestudiosuno[${i}]" name="fechaterminootrosestudiosuno[]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                <label>Documento que recibe ${i +1}</label>
                                <input type="text" id="documentorecibeestudiosuno[${i}]" name="documentorecibeestudiosuno[]" class="form-control">
                                </div>
                        </div>`;
                        }
                        document.getElementById("divGuests8").innerHTML = content;
                    })
                </script>

                <div id="divGuests8"></div>
</section>
    
      <h3>Servicio social</h3>

      <div class="form-group col-md-6">
        <label>Nombre de la dependencia donde se realizó</label>
        <input type="text" id="nombreserviciosocial" name="nombreserviciosocial" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de inico</label>
        <input type="date" id="fechainicioservicio" name="fechainicioservicio" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha término</label>
        <input type="date" id="fechaterminoservicio" name="fechaterminoservicio" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label>Labores que desempeñó</label>
        <textarea rows="4" id="laboresservicio" name="laboresservicio" class="form-control"></textarea>
      </div>
      <div class="form-group col-md-12">
        <label>Documento recibido</label>
        <input type="text" id="documentorecibeservicio" name="documentorecibeservicio" class="form-control">
      </div>

      <h3>Practicas profesionales</h3>

      <div class="form-group col-md-6">
        <label>Nombre de la dependencia donde se realizó</label>
        <input type="text" id="nombrepracticas" name="nombrepracticas" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de inico</label>
        <input type="date" id="fechainiciopracticas" name="fechainiciopracticas" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha término</label>
        <input type="date" id="fechaterminopracticas" name="fechaterminopracticas" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label>Labores que desempeñó</label>
        <textarea rows="4" id="laborespracticas" name="laborespracticas" class="form-control"></textarea>
      </div>
      <div class="form-group col-md-12">
        <label>Documento recibido</label>
        <input type="text" id="documentorecibepracticas" name="documentorecibepracticas" class="form-control">
      </div>
<!--
      <h3>Actualización academica<br>
        Primer curso.</h3>

      <div class="form-group col-md-6">
        <label>Nombre del curso</label>
        <input type="text" id="nombrecursouno" name="nombrecursouno" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Institución sede</label>
        <input type="text" id="institucioncursouno" name="institucioncursouno" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de inicio</label>
        <input type="date" id="fechainiciocursouno" name="fechainiciocursouno" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha término</label>
        <input type="date" id="fechaterminocursouno" name="fechaterminocursouno" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Documento que acredita</label>
        <input type="text" id="documentorecibecursouno" name="documentorecibecursouno" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label>Nacional/Internacional</label>
        <select id="nacionalprimero" name="nacionalprimero" class="form-control">
          <option selected>Seleccione...</option>
          <option value="Nacional">Nacional</option>
          <option value="Internacional">Internacional</option>
        </select>
      </div>

      <h3>Segundo curso.</h3>

      <div class="form-group col-md-6">
        <label>Nombre del curso</label>
        <input type="text" id="nombrecursodos" name="nombrecursodos" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Institución sede</label>
        <input type="text" id="institucioncursodos" name="institucioncursodos" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de inicio</label>
        <input type="date" id="fechainiciocursodos" name="fechainiciocursodos" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha término</label>
        <input type="date" id="fechaterminocursodos" name="fechaterminocursodos" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Documento que acredita</label>
        <input type="text" id="documentorecibecursodos" name="documentorecibecursodos" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label>Nacional/Internacional</label>
        <select id="nacionalsegundo" name="nacionalsegundo" class="form-control">
          <option selected>Seleccione...</option>
          <option value="Nacional">Nacional</option>
          <option value="Internacional">Internacional</option>
        </select>
      </div>

      <h3>Tercer curso.</h3>

      <div class="form-group col-md-6">
        <label>Nombre del curso</label>
        <input type="text" id="nombrecursotres" name="nombrecursotres" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Institución sede</label>
        <input type="text" id="institucioncursotres" name="institucioncursotres" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha de inicio</label>
        <input type="date" id="fechainiciocursotres" name="fechainiciocursotres" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Fecha término</label>
        <input type="date" id="fechaterminocursotres" name="fechaterminocursotres" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Documento que acredita</label>
        <input type="text" id="documentorecibecursotres" name="documentorecibecursotres" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label>Nacional/Internacional</label>
        <select id="nacionaltercero" name="nacionaltercero" class="form-control">
          <option selected>Seleccione...</option>
          <option value="Nacional">Nacional</option>
          <option value="Internacional">Internacional</option>
        </select>
      </div>
                  -->
      <h3>Experiencia laboral, sector público.</h3>

      <div class="form-group col-md-6">
        <label>Secretaría de Estado</label>
        <select name="cbx_empresaone" id="cbx_empresaone" class="form-control">
          <option value="0">Seleccione</option>
          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $query = $conexion->prepare("SELECT id_catalogo, nombreramo FROM catalogoramos");
          $query->execute();
          while ($row = $query->fetch()) { ?>
            <option value="<?php echo $row['id_catalogo']; ?>"><?php echo $row['nombreramo']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Unidad responsable</label>
        <select name="cbx_dependenciaone" id="cbx_dependenciaone" class="form-control">

        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Nombre del puesto</label>
        <input type="text" class="form-control" id="puestoempresauno" name="puestoempresauno">
      </div>
      <div class="form-group col-md-6">
        <label>Tipo de puesto</label>
        <select name="empresa" id="empresa" class="form-control">
          <option value="0">Seleccione</option>

          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $resultado = $conexion->prepare("SELECT * FROM tipopuesto");
          $resultado->execute();
          while ($row = $resultado->fetch()) { ?>
            <option value="<?php echo $row['id_tipopuesto']; ?>"><?php echo $row['descripcionpuesto']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Dirección de la institución</label>
        <input type="text" class="form-control" id="empresadirecionuno" name="empresadirecionuno">
      </div>
      <div class="form-group col-md-3">
        <label>Teléfono de contacto</label>
        <input type="text" class="form-control" id="telcontactouno" name="telcontactouno">
      </div>
      <div class="form-group col-md-3">
        <label>Extensión</label>
        <input type="text" class="form-control" id="extencionuno" name="extencionuno">
      </div>
      <div class="form-group col-md-6">
        <label>Nombre de su jefe directo</label>
        <input type="text" class="form-control" id="jefedirectouno" name="jefedirectouno">
      </div>
      <div class="form-group col-md-6">
        <label>Motivo de su sepación</label>
        <input type="text" class="form-control" id="motivoseparacionuno" name="motivoseparacionuno">
      </div>
      <div class="form-group col-md-12">
        <label>Funciones principales</label>
        <textarea rows="4" class="form-control" id="funcionespricipalesuno" name="funcionespricipalesuno"></textarea>
      </div>
      <div class="form-group col-md-6">
        <label>Fecha de inicio de labores</label>
        <input type="date" class="form-control" id="fechainiciouno" name="fechainiciouno">
      </div>
      <div class="form-group col-md-6">
        <label>Fecha término de labores</label>
        <input type="date" class="form-control" id="fechaterminouno" name="fechaterminouno">
      </div>

      <h3>Experiencia laboral, sector público, segundo.</h3>

      <div class="form-group col-md-6">
        <label>Secretaría de Estado</label>
        <select name="cbx_empresados" id="cbx_empresados" class="form-control">
          <option value="0">Seleccione</option>
          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $query = $conexion->prepare("SELECT id_catalogo, nombreramo FROM catalogoramos ");
          $query->execute();
          while ($row = $query->fetch()) { ?>
            <option value="<?php echo $row['id_catalogo']; ?>"><?php echo $row['nombreramo']; ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label>Unidad responsable</label>
        <select name="cbx_dependenciados" id="cbx_dependenciados" class="form-control">

        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Nombre del puesto</label>
        <input type="text" id="puestoempresados" name="puestoempresados" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Tipo de puesto</label>
        <select name="tipopuestodos" id="tipopuestodos" class="form-control">
          <option value="0">Seleccione</option>
          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $resultado = $conexion->prepare("SELECT * FROM tipopuesto");
          $resultado->execute();
          while ($row = $resultado->fetch()) { ?>
            <option value="<?php echo $row['id_tipopuesto']; ?>"><?php echo $row['descripcionpuesto']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Dirección de la institución</label>
        <input type="text" class="form-control" id="empresadirecdos" name="empresadirecdos">
      </div>
      <div class="form-group col-md-3">
        <label>Teléfono de contacto</label>
        <input type="text" class="form-control" id="telcontactodos" name="telcontactodos">
      </div>
      <div class="form-group col-md-3">
        <label>Extensión</label>
        <input type="text" class="form-control" id="extenciondos" name="extenciondos">
      </div>
      <div class="form-group col-md-6">
        <label>Nombre de su jefe directo</label>
        <input type="text" class="form-control" id="jefedirectodos" name="jefedirectodos">
      </div>
      <div class="form-group col-md-6">
        <label>Motivo de su sepación</label>
        <input type="text" class="form-control" id="motivoseparaciondos" name="motivoseparaciondos">
      </div>
      <div class="form-group col-md-12">
        <label>Funciones principales</label>
        <textarea rows="4" class="form-control" id="funcionespricipalesdos" name="funcionespricipalesdos"></textarea>
      </div>
      <div class="form-group col-md-6">
        <label>Fecha de inicio de labores</label>
        <input type="date" class="form-control" id="fechainicidos" name="fechainicidos">
      </div>
      <div class="form-group col-md-6">
        <label>Fecha término de labores</label>
        <input type="date" class="form-control" id="fechaterminodos" name="fechaterminodos">
      </div>

      <h3>Experiencia laboral, sector público, tercero.</h3>

      <div class="form-group col-md-6">
        <label>Secretaría de Estado</label>
        <select name="cbx_empresatres" id="cbx_empresatres" class="form-control">
          <option value="0">Seleccione</option>
          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $query = $conexion->prepare("SELECT id_catalogo, nombreramo FROM catalogoramos");
          $query->execute();
          while ($row = $query->fetch()) { ?>
            <option value="<?php echo $row['id_catalogo']; ?>"><?php echo $row['nombreramo']; ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label>Unidad responsable</label>
        <select name="cbx_dependenciatres" id="cbx_dependenciatres" class="form-control">

        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Nombre del puesto</label>
        <input type="text" id="puestoempresatres" name="puestoempresatres" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Tipo de puesto</label>
        <select name="tipopuestotres" id="tipopuestotres" class="form-control">
          <option value="0">Seleccione</option>
          <?php
          require_once 'clases/conexion.php';
          $conexion = new Conexion();
          $resultado = $conexion->prepare("SELECT * FROM tipopuesto");
          $resultado->execute();
          while ($row = $resultado->fetch()) { ?>
            <option value="<?php echo $row['id_tipopuesto']; ?>"><?php echo $row['descripcionpuesto']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Dirección de la institución</label>
        <input type="text" class="form-control" id="empresadirectres" name="empresadirectres">
      </div>
      <div class="form-group col-md-3">
        <label>Teléfono de contacto</label>
        <input type="text" class="form-control" id="telcontactotres" name="telcontactotres">
      </div>
      <div class="form-group col-md-3">
        <label>Extensión</label>
        <input type="text" class="form-control" id="extenciontres" name="extenciontres">
      </div>
      <div class="form-group col-md-6">
        <label>Nombre de su jefe directo</label>
        <input type="text" class="form-control" id="jefedirectotres" name="jefedirectotres">
      </div>
      <div class="form-group col-md-6">
        <label>Motivo de su sepación</label>
        <input type="text" class="form-control" id="motivoseparaciontres" name="motivoseparaciontres">
      </div>
      <div class="form-group col-md-12">
        <label>Funciones principales</label>
        <textarea rows="4" class="form-control" id="funcionespricipalestres" name="funcionespricipalestres"></textarea>
      </div>
      <div class="form-group col-md-6">
        <label>Fecha de inicio de labores</label>
        <input type="date" class="form-control" id="fechainiciotres" name="fechainiciotres">
      </div>
      <div class="form-group col-md-6">
        <label>Fecha término de labores</label>
        <input type="date" class="form-control" id="fechaterminotres" name="fechaterminotres">
      </div>

<section>
<h3 style="text-align: center;">Exp. laboral sector privado</h3>
<div class="form-group col-md-12">
                    <strong>Agregar Exp. laboral sector privado (Solo numeros)</strong>
                    <input type="number" id="quantity9" name="explaboral" autocomplete="off" class="form-control" min="0" max="5" placeholder="EJEMPLO: 1,2,3 etc">
                </div>
                <script>
                    document.getElementById("quantity9").addEventListener("input", (event) => {
                        let content = '';

                        const quantity9 = event.target.value;

                        for (let i = 0; i < quantity9; i++) {
                            content += `<div class="form-row">
                            
                                    <h1 style="font-size:22px; text-align: center;">Información Exp. laboral sector privado ${i +1}</h1>
                                

      <div class="form-group col-md-6">
        <label>Nombre de la empresa</label>
        <input type="text" class="form-control" autocomplete="off" id="nombrelaboralprivada[]" name="nombrelaboralprivada[]">
      </div>
      <div class="form-group col-md-6">
        <label>Tipo de puesto</label>
        <input type="text" class="form-control" autocomplete="off" id="tipopuestoprivada[]" name="tipopuestoprivada[]">
      </div>
      <div class="form-group col-md-6">
        <label>Dirección de la empresa</label>
        <input type="text" class="form-control" autocomplete="off" id="direccionempresaprivada[]" name="direccionempresaprivada[]">
      </div>
      <div class="form-group col-md-3">
        <label>Teléfono de contacto</label>
        <input type="text" class="form-control" autocomplete="off" id="telefonoempresaprivada[]" name="telefonoempresaprivada[]">
      </div>
      <div class="form-group col-md-3">
        <label>Extensión</label>
        <input type="text" class="form-control" autocomplete="off" id="extencionempresaprivada[]" name="extencionempresaprivada[]">
      </div>
      <div class="form-group col-md-6">
        <label>Nombre de su jefe directo</label>
        <input type="text" class="form-control" autocomplete="off" id="nombrejefeprivada[]" name="nombrejefeprivada[]">
      </div>
      <div class="form-group col-md-6">
        <label>Motivo de su sepación</label>
        <input type="text" class="form-control" autocomplete="off" id="motivoseparacionprivada[]" name="motivoseparacionprivada[]">
      </div>
      <div class="form-group col-md-12">
        <label>Funciones principales</label>
        <textarea rows="4" class="form-control" autocomplete="off" id="funcionesprivada[]" name="funcionesprivada[]"></textarea>
      </div>
      <div class="form-group col-md-6">
        <label>Fecha de inicio de labores</label>
        <input type="date" class="form-control" autocomplete="off" id="fechainicioprivada[]" name="fechainicioprivada[]">
      </div>
      <div class="form-group col-md-6">
        <label>Fecha término de labores</label>
        <input type="date" class="form-control" autocomplete="off" id="fechaterminoprivada[]" name="fechaterminoprivada[]">
      </div>
      </div>`;
                        }
                        document.getElementById("divGuests9").innerHTML = content;
                    })
                </script>

                <div id="divGuests9"></div>
</section>
      <h3>Producción cientifica (Investigación, última publicación).</h3>

      <div class="form-group col-md-6">
        <label>Nombre del artículo o publicación</label>
        <input type="text" id="nombrepublicacion" name="nombrepublicacion" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Año de publiación</label>
        <input type="date" id="tiempopublicacion" name="tiempopublicacion" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <label>Publicado en...</label>
        <input type="text" id="publicadoen" name="publicadoen" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label>País de publicación</label>
        <input type="text" id="paisdepublicacion" name="paisdepublicacion" class="form-control">
      </div>

      <h3>Idioma.</h3>

      <div class="form-group col-md-6">
        <label>Idioma.</label>
        <input type="text" id="nombreidioma" name="nombreidioma" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Nivel</label>
        <input type="text" id="nivel" name="nivel" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Dominio</label>
        <input type="text" id="niveldedominio" name="niveldedominio" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Documento que acredita tu idioma.</label>
        <input type="text" id="documentoacredita" name="documentoacredita" class="form-control">
      </div>

      <h3>Otras habilidades.</h3>

      <div class="form-group col-md-12">
        <textarea class="form-control" id="otrashabilidades" name="otrashabilidades"></textarea>
      </div>


      <br><br>


      <p style="font-size: .9em; text-align: justify; color: black; font-style: normal;">Manifiesto que<SELECT name="selCombo" id="selCombo" required class="selCombo">
          <option value="">Seleccione</option>
          <OPTION VALUE="SI">SI</OPTION>
          <OPTION VALUE="NO">NO</OPTION>

        </SELECT>tengo familiar(es) laborando en esta institución.</p>
      <p style="font-size: .9em; text-align: justify; color: black; font-style: normal;">Autorizo al Hospital Regional de Alta Especialidad de Ixtapaluca, el envío de información referente a
        cuestiones institucionales, asi como información que compete a mis documentos personales, al siguiente correo
        electronico <input type="email" style="width: 200px; height: 20px; border: 1px solid blue;" required placeholder="Correo electronico" id="correo_elect" name="correo_elect">Proporciono el siguiente télefono
        para los mismos fines<input type="text" style="width: 200px; height: 20px; border: 1px solid blue;" required placeholder="Número Telefonico" id="telefono_enlace" name="telefono_enlace">.</p>
      <br>
      <p style="font-size: .9em; text-align: justify; color: black; font-style: normal;">Autorizo<SELECT id="selCombo5" name="selCombo5" required class="selCombo5">
          <option value="">Seleccione</option>
          <OPTION VALUE="SI">SI</OPTION>
          <OPTION VALUE="NO">NO</OPTION>

        </SELECT>consiento y autorizo expresamente al Hospital Regional de Alta Especialidad de Ixtapaluca, que mis datos personales sean tratados y transmitidos por medio impreso
        a empresas e instituciones del mismo grupo de interés, para ser considerado como posible candidato en alguna oferta laboral distinta
        a la solicitada en esta institución, conforme a los términos y condiciones señalados en los artículos 97, 98, Fracción II de la Ley Federal de Transparencia y Acceso a la
        Información Pública, no teniendo ni reservando ninguna acción o derecho en contra del Hospital Regional de Alta Especialidad de Ixtapaluca.
      </p><br>

      <div style="width: 100; display: flex; justify-content: center; align-items: center;">
        <input type="submit" id="registrar" value="Registrar" class="btn btn-success">
      </div>
  </form>

  <!--fin formulario de relleno-->

  <div class="row top-buffer">
    <div class="col-md-8">
      <p class="small" style="font-size: 14px; line-height: 1.6em;">
        La legalidad, veracidad y la calidad de la información es
        estricta responsabilidad de la dependencia, entidad o
        empresa productiva del Estado que la proporcionó en virtud
        de sus atribuciones y/o facultades normativas. </p>
    </div>
  </div>
</body>

<script>
  $("#formulario").on("submit", function(e) {

    e.preventDefault();

    var formData = new FormData(document.getElementById("formulario"));
    formData.append("dato", "valor");

    $.ajax({

      url: "enviarDatos.php",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function(objeto) {
        $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');

      },
      success: function(datos) {

        $("#tabla_resultado").html(datos);
      }

    })

  })
</script>

</html>