<?php
/**
 * The Template for displaying 404 Page not Found .
 *
 * @since singlepage 1.3.9
 */

   get_header(); 

?>

<div id="main-content">
  <div class="page-main " role="main">
    <div class="container">
      <div class="breadcrumb-box">
        <?php singlepage_breadcrumb_trail(array("before"=>"","show_browse"=>false));?>
      </div>
      <div class="blog-main text-center" role="main">
        <div class="row">
          <article class="post-entry text-left right col-md-9">
            <div class="entry-content">
              <?php 
										global $allowedposttags;
                                   
									$page_404_content = of_get_option('page_404_content','<div class="text-center">
                                    <img class="img-404" src="'.get_template_directory_uri() .'/images/404.png" alt="404 not found" />
                                    <br/> <br/>
                                    <a href="'.esc_url(home_url("/")).'"><i class="fa fa-home"></i> '.__('Please, return to homepage!','singlepage').'</a>
                                    </div>');
									
									echo  wp_kses( $page_404_content , $allowedposttags ); ;
									?>
            </div>
          </article>
          <side class="left col-md-3">
            <?php get_sidebar("blog");?>
          </side>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
