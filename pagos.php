<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="icon" sizes="57x57" href="/imges/favicon.png">
    <style>
        table {
			position:absolute;
			width:1200px;
			margin:10px 150px;
			border-collapse: collapse;
			background-color: #000066;

			font-family: tahoma, arial, helvetica !important;
			font-size: 9pt !important;
			color:white;
		}
		table, table th, table td {
			border: 1px solid black;
			
		}
		table th{
      padding:1.5em 2em;
			white-space:nowrap;
			text-overflow:ellipsis;
			overflow:hidden;
			line-height:22px;
			height:22px;
      background-color: #000066;
    }
    table td  {
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
<a style= "color:black; position:absolute; left:1100px; top:12px;" href="/Inicio FA.php">Funcionario Administrativo</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="/">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Captura de Pantalla 2019-05-16 a la(s) 00.01.07_1.png" width="40"></label>
<table style="position: absolute; top: 250px">
<tr>
<th>Nro de Pago</th>
<th>Fecha de Pago</th>
<th>Codigo Servicio Reparacion</th>
<th>Precio</th>
<th>Descuentos</th>
<th>Precio Total</th>
<th>Tipo de Pago</th>
<th>Estado</th>
</tr>
<tr>
	<td>3570</td>
	<td>02/07/2019</td>
  <td>1023</td>
  <td>-4 Neumaticos 245/55/234: 300.000<br>-Mano de Obra: 30.000</td>
  <td>- 20% por ser empleado</td>
  <td>264.000</td>
  <td>Efectivo</td>
  <td><a href="javascript:window.print();">Imprimir</a></td>
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
<?php include "./FuncionarioAdministrativo/menu.php" ?>
<center>
        <font face="Verdana">
            <h1>Pagos y Cobros</h1>
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

</body>
</html>