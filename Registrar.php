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
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(0, 0, 0);
   color: white;
   text-align: center;
}

.vertical-menu {
  width: 300px;
}

.vertical-menu a {
  background-color: #000066;
  color: white;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
/* boton de Cliente Nuevo */
.button1 {
  background-color: #000066;
  border: none;
  color: white;
  padding: 20px 90px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}
.button2 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
/* boton de cliente antiguo*/
.button3 {
  background-color: #000066;
  border: none;
  color: white;
  padding: 20px 90px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}

</style>
</head>
<img src="/imges/logonuevo.jpg" width="250" height="80">
<font face="Arial Black" size="2" >
<a style= "color:black; position:absolute; left:1100px; top:12px;" href="/Inicio TecM.php">Funcionario Administrativo</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="/">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Captura de Pantalla 2019-05-16 a la(s) 00.01.07.png" width="40"></label>
<body>
  <div class="up">
    <span class="icon icon-up-open">  </span>

  </div>

  <font face="Verdana" size="2" >   
    <ul>
        <li><a class="active" href="/Inicio FA.php">INICIO</a></li>
        <li><a href="/cliente FA.php">CLIENTES</a></li>
        <li><a href="/presupuesto.php">PRESUPUESTO</a></li>
        <li><a href="/pagos.php">PAGOS Y COBROS</a></li>
        <li><a href="/inventario FA.php">INVENTARIO</a></li>
    </ul>
</font>

<font face="Verdana">
<h1>REGISTRO</h1>

<div class="vertical-menu">
    <a href="/cliente_nuevo.php">REGISTRAR CLIENTE</a><br>
    
</div>
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
<a href="/cliente_nuevo.php"><button style="position:absolute; left:700px; top:300px;" class="button button1">Cliente Nuevo</button></a>
<a href="#"><button style="position:absolute; left:700px; top:400px;" class="button1 button2">Cliente Antiguo</button></a>
</body>
</html>