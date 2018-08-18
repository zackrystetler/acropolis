<!DOCTYPE html>
<html id="top" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> | <?php the_title(); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoText.svg" alt="Souvlaki At Acropolis"></a>
        <img id="menuButton" src="<?php echo get_template_directory_uri(); ?>/assets/img/menuicon.svg" alt="Menu Button">
        <nav>
            <?php

                $defaults = array(
                'container' => false,
                'echo' => false,
                'items_wrap' => '%3$s',
                'depth' => 0,
                'theme_location'  => 'primary-menu',
                'menu_class'  => 'no-bullet'
                );

                echo strip_tags(wp_nav_menu( $defaults ), '<a>');

            ?>
            <a href="https://www.facebook.com/souvlakiatacropolis/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"><path d="M22 2.357v17.286A2.358 2.358 0 0 1 19.643 22h-4.189v-8.7h2.976l.427-3.32h-3.4V7.859c0-.962.265-1.616 1.645-1.616h1.758V3.277a23.629 23.629 0 0 0-2.563-.133 4 4 0 0 0-4.272 4.39v2.45H9.036v3.32h2.991v8.7h-9.67A2.358 2.358 0 0 1 0 19.643V2.357A2.358 2.358 0 0 1 2.357 0h17.286A2.358 2.358 0 0 1 22 2.357z"/></svg></a>
            <a href="https://www.instagram.com/souvlaki.at.acropolis/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"><path d="M11 5.358a5.63 5.63 0 0 0-5.639 5.639A5.63 5.63 0 0 0 11 16.637a5.63 5.63 0 0 0 5.639-5.639A5.63 5.63 0 0 0 11 5.358zm0 9.305a3.673 3.673 0 0 1-3.666-3.666A3.67 3.67 0 0 1 11 7.331a3.67 3.67 0 0 1 3.666 3.666A3.673 3.673 0 0 1 11 14.664zm7.185-9.536a1.312 1.312 0 0 1-1.315 1.315 1.312 1.312 0 0 1-1.315-1.315 1.315 1.315 0 0 1 1.315-1.315 1.315 1.315 0 0 1 1.318 1.316zm3.735 1.335a6.509 6.509 0 0 0-1.777-4.609A6.553 6.553 0 0 0 15.534.076c-1.816-.1-7.259-.1-9.075 0A6.543 6.543 0 0 0 1.854 1.85 6.531 6.531 0 0 0 .077 6.459c-.1 1.816-.1 7.259 0 9.075a6.509 6.509 0 0 0 1.777 4.609 6.56 6.56 0 0 0 4.609 1.777c1.816.1 7.259.1 9.075 0a6.509 6.509 0 0 0 4.609-1.777 6.552 6.552 0 0 0 1.777-4.609c.102-1.817.102-7.255-.001-9.071zM19.574 17.48a3.712 3.712 0 0 1-2.091 2.091c-1.448.574-4.883.442-6.483.442s-5.04.128-6.483-.442a3.712 3.712 0 0 1-2.091-2.091c-.574-1.448-.442-4.883-.442-6.483s-.128-5.04.442-6.483a3.712 3.712 0 0 1 2.091-2.091C5.965 1.849 9.4 1.981 11 1.981s5.04-.128 6.483.442a3.712 3.712 0 0 1 2.091 2.091c.574 1.448.442 4.883.442 6.483s.135 5.041-.439 6.484z"/></svg></a>
        </nav>
    </header>