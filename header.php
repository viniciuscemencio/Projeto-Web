<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        

        <?php wp_head();?>

    </head>
    <body>
        

       
        <nav class="navbar navbar-expand-lg navbar-light bg-black" role="navigation">
            <div class="container"> 
                <a class="navbar-brand text-white" href="#">Projeto</a>               
                <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSite">        
                                  
                    <?php
                        wp_nav_menu( array(
                         'theme_location'    => 'projeto-menu',
                         'depth'             => 2,
                         'container'         => 'div',
                         'container_class'   => 'collapse navbar-collapse',
                         'container_id'      => 'navbarSite',
                         'menu_class'        => 'nav navbar-nav',
                         'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                         'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>

                    
                    <ul class="redes-sociais">
                        <li><a href=""><img src=<?php echo get_template_directory_uri() . '/img/facenav.png'?> alt=""></a></li>
                        <li><a href=""><img src=<?php echo get_template_directory_uri() . '/img/instanav.png'?> alt=""></a></li>
                        <li><a href=""><img src=<?php echo get_template_directory_uri() . '/img/twitternav.png'?> alt=""></a></li>
                    </ul>

                    <?php dynamic_sidebar('Busca');?>


                            
                   
                </div>
            </div>
        </nav>


            

        <div id="demo" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                    
                <?php 

                    $my_args_banner = array(
                        'post_type' => 'banners',
                        'post_per_page' => 3,
                            
                    );

                    $my_query_banner = new WP_Query($my_args_banner);
                ?> 

                    <?php if($my_query_banner->have_posts()) : 
                        $banner =  $banners[0];
                        $c = 0;
                        while($my_query_banner->have_posts()) : $my_query_banner->the_post();
                    ?>

                    <div class="carousel-item custom-carousel <?php $c++; if($c == 1){echo 'active';} ?>">

                        <?php the_post_thumbnail('banner', array('class' => 'img-fluid d-block')); ?>
                            <div class="carousel-caption d-none d-md-block">
                                
                                <h5>
                                     <?php the_title(); ?>
                                </h5>
                                
                            </div>

                        </div>

                        

                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>


            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
            
            
        
        
