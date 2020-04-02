<?php

//Chamar o Titulo
function projeto_title_tag(){
    add_theme_support('title-tag');
}


add_action('after_setup_theme', 'projeto_title_tag');

add_theme_support( 'custom-header', $args );                //adicionar editor de cabeçalho no painel do WP



//Registra a navegação
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Registra os menus
register_nav_menus(
    array(
        'projeto-menu' => __('Projeto Menu','projeto'),
        

    )


);

add_theme_support('post-thumbnails');

//Criar campo busca
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<div class="blog-search">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    )
    );

//Criando Banner

function create_post_type(){

    register_post_type('banners',
    array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banners')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners'),

    ));

}


add_action('init', 'create_post_type');


add_filter('excerpt_length', function($length){
    return 10;
});


//Ativas o formulário para respostas nos comentários
function theme_queue_js() {
    if ((!is_admin()) && is_singular()  && comments_open() && get_option('thread_comments')) wp_enqueue_script('comment-reply');

}
add_action('wp_print_scripts', 'theme_queue_js');


//Personalizar comentários
function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">
        
        <div class="card md-3">
            <div class="card-body">
                <div class="comment-intro">
                    <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
                    <h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
                </div>

                <?php comment_text(); ?>

                <div class="reply">
                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>

            </div>

        </div>
   <?php
}


?>
