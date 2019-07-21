<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MotoNorte</title>
    <link rel="icon" sizes="57x57" href="/imges/favicon.png">
    <script>
    
      function validarFormulario(){
   
      var numero_pago = document.getElementById('numero_pago').value;
      var fecha_pago = document.getElementById('fecha_pago').value;
      var codigo_asociado= document.getElementById('codigo_asociado').value;
      var precio = document.getElementById('precio').value;
      var descuentos= document.getElementById('descuentos').value;
      var precio_total = document.getElementById('precio_total').value;
      var tipo_pago = document.getElementById('tipo_pago').value;
     
    
      if(numero_pago == null || numero_pago.length == 0 || /^\s+$/.test(numero_pago)){
        alert('ERROR: El campo número de pago tiene que ser completado para enviar');
        return false;
      }
      if(fecha_pago == null || fecha_pago.length == 0 || /^\s+$/.test(fecha_pago)){
        alert('ERROR: El campo fecha de pago no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(codigo_asociado == null || codigo_asociado.length == 0 || /^\s+$/.test(codigo_asociado)){
        alert('ERROR: El campo codigo asociado no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(precio == null || precio.length == 0 || /^\s+$/.test(precio)){
        alert('ERROR: El campo precio no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(descuentos == null || descuentos.length == 0 || /^\s+$/.test(descuentos)){
        alert('ERROR: El campo descuentos no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(precio_total == null || precio_total.length == 0 || /^\s+$/.test(precio_total)){
        alert('ERROR: El campo precio total  no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }

      if(tipo_pago == null || tipo_pago.length == 0 || /^\s+$/.test(tipo_pago)){
        alert('ERROR: El campo tipo de pago no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      
    
    
      return true;
    
    }
      </script>
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
input[type="submit"] {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
/* boton de Cliente Nuevo */
input[type="submit"] {
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

input[type="text"]{
    width: 100%;
    padding: 10px 3px;
    margin: 8px 30px;
    display: inline-block;
    border: 1px solid #000066;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #fff;
    margin-bottom: 10px
}
textarea{
  width: 100%;
    padding: 10px 3px;
    margin: 8px 30px;
    display: inline-block;
    border: 1px solid #000066;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #fff;
    margin-bottom: 10px
}
</style>
</head>
<img src="/imges/logonuevo.jpg" width="250" height="80">
<font face="Arial Black" size="2" >
<a style= "color:black; position:absolute; left:1160px; top:12px;" href="#">Tecnico Mecanico</a>
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
        <li><a href="/clientes tec.php">CLIENTES</a></li>
        <li><a href="/inventario Tec1.php">INVENTARIO</a></li>
        <li><a href="/Registrar.php">REGISTRAR</a></li>
    </ul>
</font>
<font face="Verdana">
    <h1 style="position: absolute; right: 600px">Pago</h1>
<form action="" onsubmit="return validarFormulario()">
  <table style="position: absolute; right: 500px; top: 250px">
<tr>
  <td>Numero de Pago:</td>
  <td><input type="text" name="numero_pago" id="numero_pago"></td>
  
</tr>
<tr>
  <td>Fecha de Pago:</td>
  <td><input type="text" name="fecha_pago" id="fecha_pago"></td>
      
</tr>
<tr>
      <td>Codigo Reparacion Asociado:</td>
      <td><input type="text" name="codigo_asociado" id="codigo_asociado"></td>
</tr>
<tr>
      <td>Precio:</td>
      <td><input type="text" name="precio" id="precio"></td>
          
</tr>
<tr>
      <td>Descuentos:</td>
      <td><textarea name="descuentos" id="descuentos"></textarea></td>
</tr>
<tr>
      <td>Precio Total:</td>
      <td><textarea name="precio_total" id="precio_total"></textarea></td>
</tr>
<tr>
    <td>Tipo de Pago:</td>
    <td><textarea name="tipo_pago" id="tipo_pago"></textarea></td>
</tr>
<input style="position:absolute; left:1300px; top:750px;" type="submit" value="Enviar">
</form>
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