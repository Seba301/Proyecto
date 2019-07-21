<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MotoNorte</title>
    <link rel="icon" sizes="57x57" href="/imges/favicon.png">
    <style>
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
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000066;
  color: white;
}
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(0, 0, 0);
   color: white;
   text-align: center;
}
.slider {
	width: 80%;
	margin: auto;
	overflow: hidden;
}
.slider ul {
	display: flex;
	padding: 0;
	width: 400%;	
	animation: cambio 15s infinite alternate linear;
}
.slider li {
	width: 100%;
	list-style: none;
}
.slider img {
	width: 100%;
}
@keyframes cambio {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}
</style>
</head>
<img src="/imges/logonuevo.jpg" width="250" height="80">
<font face="Arial Black" size="2" >
<a style= "color:black; position:absolute; left:1160px; top:12px;" href="/Inicio TecM.php">Tecnico Mecanico</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="/">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Captura de Pantalla 2019-05-16 a la(s) 00.01.07.png" width="40"></label>
<body>
  <div class="up">
    <span class="icon icon-up-open">  </span>

  </div>

  <font face="Verdana" size="2" >   
    <ul>
        <li><a class="active" href="/Inicio TecM.php">INICIO</a></li>
        <li><a href="/inventario Tec1.php">INVENTARIO</a></li>
        <li><a href="/cliente_tec.php">CLIENTES</a></li>
        <li><a href="/presupuesto.php">PRESUPUESTOS</a></li>
    </ul>
</font> 

<div class="slider" style="position:absolute; height:500px; width:1350px; left:43px; top:170px;" >
  <ul>
    <li>
<img src="/imges/baner.jpg" alt="">
</li>
    <li>
<img src="/imges/baner.jpg" alt="">
</li>
    <li>
<img src="/imges/baner.jpg" alt="">
</li>
    <li>
<img src="/imges/baner.jpg" alt="">
</li>
  </ul>
</div>

<font face="Verdana" Size="2" >  
    <h2 style="position:absolute; width:1350px; left:43px; top:700px;" >Ultimas Transferencias Bancarias</h2> 
    <table style="position:absolute; width:650px; height:250px; left:43px; top:750px;" id="customers">  
      <tr>
        <th>Nombre</th>
        <th>Banco</th>
        <th>Monto</th>
      </tr>
      <tr>
        <td>Peter Rock</td>
        <td>Banco Chile</td>
        <td>$100.000</td>
      </tr>
      <tr>
        <td>Juan Perez</td>
        <td>BCI</td>
        <td>$150.000</td>
      </tr>
      <tr>
        <td>Joe Arroyo</td>
        <td>Santander</td>
        <td>$300.000</td>
      </tr>
      <tr>
        <td>Mario Pozo</td>
        <td>Scotibank</td>
        <td>$250.000</td>
    </tr>
    </table>
    <h2 style="position:absolute; left:745px; top:700px;" >Ultimas Reparaciones</h2>
    <table style="position:absolute; width:650px; height:250px; left:745px; top:750px;" id="customers">  
            <tr>
              <th>Nombre Cliente</th>
              <th>Marca</th>
              <th>Modelo/Año</th>
            </tr>
            <tr>
              <td>Peter Rock</td>
              <td>Honda</td>
              <td>Civic/2019</td>
            </tr>
            <tr>
              <td>Juan Perez</td>
              <td>Ford</td>
              <td>Raptor/2018</td>
            </tr>
            <tr>
              <td>Joe Arroyo</td>
              <td>Mercedes Benz</td>
              <td>Stelar/2014</td>
            </tr>
            <tr>
              <td>Mario Pozo</td>
              <td>GMC</td>
              <td>Terrain/2013</td>
          </tr>
          </table>
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
</body>
</html>