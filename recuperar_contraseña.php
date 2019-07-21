<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperar Contraseña</title>
    <link rel="icon" sizes="57x57" href="/imges/favicon.png">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 6px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #000066;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #000066;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>
<body style="background-color:#000066;">

    <form font="verdana" style="position:absolute; width:500px; height:410px; left:450px; top:100px; background-color: white" action="/action_page.php">
      <div class="imgcontainer">
        <img src="/imges/LogoNuevoMoto.png" width="300" height="100" >
      </div>
      <div class="container">
        <label for="uname"><b>Ingresa tu email para poder enviar un correo para recuperar tus datos.</b></label>
        <input type="text" placeholder="Ingresa email" name="uname" required>
        <button onclick="window.location.href='/'" type="submit">Enviar </button>
      </div>
      <div class="container" style="background-color:#f1f1f1">
        <button onclick="window.location.href='/'" type="button" class="cancelbtn">Volver Atras</button>
      </div>
    </form>
   
</body>
</html>