<?php


class NotaFiscal
{
    private $id;
    private $idproduto;
    private $idusuario;
    private $quantidade;

    /**
     * NotaFiscal constructor.
     * @param $id
     * @param $idproduto
     * @param $idusuario
     * @param $quantidade
     */



    public function __construct($id=null, $idproduto=null, $idusuario=null , $quantidade=null)
    {
        $this->id = $id;
        $this->idproduto = $idproduto;
        $this->idusuario = $idusuario;
        $this->quantidade = $quantidade;
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
    public function getIdproduto()
    {
        return $this->idproduto;
    }

    /**
     * @param mixed $idproduto
     */
    public function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;
    }

    /**
     * @return mixed
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @param mixed $idusuario
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }



}