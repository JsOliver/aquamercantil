<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--
<footer class="section bg-gray footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h5>Zodkoo</h5>
                <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>Social</h5>
                <ul class="list-unstyled">
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Behance</a></li>
                    <li><a href="">Dribbble</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>Support</h5>
                <ul class="list-unstyled">
                    <li><a href="">Help & Support</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <h5>Contact</h5>
                <address>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890<br/>
                    E: <a href="mailto:#">email@email.com</a>
                </address>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="footer-alt text-center">
                    <p class="text-muted m-b-0">2016 © Zodkoo</p>
                </div>
            </div>
        </div>

    </div>
</footer>
 -->


<!-- Back to top -->
<a href="#" class="back-to-top" id="back-to-top"> <i class="pe-7s-angle-up"> </i> </a>

<!-- Style switcher
<div id="style-switcher" style="left: 0px;">
    <div>
        <h3>Choose your color</h3>
        <ul class="pattern">
            <li>
                <a class="color1" href="#"></a>
            </li>
            <li>
                <a class="color2" href="#"></a>
            </li>
            <li>
                <a class="color3" href="#"></a>
            </li>
            <li>
                <a class="color4" href="#"></a>
            </li>
            <li>
                <a class="color5" href="#"></a>
            </li>
            <li>
                <a class="color6" href="#"></a>
            </li>
            <li>
                <a class="color7" href="#"></a>
            </li>
            <li>
                <a class="color8" href="#"></a>
            </li>
        </ul>
    </div>
    <div class="bottom">
        <a href="#" class="settings"><i class="pe-7s-config"></i></a>
    </div>
</div>
 end Style switcher -->


<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/');?>js/bootstrap.min.js"></script>

<!-- Jquery easing -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.min.js');?>"></script>

<!--sticky header-->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sticky.js');?>"></script>

<!-- mailchimp - ajax form -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ajaxchimp.js');?>"></script>



<!--common script for all pages-->
<script src="<?php echo base_url('assets/js/jquery.app.js');?>"></script>

<!-- switcher -->
<script src="<?php echo base_url('assets/js/switcher.js');?>"></script>
<script src="<?php echo base_url('assets/js/functions/layout.js');?>"></script>

 <script type="text/javascript">
                                   $('#precadastro input').on('change', function() {
                                       var tipoPessoa = $('input[name=tipoPessoa]:checked', '#precadastro').val(); 

                                        if(tipoPessoa==1){
                                            $('#pessoa').show();
                                            $("#cpf-cnpj").attr("placeholder", "CPF");
                                            $('#cpf-cnpj').mask('000.000.000-00');
                                        } else{
                                            $('#pessoa').show();
                                            $("#cpf-cnpj").attr("placeholder", "CNPJ");
                                            $('#cpf-cnpj').mask('00.000.000/0000-00');
                                        }

                                    });
                                </script>

</body>
</html>