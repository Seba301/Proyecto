var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["fullName"] = document.getElementById("fullName").value;
    formData["empCode"] = document.getElementById("empCode").value;
    formData["salary"] = document.getElementById("salary").value;
    formData["city"] = document.getElementById("city").value;
    formData["email"] = document.getElementById("email").value;
    formData["telefono"] = document.getElementById("telefono").value;
    formData["celular"] = document.getElementById("celular").value;
    formData["lista"] = document.getElementById("lista").value;
    formData["numerodecuenta"] = document.getElementById("numerodecuenta").value;
    formData["marca"] = document.getElementById("marca").value;
    formData["modelo"] = document.getElementById("modelo").value;
    formData["año"] = document.getElementById("año").value;
    formData["patente"] = document.getElementById("patente").value;
    formData["observacion"] = document.getElementById("observacion").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.fullName;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.empCode;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.salary;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.city;
    cell4 = newRow.insertCell(4);
    cell4.innerHTML = data.email;
    cell4 = newRow.insertCell(5);
    cell4.innerHTML = data.telefono;
    cell4 = newRow.insertCell(6);
    cell4.innerHTML = data.celular;
    cell4 = newRow.insertCell(7);
    cell4.innerHTML = data.lista;
    cell4 = newRow.insertCell(8);
    cell4.innerHTML = data.numerodecuenta;
    cell4 = newRow.insertCell(9);
    cell4.innerHTML = data.marca;
    cell4 = newRow.insertCell(10);
    cell4.innerHTML = data.modelo;
    cell4 = newRow.insertCell(11);
    cell4.innerHTML = data.año;
    cell4 = newRow.insertCell(12);
    cell4.innerHTML = data.patente;
    cell4 = newRow.insertCell(13);
    cell4.innerHTML = data.observacion;
    cell4 = newRow.insertCell(14);
    cell4.innerHTML = `<a onClick="onEdit(this)"> Editar </a>
                       <a onClick="onDelete(this)"> Eliminar </a>`;
}

function resetForm() {
    document.getElementById("fullName").value = "";
    document.getElementById("empCode").value = "";
    document.getElementById("salary").value = "";
    document.getElementById("city").value = "";
    document.getElementById("email").value = "";
    document.getElementById("telefono").value = "";
    document.getElementById("celular").value = "";
    document.getElementById("lista").value = "";
    document.getElementById("numerodecuenta").value = "";
    document.getElementById("marca").value = "";
    document.getElementById("modelo").value = "";
    document.getElementById("año").value = "";
    document.getElementById("patente").value = "";
    document.getElementById("observacion").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("fullName").value = selectedRow.cells[0].innerHTML;
    document.getElementById("empCode").value = selectedRow.cells[1].innerHTML;
    document.getElementById("salary").value = selectedRow.cells[2].innerHTML;
    document.getElementById("city").value = selectedRow.cells[3].innerHTML;
    document.getElementById("email").value = selectedRow.cells[4].innerHTML;
    document.getElementById("telefono").value = selectedRow.cells[5].innerHTML;
    document.getElementById("celular").value = selectedRow.cells[6].innerHTML;
    document.getElementById("lista").value = selectedRow.cells[7].innerHTML;
    document.getElementById("numerodecuenta").value = selectedRow.cells[8].innerHTML;
    document.getElementById("marca").value = selectedRow.cells[9].innerHTML;
    document.getElementById("modelo").value = selectedRow.cells[10].innerHTML;
    document.getElementById("año").value = selectedRow.cells[11].innerHTML;
    document.getElementById("patente").value = selectedRow.cells[12].innerHTML;
    document.getElementById("observacion").value = selectedRow.cells[13].innerHTML;
    
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.fullName;
    selectedRow.cells[1].innerHTML = formData.empCode;
    selectedRow.cells[2].innerHTML = formData.salary;
    selectedRow.cells[3].innerHTML = formData.city;
    selectedRow.cells[4].innerHTML = formData.email;
    selectedRow.cells[5].innerHTML = formData.telefono;
    selectedRow.cells[6].innerHTML = formData.celular;
    selectedRow.cells[7].innerHTML = formData.lista;
    selectedRow.cells[8].innerHTML = formData.numerodecuenta;
    selectedRow.cells[9].innerHTML = formData.marca;
    selectedRow.cells[10].innerHTML = formData.modelo;
    selectedRow.cells[11].innerHTML = formData.año;
    selectedRow.cells[12].innerHTML = formData.patente;
    selectedRow.cells[13].innerHTML = formData.observacion;
}

function onDelete(td) {
    if (confirm('¿Esta seguro que desea eliminar este registro?')) {
        row = td.parentElement.parentElement;
        document.getElementById("employeeList").deleteRow(row.rowIndex);
        resetForm();
    }
}

function validate() {
    isValid = true;
    if (document.getElementById("fullName").value == "") {
        isValid = false;
        document.getElementById("fullNameValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("fullNameValidationError").classList.contains("hide"))
            document.getElementById("fullNameValidationError").classList.add("hide");
    }
    return isValid;
}