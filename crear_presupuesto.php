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
   
      var codigo = document.getElementById('codigo').value;
      var nombre_tecnico = document.getElementById('nombre_tecnico').value;
      var nombre_cliente = document.getElementById('nombre_cliente').value;
      var repuestos = document.getElementById('repuestos').value;
      var valor_mano_obra= document.getElementById('valor_mano_obra').value;
      var vehiculo_reparado = document.getElementById('vehiculo_reparado').value;
      var observaciones = document.getElementById('observaciones').value;
     
    
      if(codigo == null || codigo.length == 0 || /^\s+$/.test(codigo)){
        alert('ERROR: El campo codigo tiene que ser completado para enviar');
        return false;
      }
      if(nombre_tecnico == null || nombre_tecnico.length == 0 || /^\s+$/.test(nombre_tecnico)){
        alert('ERROR: El campo nombre del tecnico no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(nombre_cliente == null || nombre_cliente.length == 0 || /^\s+$/.test(nombre_cliente)){
        alert('ERROR: El campo nombre del cliente  no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(repuestos == null || repuestos.length == 0 || /^\s+$/.test(repuestos)){
        alert('ERROR: El campo repuestos no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(valor_mano_obra == null || valor_mano_obra.length == 0 || /^\s+$/.test(valor_mano_obra)){
        alert('ERROR: El campo valor de mano de obra  no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(vehiculo_reparado == null || vehiculo_reparado.length == 0 || /^\s+$/.test(vehiculo_reparado)){
        alert('ERROR: El campo vehiculo reparado no debe ir vacío o lleno de solamente espacios en blanco');
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
    <h1 style="position: absolute; right: 500px">Presupuesto</h1>


<form action="" onsubmit="return validarFormulario()">
  <table style="position: absolute; right: 500px; top: 250px">
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
<input style="position:absolute; left:500px; top:900px;" type="submit" value="Aceptar">
</form>

</table>
</font>
<
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

<a href="/crear_pago_cobro.php"><button style="position:absolute; left:1100px; top:900px;" class="button button1">Siguiente</button></a>
<button style="position:absolute; left:800px; top:900px;" class="button button1">Rechaza</button></a>


</body>
</html>