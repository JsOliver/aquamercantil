<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $this->load->view('fixed_files/index/header');

?>
<?php

if(isset($_POST['type']) and $_POST['type'] == '154477025'):

    if($_POST['action'] == 'nao'):

        $dataup['cota'] = '0';

    else:
        $dataup['cota'] = '1';

    endif;
    $this->db->where('id_leilao',$_POST['leilao']);
    $this->db->order_by('id', 'desc');
    $this->db->limit(0,1);
    $this->db->update('arremates', $dataup);

endif;

?>

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




<!-- Modal -->


<!-- Button trigger modal -->

<!-- Modal -->


<section class="bg-custom home" id="home" style="background-image: url(<?php echo base_url('assets/leilao/images/baneras.jpg');?>); background-repeat: no-repeat;background-size:100% 100%; ">
    <div class="home-sm">
        <?php
        if(!isset($_SESSION['ID'])):
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="home-wrapper home-wrapper-alt p-0">
                        <h1 class="h1 font-light text-white w-full" style="text-shadow: 1px 1px 5px #000000; color:white;">QUEM SOMOS</h1>
                        <h4 class="text-light w-full" style="text-shadow: 1px 1px 5px #000000; color:white;">Somos a primeira empresa especializada na comercialização de pescados POR LEILÃO REVERSO OU LEILÃO DIGITAL no Brasil. 
                            COM BASE no sistema adotado pela Cooperativa de Produtores de Flores de Holambra OU VEILING® HOLAMBRA criamos a Aquamercantil. 
                            Uma ferramenta para facilitar o comércio de pescados e aproximar o seu produtor do mercado.
</h4>

                    </div>
                </div> <!-- end col -->


                <!-- Modal -->
                <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#venda" aria-controls="venda" role="tab" data-toggle="tab">Quero vender</a></li>
                                        <li role="presentation"><a href="#compra" aria-controls="compra" role="tab" data-toggle="tab">Quero comprar</a></li>
                                        <li role="presentation"><a href="#transporte" aria-controls="transporte" role="tab" data-toggle="tab">Quero transportar</a></li>
                                    </ul>
                                    <script>
									

                                        function caduser() {


                                            var name = document.getElementById('namefull').value;
                                            var email = document.getElementById('email').value;
                                            var cpf = document.getElementById('cpf-cnpj').value;
                                            var pass = document.getElementById('password').value;
										

                                            if(name.length <= 0 || email.length <= 0 || pass.length <= 0 || cpf.length <= 0){
                                                $("#info").html('Preencha os campos corretamente.');
                                            }else{
												
												
												
												if($("#tipoPessoa1").is(':checked')){

												document.getElementById("razao").style.display = "none";
												document.getElementById("ies").style.display = "none";
												document.getElementById("nomefan").style.display = "none";
												document.getElementById("dcn").style.display = "none";
												document.getElementById("respon").style.display = "none";
												
												
												document.getElementById("razao1").style.display = "none";
												document.getElementById("ies1").style.display = "none";
												document.getElementById("nomefan1").style.display = "none";
												document.getElementById("dcn1").style.display = "none";
												document.getElementById("respon1").style.display = "none";


												
												document.getElementById("razao2").style.display = "none";
												document.getElementById("ies2").style.display = "none";
												document.getElementById("nomefan2").style.display = "none";
												document.getElementById("dcn2").style.display = "none";
												document.getElementById("respon2").style.display = "none";


												}
												if($("#tipoPessoa2").is(':checked')){


												document.getElementById("razao").style.display = "block";
												document.getElementById("ies").style.display = "block";
												document.getElementById("nomefan").style.display = "block";
												document.getElementById("dcn").style.display = "block";
												document.getElementById("respon").style.display = "block";
												
												
												document.getElementById("razao1").style.display = "block";
												document.getElementById("ies1").style.display = "block";
												document.getElementById("nomefan1").style.display = "block";
												document.getElementById("dcn1").style.display = "block";
												document.getElementById("respon1").style.display = "block";	
												
												document.getElementById("razao2").style.display = "block";
												document.getElementById("ies2").style.display = "block";
												document.getElementById("nomefan2").style.display = "block";
												document.getElementById("dcn2").style.display = "block";
												document.getElementById("respon2").style.display = "block";
												}
												
												
                                                $("#cadastro").modal('show');

                                                $("#emailfim1").val(email);
                                                $("#passfim1").val(pass);
                                                $("#namefim1").val(name);
                                                $("#cpffim1").val(cpf);
                                                $("#emailfim2").val(email);
                                                $("#passfim2").val(pass);
                                                $("#namefim2").val(name);
                                                $("#cpffim2").val(cpf);
                                                $("#emailfim3").val(email);
                                                $("#passfim3").val(pass);
                                                $("#namefim3").val(name);
                                                $("#cpffim3").val(cpf);

                                                $("#info").html('');

                                            }

                                        }

                                    </script>
                                    <!-- Tab panes -->
                                    <div class="tab-content">


                                        <div role="tabpanel" class="tab-pane active" id="venda">
<br>
                                            <div class="row">
                                                <div class="col-md-11 ">
                                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('register');?>"  class="form-horizontal" role="form" novalidate>
                                                        <fieldset>
                                                            <input type="hidden" name="type"  value="1">

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Email<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="email" id="emailfim1" placeholder="Email" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome completo<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="name" id="namefim1" placeholder="Nome completo" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Senha<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" required  name="pass" id="passfim1" placeholder="Senha" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="razao">
                                                                <label class="col-sm-2 control-label" for="textinput">Razão social<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="1" id="1" placeholder="Razão social" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" required  name="cnpj" id="cpffim1" placeholder="CNPJ" class="form-control">
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group" id="ies">
                                                                <label class="col-sm-2 control-label" for="textinput">I.E<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="5" id="5" placeholder="Inscrição estadual" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="nomefan">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome Fantasia<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="2" id="2" placeholder="Nome fantasia" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="dcn">
                                                                <label class="col-sm-2 control-label" for="textinput">DC<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="55" id="55" placeholder="Data de Constituição" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group" id="respon">
                                                                <label class="col-sm-2 control-label" for="textinput">Responsável<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="3" id="3" placeholder="Nome do Responsável" class="form-control">
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cargo<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="4" id="4" placeholder="Cargo do Responsável" class="form-control">
                                                                </div>
                                                            </div>


                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Endereço<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="6" id="6" placeholder="Endereço" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Bairro<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="56" id="56" placeholder="Bairro" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Numero<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="57" id="57" placeholder="Nº" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Complemento<b class="text-danger">*</b>  </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="58" id="58" placeholder="Complemento" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cidade<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="7" id="7" placeholder="Cidade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" required  name="8" id="8" placeholder="Estado" class="form-control">
                                                                </div>

                                                                <label class="col-sm-2 control-label" for="textinput">CEP<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" required  name="9" id="9" placeholder="CEP" class="form-control">
                                                                </div>


                                                            </div>



                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="10" id="10" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>      <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 required control-label" for="textinput">Celular<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="11" id="11" placeholder="Celular" class="form-control">
                                                                </div>
                                                            </div>      <!-- Text input-->
                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">FAX</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="12" id="12" placeholder="FAX" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Categoria<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="13" id="13"  placeholder="Categoria" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Televendas<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="14" id="14" placeholder="Televendas" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Nº de funcionários<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="59" id="59" placeholder="Numero de funcionários" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Site<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="60" id="60" placeholder="Site" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">FMM<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="61" id="61" placeholder="Faturamento médio mensal" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Registro de Agricultor<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="62" id="62" placeholder="Registro de Agricultor" class="form-control">
                                                                </div>
                                                            </div>

                                                            <hr>

                                                            <h3 style="text-align: center;">Referências Comerciais</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="15" id="15" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="16" id="16" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="17" id="17" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="18" id="18" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>  <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="19" id="19" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="20" id="20" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="21" id="21" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="22" id="22" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                             <div style="display:none;">
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="23" id="23" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="24" id="24" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="25" id="25" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="26" id="26" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div></div>

                                                            <hr>

                                                             <div style="display:none;"><h3 style="text-align: center;">Principais Clientes</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="27" id="27" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="28" id="28" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="29" id="29" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="30" id="30" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>  <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="31" id="31" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="32" id="32" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="33" id="33" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="34" id="34" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="35" id="35" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="36" id="36" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="37" id="37" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="38" id="38" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div></div>

                                                            <hr>


                                                            <h3 style="text-align: center;">Dados bancarios</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome do banco(1)<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="39" id="39" placeholder="Nome do banco(1)" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Agência<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  required name="40" id="40" placeholder="Agência" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Conta corrente<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="41" id="41" placeholder="Conta corrente" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="63" id="63" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="64" id="64" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>

                                                             <div style="display:none;"><div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome do banco(2)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="42" id="42" placeholder="Nome do banco(2)" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Agência</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="43" id="43" placeholder="Agência" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Conta corrente</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="44" id="44"    placeholder="Conta corrente" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="65" id="65" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="66" id="66" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div></div>

                                                            <hr>


                                                             <div style="display:none;"><h3 style="text-align: center;">Dados do empresario</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresario </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="45" id="45" placeholder="Empresario" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="46" id="46" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">RG </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="47" id="47" placeholder="RG" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado Civil </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="48" id="48"  placeholder="Estado Civil" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Endereço </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="49" id="49"   placeholder="Endereço" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cidade </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="50" id="50"  placeholder="Cidade" class="form-control">
                                                                </div>
                                                            </div>

                                                           
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"  name="51" id="51" placeholder="Estado" class="form-control">
                                                                </div>

                                                                <label class="col-sm-2 control-label" for="textinput">CEP</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"   name="52" id="52"  placeholder="CEP" class="form-control">
                                                                </div>


                                                            </div>

                                                           
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="53" id="53"  placeholder="Telefone" class="form-control" >
                                                                </div>
                                                            </div>      
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Celular </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="54" id="54" placeholder="Celular" class="form-control">
                                                                </div>
                                                            </div>

                                                            <h3 style="text-align: center;">Quadro societário</h3>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="67" id="67" placeholder="Nome" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="68" id="68" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Participação</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="69" id="69" placeholder="% da Participação" class="form-control">
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="70" id="70" placeholder="Nome" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="71" id="71" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Participação</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="72" id="72" placeholder="% da Participação" class="form-control">
                                                                </div>
                                                            </div></div>


                                                            <br>
                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Relatório de Produção: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Relatório de Produção:<br>
                                                                    Anexe o arquivo em .pdf ou .doc
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"  name="73" id="73" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Registro de agricultor: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Registro de aquicultor:<br>
                                                                    Anexe o arquivo em .pdf ou .docx
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"   name="74" id="74" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Cartão do CNPJ ou CPF: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Cartão do CNPJ ou CPF:<br>
                                                                    Anexe o arquivo em .pdf ou .docx
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"   name="75" id="75" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Comprovante de endereço: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Comprovante de endereço:<br>
                                                                    Anexe o arquivo em .pdf ou .docx
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"   name="76" id="76" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                        </fieldset>

                                                        <!-- Inicio Contrato -->

                                                        <div class="container">
                                                            <h4 data-toggle="collapse" data-target="#demo" style="cursor:pointer;">Leia e aceite os termos de uso para continuar <i style="font-size: 14pt;font-weight: bold;" class="pe-7s-angle-down"></i></h4>

                                                            <div id="demo" class="collapse" style="width: 45%;">
                                                              <span>

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
                                                                <div>

                                                                    <!-- Nav tabs -->
                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                        <li  role="presentation" ><a href="#simterms" aria-controls="home" role="tab" data-toggle="tab">Aceito os termos</a></li>

                                                                        <li role="presentation" class="active"><a href="#naoterms" aria-controls="profile" role="tab" data-toggle="tab">Não Aceito os termos</a></li>

                                                                    </ul>

                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane " id="simterms">
                                                                            <br>
                                                                            <button type="submit" class="btn btn-default">Enviar formulario</button></div>
                                                                        <div role="tabpanel" class="tab-pane active" id="naoterms"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Fim Contrato -->




                                                    </form>
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->

                                        </div>


                                        <div role="tabpanel" class="tab-pane" id="compra"><br>
                                            <div class="row">
                                                <div class="col-md-11 ">
                                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('register');?>"  class="form-horizontal" role="form" novalidate>
                                                        <fieldset>
                                                            <input type="hidden" name="type"  value="2">

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Email<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="email" id="emailfim2" placeholder="Email" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome completo<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="name" id="namefim2" placeholder="Nome completo" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Senha<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" required  name="pass" id="passfim2" placeholder="Senha" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="razao1">
                                                                <label class="col-sm-2 control-label" for="textinput">Razão social<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="1" id="1" placeholder="Razão social" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" required  name="cnpj" id="cpffim2" placeholder="CNPJ" class="form-control">
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group" id="ies1">
                                                                <label class="col-sm-2 control-label" for="textinput">I.E<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="5" id="5" placeholder="Inscrição estadual" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="nomefan1">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome Fantasia<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="2" id="2" placeholder="Nome fantasia" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="dcn1">
                                                                <label class="col-sm-2 control-label" for="textinput">DC<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="55" id="55" placeholder="Data de Constituição" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group" id="respon1">
                                                                <label class="col-sm-2 control-label" for="textinput">Responsável<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="3" id="3" placeholder="Nome do Responsável" class="form-control">
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cargo<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="4" id="4" placeholder="Cargo do Responsável" class="form-control">
                                                                </div>
                                                            </div>


                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Endereço<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="6" id="6" placeholder="Endereço" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Bairro<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="56" id="56" placeholder="Bairro" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Numero<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="57" id="57" placeholder="Nº" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Complemento<b class="text-danger"></b>  </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="58" id="58" placeholder="Complemento" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cidade<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="7" id="7" placeholder="Cidade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" required  name="8" id="8" placeholder="Estado" class="form-control">
                                                                </div>

                                                                <label class="col-sm-2 control-label" for="textinput">CEP<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" required  name="9" id="9" placeholder="CEP" class="form-control">
                                                                </div>


                                                            </div>



                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="10" id="10" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>      <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 required control-label" for="textinput">Celular<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="11" id="11" placeholder="Celular" class="form-control">
                                                                </div>
                                                            </div>      <!-- Text input-->
                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">FAX</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="12" id="12" placeholder="FAX" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Categoria<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="13" id="13"  placeholder="Categoria" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Televendas<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="14" id="14" placeholder="Televendas" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Nº de funcionários<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="59" id="59" placeholder="Numero de funcionários" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Site<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="60" id="60" placeholder="Site" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">FMM<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="61" id="61" placeholder="Faturamento médio mensal" class="form-control">
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="62" value="-- --">

                                                           <!--<div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Registro de Agricultor<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="62" id="62" placeholder="Registro de Agricultor" class="form-control">
                                                                </div>
                                                            </div> -->

                                                            <hr>

                                                            <h3 style="text-align: center;">Referências Comerciais</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="15" id="15" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="16" id="16" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="17" id="17" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="18" id="18" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>  <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="19" id="19" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="20" id="20" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="21" id="21" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="22" id="22" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                             <div style="display:none;"><div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="23" id="23" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="24" id="24" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="25" id="25" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="26" id="26" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>

                                                            <hr>

                                                            <h3 style="text-align: center;">Principais Clientes</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="27" id="27" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="28" id="28" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="29" id="29" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="30" id="30" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>  <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="31" id="31" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="32" id="32" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="33" id="33" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="34" id="34" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="35" id="35" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="36" id="36" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="37" id="37" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="38" id="38" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div></div>

                                                            <hr>


                                                            <h3 style="text-align: center;">Dados bancarios</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome do banco(1)<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="39" id="39" placeholder="Nome do banco(1)" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Agência<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  required name="40" id="40" placeholder="Agência" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Conta corrente<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="41" id="41" placeholder="Conta corrente" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="63" id="63" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="64" id="64" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>

                                                             <div style="display:none;"><div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome do banco(2)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="42" id="42" placeholder="Nome do banco(2)" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Agência</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="43" id="43" placeholder="Agência" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Conta corrente</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="44" id="44"    placeholder="Conta corrente" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="65" id="65" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="66" id="66" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div></div>

                                                            <hr>


                                                             <div style="display:none;"><h3 style="text-align: center;">Dados do empresario</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresario </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="45" id="45" placeholder="Empresario" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="46" id="46" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">RG </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="47" id="47" placeholder="RG" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado Civil </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="48" id="48"  placeholder="Estado Civil" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Endereço </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="49" id="49"   placeholder="Endereço" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cidade </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="50" id="50"  placeholder="Cidade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"  name="51" id="51" placeholder="Estado" class="form-control">
                                                                </div>

                                                                <label class="col-sm-2 control-label" for="textinput">CEP</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"   name="52" id="52"  placeholder="CEP" class="form-control">
                                                                </div>


                                                            </div>

                                                            
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="53" id="53"  placeholder="Telefone" class="form-control" >
                                                                </div>
                                                            </div>      
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Celular </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="54" id="54" placeholder="Celular" class="form-control">
                                                                </div>
                                                            </div>

                                                            <h3 style="text-align: center;">Quadro societário</h3>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="67" id="67" placeholder="Nome" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="68" id="68" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Participação</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="69" id="69" placeholder="% da Participação" class="form-control">
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="70" id="70" placeholder="Nome" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="71" id="71" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Participação</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="72" id="72" placeholder="% da Participação" class="form-control">
                                                                </div>
                                                            </div></div>
<br>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Codigo do corretor</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="corretor" id="corretor" placeholder="Codigo do corretor" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Cartão do CNPJ: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Cartão do CNPJ:<br>
                                                                    Anexe o arquivo em .pdf ou .doc
                                                                </small>

                                                                <div class="col-sm-10">
                                                  <input type="file"   name="73" id="73" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Comprovante de Endereço: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Comprovante de Endereço:<br>
                                                                    Anexe o arquivo em .pdf ou .doc
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"   name="74" id="74" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                        </fieldset>

                                                        <!-- Inicio Contrato -->

                                                        <div class="container">
                                                            <h4 data-toggle="collapse" data-target="#demo2" style="cursor:pointer;">Leia e aceite os termos de uso para continuar <i style="font-size: 14pt;font-weight: bold;" class="pe-7s-angle-down"></i></h4>
                                                           
                                                            <div id="demo2" class="collapse" style="width: 45%;">
                                                              <span>

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
                                                                <div>

                                                                    <!-- Nav tabs -->
                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                        <li  role="presentation" ><a href="#simterms2" aria-controls="home" role="tab" data-toggle="tab">Aceito os termos</a></li>

                                                                        <li role="presentation" class="active"><a href="#naoterms2" aria-controls="profile" role="tab" data-toggle="tab">Não Aceito os termos</a></li>

                                                                    </ul>

                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane " id="simterms2">
                                                                            <br>
                                                                            <button type="submit" class="btn btn-default">Enviar formulario</button></div>
                                                                        <div role="tabpanel" class="tab-pane active" id="naoterms2"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Fim Contrato -->




                                                    </form>
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->

                                        </div>


                                        <div role="tabpanel" class="tab-pane" id="transporte"><br>
                                            <div class="row">
                                                <div class="col-md-11 ">
                                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('register');?>"  class="form-horizontal" role="form" novalidate>
                                                        <fieldset>
                                                            <input type="hidden" name="type"  value="3">

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Email<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="email" id="emailfim3" placeholder="Email" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome completo<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="name" id="namefim3" placeholder="Nome completo" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Senha<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" required  name="pass" id="passfim3" placeholder="Senha" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="razao2">
                                                                <label class="col-sm-2 control-label" for="textinput">Razão social<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="1" id="1" placeholder="Razão social" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" required  name="cnpj" id="cpffim3" placeholder="CNPJ" class="form-control">
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group" id="ies2">
                                                                <label class="col-sm-2 control-label" for="textinput">I.E<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="5" id="5" placeholder="Inscrição estadual" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="nomefan2">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome Fantasia<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="2" id="2" placeholder="Nome fantasia" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="dcn2">
                                                                <label class="col-sm-2 control-label" for="textinput">DC<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="55" id="55" placeholder="Data de Constituição" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group" id="respon2">
                                                                <label class="col-sm-2 control-label" for="textinput">Responsável<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="3" id="3" placeholder="Nome do Responsável" class="form-control">
                                                                </div>
                                                            </div>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cargo<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="4" id="4" placeholder="Cargo do Responsável" class="form-control">
                                                                </div>
                                                            </div>


                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Endereço<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="6" id="6" placeholder="Endereço" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Bairro<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="56" id="56" placeholder="Bairro" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Numero<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="57" id="57" placeholder="Nº" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Complemento<b class="text-danger">*</b>  </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="58" id="58" placeholder="Complemento" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cidade<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="7" id="7" placeholder="Cidade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" required  name="8" id="8" placeholder="Estado" class="form-control">
                                                                </div>

                                                                <label class="col-sm-2 control-label" for="textinput">CEP<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" required  name="9" id="9" placeholder="CEP" class="form-control">
                                                                </div>


                                                            </div>



                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="10" id="10" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>      <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-sm-2 required control-label" for="textinput">Celular<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="11" id="11" placeholder="Celular" class="form-control">
                                                                </div>
                                                            </div>      <!-- Text input-->
                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">FAX</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="12" id="12" placeholder="FAX" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Categoria<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="13" id="13"  placeholder="Categoria" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Televendas<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="14" id="14" placeholder="Televendas" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Nº de funcionários<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="59" id="59" placeholder="Numero de funcionários" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Site<b class="text-danger"></b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="60" id="60" placeholder="Site" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">FMM<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="61" id="61" placeholder="Faturamento médio mensal" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group" style="display:none;">
                                                                <label class="col-sm-2 control-label" for="textinput">Registro de Agricultor<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="62" id="62" placeholder="Registro de Agricultor" class="form-control">
                                                                </div>
                                                            </div>

                                                            <hr>

                                                            <h3 style="text-align: center;">Referências Comerciais</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="15" id="15" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="16" id="16" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="17" id="17" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="18" id="18" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>  <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="19" id="19" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="20" id="20" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="21" id="21" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="22" id="22" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                             <div style="display:none;">
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="23" id="23" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="24" id="24" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="25" id="25" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="26" id="26" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div></div>

                                                            <hr>

                                                             <div style="display:none;"><h3 style="text-align: center;">Principais Clientes</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="27" id="27" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="28" id="28" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="29" id="29" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="30" id="30" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>  <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="31" id="31" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="32" id="32" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="33" id="33" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="34" id="34" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="35" id="35" placeholder="Empresa" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Ramo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="36" id="36" placeholder="Ramo de atividade" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="37" id="37" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="38" id="38" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div></div>

                                                            <hr>


                                                            <h3 style="text-align: center;">Dados bancarios</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome do banco(1)<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="39" id="39" placeholder="Nome do banco(1)" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Agência<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  required name="40" id="40" placeholder="Agência" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Conta corrente<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="41" id="41" placeholder="Conta corrente" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="63" id="63" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone<b class="text-danger">*</b> </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required  name="64" id="64" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>

                                                             <div style="display:none;">
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome do banco(2)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="42" id="42" placeholder="Nome do banco(2)" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Agência</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="43" id="43" placeholder="Agência" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Conta corrente</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="44" id="44"    placeholder="Conta corrente" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Contato </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="65" id="65" placeholder="Contato" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="66" id="66" placeholder="Telefone" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                            <hr>

                                                            <div style="display:none;">
                                                            <h3 style="text-align: center;">Dados do empresario</h3>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Empresario </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="45" id="45" placeholder="Empresario" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="46" id="46" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">RG </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="47" id="47" placeholder="RG" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado Civil </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"   name="48" id="48"  placeholder="Estado Civil" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Endereço </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="49" id="49"   placeholder="Endereço" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Cidade </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="50" id="50"  placeholder="Cidade" class="form-control">
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Estado </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"  name="51" id="51" placeholder="Estado" class="form-control">
                                                                </div>

                                                                <label class="col-sm-2 control-label" for="textinput">CEP</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"   name="52" id="52"  placeholder="CEP" class="form-control">
                                                                </div>


                                                            </div>

                                                            
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Telefone </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="53" id="53"  placeholder="Telefone" class="form-control" >
                                                                </div>
                                                            </div>      
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Celular </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="54" id="54" placeholder="Celular" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div>

                                                            <div style="display:none;"><h3 style="text-align: center;">Quadro societário</h3>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="67" id="67" placeholder="Nome" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="68" id="68" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Participação</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="69" id="69" placeholder="% da Participação" class="form-control">
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Nome</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="70" id="70" placeholder="Nome" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">CPF </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="71" id="71" placeholder="CPF" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label" for="textinput">Participação</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="72" id="72" placeholder="% da Participação" class="form-control">
                                                                </div>
                                                            </div></div>
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Cartão do CNPJ: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Cartão do CNPJ:<br>
                                                                    Anexe o arquivo em .pdf ou .doc
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"  name="73" id="73" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Comprovante de Endereço: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Comprovante de Endereço:<br>
                                                                    Anexe o arquivo em .pdf ou .doc
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"  name="74" id="74" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="textinput">Registro ANTT: (pdf, doc)</label>
                                                                <br>
                                                                <small>
                                                                    Registro ANTT:<br>
                                                                    Anexe o arquivo em .pdf ou .doc
                                                                </small>

                                                                <div class="col-sm-10">
                                                                    <input type="file"  name="75" id="75" placeholder="Documentos" class="form-control">
                                                                </div>
                                                            </div>

                                                        </fieldset>

                                                        <!-- Inicio Contrato -->

                                                        <div class="container">
                                                            <h4 data-toggle="collapse" data-target="#demo3" style="cursor:pointer;">Leia e aceite os termos de uso para continuar <i style="font-size: 14pt;font-weight: bold;" class="pe-7s-angle-down"></i></h4>

                                                            <div id="demo3" class="collapse" style="width: 45%;">
                                                              <span>

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
                                                                <div>

                                                                    <!-- Nav tabs -->
                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                        <li  role="presentation" ><a href="#simterms3" aria-controls="home" role="tab" data-toggle="tab">Aceito os termos</a></li>

                                                                        <li role="presentation" class="active"><a href="#naoterms3" aria-controls="profile" role="tab" data-toggle="tab">Não Aceito os termos</a></li>

                                                                    </ul>

                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane " id="simterms3">
                                                                            <br>
                                                                            <button type="submit" class="btn btn-default">Enviar formulario</button></div>
                                                                        <div role="tabpanel" class="tab-pane active" id="naoterms3"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Fim Contrato -->




                                                    </form>
                                                </div><!-- /.col-lg-12 -->
                                            </div><!-- /.row -->
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-2 col-sm-5">
                    <form id="precadastro" role="form" action="javascript:func();" class="intro-form">
                        <h3 class="text-center">FAÇA SEU CADASTRO</h3>
                        <div class="form-group">
                            <input id="namefull" type="text" class="form-control" placeholder="Nome completo" >
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control" placeholder="E-mail" >
                        </div>
                         <div class="form-group">
                            <div class="radio">
                              <label class="radio-inline"><input checked type="radio" id="tipoPessoa1"  name="tipoPessoa" value="1">Pessoa Física</label>
                            </div>
                            <div class="radio">
                              <label class="radio-inline"><input type="radio" id="tipoPessoa2" name="tipoPessoa" value="2">Pessoa Juridica</label>
                            </div>
                        </div>
                        <div id="pessoa" class="form-group" style="display:none;">
                            <input id="cpf-cnpj" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" placeholder="Senha" >
                        </div>
                        <div class="form-group text-center">
                            <style>
                                #brncads{
                                    color: whitesmoke;
                                    font-size: 12pt;
                                }
                                </style>

                               


                            <b id="info"><?php if($reportData):

                                    echo $reportData;
                                endif;


                                ?></b>
                            <button id="brncads"  onclick="caduser();"  class="btn  btn-sm btn-block btn-info" >Cadastrar</button>
                        </div>

                    </form>
                </div><!-- end col -->


            </div>
        </div>

        <?php

        else:
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="home-wrapper home-wrapper-alt p-1">
                            <h1 class="text-white" style="text-shadow: 1px 1px 5px #000000; color:black;">QUEM SOMOS</h1>
                            <h4 class="text-light" style="text-shadow: 1px 1px 5px #000000; color:white;">Somos a primeira empresa especializada na comercialização de pescados no Brasil. Baseados no sistema adotado pela cooperativa de Holambra criamos a Aquamercantil. Uma ferramenta para facilitar o comércio de pescados e aproximar o produtor do mercado.</h4>
                            <a href="<?php echo base_url('quem-somos');?>" class="btn btn-white-bordered" >Ver mais</a>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>
    </div>

</section>




<?php

$this->db->from('leiloes');
$querya1s = $this->db->get();
$rowcount1as = $querya1s->num_rows();
if($rowcount1as > 0):

?>
<!-- Page Content -->
<div class="container" id="leiloes">
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $maxitens2 = 4;

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
                <div class="col-md-5 col-sm-5">
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
                                                        <?php
                                                        $endsdate = $dds['data_fim'];
                                                        $ano = substr($endsdate, 0, 4);
                                                        $mes = substr($endsdate, 4, 2);
                                                        $dia = substr($endsdate, 6, 2);
                                                        $hora = substr($endsdate, 8, 2);
                                                        $minuto = substr($endsdate, 10, 2);
                                                        $segundo = substr($endsdate, 12, 2);?>
                                                        <?php
                                                        $indate = $dds['data_inicio'];
                                                        $anoi = substr($indate, 0, 4);
                                                        $mesi = substr($indate, 4, 2);
                                                        $diai = substr($indate, 6, 2);
                                                        $horai = substr($indate, 8, 2);
                                                        $minutoi = substr($indate, 10, 2);
                                                        $segundoi = substr($indate, 12, 2);
                                                        ?>
                                                        <span style="text-align: center;">
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




                                                        </span>

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
                    <br>

                    <div style="font-size: 15pt;text-decoration: none;float: left;margin-top: -2%;"><b><?php echo $dds['titulo']; ?></b></div>
                    <script>
                    </script>
                    <script type="text/javascript">
                        $("#getting-start<?php echo $dds['id'];?>")
                            .countdown("<?php echo $ano;?>/<?php echo $mes;?>/<?php echo $dia;?> <?php echo $horap?>:<?php echo $minuto?>:<?php echo $segundo?> <?php echo $dsp;?>", function(event) {
                                $(this).html(
                                    event.strftime('<b>Termina em:</b> %D dias %H:%M:%S')
                                );
                            });
                    </script><br><b>Preço final por KG:</b> <span class="text-info"> R$ <span><?php echo number_format($dds['valor_min'],2,'.',',');?></span></span> <b>/</b> 
					<b>Preço atual por KG:</b> <span class="text-info"> R$ <span id="time<?php echo $dds['id']?>" onclick="">00</span></span>

                    <br>

                    <br>
                    <span id="reportErros"></span>

                    <?php

                    $ind = $dds['data_inicio'];
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
                    $horaats = date('h');
                    $minutoats = date('i');


                    $valuein = $segundoat  +  $minutoat * $minc + $horaat * $horac + $diaat * $diac + $mesat * $mesc + $anoat * $anoc ;

                    $valueout = $segundoats  + $minutoats * $minc + $horaats * $horac + $diaats * $diac + $mesats * $mesc + $anoats * $anoc ;


                    $desconto =  $valueout - $valuein;

                    $centavos =  str_replace (',','',$dds['valor_max']) * 100;




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
											

											
											
                   

                    $tempo = number_format($real / 100,2,'.',',');
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
                        $resdate =  str_replace (',','',$dds['valor_min']);
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
                           <!-- onclick="arremate(<?php //echo $dds['id'];?>,<?php //echo @$_SESSION['ID'];?>);"-->
<?php



                            ?>






                            <a <?php
                            if(isset($_SESSION['ID'])):

                                echo 'onclick="arremate('.$dds["id"].','.$_SESSION["ID"].');"';
                                else:

                                    echo 'data-toggle="modal" data-target="#login"';
                                    endif;
                            ?>
                                  class="btn btn-success" id="arrematebts" style="float: right;margin-top: -4.5%;margin-right: 1%;margin-left: 1%;">Arrematar
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
        <script>
            function arremateFellins(leilao) {

                $("#modalArremate"+leilao+"").modal('show');

            }
        </script>

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
        <?php if(isset($_SESSION['ID'])):?>
        <nav aria-label="..." >
            <ul class="pager">
                <li><a href="<?php echo base_url('leiloes');?>">Ver mais</a></li>
            </ul>
        </nav>
            <?php endif;?>

                <!-- <nav aria-label="..." >
                     <ul class="pager" >
                         <li><a href="<?php echo base_url('leiloes?bpg='.$before);?>">Anterior</a></li>
                         <li><a href="<?php echo base_url('leiloes?bpg='.$next);?>">Proximo</a></li>
                     </ul>
                 </nav>-->
    <?php endif;?>





    <?php
    if(isset($_POST['type']) and $_POST['type'] == '4575851'):

        //$this->db->where('id_user',$_SESSION['ID']);
        //$this->db->delete('notify');

    endif;
    ?>

    <!-- Page Content -->
    <div class="container">
        <?php

        date_default_timezone_set('America/Sao_Paulo');
        $maxitens1 = 4;

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
                                                   <br>
                                                        <?php
                                                        $endsdate = $dds['data_fim'];
                                                        $ano = substr($endsdate, 0, 4);
                                                        $mes = substr($endsdate, 4, 2);
                                                        $dia = substr($endsdate, 6, 2);
                                                        $hora = substr($endsdate, 8, 2);
                                                        $minuto = substr($endsdate, 10, 2);
                                                        $segundo = substr($endsdate, 12, 2);?>
                                                        <?php
                                                        $indate = $dds['data_inicio'];
                                                        $anoi = substr($indate, 0, 4);
                                                        $mesi = substr($indate, 4, 2);
                                                        $diai = substr($indate, 6, 2);
                                                        $horai = substr($indate, 8, 2);
                                                        $minutoi = substr($indate, 10, 2);
                                                        $segundoi = substr($indate, 12, 2);
                                                        ?>
                                                        <span style="text-align: center;">
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
                                                            Valor inicial: <b>R$<?php echo number_format($dds['valor_max'],2,'.',',');?></b>&nbsp;&nbsp;&nbsp;Valor final: <b>R$<?php echo number_format($dds['valor_min'],2,'.',',');?></b>   <br><br> Data do inicio: <b><?php echo $diai.'/'.$mesi.'/'.$anoi.' '.$horai.':'.$minutoi.':'.$segundoi;?></b>&nbsp;&nbsp;
                                                            Data do fim: <b><?php echo $dia.'/'.$mes.'/'.$ano.' '.$hora.':'.$minuto.':'.$segundo;?></b><br><br>
                                                            <?php
                                                            if(!empty($dds['descricao'])):
                                                                ?>  <?php echo $dds['descricao'];?>
                                                            <?php endif;?>


                                                            <br>



                                                        </span>
                                                        <?php
                                                        if(isset($_SESSION['ID'])):
                                                       $this->db->from('lances_antecipados');
                                                        $this->db->where('id_usuario',$_SESSION['ID']);
                                                        $this->db->where('id_leilao',$dds['id']);
                                                        $query = $this->db->get();

                                                        $rowcount = $query->num_rows();

                                                        if($dds['type'] == 1 and $rowcount == 0):


                                                            ?>
                                                            <script>
                                                                function runScript<?php echo $dds['id'];?>(e) {

                                                                    var userTp = '<?php
                                                                        if(isset($_SESSION['TYPE'])):
                                                                          echo  $_SESSION['TYPE'];
                                                                        else:
                                                                      echo 0;
                                                                        endif;
                                                                       ?>';

                                                                    if (e.keyCode == 13) {
                                                                        var tb = $("#lancepre<?php echo $dds['id'];?>").val();
																		
																		 
                                                                      
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



<script>
$(document).ready(function(){
 
  $('#money').mask('000.000.000.000.000,00', {reverse: true});
  $('#lancepre<?php echo $dds['id']; ?>').mask("###0.00", {reverse: true});
  
});
</script>
                                                            <b class="text-info" style="text-align: center;margin: 0 0 0 20%;" id="infolance<?php echo $dds['id'];?>"></b>

                                                            <div class="input-group" id="lancebefore<?php echo $dds['id'];?>">
                                                                <span class="input-group-addon">R$</span>

							<input onkeypress="return runScript<?php echo $dds['id'];?>(event)" class="form-control" placeholder="Meu lance" id="lancepre<?php echo $dds['id'];?>" aria-label="Amount (to the nearest dollar)"> <span class="input-group-addon">.00</span> </div>
                                                            <br><?php


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
                        <a href="javascript:func();">
                            <img style="object-fit: cover; object-position: center;width: 100%;max-width: 100%; height: 300px;" class="img-responsive img-portfolio img-hover" src="<?php echo $dds['image'];?>" alt="">

                        </a>
                        <br>
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

                        <a

                        <?php

                    if(!isset($_SESSION['ID'])):
                        echo 'onclick="loguser();"';
                        ?>
                        <?php else: echo 'data-toggle="modal" data-target="#next'.$dds['id'].'"'; endif;?> class="btn btn-info" style="float: right;margin-top: -2.5%;">
                            <?php
                            if(!isset($_SESSION['ID'])):
                                echo 'Participar';

                            elseif($dds['type'] == 1):
                                echo 'Lance antecipado';



                            else:
                                echo 'Ver detalhes';

                            endif;
                            ?>
                        </a>

<br><br>

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
        <?php if(isset($_SESSION['ID'])):?>

           <nav aria-label="..." >
                <ul class="pager">
                    <li><a href="<?php echo base_url('leiloes');?>">Ver mais</a></li>
                </ul>
            </nav>
<?php endif;?>

           <!-- <nav aria-label="..." >
                <ul class="pager">
                    <li><a href="<?php echo base_url('leiloes?npg='.$before);?>">Anterior</a></li>
                    <li><a href="<?php echo base_url('leiloes?npg='.$next);?>">Proximo</a></li>
                </ul>
            </nav>
            -->




        <?php endif;?>

        <?php



        ?>

</div>
</div>

<?php endif; ?>


<?php
if(!isset($_SESSION['ID'])):
?>
<section class="section" id="pricing">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="title">Seja nosso cliente</h3>

            </div>
        </div> <!-- end row -->


        <div class="row">
            <div class="col-lg-12 col-lg-offset-0">
                <div class="row">

                    <!--Pricing Column-->
                    <article onclick="changeact('1');" class="pricing-column col-lg-4 col-md-4">
                        <div id="div1" class="inner-box destaque-divs" style="background-image: url(<?php echo base_url('assets/images/our-menu-1.jpg');?>);">
                            <div class="plan-header text-center ">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>
                            <div class="text-inner-explication" style="height:320px;margin-top: -16%">
                                <h4>Quer Comprar?</h4>
                                <p>Comprar é uma tarefa difícil se você decide oferecer aos seus clientes um produto com padrão de qualidade 
                                    elevado e com oferta constante. Temos fornecedores em todo o Brasil e em alguns 
                                    países do Mercosul com produtos de elevado padrão de qualidade, peso e especificações difíceis de 
                                    se encontrar no mercado com frequência necessária sua atividade.</p>

                            </div>

                            <div class="text-center">
                                <a href="#" class="btn btn-sm btn-custom">SIM</a>
                            </div>
                        </div>
                    </article>


                    <!--Pricing Column-->
                    <article  onclick="changeact('2');" class="pricing-column col-lg-4 col-md-4">
                        <div id="div2" class="inner-box active destaque-divs" style="height:520px;background-image: url(<?php echo base_url('assets/images/our-menu-2.jpg');?>);">
                            <div class="plan-header text-center ">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>
                            <div class="text-inner-explication" style="height:320px;margin-top: -10%">
                                <h4>Quer Vender?</h4>
                                <p>Temos carteira de clientes pronta para adquirir seus produtos de maneira frequente e com segurança financeira. 
                                    Viabilizamos a comercializão dos seus produtos para o mercado nacional e internacional.    

                                </p>

                            </div>

                            <div class="text-center">
                                <a href="#" class="btn btn-sm btn-custom">SIM</a>
                            </div>
                        </div>
                    </article>

                    <style>
                        .destaque-divs{
                            background-size: 100% 100%;
                            background-size: cover;-webkit-background-size: cover;
                            -moz-background-size: cover;
                            -ms-background-size: cover;
                            -o-background-size: cover;
                            background-repeat: no-repeat;
                            height: 500px;

                        }

                        .text-inner-explication{
                            width: 130%;
                            margin: 30% 0 0 -15%;
                            padding: 1%;
                            border: 1px solid black;
                            height: 200px;
                            background: white;
                            text-align: center;
                        }
                        </style>

                    <article onclick="changeact('3');" class="pricing-column col-lg-4 col-md-4">
                        <div id="div3" class="inner-box destaque-divs" style="height:520px;background-image: url(<?php echo base_url('assets/images/our-menu-3.jpg');?>);">
                            <div class="plan-header text-center ">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                            </div>
                            <div class="text-inner-explication" style="height:320px;margin-top: -10%">
                                <h4>Quer Transportar Nossos Produtos?</h4>
                                <p>Se você tem estrutura para transporte e/ou armazenamento de cargas resfriadas ou frigorificadas e tem interesse em transportar nossos produtos, no perca tempo.</p>

                            </div>

                            <div class="text-center">
                                <a href="#" class="btn btn-sm btn-custom nav-link">SIM</a>
                            </div>
                        </div>
                    </article>

                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</section>

<?php endif;?>
<section class="section bg-light" id="patrocinadores">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="title">Nossos parceiros</h3>

            </div>
        </div>
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }
    .imgCarrossel {
        max-width: 100%;
        -webkit-filter: grayscale(10);
        filter: grayscale(10);
    }

    .imgCarrossel:hover {
        -webkit-filter:grayscale(0);
        filter: grayscale(0);
    }

</style>
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="col-xs-4">
                    <a href="http://manta.eng.br" target="blank"><img class="imgCarrossel" src="<?php echo base_url('assets/images/icons/parceiros/manta.png');?>"></a>
                </div>
                <div class="col-xs-4">
                    <a href="http://racoesprimor.com.br/novo/proacqua.php&#10;" target="blank"><img class="imgCarrossel" src="<?php echo base_url('assets/images/icons/parceiros/primor.png');?>"></a>
                </div>
                <div class="col-xs-4">
                    <a href="http://aquanordeste.com.br" target="blank"><img class="imgCarrossel" src="<?php echo base_url('assets/images/icons/parceiros/aquanordeste.png');?>"></a>
                </div>

            </div>
            <div class="item ">
                <div class="col-xs-4">
                    <a href="http://manta.eng.br" target="blank"><img class="imgCarrossel" src="<?php echo base_url('assets/images/icons/parceiros/manta.png');?>"></a>
                </div>
                <div class="col-xs-4">
                    <a href="http://racoesprimor.com.br/novo/proacqua.php&#10;" target="blank"><img class="imgCarrossel" src="<?php echo base_url('assets/images/icons/parceiros/primor.png');?>"></a>
                </div>
                <div class="col-xs-4">
                    <a href="http://aquanordeste.com.br" target="blank"><img class="imgCarrossel" src="<?php echo base_url('assets/images/icons/parceiros/aquanordeste.png');?>"></a>
                </div>

            </div>

        </div>

    </div>
</div>
</section>
<!-- Clients -->
<section class="section bg-light" id="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="title">Nossa Equipe
                </h3>
               <!-- <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's <br/> designed for describing your app, agency or business.</p> -->
            </div>
        </div>
        <!-- end row -->

        <div class="row text-center">
            <div class="col-sm-9">
              <!--  <ul class="list-inline client-list">
                    <li><a href="" title="Microsoft"><img src="images/clients/microsoft.png" alt="clients"></a></li>
                    <li><a href="" title="Google"><img src="images/clients/google.png" alt="clients"></a></li>
                    <li><a href="" title="Instagram"><img src="images/clients/instagram.png" alt="clients"></a></li>
                    <li><a href="" title="Converse"><img src="images/clients/converse.png" alt="clients"></a></li>
                </ul> -->


                <div class="row">

                    <?php
                    require_once 'application/core/class/Configure.class.php';
                    $configure = new Configure();
                    $this->db->order_by("id","desc");
                    $query = $this->db->get('page_equipe_itens', 0, 4);


                    foreach ($query->result() as $row)
                    {
                   ?>


                        <!-- Modal -->
                        <div class="modal fade" id="equipemodal<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="kode-testimonial-hd modal-header">
                                            <div style="padding-left: 30px; padding-right: 30px;">
                                                <h4 id="titulo"><?php
                                                    echo $row->nome
                                                    ?></h4>
                                                <span id="subtitulo"><?php
                                                    echo $row->desc
                                                    ?></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div style="padding-left: 60px; padding-right: 60px; margin-left: -40px;">
                                                <div class="kode-testimonial-des">
                                                    <figure id="imgModal"><img style="float: left; padding: 2%; width: 160px;" class="img-rounded" src="<?php echo base_url($row->img);?>"></figure>
                                                    <div class="blockquote-2">
                                                        <p><i class="fa fa-quote-left"></i>
                                                            <span id="textoModal"><?php echo $row->texto

                                                                ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <div class="col-md-4" data-toggle="modal" data-target="#equipemodal<?php echo $row->id;?>">
                        <div class="testimonial-description text-left">
                            <p class="text-muted">
                                <?php

                                echo $configure->limitarTexto($row->texto,100);

                                ?>
                            </p>
                        </div>

                        <div class="testimonial-user-info user-info text-left">
                            <div class="testimonial-user-thumb user-thumb">
                                <img src="<?php echo base_url($row->img);?>" style="object-fit: cover; object-position: center; " alt="user-thumb">
                            </div>
                            <div class="testimonial-user-txt user-text">
                                <label class="testimonial-user-name user-name"><?php
                                    echo $row->nome
                                    ?></label>
                                <p class="testimonial-user-position user-position text-muted"><?php echo   $configure->limitarTexto($row->desc,25);?></p>
                            </div>
                        </div>
                    </div>

                    <?php

                    }
                    ?>

                </div>
            </div> <!-- end Col -->

        </div><!-- end row -->

    </div>
</section>
<!--End  Clients -->



<section class="section" id="contact"  style="background-color: #2f3e47;">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h3 class="title text-white">Nos envie uma mensagem</h3>
                <p class="text-light sub-title">Duvidas, comentarios, sugestões. Nos envie uma mensagem que responderemos o mais rapido possivel.</p>
            </div>
        </div> <!-- end row -->

        <div class="row">

            <!-- Contact form -->
            <div class="col-sm-6">

                <?php
                $attributes = array( 'name' => 'ajax-form', 'class' => 'contact-form');
                $attributesinptName = array( 'name' => 'name', 'class' => 'form-control','placeholder' => 'Seu nome', 'type' => 'text');
                $attributesinptEmail = array( 'name' => 'email', 'class' => 'form-control','placeholder' => 'Seu Email', 'type' => 'email');
                $attributesinptMensage = array('name' => 'Mensagem', 'class' => 'form-control', 'placeholder' => 'Mensagem','rows' => '8','cols' => '10');
                $attributesSend = array();

                if($formerror):
                    echo '<p class="text-white" style="color: whitesmoke;">'.$formerror.'</p>';
                endif;

                echo form_open('home#contact',$attributes);
                echo '<div class="form-group">';
                echo form_input('nome',set_value('nome'),$attributesinptName);
                echo '</div>';
                echo '<div class="form-group">';
                echo form_input('email',set_value('email'),$attributesinptEmail);
                echo '</div>';

                echo '<div class="form-group">';
                echo form_textarea('mensagem',set_value('mensagem'),$attributesinptMensage);
                echo '</div>';

                echo '<div class="text-center">';
                echo form_submit('enviar', 'Enviar mensagem',array('class' => 'btn btn-custom btn-info','id' => 'send'));
                echo '</div>';
                echo form_close();

                ?>

            </div> <!-- end col -->
			
			
			

            <div class="col-sm-4 col-sm-offset-1">

                    <img style='position: absolute;' src="https://cdn2.iconfinder.com/data/icons/flat-seo-web-ikooni/128/flat_seo3-12-512.png" alt="img" class="img-responsive">

            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- end container -->
</section>


	<?php
	$this->db->from('cotacao');
		 		 $this->db->order_by('id_cotacao','desc');
				 
                    $getcot = $this->db->get();
					
					if($getcot->num_rows() > 0):
	
	?>
	
	<style>
	#cotacaotabr table .table{
	}
	</style>
       
<section class="section" id="cotacaotabr"  >
    <div class="container">
			<h2>Ultimas cotações</h2>
<br>
        <div class="row">

            <!-- Contact form -->
            <div class="col-sm-12">
			<?php
		
						
						$fetch = $getcot->result_array();
					
					echo $fetch[0]['cotacao'];
			?>
			
			
			
		
			</div>
			</div>
			</div>
			</section>
				<?php endif;?>
<?php


$this->load->view('fixed_files/index/footer');


?>

