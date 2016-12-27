<?php

if(isset($_POST['type']) and $_POST['type'] == 'acesso'):

    $this->db->from('acesso_leilao');
    $this->db->where('id_leilao', $_POST['id_leilao']);
    $this->db->where('id_user', $_POST['id_user']);
    $querya = $this->db->get();
    $rows = $querya->num_rows();
    if($rows == 0):

    $dados['id_user'] = $_POST['id_user'];
    $dados['id_leilao'] = $_POST['id_leilao'];
	
    $this->db->insert('acesso_leilao', $dados);
endif;
endif;

?>