function encendido(){
    document.getElementById('popup5').style.display = 'block';
}
function apagado(){
    document.getElementById('popup5').style.display =  'none';

}
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