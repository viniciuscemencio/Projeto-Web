    <?php get_header(); ?>
        <div class="container">
                <div class="row">
                    <div class="col-12 text-center my-5">
                        <h1 class="display-4">SEJA BEM-VINDO !</h1>
                        
                    </div>
                </div>
        </div>
    


        <div class="container">
            <div class="row mb-5 custom-card">
                
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="col-sm-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title() ?></h4>
                                <div class="item">
                                <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid" />
                                <?php endif; ?>
                                <div class="item-overlay top"></div>
                                </div>


                                <p class="card-text"><?php  the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" >Saiba mais</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>

    <?php get_footer(); ?>