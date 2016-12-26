<?php
?>
</div>
<!-- jQuery -->
<script src="http://www.aquamercantil.com.br/assets/js/jquery-2.1.4.min.js"></script>
<script src="http://www.aquamercantil.com.br/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/admin/');?>vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/admin/');?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/admin/');?>vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url('assets/admin/');?>vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/admin/');?>vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url('assets/admin/');?>data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets/admin/');?>dist/js/sb-admin-2.js"></script>

	
<script type="text/javascript">
                            jQuery('#classificacao').on('change', function() {
                                var tipo = this.value;

                                jQuery("#cpp").empty();

                                if(tipo === 'Processado Congelado'){
                                    jQuery('#cpp').append('<option value=""></option>');
                                    jQuery('#cpp').append('<option value="Banda com cabeça">Banda com cabeça</option>');
                                    jQuery('#cpp').append('<option value="Banda sem cabeça">Banda sem cabeça</option>');
                                    jQuery('#cpp').append('<option value="Cabeça">Cabeça</option>');
                                    jQuery('#cpp').append('<option value="Camarão butterfly">Camarão butterfly</option>');
                                    jQuery('#cpp').append('<option value="Camarão cozido descascado">Camarão cozido descascado</option>');
                                    jQuery('#cpp').append('<option value="Camarão cozido sem cabeça">Camarão cozido sem cabeça</option>');
                                    jQuery('#cpp').append('<option value="Camarão descascado">Camarão descascado</option>');
                                    jQuery('#cpp').append('<option value="Camarão eviscerado">Camarão eviscerado</option>');
                                    jQuery('#cpp').append('<option value="Camarão sem cabeça">Camarão sem cabeça</option>');
                                    jQuery('#cpp').append('<option value="Camarão Tail of">Camarão Tail of</option>');
                                    jQuery('#cpp').append('<option value="Camarão Tail on">Camarão Tail on</option>');
                                    jQuery('#cpp').append('<option value="Cauda de Lagosta">Cauda de Lagosta</option>');
                                    jQuery('#cpp').append('<option value="Costela inteira">Costela inteira</option>');
                                    jQuery('#cpp').append('<option value="Costela palito">Costela palito</option>');
                                    jQuery('#cpp').append('<option value="Espalmado">Espalmado</option>');
                                    jQuery('#cpp').append('<option value="Eviscerado com cabeça">Eviscerado com cabeça</option>');
                                    jQuery('#cpp').append('<option value="Eviscerado sem cabeça">Eviscerado sem cabeça</option>');
                                    jQuery('#cpp').append('<option value="Filé com pele">Filé com pele</option>');
                                    jQuery('#cpp').append('<option value="Filé sem pele">Filé sem pele</option>');
                                    jQuery('#cpp').append('<option value="Inteiro sem escama">Inteiro sem escama</option>');
                                    jQuery('#cpp').append('<option value="Isca">Isca</option>');
                                    jQuery('#cpp').append('<option value="Lagosta Inteira">Lagosta Inteira</option>');
                                    jQuery('#cpp').append('<option value="Lombo">Lombo</option>');
                                    jQuery('#cpp').append('<option value="Manta">Manta</option>');
                                    jQuery('#cpp').append('<option value="Posta">Posta</option>');
                                    jQuery('#cpp').append('<option value="Ventrecha">Ventrecha</option>');
                                    
                                } 

                                if(tipo === 'Processado Fresco'){
                                    jQuery('#cpp').append('<option value=""></option>');
                                    jQuery('#cpp').append('<option value="Banda com cabeça">Banda com cabeça</option>');
                                    jQuery('#cpp').append('<option value="Banda sem cabeça">Banda sem cabeça</option>');
                                    jQuery('#cpp').append('<option value="Cabeça">Cabeça</option>');
                                    jQuery('#cpp').append('<option value="Camarão sem cabeça">Camarão sem cabeça</option>');
                                    jQuery('#cpp').append('<option value="Costela palito">Costela palito</option>');
                                    jQuery('#cpp').append('<option value="Espalmado">Espalmado</option>');
                                    jQuery('#cpp').append('<option value="Eviscerado com cabeça">Eviscerado com cabeça</option>');
                                    jQuery('#cpp').append('<option value="Eviscerado sem cabeça">Eviscerado sem cabeça</option>');
                                    jQuery('#cpp').append('<option value="Filé com pele">Filé com pele</option>');
                                    jQuery('#cpp').append('<option value="Filé sem pele">Filé sem pele</option>');
                                    jQuery('#cpp').append('<option value="Inteiro sem escama">Inteiro sem escama</option>');
                                    jQuery('#cpp').append('<option value="Lagosta Inteira">Lagosta Inteira</option>');
                                    jQuery('#cpp').append('<option value="Lombo">Lombo</option>');
                                    jQuery('#cpp').append('<option value="Manta">Manta</option>');
                                    jQuery('#cpp').append('<option value="Posta">Posta</option>');
                                    jQuery('#cpp').append('<option value="Ventrecha">Ventrecha</option>');
                                    
                                }
                              
                            })
                    </script>


</body>

</html>