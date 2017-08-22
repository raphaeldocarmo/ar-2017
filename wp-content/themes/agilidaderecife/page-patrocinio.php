<?php
/*
Template Name: patrocionio-esquecido
*/
?>

<?php get_header(); ?>
<article class=" article hero is-black patrocinio is-gold">
    <img class="article-varal" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/varal.svg" />
    <div class="patrocinio__content">
        <h2 class="title patrocinio__title is-5 is-marginless">
            <?php the_title(); ?>
        </h2>
        
        <h3 class="title is-6">Patrocínio</h3>
        <h4 class="subtitle is-4">Ouro</h4>
        
        <?php the_content(); ?>
    </div>
</article>

<?php get_footer(); ?>