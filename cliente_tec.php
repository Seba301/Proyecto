<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MotoNorte</title>
    <link rel="icon" sizes="57x57" href="/imges/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/popup.css">
    <link rel="stylesheet" href="/popupDiagnostico.css">
    <script type="text/javascript" src="/popup.js"></script>
    <script type="text/javascript" src="/popupDiagnostico.js"></script>
    <style>

/*---------MENU------------*/
ul {
  list-style-type: none; 
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000066;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: rgb(6, 6, 128);
}
/*-----------------------------*/


/*-----------------------------*/
/*-----------Footers--------------*/
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(0, 0, 0);
   color: white;
   text-align: center;
}
/*-----------------------------*/
/*-------------BUSCADORES------*/
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

input[type=text], input[type=number] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #000066;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #000066;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
/*--------Boton------------*/
.button {
  background-color: #000066;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.tabla1{
			position:absolute;
			width:1200px;
			margin:10px 150px;
			border-collapse: collapse;
			background-color: #000066;

			font-family: tahoma, arial, helvetica !important;
			font-size: 9pt !important;
			color:white;
		}
		.tabla1, .tabla1 th, .tabla1 td {
			border: 1px solid black;
			
		}
		.tabla1 th{
      padding:1.5em 2em;
			white-space:nowrap;
			text-overflow:ellipsis;
			overflow:hidden;
			line-height:22px;
			height:22px;
      background-color:#000066;
    }
     .tabla1 td  {
			padding:1.5em 2em;
			white-space:nowrap;
			text-overflow:ellipsis;
			overflow:hidden;
			line-height:22px;
			height:22px;
      background-color: #EEECEC;
      font-family: tahoma, arial, helvetica !important;
			font-size: 9pt !important;
			color:black;
		}
</style>
</head>
<img src="/imges/LogoNuevoMoto.png" width="250" height="80">
<font face="Arial Black" size="2" >
<a style= "color:black; position:absolute; left:1160px; top:12px;" href="#">Tecnico Mecanico</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="/">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Seccion.png" width="40"></label>
<body>
  <font face="Verdana" size="2" >   
    <ul>
        <li><a class="active" href="/Inicio TecM.php">INICIO</a></li>
        <li><a href="/inventario Tec1.php">INVENTARIO</a></li>
        <li><a href="/cliente_tec.php">CLIENTES</a></li>
        <li><a href="/presupuesto.php">PRESUPUESTOS</a></li>
    </ul>
    <center>
    <h1>Clientes</h1>
  </center>
    <table style="position: absolute; top: 300px; width: 1250px;" class="tabla1">
        <tr>
        <th>RUT</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Datos</th>
        <th>Estado</th>
        </tr>
        <tr>
          <td>19.979.937-1</td>
          <td>Sebastian</td>
          <td>Chipoco</td>
          <td><a href="javascript: abrir();">Datos</a></td>
          <td><a href="javascript: encendido();">Pendiente</a></td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          </tr>
        </table>
    <form class="example" action="/action_page.php"  style="position:absolute; left:1200px; top:150px" style="margin:auto;max-width:300px" >
  <input type="text" placeholder="Ingresar Rut" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

  </font>
<font face="Verdana" Size="3" >
<div style="position:absolute; left:0px; top:1100px; height:200px" class="footer">
  <img style="position:absolute; left:40px; top:0px; height:130px" src="/imges/Logonegromoto.png">
  <p style="position:absolute; left:810px">CONTACTOS</p>
  <p style="position:absolute; left:700px; top:40px;">Telefono - (57)2 576893<br> Correo - Example@Gmail.com<br> Ruta A-16 KM90 Nº 4200, Alto Hospicio </p>
  <p style="position:absolute; left:1160px" >HORARIO DE ATENCION</p> 
  <p style="position:absolute; left:1150px; top:40px;">LUNES A VIERNES<br>Mañana - 8:30 a 14:30 Hrs<br>Tarde - 14:30 a 18:30 Hrs</p>
</font>
<hr style="position:absolute; left:65px; top:140px;" width="90%" > 
<p style="position:absolute; left:65px; top:140px">© MotoNorte</p>
</div>
<form>
  <div style="position:absolute; left:400px; top:1170px; height:0px" >
    <input type="search" id="miBusqueda" name="q">
    <button>Buscar</button>
  </div>
</form>


<!--poup datos cliente-->


<div id="popup" class="popup">
    <center>
    <h2>Datos Cliente</h2>
</center>
        <table>
 <tr><th>RUT:</th><td>19.979.937-1</td></tr><br>
    <tr><th>Nombre:</th><td>Sebastian</td></th>
     <tr><th>Apellido:</th><td>Chipoco</td></th>
    <tr><th>Direccion:</th><td>Libertad 1158</td></th>
    <tr><th>Telefono:</th><td>2 418487</td></th>
  <tr><th>Celular:</th><td>9 58969939</td></th>
    <tr><th> Email:</th><td>Chipocosebastian@gmail.com</td></th>
  <tr><th>Banco:</th><td>Banco Estado</td></th>
<tr><th> Nro Cuenta:</th><td>19979937</td></th>
<tr><th> Patente:</th><td>43 VG JB</td></th>
   <tr><th>Marca:</th><td>Honda</td></th>
    <tr><th>Modelo:</th><td>Accord</td></th>
   <tr><th>Año:</th><td>2000</td></th>
        </table>
        <button style="position: absolute; right:40px ;" class="boton"><a href="javascript: fechar();">Cerrar</a></button>
    </div>


<!--popup formulario-->  


<div id="popup2" class="popup2">
  <center>
  <h2>Diagnostico</h2>
  </center>
    <font face="Verdana">
  <form action="" onsubmit="return validarFormulario()">
    <table style="position: absolute; right: 80px; top: 150px">
  <tr>
    <td>Horas Hombre:</td>
    <td><input type="number" name="horas_hombre" id="horas_hombre"></td>
    
  </tr>
  <tr>
    <td>Insumos Utilizados:</td>
    <td><textarea type="text" name="insumos_utilizados" id="insumos_utilizados"></textarea>
        
  </tr>
  <tr>
    <td>Observacion:</td>
    <td><textarea type="text" name="observacion" id="observacion"></textarea>
        
  </tr>
  <input style="position:absolute; left:280px; top: 400px;" type="submit" value="Enviar" class="boton">
  </form>
  </table>
<button style="position: absolute; right:280px; top: 400px;" class="boton"><a href="javascript: apagado();">Cerrar</a></button>
</font>
  </div>
</body>
</html>