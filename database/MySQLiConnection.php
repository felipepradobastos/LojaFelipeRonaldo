<?php


define ("DB_SERVIDOR", "localhost");
define ("DB_USUARIO", "root");
define ("DB_SENHA", "123456");
define ("DB_NOME", "loja");


class MySQLiConnection extends mysqli
{
    public function __construct()
    {
        try
        {
            parent::__construct (DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_NOME);
            if (mysqli_connect_errno() != 0)
                throw new Exception (mysqli_connect_errno() . " - " . mysqli_connect_error());
        }
        catch (Exception $db_error)
        {
            $mensagem = $db_error->getMessage();
            $arquivo = $db_error->getFile();
            $data = date ("Y-m-d H:i:s");
            $ip_visitante = $_SERVER['REMOTE_ADDR'];

        }
    }


}
//Forma de usar:
//$My = new MySQLiConnection();// conecta-se automaticamente ao servidor MySQL
//$sql = $My->query ("Sel ect * From tabela");// a função query() é nativa da classe mysqli
//
//while ($f = $sql->fetch_object())
//{
//    echo $f->nome . "<br />";
//}
//
//$sql->close();// libera a memória usada na consulta
?>
