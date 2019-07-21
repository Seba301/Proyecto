function ValidarFormulario_2(){

    var rut = document.getElementById('rut').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var direccion = document.getElementById('direccion').value;
    var telefono = document.getElementById('telefono').value;
    var celular = document.getElementById('celular').value;
    var email = document.getElementById('email').value;
    var banco = document.getElementById('banco').value;
    var nrocuenta = document.getElementById('nrocuenta').value;
    var patente = document.getElementById('patente').value;
    var marca = document.getElementById('marca').value;
    var modelo = document.getElementById('modelo').value;
    var año = document.getElementById('año').value;
    
    if(rut == null || rut.length == 0 || /^\s+$/.test(rut)){
      alert('ERROR: Ingresa RUT');
      return false;
    }
    if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
      alert('ERROR: Ingrese nombre');
      return false;
    }
    if(apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)){
      alert('ERROR: Ingrese apellido');
      return false;
    }
    if(direccion == null || direccion.length == 0 || /^\s+$/.test(direccion)){
      alert('ERROR: ingrese direccion');
      return false;
    }
    if(telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)){
      alert('ERROR: Ingrese telefono');
      return false;
    }
    if(celular == null || celular.length == 0 || /^\s+$/.test(celular)){
      alert('ERROR: Ingrese celular');
      return false;
    }
    if(email == null || email.length == 0 || /^\s+$/.test(email)){
        alert('ERROR: Ingrese email');
        return false;
      }
    if(banco == null || banco.length == 0 || /^\s+$/.test(banco)){
        alert('ERROR: Ingrese banco');
        return false;
      }
    if(nrocuenta == null || nrocuenta.length == 0 || /^\s+$/.test(nrocuenta)){
        alert('ERROR: Ingrese numero de cuenta');
        return false;
      }
    if(patente == null || patente.length == 0 || /^\s+$/.test(patente)){
        alert('ERROR: Ingrese patente del vehiculo');
        return false;
      }
    if(marca == null || marca.length == 0 || /^\s+$/.test(marca)){
        alert('ERROR: Ingrese marca del vehiculo');
        return false;
      }
    if(modelo == null || modelo.length == 0 || /^\s+$/.test(modelo)){
        alert('ERROR: Ingrese modelo del vehiculo');
        return false;
      }
    if(año == null || año.length == 0 || /^\s+$/.test(año)){
        alert('ERROR: Ingrese año del vehiculo');
        return false;
      }

    return true; 
}