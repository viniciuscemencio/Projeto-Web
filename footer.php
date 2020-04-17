    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row footer-itens">
                    <div class="col-md-4 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                        <h3>Sobre o Projeto</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                        <h2>Mais...</h2>
                        <ul>
                            <li> <strong><a href="#">Feminino</a></strong></li>
                            <li> <strong><a href="#">Masculino</a></strong></li>
                            <li> <strong><a href="#">Sobre Nós</a></strong></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mt-5 md-mb-30 sm-mb-30 text-center">
                        <h2>Siga a gente!</h2>
                        <p>Siga a gente pelas redes sociais!</p>
                        <a href="https://www.facebook.com/" target="blank"><img src=<?php echo get_template_directory_uri() . '/img/fa2.png'?> alt=""><i class="btn-outline-primary"></i></a>
                        <a href="https://www.instagram.com/?hl=pt-br" target="blank"><img src=<?php echo get_template_directory_uri() . '/img/ins2.png'?> alt=""><i class="btn-outline-info"></i></a>
                        <a href="https://twitter.com/login?lang=pt" target="blank"><img src=<?php echo get_template_directory_uri() . '/img/tw2.png'?> alt=""><i class="btn-outline-primary"></i></a>
                        
                    </div>

                </div>
            </div>
        </div>
        <p class="footer-bottom-text">Todos os direitos reservados by &copy; Projeto 2020</p>
    </footer>


        
        

        <?php wp_footer();?>
        
        <script src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/popper.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script> 
    </body>
</html>