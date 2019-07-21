function encendido(){
    document.getElementById('popup4').style.display = 'block';
}
function apagado(){
    document.getElementById('popup4').style.display =  'none';
}
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