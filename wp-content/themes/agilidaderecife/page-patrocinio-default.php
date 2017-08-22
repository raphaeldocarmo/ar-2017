<?php
/*
Template Name: patrocinio-default
*/
?>

<?php get_header(); ?>
<article class=" article hero patrocinio is-gold">
    <img class="patrocinio-varal" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/varal.svg" />
    <div class="patrocinio__content">
        <h2 class="title patrocinio__title is-5 is-marginless">
            <?php the_title(); ?>
        </h2>
        
        <?php the_content(); ?>
        
        <div class="has-text-centered">
            <a href="<?php bloginfo('stylesheet_directory'); ?>/resources/documents/briefing-patrocinio.pdf" target="_blank" class="button is-primary">Baixar briefing de patrocínio</a>
        </div>
    </div>
</article>

<?php get_footer(); ?>