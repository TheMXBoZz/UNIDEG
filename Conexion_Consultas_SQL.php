<!--
    By            : Aleajndro Ortiz Rodriguez
    Actictividad  : PROYECTO UNIDEG
    AREA          : Conectar a base de datos
-->

<!--NOTA: Se van a cambiar estos datos cuando el proyecto se junte, se utilizara otra DB...-->

<?PHP

	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "bd";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";          // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "canalizaprofe"; 	   // tabla de usuarios
	

	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}


//-----------------------------------------------------------------------------------------------------------------------------------------------

//Tablas usadas con variables:

$tabla_canalizaciones = "canalizaciones";




?>