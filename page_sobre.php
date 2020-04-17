<?php 
/* Template Name: Template Sobre */
?>
<?php get_header(); ?>

	<section class="area-sobre">
		<div class="jumbotron my-4 ">
			<h3 class="h3 text-center display-4 "><?php the_title() ?></h3>
		</div>
		<div class="container">
			<div class="row">
				<?php
				
				$featured = new WP_Query('post_type=post&posts_per_page=1&category_name=destaqueSobre' );
				if( $featured->have_posts() ):
					while( $featured->have_posts() ): $featured->the_post();
				?>
				<div class=" col-12 mb-5 mt-2">
					<?php get_template_part( 'template-parts/content', 'destaque' ); ?>
				</div>
			</div>
		</div>
	</section>

	<div class="jumbotron ">
		<h3 class="h3 text-center display-4 ">Nossas Ideias!</h3>
	</div>		

								



	<section class="area-sobre">
		<div class="container">
			<div class="row">

			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			// Segundo Loop
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 4,
				'category_name' =>'sobre',
				
			);
			$secondary = new WP_Query( $args );
			if( $secondary->have_posts() ):
				while( $secondary->have_posts() ): $secondary->the_post();
			?>
			<div class="px-4 col-md-3">
				<?php get_template_part( 'template-parts/content', 'sobre' ); ?>
			</div>
			<?php
				endwhile;
				wp_reset_postdata();
			endif;									
			?>
		</div>
	</div>
</section>

					<hr class="my-5">


					<div class="jumbotron my-4 col-12">
						<h3 class="h3 text-center display-4 ">Desenvolvimentos</h3>
					</div>


					<div class="container mt-5">

					<section class="topics">
						<div class="row">
							<div class="col-lg-6 col-md-12 px-4">
								<div class="row mb-4">
						    		<div class="col-1 mr-3">
										<i class="fas fa-code fa-2x indigo-text"></i>
						  			</div>
						  		<div class="col-10">
								<h5 class="feature-title">Bootstrap 4</h5>
								<p class="grey-text">Graças ao MDB, você pode aproveitar 
									todos os recursos do Bootstrap 4 mais recente.
								</p>
						  	</div>
						</div>

	
						<div class="row">
						  <div class="col-1 mr-3">
							<i class="fas fa-book fa-2x blue-text"></i>
						  </div>
						  <div class="col-10 mb-4">
							<h5 class="feature-title">WordPress</h5>
							<p class="grey-text">WordPress é um sistema livre e aberto de gestão de conteúdo para internet.
							  easily.
							</p>
						  </div>
						</div>
	

						<div class="row">
						  <div class="col-1 mr-3">
							<i class="fas fa-cubes fa-2x cyan-text"></i>
						  </div>
						  <div class="col-10">
							<h5 class="feature-title">CSS</h5>
							<p class="grey-text">O CSS Flexible Box Layout, conhecido como Flexbox, 
								é um modelo de layout da Web CSS3. Está no estágio de recomendação de candidatos do W3C.</p>
						  </div>
						</div>

						</div>
  
						<div class="col-lg-6 col-md-12">
							<p class="h5 text-center mb-4">Assista a um Vídeo</p>
							<div class="embed-responsive embed-responsive-16by9">
							<iframe width="640" height="360" src="https://www.youtube.com/embed/MWyBgudQqsI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
  
						</div>

						<hr class="my-5">

						</div>
					</section>

					

<?php get_footer();?>  
