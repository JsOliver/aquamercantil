<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="images/favicon.ico">

    <title>Aqua Mercantil</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/magnific-popup.css');?>" rel="stylesheet">

    <!-- Font Icons CSS -->
    <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

    <!-- Color style -->
    <link href="<?php echo base_url('assets/css/colors/default.css');?>" rel="stylesheet" id="color-opt">

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">


    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
    <script src="http://coderthemes.com/zodkoo_1.1/dark/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('assets/js/html5shiv.js');?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js');?>"></script>

    <script type="text/javascript">
        /* ==============================================
         Magnific Popup
         =============================================== */
        $(document).ready(function() {
            $('.popup-video').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });
        });
        </script>
    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-78002311-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>


<body data-spy="scroll" data-target="#navbar-menu">

<!-- Navbar -->
<div class="navbar navbar-custom sticky" role="navigation" id="sticky-nav" style="background-color: rgba(0, 0, 0, 0.85);">
    <div class="container">

        <!-- Navbar-header -->
        <div class="navbar-header">

            <!-- Responsive menu button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->
            <a class="navbar-brand logo" href="<?php echo base_url('home');?>">
              <span style="font-size: 13pt;"> Aqua Mercantil</span>
            </a>

        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse" id="navbar-menu">

            <!-- Navbar left -->
            <ul class="nav navbar-nav nav-custom-left">


                <li class="active">
                    <a href="home#home" class="nav-link">Home</a>
                </li>
<?php

$this->db->from('leiloes');
$this->db->where('status',1);
$querya1 = $this->db->get();
$rowcount1a = $querya1->num_rows();
if($rowcount1a > 0):

?>
                <li>
                    <a href="home#leiloes" class="nav-link">Leilões</a>
                </li>
                <li><a href="quem-somos">Quem somos</a></li>
                <?php endif;?>
                <?php
                if(!isset($_SESSION['ID'])):
                ?>
                <li>
                    <a href="home#pricing" class="nav-link">Seja nosso cliente</a>
                </li>
                <?php endif;?>

                <li>
                    <a href="home#patrocinadores" class="nav-link">Parceiros</a>
                </li>
                <li><a href="como-funciona">Como funciona</a></li>
                <li>
                    <a href="home#contact" class="nav-link">Contate-nos</a>
                </li>
				
               <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        Mais
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu arrow">
                        <li><a href="home#clients" class="nav-link">Equipe</a></li>
								<?php
	$this->db->from('cotacao');
		 		 $this->db->order_by('id_cotacao','desc');
				 
                    $getcot = $this->db->get();
					
					if($getcot->num_rows() > 0):
	
	?>
				<li>
                    <a href="home#cotacaotabr" class="nav-link">Cotações</a>
                </li>
				<?php endif;?>
                        <li><a href="contrato">Contrato</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Navbar right -->
            <ul class="nav navbar-nav navbar-right">
<?php
if(isset($_SESSION['ID'])):
?>
    <li>
        <a href="<?php echo base_url('leiloes');?>"  class="btn btn-white-fill navbar-btn" style="color: black;">Minha conta</a>
    </li>
    <li>
        <a href="<?php echo base_url('pages/logout');?>"  class="btn  navbar-btn " style="color: white;">Sair </a>
    </li>

                <?php

                else:

                ?>
                    <li>
                        <a href="" data-toggle="modal" data-target="#login" class="btn btn-white-fill navbar-btn" style="color: black;">Entrar</a>
                    </li>
                <?php endif;?>
            </ul>

        </div>
        <!--/Menu -->
    </div>
    <!-- end container -->
</div>
<!-- End navbar-custom -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content " style="background: none;border:none;" >

            <div class="modal-body" style="background: none;">
                <form method="post" role="form" action="<?php echo base_url('login');?>" class="intro-form">
                    <h3 class="text-center"> Login </h3>

                    <div class="form-group">
                        <input name="emaillog" id="emaillog" type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input name="passwordlog" id="passwordlog" type="password" class="form-control" placeholder="Senha">
                    </div>
                    <div class="form-group text-center">
                        <style>
                            #brncads{
                                color: whitesmoke;
                                font-size: 12pt;
                            }
                        </style>

                        <a onclick="loguser();" class="btn  btn-sm btn-block btn-info">Entrar</a>



                        <b id="infoerror"></b>


                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<script>
    function loguser() {



        var email = document.getElementById('emaillog').value;
        var pass = document.getElementById('passwordlog').value;
        $.post("<?php echo base_url('login');?>",{emaillog:email,passwordlog:pass},function (res) {

            if(res == 11)
            {
                $("#login").modal('hide');

                $("#contrato").modal('show');

            }else
            {
$("#infoerror").html(res);
            }

        });





    }



</script>

<div class="modal fade" id="contrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a  class="close" href="<?php echo base_url('pages/logout');?>"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" id="myModalLabel">Contrato</h4>
            </div>
            <div class="modal-body" style="overflow-y:scroll; height: 400px;">
                     <span style="overflow-y:scroll; height: 600px;">

                                                                  <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">1) Regulamenta&ccedil;&atilde;o do Leil&atilde;o:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O leil&atilde;o on-line &eacute; regido por Edital. O Edital &eacute; disponibilizado na sua &iacute;ntegra no site </span><a href="http://www.aquamercantil.com.br/"><span style="font-size: 9.0pt; font-family: 'Arial','sans-serif';">www.aquamercantil.com.br</span></a><span style="font-size: 9pt; font-family: Arial, sans-serif;"> e nele consta a descri&ccedil;&atilde;o do produto divulgado.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Somente ser&atilde;o aceitos os lances que atenderem aos seguintes crit&eacute;rios:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">1.a) Ofertados dentro do prazo determinado para in&iacute;cio e t&eacute;rmino da capta&ccedil;&atilde;o dos lances;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.a) Atendam &agrave;s exig&ecirc;ncias legais quanto ao &ldquo;aceite&rdquo; das regras determinadas por este site, quanto &agrave; seguran&ccedil;a, e procedimentos para concretiza&ccedil;&atilde;o do lan&ccedil;o, sob pena de responsabiliza&ccedil;&atilde;o civil e criminal do lan&ccedil;ador inadimplente.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2) Como participar:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.a) O site &eacute; organizado por leil&atilde;o. No link inicial constam as caracter&iacute;sticas do produto, quantidade dispon&iacute;vel e local onde o produto se encontra, bem como a data, hora do seu in&iacute;cio e fim.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.b) Ao selecionar o leil&atilde;o, o interessado ter&aacute; acesso &agrave; rela&ccedil;&atilde;o de lotes. Clicando no lote de interesse, ser&atilde;o disponibilizadas maiores informa&ccedil;&otilde;es.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.c) O comprador deve cotar seu FRETE antes de dar in&iacute;cio aos lances. O FRETE n&atilde;o se encontra incluso nos valores dos lotes.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.d) Para se cadastrar &eacute; necess&aacute;rio: preencher todos dados solicitados no formul&aacute;rio; preencher os campos &lsquo;login&rsquo; e &lsquo;senha&rsquo;, que ser&atilde;o a identifica&ccedil;&atilde;o de seu cadastro no site; ler atentamente e aceitar as condi&ccedil;&otilde;es de participa&ccedil;&atilde;o; enviar c&oacute;pia dos documentos solicitados. Se o cadastro do usu&aacute;rio for aprovado ele receber&aacute; a confirma&ccedil;&atilde;o via e-mail.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.e) Ap&oacute;s receber a confirma&ccedil;&atilde;o de aprova&ccedil;&atilde;o do cadastro, &eacute; necess&aacute;rio acessar novamente o site, fazer o &lsquo;login&rsquo; e selecionar o leil&atilde;o desejado. Em seguida, clicar em &ldquo;HABILITA&Ccedil;&Atilde;O&rdquo;, ler e aceitar as regras espec&iacute;ficas do leil&atilde;o.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.e) Realizados esses passos, o usu&aacute;rio cadastrado estar&aacute; liberado para dar lances no leil&atilde;o desejado.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.f) Ap&oacute;s o encerramento do leil&atilde;o, a equipe do leiloeiro entrar&aacute; em contato com o licitante, confirmando a arremata&ccedil;&atilde;o do bem e informar&aacute; os procedimentos para efetuar o pagamento.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.g) Realizado o pagamento, o arrematante dever&aacute; enviar c&oacute;pia do comprovante de recolhimento para a equipe do leiloeiro atrav&eacute;s de e-mail ou what&acute;s up.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.h) Em casos de parcelamento por parte do vendedor/fornecedor ser&aacute; necess&aacute;rio a execu&ccedil;&atilde;o de contrato, por&eacute;m a responsabilidade do recebimento das demais parcelas &eacute; do vendedor/fornecedor, estando o leil&atilde;o isento de responsabilidade no caso de inadimpl&ecirc;ncia.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">2.i) A aceita&ccedil;&atilde;o das regras do leil&atilde;o vale como assinatura no auto de arremata&ccedil;&atilde;o, pois outorga poderes ao leiloeiro, para que este assine o auto de arremata&ccedil;&atilde;o em nome do arrematante, atrav&eacute;s do &iacute;cone &ldquo;Li e aceito os termos citados acima&rdquo;.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">3) Cadastro:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O cadastro junto ao site da Aquamercantil &eacute; &uacute;nico, ou seja, n&atilde;o &eacute; necess&aacute;rio cadastrar-se novamente para participa&ccedil;&atilde;o em outros leil&otilde;es.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Para efetuar lances nos lotes desejados, digite o 'login' e a senha pessoal, acesse o leil&atilde;o de interesse.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O Usu&aacute;rio declarar&aacute; que tem capacidade, autoridade e legitimidade para assumir as responsabilidades e obriga&ccedil;&otilde;es descritas no Termo de Condi&ccedil;&otilde;es de Arremata&ccedil;&atilde;o e Pagamento.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Recomendamos que o cadastro e o envio dos documentos sejam efetuados em at&eacute; 24 horas antes do leil&atilde;o de interesse, para que seja poss&iacute;vel a libera&ccedil;&atilde;o do cadastro com anteced&ecirc;ncia.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Os documentos somente ser&atilde;o aceitos via e-mail, tendo o interessado que digitaliz&aacute;-los, usando scanner ou fotografia.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">O USU&Aacute;RIO autoriza que a Aquamercantil realize as verifica&ccedil;&otilde;es necess&aacute;rias, a respeito dos dados informados no cadastro, bem como a respeito de sua idoneidade financeira, perante os &oacute;rg&atilde;os banc&aacute;rios e de prote&ccedil;&atilde;o de cr&eacute;dito.</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">&nbsp;</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">Par&aacute;grafo &Uacute;nico: O USU&Aacute;RIO compromete-se a n&atilde;o informar a terceiros os dados da sua CONTA, responsabilizando-se civil e criminalmente pelo seu uso indevido ou por quaisquer pr&aacute;ticas il&iacute;citas que interfiram, manipulem ou prejudiquem o funcionamento do SITE ou das informa&ccedil;&otilde;es nele contidas.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">3.1. O USU&Aacute;RIO ser&aacute; o &uacute;nico respons&aacute;vel pelas opera&ccedil;&otilde;es efetuadas em sua CONTA, que apenas poder&aacute; ser acessada atrav&eacute;s de LOGIN e senha pessoal e intransfer&iacute;vel.</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">&nbsp;</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">Par&aacute;grafo &Uacute;nico: O USU&Aacute;RIO compromete-se a n&atilde;o informar a terceiros os dados da sua CONTA, responsabilizando-se civil e criminalmente pelo seu uso indevido ou por quaisquer pr&aacute;ticas il&iacute;citas que interfiram, manipulem ou prejudiquem o funcionamento do SITE ou das informa&ccedil;&otilde;es nele contidas.</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">&nbsp;</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">3.2. Toda informa&ccedil;&atilde;o ou dado pessoal fornecido pelo USU&Aacute;RIO ser&aacute; armazenado em servidores ou meios magn&eacute;ticos de alta seguran&ccedil;a. A Aquamercantil se compromete a tomar todas as medidas poss&iacute;veis, para manter a confidencialidade e a seguran&ccedil;a descritas nesta cl&aacute;usula.</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">&nbsp;</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">Par&aacute;grafo Primeiro: A Aquamercantil declara que todos os processos nos quais trafegam dados pessoais do USU&Aacute;RIO e meios de pagamento s&atilde;o realizados em ambiente seguro e criptografado, com alta tecnologia para prote&ccedil;&atilde;o de dados.</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">&nbsp;</span></p>
                                                                <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10pt; font-family: Tahoma, sans-serif;">Par&aacute;grafo Segundo: A Aquamercantil n&atilde;o se responsabiliza pelo uso indevido, por terceiros, de dados pessoais do USU&Aacute;RIO, especialmente quando estes terceiros obtiverem tais informa&ccedil;&otilde;es com emprego de fraude, simula&ccedil;&otilde;es e viola&ccedil;&otilde;es de sistemas.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">4) Dos lotes:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Os lotes de pescados ofertados no site da aquamercantil s&atilde;o inspecionados antes de serem enviados ao comprador, afim de garantir a qualidade do produto oferecido, seja em tamanho, peso, qualidade e embalagem;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O interessado tamb&eacute;m poder&aacute; visualizar o lote de interesse atrav&eacute;s de fotos dispon&iacute;veis no site.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">5) Formas de Pagamento:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O pagamento do lote ser&aacute; feito atrav&eacute;s de PAGSEGURO. O arrematante receber&aacute; a informa&ccedil;&atilde;o de que seu lance foi vencedor, e os pagamentos dever&atilde;o ser feitos de acordo com as guias enviadas via e-mail, respeitado o mesmo prazo mencionado.&nbsp;Haver&aacute; cobran&ccedil;a no valor de 4,99% sobre o valor da opera&ccedil;&atilde;o executada para o PAGSEGURO.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">6) Cabe o pagamento da comiss&atilde;o do Leiloeiro, no importe de 3% (tr&ecirc;s por cento) sobre o lance ofertado pelo lote pelo arrematante e 2% pelo vendedor.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O pagamento da comiss&atilde;o do leiloeiro dever&aacute; ser feito em at&eacute; 24hs (vinte e quatro horas), via boleto banc&aacute;rio, com os dados que o arrematante receber&aacute; por e-mail.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Feito o pagamento, o arrematante dever&aacute; encaminhar o comprovante de pagamento para o e-mail&nbsp;cristovao.amarante@aquamercantil.com.br. &nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;&ldquo;O arrematante que n&atilde;o efetuar o pagamento ou o dep&oacute;sito dos valores corretamente, por qualquer motivo, al&eacute;m de arcar com a multa estipulada nas condi&ccedil;&otilde;es de arremata&ccedil;&atilde;o e pagamento, ser&aacute; impedido de participar dos pr&oacute;ximos leil&otilde;es, bem como responder&aacute; a inqu&eacute;rito criminal.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">7) Entrega do lote:&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Se no dia da entrega o lote estiver diferente do certificado pela Aquamercantil, n&atilde;o tome posse! Avise a empresa, esclare&ccedil;a detalhadamente o que ocorreu e aguarde a decis&atilde;o. Neste caso o arrematante ter&aacute; ou o seu dinheiro de volta ou o lote no estado descrito pelo leiloeiro.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">8) Parcelamento:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Alguns lotes podem ser parcelados. O parcelamento &eacute; informado com o Lote de acordo com as condi&ccedil;&otilde;es previstas pelo vendedor, Sendo de responsabilidade do vendedor o recebimento das parcelas restantes ap&oacute;s o leil&atilde;o.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Por&eacute;m para se habilitar ao parcelamento &eacute; necess&aacute;rio atender alguns pr&eacute;-requisitos. A arremata&ccedil;&atilde;o n&atilde;o significa aprova&ccedil;&atilde;o do cr&eacute;dito para o parcelamento. Para isso o CPF/CNPJ tem de estar em dia e sem restri&ccedil;&otilde;es. </span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">9) Leil&atilde;o cancelado por atitude do arrematante:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Se o leil&atilde;o for cancelado por alguma atitude sua, poder&aacute; acarretar: multa de at&eacute; 20% (vinte por cento) sobre valor do lote; pagamento da comiss&atilde;o do leiloeiro; den&uacute;ncia criminal. Pense bem. Reflita. Analise. Estude muito antes de arrematar em leil&atilde;o.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">10) Inadimpl&ecirc;ncia/Desist&ecirc;ncia do lance:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O arrematante que n&atilde;o efetuar o pagamento ou o dep&oacute;sito dos valores corretamente, por qualquer motivo, al&eacute;m de arcar com a multa estipulada nas Regras do Leil&atilde;o &ndash; Condi&ccedil;&otilde;es de arremata&ccedil;&atilde;o e pagamento, ser&aacute; impedido de participar dos pr&oacute;ximos leil&otilde;es, bem como responder&aacute; a inqu&eacute;rito criminal.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">11) Leil&atilde;o cancelado por atitude do vendedor:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O cancelamento do leil&atilde;o por parte do vendedor <strong>dever&aacute; ocorrer com anteced&ecirc;ncia m&iacute;nima de 36 horas, </strong>caso n&atilde;o ocorra dentro deste prazo ser&aacute; aplicada uma multa de at&eacute; 20% (vinte por cento) sobre valor do lote; pagamento da comiss&atilde;o do leiloeiro; den&uacute;ncia criminal. Pense bem. Reflita. Analise. Estude muito antes de vender no leil&atilde;o Aquamercantil.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">12) Natureza do Documento:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O documento de Regras do Leil&atilde;o On-line Aquamercantil &ndash; Condi&ccedil;&otilde;es de arremata&ccedil;&atilde;o e pagamento,&nbsp;tem natureza de contrato de ades&atilde;o, sendo que a ades&atilde;o ocorre sem ressalvas no momento em que o Usu&aacute;rio clicar na op&ccedil;&atilde;o &ldquo;Aceito estas Condi&ccedil;&otilde;es&rdquo;. O documento tamb&eacute;m obriga herdeiros e sucessores.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">12) Os Leil&otilde;es Aquamercantil n&atilde;o se responsabiliza por:</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Falhas no funcionamento do computador do cliente.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Instabilidade de conex&atilde;o na internet do cliente.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">Incompatibilidade de software no computador do cliente.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O participante isenta a Leil&otilde;es Aquamercantil por quaisquer problemas decorrentes dos servidores, tanto do usu&aacute;rio como da empresa, no atraso de envio de informa&ccedil;&otilde;es e lances, que acarretem desencontro de informa&ccedil;&otilde;es, informa&ccedil;&otilde;es err&ocirc;neas ou indevidas, caso em que detectada a falha o usu&aacute;rio autoriza desde j&aacute; que seja submetido o caso a aprecia&ccedil;&atilde;o do Ju&iacute;zo competente, para delibera&ccedil;&atilde;o acatando a decis&atilde;o e isentando a empresa de quaisquer responsabilidade.</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">&nbsp;</span></p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">13) Lei Aplic&aacute;vel e Foro:</span></p>
                                                                <p class="western" style="margin: 0cm 0cm 0.0001pt; line-height: 12.15pt;">&nbsp;</p>
                                                                <p class="western" style="margin: 0cm; margin-bottom: .0001pt; line-height: 12.15pt;"><span style="font-size: 9pt; font-family: Arial, sans-serif;">O leil&atilde;o &eacute; regido pela legisla&ccedil;&atilde;o brasileira em vigor, elegendo-se o Foro do Ju&iacute;zo que esta promovendo o respectivo leil&atilde;o para eventuais quest&otilde;es.</span></p>

                                                                  </span>
                <br>

                <button  onclick="window.location.reload();" class="btn btn-info">Concordo</button>
                <a href="<?php echo base_url('pages/logout');?>" class="btn btn-default">Não Concordo</a>
            </div>

        </div>
    </div>
</div>
