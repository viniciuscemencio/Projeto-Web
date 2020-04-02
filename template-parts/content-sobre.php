<article class="template-sobre">
<php get_post_format();?>
    <h2 class="display-3 col-12"><?php the_title() ?></h2>
    <?php the_post_thumbnail('largest', array('class' => 'img-fluid rounded img-custom border col-md-6')); ?>
    <?php the_content(); ?>
</article>