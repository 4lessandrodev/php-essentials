<?php

    require_once("config.php");
    $user = new User();
    
    // $result = $user->findByPk(1);
    // echo $result;

    // $usuarios = User::findAll();
    // echo json_encode($usuarios);

    //  $usuarios = User::findOne("Al");
    //  echo json_encode($usuarios);

    $user = new User();
    $result = $user->login('alessandro@gmail.com', '123');

    echo $result;

?>