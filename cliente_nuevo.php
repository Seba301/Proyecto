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
   
      var rut = document.getElementById('rut').value;
      var nombre = document.getElementById('nombre').value;
      var apellido = document.getElementById('apellido').value;
      var direccion = document.getElementById('direccion').value;
      var telefono= document.getElementById('telefono').value;
      var celular = document.getElementById('celular').value;
      var email = document.getElementById('email').value;
      var banco = document.getElementById('banco').value;
      var nrocuenta = document.getElementById('nrocuenta').value;
     
    
      if(rut == null || rut.length == 0 || /^\s+$/.test(rut)){
        alert('ERROR: El campo Rut tiene que ser completado para enviar');
        return false;
      }
      if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
        alert('ERROR: El campo nombre  no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)){
        alert('ERROR: El campo apellido no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(direccion == null || repuestos.length == 0 || /^\s+$/.test(direccion)){
        alert('ERROR: El campo dirección no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)){
        alert('ERROR: El campo  telefono no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(celular == null || celular.length == 0 || /^\s+$/.test(celular)){
        alert('ERROR: El campo celular no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(email == null || email.length == 0 || /^\s+$/.test(email)){
        alert('ERROR: El campo email no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(banco == null || banco.length == 0 || /^\s+$/.test(banco)){
        alert('ERROR: El campo banco no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
      if(nrocuenta == null || nrocuenta.length == 0 || /^\s+$/.test(nrocuenta)){
        alert('ERROR: El campo Numero de cuenta no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
      }
     
      
    
    
      return true;
    
    }
      </script>
      <script>
    
        function validarFormulario(){
     
      
        var patente = document.getElementById('patente').value;
        var marca = document.getElementById('marca').value;
        var modelo = document.getElementById('modelo').value;
        var año = document.getElementById('año').value;
       
      
        if(patente == null || patente.length == 0 || /^\s+$/.test(patente)){
          alert('ERROR: El campo patente no debe ir vacío o lleno de solamente espacios en blanco');
          return false;
        }
        if(marca == null || marca.length == 0 || /^\s+$/.test(marca)){
          alert('ERROR: El campo marca no debe ir vacío o lleno de solamente espacios en blanco');
          return false;
        }
        if(modelo == null || modelo.length == 0 || /^\s+$/.test(modelo)){
          alert('ERROR: El campo modelo no debe ir vacío o lleno de solamente espacios en blanco');
          return false;
        }
        if(año == null || año.length == 0 || /^\s+$/.test(año)){
          alert('ERROR: El campo año no debe ir vacío o lleno de solamente espacios en blanco');
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
<a style= "color:black; position:absolute; left:1100px; top:12px;" href="#">Funcionario Administrativo</a>
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
<h1 style="position: absolute; right: 750px">Cliente Nuevo</h1>
<h1 style="position: absolute; right: 350px">Vehiculo</h1>
<form action="" onsubmit="return validarFormulario()">
    <table style="position: absolute; right: 800px; top: 250px">
<tr>
    <td>RUT:</td>
    <td><input type="text" name="rut" id="rut"></td>
    
</tr>
<tr>
    <td>Nombre:</td>
    <td><input type="text" name="nombre" id="nombre"></td>
        
</tr>
<tr>
        <td>Apellido:</td>
        <td><input type="text" name="apellido" id="apellido"></td>
</tr>
<tr>
        <td>Direccion:</td>
        <td><input type="text" name="direccion" id="direccion"></td>
            
</tr>
<tr>
        <td>Telefono:</td>
        <td><input type="text" name="telefono" id="telefono"></td>
</tr>
<tr>
        <td>Celular:</td>
        <td><input type="text" name="celular" id="celular"></td>
</tr>
<tr>
        <td>Email:</td>
        <td><input type="text" name="email" id="email"></td>
            
</tr>
<tr>
        <td>Banco:</td>
        <td><input type="text" name="banco" id="banco"></td>
            
</tr>
<tr>
        <td>Nro Cuenta:</td>
        <td><input type="text" name="nrocuenta" id="nrocuenta"></td>
</tr>
  </form>
</table>
<form action="" onsubmit="return validarFormulario()">
    <table style="position: absolute; right: 300px; top: 250px">
<tr>
    <td>Patente:</td>
    <td><input type="text" name="patente" id="patente"></td>
    
</tr>
<tr>
    <td>Marca:</td>
    <td><input type="text" name="marca" id="marca"></td>
        
</tr>
<tr>
        <td>Modelo:</td>
        <td><input type="text" name="modelo" id="modelo"></td>
</tr>
<tr>
        <td>Año:</td>
        <td><input type="text" name="año" id="año"></td>
</tr></form>  
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

<a href="/cliente_nuevo.php"><button style="position:absolute; left:300px; top:900px;" class="button2 button3">Registrar</button></a>
<a href="/cliente_nuevo.php"><button style="position:absolute; left:100px; top:900px;" class="button2 button3">Volver</button></a>
</body>
</html>