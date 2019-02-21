        <section class="fale-conosco">
            <div class="container">
                <h2>FALE CONOSCO</h2>
                <form>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>NOME</label>
                                <div class="oddT-icon-input">
                                    <input type="text" class="oddT-text" >
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div><!-- oddT-icon-input -->
                            </div><!-- form-group -->
                        </div><!-- md-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>E-MAIL</label>
                                <div class="oddT-icon-input">
                                    <input type="text" class="oddT-text" >
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div><!-- oddT-icon-input -->
                            </div><!-- form-group -->
                        </div><!-- md-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>TELEFONE</label>
                                <div class="oddT-icon-input">
                                    <input type="text" class="oddT-text" >
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div><!-- oddT-icon-input -->
                            </div><!-- form-group -->
                        </div><!-- md-4 -->
                    </div><!-- row -->
                    <div class="form-group">
                        <label>MENSAGEM</label>
                        <div class="oddT-icon-input">
                            <textarea class="oddT-text" rows="5"></textarea>
                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                        </div><!-- oddT-icon-input -->
                    </div><!-- form-group -->
                    <button href="">ENVIAR</button>
                </form>
            </div><!-- container -->
        </section><!-- fale-conosco -->

        <section class="menu-footer">
            <div class="container">
                <ul class="nav navbar-nav pull-left">
                    <li><a href="">QUEM SOMOS</a></li>
                    <li><a href="">TUTORIAIS</a></li>
                    <li><a href="">NOTÍCIAS E EVENTOS</a></li>
                    <li><a href="">AVALIAÇÕES</a></li>
                    <li><a href="">VÍDEOS</a></li>
                    <li><a href="">CONTATO</a></li>
                </ul><!-- .nav -->
                <ul class="nav navbar-nav pull-right">
                    <li class="redes-sociais">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </li><!-- redes-sociais -->
                </ul><!-- .nav -->
            </div><!-- container -->
        </section><!-- menu-footer -->

        <footer>
            <div class="container">
                <span class="pull-left"><b>QUESTÃO DEMAIS</b> - INTELIGÊNCIA EM AVALIAÇÃO EDUCACIONAL</span>
                <span class="pull-right"><a href="" target="_blank">DESENVOLVIDO POR: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png"></a></span>
            </div><!-- container -->
        </footer>

        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js'></script>
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js'></script>
        <script src="https://use.fontawesome.com/6963733f46.js"></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/script.js'></script>
    </body>
</html>