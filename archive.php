<?php
get_header();
?>
    <main class="main constructor-page">
        <div class="container-fluid">
            <div class="wrap-posts">
                <?php
                $i = 0;
                while (have_posts()) : the_post();
                    $i++;
                    get_template_part('loop', 'post', ['i' => $i]);
                endwhile;

                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '',
                    'next_text' => '',
                )); ?>
            </div>
        </div>
    </main>
<?php get_footer();
