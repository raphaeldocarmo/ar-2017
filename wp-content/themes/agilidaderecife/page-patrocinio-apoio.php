<?php
/*
Template Name: apoio
*/
?>

<?php get_header(); ?>
<article class=" article hero patrocinio is-apoio is-white">
    <div class="patrocinio__content">
        <h4 class="subtitle is-4"><?php the_title(); ?></h4>
    </div>
    
    <?php the_content(); ?>
</article>

<?php get_footer(); ?>