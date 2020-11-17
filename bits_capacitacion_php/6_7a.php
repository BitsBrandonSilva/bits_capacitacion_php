<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario</title>
</head>
<body>
    
<form name = "formulario1" method = "post" action = "6_7b.php">
  <label for="firstname">Nombre:</label>
  <input type="text" id="firstname" name="firstname"><br><br>

  <label for="lastname">Apellido:</label>
  <input type="text" id="lastname" name="lastname"><br><br>

  <label for="country">Pais:</label>
  <select name="country">
    <option value="Noruega">Noruega</option>
    <option value="Colombia">Colombia</option>
    <option value="Francia">Francia</option>
    <option value="Mexico">Mexico</option>
  </select>
  <br><br>

  <label for="username">Nombre de usuario:</label>
  <input type="text" id="username" name="username"><br><br>

  <label for="password">Contraseña:</label>
  <input type="password" id="password" name="password"><br><br>

  <input type="submit" value="Submit">
</form>

</body>
</html>