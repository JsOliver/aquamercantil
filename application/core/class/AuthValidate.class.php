<?php
class AuthValidate
{
    public function setValidateEmail($email)
    {

        if(strlen($email) < 1)

            return 'Informe o Email';
        else
            if(!preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i',$email))
                return 'Email Invalido';

        return $email;

    }

    public function setValidatePass($pass)
    {

        if(strlen($pass) < 1)

            return 'Informe a Senha';

        else
            if(!preg_match('/^[0-9a-z]{8,25}$/i',$pass))
                return 'Senha Invalida';
            else


                return $pass;

    }

    public function setEncryption($param)
    {
        $cripto = hash('whirlpool',md5(sha1($param)));

        return $cripto;

    }
}