<?php
/*
Template Name: Banner Evento Parallax
*/
?>

<?php get_header(); ?>
    <section>
      <article id="scene" class="hero is-fullheight scenes">
        <header class="logo-agilidade-recife">
          <a href="<?php site_url(); ?>">
            <img class="image is-256" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/logo-agilidade-recife.svg" title="Agilidade Recife. Seja ágil, visse?"></img>
          </a>
        </header>
        <div class="background-scene scene" data-depth="0.00">
          <img class="image is-fullwidth" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/fundo-amarelo.svg">
        </div>
        <div class="figure-sun scene" data-depth="0.80">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/sol.svg">
        </div>
        <div class="figure-house scene" data-depth="0.45">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/casinha.svg">
        </div>
        <div class="figure-tree scene" data-depth=".15">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/arvore.svg">
        </div>
        <div class=" event-day scene" data-depth=".30">
          <p class="title is-1 is-paddingless is-marginless">25</p>
          <p class="subtitle is-6 is-paddingless is-marginless">outubro</p>
        </div>
        
      </article>
    </section>
<?php get_footer(); ?>