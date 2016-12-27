<?php

class Pages extends CI_Controller {
    function __construct(){

        parent::__construct();
        $this->load->helper('url');

    }


    public function index()
    {
        $this->load->library('funcoes');
        $log = $this->funcoes->logVer();


        $this->load->helper('form');
        $this->load->helper('html');
        $dados['reportData'] = '';
        $dados['errorLog'] = '';
        $dados['formerror'] = '';
    $this->load->view('home',$dados);


    }

    public function leilao(){
        $this->load->library('funcoes');
        $log = $this->funcoes->logVer();

        if($log == false):
            redirect('home', 'refresh');

        else:
            $this->load->view('leilao');

        endif;
    }
    public function home()
    {
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library(array('form_validation','email'));
        $this->form_validation->set_rules('nome','Nome', 'trim|required');
        $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mensagem','Mensagem', 'trim|required');

        if($this->form_validation->run() == FALSE):
        $dados['formerror'] = validation_errors();
        else:
		
		 //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
		            $config['mailtype'] = 'html';

            $dadosForm = $this->input->post();
           // Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $dadosForm['nome']); // Remetente
            $this->email->to('rafaelbelo@aquamercantil.com.br','Formulario de contato','joaovictordada27@gmail.com','Formulario de contato'); // Destinatário

            $this->email->subject('<b>'.$dadosForm['nome'].'</b> entrou em contato pelo formulario.');
            $this->email->message('De:'.$dadosForm['email'].'
			
			'.$dadosForm['mensagem']);
            
            if($this->email->send()):
			
			// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $dadosForm['nome']); // Remetente
            $this->email->to('cristovao.amarante@aquamercantil.com.br','Formulario de contato'); // Destinatário

            $this->email->subject(''.$dadosForm['nome'].' entrou em contato pelo formulario.');
 $this->email->message('De: '.$dadosForm['email'].'
			
			
			'.$dadosForm['mensagem']);			          



			if($this->email->send()):
// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $dadosForm['nome']); // Remetente
            $this->email->to('luizvilaca@aquamercantil.com.br','Formulario de contato'); // Destinatário

            $this->email->subject(''.$dadosForm['nome'].' entrou em contato pelo formulario.');
 $this->email->message('De: '.$dadosForm['email'].'
			
			
			'.$dadosForm['mensagem']);			          



			if($this->email->send()):
// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $dadosForm['nome']); // Remetente
            $this->email->to('ricardo@aquamercantil.com.br','Formulario de contato'); // Destinatário

            $this->email->subject(''.$dadosForm['nome'].' entrou em contato pelo formulario.');
 $this->email->message('De: '.$dadosForm['email'].'
			
			
			'.$dadosForm['mensagem']);			          



			if($this->email->send()):
						                $dados['formerror'] = 'Mensagem enviada com sucesso.';

						
else:

                $dados['formerror'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
						
else:

                $dados['formerror'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
						
else:

                $dados['formerror'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
            else:
                $dados['formerror'] = 'Erro ao enviar mensagem, tente mais tarde.';
                endif;

        endif;
        $dados['reportData'] = '';
        $dados['errorLog'] = '';

            $this->load->view('home',$dados);

    }


    public function register()
    {
        $dados['name'] = $_POST['name'];
        $dados['pass'] = $_POST['pass'];
        $dados['email'] = $_POST['email'];
        $dados['cnpj'] = $_POST['cnpj'];
        $dados['tipo'] = $_POST['type'];

        $dados['razao_social'] = $_POST['1'];
        $dados['nome_fantasia'] = $_POST['2'];
        $dados['nome_responsavel'] = $_POST['3'];
        $dados['cargo_responsavel'] = $_POST['4'];
        $dados['inscricao_estadual'] = $_POST['5'];
        $dados['endereco'] = $_POST['6'];
        $dados['cidade'] = $_POST['7'];
        $dados['estado'] = $_POST['8'];
        $dados['cep'] = $_POST['9'];
        $dados['telefone'] = $_POST['10'];
        $dados['celular'] = $_POST['11'];
        $dados['fax'] = $_POST['12'];
        $dados['categoria'] = $_POST['13'];
        $dados['televendas'] = $_POST['14'];
        $dados['empresa_fornecedor_1'] = $_POST['15'];
        $dados['ramo_fornecedor_1'] = $_POST['16'];
        $dados['telefone_fornecedor_1'] = $_POST['17'];
        $dados['contato_fonecedor_1'] = $_POST['18'];
        $dados['empresa_fornecedor_2'] = $_POST['19'];
        $dados['ramo_fornecedor_2'] = $_POST['20'];
        $dados['telefone_fornecedor_2'] = $_POST['21'];
        $dados['contato_fonecedor_2'] = $_POST['22'];
        $dados['empresa_fornecedor_3'] = $_POST['23'];
        $dados['ramo_fornecedor_3'] = $_POST['24'];
        $dados['telefone_fornecedor_3'] = $_POST['25'];
        $dados['contato_fonecedor_3'] = $_POST['26'];
        $dados['empresa_clientes_1'] = $_POST['27'];
        $dados['ramo_clientes_1'] = $_POST['28'];
        $dados['telefone_clientes_1'] = $_POST['29'];
        $dados['contato_clientes_1'] = $_POST['30'];
        $dados['empresa_clientes_2'] = $_POST['31'];
        $dados['ramo_clientes_2'] = $_POST['32'];
        $dados['telefone_clientes_2'] = $_POST['33'];
        $dados['contato_clientes_2'] = $_POST['34'];
        $dados['empresa_clientes_3'] = $_POST['35'];
        $dados['ramo_clientes_3'] = $_POST['36'];
        $dados['telefone_clientes_3'] = $_POST['37'];
        $dados['contato_clientes_3'] = $_POST['38'];
        $dados['nome_banco_1'] = $_POST['39'];
        $dados['agencia_banco_1'] = $_POST['40'];
        $dados['cc_banco_1'] = $_POST['41'];
        $dados['nome_banco_2'] = $_POST['42'];
        $dados['agencia_banco_2'] = $_POST['43'];
        $dados['cc_banco_2'] = $_POST['44'];
        $dados['empresario_dbe'] = $_POST['45'];
        $dados['cpf_dbe'] = $_POST['46'];
        $dados['rg_dbe'] = $_POST['47'];
        $dados['estadocivil_dbe'] = $_POST['48'];
        $dados['endereco_cbe'] = $_POST['49'];
        $dados['cidade_dbe'] = $_POST['50'];
        $dados['estado_dbe'] = $_POST['51'];
        $dados['cep_dbe'] = $_POST['52'];
        $dados['telefone_dbe'] = $_POST['53'];
        $dados['celular_dbe'] = $_POST['54'];
        $dados['data_constituicao'] = $_POST['55'];
        $dados['bairro'] = $_POST['56'];
        $dados['numero'] = $_POST['57'];
        $dados['complemento'] = $_POST['58'];
        $dados['n_funcionarios'] = $_POST['59'];
        $dados['site'] = $_POST['60'];
        $dados['faturamento_m_mensal'] = $_POST['61'];
        $dados['registro_agricultor'] = $_POST['62'];
        $dados['contatocbn1'] = $_POST['63'];
        $dados['telefonecbn1'] = $_POST['64'];
        $dados['contatocbn2'] = $_POST['65'];
        $dados['telefonecbn2'] = $_POST['66'];
        $dados['nomesocietario1'] = $_POST['67'];
        $dados['cpfsocietario1'] = $_POST['68'];
        $dados['por_societario1'] = $_POST['69'];
        $dados['nomesocietario2'] = $_POST['70'];
        $dados['cpfsocietario2'] = $_POST['71'];
        $dados['por_societario2'] = $_POST['72'];


        $imagecript = md5(rand(1,20045));
        mkdir("assets/files/docs/users/".$imagecript, 0777);
     

	  
	  	if(!empty($_FILES['73']['name'])):
			
		$extension = pathinfo($_FILES['73']['name'], PATHINFO_EXTENSION);
            $extension = strtolower($extension);
                $arquivo_tmp = $_FILES['73']['tmp_name'];
                @$destino = 'assets/files/docs/users/'.$imagecript.'/1.'.$extension.'';
                @$dados['doc_anexo'] = 'assets/files/docs/users/'.$imagecript.'/1.'.$extension.'';
				move_uploaded_file($arquivo_tmp, $destino);
				endif;
				

            if($_POST['type'] == 1):
			
			
			if(!empty($_FILES['74']['name'])):
			
			$extension2 = pathinfo($_FILES['74']['name'], PATHINFO_EXTENSION);
            $extension2 = strtolower($extension2);
                $arquivo_tmp2 = $_FILES['74']['tmp_name'];
                @$destino2 = 'assets/files/docs/users/'.$imagecript.'/2.'.$extension2.'';
                @$dados['doc_anexo2'] = 'assets/files/docs/users/'.$imagecript.'/2.'.$extension2.'';
				move_uploaded_file($arquivo_tmp2, $destino2);
				endif;
				
				
	if(!empty($_FILES['75']['name'])):
			$extension3 = pathinfo($_FILES['75']['name'], PATHINFO_EXTENSION);
            $extension3 = strtolower($extension3);
                $arquivo_tmp3 = $_FILES['75']['tmp_name'];
                @$destino3 = 'assets/files/docs/users/'.$imagecript.'/3.'.$extension3.'';
                @$dados['doc_anexo3'] = 'assets/files/docs/users/'.$imagecript.'/3.'.$extension3.'';
				move_uploaded_file($arquivo_tmp3, $destino3);
				endif;

			
	if(!empty($_FILES['76']['name'])):
        $imagecript4 = md5(rand(1,20045));	
			$extension4 = pathinfo($_FILES['76']['name'], PATHINFO_EXTENSION);
            $extension4 = strtolower($extension4);
                $arquivo_tmp4 = $_FILES['76']['tmp_name'];
                @$destino4 = 'assets/files/docs/users/'.$imagecript.'/4.'.$extension4.'';
                @$dados['doc_anexo4'] = 'assets/files/docs/users/'.$imagecript.'/4.'.$extension4.'';
				move_uploaded_file($arquivo_tmp4, $destino4);
				endif;

                endif;

         
		 
		 
		 
		 if($_POST['type'] == 2):
			
			
			if(!empty($_FILES['74']['name'])):
			
			$extension2 = pathinfo($_FILES['74']['name'], PATHINFO_EXTENSION);
            $extension2 = strtolower($extension2);
                $arquivo_tmp2 = $_FILES['74']['tmp_name'];
                @$destino2 = 'assets/files/docs/users/'.$imagecript.'/2.'.$extension2.'';
                @$dados['doc_anexo2'] = 'assets/files/docs/users/'.$imagecript.'/2.'.$extension2.'';
				move_uploaded_file($arquivo_tmp2, $destino2);
				endif;
				
	

                endif;

				
				 if($_POST['type'] == 3):
			
			
			if(!empty($_FILES['74']['name'])):
			
			$extension2 = pathinfo($_FILES['74']['name'], PATHINFO_EXTENSION);
            $extension2 = strtolower($extension2);
                $arquivo_tmp2 = $_FILES['74']['tmp_name'];
                @$destino2 = 'assets/files/docs/users/'.$imagecript.'/2.'.$extension2.'';
                @$dados['doc_anexo2'] = 'assets/files/docs/users/'.$imagecript.'/2.'.$extension2.'';
				move_uploaded_file($arquivo_tmp2, $destino2);
				endif;
				
				if(!empty($_FILES['75']['name'])):
			$extension3 = pathinfo($_FILES['75']['name'], PATHINFO_EXTENSION);
            $extension3 = strtolower($extension3);
                $arquivo_tmp3 = $_FILES['75']['tmp_name'];
                @$destino3 = 'assets/files/docs/users/'.$imagecript.'/3.'.$extension3.'';
                @$dados['doc_anexo3'] = 'assets/files/docs/users/'.$imagecript.'/3.'.$extension3.'';
				move_uploaded_file($arquivo_tmp3, $destino3);
				endif;
				
	

                endif;
				
				


        $data['reportData'] = 'SEU CADASTRO FOI ENVIADO COM SUCESSO AGUARDE O CONTATO DA EQUIPE DE CONTAS DA AQUA MERCANTIL.';




        $this->db->from('users');
        $this->db->where('email', $dados['email']);
        $query = $this->db->get();
        $rowcount = $query->num_rows();

        $this->db->from('pre_approval');
        $this->db->where('email', $dados['email']);
        $querypnd = $this->db->get();
        $rowcountpnd = $querypnd->num_rows();

if($rowcount == 1 or $rowcountpnd == 1):
    $data['reportData'] = 'Email já cadastrado.';
    $data['errorLog'] = '';
    else:

        $this->db->insert('pre_approval', $dados);

        if($this->db->insert_id() > 0):

            if($_POST['type'] == 2 and !empty($_POST['corretor'])):
                $corretor = $_POST['corretor'];
                $this->db->from('funcionarios');
                $this->db->where('code', $corretor);
                $querypndsd = $this->db->get();
                $rowcountpndcs = $querypndsd->num_rows();
                if($rowcountpndcs > 0):
                    $resia = $querypndsd->result_array();
                    $dado['nome_indicado'] = $_POST['name'];
                    $dado['cnpj_indicado'] = $_POST['cnpj'];
                    $dado['nome_indicador'] = $resia[0]['nome'];
                    $dado['cpf_indicador'] = $resia[0]['cpf'];

                $this->db->insert('indicado',$dado);
                endif;
				
				
					
					
		 //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
		            $config['mailtype'] = 'html';

           // Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $_POST['name']); // Remetente
            $this->email->to('rafaelbelo@aquamercantil.com.br','Solicitação de cadastro'); // Destinatário

           $this->email->subject(''.$_POST['name'].'solicitou o cadastro.');
 $this->email->message('De: '.$_POST['email'].'
			
			
			Fez uma solicitação de cadastro no Aqua Mercantil, confira os dados no painel do administrador');
            
            if($this->email->send()):
			
			// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $_POST['name']); // Remetente
            $this->email->to('cristovao.amarante@aquamercantil.com.br','Solicitação de cadastro'); // Destinatário

          $this->email->subject(''.$_POST['name'].'solicitou o cadastro.');
 $this->email->message('De: '.$_POST['email'].'
			
			
			Fez uma solicitação de cadastro no Aqua Mercantil, confira os dados no painel do administrador');		          



			if($this->email->send()):
// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $_POST['name']); // Remetente
            $this->email->to('luizvilaca@aquamercantil.com.br','Solicitação de cadastro'); // Destinatário

           $this->email->subject(''.$_POST['name'].'solicitou o cadastro.');
 $this->email->message('De: '.$_POST['email'].'
			
			
			Fez uma solicitação de cadastro no Aqua Mercantil, confira os dados no painel do administrador');		          



			if($this->email->send()):
// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', $_POST['name']); // Remetente
            $this->email->to('ricardo@aquamercantil.com.br','Solicitação de cadastro'); // Destinatário

            $this->email->subject(''.$_POST['name'].'solicitou o cadastro.');
 $this->email->message('De: '.$_POST['email'].'
			
			
			Fez uma solicitação de cadastro no Aqua Mercantil, confira os dados no painel do administrador');			          



			if($this->email->send()):
						                $data['errorLog'] = 'Mensagem enviada com sucesso.';

						
else:

                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
						
else:

                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
						
else:

                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
            else:
                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';
                endif;

     
				
				

            endif;
			
			
			
		
			
			
			
			
            $data['errorLog'] = '';

        else:
                $data['reportData'] = 'Erro ao enviar o formulario, tente mais tarde.';
                $data['errorLog'] = '';

        endif;
        endif;





        $this->load->view('home',$data);


    }

    public function login(){
        $this->load->helper('form');
        $this->load->helper('html');



        $this->load->library('funcoes');
        $log = $this->funcoes->logVer();

        if($log == true):

            redirect('home', 'refresh');

        endif;
        $dadosForm = $this->input->post();

        $this->db->from('users');
        $this->db->where('email', @$dadosForm['emaillog']);
        $this->db->where('pass', hash('whirlpool',md5(sha1(@$dadosForm['passwordlog']))));
        $query = $this->db->get();

$rowcount = $query->num_rows();

        $data = $query->result_array();

       if($rowcount == 1){
           $_SESSION['Auth01'] = 'logado';
           $_SESSION['NAME'] = $data[0]['name'];
           $_SESSION['EMAIL'] = $data[0]['email'];
           $_SESSION['PASS'] = $data[0]['pass'];
           $_SESSION['ID'] = $data[0]['id'];
           $_SESSION['TYPE'] = $data[0]['tipo'];
           echo 11;

       }else
       {
           echo 'Email ou senha incorretos.';






       }


    }

    public function logout()
    {
        session_destroy();
        redirect('home', 'refresh');


    }

    public function insert()
    {
        $this->load->view('ajax/insert');


    }

    public function ajax()
    {

        if(isset($_POST['type']) and $_POST['type'] == '2125'):
		
		
		
		
            $dataAtualsa = date('YmdHis');
            $this->db->from('arremates');
            $this->db->where('id_leilao', $_POST['leilao']);
            $query = $this->db->get();

            $rowcount = $query->num_rows();



            if($rowcount > 0):

                echo 'O leilão já foi arrematado, tente mais tarde';

                else:


 if($_SESSION['TYPE'] == 2 or $_SESSION['TYPE'] == 5454):
                    $this->db->from('leiloes');
                    $this->db->where('id', $_POST['leilao']);
                    $querya = $this->db->get();
                    $datea = $querya->result_array();


     $valorepla = str_replace(".","" , $_POST['valor']);
					
					

								$result =  $valorepla * $datea[0]['peso_lote'] / 100;

			$przz = explode('.',$result);
			
			if(!empty($przz[1])){
				
				$precofinal = $przz[0].'.'.$przz[1].'0';
				
			}else{
				$precofinal = $przz[0].'.00';

			}
     echo 11;
			
                    if($_SESSION['TYPE'] == 2 or $_SESSION['TYPE'] == 5454):
                    $this->db->from('leiloes');
                    $this->db->where('id', $_POST['leilao']);
                    $querya = $this->db->get();
                    $datea = $querya->result_array();


					
					//Inicio configuração do pagseguro.
					
                    $data['token'] ='AFC2E379186148B1A2E79B602D53DFA9';
                    $data['email'] = 'contatoimporta24h@gmail.com';
                   
					//Fim configuração do pagseguro.



				   $data['currency'] = 'BRL';
                    $data['itemId1'] = $_POST['leilao'];
                    $data['itemQuantity1'] = '1';
                    $data['itemDescription1'] = ''.$datea[0]['titulo'].'';
                    $data['itemAmount1'] = "".$precofinal."";
                    $data['reference'] = "li".$_POST['leilao']."";

                    $url = 'https://ws.pagseguro.uol.com.br/v2/checkout';

                    $data = http_build_query($data);

                    $curl = curl_init($url);

                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
                    $xml= curl_exec($curl);

                    curl_close($curl);

                    $xml= simplexml_load_string($xml);

                $dados['id_user'] = $_POST['user'];
                $dados['id_leilao'] = $_POST['leilao'];
                $dados['valor'] = $precofinal;
                $dados['status_payment'] = '1';
                $dados['status_ticket'] = '1';
                $dados['pre_approve'] = $xml -> code;
                $dados['url_payment'] = 'https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml -> code.'';
                $dados['transation_code'] = '';
                $dados['reference_code'] = "li".$_POST['leilao']."";
                    $this->db->insert('arremates', $dados);

                    $last = $this->db->insert_id();
					

					

                    $daten['id_user'] = $_POST['user'];
                    $daten['titulo'] = '<b>'.$datea[0]['titulo'].'</b> arrematado.';
                    $daten['imagem'] = 'https://pagamento-me.s3.amazonaws.com/wp-content/uploads/2015/09/pagseguro.png';
                    $daten['texto'] = 'Você arrematou <b>'.$datea[0]['titulo'].'</b> e estamos aguardando o pagamento, em breve entraremos em contato, clique aqui para realizar o pagamento.';
                    $daten['url'] = 'https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml -> code.'';
                    $this->db->insert('notify', $daten);
                    $lastn = $this->db->insert_id();

                    $datenv['id_user'] = $_POST['user'];
                    $datenv['id_notify'] = $lastn;
                    $this->db->insert('notify_read', $datenv);

                    $dataup['status'] = '2555';
                    $dataup['valor_arrematado'] = $precofinal;
                    $this->db->where('id', $_POST['leilao']);
                    $this->db->update('leiloes', $dataup);

			
		 //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
		            $config['mailtype'] = 'html';

           // Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', 'Item arrematado'); // Remetente
            $this->email->to('rafaelbelo@aquamercantil.com.br','Aviso de  arremate'); // Destinatário

           $this->email->subject('Um novo item foi arrematado no Aqua Mercantil.');
 $this->email->message('Um novo lote foi arrematado no Aqua Mercantil, verifique as informações no painel do administrador');
            
            if($this->email->send()):
			
			// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', 'Item arrematado'); // Remetente
            $this->email->to('cristovao.amarante@aquamercantil.com.br','Aviso de  arremate'); // Destinatário

           $this->email->subject('Um novo item foi arrematado no Aqua Mercantil.');
 $this->email->message('Um novo lote foi arrematado no Aqua Mercantil, verifique as informações no painel do administrador');
	          



			if($this->email->send()):
// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br', 'Item arrematado'); // Remetente
            $this->email->to('luizvilaca@aquamercantil.com.br','Aviso de  arremate'); // Destinatário

           $this->email->subject('Um novo item foi arrematado no Aqua Mercantil.');
 $this->email->message('Um novo lote foi arrematado no Aqua Mercantil, verifique as informações no painel do administrador');
	          



			if($this->email->send()):
// Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br','Item arrematado'); // Remetente
            $this->email->to('ricardo@aquamercantil.com.br','Aviso de  arremate'); // Destinatário

           $this->email->subject('Um novo item foi arrematado no Aqua Mercantil.');
 $this->email->message('Um novo lote foi arrematado no Aqua Mercantil, verifique as informações no painel do administrador');
			          



			if($this->email->send()):
						                $data['errorLog'] = 'Mensagem enviada com sucesso.';

						
else:

                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
						
else:

                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
						
else:

                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';

endif;
            else:
                $data['errorLog'] = 'Erro ao enviar mensagem, tente mais tarde.';
                endif;

     


                    else:
echo 'Você não tem permissão para dar lances.';
                    endif;



                endif;



        endif;
        endif;
		
		

    }

    public function cron(){
        date_default_timezone_set('America/Sao_Paulo');

        if(isset($_GET['Ctype']) and $_GET['Ctype'] == '1515443'):
        $query = $this->db->select('lances_antecipados.*, leiloes.*')
            ->from('lances_antecipados')
            ->join('leiloes', 'lances_antecipados.id_leilao = leiloes.id', 'inner')
            ->where('leiloes.status', 1)->get();

        $rowcount = $query->num_rows();
        $data = $query->result();

        if($rowcount > 0):

$dates = date('YmdHis');

            foreach($data as $datase){

                    $ind = $datase->data_inicio;
                    $anoat = substr($ind, 0, 4);
                    $mesat = substr($ind, 4, 2);
                    $diaat = substr($ind, 6, 2);
                    $horaat = substr($ind, 8, 2);
                    $minutoat = substr($ind, 10, 2);
                    $segundoat = substr($ind, 12, 2);
                    $secc = 59;
                    $minc = 60;
                    $horac = 3600;
                    $diac = 86400;
                    $mesc = 2419200;
                    $anoc = 29030400;

                    $segundoats = date('s');
                    $anoats = date('Y');
                    $mesats = date('m');
                    $diaats = date('d') ;
                    $horaats = date('H');
                    $minutoats = date('i');






					if($horaat >= '10' and $horaat <= '23'):
					
					$htta = $horaat;
					
					else:
					$htta = substr($horaat,1,1);
					
					endif;
					
					if(date('H') >= '10' and date('H') <= '23'):
					
					$datehsrt = date('H');
					
					else:
					$datehsrt = substr(date('H'),1,1);
					
					endif;


                    $data_hora_inicial = mktime($htta, $minutoat, $segundoat, $mesat, $diaat, $anoat); // 04/12/2015 10:20:00
                    $data_hora_final = mktime($datehsrt, date('i'), date('s'), date('m'), date('d'), date('Y')); // 04/12/2015 14:45:00


                    $segundos_diferenca =  $data_hora_final -  $data_hora_inicial;
					
					                $centavos =   $datase->valor_max * 100;

                    $valor = $centavos - $segundos_diferenca;
					
					                        $real = $valor;



                $valorepla = str_replace(".","" , $datase->valor);



                $result =  $valorepla * $datase->peso_lote / 100;

                $przz = explode('.',$result);

                if(!empty($przz[1])){

                    $precofinal = $przz[0].'.'.$przz[1].'0';

                }else{
                    $precofinal = $przz[0].'.00';

                }



		


                if (str_replace(".","",$datase->valor) > $real):



                    $this->db->from('arremates');
                    $this->db->where('id_leilao', $datase->id_leilao);
                    $query = $this->db->get();

                    $rowcount = $query->num_rows();

                    if($rowcount > 0):

                        echo 'O leilão já foi arrematado. Error: 50';

                    else:

                        $this->db->from('leiloes');
                        $this->db->where('id', $datase->id_leilao);
                        $querya = $this->db->get();
                        $datea = $querya->result_array();


                        $data['token'] ='AFC2E379186148B1A2E79B602D53DFA9';
                        $data['email'] = 'contatoimporta24h@gmail.com';
                        $data['currency'] = 'BRL';
                        $data['itemId1'] = $datase->id_leilao;
                        $data['itemQuantity1'] = '1';
                        $data['itemDescription1'] = ''.$datea[0]['titulo'].'';
                        $data['itemAmount1'] = "".$precofinal."";
                        $data['reference'] = "li".$datase->id_leilao."";

                        $url = 'https://ws.pagseguro.uol.com.br/v2/checkout';

                        $data = http_build_query($data);

                        $curl = curl_init($url);

                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
                        $xml= curl_exec($curl);

                        curl_close($curl);

                        $xml= simplexml_load_string($xml);

                        $dados['id_user'] = $datase->id_usuario;
                        $dados['id_leilao'] = $datase->id_leilao;
                        $dados['valor'] =$datase->valor;
                        $dados['status_payment'] = '1';
                        $dados['status_ticket'] = '1';
                        $dados['pre_approve'] = $xml -> code;
                        $dados['url_payment'] = 'https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml -> code.'';
                        $dados['transation_code'] = '';
                        $dados['reference_code'] = "li".$datase->id_leilao."";
                        $this->db->insert('arremates', $dados);

                        $last = $this->db->insert_id();

                        $daten['id_user'] = $datase->id_usuario;
                        $daten['titulo'] = '<b>'.$datea[0]['titulo'].'</b> arrematado.';
                        $daten['imagem'] = 'https://pagamento-me.s3.amazonaws.com/wp-content/uploads/2015/09/pagseguro.png';
                        $daten['texto'] = 'Você arrematou <b>'.$datea[0]['titulo'].'</b> e estamos aguardando o pagamento, em breve entraremos em contato, clique aqui para realizar o pagamento.';
                        $daten['url'] = 'https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml -> code.'';
                        $this->db->insert('notify', $daten);
                        $lastn = $this->db->insert_id();

                        $datenv['id_user'] = $datase->id_usuario;
                        $datenv['id_notify'] = $lastn;
                        $this->db->insert('notify_read', $datenv);
                        $dataup['valor_arrematado'] = $precofinal;

                        $dataup['status'] = '2555';
                        $this->db->where('id', $datase->id_leilao);
                        $this->db->update('leiloes', $dataup);


                        $this->db->where('id_leilao', $datase->id_leilao);
                        $this->db->delete('lances_antecipados');
                        echo 'Cron atualizado';

                    endif;

                else:

                endif;



            }

else:

    echo 'Cron não encontrou nada a ser atualizado';

        endif;


        endif;
        if(isset($_GET['Ctype']) and $_GET['Ctype'] == '4548754'):

            $emailPs = 'contatoimporta24h@gmail.com';
            $token = 'AFC2E379186148B1A2E79B602D53DFA9';
            $query = $this->db->select('*')
                ->from('arremates')
                ->where('status_payment', 1)
                ->or_where('status_payment', 2)->get();

             $rowcount = $query->num_rows();
            $dateas = $query->result_array();

            foreach ($dateas as $dateasa) {
                if ($rowcount > 0):

                    $this->db->from('users');
                    $this->db->where('id', 1);
                    $querya = $this->db->get();
                    $datea = $querya->result_array();

                    $email = $datea[0]['email'];
                    $user = $datea[0]['id'];
                    $reference = $dateasa['reference_code'];
                    $prize = $dateasa['valor'];
                    $transacId = $dateasa['id_leilao'];
                    $status_payment = $dateasa['status_payment'];
                    $pre_approve = $dateasa['pre_approve'];
                    $transaction_codeas = $dateasa['transation_code'];


                    $transationId = $transacId;
                    $id_leilao = $transacId;
                    $id_user = $user;
                    $valor = $prize;
                    $tstatus = $status_payment;
                    $reference_code = $reference;
                    $transaction = $transacId;

                    $url = 'https://ws.pagseguro.uol.com.br/v2/transactions?email=' . $emailPs . '&appId=leilao24h&appKey=2800A27789894F4664152FA2B9241C0C&token=' . $token . '&reference=' . $reference_code . '';


                    $curl = curl_init($url);

                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    $transactionCurl = curl_exec($curl);
                    curl_close($curl);

                    $transaction = simplexml_load_string($transactionCurl);
                     $trnStatus = $transaction->transactions->transaction->status;
                     $trnCode = $transaction->transactions->transaction->code;
                     $trnReference = $transaction->transactions->transaction->reference;
                    if($trnStatus == 1 or $trnStatus == 2  and $trnReference == $reference):
                if(empty($transaction_codeas)):
                        $ddpup['transation_code'] = $trnCode;
                        $ddpup['status_ticket'] = '1';
                        $this->db->where('reference_code', $trnReference);
                        $this->db->update('arremates', $ddpup);
                    endif;

endif;

                    if($trnStatus == 3 and $trnReference == $reference):

                    $dataass['id_leilao'] = $transacId;
                    $dataass['code'] = $trnCode;
                    $dataass['pre_approve'] = $pre_approve;
                    $dataass['reference'] = $trnReference;
                    $dataass['amount'] = $valor;
                    $this->db->insert('transactions_approval', $dataass);


                    if($this->db->insert_id() > 0):

                        $ddpup['status_payment'] = '3';
                        $ddpup['status_ticket'] = '2';
                        $this->db->where('reference_code', $trnReference);
                        $this->db->update('status_payment', $ddpup);
                    endif;

                    endif;
                else:



                endif;

            }

        endif;

    }


    public function adminIndex(){

        $date['inicio'] = 1;
        $date['clients'] = 0;
        $date['leiloes'] = 0;
        $date['pagamentos'] = 0;
        $date['templates'] = 0;
        $this->load->view('admin/page',$date);

    }
    public function adminClients(){
        $date['inicio'] = 0;
        $date['clients'] = 1;
        $date['leiloes'] = 0;
        $date['pagamentos'] = 0;
        $date['templates'] = 0;
        $this->load->view('admin/page',$date);

    }
    public function adminLeiloes(){
        $date['inicio'] = 0;
        $date['clients'] = 0;
        $date['leiloes'] = 1;
        $date['pagamentos'] = 0;
        $date['templates'] = 0;
        $this->load->view('admin/page',$date);

    }
    public function adminPagamentos(){

        $date['inicio'] = 0;
        $date['clients'] = 0;
        $date['leiloes'] = 0;
        $date['pagamentos'] = 1;
        $date['templates'] = 0;
        $this->load->view('admin/page',$date);

    }
    public function adminTemplates(){

        $date['inicio'] = 0;
        $date['clients'] = 0;
        $date['leiloes'] = 0;
        $date['pagamentos'] = 0;
        $date['templates'] = 1;
        $this->load->view('admin/page',$date);

    }

    public function como(){

        $this->load->view('como-funciona');

    }
    public function quem(){

        $this->load->view('quem-somos');

    }
    public function contrato(){

        $this->load->view('contrato');

    }

    public function novofun(){

        $dados['nome'] = $_POST['nome'];
        $dados['cpf'] = $_POST['cpf'];
        $this->db->insert('funcionarios',$dados);
        echo $this->db->insert_id();
    }
	
	
	
	public function aprroved(){
		
		 if(isset($_POST['type']) and $_POST['type'] == '148648468'):
                            $this->db->where('id', $_POST['id']);
                            $this->db->from('pre_approval');
                            $query = $this->db->get();
                           $result = $query->result_array();
                            $resultcas = $query->num_rows();

                            $dado['tipo'] = $result[0]['tipo'];
                            $dado['name'] = $result[0]['name'];
                            $dado['email'] = $result[0]['email'];
                            $dado['cnpj'] = $result[0]['cnpj'];
                            $dado['pass'] = hash('whirlpool',md5(sha1($result[0]['pass'])));
                            $dado['razao_social'] = $result[0]['razao_social'];
                            $dado['nome_fantasia'] = $result[0]['nome_fantasia'];
                            $dado['nome_responsavel'] = $result[0]['nome_responsavel'];
                            $dado['cargo_responsavel'] = $result[0]['cargo_responsavel'];
                            $dado['inscricao_estadual'] = $result[0]['inscricao_estadual'];
                            $dado['endereco'] = $result[0]['endereco'];
                            $dado['cidade'] = $result[0]['cidade'];
                            $dado['estado'] = $result[0]['estado'];
                            $dado['cep'] = $result[0]['cep'];
                            $dado['telefone'] = $result[0]['telefone'];
                            $dado['celular'] = $result[0]['celular'];
                            $dado['fax'] = $result[0]['fax'];
                            $dado['categoria'] = $result[0]['categoria'];
                            $dado['televendas'] = $result[0]['televendas'];
                            $dado['empresa_fornecedor_1'] = $result[0]['empresa_fornecedor_1'];
                            $dado['ramo_fornecedor_1'] = $result[0]['ramo_fornecedor_1'];
                            $dado['telefone_fornecedor_1'] = $result[0]['telefone_fornecedor_1'];
                            $dado['contato_fonecedor_1'] = $result[0]['contato_fonecedor_1'];
                            $dado['empresa_fornecedor_2'] = $result[0]['empresa_fornecedor_2'];
                            $dado['ramo_fornecedor_2'] = $result[0]['ramo_fornecedor_2'];
                            $dado['telefone_fornecedor_1'] = $result[0]['telefone_fornecedor_1'];
                            $dado['contato_fonecedor_1'] = $result[0]['contato_fonecedor_1'];
                            $dado['empresa_fornecedor_2'] = $result[0]['empresa_fornecedor_2'];
                            $dado['ramo_fornecedor_2'] = $result[0]['ramo_fornecedor_2'];
                            $dado['telefone_fornecedor_2'] = $result[0]['telefone_fornecedor_2'];
                            $dado['contato_fonecedor_2'] = $result[0]['contato_fonecedor_2'];
                            $dado['empresa_fornecedor_3'] = $result[0]['empresa_fornecedor_3'];
                            $dado['ramo_fornecedor_3'] = $result[0]['ramo_fornecedor_3'];
                            $dado['telefone_fornecedor_3'] = $result[0]['telefone_fornecedor_3'];
                            $dado['contato_fonecedor_3'] = $result[0]['contato_fonecedor_3'];
                            $dado['empresa_clientes_1'] = $result[0]['empresa_clientes_1'];
                            $dado['ramo_clientes_1'] = $result[0]['ramo_clientes_1'];
                            $dado['telefone_clientes_1'] = $result[0]['telefone_clientes_1'];
                            $dado['contato_clientes_1'] = $result[0]['contato_clientes_1'];
                            $dado['empresa_clientes_2'] = $result[0]['empresa_clientes_2'];
                            $dado['ramo_clientes_2'] = $result[0]['ramo_clientes_2'];
                            $dado['telefone_clientes_2'] = $result[0]['telefone_clientes_2'];
                            $dado['contato_clientes_2'] = $result[0]['contato_clientes_2'];
                            $dado['empresa_clientes_3'] = $result[0]['empresa_clientes_3'];
                            $dado['ramo_clientes_3'] = $result[0]['ramo_clientes_3'];
                            $dado['telefone_clientes_3'] = $result[0]['telefone_clientes_3'];
                            $dado['contato_clientes_3'] = $result[0]['contato_clientes_3'];
                            $dado['nome_banco_1'] = $result[0]['nome_banco_1'];
                            $dado['agencia_banco_1'] = $result[0]['agencia_banco_1'];
                            $dado['cc_banco_1'] = $result[0]['cc_banco_1'];
                            $dado['nome_banco_2'] = $result[0]['nome_banco_2'];
                            $dado['agencia_banco_2'] = $result[0]['agencia_banco_2'];
                            $dado['cc_banco_2'] = $result[0]['cc_banco_2'];
                            $dado['empresario_dbe'] = $result[0]['empresario_dbe'];
                            $dado['cpf_dbe'] = $result[0]['cpf_dbe'];
                            $dado['rg_dbe'] = $result[0]['rg_dbe'];
                            $dado['estadocivil_dbe'] = $result[0]['estadocivil_dbe'];
                            $dado['endereco_cbe'] = $result[0]['endereco_cbe'];
                            $dado['cidade_dbe'] = $result[0]['cidade_dbe'];
                            $dado['estado_dbe'] = $result[0]['estado_dbe'];
                            $dado['cep_dbe'] = $result[0]['cep_dbe'];
                            $dado['telefone_dbe'] = $result[0]['telefone_dbe'];
                            $dado['celular_dbe'] = $result[0]['celular_dbe'];
       $dado['data_constituicao'] = $result[0]['data_constituicao'];
       $dado['bairro'] = $result[0]['bairro'];
       $dado['numero'] = $result[0]['numero'];
       $dado['complemento'] = $result[0]['complemento'];
       $dado['n_funcionarios'] = $result[0]['n_funcionarios'];
       $dado['site'] = $result[0]['site'];
       $dado['faturamento_m_mensal'] = $result[0]['faturamento_m_mensal'];
       $dado['registro_agricultor'] = $result[0]['registro_agricultor'];
       $dado['contatocbn1'] = $result[0]['contatocbn1'];
       $dado['telefonecbn1'] = $result[0]['telefonecbn1'];
       $dado['contatocbn2'] = $result[0]['contatocbn2'];
       $dado['telefonecbn2'] = $result[0]['telefonecbn2'];
       $dado['nomesocietario1'] = $result[0]['nomesocietario1'];
       $dado['cpfsocietario1'] = $result[0]['cpfsocietario1'];
       $dado['nomesocietario2'] = $result[0]['nomesocietario2'];
       $dado['cpfsocietario2'] = $result[0]['cpfsocietario2'];
       $dado['por_societario2'] = $result[0]['por_societario2'];
       $dado['doc_anexo'] = $result[0]['doc_anexo'];
       $dado['doc_anexo2'] = $result[0]['doc_anexo2'];
       $dado['doc_anexo3'] = $result[0]['doc_anexo3'];
       $dado['doc_anexo4'] = $result[0]['doc_anexo4'];




		 //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
		            $config['mailtype'] = 'html';
										$this->load->library('email');               


           // Define remetente e destinatário
            $this->email->from('contato@aquamercantil.com.br','Cadatro aprovado'); // Remetente
            $this->email->to($result[0]['email']); // Destinatário

            $this->email->subject('');
            $this->email->message('Parabéns '.$result[0]['name'].', seu cadastro no Aqua Mercantil foi aprovado com sucesso. 
			Agora você já pode acessar sua conta, pelo email '.$result[0]['email'].', e pela senha:'.$result[0]['pass'].'.
			');
            
           if($this->email->send()):
			   
                           $user = $this->db->insert('users',$dado);
                                $this->db->where('id', $_POST['id']);
                                $this->db->delete('pre_approval');
		   
		   echo '1';
			else:
			
		   echo '0';

endif;
								
					

                            endif;
	}

	public function acesso(){

        $this->load->view('ajax/acesso');

    }
}
