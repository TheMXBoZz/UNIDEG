<!--
    Documento     : Pagina Principal 
    By            : Aleajndro Ortiz Rodriguez
    Actictividad  : PROYECTO UNIDEG
    AREA          : Inicio-profesor
-->

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <link rel="shortcut icon" href="faviconSABES.png">  <!-- icono de la pagina favicoin -->

        <meta charset="UTF-8"> 


        <!-- Recursos del bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Recursos del fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <style>  
            .texto {
                font-family: Verdana;
            }
        </style>

        <title>SISTEMA DE INCIDENCIAS</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <!-- Fondo -->
    <body style="background-color:#297DE1;"> 


    
    <script type="text/javascript">

// Establece el numero de escarcha
var snowmax=35

// Color de la nieve
var snowcolor=new Array("#aaaacc","#ddddff","#ccccdd","#f3f3f3","#f0ffff")

// Fuentes con que se crea la nieve
var snowtype=new Array("Times","Arial","Times","Verdana")

// Letra para crear la escarcha (en mi caso * )
var snowletter="*"

// Velocidad con que cae
var sinkspeed=1

// Tamaño maximo de la nieve
var snowmaxsize=30

// Tamaño minino de la nieve
var snowminsize=8

// Establecer la zona donde cae la nieve (1 todo, 2 izquierda, 3 centro, 4 derecha)
var snowingzone=1

///////////////////////////////////////////////////////////////////////////
// FIN DE CONFIGURACION
///////////////////////////////////////////////////////////////////////////


// No edites bajo esta linea (POR FAVOR)
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)
var browserok=ie5||ns6||opera

function randommaker(range) {
        rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
        if (ie5 || opera) {
                marginbottom = document.body.scrollHeight
                marginright = document.body.clientWidth-15
        }
        else if (ns6) {
                marginbottom = document.body.scrollHeight
                marginright = window.innerWidth-15
        }
        var snowsizerange=snowmaxsize-snowminsize
        for (i=0;i<=snowmax;i++) {
                crds[i] = 0;
            lftrght[i] = Math.random()*15;
            x_mv[i] = 0.03 + Math.random()/10;
                snow[i]=document.getElementById("s"+i)
                snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
                snow[i].size=randommaker(snowsizerange)+snowminsize
                snow[i].style.fontSize=snow[i].size+'px';
                snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
                snow[i].style.zIndex=1000
                snow[i].sink=sinkspeed*snow[i].size/5
                if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
                if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
                if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
                if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
                snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
                snow[i].style.left=snow[i].posx+'px';
                snow[i].style.top=snow[i].posy+'px';
        }
        movesnow()
}

function movesnow() {
        for (i=0;i<=snowmax;i++) {
                crds[i] += x_mv[i];
                snow[i].posy+=snow[i].sink
                snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i])+'px';
                snow[i].style.top=snow[i].posy+'px';

                if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
                        if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
                        if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
                        if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
                        if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
                        snow[i].posy=0
                }
        }
        var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
        document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
        window.onload=initsnow
}

</script>


        <!-- Fondo -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> <!-- Barra superior de navegacion -->
            <a class="navbar-brand" href="#"></a>
            <img src="faviconSABES.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item active"> 
                        <a class="nav-link" style="color:#21E4C0"><span class="sr-only">(current)</span></a> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="index.php" style="color:#21E4C0"></a> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="CreateINprofesor.php" target="miContenedor" style="color:#21E4C0">Crear incidencia</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="ViewINprofesor.php" target="miContenedor" style="color:#21E4C0">Ver resgistro de incidencias</a> 
                    </li>                    
                    
                </ul> 

                                      <!-- Añadir en href el link a el menu inicial -->
                <div class="btn-group"> 
                    <button type="button" class="btn btn-danger" href="index" name= "botoninicio">Menu Principal
                    </button> 
                

                        </form> 

                    </div> 
                </div> 
            </div> 
        </nav> 

       


        <h1 align="center" class="texto"  style="color:#F3851E"; > Bienvenido al sistema de INCIDENCIAS UNIDEG </h1> 

        
        <div class="m-3" style="height:900px;"> 
            <iframe name="miContenedor" style="height:100%; width:100%;" frameBorder="1"></iframe> 
        </div> 
        
        
        
        <div class="card text-white bg-danger mb-3">
            <div class="card-header" class="texto" style="color:#F3A11E" ></div>
            <br /> <br />
            <center><h2 class="texto" style="color:#F3A11E"> Realizado por: Alejandro Ortiz Rodríguez</h2> </center>
            <hr> 
            <br /> 

            <div class="texto" style="color:#89E321" >V 1.0
            </div>
        </div>


        <!-- Optional JavaScript --> 
        <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 

        
        
         

    </body>
</html>
