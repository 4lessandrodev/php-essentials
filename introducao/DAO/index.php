<?php

    require_once("config.php");
    $user = new User();
    
    $result = $user->findByPk(1);
    echo $result;


?>