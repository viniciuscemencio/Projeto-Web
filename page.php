    <?php get_header(); ?>
    <div class="container">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h1 class="display-4">Seja Bem-Vindo !</h1>
                    
                </div>
            </div>
    </div>
    
    <div class="container">
        <div class="row mb-5 custom-card">

            <?php 

                $my_args = array(
                    'post_type' => 'post',
                    'post_per_page' => 3,
                    'category_name' => 'Feminino'
                );

                $my_query = new WP_Query($my_args);
            ?> 

            <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post(); ?>
            
            <div class="col-sm-4">
                    
                <div class="card">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('smallest', array('class' => 'img-fluid rounded ')) ?>
                    </a>
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title() ?></h4>
                        <p class="card-text"><?php  the_excerpt(); ?></p>
                    </div>
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>" >Saiba mais</a>
                       
                    </div>
                </div>

            </div>
        
            <?php endwhile; endif; ?>

            <?php wp_reset_query(); ?>


        </div>
    </div>





    <?php get_footer();?>

