<?php

$json = '[
    {
      "nome": "Alessandro",
      "idade": 27
    },
    {
      "nome": "Aline",
      "idade": 21
    }
  ]';

  $data = json_decode($json, true);
  print_r($data);

?>