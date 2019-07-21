<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MotoNorte</title>
    <link rel="icon" sizes="57x57" href="/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

form.example input[type=text] {
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
</style>
</head>
<img src="/imges/LogoNuevoMoto.png" width="250" height="80">
<font face="Arial Black" size="2" >
<a style= "color:black; position:absolute; left:1247px; top:12px;" href="#">Idioma</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="#">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Seccion.png" width="40"></label>
<body>
  <font face="Verdana" size="2" >   
    <ul>
        <li><a class="active" href="/Administrador/InicioAdmin.php">INICIO</a></li>
        <li><a href="/Administrador/ClienteAdmin.php">CLIENTES</a></li>
        <li><a href="/Administrador/ProAdmin.php">PROVEEDORES</a></li>
        <li><a href="/Administrador/TrabAdmin.php">TRABAJADORES</a></li>  
    </ul>

    <h1 style="position:absolute; left:520px; top:490px" >INGRESA RUT DEL TRABAJADOR</h1>

    <form class="example" action="Trabajador.php"  style="position:absolute; left:600px; top:550px" style="margin:auto;max-width:300px" >
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
</body>
</html>