<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "Concentrado_Incidencias.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-12">


  <table border="1" >
		<tr>
            <td style="color:#F3851E">ID de incidencia</td>
			<td style="color:#F3851E">Docente que reporta</td>
			<td style="color:#F3851E">Tipo de incidencia</td>
			<td style="color:#F3851E">Materia</td>
			<td style="color:#F3851E">Alumno (Matricula)</td>
			<td style="color:#F3851E">Grado</td>	
            <td style="color:#F3851E">Acciones que lleva acabo el docente</td>
            <td style="color:#F3851E">Fecha de reporte</td>
            
            <td style="color:#F3851E">Acciones de seguimiento por psicopedagogo</td>
            <td style="color:#F3851E">Fecha de atencion por psicopedagogo</td>
            <td style="color:#F3851E">Estatus</td>



		</tr>

		<?php 

		$consult=mysqli_connect("localhost","root","","bd");
        $muestraINFOresgistros = mysqli_query ($consult, "SELECT * FROM canalizaprofe");
       
		;


		while($mostrar=mysqli_fetch_array($muestraINFOresgistros)){

		 ?>

		<tr>
            <td><center><?php echo $mostrar['id_in'] ?></center></td>
			<td><?php echo $mostrar['docente'] ?></td>
			<td><?php echo $mostrar['tipoincidencia'] ?></td>
			<td><?php echo $mostrar['materia'] ?></td>
			<td><?php echo $mostrar['matricula'] ?></td>
			<td><?php echo $mostrar['grado'] ?></td>
            <td><?php echo $mostrar['accionorigen'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>

            <td><?php echo $mostrar['accionfinal'] ?></td>
            <td><?php echo $mostrar['fechaps'] ?></td>
            <td><?php echo $mostrar['estatus'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>



  
   

</form>

</div>
  <div class="col-md-12"></div>
</div>

