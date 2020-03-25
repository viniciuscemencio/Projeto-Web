
<?php get_header(); ?>



   <div class="col-md-8 col-sm-12">

        <?php 
        
            if (is_search()) :
                $total_results = $wp_query->found_posts;

                echo "<h3 class='mb-3'>" . sprintf(__('%s resultado(s) para "%s"', 'Projeto'), $total_results, get_search_query()) . "</h3>";

            endif       
        ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="blog-post">
                    <h3 class="mb-3 pb-2 border-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="row">
                    <div class="col-md-12 col-lg-6 mb-3">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                        </a>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3">
                            <?php  the_excerpt(); ?>
                        </div>
                </div>
                <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y') ?></span></p>
                </div>

                <?php endwhile; ?>

                <?php else : 

                   
                    echo "<p>Conteúdo não encontrado. </p>";
                    echo "<p>O caminho para este conteúdo está errado ou a página pode ter sido excluída. </p>";
                    echo "<p>Esperimente realizar a busca novamente. </p>";
                    echo "<img src=" . get_template_directory_uri() . "/img/erro.png alt='erro'>";
                    
                    
                    

                
                endif; ?>

                <div class="blog-pagination mb-5">
                    <?php next_posts_link('Mais antigos'); ?> <?php previous_posts_link('Mais novos'); ?>
                </div>


    </div>


<?php get_footer();?>