<?php if ( have_rows( 'constructor' ) ) :
    while ( have_rows( 'constructor' ) ) : the_row(); ?>

<div class="wrap-post wrap-post-<?php echo $args['i']; ?>" >
    <div class="row">
        <div class="col-12">
            <div class="title style-1"><?php the_title(); ?></div>
        </div>
        <div class="col-4">
            <div class="wrap-img ">
                <?php
                $image = get_field('image');
                if( !empty( $image ) ): ?>
                    <img class="h100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="col-8 ">
            <div class="wrap-text d-flex h100 text style-1">

                <div class="col-6 offset-lg-1"><?php echo get_sub_field( 'editor_1' ); ?></div>
                <div class="col-6 offset-lg-1"><?php echo get_sub_field( 'editor_2' ); ?></div>
                
                <?php
                // ! підбери кількість символів що виводяться
                echo wp_trim_words(get_the_content(), 40, '...'); ?>
            </div>
            <div class="wrap-btn">
                <a class="btn style-1 w100" href="<?php the_permalink(); ?>">переглянути більше</a>
            </div>
        </div>

    </div>
</div>
<?php endwhile; endif; ?>