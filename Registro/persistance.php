<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

    require_once '../model/Usuario.php';
    require_once '../database/MySQLiConnection.php';


    $con = new MySQLiConnection();

    $usuario = new Usuario();

    if(!empty($_REQUEST["nome"]) || !empty($_REQUEST["email"]) || !empty($_REQUEST['password']) || !empty($_REQUEST['documento']) || !empty($_REQUEST['telefone'])){
        $usuario->setNome($_REQUEST["nome"]);
        $usuario->setEmail($_REQUEST["email"]);
        $usuario->setSenha($_REQUEST['password']);
        $usuario->setDocumento($_REQUEST['documento']);
        $usuario->setTelefone($_REQUEST['telefone']);
        $usuario->setId($_REQUEST['idusuario']);
    }


    
    switch ($_REQUEST['action']){
        case 1:
            if($usuario->add($con, $usuario->getNome(), $usuario->getEmail(),$usuario->getSenha(),$usuario->getDocumento(),$usuario->getTelefone())){
                $sucesso =true;

            }else{
                $sucesso =false;
            }
            break;
        case 2:
            if($usuario->up($con, $usuario->getNome(), $usuario->getEmail(),$usuario->getSenha(),$usuario->getDocumento(),$usuario->getTelefone(),$usuario->getId())){
                $sucesso =true;

            }else{
                $sucesso =false;
            }

            break;
        case 3:
            if(!empty($_REQUEST['id'])){
                if($usuario->delete($con,$_REQUEST['id'])){
                    $sucesso =true;
                }else{
                    $sucesso =false;
                }
            }
            break;
    }

    if($sucesso==true){
        $data = array(
            "sucesso" => true
        );
    }else{
        $data = array(
            "sucesso" => false
        );
    }

    $con->close();
    echo json_encode($data);
