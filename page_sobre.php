<?php 
/* Template Name: Template Sobre */
?>


<?php get_header();  ?>

	<section class="header-sobre">
		<div class="jumbotron">
            <div class="col-12 text-center my-1">
                <h1 class="display-1"><?php the_title() ?></h1>
				<img class="img-fluid" 
    	    	src="<?php header_image(); ?>" 
    	    	height="<?php echo get_custom_header()->height; ?>" 
    	    	width="<?php echo get_custom_header()->width; ?>" alt="" />
            </div>
        </div>
    </section>
	
	<div class="content-area">
		<main>
				<section class="container">
					<div class="jumbotron posts">

							<?php 
							$my_args = array(
           						'post_type' => 'post',
           						'category_name' => 'sobre'
           					);
							$my_query = new WP_Query($my_args);
           			?> 

							<?php 
							// Se houver  algum post
							//teste
							if( $my_query-> have_posts() ):
							// Enquanto houver posts, mostre-os pra gente
							while( $my_query-> have_posts() ): $my_query-> the_post();
							?>
							<?php get_template_part( 'template-parts/content-sobre', get_post_format() ); ?>
							<?php 
								endwhile;
							else:
							?>
								<p>Não há posts para serem exibidos...</p>
							<?php endif; ?>

						</div>						
				</section>				
			
		</main>
	</div>
    