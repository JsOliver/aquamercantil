<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>AquaMercantil &copy; Todos os direitos reservados <?php echo date('Y');?></p>
        </div>
    </div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/leilao/js/jquery.js');?>"></script>



<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>




<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
<script type="text/javascript" src="http://www.aquamercantil.com.br/assets/js/jquery.mask.js"></script>
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
