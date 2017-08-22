<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<div>
  <article id="scene-home" class="hero is-fullheight is-first-item scenes">
  <div class="background-scene scene" data-depth="0.00">
    <img class="image is-fullwidth" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/fundo-amarelo.svg">
  </div>
  <div class="figure-sun scene" data-depth="0.80">
    <img alt="imagem do Sol" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/sol.svg">
  </div>
  <div class="figure-house scene" data-depth="0.45">
    <img alt="imagem de uma casinha" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/casinha.svg">
    <img class="figure-ballon" alt="Seja ágil, visse?" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/seja-agil-visse.svg">
  </div>
  <div class="figure-tree scene" data-depth=".15">
    <img alt="imagem de uma árvore" src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/arvore.svg">
  </div>
  <div class=" event-day scene" data-depth=".30">
    <div class="event-date">
      <p class="title is-3 is-paddingless is-marginless">20</p>
      <p class="subtitle is-6 is-paddingless is-marginless">outubro</p>
    </div>
    <div class="event-local">
      <p class="subtitle is-6">Local:</p>
      <h3 class="title is-4">GOLDEN TULIP</h3>
    </div>
  </div>

</article>

<p class="inscricao-home is-hidden">
  <a class="button is-danger is-small">Inscreva-se!</a>
</p>
<script>
	function mensagemDeSucesso() {
		console.log('Parallax is ready to go now!');
	} 

	// the onReady function is called as soon as Parallax knows what input method to use. This might take up to 1000ms (supportDelay * 2) after initialisation
	var scene = document.getElementById('scene-home');
	var parallax = new Parallax(scene, {
		onReady: mensagemDeSucesso
	});
</script>
</div> 

<?php get_footer(); ?>