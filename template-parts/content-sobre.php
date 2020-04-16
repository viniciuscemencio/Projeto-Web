<article class="template-sobre">
<php get_post_format();?>
    <?php the_post_thumbnail('largest', array('class' => 'img-fluid rounded my-2 mx-2')); ?>
    <h4 class="title my-2"><?php the_title() ?></h4>
    <?php the_content(); ?>
</article>