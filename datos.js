var addRow = function (){

    var nombre = document.getElementById("Nombre").value;
    var apellido = document.getElementById("Apellido").value;
    var rut = document.getElementById("RUT").value;
    var direccion = document.getElementById("Direccion").value;
    var telefono = document.getElementById("Telefono").value;
    var nro = document.getElementById("Nro").value;

    var table = document.getElementsByTagName("table")[0];

    var newRows = table.insertRow(1);

    var cel1 = newRows.insertCell(0);
    var cel2 = newRows.insertCell(1);
    var cel3 = newRows.insertCell(2);
    var cel4 = newRows.insertCell(3);
    var cel5 = newRows.insertCell(4);
    var cel6 = newRows.insertCell(5);



    cel1.innerHTML = nombre;
    cel2.innerHTML = apellido;
    cel3.innerHTML = rut;
    cel4.innerHTML = direccion;
    cel5.innerHTML = telefono;
    cel6.innerHTML = nro

    console.log(nombre+" "+apellido+" "+rut+" "+direccion+" "+telefono+" "+nro);
}