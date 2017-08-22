<?php get_header(); ?>
    <section section>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class=" article hero is-fullheight">
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
                <p><?php the_content(); ?></p>
            </article>
                 
        <?php endwhile; else: ?>
            <article class="article hero is-success is-fullheight">
                <h2>Nada Encontrado</h2>
                <p>Erro 404</p>
                <p>Lamentamos mas não foram encontrados artigos.</p>
            </article>            
        <?php endif; ?>
    </section>
<?php get_footer(); ?>