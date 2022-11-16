<?php 
include __DIR__.'/../../DB/classes/Usuario.php';

if(isset($_POST['send'])){

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $send = $_POST['send'];

    $usuarioDB = new Usuario(array("correo" => $correo, "pass" => $pass));
    $usuarios = $usuarioDB->list();


    if(count($usuarios)==1){
        $_SESSION['usuario']=$usuarios[0];
        echo "Logeado correctamente";
    }else{ 
        echo "El usuario introducido no existe";
    }
    
}
?>