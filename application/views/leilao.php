<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('fixed_files/leilao/header');

?>


<script>
    function cota(action,leilao) {
        $.post("<?php echo base_url('home');?>",{type:154477025,action:action,leilao:leilao},function (res) {});
        $("#cotacao"+leilao+"").modal('hide');

        $("#cotacao"+leilao+"").remove();
        $("#lotewin"+leilao+"").modal('show');


        //window.location.reload();
    }
</script>

<script>
    function arremate(leilao,user) {


        $("#reportErros").html('Processando...');

        $("#timeCount"+leilao+"").remove();
        var valor = document.getElementById('time'+leilao+'').textContent;

        $.post("<?php echo base_url('pages/ajax');?>",{type:2125,leilao:leilao,user:user,valor:valor},function (resp) {

            if(resp == 11){


                $("#cotacao"+leilao+"").modal("show");


                $("#modalArremate"+leilao+"").modal("hide");

            }else
            {
                $("#reportErros").html(resp);

            }

        });

    }
        </script>

        <!-- Page Content -->
        <div class="container">
            <?php
            date_default_timezone_set('America/Sao_Paulo');
            $maxitens2 = 6;

            $dataAtualsa = date('YmdHis');
            if(isset($_GET['bpg'])):

                $begsa = $_GET['bpg'] * $maxitens2 - $maxitens2;

            else:

                $begsa = 0;

            endif;

            $sql = "SELECT * FROM leiloes WHERE data_inicio < ? AND data_fim > ? AND status=? LIMIT ".$begsa.",".$maxitens2."";
            $query =  $this->db->query($sql, array($dataAtualsa,$dataAtualsa,1));

            $rowcount = $query->num_rows();

            $data = $query->result_array();

            if($rowcount > 0):



                ?>
                <div class="row">
                    <div class="col-lg-12"><script src="http://leilaoimporta24h.com.br/application/views/assets/js/jquery.min.js"></script>

                        <script src="<?php echo base_url('jquery.countdown.js');?>"></script>

                        <h2 class="page-header">Leilões disponiveis</h2>
                    </div>

                    <?php


                    foreach ($data as $dds){
                        $endsleilao = $dds['data_fim'];
                        $ano = substr($endsleilao, 0, 4);
                        $mes = substr($endsleilao, 4, 2);
                        $dia = substr($endsleilao, 6, 2);
                        $hora = substr($endsleilao, 8, 2);
                        $minuto = substr($endsleilao, 10, 2);
                        $segundo = substr($endsleilao, 12, 2);


                        if($hora >= 13):
                            $dsp = 'PM';


                        endif;
                        if($hora <= 12):
                            $dsp = 'AM';

                        endif;

                        if($hora == 00):

                            $horap = 00;
                        endif;

                        if($hora == 01):

                            $horap = 01;
                        endif;


                        if($hora == 02):

                            $horap = 02;
                        endif;

                        if($hora == 03):

                            $horap = 03;
                        endif;

                        if($hora == 04):

                            $horap = 04;
                        endif;

                        if($hora == 05):

                            $horap = 05;
                        endif;

                        if($hora == 06):

                            $horap = 06;
                        endif;

                        if($hora == 07):

                            $horap = 07;
                        endif;

                        if($hora == 08):

                            $horap = 08;
                        endif;

                        if($hora == 09):

                            $horap = 09;
                        endif;

                        if($hora == 10):

                            $horap = 10;
                        endif;

                        if($hora == 11):

                            $horap = 11;
                        endif;

                        if($hora == 12):

                            $horap = 12;
                        endif;

                        if($hora == 13):

                            $horap = 01;
                        endif;

                        if($hora == 14):

                            $horap = 02;
                        endif;
                        if($hora == 15):

                            $horap = 03;
                        endif;
                        if($hora == 16):

                            $horap = 04;
                        endif;
                        if($hora == 17):

                            $horap = 05;
                        endif;
                        if($hora == 18):

                            $horap = 06;
                        endif;
                        if($hora == 19):

                            $horap = 07;
                        endif;
                        if($hora == 20):

                            $horap = 08;
                        endif;
                        if($hora == 21):

                            $horap = 09;
                        endif;
                        if($hora == 22):

                            $horap = 10;
                        endif;
                        if($hora == 23):

                            $horap = 11;
                        endif;

                        //parei aqui

                        ?>


                        <!-- Modal -->
                        <div class="modal fade" id="lotewin<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Lote numero <?php echo $dds['id'];?> arrematado </h4>
                                    </div>
                                    <div class="modal-body">
                                        <h2 style="text-align: center;">Parabéns</h2>
                                        <p style="text-align: center;">Você arrematou o <b>lote numero <?php echo $dds['id'];?>, </b>estaremos aguardando a confirmação de seu pagamento para prosseguirmos com o processo de entrega do lote. O link para o pagamento se encontra no <b>sino de notificações</b>. Em breve entraremos em contato para mais detalhes, a equipe do Aquamercantil agradece.<br><br><br>

                                            <a style="text-align: center;" class="btn btn-info" href="<?php echo base_url('leiloes?pn=1');?>">Prosseguir para o pagamento</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="cotacao<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <h3> Ja cotou seu frete?</h3><br>
                                        Informe se o seu frete foi cotado, para se necessario entrarmos em contato com você.

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" onclick="cota('nao',<?php echo $dds['id'];?>);">Nao cotei</button>
                                        <button type="button" class="btn btn-primary" onclick="cota('sim',<?php echo $dds['id'];?>);">Já cotei</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="modal fade" id="nextasa<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="kode-testimonial-hd modal-header">
                                                <div style="padding-left: 30px; padding-right: 30px;">
                                                    <h4 id="titulo" style="text-align: center;"><b><?php echo $dds['titulo'];?></b></h4>
                                                    <span id="subtitulo"><?php echo strip_tags($dds['breve_descricao']);?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div style="padding-left: 60px; padding-right: 60px; margin-left: -40px;">
                                                    <div class="kode-testimonial-des">
                                                        <figure id="imgModal"><img style="float: left; padding: 2%;width: 200px;" class="img-rounded" src="<?php echo $dds['image'];?>"></figure>
                                                        <div class="blockquote-2">
                                                            <p>

                                                                <br>
                                                                <?php if(!empty($dds['previsao'])):?>
                                                                    Previsão de entrega: <b><?php  echo $dds['previsao']; ?></b><br>
                                                                <?php endif;?>
                                                                Titulo: <b><?php  echo $dds['titulo']; ?></b><br>
                                                             
                                                                Peso Total do lote: <b><?php echo $dds['peso_lote']; ?></b> Kg<br>
                                                                Classificação: <b><?php echo $dds['classificacao']; ?></b><br>
                                                                Peso individual: <b><?php echo $dds['peso_individual']; ?></b> Kg<br>
                                                                Característica de processamento: <b><?php echo $dds['caracteristicas_processamento']; ?></b><br>
                                                                Características de embalagem: <b><?php echo $dds['caracteristicas_embalagem']; ?></b><br>
                                                                Condição de pagamento: <b><?php echo $dds['condicao_pagamento']; ?></b><br>
                                                                Localidade de origem: <b><?php echo $dds['localidade_origem']; ?></b><br>
                                                                Produtor: <b><?php echo $dds['produtor_name']; ?></b><br><br>
                                                                <span  style="text-align: center; ">Valor inicial: <b>R$<?php echo number_format($dds['valor_max'],2,'.',',');?></b>&nbsp;&nbsp;&nbsp;Valor final: <b>R$<?php echo number_format($dds['valor_min'],2,'.',',');?></b>   <br><br>Data do inicio: <b><?php

   $iniciodatas = $dds['data_inicio'];
                        $ano = substr($iniciodatas, 0, 4);
                        $mes = substr($iniciodatas, 4, 2);
                        $dia = substr($iniciodatas, 6, 2);
                        $hora = substr($iniciodatas, 8, 2);
                        $minuto = substr($iniciodatas, 10, 2);
                        $segundo = substr($iniciodatas, 12, 2);

																echo $dia.'/'.$mes.'/'.$ano.' '.$hora.':'.$minuto.':'.$segundo;?></b>

    <br>
                                                                    <span id="textoModal"><?php echo $dds['descricao'];?></span>




                                                            </p><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:func();">
                                <img class="img-responsive img-portfolio img-hover" style="height: 350px;object-fit: cover; object-position: center;width: 100%;max-width: 100%;" src="<?php echo $dds['image'];?>" alt="">

                            </a>
                            <div style="font-size: 15pt;text-decoration: none;float: left;margin-top: -2%;" id="getting-start<?php echo $dds['id'];?>"></div>

                            <script>
                            </script>
                            <script type="text/javascript">
                                $("#getting-start<?php echo $dds['id'];?>")
                                    .countdown("<?php echo $ano;?>/<?php echo $mes;?>/<?php echo $dia;?> <?php echo $horap?>:<?php echo $minuto?>:<?php echo $segundo?> <?php echo $dsp;?>", function(event) {
                                        $(this).html(
                                            event.strftime('<b>Termina em:</b> %D dias %H:%M:%S')
                                        );
                                    });
                            </script><br><b>Preço atual:</b> <span class="text-info"> R$ <span id="time<?php echo $dds['id']?>" onclick="">00</span></span>

                            <br>

                            <br>
                            <span id="reportErros"></span>

                            <?php
                            date_default_timezone_set('America/Sao_Paulo');

                            $ind = $dds['data_inicio'];
                            $anoat = substr($ind, 0, 4);
                            $mesat = substr($ind, 4, 2);
                            $diaat = substr($ind, 6, 2);
                            $horaat = substr($ind, 8, 2);
                            $minutoat = substr($ind, 10, 2);
                            $segundoat = substr($ind, 12, 2);
                            $secc = 60;
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


                            $valuein = $segundoat  +  $minutoat * $minc + $horaat * $horac + $diaat * $diac + $mesat * $mesc + $anoat * $anoc ;

                            $valueout = $segundoats  + $minutoats * $minc + $horaats * $horac + $diaats * $diac + $mesats * $mesc + $anoats;


                            $desconto =  abs($valueout - $valuein);

                    $centavos =  str_replace (',','',$dds['valor_max']) * 100;

							$ds = $ind - date('YmdHis') - $centavos / 100 - $dds['valor_min'] * 100;
                            $d2 = $ind - date('YmdHis')  ;



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

                    $valor = $centavos - $segundos_diferenca;
					
					                        $real = $valor;

											


                            ?>

                            <?php

                            $this->db->from('lances_antecipados');
                            $this->db->where('id_leilao', $dds['id']);
                            $this->db->order_by("valor","desc");
                            $querya = $this->db->get();
                            $rowcount = $querya->num_rows();
                            $datea = $querya->result_array();

                            if($rowcount > 0):
                                $resdate = str_replace (',','',$datea[0]['valor']);
                            else:
                                $resdate =  str_replace (',','',$dds['valor_min']) ;
                            endif;


                            $var = 20 * $dds['id'];

                            ?>



                            <script id="timeCount<?php echo $dds['id']?>" type="text/javascript">

                                var tempo<?php echo $dds['id'];?> = new Number();
                                // Tempo em segundos
                                tempo<?php echo $dds['id'];?> = <?php echo $real;?>;
                                function startCountdown<?php echo $dds['id'];?>(){

                                    if((tempo<?php echo $dds['id'];?>) > <?php echo str_replace(".","",$resdate);?>){

                                        var tmp<?php echo $dds['id'];?> = tempo<?php echo $dds['id'];?>+'';
                                        tmp<?php echo $dds['id'];?> = tmp<?php echo $dds['id'];?>.replace(/([0-9]{2})$/g, ".$1");
                                        if( tmp<?php echo $dds['id'];?>.length > 6 )
                                            tmp<?php echo $dds['id'];?> = tmp<?php echo $dds['id'];?>.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1");
                                        // Cria a variável para formatar no estilo hora/cronômetro
                                        horaImprimivel<?php echo $dds['id'];?> = tmp<?php echo $dds['id'];?>;
                                        //JQuery pra setar o valor
                                        $("#time<?php echo $dds['id']?>").html(horaImprimivel<?php echo $dds['id'];?>);

                                        // Define que a função será executada novamente em 1000ms = 1 segundo
                                        setTimeout('startCountdown<?php echo $dds["id"];?>()',1000);

                                        // diminui o tempo
                                        tempo<?php echo $dds['id'];?>--;

                                    } else {

                                        $("#time<?php echo $dds['id']?>").html('<?php echo number_format($resdate,2,'.',',');?>');
																		$("#arrematebts").remove();

                                    }

                                }


                            </script>

                            <script>

                                startCountdown<?php echo $dds['id'];?>();
                            </script>
                            <br>


                            <span >

                        <?php
                        if(str_replace(".","",$resdate) >= $real):
                            ?>

                            <a  class="btn btn-success" style="float: right;margin-top: -4.5%;margin-right: 1%;margin-left: 1%;">Finalizado</a>

                            <?php
                        else:

                            ?>
                            <a  onclick="arremate(<?php echo $dds['id'];?>,<?php echo $_SESSION['ID'];?>);"  class="btn btn-success" style="float: right;margin-top: -4.5%;margin-right: 1%;margin-left: 1%;" id="arrematebts" >Arrematar
                    </a>

                        <?php endif;?>
</span>

                            <a href="#" onclick="" data-toggle="modal" data-target="#nextasa<?php echo $dds['id'];?>" class="btn btn-info" style="float: right;margin-top: -4.5%;">
                                <?php if($dds['type'] == 1):
                                    echo 'Ver detalhes';
                                else:
                                    echo 'Ver detalhes';
                                endif;
                                ?>
                            </a><br>
                            <br>


                        </div>


                    <?php }?>
                </div>
                <?php


                if(!isset($_GET['bpg'])):


                    $before = 1;
                    $this->db->from('leiloes');
                    $this->db->where('status',1);
                    $query = $this->db->get();

                    $rowcountresults = $query->num_rows();

                    $quants = ceil($rowcountresults / $maxitens2);
                    if($quants > 1):
                        $next = 2;
                    else:
                        $next = 1;
                    endif;

                else:

                    if($_GET['bpg'] > 1):

                        if($quants > 1):
                            $next = $_GET['bpg'] + 1;
                        else:
                            $next =  1;
                        endif;
                        $before = $_GET['bpg'] - 1;


                    else:

                        $next =  1;

                        $before = 1;


                    endif;

                endif;


                ?>
                <nav aria-label="..." >
                    <ul class="pager" >
                        <li><a href="<?php echo base_url('leiloes?bpg='.$before);?>">Anterior</a></li>
                        <li><a href="<?php echo base_url('leiloes?bpg='.$next);?>">Proximo</a></li>
                    </ul>
                </nav>
                <!-- /.row -->
            <?php endif;?>





            <?php
            if(isset($_POST['type']) and $_POST['type'] == '4575851'):

                $this->db->where('id_user',$_SESSION['ID']);
                $this->db->delete('notify');

            endif;
            ?>

            <!-- Page Content -->
            <div class="container">
                <?php

                date_default_timezone_set('America/Sao_Paulo');
                $maxitens1 = 6;

                $dataAtualsa = date('YmdHis');
                if(isset($_GET['npg'])):

                    $begs = $_GET['npg'] * $maxitens1 - $maxitens1;

                else:

                    $begs = 0;

                endif;

                $sql = "SELECT * FROM leiloes WHERE data_inicio > ? AND data_fim > ? AND status=? LIMIT ".$begs.",".$maxitens1."";
                $query =  $this->db->query($sql, array($dataAtualsa,$dataAtualsa,1));

                $rowcount = $query->num_rows();

                $data = $query->result_array();

                if($rowcount > 0):



                    ?>
                    <div class="row">
                        <div class="col-lg-12"><script src="http://leilaoimporta24h.com.br/application/views/assets/js/jquery.min.js"></script>

                            <script src="<?php echo base_url('jquery.countdown.js');?>"></script>

                            <h2 class="page-header">Proximos leilões</h2>
                        </div>

                        <?php


                        foreach ($data as $dds){
                            $begsleilao = $dds['data_inicio'];
                            $ano = substr($begsleilao, 0, 4);
                            $mes = substr($begsleilao, 4, 2);
                            $dia = substr($begsleilao, 6, 2);
                            $hora = substr($begsleilao, 8, 2);
                            $minuto = substr($begsleilao, 10, 2);
                            $segundo = substr($begsleilao, 12, 2);

                            if($hora >= 13):
                                $dsp = 'PM';


                            endif;
                            if($hora <= 12):
                                $dsp = 'AM';

                            endif;

                            if($hora == 00):

                                $horap = 00;
                            endif;

                            if($hora == 01):

                                $horap = 01;
                            endif;


                            if($hora == 02):

                                $horap = 02;
                            endif;

                            if($hora == 03):

                                $horap = 03;
                            endif;

                            if($hora == 04):

                                $horap = 04;
                            endif;

                            if($hora == 05):

                                $horap = 05;
                            endif;

                            if($hora == 06):

                                $horap = 06;
                            endif;

                            if($hora == 07):

                                $horap = 07;
                            endif;

                            if($hora == 08):

                                $horap = 08;
                            endif;

                            if($hora == 09):

                                $horap = 09;
                            endif;

                            if($hora == 10):

                                $horap = 10;
                            endif;

                            if($hora == 11):

                                $horap = 11;
                            endif;

                            if($hora == 12):

                                $horap = 12;
                            endif;

                            if($hora == 13):

                                $horap = 01;
                            endif;

                            if($hora == 14):

                                $horap = 02;
                            endif;
                            if($hora == 15):

                                $horap = 03;
                            endif;
                            if($hora == 16):

                                $horap = 04;
                            endif;
                            if($hora == 17):

                                $horap = 05;
                            endif;
                            if($hora == 18):

                                $horap = 06;
                            endif;
                            if($hora == 19):

                                $horap = 07;
                            endif;
                            if($hora == 20):

                                $horap = 08;
                            endif;
                            if($hora == 21):

                                $horap = 09;
                            endif;
                            if($hora == 22):

                                $horap = 10;
                            endif;
                            if($hora == 23):

                                $horap = 11;
                            endif;

                            ?>

                            <div class="col-md-6 col-sm-8">
                                <div class="modal fade" id="next<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <div class="kode-testimonial-hd modal-header">
                                                    <div style="padding-left: 30px; padding-right: 30px;">
                                                        <h4 id="titulo" style="text-align: center;"><b><?php echo $dds['titulo'];?></b></h4>
                                                        <span id="subtitulo"><?php echo strip_tags($dds['breve_descricao']);?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div style="padding-left: 60px; padding-right: 60px; margin-left: -40px;">
                                                        <div class="kode-testimonial-des">
                                                            <figure id="imgModal"><img  style="float: left; padding: 2%;width: 200px;" class="img-rounded" src="<?php echo $dds['image'];?>"></figure>
                                                            <div class="blockquote-2">
                                                                <p>

                                                                    <br>
                                                                    Nome científico: <b><?php  echo $dds['nome_cientifico_br']; ?></b><br>
                                                                    Inglês: <b><?php  echo $dds['nome_cientifico_en']; ?></b><br>
                                                                    Español: <b><?php  echo $dds['nome_cientifico_es']; ?></b><br>
                                                                    French: <b><?php echo $dds['nome_cientifico_fr'];?></b><br>
                                                                    Peso Total do lote: <b><?php echo $dds['peso_lote']; ?></b><br>
                                                                    Classificação: <b><?php echo $dds['classificacao']; ?></b><br>
                                                                    Peso individual: <b><?php echo $dds['peso_individual']; ?></b><br>
                                                                    Característica de processamento: <b><?php echo $dds['caracteristicas_processamento']; ?></b><br>
                                                                    Características de embalagem: <b><?php echo $dds['caracteristicas_embalagem']; ?></b><br>
                                                                    Condição de pagamento: <b><?php echo $dds['condicao_pagamento']; ?></b><br>
                                                                    Localidade de origem: <b><?php echo $dds['localidade_origem']; ?></b><br>
                                                                    Produtor: <b><?php echo $dds['produtor_name']; ?></b><br><br>
                                                                    <span  style="text-align: center; ">Valor inicial: <b>R$<?php echo number_format($dds['valor_max'],2,'.',',');?></b>&nbsp;&nbsp;&nbsp;Valor final: <b>R$<?php echo number_format($dds['valor_min'],2,'.',',');?></b>   <br><br>Data do inicio: <b><?php echo $dia.'/'.$mes.'/'.$ano.' '.$hora.':'.$minuto.':'.$segundo;?></b>

    <br>
                                                                    <span id="textoModal"><?php echo $dds['descricao'];?></span>



                                                        </span><br>
<?php echo $dds['valor_min'];?>
                                                                </p><br>
                                                                <?php
                                                                $this->db->from('lances_antecipados');
                                                                $this->db->where('id_usuario',$_SESSION['ID']);
                                                                $this->db->where('id_leilao',$dds['id']);
                                                                $query = $this->db->get();

                                                                $rowcount = $query->num_rows();

                                                                if($dds['type'] == 1 and $rowcount == 0):

                                                                    ?>
                                                                    <script>
                                                                        function runScript<?php echo $dds['id'];?>(e) {

                                                                            var userTp = '<?php echo $_SESSION['TYPE'];?>';
                                                                            if (e.keyCode == 13) {
                                                                                var tb = document.getElementById("lancepre<?php echo $dds['id'];?>").value;
                                                                               
	 
                                                                      
                                                                        if(userTp == 1 || userTp == 3){
                                                                            $("#infolance<?php echo $dds['id'];?>").html('Você não tem permissão para participar de leilões.');
                                                                        }
                                                                        
															if(userTp == 2 || userTp == 5454){
                                                                            
                                                                            $.post("<?php echo base_url('pages/insert');?>",{type:'012',id:'<?php echo $_SESSION['ID']?>',leilao:'<?php echo $dds['id'];?>',valor:tb},function (res) {
																				
																				$("#infolance<?php echo $dds['id'];?>").html(res);
                                                                                $("#lancebefore<?php echo $dds['id'];?>").remove();

                                                             });
                                                                        }


                                                                                return false;
                                                                            }
                                                                        }
                                                                    </script>




                                                                    <b class="text-info" style="text-align: center;margin: 0 0 0 20%;" id="infolance<?php echo $dds['id'];?>"></b>

                                                                    <div class="input-group" id="lancebefore<?php echo $dds['id'];?>">
                                                                        <span class="input-group-addon">R$</span> <input onkeypress="return runScript<?php echo $dds['id'];?>(event)" class="form-control" placeholder="Meu lance" id="lancepre<?php echo $dds['id'];?>" aria-label="Amount (to the nearest dollar)"> <span class="input-group-addon">.00</span> </div>
                                                                    <br><?php endif;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:func();">
                                    <img style="object-fit: cover; object-position: center;width: 100%;max-width: 100%; height: 300px;" class="img-responsive img-portfolio img-hover" src="<?php echo $dds['image'];?>" alt="">

                                </a>
                                <div style="font-size: 15pt;text-decoration: none;float: left;margin-top: -2%;" id="getting-started<?php echo $dds['id'];?>"></div>      <?php
                                $beggsdate = $dds['data_inicio'];
                                $anob = substr($beggsdate, 0, 4);
                                $mesb = substr($beggsdate, 4, 2);
                                $diab = substr($beggsdate, 6, 2);
                                $horab = substr($beggsdate, 8, 2);
                                $minutob = substr($beggsdate, 10, 2);
                                $segundob = substr($beggsdate, 12, 2);?>
                                <script type="text/javascript">
                                    $("#getting-started<?php echo $dds['id'];?>")
                                        .countdown("<?php echo $anob;?>/<?php echo $mesb;?>/<?php echo $diab;?> <?php echo $horap?>:<?php echo $minutob?>:<?php echo $segundob;?> <?php echo $dsp;?>", function(event) {
                                            $(this).html(
                                                event.strftime('<b>Começa em:</b> %D dias %H:%M:%S')
                                            );
                                        });
                                </script>

                                <a href="#" data-toggle="modal" data-target="#next<?php echo $dds['id'];?>" class="btn btn-info" style="float: right;margin-top: -2.5%;">
                                    <?php if($dds['type'] == 1):
                                        echo 'Lance antecipado';

                                    else:
                                        echo 'Ver detalhes';

                                    endif;
                                    ?>
                                </a>

<br>
<br>

                            </div>

                        <?php }?>
                    </div>
                    <?php


                    if(!isset($_GET['npg'])):


                        $before = 1;
                        $this->db->from('leiloes');
                        $this->db->where('status',1);
                        $query = $this->db->get();

                        $rowcountresults = $query->num_rows();

                        $quants = ceil($rowcountresults / $maxitens1);
                        if($quants > 1):
                            $next = 2;
                        else:
                            $next = 1;
                        endif;

                    else:

                        if($_GET['npg'] > 1):

                            if($quants > 1):
                                $next = $_GET['npg'] + 1;
                            else:
                                $next =  1;
                            endif;
                            $before = $_GET['npg'] - 1;


                        else:

                            $next =  1;

                            $before = 1;


                        endif;

                    endif;


                    ?>
                    <nav aria-label="..." >
                        <ul class="pager">
                            <li><a href="<?php echo base_url('leiloes?npg='.$before);?>">Anterior</a></li>
                            <li><a href="<?php echo base_url('leiloes?npg='.$next);?>">Proximo</a></li>
                        </ul>
                    </nav>
                    <!-- /.row -->




                <?php endif;?>


				
				    <div class="row">

                    <?php
					
					
			
					
                    $query = $this->db->select('leiloes.*,arremates.*')
                        ->from('leiloes')
						->join('arremates','leiloes.id = arremates.id_leilao', 'inner')
						 ->where('leiloes.status', 2555)
						 ->where('arremates.id_user', $_SESSION['ID'])
						->order_by('arremates.id','desc')
                        ->limit(16,0)
                        ->get();

                    $rowcountas = $query->num_rows();
                    $dateas = $query->result_array();
                    if($rowcountas > 0):
echo ' <h2>Arrematados por mim</h2><br>';
                        foreach ($dateas as $dta){


                            ?>

                            <div class="col-xs-6 col-md-3">
                                <a href="<?php echo $dta['url_payment'];?>" target="_blank" style="text-decoration: none;color: black;" class="thumbnail">
                                    <img style="height: 180px;object-fit: cover; object-position: center;" src="<?php echo $dta['image']; ?>" alt="..."> <h5 style="text-align: center;font-weight: bold;"><?php echo $dta['titulo']; ?></h5>
                                    <h5 style="text-align: center;">Arrematado por: <b>R$<?php echo number_format($dta['valor_arrematado'],2,'.',',');?></b></h5>
                                </a>

                            </div>
                        <?php }


                    endif;

                    ?>
                </div>
				
				
                <div class="row">

                    <?php
                    $query = $this->db->select('*')
                        ->from('leiloes')
                        ->limit(8,0)
                        ->order_by('id','desc')
                        ->where('status', 2555)
                        ->or_where('status', 0)
                        ->get();

                    $rowcountas = $query->num_rows();
                    $dateas = $query->result_array();
                    if($rowcountas > 0):
echo ' <h2>Leilões finalizados</h2><br>';
                        foreach ($dateas as $dta){


                            ?>

                            <div class="col-xs-6 col-md-3">
                                <a href="#" style="text-decoration: none;color: black;" class="thumbnail">
                                    <img style="height: 180px;object-fit: cover; object-position: center;" src="<?php echo $dta['image']; ?>" alt="..."> <h5 style="text-align: center;font-weight: bold;"><?php echo $dta['titulo']; ?></h5>
                                    <h5 style="text-align: center;">Arrematado por: <b>R$<?php echo number_format($dta['valor_arrematado'],2,'.',',');?></b></h5>
                                </a>

                            </div>
                        <?php }


                    endif;

                    ?>
                </div>

                <?php

                @session_start();
                $query = $this->db->select('lances_antecipados.*, leiloes.*')
                    ->from('lances_antecipados')
                    ->join('leiloes', 'lances_antecipados.id_leilao = leiloes.id', 'inner')
                    ->where('leiloes.status', 1)
                    ->where('lances_antecipados.id_usuario',$_SESSION['ID'])
                    ->get();

                $rowcount = $query->num_rows();
                $data = $query->result();

                if($rowcount > 0):

                    $dates = date('YmdHis');

                    foreach($data as $datase){

                        $desconto = $dates - $datase->data_inicio ;

                        $centavos =   $datase->valor_max * 100;

                        $real = $centavos - $desconto;

                        if ($datase->valor. '00' > $real):



                            $this->db->from('arremates');
                            $this->db->where('id_leilao', $datase->id_leilao);
                            $queryas = $this->db->get();

                            $rowcount = $queryas->num_rows();

                            if($rowcount > 0):



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
                                $data['itemAmount1'] = "".number_format($datase->valor,2,'.','')."";
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
                                $dados['valor'] = $datase->valor;
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

                                $dataup['status'] = '2555';
                                $dataup['valor_arrematado'] = $datase->valor;
                                $this->db->where('id', $datase->id_leilao);
                                $this->db->update('leiloes', $dataup);
                                $this->db->where('id_leilao', $datase->id_leilao);
                                $this->db->delete('lances_antecipados');





                            endif;


                        endif;





                    }
















                endif;
                $this->load->view('fixed_files/leilao/footer');

                ?>




