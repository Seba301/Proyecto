function validar(){

    var codigo = document.getElementById('codigo').value;
    var nombre_tec = document.getElementById('nombre_tec').value;
    var nombre_cliente = document.getElementById('nombre_cliente').value;
    var valor_repuestos = document.getElementById('valor_repuestos').value;
    var valor_mano = document.getElementById('valor_mano').value;
    var vehiculo_reparado = document.getElementById('vehiculo_reparado').value;

    if(codigo == null || codigo.length == 0 || /^\s+$/.test(codigo)){
        alert('ERROR: Ingresa RUT');
        return false;
    }
      
    if(nombre_tec == null || nombre_tec.length == 0 || /^\s+$/.test(nombre_tec)){
        alert('ERROR: Ingrese nombre');
        return false;
    }
      
    if(nombre_cliente == null || nombre_cliente.length == 0 || /^\s+$/.test(nombre_cliente)){
        alert('ERROR: Ingrese apellido');
        return false;
    }
      
    if(valor_repuestos == null || valor_repuestos.length == 0 || /^\s+$/.test(valor_repuestos)){
        alert('ERROR: ingrese direccion');
        return false;
    }
      
    if(valor_mano == null || valor_mano.length == 0 || /^\s+$/.test(valor_mano)){
        alert('ERROR: Ingrese telefono');
        return false;
    }
      
    if(vehiculo_reparado == null || vehiculo_reparado.length == 0 || /^\s+$/.test(vehiculo_reparado)){
        alert('ERROR: Ingrese celular');
        return false;
    }



    return true;

}


