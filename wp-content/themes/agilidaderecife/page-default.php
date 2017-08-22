<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="hero article is-fullheight">
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <p><?php the_content(); ?></p>
    </article>
<?php endwhile; else: ?>
    <article class="hero article is-fullheight">
        <h2>Nada Encontrado</h2>
        <p>Erro 404</p>
        <p>Lamentamos mas não foram encontrados artigos.</p>
    </article>            
<?php endif; ?>