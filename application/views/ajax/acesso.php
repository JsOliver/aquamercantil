<?php

if(isset($_POST['type']) and $_POST['type'] == 'acesso'):
    
    $dados['id_user'] = $_POST['id_user'];
    $dados['id_leilao'] = $_POST['id_leilao'];
	
    $this->db->insert('acesso_leilao', $dados);

endif;

?>