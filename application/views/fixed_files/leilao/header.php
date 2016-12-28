<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aqua Mercantil</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/leilao/css/modern-business.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/leilao/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script src="<?php echo base_url('assets/admin/');?>vendor/jquery/jquery.min.js"></script>

    <!-- Jquery easing -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mask.js');?>"></script>
</head>

<body>
					<!-- Modal -->
<div class="modal fade" id="history" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Historico de leilões</h4>
      </div>
      <div class="modal-body">
        
		<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
  <?php if($_SESSION['TYPE'] == 1 or $_SESSION['TYPE'] == 5454):?>
    <li role="presentation" class="active"><a href="#cadast" aria-controls="home" role="tab" data-toggle="tab">Cadastrados</a></li>
	<?php endif;?>
    <li role="presentation" <?php if($_SESSION['TYPE'] == 2 or $_SESSION['TYPE'] == 3): echo 'class="active"'; endif;?>><a href="#visit" aria-controls="profile" role="tab" data-toggle="tab">Visitados</a></li>
 
  </ul>
  <br>
  	

  <!-- Tab panes -->
  <div class="tab-content">
    <?php if($_SESSION['TYPE'] == 1 or $_SESSION['TYPE'] == 5454):?>

    <div role="tabpanel" class="tab-pane active" id="cadast">
	<div class="row" id="meuscadastros">
	
	<?php 
	$limit = 4;
	$this->db->from('leiloes');
	$this->db->where('by',$_SESSION['ID']);
	$this->db->order_by('id','desc');
	$query12 = $this->db->get();
    $query1 = $query12->num_rows();

    $pages1 = ceil($query1 / $limit);


    $this->db->from('leiloes');
	$this->db->where('by',$_SESSION['ID']);
	$this->db->order_by('id','desc');
	$this->db->limit($limit,0);
	$query = $this->db->get();
	if($query->num_rows() > 0):
	
	$fetch = $query->result_array();
	foreach($fetch as $dds){

	?>
	
	

                            <div class="col-xs-6 col-md-3">
                                <a target="_blank" style="text-decoration: none;color: black;" class="thumbnail">
                                    <img style="height: 180px;object-fit: cover; object-position: center;" src="<?php echo $dds['image'];?>" alt="...">
									<h5 style="text-align: center;font-weight: bold;"><?php echo $dds['titulo'];?></h5>
									
                                </a>

                                <?php
                                $inileilao = $dds['data_inicio'];
                                $anoi = substr($inileilao, 0, 4);
                                $mesi = substr($inileilao, 4, 2);
                                $diai = substr($inileilao, 6, 2);
                                $horai = substr($inileilao, 8, 2);
                                $minutoi = substr($inileilao, 10, 2);
                                $segundoi = substr($inileilao, 12, 2);

                                ?>
                                    <h5 style="text-align: center;"><a onclick="modelnew('<?php echo $dds['titulo']; ?>','<?php echo $dds['nome_cientifico_br']; ?>','<?php echo $dds['peso_lote']; ?>','<?php echo $dds['peso_individual']; ?>','<?php echo $dds['condicao_pagamento']; ?>','<?php echo $dds['localidade_origem']; ?>','<?php echo strip_tags($dds['descricao']); ?>','<?php echo $dds['valor_min']; ?>','<?php echo $dds['valor_max']; ?>','<?php echo $diai."/".$mesi."/".$anoi; ?>','<?php echo $horai.":".$minutoi; ?>','<?php echo $dds['caracteristicas_embalagem'];?>')" class="btn btn-info">Utilizar como modelo</a></h5>

                            </div>
                        
						
	<?php } endif; ?>
	
	
	<script>
function modelnew(titulo,especie,pesotd,pesoind,condicaopg,localidade,descricao,valormin,valormax,inicioleilao,horainicio,caracteristicae){
    document.getElementById("titulolei").value = titulo;
    document.getElementById("especie").value = especie;
    document.getElementById("pesot").value = pesotd;
    document.getElementById("pesoind").value = pesoind;
    document.getElementById("caracteremba").value = caracteristicae;
    document.getElementById("condicoespaga").value = condicaopg;
    document.getElementById("localidadeorigem").value = localidade;
    document.getElementById("descriptiontext").innerHTML=descricao;
    document.getElementById("minvalue").value = valormin;
    document.getElementById("maxvalue").value = valormax;
    //document.getElementById("simfimldateed").value = inicioleilao;
    //document.getElementById("horainicio").value = horainicio;

    $("#deleteaccount").modal('show')

}
	</script>

                                        </div>
        <script>
            function mycadsnext() {

                var next = $('#mycadsnext').attr("lang");
                var before = $('#mycadsbefore').attr("lang");




                $.post('<?php echo base_url('pages/pagination2');?>',{page:next,user:1},function (ress) {
                    if(ress){

                        var next2 = parseInt(next) + 1;
                        var before2 = parseInt(before) + 1;

                        $("#meuscadastros").html(ress);
                        $('#mycadsnext').attr("lang",""+next2+"");
                        $('#mycadsbefore').attr("lang",""+before2+"");

                    }


                });






            }
        </script>
        <script>





            function mycadsbefore() {


                var next = $('#mycadsnext').attr("lang");
                var before = $('#mycadsbefore').attr("lang");


                $.post('<?php echo base_url('pages/pagination2');?>',{page:before,user:1},function (resa) {
                    if(resa){


                        var next2 = parseInt(next) - 1;
                        var before2 = parseInt(before) - 1;
                        $("#meuscadastros").html(resa);
                        $('#mycadsnext').attr("lang",""+next2+"");
                        $('#mycadsbefore').attr("lang",""+before2+"");

                    }


                });
            }
        </script>

        <nav aria-label="...">
            <ul class="pager">
                <li><a href="javascript:func();" id="mycadsbefore" lang="1" onclick="mycadsbefore();">Anterior</a></li>
                <li><a href="javascript:func();" id="mycadsnext" lang="<?php if($pages1 > 1): echo 2;  else: echo 1; endif; ?>" onclick="mycadsnext();">Proximo</a></li>
            </ul>
        </nav>
	</div>

	
	<?php

    endif;?>
    <div role="tabpanel" class="tab-pane <?php if($_SESSION['TYPE'] == 2 or $_SESSION['TYPE'] == 3): echo 'active'; endif;?>
" id="visit">
	
		<div class="container">

	<div class="row">
<?php


$query = $this->db->select('leiloes.*, acesso_leilao.*')
    ->from('leiloes')
    ->join('acesso_leilao', 'leiloes.id = acesso_leilao.id_leilao', 'inner')
    ->where('acesso_leilao.id_user', $_SESSION['ID'])
    ->order_by('acesso_leilao.id_acesso', 'desc')
    ->limit(20, 0)
    ->get();

$rowcount = $query->num_rows();
$data = $query->result();


	if($rowcount > 0):
	

	foreach($data as $dds){

	?>
	
	

                            <div class="col-xs-6 col-md-2">
                                <a target="_blank" style="text-decoration: none;color: black;" class="thumbnail">
                                    <img style="height: 180px;object-fit: cover; object-position: center;" src="<?php echo $dds->image;?>" alt="...">
									<h5 style="text-align: center;font-weight: bold;"><?php echo $dds->titulo;?></h5>

                                    <?php
                                    if($dds->status == 1):
                                    echo ' <h6 style="text-align: center;font-weight: bold;" class="text-info">Disponivel</h6>';
                                    endif;
                                    if($dds->status == 0):
                                    echo ' <h6 style="text-align: center;font-weight: bold;" class="text-info">Finalizado</h6>';
                                    endif;
                                    if($dds->status == 2555 and $dds->by == $_SESSION['ID']):
                                    echo ' <h6 style="text-align: center;font-weight: bold;" class="text-success">Arrematado</h6>';
                                    endif;
                                    if($dds->status == 2555 and $dds->by <> $_SESSION['ID']):
                                    echo ' <h6 style="text-align: center;font-weight: bold;" class="text-success">Arrematado</h6>';
                                    endif;
                                    ?>
									
                                </a>


                            </div>
                        
						
	<?php } endif; ?>
                         
							
                                        </div>
                                        </div>
	
	
	
	</div>
   
  </div>

</div>
		
		
      </div>
     
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Informações da conta</h4>
            </div>
            <div class="modal-body">

                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Informações</a></li>

                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Alterar senha</a></li>

                  
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
<br>
                            <div class="row">
                                <div style="padding-left: 60px; padding-right: 60px; margin-left: -40px;">
                                    <div class="kode-testimonial-des">

                                        <div class="">
                                            <br>
                                            <br>
                                            <p>
                                                <span id="textoModal">

                                                    <?php
                                                    $this->db->from('users');
                                                    $this->db->where('id',$_SESSION['ID']);

                                                    $querya = $this->db->get();
                                                    $results = $querya->result_array();


                                                    ?>
                                                    <b>Nome:</b> <?php echo $results[0]['name']; ?><br>
                                                    <b>Email:</b> <?php echo $results[0]['email']; ?><br>
                                                    <b>
                                                        <?php if(strlen($results[0]['cnpj']) == 14):
                                                        echo 'CPF:';
                                                        else:
                                                        echo 'CNPJ:';
                                                        endif;

                                                        ?>
                                                        </b><?php echo $results[0]['cnpj']; ?><br>
                                                   <?php
                                                 if(strlen($results[0]['cnpj']) > 14):
                                                   ?>
                                                    <b>Razão social:</b><?php echo $results[0]['razao_social']; ?><br>
                                                    <?php endif;?>
                                                    <b>Responsavel:</b><?php echo $results[0]['nome_responsavel']; ?><br>
                                                    <?php
                                                    if(strlen($results[0]['cnpj']) > 14):
                                                    ?>
                                                    <b>Inscrição estadual:</b><?php echo $results[0]['inscricao_estadual']; ?><br>
                                                    <?php endif;?>
                                                    <b>Telefone:</b><?php echo $results[0]['telefone']; ?><br>

                                                </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <br><br>

                            <div class="row">
                                <div style="padding-left: 60px; padding-right: 60px; margin-left: -40px;">
                                    <div class="kode-testimonial-des">
                            <form action="<?php echo base_url('leiloes');?>" method="post">
                                <input type="hidden" name="type" value="15456a">
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Senha atual</label>
                                    <input type="password" name="atualp" class="form-control" id="exampleInputEmail1" placeholder="*********">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nova senha</label>
                                    <input type="password" name="novap" class="form-control" id="exampleInputPassword1" placeholder="*********">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Repetir senha</label>
                                    <input type="password" name="novaagp" class="form-control" id="exampleInputPassword1" placeholder="*********">
                                </div>

                                <button type="submit" class="btn btn-default">Alterar</button>
                            </form>

<?php
if(isset($_POST['type']) and $_POST['type'] == '15456a'):

    if($_POST['novap'] == $_POST['novaagp']):

        $dataup['pass'] = hash('whirlpool',md5(sha1($_POST['novap'])));
        $this->db->where('id', $_SESSION['ID']);
        $this->db->where('pass', hash('whirlpool',md5(sha1($_POST['atualp']))));
        $this->db->update('users', $dataup);
    @session_destroy();
        redirect('home', 'refresh');





    endif;

endif;

?>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
if($_SESSION['TYPE'] == 1 or $_SESSION['TYPE'] == 0 or $_SESSION['TYPE'] == 5454):
?>
    <?php

    if(isset($_POST['insert']) and $_POST['insert'] == 15154):

        $imagecript = md5(rand(1,20045));

        $destino = 'assets/images/leilao/'.$imagecript.'.jpg';

        $arquivo_tmp = $_FILES['imageed']['tmp_name'];



        $move = move_uploaded_file( $arquivo_tmp, $destino  );
 
        $ddpup['nome_cientifico_br'] = $_POST['cnpt'];
        $ddpup['peso_lote'] = $_POST['pesot'];
        $ddpup['classificacao'] = $_POST['class'];
        $ddpup['peso_individual'] = $_POST['pesoind'];
        $ddpup['caracteristicas_processamento'] = $_POST['cpp'];
        $ddpup['caracteristicas_embalagem'] = $_POST['ccemb'];
        $ddpup['condicao_pagamento'] = $_POST['cntpay'];
        $ddpup['localidade_origem'] = $_POST['lcco'];
        $ddpup['produtor_name'] = $_SESSION['NAME'];
        $ddpup['previsao'] = $_POST['despescas'];
        $ddpup['titulo'] = $_POST['titulo'];
        $ddpup['breve_descricao'] = $_POST['brevedescricao'];
        $ddpup['descricao'] = $_POST['descricao'];
        //$ddpup['image'] = $_GET[''];
        $ddpup['valor_min'] = $_POST['minvalue'];
        $ddpup['image'] = 'assets/images/leilao/'.$imagecript.'.jpg';
        $ddpup['valor_max'] = $_POST['maxvalue'];
        $ddpup['status'] = 1;
        $ddpup['by'] = $_SESSION['ID'];

        $dataInicio = $_POST['inicioleilaoed'].' '.$_POST['horainicio'];

        $ddpup['data_inicio'] = $dataInicio.':59';

        $this->db->insert('leiloes_pendentes', $ddpup);

        $daten['id_user'] = $_SESSION['ID'];
        $daten['titulo'] = 'Solicitação de leilão enviada.';
        $daten['imagem'] = 'http://icons.iconarchive.com/icons/graphicloads/100-flat/256/clock-icon.png';
        $daten['texto'] = 'Você cadastrou um novo leilão, em breve entraremos em contato e informaremos se o seu leilão foi aprovado.';
        $daten['url'] = '#';
        $this->db->insert('notify', $daten);
        $lastn = $this->db->insert_id();

        $datenv['id_user'] = $_SESSION['ID'];
        $datenv['id_notify'] = $lastn;
        $this->db->insert('notify_read', $datenv);
        redirect('leiloes', 'refresh');
    endif;
    ?>	<script>
    jQuery(document).ready(function() {
        jQuery('#maxvalue').mask("###0.00", {reverse: true});
        jQuery('#minvalue').mask("###0.00", {reverse: true});
        jQuery('#simfimldateed').mask('00/00/0000');
        jQuery('#horainicio').mask('00:00');
        jQuery('#despescas').mask('00/00/0000');
        jQuery('#pesot').mask('000000000000');
        jQuery('#pesoind').mask('00000');
    });
</script>


    <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar leilão</h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('leiloes');?>" >

                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" ><a href="#antecipado" aria-controls="home" role="tab" data-toggle="tab">Antecipado</a></li>
                            <li role="presentation" class="active"><a href="#imediato" aria-controls="profile" role="tab" data-toggle="tab">Imediato</a></li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane " id="antecipado">
                                <br>
                                <div class="form-group">
                                    <label>Previsão de Despesca ou Entrega</label>
                                    <input  name="despescas" id="despescas" placeholder="00/00/0000" type="text" >
                                </div><br>
                            </div>
                            <div role="tabpanel" class="tab-pane active" id="imediato">

                            </div>

                        </div>

                    </div>
                    <input type="hidden" name="insert" value="15154">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input required="required" class="form-control" name="titulo" id="titulolei" size="60" >
                    </div><br>
                   
                    <div class="form-group">
                        <label>Espécie/Nome ou Nome da Espécie

</label>
                        <input required="required" class="form-control" id="especie"  name="cnpt" placeholder="Espécie/Nome ou Nome da Espécie
" size="66" >
                    </div><br>
 <div style="display:none;">
                  

                 
                  
					
					
			
                </div>

                    <div class="form-group">
                        <label>Peso Total do lote por kg:</label>
                        <input required="required" class="form-control" name="pesot" id="pesot" placeholder="
Peso Total do lote
" size="66" >

<div class="form-group">
                        <label>Peso individual po kg:</label>
                        <input required="required" name="pesoind" id="pesoind" class="form-control" placeholder="Peso individual:" size="66" >
                    </div><br>
                    </div><br>


                    <div class="form-group">
                        <label>Classificação:</label>
                        <select required="required" id="classificacao" name="class" class="form-control">
                            <option value=""></option>
                            <option value="Inteiro Fresco">Inteiro Fresco</option>
                            <option value="Inteiro Congelado">Inteiro Congelado</option>
                            <option value="Processado Congelado">Processado Congelado</option>
                             <option value="Processado Fresco">Processado Fresco</option>
                        </select>
                    </div><br>
					

                    <script type="text/javascript">
                            $('#classificacao').on('change', function() {
                                var tipo = this.value;


                                if(tipo == 'Processado Congelado'){
                                    $('#cpp').append('<option value="Banda com cabeça">Banda com cabeça</option>');
                                    $('#cpp').append('<option value="Banda sem cabeça">Banda sem cabeça</option>');
                                    $('#cpp').append('<option value="Cabeça">Cabeça</option>');
                                    $('#cpp').append('<option value="Camarão butterfly">Camarão butterfly</option>');
                                    $('#cpp').append('<option value="Camarão cozido descascado">Camarão cozido descascado</option>');
                                    $('#cpp').append('<option value="Camarão cozido sem cabeça">Camarão cozido sem cabeça</option>');
                                    $('#cpp').append('<option value="Camarão descascado">Camarão descascado</option>');
                                    $('#cpp').append('<option value="Camarão eviscerado">Camarão eviscerado</option>');
                                    $('#cpp').append('<option value="Camarão sem cabeça">Camarão sem cabeça</option>');
                                    $('#cpp').append('<option value="Camarão Tail of">Camarão Tail of</option>');
                                    $('#cpp').append('<option value="Camarão Tail on">Camarão Tail on</option>');
                                    $('#cpp').append('<option value="Cauda de Lagosta">Cauda de Lagosta</option>');
                                    $('#cpp').append('<option value="Costela inteira">Costela inteira</option>');
                                    $('#cpp').append('<option value="Costela palito">Costela palito</option>');
                                    $('#cpp').append('<option value="Espalmado">Espalmado</option>');
                                    $('#cpp').append('<option value="Eviscerado com cabeça">Eviscerado com cabeça</option>');
                                    $('#cpp').append('<option value="Eviscerado sem cabeça">Eviscerado sem cabeça</option>');
                                    $('#cpp').append('<option value="Filé com pele">Filé com pele</option>');
                                    $('#cpp').append('<option value="Filé sem pele">Filé sem pele</option>');
                                    $('#cpp').append('<option value="Inteiro sem escama">Inteiro sem escama</option>');
                                    $('#cpp').append('<option value="Isca">Isca</option>');
                                    $('#cpp').append('<option value="Lagosta Inteira">Lagosta Inteira</option>');
                                    $('#cpp').append('<option value="Lombo">Lombo</option>');
                                    $('#cpp').append('<option value="Manta">Manta</option>');
                                    $('#cpp').append('<option value="Posta">Posta</option>');
                                    $('#cpp').append('<option value="Ventrecha">Ventrecha</option>');
                                    $('#cpp').append('<option value=""></option>');
                                }

                                if(tipo == 'Processado Fresco'){
                                    $('#cpp').append('<option value="Banda com cabeça">Banda com cabeça</option>');
                                    $('#cpp').append('<option value="Banda sem cabeça">Banda sem cabeça</option>');
                                    $('#cpp').append('<option value="Cabeça">Cabeça</option>');
                                    $('#cpp').append('<option value="Camarão butterfly">Camarão butterfly</option>');
                                    $('#cpp').append('<option value="Camarão cozido descascado">Camarão cozido descascado</option>');
                                    $('#cpp').append('<option value="Camarão cozido sem cabeça">Camarão cozido sem cabeça</option>');
                                    $('#cpp').append('<option value="Camarão descascado">Camarão descascado</option>');
                                    $('#cpp').append('<option value="Camarão eviscerado">Camarão eviscerado</option>');
                                    $('#cpp').append('<option value="Camarão sem cabeça">Camarão sem cabeça</option>');
                                    $('#cpp').append('<option value="Camarão Tail of">Camarão Tail of</option>');
                                    $('#cpp').append('<option value="Camarão Tail on">Camarão Tail on</option>');
                                    $('#cpp').append('<option value="Cauda de Lagosta">Cauda de Lagosta</option>');
                                    $('#cpp').append('<option value="Costela inteira">Costela inteira</option>');
                                    $('#cpp').append('<option value="Costela palito">Costela palito</option>');
                                    $('#cpp').append('<option value="Espalmado">Espalmado</option>');
                                    $('#cpp').append('<option value="Eviscerado com cabeça">Eviscerado com cabeça</option>');
                                    $('#cpp').append('<option value="Eviscerado sem cabeça">Eviscerado sem cabeça</option>');
                                    $('#cpp').append('<option value="Filé com pele">Filé com pele</option>');
                                    $('#cpp').append('<option value="Filé sem pele">Filé sem pele</option>');
                                    $('#cpp').append('<option value="Inteiro sem escama">Inteiro sem escama</option>');
                                    $('#cpp').append('<option value="Isca">Isca</option>');
                                    $('#cpp').append('<option value="Lagosta Inteira">Lagosta Inteira</option>');
                                    $('#cpp').append('<option value="Lombo">Lombo</option>');
                                    $('#cpp').append('<option value="Manta">Manta</option>');
                                    $('#cpp').append('<option value="Posta">Posta</option>');
                                    $('#cpp').append('<option value="Ventrecha">Ventrecha</option>');
                                    $('#cpp').append('<option value=""></option>');
                                }
                              
                            })
                    </script>
					

                    <div class="form-group">
                        <label>Característica de processamento:</label>
                        <select  id="cpp"  name="cpp" class="form-control">
                            <option value=""></option>
                            
                        </select>
                    </div><br>

                    <div class="form-group">
                        <label>Caracteristicas da embalagem</label>
                        <input required="required"  name="ccemb" class="form-control" id="caracteremba" placeholder="Caracteristicas da embalagem:" size="66" >
                    </div><br>

                    <div class="form-group">
                        <label>Condições de pagamento:</label>
                        <input required="required" name="cntpay" class="form-control" id="condicoespaga" placeholder="Condições de pagamento:" size="66" >
                    </div><br>

    <div class="form-group">
                        <label>Localidade de origem:</label>
                        <input required="required" name="lcco" class="form-control" id="localidadeorigem" placeholder="Localidade de origem:" size="66" >
                    </div><br>

                   
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea  class="form-control" name="descricao" rows="5"  id="descriptiontext"></textarea>
                    </div><br>
					
				
                    <div class="form-group">
                        <label>Valor minimo</label>
                        <input  required="required" class="form-control" name="minvalue" placeholder="0.00"  id="minvalue">

                    </div><br>
                    <div class="form-group">
                        <label>Valor maximo</label>
                        <input  required="required" class="form-control" name="maxvalue" size="66" placeholder="0.00"  id="maxvalue">
                    </div><br>
                    <div class="form-group">
                        <label>Imagem</label><br>
                        <input required="required" name="imageed" id="imageed" type="file">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Inicio do leilão</label>
                        <input required="required" name="inicioleilaoed" id="simfimldateed" type="text" placeholder="00/00/0000"  class="form-control">
                        
                    </div>

                    <div class="form-group">
                        <label>Hora Inicio</label>
                        <input required="required" name="horainicio" id="horainicio" type="text"  placeholder="00:00"  class="form-control"> 
                    </div>

                   
                 
                    <br>
                    <button type="submit" class="btn btn-primary">Adidionar leilão</button>
                </form>
            </div>
        </div>
    </div>
</div>    <!-- Modal -->
<?php

endif;


?>


<div class="modal fade" id="delntf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Deletar notificações</h4>
            </div>
            <div class="modal-body">
                <span style="font-size: 11pt;">Todas suas notificações serão apagadas, inclusive as de ordens de pagamento.<br> Tem certeza que deseja prosseguir?</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="deletentf();">Excluir</button>
            </div>
        </div>
    </div>
</div>
<script>
    function deletentf() {

        $("#delntf").modal('hide');
$("#w").remove();
        $.post("<?php echo base_url('leiloes');?>",{type:4575851},function (res) {

        });
window.location.reload();
    }
    </script>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('home');?>">

Aqua Mercantil            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">


  <li>
                    <a  href="#" data-toggle="modal" data-target="#account"><?php echo $results[0]['name']; ?></a>
                </li>
                    <?php
@session_start();
 if($_SESSION['TYPE'] == 1 or $_SESSION['TYPE'] == 0 or $_SESSION['TYPE'] == 5454):

?>
                <?php
                    $this->db->from('users');
                    $this->db->where('id',$_SESSION['ID']);

                    $querya = $this->db->get();
                    $results = $querya->result_array();


                ?>
              
                        
                        
                        <li>
                            <a href="#"  data-toggle="modal" data-target="#deleteaccount">Cadastrar leilão</a>
                        </li>

                        <?php endif;?>
                

<script>
   function ftnNtread(){
        $("#ntRow").remove();
       $.post("<?php echo base_url('leiloes');?>",{type:1515},function (res) {
       });
    }
    </script>
                <?php

                if(isset($_POST['type']) and $_POST['type'] == '1515'):

                    $this->db->where('id_user',$_SESSION['ID']);
                    $this->db->delete('notify_read');

                endif;
                ?>
                <li class="dropdown <?php if(isset($_GET['pn']) and $_GET['pn'] == 1): echo 'open'; endif;?>">
                    <a href="#" onclick="ftnNtread()" class="dropdown-toggle" data-toggle="dropdown" <?php if(isset($_GET['pn']) and $_GET['pn'] == 1): echo 'aria-expanded="true"'; endif;?> ><div class="icon-wrapper">
                            <i class="fa fa-bell   icon-grey"></i>
                            <?php

                            $this->db->from('notify_read');
                            $this->db->where('id_user', $_SESSION['ID']);
                            $query = $this->db->get();
                            $rowcount = $query->num_rows();
                            if($rowcount > 0):

                            ?>
                            <span id="ntRow" class="badge"><?php echo $rowcount;?></span>


                            <?php endif;?>
                        </div></a><!-- Button trigger modal -->

                    <ul class="dropdown-menu" style="
">

                        <div id="w" >
                            <div id="content" >
                                <!-- Icons source http://dribbble.com/shots/913555-Flat-Web-Elements -->
                                <?php
                                $this->db->from('notify');
                                $this->db->where('id_user', $_SESSION['ID']);
                                $this->db->order_by("id","desc");
                                $query = $this->db->get();
                                $rowcount = $query->num_rows();
                                if($rowcount > 0):
?>
                                    <h5 style="z-index: 100000;float: left;width: 100%;margin-top: -15px;padding: 3%;  font-weight: bold;" >Todas as notificações &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i data-toggle="modal" data-target="#delntf" style="cursor: pointer;" class="fa fa-close text-danger"></i></h5>
                                    <br>
                                    <br>
                                    <br>
                                    <?php
                                    foreach ($query->result_array() as $result) {
                                        ?>
                                        <div class="notify successbox">
                                            <a style="text-decoration: none;" href="<?php echo $result['url'];?>" target="_blank">
                                            <span class="alerticon"><img style="width: 150px;"
                                                    src="<?php echo $result['imagem'];?>"
                                                    alt="checkmark"/></span>

                                                <p style="color: black;"><?php echo $result['texto'];?></p>
                                                </a>
                                        </div>
                                        <?php
                                    }
                                else:

                                    echo '<h2 style="text-align: center;">Nenhuma notificação</h2>';
                                endif;
                                ?>

                            </div><!-- @end #content -->

                        </div><!-- @end #w -->
                    </ul>
                </li>
                <style>

                    /** page structure **/
                    #w {

                        display: block;
                        width: 450px;
                        max-height: 400px;
                        height: 400px;
                        overflow:auto;
                        margin: 0 auto;
                        padding-top: 3px;
                    }

                    #content {
                        display: block;
                        width: 100%;
                        background: #fff;
                        padding: 25px 20px;
                        padding-bottom: 35px;
                        -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
                        -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
                        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
                    }


                    .flatbtn {
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                        display: inline-block;
                        outline: 0;
                        border: 0;
                        color: #f9f8ed;
                        text-decoration: none;
                        background-color: #b6a742;
                        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
                        font-size: 1.2em;
                        font-weight: bold;
                        padding: 12px 22px 12px 22px;
                        line-height: normal;
                        text-align: center;
                        vertical-align: middle;
                        cursor: pointer;
                        text-transform: uppercase;
                        text-shadow: 0 1px 0 rgba(0,0,0,0.3);
                        -webkit-border-radius: 3px;
                        -moz-border-radius: 3px;
                        border-radius: 3px;
                        -webkit-box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
                        -moz-box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
                        box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
                    }
                    .flatbtn:hover {
                        color: #fff;
                        background-color: #c4b237;
                    }
                    .flatbtn:active {
                        -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
                        -moz-box-shadow:inset 0 1px 5px rgba(0, 0, 0, 0.1);
                        box-shadow:inset 0 1px 5px rgba(0, 0, 0, 0.1);
                    }

                    /** notifications **/
                    .notify {
                        display: block;
                        background: #fff;
                        padding: 12px 18px;
                        max-width: 400px;
                        margin: 0 auto;
                        cursor: pointer;
                        -webkit-border-radius: 3px;
                        -moz-border-radius: 3px;
                        border-radius: 3px;
                        margin-bottom: 20px;
                        box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;
                    }

                    .notify h1 { margin-bottom: 6px; }

                    .successbox h1 { color: #678361; }
                    .errorbox h1 { color: #6f423b; }

                    .successbox h1:before, .successbox h1:after { background: #cad8a9; }
                    .errorbox h1:before, .errorbox h1:after { background: #d6b8b7; }

                    .notify .alerticon {
                        display: block;
                        text-align: center;
                        margin-bottom: 10px;
                    }

                    .badge{
                        background: rgba(178, 0, 0, 0.95);
                        width: auto;
                        height: auto;
                        margin: 0;

                        position:absolute;
                        top:8px;
                        right:4px;
                        padding:3px 5px 2px 5px;
                    }
                    </style>
                <li class="dropdown">
                    <a data-toggle="modal" data-target="#history"><i class="fa fa-clock-o" aria-hidden="true"></i>

                    </a>
					</li>
					

<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i>
                    </a>
                    <ul class="dropdown-menu">

                            <li>
                    <a style="outline: none;" href="#" data-toggle="modal" data-target="#account">Meus Dados</a>
                </li>

                        <li>
                            <a href="<?php echo base_url('pages/logout');?>"> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
		
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!--
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('<?php echo base_url('assets/leilao/images/bannerl.jpg');?>');"></div>
            <div class="carousel-caption">
            </div>
        </div>

    </div>

    <!--
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>  -->
</header>

