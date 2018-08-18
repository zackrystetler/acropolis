<?php
/**
 *  Template Name: Menu page
 */
get_header('page'); ?>

<section id="menu-page">
    <?php
        // query for the menu page
        $your_query = new WP_Query( 'pagename=menu' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>    
    <?php endwhile;
        // reset post data (important!)
        wp_reset_postdata();
    ?> 

    <div class="menu">
        <ul id="tabs">
            <li><a class="active" href="#pressHallMenu">Press Hall</a></li>
            <li><a href="#strathmoreMenu">Strathmore</a></li>
        </ul>
        <div id="locationMenu" class="pressHallMenu active">
            <div class="menuContent">
                <h2>Authentic Greek Souvlaki</h2>
                <p class="tagline">We handcraft our authentic Greek pita bread daily!</p>
                <ul class="menuItems">
                    <?php
                    //set find parameters
                    $params = array( 'orderby' => 'date asc',
                                    'limit' => -1,
                                    'where' => 'item_type.name="souvlaki"');
                    //get pods object
                    $card = pods( 'press_hall_menu', $params );
                    //loop through records
                    if ( $card->total() > 0 ) {
                    while ( $card->fetch() ) {
                    //Put field values into variables
                    $title = $card->display('title');
                    $description = $card->display('content');
                    ?>
                        <li>
                            <span><?php echo $title; ?></span>
                            <p><?php echo $description; ?></p>
                        </li>
                    <?php
                            } //endwhile
                        } //endif
                    ?>
                </ul>
                <h2>Burgers</h2>
                <p class="tagline">All burgers are in a toasted brioche bun</p>
                <ul class="menuItems">

                    <?php
                    //set find parameters
                    $params = array( 'orderby' => 'date asc',
                                    'limit' => -1,
                                    'where' => 'item_type.name="burger"');
                    //get pods object
                    $card = pods( 'press_hall_menu', $params );
                    //loop through records
                    if ( $card->total() > 0 ) {
                    while ( $card->fetch() ) {
                    //Put field values into variables
                    $title = $card->display('title');
                    $description = $card->display('content');
                    ?>
                        <li>
                            <span><?php echo $title; ?></span>
                            <p><?php echo $description; ?></p>
                        </li>
                    <?php
                            } //endwhile
                        } //endif
                    ?>
                </ul>
                <ul class="menuItems">
                    <?php
                        //set find parameters
                        $params = array( 'orderby' => 'date asc',
                                        'limit' => -1,
                                        'where' => 'item_type.name="other"');
                        //get pods object
                        $card = pods( 'press_hall_menu', $params );
                        //loop through records
                        if ( $card->total() > 0 ) {
                        while ( $card->fetch() ) {
                        //Put field values into variables
                        $title = $card->display('title');
                        $description = $card->display('content');
                        ?>
                            <li>
                                <span><?php echo $title; ?></span>
                                <p><?php echo $description; ?></p>
                            </li>
                        <?php
                                } //endwhile
                            } //endif
                        ?>
                    </ul>
                    
            </div>
        </div>
        <div id="locationMenu" class="strathmoreMenu">
            <div class="menuContent">
                <ul class="menuItems">
                    <?php
                        //set find parameters
                        $params = array( 'orderby' => 'date asc',
                                        'limit' => -1,
                                        'where' => 'item_type.name="souvlaki"');
                        //get pods object
                        $card = pods( 'strathmore_menu', $params );
                        //loop through records
                        if ( $card->total() > 0 ) {
                        while ( $card->fetch() ) {
                        //Put field values into variables
                        $title = $card->display('title');
                        $description = $card->display('content');
                        ?>
                            <li>
                                <span><?php echo $title; ?></span>
                                <p><?php echo $description; ?></p>
                            </li>
                        <?php
                                } //endwhile
                            } //endif
                    ?>
                </ul>
                <ul class="menuItems">
                    <?php
                        //set find parameters
                        $params = array( 'orderby' => 'date asc',
                                        'limit' => -1,
                                        'where' => 'item_type.name="burger"');
                        //get pods object
                        $card = pods( 'strathmore_menu', $params );
                        //loop through records
                        if ( $card->total() > 0 ) {
                        while ( $card->fetch() ) {
                        //Put field values into variables
                        $title = $card->display('title');
                        $description = $card->display('content');
                        ?>
                            <li>
                                <span><?php echo $title; ?></span>
                                <p><?php echo $description; ?></p>
                            </li>
                        <?php
                                } //endwhile
                            } //endif
                    ?>
                </ul>
                <ul class="menuItems">
                    <?php
                        //set find parameters
                        $params = array( 'orderby' => 'date asc',
                                        'limit' => -1,
                                        'where' => 'item_type.name="salad"');
                        //get pods object
                        $card = pods( 'strathmore_menu', $params );
                        //loop through records
                        if ( $card->total() > 0 ) {
                        while ( $card->fetch() ) {
                        //Put field values into variables
                        $title = $card->display('title');
                        $description = $card->display('content');
                        ?>
                            <li>
                                <span><?php echo $title; ?></span>
                                <p><?php echo $description; ?></p>
                            </li>
                        <?php
                                } //endwhile
                            } //endif
                    ?>
                </ul>
                <ul class="menuItems">
                    <?php
                        //set find parameters
                        $params = array( 'orderby' => 'date asc',
                                        'limit' => -1,
                                        'where' => 'item_type.name="side"');
                        //get pods object
                        $card = pods( 'strathmore_menu', $params );
                        //loop through records
                        if ( $card->total() > 0 ) {
                        while ( $card->fetch() ) {
                        //Put field values into variables
                        $title = $card->display('title');
                        $description = $card->display('content');
                        ?>
                            <li>
                                <span><?php echo $title; ?></span>
                                <p><?php echo $description; ?></p>
                            </li>
                        <?php
                                } //endwhile
                            } //endif
                    ?>
                </ul>
                <ul class="menuItems">
                    <?php
                        //set find parameters
                        $params = array( 'orderby' => 'date asc',
                                        'limit' => -1,
                                        'where' => 'item_type.name="fish"');
                        //get pods object
                        $card = pods( 'strathmore_menu', $params );
                        //loop through records
                        if ( $card->total() > 0 ) {
                        while ( $card->fetch() ) {
                        //Put field values into variables
                        $title = $card->display('title');
                        $description = $card->display('content');
                        ?>
                            <li>
                                <span><?php echo $title; ?></span>
                                <p><?php echo $description; ?></p>
                            </li>
                        <?php
                                } //endwhile
                            } //endif
                    ?>
                </ul>
        </div>
    </div>
</section>



<?php get_footer(); ?>