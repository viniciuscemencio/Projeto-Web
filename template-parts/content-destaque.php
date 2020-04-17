<article class="template-sobre">
<php get_post_format();?>
    <?php the_post_thumbnail('largest', array('class' => 'img-fluid  ')); ?>
    <h3 class="text-center my-3"><?php the_content(); ?></h3>
    
</article>