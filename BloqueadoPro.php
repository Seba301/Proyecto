<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
    <link rel="stylesheet" href="/proveedores.css">
    <link rel="icon" sizes="57x57" href="/favicon.png">
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
/* esta es para achicar la tabla */
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
/* Boton de Agregar Proveedor */
.button {
  background-color: #000066;
  border: none;
  color: white;
  padding: 20px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
/* boton de Bloqueados */
.button1 {
  background-color: #000066;
  border: none;
  color: white;
  padding: 20px 40px;
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
/* boton de Solicitar Pedido */
.button3 {
  background-color: #000066;
  border: none;
  color: white;
  padding: 20px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}
.button4 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
/* boton de Inventario */
.button5 {
  background-color: #000066;
  border: none;
  color: white;
  padding: 20px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
}
.button6 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}


</style>
</head>
<img src="/imges/Account.png" width="250" height="80">
<font face="Arial Black" size="2" >
<a style= "color:black; position:absolute; left:1247px; top:12px;" href="#">Idioma</a>
<a style= "color:black; position:absolute; left:1300px; top:12px;" href="/">Cerrar Sesion</a>
</font>
<label style="position:absolute; left:1400px; top:5px;"><img src="/imges/Captura de Pantalla 2019-05-16 a la(s) 00.01.07.png" width="40"></label>
<body>
  <font face="Verdana" size="2" >   
    <ul>
        <li><a class="active" href="/Administrador/InicioAdmin.php">INICIO</a></li>
        <li><a href="/Administrador/ClienteAdmin.php">CLIENTES</a></li>
        <li><a href="/Administrador/ProAdmin.php">PROVEEDORES</a></li>
        <li><a href="/Administrador/TrabAdmin.php">TRABAJADORES</a></li>  
    </ul>
</font>  
      <div class="#customers"></div>
        <font face="Verdana">

          <table style="position:absolute; height:500px; width:1400px; left:20px; top:170px;" id="customers">
            <tr>
              <th>RUT</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>Email</th>
              <th>Nro Cuenta Bancaria</th>
              <th>Estado</th>
            </tr>
            <tr>
              <td>76.005.432-9</td>
              <td>LS Ltda</td>
              <td>--------</td>
              <td>Libertad 1158</td>
              <td>2 445566</td>
              <td>ls@gmail.com</td>
              <td>09576745</td>
              <td><img src="/imges/rechazo.jpg" height="20" ></td>
            </tr>
            <tr>
              <td>13.008.733-7</td>
              <td>LS Ltda</td>
              <td>--------</td>
              <td>Libertad 1158</td>
              <td>2 445566</td>
              <td>ls@gmail.com</td>
              <td>09576745</td>
              <td><img src="/imges/rechazo.jpg" height="20" ></td>
            </tr>
            <tr>
              <td>76.005.432-9</td>
              <td>LS Ltda</td>
              <td>--------</td>
              <td>Libertad 1158</td>
              <td>2 445566</td>
              <td>ls@gmail.com</td>
              <td>09576745</td>
              <td><img src="/imges/rechazo.jpg" height="20" ></td>
            </tr>
            <tr>
              <td>76.005.432-9</td>
              <td>LS Ltda</td>
              <td>--------</td>
              <td>Libertad 1158</td>
              <td>2 445566</td>
              <td>ls@gmail.com</td>
              <td>09576745</td>
              <td><img src="/imges/rechazo.jpg" height="20" ></td>
            </tr>
            <tr>
              <td>76.005.432-9</td>
              <td>LS Ltda</td>
              <td>--------</td>
              <td>Libertad 1158</td>
              <td>2 445566</td>
              <td>ls@gmail.com</td>
              <td>09576745</td>
              <td><img src="/imges/rechazo.jpg" height="20" ></td> 
            </tr>
            <tr>
              <td>76.005.432-9</td>
              <td>LS Ltda</td>
              <td>--------</td>
              <td>Libertad 1158</td>
              <td>2 445566</td>
              <td>ls@gmail.com</td>
              <td>09576745</td>
              <td><img src="/imges/rechazo.jpg" height="20" ></td>
            </tr>
            <tr>
              <td>76.005.432-9</td>
              <td>LS Ltda</td>
              <td>--------</td>
              <td>Libertad 1158</td>
              <td>2 445566</td>
              <td>ls@gmail.com</td>
              <td>09576745</td>
              <td><img src="/imges/rechazo.jpg" height="20" ></td>
            </tr>
          </table>
        </font>
        </div>
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
        <a href="/Administrador/BloqueadoPro.php"><button style="position:absolute; left:1100px; top:750px;" class="button1 button2">Bloqueados</button></a>
        <button style="position:absolute; left:1100px; top:850px;" class="button3 button4">Solicitar Pedido</button>
        <a href="/inventario FA.php"><button style="position:absolute; left:100px; top:850px;" class="button5 button6">Inventario</button></a>
      
</body>
</html>