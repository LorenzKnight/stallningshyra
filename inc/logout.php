<?php
    $_SESSION['MM_Username']="";
    $_SESSION['MM_UserGroup']="";
    $_SESSION['bkng_UserId']="";
    $_SESSION['bkng_Mail']="";
    $_SESSION['bkng_Nivel']="";

    unset($_SESSION['MM_Username']);
    unset($_SESSION['MM_UserGroup']);
    unset($_SESSION['bkng_UserId']);
    unset($_SESSION['bkng_Mail']);
    unset($_SESSION['bkng_Nivel']);
    session_start();
    session_destroy();

    header("Location: ../index.php");
    exit;
?>