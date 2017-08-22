<?php
/*
Template Name: organizacao
*/
?>

<?php get_header(); ?>
<section class="section">
<article class="article palestrantes organizacao hero is-fullheight">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="title palestrantes__title is-5 is-marginless">
            <?php the_title(); ?>
        </h1>
        <p><?php the_content(); ?></p>
    <?php endwhile; else: ?>
    <?php endif; ?>
</article>
</section>
<?php get_footer(); ?>