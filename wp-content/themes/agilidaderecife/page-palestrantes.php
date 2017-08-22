<?php
/*
Template Name: palestrantes
*/
?>

<?php get_header(); ?>
<article class=" article hero is-black palestrantes is-fullheight">
    <h1 class="title palestrantes__title is-5 is-marginless">
        <?php the_title(); ?>
    </h1>
    <p><?php the_content(); ?></p>
</article>

<?php get_footer(); ?>