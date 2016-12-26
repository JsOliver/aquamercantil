<?php

class Condb
{

    private $cnx;

    private function setConn()
{
    return

    is_null($this->cnx)?
        $this->cnx = new PDO('mysql:host=localhost;dbname=leilao_app','root',''):
        $this->cnx;

}
    public function getConn()
    {return $this->setConn();}




}

?>
