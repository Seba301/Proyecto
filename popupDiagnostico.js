function encendido(){
    document.getElementById('popup2').style.display = 'block';
}
function apagado(){
    document.getElementById('popup2').style.display =  'none';
}

    
function validarFormulario(){
   
    var horas_hombre = document.getElementById('horas_hombre').value;
    var insumos_utilizados = document.getElementById('insumos_utilizados').value;
    var observacion = document.getElementById('observacion').value;
   
   
  
    if(horas_hombre == null || horas_hombre.length == 0 || /^\s+$/.test(horas_hombre)){
      alert('ERROR: El campo horas hombre tiene que ser completado para enviar');
      return false;
    }
    if(insumos_utilizados== null || insumos_utilizados.length == 0 || /^\s+$/.test(insumos_utilizados)){
      alert('ERROR: El campo insumos utilizados  asociado no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
    if(observacion == null || observacion.length == 0 || /^\s+$/.test(observacion)){
      alert('ERROR: El campo observacion no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
    
    return true;
  
  }