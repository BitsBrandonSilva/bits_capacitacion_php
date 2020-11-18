<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        //echo $username = $_POST["username"] . "<br>";
        //echo $password = $_POST["password"] . "<br>";

        if($username = $_POST["username"] == "admin" && $password = $_POST["password"] == "4dm1n2020") {
            session_start();
            if(!isset($_SESSION["login"])){
                $_SESSION["login"] = 1;
                include("6_8a-login.php");
            }else {
                $_SESSION["login"]++;
                include("6_8a-login.php");
            };
        } else {
            echo "Nombre de usuario o contraseña incorrectos <br>";
            echo "<a href = 'formularioLogin.php'> Volver al formulario</a>";
        };

    ?>
</body>
</html>
