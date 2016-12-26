<?php

class Funcoes extends Model {

    function Funcoes()
    {
        // Chamar o construtor do Model
        parent::Model();
    }


    function logVer(){
        @session_start();

        if(isset($_SESSION['Auth01']) and isset($_SESSION['NAME']) and isset($_SESSION['EMAIL'])
            and isset($_SESSION['PASS']) and isset($_SESSION['ID'])):
            $this->db->from('users');
            $this->db->where('email',$_SESSION['EMAIL']);
            $this->db->where('pass', $_SESSION['PASS']);
            $query = $this->db->get();
            $rowcount = $query->num_rows();
            if($rowcount == 1):

                return true;
            else:
                return false;

            endif;
        else:

            return false;

        endif;


    }
}

?>