<?php
@session_start();
if(isset($_POST['type']) and $_POST['type'] == '012' and $_SESSION['TYPE'] == 2 or isset($_POST['type']) and $_POST['type'] == '012' and $_SESSION['TYPE'] == 5454):
    $dados['id_usuario'] = $_POST['id'];
    $dados['id_leilao'] = $_POST['leilao'];

    $valor = str_replace("." , "" , $_POST['valor']); 
	$valor = str_replace("," , "" , $_POST['valor']); 
    
    $dados['valor'] = $_POST['valor'];
	
	//$this->db->from('');
	
	
    $this->db->insert('lances_antecipados', $dados);
//echo $this->db->insert_id();
//echo 'Lance programado indisponivel, no momento.';
endif;

?>