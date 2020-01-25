<?php


class Produto
{

    private $id;
    private $nome;
    private $tipo;
    private $quantidade;

    /**
     * Produto constructor.
     * @param $id
     * @param $nome
     * @param $tipo
     * @param $quantidade
     */
    public function __construct($id=null, $nome=null, $tipo=null, $quantidade=null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->tipo = $tipo;
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
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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