<?php
/*
Template Name: sobre-recife
*/
?>

<?php get_header(); ?>
<article class=" article hero is-primary sobre-recife is-fullheight">
    <div class="sobre-recife__content">
        <h1 class="title sobre-recife__title is-5 is-marginless">
            <?php the_title(); ?>
        </h1>
        
        <?php the_content(); ?>
    </div>
</article>

<?php get_footer(); ?>