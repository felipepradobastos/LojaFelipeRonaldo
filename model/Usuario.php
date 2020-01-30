<?php

class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $documento;
    private $telefone;

    /**
     * Usuario constructor.
     * @param $id
     * @param $nome
     * @param $email
     * @param $senha
     * @param $documento
     * @param $telefone
     */
    public function __construct($id = null, $nome = null, $email = null, $senha = null, $documento = null, $telefone = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->documento = $documento;
        $this->telefone = $telefone;
    }


    public function delete($con,$id){

        $query = "DELETE FROM usuario where idusuario = {$id}";


        if($con->query($query)){
            return true;
        }else{
            return false;
        }

    }

    public function getUsuario($con){

        $query = "SELECT * FROM usuario ORDER BY idusuario ASC";

        $obj = $con->query($query);

        return $obj;
        die();

    }
    public function getUser($con,$id){

        $query = "SELECT * FROM usuario where idusuario = {$id};";

        $obj = $con->query($query);

        return $obj;
        die();

    }


    public function add($con, $nome, $email, $senha, $documento, $telefone)
    {

        if(empty($nome) || empty($email) || empty($senha) || empty($documento) || empty($telefone)){
            return false;
        }

        $query = "INSERT INTO usuario (nome,email,senha,documento,telefone) VALUES (";
        $query .= "'{$nome}', ";
        $query .= "- ";
        $query .= "'{$senha}', ";
        $query .= "'{$documento}', ";
        $query .= "'{$telefone}'";
        $query .= ")";
        echo '<pre>';
        print_r($query);
    
        echo '</pre>';
        die();


        if($con->query($query)){
            return true;
        }else{
            return false;
        }
    }
    public function up($con, $nome, $email, $senha, $documento, $telefone,$iduser)
    {

        if(empty($nome) || empty($email) || empty($senha) || empty($documento) || empty($telefone) || empty($iduser)){
            return false;
        }

        $query = "UPDATE usuario SET nome='{$nome}',email='{$email}',senha='{$senha}',documento='{$documento}',telefone ='{$telefone}' WHERE idusuario = {$iduser}";
        
        
        echo '<pre>';
        print_r($query);
    
        echo '</pre>';
        die();
       

        if($con->query($query)){
            return true;
        }else{
            return false;
        }
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


}