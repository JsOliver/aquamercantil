<?php


class AccessAuth01
{

    private $crud,$select;

    public function Auth01()
    {
        @session_start();
        $this->crud = new CRUD();

        if(isset($_SESSION['Auth01']) and !isset($_SESSION['Auth02'])
            and isset($_SESSION['NAME']) and isset($_SESSION['EMAIL'])
            and isset($_SESSION['PASS']) and isset($_SESSION['ID']))
        {

            $this->select = $this->crud->select('*','usuarios','WHERE email=? && pass=? && verify>?',array($_SESSION['EMAIL'],$_SESSION['PASS'],0));

            if($this->select->rowCount() > 0)
            {
                return true;

            }else
            {
                @session_destroy();

                return false;

            }
             }
    }

}