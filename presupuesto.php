<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="icon" sizes="57x57" href="/imges/favicon.png">
    <link rel="stylesheet" href="popupReparacion.css">
    <script src="/popupReparacion.js"></script>
    <style>
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
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(0, 0, 0);
   color: white;
   text-align: center;
}

</style>

</head>
<img src="/imges/Nuevo Logo Moto.png" width="250" height="80">
<font face="Arial Black" size="2" >
<a style= "color:black; position:absolute; left:1160px; top:12px;" href="#">Tecnico Mecanico</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="/">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Captura de Pantalla 2019-05-16 a la(s) 00.01.07_1.png" width="40"></label>
<table style="position: absolute; top: 250px" class="tabla1">
<tr>
<th>Codigo</th>
<th>Codigo Diagnostico</th>
<th>Tecnico Encargado</th>
<th>Cliente</th>
<th>Mano de Obra</th>
<th>Vehiculo</th>
<th>Observaciones</th>
<th>Estado</th>
</tr>
<tr>
	<td>7890</td>
	<td>3456</td>
  <td>Rodrigo Bustos</td>
  <td>Sebastian Chipoco</td>
  <td>30.000</td>
  <td>Honda Accord 2000</td>
  <td>Solo tiene que cambiar los neumaticos</td>
  <td><a href="javascript: encendido();">Pendiente</a></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
	</tr>
</table>
<body>
  <font face="Verdana" size="2" >   
    <ul>
        <li><a class="active" href="/Inicio TecM.php">INICIO</a></li>
        <li><a href="/inventario Tec1.php">INVENTARIO</a></li>
        <li><a href="/cliente_tec.php">CLIENTES</a></li>
        <li><a href="/presupuesto.php">PRESUPUESTOS</a></li>
    </ul>
</font> 
<center>
    <font face="Verdana">
        <h1>Presupuestos</h1>
    </font>
      </center>
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

        <!--popup Presupuesto-->
        <div id="popup3" class="popup3">
            <font face="Verdana">
          <center>
          <h2>Reparacion</h2>
          </center>
        <form action="" onsubmit="return validarFormulario()">
          <table style="position: absolute; right: 100px; top: 100px">
        <tr>
          <td>Codigo:</td>
          <td><input type="text" name="codigo" id="codigo"></td>
          
        </tr>
        <tr>
          <td>Presupuesto Asociado:</td>
          <td><input type="text" name="presupuesto_asociado" id="presupuesto_asociado"></td>
              
        </tr>
        <tr>
              <td>Vehiculo que se repara:</td>
              <td><input type="text" name="vehiculo_que_repara" id="vehiculo_que_repara"></td>
        </tr>
        <tr>
              <td>Tecnico Responsable de la reparacion:</td>
              <td><input type="text" name="tec" id="tec"></td>
                  
        </tr>
        <tr>
              <td>Listado Tecnicos Involucrados:</td>
              <td><textarea name="list_tec" id="list_tec"></textarea></td>
        </tr>
        <tr>
              <td>Repuestos y Cantidades:</td>
              <td><textarea name="resp_cant" id="resp_cant"></textarea></td>
        </tr>
        
        <input style="position:absolute; left:450px; top:550px;" type="submit" value="Enviar">
        </form>
        </table>
        <button style="position: absolute; right:450px; top:550px;" class="boton"><a href="javascript: apagado();">Cerrar</a></button>
        </font>
          </div>

</body>
</html>