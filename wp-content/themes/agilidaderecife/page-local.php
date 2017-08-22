<?php
/*
Template Name: local
*/
?>

<?php get_header(); ?>
    <article class="local">
        <h2 class="title is-2 has-text-centered">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/local.svg" alt="Local" class="image is-centered is-256">
        </h2>
        <div class="maps-container">
            <?php the_content(); ?>
        </div>
    </article>
<?php get_footer(); ?>