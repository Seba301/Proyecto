<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="icon" sizes="57x57" href="/imges/favicon.png">
    <link rel="stylesheet" href="popPresupuesto.css">
    <script src="/popupPresupuesto.js"></script>
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
<a style= "color:black; position:absolute; left:1100px; top:12px;" href="">Funcionario Administrativo</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="/">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Captura de Pantalla 2019-05-16 a la(s) 00.01.07_1.png" width="40"></label>
<table style="position: absolute; top: 250px" class="tabla1">
<tr>
<th>Codigo</th>
<th>Horas Hombre</th>
<th>Repuestos</th>
<th>Estado</th>
</tr>
<tr>
  <td>3456</td>
  <td>3 HRS</td>
	<td>4 Neumaticos 245/55/234</td>
  <td><a href="javascript: encendido()">Pendiente</a></td>
	</tr>
	<tr>
  <td></td>
  <td></td>
	<td></td>
	<td></td>
	</tr>
</table>
<body>
<?php include "./FuncionarioAdministrativo/menu.php" ?>
<center>
  <font face="Verdana">
      <h1>Diagnosticos</h1>
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

<!--Popup-->

<div id="popup4" class="popup4">
    <font face="Verdana">
    <center>
    <h2>Presupuesto</h2>
    </center>
    <form action="" onsubmit="return validarFormulario()">
        <table style="position: absolute; right: 150px; top: 100px">
      <tr>
        <td>Codigo:</td>
        <td><input type="text" name="codigo" id="codigo"></td>
        
      </tr>
      <tr>
        <td>Nombre Tecnico encargado:</td>
        <td><input type="text" name="nombre_tecnico" id="nombre_tecnico"></td>
            
      </tr>
      <tr>
            <td>Nombre Cliente:</td>
            <td><input type="text" name="nombre_cliente" id="nombre_cliente"></td>
      </tr>
      <tr>
            <td>Valor Repuestos:</td>
            <td><textarea name="repuestos" id="repuestos"></textarea></td>
                
      </tr>
      <tr>
            <td>Valor mano de obra:</td>
            <td><input type="text" name="valor_mano_obra" id="valor_mano_obra"></td>
      </tr>
      <tr>
            <td>Vehiculo Reparado:</td>
            <td><input type="text" name="vehiculo_reparado" id="vehiculo_reparado"></td>
      </tr>
      <tr>
            <td>Observaciones:</td>
            <td><textarea name="observaciones" id="observaciones"></textarea></td>
                
      </tr>
      <input style="position:absolute; left:500px; top:550px;" type="submit" value="Enviar">
      </form>
      </table>
  <button style="position: absolute; right:500px; top: 550px;" class="boton"><a href="javascript: apagado();">Cerrar</a></button>
  </font>
    </div>

</body>
</html>