<?php
get_header();
?>
    <main id="article-container-speak" class="main constructor-page">


        <div class="container-fluid">
            <div class="wrap-posts">
                <?php
//                $i = 0;
                while (have_posts()) : the_post();
                    $i = get_the_ID();
                    get_template_part('loop', 'post', ['i' => $i]);
                endwhile;

                ?>
            </div>
        </div>

        <?php get_template_part( 'inc/box', 'constructor'); ?>



    </main>
<?php get_footer();
