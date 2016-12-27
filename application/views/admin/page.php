<?php
defined('BASEPATH') OR exit('No direct script access allowed');

@session_start();
if(isset($_SESSION['ID']) and isset($_SESSION['TYPE']) and $_SESSION['TYPE'] == 5454):
    $this->load->view('admin/header');
    date_default_timezone_set('America/Sao_Paulo');

    $dataAtualsa = date('YmdHis');
?>

    <?php

    if($inicio == 1):
    ?>
        <div id="page-wrapper" style="min-height: 611px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bem vindo</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php

            $users = $this->db->select('*')->from('users')->get();
            $leiloesdp = $this->db->select('*')->from('leiloes')->where('status',1)->get();
            $leiloesep = $this->db->select('*')->from('leiloes')->where('status',2555)->get();
            $payments = $this->db->select('*')->from('transactions_approval')->get();

           //$users->num_rows();
            ?>
            <div class="row">
                <div class="col-lg-3 col-md-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($users->num_rows());?></div>
                                    <div>Usuarios</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin/clientes');?>">
                            <div class="panel-footer">
                                <span class="pull-left">Ver mais</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($leiloesdp->num_rows());?></div>
                                    <div>Leilões disponiveis!</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin/leiloes');?>">
                            <div class="panel-footer">
                                <span class="pull-left">Ver detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-10">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($payments->num_rows());?></div>
                                    <div>Pagamentos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver mais</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-10">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format($leiloesep->num_rows());?></div>
                                    <div>Leilões finalizados!</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('admin/leiloes');?>">
                            <div class="panel-footer">
                                <span class="pull-left">Ver mais</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->


        </div>






        <?php endif;?>

        <div class="modal fade" id="cotacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nova cotação</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php

                            if(isset($_POST['insert']) and $_POST['insert'] == 123456):


                                $cotacao = str_replace("<table>", "<table class='table'>", $_POST['cotacao']);


                                $ddpup['cotacao'] = $cotacao;
                                $this->db->insert('cotacao', $ddpup);
                                redirect('admin/leiloes', 'refresh');
                                
                            endif;
                            ?>
                            <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('admin/leiloes');?>">
                                <input type="hidden" name="insert" value="123456">
                                <textarea id="mytextarea" name="cotacao"></textarea>
                                <script>
                                    CKEDITOR.replace('cotacao',{
                                            toolbar: [
                                                { name: 'styles', items: [ 'Styles', 'Format' ] },
                                                { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
                                                { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
                                                { name: 'links', items: [ 'Link', 'Unlink' ] },
                                                { name: 'insert', items: [ 'Table' ] },
                                                { name: 'editing', items: [ 'Scayt' ] }
                                            ]
                                        }
                                    );
                                </script>
                                <button type="submit" class="btn btn-primary">Adidionar cotação</button>
                                </form>

                                <?php

                                    if(isset($_POST['delete']) and $_POST['delete'] == 123456):
                                        $this->db->truncate('cotacao');
                                        redirect('admin/leiloes', 'refresh');
                                    endif;
                                ?>
                                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('admin/leiloes');?>" style="margin-top:30px;">
                                    <input type="hidden" name="delete" value="123456">
                                    <button type="submit" class="btn btn-primary">Excluir todas as cotações</button>
                                </form>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
            </div>

        </div>
    </div>
</div>

    <?php
    if($leiloes == 1):

        ?>
        <div id="page-wrapper" style="min-height: 611px;">
        <div class="row">
        <div>

<br>

            <!-- Modal -->
            <div class="modal fade" id="newleilao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Novo leilão</h4>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php

                                        if(isset($_POST['insert']) and $_POST['insert'] == 15154):

                                            $imagecript = md5(rand(1,20045));

                                            $destino = 'assets/images/leilao/'.$imagecript.'.jpg';

                                            $arquivo_tmp = $_FILES['imageed']['tmp_name'];

                                          $move = move_uploaded_file( $arquivo_tmp, $destino  );

                                            $ddpup['peso_lote'] = $_POST['pesot'];
                                            $ddpup['classificacao'] = $_POST['class'];
                                            $ddpup['peso_individual'] = $_POST['pesoind'];
                                            $ddpup['caracteristicas_processamento'] = $_POST['cpp'];
                                            $ddpup['caracteristicas_embalagem'] = $_POST['ccemb'];
                                            $ddpup['condicao_pagamento'] = $_POST['cntpay'];
                                            $ddpup['localidade_origem'] = $_POST['lcco'];
                                            $ddpup['produtor_name'] = $_POST['nmprod'];
                                            $ddpup['previsao'] = $_POST['despescas'];
                                            $ddpup['titulo'] = $_POST['titulo'];
                                            $ddpup['breve_descricao'] = $_POST['brevedescricao'];
                                            $ddpup['descricao'] = $_POST['descricao'];
                                            //$ddpup['image'] = $_GET[''];
                                            $ddpup['valor_min'] = $_POST['minvalue'];
                                            $ddpup['image'] = 'assets/images/leilao/'.$imagecript.'.jpg';
                                            $ddpup['valor_max'] = $_POST['maxvalue'];
                                            $ddpup['status'] = 1;
                                            $ddpup['type'] = 1;
                                            $ddpup['by'] = $_SESSION['ID'];

                                            $datas = explode(' ',$_POST['inicioleilaoed']);

                                            $mdy_ex =  explode('/',$datas[0]);
                                            $dia = $mdy_ex[0];
                                            $mes = $mdy_ex[1];
                                            $ano = $mdy_ex[2];

                                            $hms = explode(':',$datas[1]);

                                            $hrs = $hms[0];
                                            $min = $hms[1];
                                            $sec = $hms[2];
                                            $postdatain = $ano.$mes.$dia.$hrs.$min.$sec;


                                            $ddpup['data_inicio'] = $postdatain;
                                            $this->db->insert('leiloes', $ddpup);
                                            redirect('admin/leiloes', 'refresh');
                                        endif;
                                        ?>
                                        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('admin/leiloes');?>">

                                            <input type="hidden" name="insert" value="15154">
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
                                                            <input  name="despescas" id="datainput" type="text" placeholder="00/00/0000" >
                                                        </div><br>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane active" id="imediato">

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label>Titulo</label>
                                                <input required class="form-control" name="titulo" size="60" >
                                            </div><br>
                                          



                                            <div class="form-group">
                                                <label>Peso Total do Lote em Kg:</label>
                                                <input required class="form-control" name="pesot" id="maxkinput" placeholder="
Peso Total do lote
" size="66" >
                                            </div><br>
<div class="form-group">
                                                <label>Peso Médio Individual em Kg:</label>
                                                <input required name="pesoind" id="minkinput" class="form-control" placeholder="Peso individual:" size="66" >
                                            </div><br>

                                             <div class="form-group">
                                                <label>Classificação:</label>
                                                <select id="classificacao" name="class" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Inteiro Fresco">Inteiro Fresco</option>
                                                    <option value="Inteiro Congelado">Inteiro Congelado</option>
                                                    <option value="Processado Congelado">Processado Congelado</option>
                                                     <option value="Processado Fresco">Processado Fresco</option>
                                                </select>
                                            </div><br>

                                            <div class="form-group">
                                                <label>Característica de processamento:</label>
                                                <select id="cpp" name="cpp" class="form-control">
                                                    <option value=""></option>
                                                    
                                                </select>
                                            </div><br>

                                            <div class="form-group">
                                                <label>Caracteristicas da embalagem</label>
                                                <input required name="ccemb" class="form-control" placeholder="Caracteristicas da embalagem:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Condições de pagamento:</label>
                                                <input required name="cntpay" class="form-control" placeholder="Condições de pagamento:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Localidade de origem:</label>
                                                <input required name="lcco" class="form-control" placeholder="Localidade de origem:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Nome do produtor:</label>
                                                <input required name="nmprod" class="form-control" placeholder="Localidade de origem:" size="66" >
                                            </div><br>
                                            <div style="display:none;">
                                            <div class="form-group">
                                                <label>Breve descrição</label>
                                                <input class="form-control" name="brevedescricao" size="66" >
                                            </div><br><br>
                                        </div>
                                            <div class="form-group">
                                                <label>Descrição</label>
                                                <textarea  class="form-control" name="descricao" rows="5"></textarea>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Valor Máximo por Kg </label>
                                                <input required class="form-control" placeholder="0.00" id="maxvalue" name="maxvalue" size="66"  >
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Valor minimo por kg</label>
                                                <input required class="form-control" placeholder="0.00" id="minvalue" name="minvalue" size="66"  >

                                            </div><br><br>
                                            
                                            <div class="form-group">
                                                <label>Imagem</label><br>
                                                <input required name="imageed" id="imageed" type="file">
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label>Inicio do leilão</label>
                                                <input required name="inicioleilaoed" placeholder="00/00/0000 00:00:00" id="datatimeinput" type="text"  class="form-control">
                                                
                                            </div>



                                            <br>
                                            <button type="submit" class="btn btn-primary">Adidionar leilão</button>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Todos os leilões</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Leilões disponiveis</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Leilões finalizados</a></li>

                <li role="presentation"><a href="#settings" aria-controls="messages" role="tab" data-toggle="tab">Arrematados</a></li>

                <li role="presentation"><a href="#pendentes" aria-controls="messages" role="tab" data-toggle="tab">Pendentes</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#newleilao">Novo leilão</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#cotacao">Nova Cotação</a></li>
            </ul>

            <script>
                function deleteLeilao(leilao,classe) {
                    $("#"+classe+leilao+"").modal('hide');
                    $("#tableleilao"+leilao+"").remove();
                    $.post("<?php echo base_url('admin/leiloes');?>",{type:881564482,leilao:leilao},function (res) {});
                }
            </script>

            <?php if(isset($_POST['type']) and $_POST['type'] == 881564482):
                $this->db->where('id', $_POST['leilao']);
                $this->db->delete('leiloes');
            endif;
            ?>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="pendentes">

                    <br>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Exibindo todos os leilões pendentes
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">


                                    <div class="row"><div class="col-sm-12">

                                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                <thead>
                                                <tr role="row">
                                                    <th  tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 72px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 91px;">Titulo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 81px;">Data inicio</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor inicial</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor final</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Adicionado por</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Ações</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <script>
                                                    function deleteLeilaopen(leilao,classe) {
                                                        $("#"+classe+leilao+"").modal('hide');
                                                        $("#tableleilaopen"+leilao+"").remove();
                                                        $.post("<?php echo base_url('admin/leiloes');?>",{type:88156448842,leilao:leilao},function (res) {});
                                                    }
                                                </script>

                                                <?php

                                                if(isset($_POST['type']) and $_POST['type'] == '88156448842'):

                                                    $this->db->where('id', $_POST['leilao']);
                                                    $this->db->delete('leiloes_pendentes');

                                                endif;

                                                ?>
                                                <?php

                                                $query = $this->db->select('*')->from('leiloes_pendentes')->order_by('id', 'desc')->get();

                                                $rowcount = $query->num_rows();
                                                $dates1 = $query->result_array();
                                                if($rowcount > 0):

                                                    foreach ($dates1 as $dds){

                                                        $endleilao = $dds['data_fim'];
                                                        $anof = substr($endleilao, 0, 4);
                                                        $mesf = substr($endleilao, 4, 2);
                                                        $diaf = substr($endleilao, 6, 2);
                                                        $horaf = substr($endleilao, 8, 2);
                                                        $minutof = substr($endleilao, 10, 2);
                                                        $segundof = substr($endleilao, 12, 2);


                                                        $inileilao = $dds['data_inicio'];
                                                        $anoi = substr($inileilao, 0, 4);
                                                        $mesi = substr($inileilao, 4, 2);
                                                        $diai = substr($inileilao, 6, 2);
                                                        $horai = substr($inileilao, 8, 2);
                                                        $minutoi = substr($inileilao, 10, 2);
                                                        $segundoi = substr($inileilao, 12, 2);

                                                        $datainicio = $anoi.'-'.$mesi.'-'.$diai.'T'.$horai.':'.$minutoi.':'.$segundoi;


                                                        ?>


                                                        <!-- Modal -->
                                                        <div class="modal fade" id="leilaodeletepen<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel">Deletar leilão</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Tem certeza que deseja deletar isso?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-primary" onclick="deleteLeilaopen(<?php echo $dds['id'];?>,'leilaodelete');">Deletar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if($dds['status'] == 1):?>

                                                            <div class="modal fade" id="leilaoeditpen<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel">Editar leilão numero <b><?php echo $dds['id'];?></b></h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading">

                                                                                </div>
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <?php

                                                                                            if(isset($_POST['editpen']) and $_POST['editpen'] == 15154):

                          if(!empty($_FILES['imageed']['name'])):

                                                                                                    $imagecript = md5(rand(1,20045));

                                                                                                    $destino = 'assets/images/leilao/'.$imagecript.'.jpg';

                                                                                                    $arquivo_tmp = $_FILES['imageed']['tmp_name'];
                                                                                                    $move = move_uploaded_file( $arquivo_tmp, $destino  );
                                                                                                    $ddpup['image'] = 'assets/images/leilao/'.$imagecript.'.jpg';

                          else:
                              $ddpup['image'] = $dds['image'];

                                                                                                endif;
$ddpup['nome_cientifico_br'] = $dds['nome_cientifico_br'];
         $ddpup['nome_cientifico_en'] = $dds['nome_cientifico_en'];
             $ddpup['nome_cientifico_fr'] = $dds['nome_cientifico_fr'];
                $ddpup['nome_cientifico_es'] = $dds['nome_cientifico_es'];
                    $ddpup['peso_lote'] = $dds['peso_lote'];
                 $ddpup['classificacao'] = $dds['classificacao'];
              $ddpup['peso_individual'] = $dds['peso_individual'];
                                                                                                $ddpup['caracteristicas_processamento'] = $dds['caracteristicas_processamento'];
                                                                                                $ddpup['caracteristicas_embalagem'] = $dds['caracteristicas_embalagem'];
    $ddpup['condicao_pagamento'] = $dds['condicao_pagamento'];
           $ddpup['localidade_origem'] = $dds['localidade_origem'];
              $ddpup['produtor_name'] = $dds['produtor_name'];
               $ddpup['previsao'] = $dds['previsao'];

                                                                                                $ddpup['titulo'] = $_POST['titulo'];
                                                                                                $ddpup['breve_descricao'] = $_POST['brevedescricao'];
                                                                                                $ddpup['descricao'] = $_POST['descricao'];
                                                                                                //$ddpup['image'] = $_GET[''];
                                                                                                $ddpup['valor_min'] = $_POST['minvalue'];
                                                                                                $ddpup['valor_max'] = $_POST['maxvalue'];
                                                                                                $ddpup['status'] = 1;
                                                                                                $ddpup['type'] = 1;
                                                                                                $ddpup['by'] = $dds['by'];

                                                                                                $datas = explode(' ',$_POST['inicioleilaoed']);

                                                                                                $mdy_ex =  explode('/',$datas[0]);
                                                                                                $dia = $mdy_ex[0];
                                                                                                $mes = $mdy_ex[1];
                                                                                                $ano = $mdy_ex[2];

                                                                                                $hms = explode(':',$datas[1]);

                                                                                                $hrs = $hms[0];
                                                                                                $min = $hms[1];
                                                                                                $sec = $hms[2];
                               $postdatain = $ano.$mes.$dia.$hrs.$min.$sec;

                                                         $ddpup['data_inicio'] = $postdatain;


                                                                                                $ddpup['data_fim'] = '';
                                                                                                $this->db->where('id', $_POST['leilao']);
                                                                                                $this->db->insert('leiloes', $ddpup);

                                                                                                $this->db->where('id', $_POST['leilao']);
                                                                                                $this->db->delete('leiloes_pendentes');




                                                                                                $daten['id_user'] = $_POST['ID'];
                                                                                                $daten['titulo'] = 'Leilão aprovado.';
                                                                                                $daten['imagem'] = 'http://www.iconarchive.com/download/i86039/graphicloads/100-flat-2/check-1.ico';
                                                                                                $daten['texto'] = 'Sei leilão foi cadastrado com sucesso, as informações de datas podem ter sido alteradas, confira os detalhes na timeline dos leilões.';
                                                                                                $daten['url'] = '#';
                                                                                                $this->db->insert('notify', $daten);
                                                                                                $lastn = $this->db->insert_id();

                                                                                                $datenv['id_user'] = $_POST['ID'];
                                                                                                $datenv['id_notify'] = $lastn;
                                                                                                $this->db->insert('notify_read', $datenv);

                                                                                                redirect('admin/leiloes', 'refresh');

                                                                                            endif;
                                                                                            ?>

                                                                                            <script>
                                                                   $('#simfimldateedss<?php echo $dds['id'];?>').mask('00/00/0000 00:00:00');

                                                                                            </script>
                                                                                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/leiloes');?>">

                                                                                                <input type="hidden" name="editpen" value="15154">
                                                                                                <input type="hidden" name="ID" value="<?php echo $dds['by'];?>">
                                                                                                <input type="hidden" name="leilao" value="<?php echo $dds['id'];?>">
                                                                                                <div class="form-group">
                                                                                                    <label>Titulo</label>
                                                                                                    <input required class="form-control" name="titulo" size="60" value="<?php echo $dds['titulo']; ?>" >
                                                                                                </div><br>

                                                                                              

                                                                                                <div class="form-group">
                                                                                                    <label>Peso Total do lote:</label>
                                                                                                    <input required class="form-control" value="<?php echo $dds['peso_lote'];?>" id="maxkinput4" name="pesot" placeholder="
Peso Total do lote
" size="66" >
                                                                                                </div><br>


                                                                                                <div class="form-group">
                                                                                                    <label>Classificação:</label>
                                                                                                    <input required name="class" class="form-control" value="<?php echo $dds['classificacao'];?>"  placeholder="Classificação: " size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Peso individual:</label>
                                                                                                    <input required name="pesoind" class="form-control" value="<?php echo $dds['peso_individual'];?>" id="minkinput4" placeholder="Peso individual:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Característica de processamento:</label>
                                                                                                    <input required name="cpp" class="form-control" value="<?php echo $dds['caracteristicas_processamento'];?>" placeholder="Característica de processamento:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Caracteristicas da embalagem</label>
                                                                                                    <input required name="ccemb" class="form-control" value="<?php echo $dds['caracteristicas_embalagem'];?>" placeholder="Caracteristicas da embalagem:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Condições de pagamento:</label>
                                                                                                    <input required name="cntpay" class="form-control" value="<?php echo $dds['condicao_pagamento'];?>" placeholder="Condições de pagamento:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Localidade de origem:</label>
                                                                                                    <input required name="lcco" class="form-control" value="<?php echo $dds['localidade_origem'];?>" placeholder="Localidade de origem:" size="66" >
                                                                                                </div><br>
                                                                                                <div style="display:none;">
                                                                                                <div class="form-group">
                                                                                                    <label>Breve descrição</label>
                                                                                                    <input class="form-control" name="brevedescricao" size="66" value="<?php echo $dds['titulo']; ?>" >
                                                                                                </div><br><br>
                                                                                            </div>
                                                                                                <div class="form-group">
                                                                                                    <label>Descrição</label>
                                                                                                    <textarea  class="form-control" name="descricao" rows="5"><?php echo $dds['descricao'];?></textarea>
                                                                                                </div><br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Valor minimo</label>
                                                                                                    <input required class="form-control" id="minvalue4" name="minvalue" size="66" value="<?php echo $dds['valor_min'];?>" >

                                                                                                </div><br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Valor maximo</label>
                                                                                                    <input required class="form-control" id="maxvalue4" name="maxvalue" size="66" value="<?php echo $dds['valor_max'];?>" >
                                                                                                </div><br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Imagem</label><br>
                                                                                                    <img src="<?php echo base_url($dds['image']);?>" style="width: 120px;object-fit: cover; object-position: center;"><br>
                                                                                                    <input name="imageed" type="file">
                                                                                                </div>
                                                                                                <br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Inicio do leilão</label>
                                                                                                    <input required name="inicioleilaoed" id="datatimeinput4" value="<?php echo $dds['data_inicio'];?>" type="text"  class="form-control">
                                                                                                </div>

                                                                                                <br>
                                                                                                <?php



                                                                                                ?>
                                                                                                <button type="submit" class="btn btn-default">Postar leilão</button>
                                                                                            </form>
                                                                                        </div>

                                                                                    </div>
                                                                                    <!-- /.row (nested) -->
                                                                                </div>
                                                                                <!-- /.panel-body -->
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif;?>

                                                        <tr id="tableleilaopen<?php echo $dds['id'];?>" class="gradeA odd" role="row">
                                                            <td class="sorting_1"><?php echo $dds['id'];?></td>
                                                            <td><?php echo $dds['titulo'];?></td>
                                                            <td><?php echo $dds['data_inicio'];?></td>
                                                        
                                                            <td class="center">R$ <?php echo number_format($dds['valor_max'],2,'.',',');?></td>
                                                            <td class="center">R$ <?php echo number_format($dds['valor_min'],2,'.',',');?></td>
                                                            <td class="center">

                                                                <?php
                                                                if($dds['by'] == $_SESSION['ID']):

                                                                    echo '<b class="text-info">Administrador</b>';
                                                                else:
                                                                    echo '<a href="'.base_url('admin/clientes?q=').$dds['by'].'&uniqueid=1" target="_blank"><b class="text-warning">Usuario '.$dds['by'].'</b></a>';


                                                                endif;
                                                                ?>

                                                            </td>
                                                            <td class="center" style="text-align: center;">
                                                                <?php if($dds['status'] == 1):?>
                                                                    <span  data-toggle="tooltip" data-placement="top" title="Editar item">    <i data-toggle="modal" data-target="#leilaoeditpen<?php echo $dds['id']?>" style="cursor: pointer;" class="fa fa-edit text-info"></i></span>&nbsp;&nbsp;&nbsp;
                                                                <?php endif;?>
                                                                <span  data-toggle="tooltip" data-placement="top" title="Excluir item">     <i  data-toggle="modal" data-target="#leilaodeletepen<?php echo $dds['id']?>"  style="cursor: pointer;" class="fa fa-close text-danger"></i></span></td>
                                                        </tr>
                                                    <?php }
                                                else:
                                                    ?>
                                                    <tr class="gradeA odd" role="row">
                                                        <td class="sorting_1">-- --</td>
                                                        <td>-- --</td>
                                                        <td>-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                    </tr>
                                                <?php endif;
                                                ?>
                                                </tbody>
                                            </table></div></div>


                                    <!--<div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>

                                <div class="well">
                                    <h4>DataTables Usage Information</h4>
                                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>   <!-- /.panel-body -->
                                </div>
                            </div>

                        </div>
                        <!-- /.panel -->
                    </div>
                    </div>
                <div role="tabpanel" class="tab-pane active" id="home">
                    <br>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Exibindo todos os leilões cadastrados
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">


                                    <div class="row"><div class="col-sm-12">

                                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                <thead>
                                                <tr role="row">
                                                    <th  tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 72px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 91px;">Titulo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 81px;">Data inicio</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor inicial</th>

                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor final</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Adicionado por</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Situação</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Ações</th>

                                                </tr>
                                                </thead>
                                                <tbody>
<?php

$query = $this->db->select('*')->from('leiloes')->order_by('id', 'desc')->get();

$rowcount = $query->num_rows();
$dates1 = $query->result_array();
if($rowcount > 0):

    foreach ($dates1 as $dds){




        $inileilao = $dds['data_inicio'];
        $anoi = substr($inileilao, 0, 4);
        $mesi = substr($inileilao, 4, 2);
        $diai = substr($inileilao, 6, 2);
        $horai = substr($inileilao, 8, 2);
        $minutoi = substr($inileilao, 10, 2);
        $segundoi = substr($inileilao, 12, 2);



        $dcin = $diai.'/'.$mesi.'/'.$anoi.' '.$horai.':'.$minutoi.':'.$segundoi;

?>


        <!-- Modal -->
        <div class="modal fade" id="leilaodelete<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Deletar leilão</h4>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja deletar isso?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="deleteLeilao(<?php echo $dds['id'];?>,'leilaodelete');">Deletar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php if($dds['status'] == 1):?>

        <div class="modal fade" id="leilaoedit<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Editar leilão numero <b><?php echo $dds['id'];?></b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                                </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">


                                        <?php

                                        if(isset($_POST['edit']) and $_POST['edit'] == 15154):

                                            if(!empty($_FILES['imageed']['name'])):

                                                $imagecript = md5(rand(1,20045));

                                                $destino = 'assets/images/leilao/'.$imagecript.'.jpg';

                                                $arquivo_tmp = $_FILES['imageed']['tmp_name'];

                                                $move = move_uploaded_file( $arquivo_tmp, $destino  );
                                                $ddpup['image'] = 'assets/images/leilao/'.$imagecript.'.jpg';

                                                endif;

                                            $ddpup['nome_cientifico_br'] = $dds['nome_cientifico_br'];
                                            $ddpup['nome_cientifico_en'] = $dds['nome_cientifico_en'];
                                            $ddpup['nome_cientifico_fr'] = $dds['nome_cientifico_fr'];
                                            $ddpup['nome_cientifico_es'] = $dds['nome_cientifico_es'];
                                            $ddpup['peso_lote'] = $dds['peso_lote'];
                                            $ddpup['classificacao'] = $dds['classificacao'];
                                            $ddpup['peso_individual'] = $dds['peso_individual'];
                                            $ddpup['caracteristicas_processamento'] = $dds['caracteristicas_processamento'];
                                            $ddpup['caracteristicas_embalagem'] = $dds['caracteristicas_embalagem'];
                                            $ddpup['condicao_pagamento'] = $dds['condicao_pagamento'];
                                            $ddpup['localidade_origem'] = $dds['localidade_origem'];
                                            $ddpup['produtor_name'] = $dds['produtor_name'];
                                            $ddpup['previsao'] = $dds['previsao'];

                                            $ddpup['titulo'] = $_POST['titulo'];
                                            $ddpup['breve_descricao'] = $_POST['brevedescricao'];
                                            $ddpup['descricao'] = $_POST['descricao'];
                                            //$ddpup['image'] = $_GET[''];
                                            $ddpup['valor_min'] = str_replace("," , "" , $_POST['minvalue']);
                                            $ddpup['valor_max'] = str_replace("," , "" , $_POST['maxvalue']);



                                            $datas = explode(' ',$_POST['inicioleilaoed']);

                                            $mdy_ex =  explode('/',$datas[0]);
                                            $dia = $mdy_ex[0];
                                            $mes = $mdy_ex[1];
                                            $ano = $mdy_ex[2];

                                            $hms = explode(':',$datas[1]);

                                            $hrs = $hms[0];
                                            $min = $hms[1];
                                            $sec = $hms[2];
                                            $postdatain = $ano.$mes.$dia.$hrs.$min.$sec;


                                            $ddpup['data_inicio'] = $postdatain;

                                            $this->db->where('id', $_POST['leilao']);
                                            $this->db->update('leiloes', $ddpup);

                                            redirect('admin/leiloes', 'refresh');

                                        endif;
                                        ?>
                                        <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/leiloes');?>">

                                          <input type="hidden" name="edit" value="15154">
                                          <input type="hidden" name="leilao" value="<?php echo $dds['id'];?>">
                                            <div class="form-group">
                                                <label>Titulo</label>
                                                <input required class="form-control" name="titulo" size="60" value="<?php echo $dds['titulo']; ?>" >
                                            </div><br>
                                            <br>


                                            <div class="form-group">
                                                <label>Peso Total do lote:</label>
                                                <input required class="form-control" id="maxkinput2" value="<?php echo $dds['peso_lote'];?>" name="pesot" placeholder="
Peso Total do lote
" size="66" >
                                            </div><br>


                                            <div class="form-group">
                                                <label>Classificação:</label>
                                                <input required name="class" class="form-control" value="<?php echo $dds['classificacao'];?>" placeholder="Classificação: " size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Peso individual:</label>
                                                <input required name="pesoind" id="minkinput2" class="form-control" value="<?php echo $dds['peso_individual'];?>" placeholder="Peso individual:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Característica de processamento:</label>
                                                <input required name="cpp" class="form-control" value="<?php echo $dds['caracteristicas_processamento'];?>" placeholder="Característica de processamento:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Caracteristicas da embalagem</label>
                                                <input required name="ccemb" class="form-control" value="<?php echo $dds['caracteristicas_embalagem'];?>" placeholder="Caracteristicas da embalagem:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Condições de pagamento:</label>
                                                <input required name="cntpay" class="form-control" value="<?php echo $dds['condicao_pagamento'];?>" placeholder="Condições de pagamento:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Localidade de origem:</label>
                                                <input required name="lcco" class="form-control" value="<?php echo $dds['localidade_origem'];?>" placeholder="Localidade de origem:" size="66" >
                                            </div><br>

                                            <div class="form-group">
                                                <label>Breve descrição</label>
                                                <input required class="form-control" name="brevedescricao" size="66" value="<?php echo $dds['titulo']; ?>" >
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Descrição</label>
                                                <textarea  class="form-control" name="descricao" rows="5"><?php echo $dds['descricao'];?></textarea>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Valor minimo</label>
                                                <input required class="form-control" id="minvalue2" name="minvalue" size="66" value="<?php echo $dds['valor_min'];?>" >

                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Valor maximo</label>
                                                <input required class="form-control" id="maxvalue2" name="maxvalue" size="66" value="<?php echo $dds['valor_max'];?>" >
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Imagem</label><br>
                                                <img src="<?php echo base_url($dds['image']);?>" style="width: 120px;object-fit: cover; object-position: center;"><br>
                                                <input name="imageed" type="file">
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label>Inicio do leilão</label>
                                                <input required id="datatimeinput2" name="inicioleilaoed" value="<?php

                                                echo $dcin;

                                                ?>"  type="text"  class="form-control">
                                                <p class="help-block">Dia e hora do fim do leilão </p>
                                            </div>



<br>
                                            <button type="submit" class="btn btn-default">Alterar dados</button>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php endif;?>

                                                <tr id="tableleilao<?php echo $dds['id'];?>" class="gradeA odd" role="row">
                                                    <td class="sorting_1"><?php echo $dds['id'];?></td>
                                                    <td><?php echo $dds['titulo'];?></td>
                                                            <td><?php echo $dcin;?></td>
                                                    <td class="center">R$ <?php echo number_format($dds['valor_max'],2,'.',',');?></td>
                                                    <td class="center">R$ <?php echo number_format($dds['valor_min'],2,'.',',');?></td>
                                                    <td class="center">

                                                        <?php
                                                        if($dds['by'] == $_SESSION['ID']):

                                                            echo '<b class="text-info">Administrador</b>';
                                                            else:
                                                                echo '<a href="'.base_url('admin/clientes?q=').$dds['by'].'&uniqueid=1"><b class="text-warning">Usuario '.$dds['by'].'</b></a>';


                                                        endif;
                                                        ?>

                                                    </td>

                                                    <td class="center">

                                                        <?php
                                                        if($dds['status'] == 2555):

                                                            echo '<a href="'.base_url('admin/clientes?q=').$dds['by'].'&uniqueid=1"><b class="text-success">Arrematado</b></a>';

                                                        endif;
                                                        ?>
                                                        <?php
                                                        if($dds['status'] == 1):

                                                            echo '<b class="text-info">Disponivel</b>';

                                                        endif;
                                                        ?>

                                                        <?php
                                                        if($dds['status'] == 0):

                                                            echo '<b class="text-danger">Finalizado</b>';

                                                        endif;
                                                        ?>

                                                    </td>
                                                    <td class="center" style="text-align: center;">
        <?php if($dds['status'] == 1):?>
                                                        <span  data-toggle="tooltip" data-placement="top" title="Editar item">    <i data-toggle="modal" data-target="#leilaoedit<?php echo $dds['id']?>" style="cursor: pointer;" class="fa fa-edit text-info"></i></span>&nbsp;&nbsp;&nbsp;
                                                        <?php endif;?>
                                                   <span  data-toggle="tooltip" data-placement="top" title="Excluir item">     <i  data-toggle="modal" data-target="#leilaodelete<?php echo $dds['id']?>"  style="cursor: pointer;" class="fa fa-close text-danger"></i></span></td>
                                                </tr>
    <?php }
else:
?>
    <tr class="gradeA odd" role="row">
        <td class="sorting_1">-- --</td>
        <td>-- --</td>
        <td>-- --</td>
        <td class="center">-- --</td>
        <td class="center">-- --</td>
        <td class="center">-- --</td>
        <td class="center">-- --</td>
    </tr>
    <?php endif;
?>
</tbody>
                                            </table></div></div>


                                    <!--<div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>

                                <div class="well">
                                    <h4>DataTables Usage Information</h4>
                                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>   <!-- /.panel-body -->
                                </div>
                            </div>

                        </div>
                        <!-- /.panel -->
                    </div>

                </div>


                <div role="tabpanel" class="tab-pane" id="profile">
                    <br>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Exibindo todos os leilões disponiveis
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">


                                    <div class="row"><div class="col-sm-12">

                                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                <thead>
                                                <tr role="row">
                                                    <th  tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 72px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 91px;">Titulo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 81px;">Data inicio</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor inicial</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor final</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Adicionado por</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Ações</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php

                                                $sql = "SELECT * FROM leiloes WHERE status=? ORDER BY id DESC";
                                                $query =  $this->db->query($sql, array(1));

                                                $rowcount = $query->num_rows();
                                                $dates1 = $query->result_array();
                                                if($rowcount > 0):

                                                    foreach ($dates1 as $dds){

                                                        $endleilao = $dds['data_inicio'];
                                                        $anof = substr($endleilao, 0, 4);
                                                        $mesf = substr($endleilao, 4, 2);
                                                        $diaf = substr($endleilao, 6, 2);
                                                        $horaf = substr($endleilao, 8, 2);
                                                        $minutof = substr($endleilao, 10, 2);
                                                        $segundof = substr($endleilao, 12, 2);




                                                        ?>


                                                        <!-- Modal -->
                                                        <div class="modal fade" id="leilaodeleted<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel">Deletar leilão</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Tem certeza que deseja deletar isso?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-primary" onclick="deleteLeilao(<?php echo $dds['id'];?>,'leilaodeleted');">Deletar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if($dds['status'] == 1):?>

                                                            <div class="modal fade" id="leilaoeditd<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel">Editar leilão numero <b><?php echo $dds['id'];?></b></h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading">

                                                                                </div>
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <?php

                                                                                            if(isset($_POST['edit']) and $_POST['edit'] == 15154):

                                                                                                if(!empty($_FILES['imageed']['name'])):

                                                                                                    $imagecript = md5(rand(1,20045));

                                                                                                    $destino = 'assets/images/leilao/'.$imagecript.'.jpg';

                                                                                                    $arquivo_tmp = $_FILES['imageed']['tmp_name'];

                                                                                                    $move = move_uploaded_file( $arquivo_tmp, $destino  );
                                                                                                    $ddpup['image'] = 'assets/images/leilao/'.$imagecript.'.jpg';

                                                                                                endif;
                                                                                                $ddpup['nome_cientifico_br'] = $dds['nome_cientifico_br'];
                                                                                                $ddpup['nome_cientifico_en'] = $dds['nome_cientifico_en'];
                                                                                                $ddpup['nome_cientifico_fr'] = $dds['nome_cientifico_fr'];
                                                                                                $ddpup['nome_cientifico_es'] = $dds['nome_cientifico_es'];
                                                                                                $ddpup['peso_lote'] = $dds['peso_lote'];
                                                                                                $ddpup['classificacao'] = $dds['classificacao'];
                                                                                                $ddpup['peso_individual'] = $dds['peso_individual'];
                                                                                                $ddpup['caracteristicas_processamento'] = $dds['caracteristicas_processamento'];
                                                                                                $ddpup['caracteristicas_embalagem'] = $dds['caracteristicas_embalagem'];
                                                                                                $ddpup['condicao_pagamento'] = $dds['condicao_pagamento'];
                                                                                                $ddpup['localidade_origem'] = $dds['localidade_origem'];
                                                                                                $ddpup['produtor_name'] = $dds['produtor_name'];
                                                                                                $ddpup['previsao'] = $dds['previsao'];

                                                                                                $ddpup['titulo'] = $_POST['titulo'];
                                                                                                $ddpup['breve_descricao'] = $_POST['brevedescricao'];
                                                                                                $ddpup['descricao'] = $_POST['descricao'];
                                                                                                //$ddpup['image'] = $_GET[''];
                                                                                                $ddpup['valor_min'] = $_POST['minvalue'];
                                                                                                $ddpup['valor_max'] = $_POST['maxvalue'];

                                                                                                $datas = explode(' ',$_POST['inicioleilaoed']);

                                                                                                $mdy_ex =  explode('/',$datas[0]);
                                                                                                $dia = $mdy_ex[0];
                                                                                                $mes = $mdy_ex[1];
                                                                                                $ano = $mdy_ex[2];

                                                                                                $hms = explode(':',$datas[1]);

                                                                                                $hrs = $hms[0];
                                                                                                $min = $hms[1];
                                                                                                $sec = $hms[2];
                                                                                                $postdatain = $ano.$mes.$dia.$hrs.$min.$sec;
                                                                                                $ddpup['data_inicio'] = $postdatain;

                                                                                                $this->db->where('id', $_POST['leilao']);
                                                                                                $this->db->update('leiloes', $ddpup);

                                                                                                redirect('admin/leiloes', 'refresh');

                                                                                            endif;
                                                                                            ?>


                                                                                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/leiloes');?>">

                                                                                                <input type="hidden" name="edit" value="15154">
                                                                                                <input type="hidden" name="leilao" value="<?php echo $dds['id'];?>">
                                                                                                <div class="form-group">
                                                                                                    <label>Titulo</label>
                                                                                                    <input required class="form-control" name="titulo" size="60" value="<?php echo $dds['titulo']; ?>" >
                                                                                                </div><br>
                                                                                                <br>


                                                                                                <div class="form-group">
                                                                                                    <label>Peso Total do lote:</label>
                                                                                                    <input required class="form-control" id="maxkinput3" value="<?php echo $dds['peso_lote'];?>" name="pesot" placeholder="
Peso Total do lote
" size="66" >
                                                                                                </div><br>


                                                                                                <div class="form-group">
                                                                                                    <label>Classificação:</label>
                                                                                                    <input required name="class" class="form-control" value="<?php echo $dds['classificacao'];?>" placeholder="Classificação: " size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Peso individual:</label>
                                                                                                    <input required name="pesoind" id="minkinput3" class="form-control" value="<?php echo $dds['peso_individual'];?>" placeholder="Peso individual:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Característica de processamento:</label>
                                                                                                    <input required name="cpp" class="form-control" value="<?php echo $dds['caracteristicas_processamento'];?>" placeholder="Característica de processamento:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Caracteristicas da embalagem</label>
                                                                                                    <input required name="ccemb" class="form-control" value="<?php echo $dds['caracteristicas_embalagem'];?>" placeholder="Caracteristicas da embalagem:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Condições de pagamento:</label>
                                                                                                    <input required name="cntpay" class="form-control" value="<?php echo $dds['condicao_pagamento'];?>" placeholder="Condições de pagamento:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Localidade de origem:</label>
                                                                                                    <input required name="lcco" class="form-control" value="<?php echo $dds['localidade_origem'];?>" placeholder="Localidade de origem:" size="66" >
                                                                                                </div><br>

                                                                                                <div class="form-group">
                                                                                                    <label>Breve descrição</label>
                                                                                                    <input required class="form-control" name="brevedescricao" size="66" value="<?php echo $dds['titulo']; ?>" >
                                                                                                </div><br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Descrição</label>
                                                                                                    <textarea  class="form-control" name="descricao" rows="5"><?php echo $dds['descricao'];?></textarea>
                                                                                                </div><br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Valor minimo</label>
                                                                                                    <input required class="form-control" id="minvalue3" name="minvalue" size="66" value="<?php echo $dds['valor_min'];?>" >

                                                                                                </div><br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Valor maximo</label>
                                                                                                    <input required class="form-control" id="maxvalue3" name="maxvalue" size="66" value="<?php echo $dds['valor_max'];?>" >
                                                                                                </div><br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Imagem</label><br>
                                                                                                    <img src="<?php echo base_url($dds['image']);?>" style="width: 120px;object-fit: cover; object-position: center;"><br>
                                                                                                    <input name="imageed" type="file">
                                                                                                </div>
                                                                                                <br><br>
                                                                                                <div class="form-group">
                                                                                                    <label>Inicio do leilão</label>
                                                                                                    <input required id="datatimeinput3" name="inicioleilaoed" value="<?php

                                                                                                    echo $dcin;

                                                                                                    ?>"  type="text"  class="form-control">
                                                                                                    <p class="help-block">Dia e hora do fim do leilão </p>
                                                                                                </div>



                                                                                                <br>
                                                                                                <button type="submit" class="btn btn-default">Alterar dados</button>
                                                                                            </form>

                                                                                            </div><br><br>

                                                                                        </div>

                                                                                    </div>
                                                                                    <!-- /.row (nested) -->
                                                                                </div>
                                                                                <!-- /.panel-body -->
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif;?>

                                                        <tr id="tableleilao<?php echo $dds['id'];?>" class="gradeA odd" role="row">
                                                            <td class="sorting_1"><?php echo $dds['id'];?></td>
                                                            <td><?php echo $dds['titulo'];?></td>
                                                            <td class="center"><?php echo $diaf.'/'.$mesf.'/'.$anof.' '.$horaf.':'.$minutof.':'.$segundof;?></td>                                                            <td class="center">R$ <?php echo number_format($dds['valor_max'],2,'.',',');?></td>
                                                            <td class="center">R$ <?php echo number_format($dds['valor_min'],2,'.',',');?></td>
                                                            <td class="center">

                                                                <?php
                                                                if($dds['by'] == $_SESSION['ID']):

                                                                    echo '<b class="text-info">Administrador</b>';
                                                                else:
                                                                    echo '<a href="'.base_url('admin/clientes?q=').$dds['by'].'&uniqueid=1"><b class="text-warning">Usuario '.$dds['by'].'</b></a>';


                                                                endif;
                                                                ?>

                                                            </td>
                                                            <td class="center" style="text-align: center;">
                                                                <?php if($dds['status'] == 1):?>
                                                                    <span  data-toggle="tooltip" data-placement="top" title="Editar item">    <i data-toggle="modal" data-target="#leilaoeditd<?php echo $dds['id']?>" style="cursor: pointer;" class="fa fa-edit text-info"></i></span>&nbsp;&nbsp;&nbsp;
                                                                <?php endif;?>
                                                                <span  data-toggle="tooltip" data-placement="top" title="Excluir item">     <i  data-toggle="modal" data-target="#leilaodeleted<?php echo $dds['id']?>"  style="cursor: pointer;" class="fa fa-close text-danger"></i></span></td>
                                                        </tr>
                                                    <?php }
                                                else:
                                                    ?>
                                                    <tr class="gradeA odd" role="row">
                                                        <td class="sorting_1">-- --</td>
                                                        <td>-- --</td>
                                                        <td>-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                    </tr>
                                                <?php endif;
                                                ?>
                                                </tbody>
                                            </table></div></div>


                                    <!--<div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>

                                <div class="well">
                                    <h4>DataTables Usage Information</h4>
                                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>   <!-- /.panel-body -->
                                </div>
                            </div>

                        </div>
                        <!-- /.panel -->
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="messages"><br>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Exibindo todos os leilões finalizados
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">


                                    <div class="row"><div class="col-sm-12">

                                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                <thead>
                                                <tr role="row">
                                                    <th  tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 72px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 91px;">Titulo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 81px;">Data inicio</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor inicial</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor final</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Adicionado por</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Ações</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php

                                                $sql = "SELECT * FROM leiloes WHERE status!=? ORDER BY id DESC";
                                                $query =  $this->db->query($sql, array(1));

                                                $rowcount = $query->num_rows();
                                                $dates1 = $query->result_array();
                                                if($rowcount > 0):

                                                    foreach ($dates1 as $dds){

                                                        $endleilao = $dds['data_inicio'];
                                                        $anof = substr($endleilao, 0, 4);
                                                        $mesf = substr($endleilao, 4, 2);
                                                        $diaf = substr($endleilao, 6, 2);
                                                        $horaf = substr($endleilao, 8, 2);
                                                        $minutof = substr($endleilao, 10, 2);
                                                        $segundof = substr($endleilao, 12, 2);




                                                        ?>


                                                        <!-- Modal -->
                                                        <div class="modal fade" id="leilaodeletei<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel">Deletar leilão</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Tem certeza que deseja deletar isso?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-primary" onclick="deleteLeilao(<?php echo $dds['id'];?>,'leilaodeletei');">Deletar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if($dds['status'] == 1):?>

                                                            <div class="modal fade" id="leilaoediti<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel">Editar leilão numero <b><?php echo $dds['id'];?></b></h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading">

                                                                                </div>
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <?php

         if(isset($_POST['edit']) and $_POST['edit'] == 15154):

                                                                                                if(!empty($_FILES['imageed']['name'])):

                                                                                                    $imagecript = md5(rand(1,20045));

                                                                                                    $destino = 'assets/images/leilao/'.$imagecript.'.jpg';

                                                                                                    $arquivo_tmp = $_FILES['imageed']['tmp_name'];

                                                                                                    $move = move_uploaded_file( $arquivo_tmp, $destino  );
                                                                                                    $ddpup['image'] = 'assets/images/leilao/'.$imagecript.'.jpg';

                                                                                                endif;
 
             $ddpup['peso_lote'] = $dds['peso_lote'];
             $ddpup['classificacao'] = $dds['classificacao'];
             $ddpup['peso_individual'] = $dds['peso_individual'];
             $ddpup['caracteristicas_processamento'] = $dds['caracteristicas_processamento'];
             $ddpup['caracteristicas_embalagem'] = $dds['caracteristicas_embalagem'];
             $ddpup['condicao_pagamento'] = $dds['condicao_pagamento'];
             $ddpup['localidade_origem'] = $dds['localidade_origem'];
             $ddpup['produtor_name'] = $dds['produtor_name'];
             $ddpup['previsao'] = $dds['previsao'];

                                                                                                $ddpup['titulo'] = $_POST['titulo'];
                                                                                                $ddpup['breve_descricao'] = $_POST['brevedescricao'];
                                                                                                $ddpup['descricao'] = $_POST['descricao'];
                                                                                                //$ddpup['image'] = $_GET[''];
                                                                                                $ddpup['valor_min'] = $_POST['minvalue'];
                                                                                                $ddpup['valor_max'] = $_POST['maxvalue'];
                                         $ddpup['data_inicio'] = str_replace('T','',str_replace(':','',str_replace('/','',str_replace('-','',$_POST['inicioleilaoed']))));
                                                                                                $ddpup['data_fim'] = str_replace('T','',str_replace(':','',str_replace('/','',str_replace('-','',$_POST['fimleilaoed']))));
                                                                                                $this->db->where('id', $_POST['leilao']);
                                                                                                $this->db->update('leiloes', $ddpup);

                                                                                                redirect('admin/leiloes', 'refresh');

                                                                                            endif;
                                                                                            ?>

                                                                                        </div>

                                                                                    </div>
                                                                                    <!-- /.row (nested) -->
                                                                                </div>
                                                                                <!-- /.panel-body -->
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif;?>

                                                        <tr id="tableleilao<?php echo $dds['id'];?>" class="gradeA odd" role="row">
                                                            <td class="sorting_1"><?php echo $dds['id'];?></td>
                                                            <td><?php echo $dds['titulo'];?></td>
                                                            <td class="center"><?php echo $diaf.'/'.$mesf.'/'.$anof.' '.$horaf.':'.$minutof.':'.$segundof;?></td>
                                                            <td class="center">R$ <?php echo number_format($dds['valor_max'],2,'.',',');?></td>
                                                            <td class="center">R$ <?php echo number_format($dds['valor_min'],2,'.',',');?></td>
                                                            <td class="center">

                                                                <?php
                                                                if($dds['by'] == $_SESSION['ID']):

                                                                    echo '<b class="text-info">Administrador</b>';
                                                                else:
                                                                    echo '<a href="'.base_url('admin/clientes?q=').$dds['by'].'&uniqueid=1"><b class="text-warning">Usuario '.$dds['by'].'</b></a>';


                                                                endif;
                                                                ?>

                                                            </td>
                                                            <td class="center" style="text-align: center;">

                                                                <span  data-toggle="tooltip" data-placement="top" title="Excluir item">     <i  data-toggle="modal" data-target="#leilaodeletei<?php echo $dds['id']?>"  style="cursor: pointer;" class="fa fa-close text-danger"></i></span></td>
                                                        </tr>
                                                    <?php }
                                                else:
                                                    ?>
                                                    <tr class="gradeA odd" role="row">
                                                        <td class="sorting_1">-- --</td>
                                                        <td>-- --</td>
                                                        <td>-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                    </tr>
                                                <?php endif;
                                                ?>
                                                </tbody>
                                            </table></div></div>


                                </div>
                            </div>

                        </div>
                        <!-- /.panel -->
                    </div></div>
                <div role="tabpanel" class="tab-pane" id="settings">

<BR>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Exibindo todos os leilões arrematados
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">


                                    <div class="row"><div class="col-sm-12">

                                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                <thead>
                                                <tr role="row">
                                                    <th  tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 72px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 91px;">Titulo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 81px;">Data inicio</th>


                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor inicial</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Valor final</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Adicionado por</th>

                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">Ações</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <script>
                                                    function resolverarremate(leilao) {

                                                        $("#infoarremate"+leilao+"").modal('hide');
                                                        $("#arrematestableasd"+leilao+"").remove();
                                                        $.post("<?php echo base_url('admin/leiloes');?>",{type:15154231700,leilao:leilao},function(res){});

                                                    }
                                                </script>
                                                <?php

                                                if(isset($_POST['type']) and $_POST['type'] == 15154231700):
                                                    $ddpup['status'] = '0';
                                                    $this->db->where('id', $_POST['leilao']);
                                                    $this->db->update('leiloes', $ddpup);

                                                endif;

                                                ?>
                                                <?php

                                                $sql = "SELECT * FROM leiloes WHERE  status=? ORDER BY id DESC";
                                                $query =  $this->db->query($sql, array(2555));

                                                $rowcount = $query->num_rows();
                                                $dates1 = $query->result_array();
                                                if($rowcount > 0):

                                                    foreach ($dates1 as $dds){

                                                        $endleilao = $dds['data_fim'];
                                                        $anof = substr($endleilao, 0, 4);
                                                        $mesf = substr($endleilao, 4, 2);
                                                        $diaf = substr($endleilao, 6, 2);
                                                        $horaf = substr($endleilao, 8, 2);
                                                        $minutof = substr($endleilao, 10, 2);
                                                        $segundof = substr($endleilao, 12, 2);


                                                        $inileilao = $dds['data_inicio'];
                                                        $anoi = substr($inileilao, 0, 4);
                                                        $mesi = substr($inileilao, 4, 2);
                                                        $diai = substr($inileilao, 6, 2);
                                                        $horai = substr($inileilao, 8, 2);
                                                        $minutoi = substr($inileilao, 10, 2);
                                                        $segundoi = substr($inileilao, 12, 2);

                                                        $datainicio = $anoi.'-'.$mesi.'-'.$diai.'T'.$horai.':'.$minutoi.':'.$segundoi;
                                                        $datafim = $anof.'-'.$mesf.'-'.$diaf.'T'.$horaf.':'.$minutof.':'.$segundof;


                                                        ?>


                                                        <!-- Modal -->
                                                        <div class="modal fade" id="infoarremate<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel">Informações do arremate</h4>                                                                 </div>
                                                                    <div class="modal-body">

                                                                        <?php

                                                                        $this->db->from('arremates');
                                                                        $this->db->where('id_leilao', $dds['id']);
                                                                        $query = $this->db->get();
                                                                        $dateas = $query->result_array();


                                                                        ?>
                                                                          <h1>Dados do arremate:</h1>
                                                                        <p><b>Nome:</b> <?php

                                                                            $this->db->from('users');
                                                                            $this->db->where('id', $dateas[0]['id_user']);
                                                                            $queryas = $this->db->get();
                                                                            $dateasu = $queryas->result_array();
                                                                              echo $dateasu[0]['name'];
                                                                            ?></p>
                                                                        <p><b>Dados do vencedor:</b> <a href="<?php echo base_url('admin/clientes?q=').$dateas[0]['id_user'];?>&uniqueid=1" target="_blank">Fixa do usuario</a></p>
                                                                        <p><b>Preço:</b> R$<?php echo str_replace('.','',number_format($dateas[0]['valor'],2,'.',','));?></p>
                                                                        <p><b>Status do pagamento:</b> <?php

                                                                            if(empty($dateas[0]['status_payment']) or $dateas[0]['status_payment'] < 3 ):
echo '<span class="text-info">Aguardando pagamento</span>';
                                                                                endif;
                                                                            if(!empty($dateas[0]['status_payment']) and $dateas[0]['status_payment'] == 3):
                                                                                echo '<span class="text-success">Pagamento aprovado</span>';
                                                                            endif;

                                                                            if(!empty($dateas[0]['status_payment']) and $dateas[0]['status_payment'] == 10):
                                                                                echo '<span class="text-danger">Pagamento cancelado</span>';
                                                                            endif;
                                                                            ?>

                                                                        </p><?php

                                                                        if($dateas[0]['status_payment'] <> 3):
                                                                        ?>
                                                                        <p><b>Link de pagamento:</b> <a href="<?php echo $dateas[0]['url_payment'];?>" target="_blank"><?php echo $dateas[0]['url_payment'];?></a></p>
                                                                            <?php endif;?>
                                                                        <p>
                                                                            <?php
                                                                            $this->db->from('leiloes');
                                                                            $this->db->where('id',$dateas[0]['id_leilao']);
                                                                            $queryasa = $this->db->get();
                                                                            $resultass = $queryasa->result_array();


                                                                            $this->db->from('users');
                                                                            $this->db->where('id',$resultass[0]["by"]);
                                                                            $queryasas= $this->db->get();
                                                                            $resultasss = $queryasas->result_array();
                                                                            if($dateas[0]['cota'] == 0):




                                                                                echo '<b class="text-info">Não cotado</b><br>De: <b>'.$resultasss[0]['endereco'].'</b> - CEP <b>'.$resultasss[0]['cep'].'</b><br>Para :<b>'.$dateasu[0]['endereco'].'</b> - CEP <b>'.$dateasu[0]['cep'].'</b>';
                                                                                else:
                                                                                    echo 'Cotado';

                                                                            endif;
                                                                            ?><br><br>
                                                                            <b>Dados do vendedor:</b> <a href="<?php echo base_url('admin/clientes?q=').$resultass[0]["by"];?>&uniqueid=1" target="_blank"">Fixa do usuario</a>

                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                                        <button type="button" class="btn btn-primary" onclick="resolverarremate(<?php echo $dateas[0]['id_leilao'];?>);">Resolvido</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <tr id="arrematestableasd<?php echo $dds['id'];?>" class="gradeA odd" role="row">
                                                            <td class="sorting_1"><?php echo $dds['id'];?></td>
                                                            <td><?php echo $dds['titulo'];?></td>
                                                            <td><?php echo $diai.'/'.$mesi.'/'.$anoi.' '.$horai.':'.$minutoi.':'.$segundoi;?></td>

                                                            <td class="center">R$ <?php echo number_format($dds['valor_max'],2,'.',',');?></td>
                                                            <td class="center">R$ <?php echo number_format($dds['valor_min'],2,'.',',');?></td>
                                                            <td class="center">

                                                                <?php
                                                                if($dds['by'] == $_SESSION['ID']):

                                                                    echo '<b class="text-info">Administrador</b>';
                                                                else:
                                                                    echo '<a href="'.base_url('admin/clientes?q=').$dds['by'].'&uniqueid=1"><b class="text-warning">Usuario '.$dds['by'].'</b></a>';


                                                                endif;
                                                                ?>

                                                            </td>
                                                            <td class="center" style="text-align: center;">

                                                                <span  data-toggle="tooltip" data-placement="top" title="Excluir item">     <i  data-toggle="modal" data-target="#infoarremate<?php echo $dds['id']?>"  style="cursor: pointer;" class="fa  fa-info-circle text-info"></i></span></td>
                                                        </tr>
                                                    <?php }
                                                else:
                                                    ?>
                                                    <tr class="gradeA odd" role="row">
                                                        <td class="sorting_1">-- --</td>
                                                        <td>-- --</td>
                                                        <td>-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                        <td class="center">-- --</td>
                                                    </tr>
                                                <?php endif;
                                                ?>
                                                </tbody>
                                            </table></div></div>


                                    <!--<div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>

                                <div class="well">
                                    <h4>DataTables Usage Information</h4>
                                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>   <!-- /.panel-body -->
                                </div>
                            </div>

                        </div>
                        <!-- /.panel -->
                    </div></div>

                </div>
            </div>

        </div>
        </div>
        </div>
        <?php endif;?>

    <?php  if($clients == 1):?>
    <div id="page-wrapper" style="min-height: 611px;">
    <div class="row">
    <div>
        <br>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Todos usuarios</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Aguardando aprovação</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <br><form method="get" action="<?php echo base_url('admin/clientes');?>" class="search-box">
                    <div class="form-group">
                        <input type="text" style="height: 40px;" name="q" class="form-control" id="buscaCliente" placeholder="Buscar usuario por: id, nome,email ou cnpj...">
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>CPF/CNPJ</th>
                            <th>Itens arrematados</th>
                            <th>Tipo</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
<script>
    function delusercad(user) {

        $("#fixauserdele"+user+"").modal('hide');
        $("#fixauserdelecol"+user+"").remove();
        $.post("<?php echo base_url('admin/clientes');?>",{type:4515610,user:user},function(res){});

    }
    </script>
<?php

if(isset($_POST['type']) and $_POST['type'] == '4515610'):

    $this->db->where('id', $_POST['user']);
    $this->db->delete('users');
    endif;

?>
                       <?php

                       $this->db->from('users');
    if(isset($_GET['uniqueid'])):
        $this->db->where('id', $_GET['q']);
        endif;
    if(!isset($_GET['q'])):

                        $this->db->where('tipo',1);
                       $this->db->or_where('tipo',2);
                       $this->db->or_where('tipo',3);

        endif;
                       if(isset($_GET['q']) and !empty($_GET['q'])):
                           if(!isset($_GET['uniqueid'])):

                           $this->db->like('name', $_GET['q']);
                           $this->db->or_like('email', $_GET['q']);
                           $this->db->or_like('cnpj', $_GET['q']);

                           endif;
                       endif;
                       $this->db->order_by('id','desc');
                       $query =  $this->db->get();
                       $rowCount = $query->num_rows();
                       $fetch = $query->result_array();
                       if($rowCount > 0):

                           foreach ($fetch as $dds) {
                               ?>



                               <!-- Modal -->
                               <div class="modal fade" id="fixauser<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                   <div class="modal-dialog modal-lg" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h6 class="modal-title" id="myModalLabel"><b>Empresa:</b> <?php echo $dds['razao_social'];?>&nbsp;&nbsp;&nbsp;&nbsp; <b>-</b> &nbsp;&nbsp;&nbsp;&nbsp;<b>CPF/CNPJ:</b> <?php echo $dds['cnpj'];?></h6>
                                           </div>
                                           <div class="modal-body">

                                               <div class="container">
                                               <div class="row">
                                                   <div id="headtbm">

                                                       <style>

                                                           #cols{
                                                               font-weight: bold;
                                                               float: left;
                                                               background: red;
                                                               width: 100%;
                                                           }
                                                       </style>
                                                          <div class="row">
                                                           <div  class="col-md-4">
                                                               <?php
                                                               echo '<h3>Principais dados</h3>';

                                                               echo '<b>Nome:</b> '.$dds['name'].'<br>';
                                                               echo '<b>Email:</b> '.$dds['email'].'<br>';
                                                               echo '<b>Razão Social:</b> '.$dds['razao_social'].'<br>';
                                                               echo '<b>CPF/CNPJ:</b> '.$dds['cnpj'].'<br>';
                                                               echo '<b>I.E:</b> '.$dds['inscricao_estadual'].'<br>';
                                                               echo '<b>Nome Fantasia:</b> '.$dds['nome_fantasia'].'<br>';
                                                               echo '<b>Data de Constituição:</b> '.$dds['data_constituicao'].'<br>';
                                                               echo '<b>Nome do Responsável :</b> '.$dds['nome_responsavel'].'<br>';
                                                               echo '<b>Cargo Ocupado:</b> '.$dds['cargo_responsavel'].'<br>';
                                                               echo '<b>Endereço:</b> '.$dds['endereco'].'<br>';
                                                               echo '<b>Bairro:</b> '.$dds['bairro'].'<br>';
                                                               echo '<b>Numero:</b> '.$dds['numero'].'<br>';
                                                               echo '<b>Cidade:</b> '.$dds['cidade'].'<br>';
                                                               echo '<b>CEP:</b> '.$dds['cep'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefone'].'<br>';
                                                               echo '<b>Celular:</b> '.$dds['celular'].'<br>';
                                                               echo '<b>Categoria:</b> '.$dds['categoria'].'<br>';

                                                               echo '<b>FAX:</b> '.$dds['fax'].'<br>';
                                                               echo '<b>Televendas:</b> '.$dds['televendas'].'<br>';

                                                               echo '<b>Nº de funcionários:</b> '.$dds['n_funcionarios'].'<br>';

                                                               echo '<b>Faturamento médio mensal:</b> '.$dds['faturamento_m_mensal'].'<br>';

                                                    if($dds['tipo'] == 1):
                                                               echo '<b>Registro de Aquicultor:</b> '.$dds['registro_agricultor'].'<br>';
endif;

                                                               echo '<b>Site:</b> '.$dds['site'].'<br>';
															   
															



                                                               ?>
                                                           </div>
                                                           <div  class="col-md-4">
                                                               <?php

                                                                  
															   
                                                               echo '<h3>Referências Comerciais</h3>';
                                                               echo '<b>Empresa:</b> '.$dds['empresa_fornecedor_1'].'<br>';
                                                               echo '<b>Ramo de atividade:</b> '.$dds['ramo_fornecedor_1'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefone_fornecedor_1'].'<br>';
                                                               echo '<b>Contato:</b> '.$dds['contato_fonecedor_1'].'<br>';
                                   echo '<br>';
                                                               echo '<b>Empresa:</b> '.$dds['empresa_fornecedor_2'].'<br>';
                                                               echo '<b>Ramo de atividade:</b> '.$dds['ramo_fornecedor_2'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefone_fornecedor_2'].'<br>';
                                                               echo '<b>Contato:</b> '.$dds['contato_fonecedor_2'].'<br>';
                                                               echo '<br>';
                                                              
                                                               echo '<h3>Dados bancarios</h3>';
                                                               echo '<b>Nome do banco:</b> '.$dds['nome_banco_1'].'<br>';
                                                               echo '<b>Agência:</b> '.$dds['agencia_banco_1'].'<br>';
                                                               echo '<b>Conta:</b> '.$dds['cc_banco_1'].'<br>';
                                                               echo '<b>Contato:</b> '.$dds['contatocbn1'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefonecbn1'].'<br>';
                                                               echo '<br>';
                                                               


                                                         
                                                               echo '<h3>Documentos</h3>';

                                                               if($dds['tipo'] == 1):

                                                                   echo '<b>Relatório de Produção:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';
                                                                   echo '<b>Registro de Aquicultor:</b> <a href="'.base_url($dds['doc_anexo2']).'"  target="_blank" download>Baixar</a><br>';



                                                                   echo '<b>Cartão do CNPJ ou CPF:</b> <a href="'.base_url($dds['doc_anexo3']).'"  target="_blank" download>Baixar</a><br>';

                                                                   echo '<b>Comprovante de Endereço:</b> <a href="'.base_url($dds['doc_anexo4']).'"  target="_blank" download>Baixar</a><br>';
                                                               endif;



                                                               if($dds['tipo'] == 2):
                                                                   echo '<b>Cartão do CNPJ:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';

                                                                   echo '<b>Comprovante de endereço:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';
                                                               endif;


                                                               if($dds['tipo'] == 3):
                                                                   echo '<b>Cartão do CNPJ:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';

                                                               echo '<b>Comprovante de Endereço:</b> <a href="'.base_url($dds['doc_anexo2']).'"  target="_blank" download>Baixar</a><br>';

                                                               echo '<b>Registro ANTT:</b> <a href="'.base_url($dds['doc_anexo3']).'"  target="_blank" download>Baixar</a><br>';
                                                               endif;

                                                               ?>

                                                               <div>


                                                                   
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
                               <div class="modal fade" id="fixauserdeleapp<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h6 class="modal-title" id="myModalLabel"><b>Empresa:</b> <?php echo $dds['razao_social'];?>&nbsp;&nbsp;&nbsp;&nbsp; <b>-</b> &nbsp;&nbsp;&nbsp;&nbsp;<b>CNPJ:</b> <?php echo $dds['cnpj'];?></h6>
                                           </div>
                                           <div class="modal-body">
                                               <h3> Tem certeza que deseja deletar isso?</h3>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                               <button type="button" class="btn btn-danger" onclick="delusercad('<?php echo $dds['id']; ?>');">Deletar</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>













                               <tr id="fixauserdelecol<?php echo $dds['id'];?>">
                                   <th scope="row"><?php echo $dds['id'];?></th>
                                   <td><?php echo $dds['name'];?></td>
                                   <td><?php echo $dds['email'];?></td>
                                   <td><?php echo $dds['telefone'];?></td>
                                   <td><?php echo $dds['cnpj'];?></td>
                                   <td style="font-weight: bold;"><?php
                                       $this->db->from('arremates');
                                       $this->db->where('id_user',$dds['id']);
                                       $query =  $this->db->get();
                                      echo number_format($query->num_rows());

                                       ?></td>
                                   <td>
                                       <?php

                                       if($dds['tipo'] == 1):
                                           echo 'Vendedor';
                                           endif;

                                       if($dds['tipo'] == 2):
                                           echo 'Comprador';
                                           endif;

                                       if($dds['tipo'] == 3):
                                           echo 'Transportador';
                                           endif;

                                       if($dds['tipo'] == 5454):
                                           echo '<b class="text-info">Administrador</b>';
                                           endif;
                                       ?>

                                   </td>
                                   <td>
                                       <i data-toggle="modal" data-target="#fixauser<?php echo $dds['id'];?>" class="fa fa-edit text-info" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <i data-toggle="modal" data-target="#fixauserdeleapp<?php echo $dds['id'];?>" class="fa fa-close text-danger" style="cursor: pointer;"></i>

                                   </td>

                               </tr>
                               <?php

                           }

                           else:
                           ?>
                               <tr>
                                   <th scope="row">-- --</th>
                                   <td>-- --</td>
                                   <td>-- --</td>
                                   <td>-- --</td>
                                   <td>-- --</td>
                                   <td>-- --</td>

                               </tr>

                           <?php endif;?>
                       </tbody> </table> </div></div>
            <div role="tabpanel" class="tab-pane" id="profile"><br>  <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>CNPJ</th>
                            <th>Ficha</th>
                        </tr>
                        </thead>
                        <tbody>
                        <script>
                            function ftnrepuser(user) {
                                $("#preapruser"+user+"").remove();
                                $("#fixauserpre"+user+"").modal('hide');
                                $.post("<?php echo base_url('admin/clientes');?>",{type:151540054,id:user},function (res) {
if(res){
									window.location.reload();

}
                                });

                            }
                        </script>
                        <script>
                            function ftnapprovuser(user) {
                                $("#preapruser"+user+"").remove();
                                $("#fixauserpre"+user+"").modal('hide');

                                $.post("<?php echo base_url('pages/aprroved');?>",{type:148648468,id:user},function (res) {
									
									if(res == '1'){
										window.location.reload();
									}else{
									window.location.href="<?php echo base_url('admin');?>";

									}
                                });
																
                                }
                        </script>

                        <?php


                        if(isset($_POST['type']) and $_POST['type'] == '151540054'):

                            $this->db->where('id', $_POST['id']);
                            $this->db->delete('pre_approval');

                            endif;

                       

                        ?>
                        <?php

                        $this->db->from('pre_approval');
                        $this->db->order_by('id','desc');
                        $query =  $this->db->get();
                        $rowCount = $query->num_rows();
                        $fetch = $query->result_array();
                        if($rowCount > 0):

                            foreach ($fetch as $dds) {
                                ?>



                                <!-- Modal -->
                                <div class="modal fade" id="fixauserpre<?php echo $dds['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel"><b>Empresa:</b> <?php echo $dds['razao_social'];?>&nbsp;&nbsp;&nbsp;&nbsp; <b>-</b> &nbsp;&nbsp;&nbsp;&nbsp;<b>CPF/CNPJ:</b> <?php echo $dds['cnpj'];?></h6>
                                            </div>
                                            <div class="modal-body">

                                                <div class="container">
                                                    <div class="row">
                                                        <div id="headtbm">

                                                            <style>

                                                                #cols{
                                                                    font-weight: bold;
                                                                    float: left;
                                                                    background: red;
                                                                    width: 100%;
                                                                }
                                                            </style>
                                                           <div class="row">
                                                           <div  class="col-md-4">
                                                               <?php
                                                               echo '<h3>Principais dados</h3>';

                                                               echo '<b>Nome:</b> '.$dds['name'].'<br>';
                                                               echo '<b>Email:</b> '.$dds['email'].'<br>';
                                                               echo '<b>Razão Social:</b> '.$dds['razao_social'].'<br>';
                                                               echo '<b>CPF/CNPJ:</b> '.$dds['cnpj'].'<br>';
                                                               echo '<b>I.E:</b> '.$dds['inscricao_estadual'].'<br>';
                                                               echo '<b>Nome Fantasia:</b> '.$dds['nome_fantasia'].'<br>';
                                                               echo '<b>Data de Constituição:</b> '.$dds['data_constituicao'].'<br>';
                                                               echo '<b>Nome do Responsável :</b> '.$dds['nome_responsavel'].'<br>';
                                                               echo '<b>Cargo Ocupado:</b> '.$dds['cargo_responsavel'].'<br>';
                                                               echo '<b>Endereço:</b> '.$dds['endereco'].'<br>';
                                                               echo '<b>Bairro:</b> '.$dds['bairro'].'<br>';
                                                               echo '<b>Numero:</b> '.$dds['numero'].'<br>';
                                                               echo '<b>Cidade:</b> '.$dds['cidade'].'<br>';
                                                               echo '<b>CEP:</b> '.$dds['cep'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefone'].'<br>';
                                                               echo '<b>Celular:</b> '.$dds['celular'].'<br>';
                                                               echo '<b>Categoria:</b> '.$dds['categoria'].'<br>';

                                                               echo '<b>FAX:</b> '.$dds['fax'].'<br>';
                                                               echo '<b>Televendas:</b> '.$dds['televendas'].'<br>';

                                                               echo '<b>Nº de funcionários:</b> '.$dds['n_funcionarios'].'<br>';

                                                               echo '<b>Faturamento médio mensal:</b> '.$dds['faturamento_m_mensal'].'<br>';

                                                    if($dds['tipo'] == 1):
                                                               echo '<b>Registro de Aquicultor:</b> '.$dds['registro_agricultor'].'<br>';
endif;

                                                               echo '<b>Site:</b> '.$dds['site'].'<br>';
															   
															   
															  


                                                               ?>
                                                           </div>
                                                           <div  class="col-md-4">
														   
                                                               <?php
 
                                                               echo '<h3>Referências Comerciais</h3>';
                                                               echo '<b>Empresa:</b> '.$dds['empresa_fornecedor_1'].'<br>';
                                                               echo '<b>Ramo de atividade:</b> '.$dds['ramo_fornecedor_1'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefone_fornecedor_1'].'<br>';
                                                               echo '<b>Contato:</b> '.$dds['contato_fonecedor_1'].'<br>';
                                   echo '<br>';
                                                               echo '<b>Empresa:</b> '.$dds['empresa_fornecedor_2'].'<br>';
                                                               echo '<b>Ramo de atividade:</b> '.$dds['ramo_fornecedor_2'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefone_fornecedor_2'].'<br>';
                                                               echo '<b>Contato:</b> '.$dds['contato_fonecedor_2'].'<br>';
                                                               echo '<br>';
                                                              

                                                               
                                                               echo '<h3>Dados bancarios</h3>';
                                                               echo '<b>Nome do banco:</b> '.$dds['nome_banco_1'].'<br>';
                                                               echo '<b>Agência:</b> '.$dds['agencia_banco_1'].'<br>';
                                                               echo '<b>Conta:</b> '.$dds['cc_banco_1'].'<br>';
                                                               echo '<b>Contato:</b> '.$dds['contatocbn1'].'<br>';
                                                               echo '<b>Telefone:</b> '.$dds['telefonecbn1'].'<br>';
                                                               echo '<br>';
                                                              ;



                                                         
                                                               echo '<h3>Documentos</h3>';

                                                               if($dds['tipo'] == 1):

                                                                   echo '<b>Relatório de Produção:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';
                                                                   echo '<b>Registro de Aquicultor:</b> <a href="'.base_url($dds['doc_anexo2']).'"  target="_blank" download>Baixar</a><br>';



                                                                   echo '<b>Cartão do CNPJ ou CPF:</b> <a href="'.base_url($dds['doc_anexo3']).'"  target="_blank" download>Baixar</a><br>';

                                                                   echo '<b>Comprovante de Endereço:</b> <a href="'.base_url($dds['doc_anexo4']).'"  target="_blank" download>Baixar</a><br>';
                                                               endif;



                                                               if($dds['tipo'] == 2):
                                                                   echo '<b>Cartão do CNPJ:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';

                                                                   echo '<b>Comprovante de endereço:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';
                                                               endif;


                                                               if($dds['tipo'] == 3):
                                                                   echo '<b>Cartão do CNPJ:</b> <a href="'.base_url($dds['doc_anexo']).'"  target="_blank" download>Baixar</a><br>';

                                                               echo '<b>Comprovante de Endereço:</b> <a href="'.base_url($dds['doc_anexo2']).'"  target="_blank" download>Baixar</a><br>';

                                                               echo '<b>Registro ANTT:</b> <a href="'.base_url($dds['doc_anexo3']).'"  target="_blank" download>Baixar</a><br>';
                                                               endif;

                                                               ?>

                                                               <div>


                                                                   
                                                       </div>

                                                       </div>
                                                   </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" onclick="ftnrepuser('<?php echo $dds['id'] ?>');">Reprovado</button>
                                                <button type="button" class="btn btn-success" onclick="ftnapprovuser('<?php echo $dds['id'] ?>');">Aprovado</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <tr id="preapruser<?php echo $dds['id'];?>">
                                    <th scope="row"><?php echo $dds['id'];?></th>
                                    <td><?php echo $dds['name'];?></td>
                                    <td><?php echo $dds['email'];?></td>
                                    <td><?php echo $dds['telefone'];?></td>
                                    <td><?php echo $dds['cnpj'];?></td>

                                    <td>
                                        <i data-toggle="modal" data-target="#fixauserpre<?php echo $dds['id'];?>" class="fa fa-eye text-info" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    </td>

                                </tr>
                                <?php

                            }

                        else:
                            ?>
                            <tr>
                                <th scope="row">-- --</th>
                                <td>-- --</td>
                                <td>-- --</td>
                                <td>-- --</td>
                                <td>-- --</td>
                                <td>-- --</td>

                            </tr>

                        <?php endif;?>
                        </tbody> </table> </div></div></div>

        </div>

    </div>
    </div>
    </div>
<?php endif;?>

    <?php if($templates == 1):?>
    <div id="page-wrapper" style="min-height: 611px;">
    <div class="row">
    <div class="col-lg-12"><br>
        <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Funcionarios</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Novo</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">

                    <table class="table table-hover">
                        <thead> <tr> <th>id</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Codigo</th>
                            <th>Cadastros</th>
                        </tr> </thead>
                        <tbody>
<?php

$this->db->from('funcionarios');
$this->db->order_by('id','desc');
$query = $this->db->get();
$result = $query->result_array();
foreach($result as $dds){

?>
    <tr id="codeiuse<?php echo $dds['id'];?>">

                            <td><?php echo $dds['id'];?></td>
                            <td><?php echo $dds['nome'];?></td>
                            <td><?php echo $dds['cpf'];?></td>
                            <td><?php echo $dds['code'];?></td>
                            <td><?php

                                $this->db->from('indicado');
                                $this->db->where('cpf_indicador',$dds['cpf']);
                                $qr = $this->db->get();

                                echo number_format($qr->num_rows());

                                ?></td>
                            <td><a onclick="deletecode('<?php echo $dds['id']; ?>')">Deletar</a></td>
                        </tr>
    <?php } ?>
<script>
            function deletecode(code){

        $("#codeiuse"+code+"").remove();
        $.post("<?php echo base_url('admin/templates');?>",{type:156432,code:code},function(res){
        });

    }
</script>
                        <?php if(isset($_POST['type']) and $_POST['type'] == '156432'):

                            $data['id'] = $_POST['code'];
        $this->db->where('id',$_POST['code']);
                        $this->db->delete('funcionarios',$data);

        endif;
        ?>
                        </tbody> </table>

                </div>
                <div role="tabpanel" class="tab-pane" id="profile">


                    <br>
                    <form method="get" action="<?php echo base_url('admin/templates');?>">
                        <label>Nome</label>
                        <input type="text" name="nome"><br>
                        <label>CPF</label>
                        <input type="text" name="cpf"><br>
                        <input type="hidden" name="type" value="151das51">
                        <button type="submit" >enviar</button>
                        </form>
                    <?php

                    if(isset($_GET['type']) and $_GET['type'] == '151das51'):
$dado['nome'] = $_GET['nome'];
$dado['cpf'] = $_GET['cpf'];
                        $this->db->insert('funcionarios',$dado);
                    $last = $this->db->insert_id();
                    $ds['code'] = 'PE'.date('Y').$last.'';
                        $this->db->where('id',$last);
                    $this->db->update('funcionarios',$ds);
                        redirect('admin/templates', 'refresh');

                    endif;

                    ?>
                </div>

            </div>

        </div>

    </div>
    </div>
    </div>


    <?php endif;?>
<?php
    $this->load->view('admin/footer');
else:
    redirect('home', 'refresh');

endif;
?>