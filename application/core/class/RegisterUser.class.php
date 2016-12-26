<?php

class RegisterUser
{

    private $crud,$setcripto,$validate,$email,$pass,$select,$insert,$result;


    public function setCad($firstname,$lastname,$username,$email,$password,$passwordagain,$cpf,$cep,$bairro,$rua,$casan,$complemento,$sexo)
    {

        @session_start();


        $this->validate = new AuthValidate();

        $this->crud = new CRUD();

        $this->email = $this->validate->setValidateEmail($email);
        $this->pass = $this->validate->setValidatePass($password);
        $this->setcripto = $this->validate->setEncryption($password);


        if(empty($firstname))
        {
               return 'Informe o nome';
        }
        else{

            if(empty($lastname))
            {
                return 'Informe o sobrenome';
            }else
            {
               if(empty($email))
               {
                   return 'Informe o email';

               }else

               {

                 if(empty($password))
                 {
                  return 'Informe a senha';

                 }else{

                 }
                 if (empty($passwordagain))
               {
                   return 'Repita a senha';

               }else{

                 }if($password <> $passwordagain)
               {
                   return 'Senhas não coincidem';

               }else
                  {

                    if($email <> $this->email)
                    {
                      return 'Email inválido';

                    }else
                    {
                       if($password <> $this->pass)
                    {
                        return 'Senha inválida';

                    }
                       else
                       {
                           if(empty($cpf) or strlen($cpf) <> 11 and !is_integer($cpf))
                           {
                               return 'CPF inválido';

                           }else{
                               if(empty($cep))
                               {
                                   return 'Informe o CEP';

                               }else{
                                   if(strlen($_POST['firstname']) > 25 or strlen($_POST['firstname']) > 25)
                                   {
                                       return 'Nome ou sobrenome exedeu o numero de caracteres';
                                   }else
                                   {
                           $this->select = $this->crud->select('*','usuarios','WHERE email=?',array($email));

                         if($this->select->rowCount() > 0)
                         {
                             return 'Email já cadastrado';

                         }else
                         {

                                 if(!is_numeric($casan))
                                 {
                                     echo 'Numero da casa inválido';
                                 }else
                                 {


                             date_default_timezone_set('America/Sao_Paulo');                                                                                                                //0,$this->validate->setEncryption(46868820)
                             $date = date('d/m/Y');


                             $this->insert = $this->crud->insert('usuarios','firstname=?,lastname=?,email=?,pass=?,CPF=?,username=?,photo=?,cep=?,endereco=?,sexo=?',array(utf8_decode($firstname),utf8_decode($lastname),$this->email,$this->setcripto,$cpf,$username,'resources/images/user.png',$cep,$rua.'-'.$bairro.'-'.$casan.'-'.$complemento,$sexo));

                                     echo '
                                     <script>
                                     $.post("../../views/admin/ajax/email.php",{email:"'.$this->email.'",name:"'.utf8_decode($firstname).'",link:"http://localhost/lancedecentavos/home?verify='.$this->insert.'",type:"0"},function(res) {
                                     
                                     });
                                     </script>
                                     ';

                             /*
                             @$this->crud->insert('notify_push','title=?,image=?,text=?,user=?',array('Seja bem vindo ao NarradorCast','resources/images/user.png',utf8_decode('Olá, seja muito bem vindo ao NarradorCast um agragador de podcasts 100% nacional. Aqui você poderá encontrar seus podcasts favoritos alem de poder adicionar seus proprios podcasts.'),$this->insert));
                             @$this->crud->insert('log','id_user=?,data=?',array($this->insert,date('d-m-Y')));
                             @$this->crud->insert('interact_report','id_user=?,title=?,text=?,image=?,link=?,data=?',array($this->insert,'Cadastro feito por '.$email,utf8_decode('Cadastro realizado com sucesso por '.$email),'resources/images/user.png','#',date('H:i d-m-Y')));
                             @$playlist = $this->crud->insert('playlist_channel','id_playlist=?,id_adm=?,data=?,name=?,actived=?',array($this->insert,$this->insert,date('d-m-Y'),'Playlist de '.$firstname.'.',1));

                             @$this->crud->insert('followplay','id_user=?,id_playlist=?',array($this->insert,$playlist));
*/


                             $_SESSION['Auth01'] = 'logado';
                             $_SESSION['NAME'] = $firstname;
                             $_SESSION['EMAIL'] = $email;
                             $_SESSION['PASS'] = $this->setcripto;
                             $_SESSION['ID'] = $this->insert;

                             return 11;

                            }}}}}}}}}}}}






}
