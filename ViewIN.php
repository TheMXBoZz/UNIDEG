<!--
    Documento     : Alumnos
    By            : Aleajndro Ortiz Rodriguez
    Actictividad  : PROYECTO UNIDEG
    AREA          : Ver Incidencias
-->


<?php


// -- Consulta la base de datos SLQ  -->
include "Conexion_Consultas_SQL.php";




    //Colocar en los "?????" el lugar donde se guardara el dato en la bd, despues eliminar (/*)

        /*

     if(iset($_POST["botoncrear"]))
 {

    
        //Tabla a guardar
     $retroalimentacionpedagogo = $_POST["?????"];
     $estatus = $_POST["?????"];
    
     


   $conexion->query("INSERT INTO $incidenciaclase()");

 }
    */


?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Recursos del bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Recursos del fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>  
            .texto {
                font-family: Verdana;
            }
        </style>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registro</title>
    </head>

    <body style="background-color:#117AB7;">


        <hr>

        <h2 style="color:#21E4C0" align="center" class="texto"> Lista de incidencias registradas </h2>   

        <hr>
        <br/>


         <!-- Tabla para mostrar informacion  --> 
            <div class="col-md-8">

                <table class="table table-dark" style="color:#F3851E">
                    <thead class="thead-dark ">
                        <tr>
                            <th scope="col">Matricula</th>
                            <th scope="col">Fecha de incidencia</th>
                            <th scope="col">Tipo de incidencia</th>  
                            <th scope="col">Nombre Completo (Alumno)</th>
                            <th scope="col">Docente que reporta</th>
                            <th scope="col">Materia</th> 
                            <th scope="col">Grado</th>
                            <th scope="col">Fecha de creacion</th>
                            <th scope="col">Acciones que lleva acabo el docente</th>
                            <th scope="col">Retroalimentacion</th>
                            <th scope="col">Fecha de atencion por parte del psicopedagogo</th> 
                            <th scope="col">Estatus</th>
                            <th scope="col"></th>

                             
                        </tr>

                    </thead>

                    <?php


                      //Nos estamos conectandio a la tabla canalizaciones
                    $sql = "SELECT * FROM canalizaciones";
                    $result = mysqli_query($consult,$sql);
                    
                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    

                    <tbody>
                                      <!-- Hay que reemplazar los "????" por el parametro que se decea consultar, si se deja asi, la tabla no se muestra correctamente-->
                            <tr> 
                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td>   
                               
                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td> 

                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td> 

                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td>
                                
                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td> 

                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td> 

                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td>

                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td> 

                                <td name="" style="color:#FFFFFF"><?php echo $mostrar["????"]?> </td> 

                                <?php
                           }
                                ?> 

                                <td><input type =" text "name =" retroalimentacionpedagogo "size =" 30 "></td>

                                <td><input type="date" id="start" name="trip-start"
                                              value="2021-01-01"
                                                 min="2015-01-01" max="2050-12-01"></td>

                                <td><select name="estatus">

                                  <option selected value="0"> Estatus </option>
                               <optgroup label="Tipos"> 
                                  <option value="1">ATENDIDO</option>
                                  <option value="2">EN PROCESO</option> 

                                  </optgroup> 
   
                                   </select></td> 


                                <td> 

                                <a class="btn btn-success" type= "submit" name= "Guarar" value="enviarretro">Guardar</a> 
                
                                </td> 
                            </tr> 


                    </tbody>
                </table>
            </div> 

        </div> 


       





        </div>



    <!-- Pendiente -->

         Filtor de busqueda (Programar)

                              <input type =" text "name =" filtronombre "size =" 30 "></th> 

                                <td><select name="filtroincidencia">
                                  <option selected value="0"> Elige la incidencia </option>
                               <optgroup label="Tipos"> 
                                  <option value="1">Inasistencia</option>
                                  <option value="2">No entrega actividades</option>
                                  <option value="2">Otro</option>  

                                  </optgroup> 
   
                                   </select>



               </body>
                                
</html>









