<?php

session_start();
if ($_SESSION['logado'] == true){
    session_unset();
    session_destroy();
    header('Location: ../25-login');
}else {
    header('Location: ../25-login');
}
?>