<!DOCTYPE html>
<html class="html">
<head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/resources/css/style.css" />
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    
    <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/parallax-master/dist/parallax.min.js"></script>
</head>
<body>
    <main>
        <header class="hero is-primary is-fullheight">
            <div class="hero-head">
                <header class="nav">
                  <div class="container">
                    <div class="nav-left">
                      <a class="nav-item">
                        <h1 class="title is-1"><?php bloginfo('name'); ?></h1>
                        <h2 class="title is-2"><?php bloginfo('description'); ?></h2>
                      </a>
                    </div>
                    <span class="nav-toggle">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                    <div class="nav-right nav-menu">
                      <a class="nav-item is-active">
                        Home
                      </a>
                      <a class="nav-item">
                        Examples
                      </a>
                      <a class="nav-item">
                        Documentation
                      </a>
                      <span class="nav-item">
                        <a class="button is-primary is-inverted">
                          <span class="icon">
                            <i class="fa fa-github"></i>
                          </span>
                          <span>Download</span>
                        </a>
                      </span>
                    </div>
                  </div>
              </header>
             </div>
             
            
            <div class="hero-body">
            <div class="container has-text-centered">
              <h1 class="title">
                Title
              </h1>
              <h2 class="subtitle">
                Subtitle
              </h2>
            </div>
            </div>
             
            <div class="hero-foot">
                <nav class="tabs">
                  <div class="container">
                    <ul>
                        <?php wp_list_pages('sort_column=name'); ?>
                    </ul>
                  </div>
                </nav>
            </div>
        </header>