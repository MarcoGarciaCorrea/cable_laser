<?php
// Inicializ la sesion
session_start();
 
// Compruebe si el usuario ya ha iniciado sesión; en caso afirmativo se va a la pagina admin
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: admin.php");
  exit;
}
 
// Indica que el archivo config es requerido
require_once "config.php";
 
// Varaibles para inicio de sesión
$username = $password = "";
$username_err = $password_err = "";
 
// Procesamiento de datos del formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verifica que el usuario no este vacio
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Verifica que la contraseña no este vacio
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Valida credenciales
    if(empty($username_err) && empty($password_err)){
        // sql para validar informacion en la BD
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // es usada para enlazar variables para los marcadores de parámetros en la sentencia SQL
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parametros
            $param_username = $username;
            
            // Se ejecuta la declaracion preparada
            if(mysqli_stmt_execute($stmt)){
                // Guarda el resultado
                mysqli_stmt_store_result($stmt);
                
                // Verifica si existe el nombre de usuario, si es así, verifique la contraseña
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Vincula la variable de resultados
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Si el password es correcto se incia sesion
                            session_start();
                            
                            // se crea las variables para inciio de sesion
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            //y se redirige a la pagina de admin
                            header("location: admin.php");
                        } else{
                        
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else{
                    
                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else{
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }
        
        
        mysqli_stmt_close($stmt);
    }
    
    // Cierre de conexion
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cable Laser</h2>
        <p>Por favor, complete sus credenciales para iniciar sesión.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Usuario</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Ingresar">
            </div>
            <p>¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>.</p>
        </form>
    </div>    
</body>
</html>