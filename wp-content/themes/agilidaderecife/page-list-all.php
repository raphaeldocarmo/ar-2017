<?php
/*
Template Name: list-all
*/
?>

<?php get_header(); ?>
<section class="section">
    <?php $args = array(
        'post_type' => array( 'page' ),
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'post_status' => 'publish'
        );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
    ?>
    
    <?php global $post; $slug = $post->post_name; get_template_part("page", $slug); ?>
    
    <?php
        }
        wp_reset_postdata();
    }
    ?>
</section>
<?php get_footer(); ?>