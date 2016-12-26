<?php
class login

{

    private $crud,$validate,$email,$pass,$cripto,$select,$log,$result;

    public function setLogin($email,$pass)

    {
           @session_start();


        $this->crud= new CRUD();
        $this->validate = new AuthValidate();
        $this->email = $this->validate->setValidateEmail($email);
        $this->pass = $this->validate->setValidatePass($pass);
        $this->cripto = $this->validate->setEncryption($pass);



        if(empty($email))

            return 'Informe o Email';

        if($email <> $this->email)

            return $this->email;

        if(empty($pass))

            return 'Informe a senha';

        if($pass <> $this->pass)

            return $this->pass;


                 $this->select = $this->crud->select('*','usuarios','WHERE email=? && pass=?',array($email,$this->cripto));


                if($this->select->rowCount() > 0)
                {

     $this->log = $this->select->fetch(PDO::FETCH_ASSOC);




                    $name = $this->log['firstname'];
                    $email = $this->log['email'];
                    $pass = $this->log['pass'];
                    $id = $this->log['id'];
                    $verify = $this->log['verify'];

                    if($verify == 0)
                    {

                        return 'Verifique sua conta acessando seu <br>email e clicando no link de ativação.';
                    }else
                    {

                        $points = $this->crud->select('*','payments_products','WHERE id_leilao=? && id_user=? && transation_status=?',array(0,$id,1));
                        if($points->rowCount() > 0):
                            while ($ddl = $points->fetch(PDO::FETCH_ASSOC))
                            {
                                $idPk = substr($ddl['reference_code'],2,1);
                                $selectPrize = $this->crud->select('*','pacotes_lances','WHERE id=?',array($idPk));
                                 $prize = $selectPrize->fetch(PDO::FETCH_ASSOC)['prize'];
                                 $prize = $selectPrize->fetch(PDO::FETCH_ASSOC)['prize'];
                                $selS = $this->crud->select('*','credito_lance','WHERE id_user=?',array($id));
                                $ecredit = $selS->fetch(PDO::FETCH_ASSOC);
                                $credit = $ecredit['lances'];
                                $this->crud->update('credito_lance','lances=?',array($credit + $prize ));
                                $this->crud->update('payments_products','transation_status=? WHERE reference_code=?',array(2,'pk'.$idPk));
                            }
                            endif;

                                  $_SESSION['Auth01'] = 'logado';
                                  $_SESSION['NAME'] = $name;
                                  $_SESSION['EMAIL'] = $email;
                                  $_SESSION['PASS'] = $pass;
                                  $_SESSION['ID'] = $id;

                    return 11;}
                }else
                {
                    return 'Email ou senha incorretos';
                }



    }


}