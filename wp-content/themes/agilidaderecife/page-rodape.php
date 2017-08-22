<?php
/*
Template Name: rodape
*/
?>

<?php get_header(); ?>
<article class="footer">
        <h3 class="title is-6">Entre em contato com a gente por e-mail ou através das redes sociais. Junte-se à nossa comunidade!</h3>
        <menu>
            <menuitem>
                <a href="http://facebook.com/agilidaderecife" target="_blank" class="social-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/facebook.svg" alt="facebook" />
                </a>
            </menuitem>
            <menuitem>
                <a href="http://twitter.com/agilidaderecife" target="_blank" class="social-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/twitter.svg" alt="twitter" />
                </a>
            </menuitem>
            <menuitem>
                <a href="http://youtube.com/agilidaderecife" target="_blank" class="social-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/youtube.svg" alt="youtube" />
                </a>
            </menuitem>
            <menuitem>
                <a href="http://instagram.com/agilidaderecife" target="_blank" class="social-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/instagram.svg" alt="instagram" />
                </a>
            </menuitem>
        </menu>
        
        <div class="footer-background footer-scenes">
            <div class="footer-scene logo" data-depth="0.00">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/logo-agilidade-recife-branca.svg" class="image is-128" alt="Agilidade Recife"></img>
            </div>
            <div class="footer-scene casa-ao-fundo" data-depth="0.05">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/casa-ao-fundo.svg" alt=""></img>
            </div>
            <div class="footer-scene casa-com-arvore" data-depth="0.10">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/casa-com-arvore.svg" alt=""></img>
            </div>
            <div class="footer-scene casa-com-cavalo" data-depth="0.20">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/casa-com-cavalo.svg" alt=""></img>
            </div>
            <div class="footer-scene casas" data-depth="0.50">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/casas.svg" alt=""></img>
            </div>
            <div class="footer-scene balao" data-depth="0.50">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/seja-agil-visse.svg" alt=""></img>
            </div>
            <div class="footer-scene igreja" data-depth="0.30">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/imgs/svg/rodape/igreja.svg" alt=""></img>
            </div>
        </div>

        <p class="creditos-ilustracoes">
          <a href="http://xilogravura.zip.net" target="_blank">Ilustrações: Severino Borges</a>
        </p>
</article>
<?php get_footer(); ?>