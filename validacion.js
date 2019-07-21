function validarFormulario(){
 
  var codigo = document.getElementById('codigo').value;
  var presupuesto_asociado = document.getElementById('presupuesto_asociado').value;
  var vehiculo_que_repara = document.getElementById('vehiculo_que_repara').value;
  var tec = document.getElementById('tec').value;
  var list_tec= document.getElementById('list_tec').value;
  var resp_cant = document.getElementById('resp_cant').value;
 

  if(codigo == null || codigo.length == 0 || /^\s+$/.test(codigo)){
    alert('ERROR: El campo codigo tiene que ser completado para enviar');
    return false;
  }
  if(presupuesto_asociado == null || presupuesto_asociado.length == 0 || /^\s+$/.test(presupuesto_asociado)){
    alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
    return false;
  }
  if(vehiculo_que_repara == null || vehiculo_que_repara.length == 0 || /^\s+$/.test(vehiculo_que_repara)){
    alert('ERROR: Ingresa la patente del vehiculo');
    return false;
  }
  if(tec == null || tec.length == 0 || /^\s+$/.test(tec)){
    alert('ERROR: Ingresa el tecnico responsable de la reparacion');
    return false;
  }
  if(list_tec == null || list_tec.length == 0 || /^\s+$/.test(list_tec)){
    alert('ERROR: Ingresa la lista de los tecnicos encargados de la reparacion');
    return false;
  }
  if(resp_cant == null || resp_cant.length == 0 || /^\s+$/.test(resp_cant)){
    alert('ERROR: Ingresa los repuestos y sus cantidades.');
    return false;
  }
  


  return true;

}
