<?php
/*
Template Name: sobre-o-evento
*/
?>
<?php get_header(); ?>
<article class=" article hero sobre-o-evento is-fullheight">
    <div class="sobre-o-evento__background"  data-depth="0.00">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/cactus.svg" alt="" />
    </div>
    <h1 class="title sobre-o-evento__title" data-depth="0.15"><?php the_title(); ?></h1>
    <div class="sobre-o-evento__descricao" data-depth="0.30">
        <div class="vertical-scroll">
            <p><?php echo the_content(); ?></p>
        </div>
        <p class="has-text-centered">
            <a href="./organizacao" class="button is-primary is-small">Organização</a>
        </p>
    </div>
</article>
<?php get_footer(); ?>