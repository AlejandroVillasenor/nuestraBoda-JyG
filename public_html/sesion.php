<?php
//Index.php
include_once 'includes/user_session.php';
include_once 'includes/user.php';//llevava el includes

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Sesion inciada";
    $user->setUser($userSession->getCurrentUser());
    include_once 'tabla.php';//includ_once es para que solo se incluya una vez
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "Validacion de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $user = new User();
    if($user->userExist($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'tabla.php';
    }else{
        $errorLogin = "Usuario o contraseña incorrectos";
        include_once 'login.php';
    }
}else{
    //echo "Login"
    include_once 'login.php';
}

?>