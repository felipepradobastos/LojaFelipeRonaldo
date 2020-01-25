<?php

    require_once "model/Usuario.php";

    echo "<pre>";
        print_r($_REQUEST);
    echo "</pre>";




    echo json_encode([
        "sucesso" => true
    ]);