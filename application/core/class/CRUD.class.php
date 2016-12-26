<?php




//Inicio da classe crud que chamou a classe Condb
class CRUD extends Condb{


    // Variavel de Configuração da query Solicitada.

    private $query;

    //Configuração da função SQL (prepare) e (execute)

    private function prepExec($prep,$exec)
    {
        $this->query=$this->getConn()->prepare($prep);
        $this->query->execute($exec);
    }

    // Função Inserir mysql.
    public function insert($table,$prep,$exec)
    {
        $this->prepExec('INSERT INTO '.$table.' SET '.$prep.' ',$exec);
        return  $this->getConn()->lastInsertId() ;

    }

    // Função Selecionar mysql.
    public function select($fields,$table,$prep,$exec)
    {
        $this->prepExec(' SELECT '.$fields.' FROM '.$table.' '.$prep.'',$exec);
        return $this->query;

    }

    public function update($table,$prep,$exec)
    {
        $this->prepExec(' UPDATE '.$table.' SET '.$prep.'',$exec);
        return $this->query;
    }

    // Função Deletar mysql
    public function delete($table,$prep,$exec)
    {
        $this->prepExec(' DELETE FROM '.$table. ' '.$prep.'',$exec);
        return $this->query;
    }


}

?>