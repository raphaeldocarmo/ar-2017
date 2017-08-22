<?php get_header(); ?>
<section class="section">
<article class="article palestrantes hero is-fullheight">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <p><?php the_content(); ?></p>
    <?php endwhile; else: ?>
    <?php endif; ?>
</article>
</section>
<?php get_footer(); ?>