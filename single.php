    <?php get_header(); ?>


        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h1 class="display-4">SEJA BEM-VINDO !</h1>
                    
                </div>
            </div>
        </div>

        <div class=" container row mb-5">

            <div class="col-sm-6">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="item">
                    <?php the_post_thumbnail('largest', array('class' => 'img-fluid rounded img-custom border')); ?>
                    <div class="item-overlay top"></div>
                </div>
                
                    
            </div>

            <div class="col-sm-6">
                <h3 class="mb-3 pb-2 h3-custom"><?php the_title(); ?></a></h3>   

                <?php the_content(); ?>
                    
                <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y') ?></span></p>
               

                <?php endwhile; ?>

                <?php else : get_404_template(); endif; ?>

            </div>

        </div>

            
        <?php comments_template() ?>
    
        

    </div>

<?php get_footer();?>