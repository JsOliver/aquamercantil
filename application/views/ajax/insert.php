<?php
@session_start();
if(isset($_POST['type']) and $_POST['type'] == '012' ):


    if($_SESSION['TYPE'] == 2 or $_SESSION['TYPE'] == 0 or $_SESSION['TYPE'] == 5454):



        $this->db->from('leiloes');
        $this->db->where('id',$_POST['leilao']);
        $query = $this->db->get();
        $rowcountids = $query->num_rows();
        $fetch = $query->result_array();
        if($rowcountids > 0):
            $count = strlen($_POST['valor']);




            $min = str_replace(',','',$fetch[0]['valor_min']);
            $max = str_replace(',','',$fetch[0]['valor_max']);
            $vreplace = str_replace(',','',$_POST['valor']);

            if($vreplace < $min){

                // echo 'O lance não pode ser menor que R$ '.$fetch[0]['valor_min'].'';
                echo 'Lance muito baixo, tente um valor maior.';

            }elseif ($vreplace > $max){

                echo 'O lance não pode ser maior que R$ '.$fetch[0]['valor_max'].'';
            }

            else{






                $dados['id_usuario'] = $_POST['id'];
                $dados['id_leilao'] = $_POST['leilao'];


                $dados['valor'] = $vreplace;


                $this->db->insert('lances_antecipados', $dados);
                $cout2 = $this->db->insert_id();

                if ($cout2 > 0):

                    echo 11;

                else:
                    echo 'Erro ao inserir lance antecipado, tente mais tarde.';
                endif;

            }
        else:
            echo 'Ocorreu um erro, tente mais tarde.';

        endif;

    endif;



endif;

?>