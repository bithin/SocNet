<?php

if($db->isLoggedIn()){
    unset($_SESSION['user']);
    header("Location: index.php");
}else{
    header("Location: index.php");
}

?>
