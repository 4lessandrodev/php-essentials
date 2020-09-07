<?php

    require_once("config.php");

    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM users");

    //echo json_encode($usuarios);

    $user = new User();

    $user->setName("alessandro");
    $user->setEmail("alessandro@mail.com");
    $user->setPassword("skdf3212sdf");

    var_dump($user);

?>