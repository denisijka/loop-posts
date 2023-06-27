<?php
/*
 * Template Name: page constructor
 */
get_header();
?>


    <?php

    $args = array(
        'post_type'   => 'post',
        'category'    => '',
        'suppress_filters' => true,
        'posts_per_page' => 0
    );
    query_posts( $args );
    while ( have_posts() ) {
        the_post();
        ?>
        <article class="post" >
            <div class="title style-7 decore-3"><?php the_title(); ?></div>
            <div class="cont-wrap d-flex align-items-center justify-content-between">
                <div class="col-img col-md-4 col-4"></div>
                <div class="col-text col-md-8">
                    <p class="text style-1 colt"><?php the_content(''); ?></p>
                </div>
            </div>
            <a class="btn style-1" href="<?php the_permalink(); ?>" target="_blank"><?php esc_html_e('переглянути більше', 'siaivil'); ?></a>
        </article>
        <?php
    } ?>
    <?php
    wp_reset_query();
    ?>


<?php get_footer();