<!--
    By            : Aleajndro Ortiz Rodriguez
    Actictividad  : PROYECTO UNIDEG
    AREA          : Creacion de incidencias
-->

<?php

// -- Consulta la base de datos SLQ  -->



$consult=mysqli_connect("localhost","root","","bd");

$muestraINFOmateria = mysqli_query ($consult, "SELECT * FROM materia");

$muestraINFOgrados = mysqli_query ($consult, "SELECT * FROM grupos");


$muestraINFOmatricula = mysqli_query ($consult, "SELECT * FROM alumnos");


$muestraINFOalumno = mysqli_query ($consult, "SELECT * FROM persona");



   //Guardado de los datos en SQL

            if(isset($_POST['btn1']))
             {
                
                include "Conexion_Consultas_SQL.php";

                 //Tabla de creacion
                 $docente = $_POST['docente'];         
                 $tipoincidencia = $_POST['tipoincidencia'];  
                 $materias = $_POST['materias'];      
                 $matriculas = $_POST['matriculas'];      
                 $grado = $_POST['grado'];              
                 $acciones = $_POST['acciones'];     
                 $fecha = $_POST['fecha'];       

               //CONFIGURAR DONDE SE VAN A GUARDAR LOS DATOS
     $consult->query("INSERT INTO $tabla_db1 (id_in,docente,tipoincidencia,materia,matricula,grado,accionorigen,fecha,accionfinal,fechaps,estatus) 
                     values ('','$docente','$tipoincidencia','$materias','$matriculas','$grado','$acciones','$fecha','','','')");

               include("cerrar_conexion.php");                   

             echo "Se guardo correctamente la incidencia";
             }


        
          ?>




<!DOCTYPE html>
<html>
    <head>
        <!-- Recursos del bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Recursos del fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <style>  
            .texto {
                font-family: Verdana;
            }
        </style>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Creacion de INCIDENCIA</title>
    </head>

    <body style="background-color:#117AB7;">


        <hr>

        <h2 style="color:#21E4C0" align="center" class="texto"> Por favor, llene los campos </h2>   

        <hr>
        <br/>

<!-- _____________________________________________________________________________________________  -->

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

        <form method="POST" action="CreateINprofesor.php" >

<div class="form-group">
  <label for="doc">Docente que reporta</label>
  <input type="text" name="docente" class="form-control" id="docente">
</div>

<div class="form-group">
  <label for="nombre">Tipo de incidencia </label>
  <br>
  <select name="tipoincidencia" id="tipoincidencia" class="form-control">
                                  <option selected value="0"> </option>
                               <optgroup label="Tipos"> 
                                  <option value="Inasistencia">Inasistencia</option>
                                  <option value="No entrega actividades">No entrega actividades</option>
                                  <option value="Otro">Otro</option>  

                                  </optgroup> 
   
                                   </select>
</div>

<div class="form-group">
  <label for="dir">Materia </label>
  <br>
  <select  name="materias" id="materias" class="form-control">
                                <?php 
                                   while ($datosMateria=mysqli_fetch_array($muestraINFOmateria)){    
                                   ?>
                                  
                                  <option value="0"></option>
                                  
                                  <option value="<?php echo $datosMateria["materia"]?>"><?php echo $datosMateria["materia"]?></option>

                                  <?php
                                     }
                                  ?>
   
                                   </select>
</div>

<div class="form-group">
  <label for="tel">Matricula </label>
  <select name="matriculas" id="matriculas" class="form-control">
                                <?php 
                                   while ($datosMatricula=mysqli_fetch_array($muestraINFOmatricula)){    
                                   ?>
                                  
                                  <option value="0"></option>
                                  
                                  <option value="<?php echo $datosMatricula["matricula"]?>"><?php echo $datosMatricula["matricula"]?></option>

                                  <?php
                                     }
                                  ?>
   
                                   </select>  

                                  </optgroup> 
   
                                   </select>
</div>





<div class="form-group">
  <label for="tel">Grado </label>
  <br>
  <select name="grado" id="grado" id="grado" class="form-control">
                                <?php 
                                   while ($datosGrados=mysqli_fetch_array($muestraINFOgrados)){    
                                   ?>

                                  <option value="0"></option>
                                  
                                  <option value="<?php echo $datosGrados["grado"]?>"><?php echo $datosGrados["grado"]?></option>

                                  <?php
                                     }
                                  ?>
   
                                   </select>
</div>

<div class="form-group">
  <label for="tel">Acciones que lleva acabo el docente </label>
  <textarea type="text" name="acciones" class="form-control" id="acciones"></textarea>
</div>

<div class="form-group">
  <label for="tel">Fecha de reporte </label>
  <br>
  <input readonly="readonly" type="datetime" name="fecha"  id= "fecha" class="form-control" value="<?php echo date("Y/m/d-h:i");?>">
</div>

<center><input type="submit" value="Guardar" class="btn btn-success" name="btn1"></center>

</form>

</div>
  <div class="col-md-4"></div>
</div>

<!-- _____________________________________________________________________________________________  -->


    </body>
</html>
