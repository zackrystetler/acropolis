<?php
/**
 *  Template Name: Home
 */
get_header(); ?>
<section id="hero">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_post_thumbnail(); ?>
    <div class="heroContent">
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
</section>

<section id="locations">
    <?php
        // query for the loations page
        $your_query = new WP_Query( 'pagename=locations' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
        <div><?php the_content(); ?></div>    
    <?php endwhile;
        // reset post data (important!)
        wp_reset_postdata();
    ?> 
    <div class="locationContainer">
        <?php
        //set find parameters
        $params = array( 'limit' => -1);
        //get pods object
        $card = pods( 'location', $params );
        //loop through records
        if ( $card->total() > 0 ) {
        while ( $card->fetch() ) {
        //Put field values into variables
        $id = $card->display('slug');
        $title = $card->display('title');
        $address = $card->display('address');
        $monday = $card->display('monday');
        $tuesday = $card->display('tuesday');
        $wednesday = $card->display('wednesday');
        $thursday = $card->display('thursday');
        $friday = $card->display('friday');
        $saturday = $card->display('saturday');
        $sunday = $card->display('sunday');
        $mapsurl = $card->field('map');
        ?>

            <div id="<?php echo $id; ?>-card" class="card">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $address; ?></p>
                <ul class="hours">
                    <li><b>Mon</b> <?php echo $monday; ?></li>
                    <li><b>Tue</b> <?php echo $tuesday; ?></li>
                    <li><b>Wed</b> <?php echo $wednesday; ?></li>
                    <li><b>Thur</b> <?php echo $thursday; ?></li>
                    <li><b>Fri</b> <?php echo $friday; ?></li>
                    <li><b>Sat</b> <?php echo $saturday; ?></li>
                    <li><b>Sun</b> <?php echo $sunday; ?></li>
                </ul>
                <iframe frameborder="0" style="border:0"src="<?php echo $mapsurl; ?>"></iframe>
                <a id="button" class="smooth" target="blank" href="<?php echo wp_get_attachment_url( $card->field( 'menu.ID' ) ); ?>"><?php echo $title; ?> Menu</a>
            </div>
        <?php
                } //endwhile
            } //endif
        ?>  
    </div>
</section>

<section id="review">
    <div class="reviewContainer fade">
        <?php
        // query for the loations page
        $your_query = new WP_Query( 'pagename=reviews' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
        <div><?php the_content(); ?></div>    
        <?php endwhile;
            // reset post data (important!)
            wp_reset_postdata();
        ?> 
        <ul class="sliderContainer">
        <?php
            //set find parameters
            $params = array( 'limit' => -1);
            //get pods object
            $card = pods( 'reviews', $params );
            //loop through records
            if ( $card->total() > 0 ) {
                while ( $card->fetch() ) {
                //Put field values into variables
                $title = $card->display('title');
                $content = $card->display('post_content');
                ?>

                    <li class="reviewItem">
                        <div class="reviewCard">
                            <p><?php echo $title; ?></p>
                            <span><?php echo $content; ?></span>
                        </div>
                    </li>
                    <?php
                } //endwhile
            } //endif
        ?>  
        </ul>
    </div>


</section>

<section id="gallery">
    <?php
        // query for the gallery page
        $your_query = new WP_Query( 'pagename=gallery' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
        <div class="fade"><?php the_content(); ?></div>    
    <?php endwhile;
        // reset post data (important!)
        wp_reset_postdata(); ?>
</section>

<!-- <section id="ourstory">
    <div class="content fade">
    <?php
        // query for the our story page
        $your_query = new WP_Query( 'pagename=our-story' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post();
            the_content(); ?>
    </div>
    <?php the_post_thumbnail(); ?>    
    <?php endwhile;
        // reset post data (important!)
        wp_reset_postdata();
    ?>    
</section> -->

<section id="catering">
    <?php
        // query for the catering page
        $your_query = new WP_Query( 'pagename=catering' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="fade"><?php the_content(); ?></div>    
    <?php endwhile;
        // reset post data (important!)
        wp_reset_postdata(); ?>
</section>

<section id="photos">
    <?php
        // query for the photos page
        $your_query = new WP_Query( 'pagename=photos' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
        <div class="fade"><?php the_content(); ?></div>    
    <?php endwhile;
        // reset post data (important!)
        wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>