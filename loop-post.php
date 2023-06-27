<div class="wrap-post wrap-post-<?php echo $args['i']; ?>" >
    <div class="row">
        <div class="col-12">
            <div class="wrap-title text-center">
                <div class="js-box-speak d-inline-block title style-1 decore-icon decore-<?php the_field('decore'); ?>">
                    <?php the_title(); ?>
                </div>
            </div>
        </div>
        <?php if ( is_single() ) : ?>
        <div class="col-12">
            <div class="wrap-btn-speak text-center">
                <span class="btn style-2 js-btn-speak">
                    <span>
                        <i>Прочитати статтю...</i>
                        <i>Зупитити читання...</i>
                    </span>
                </span>
            </div>
        </div>
        <?php endif; ?>
        <div class="col-sm-4 col-12">
            <div class="box-img h100">
                <div class="wrap-img h100" style="background-image: url(<?php echo get_field('image')['url']; ?>)"></div>
            </div>
        </div>
        <div class="col-sm-8 col-12">
            <div class="wrap-text h100 text style-1">
                <div class="row">
                    <div class="js-box-speak col-12 col-sm-5 offset-sm-1 "><?php echo get_field( 'editor_1' ); ?></div>
                    <div class="js-box-speak <?php if ( !is_single() ) : ?>d-none d-sm-block <?php endif; ?> col-12 col-sm-5 offset-sm-1"><?php echo get_field( 'editor_2' ); ?></div>
                </div>
            </div>
        </div>
        <?php if ( !is_single() ) : ?>
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-sm-7 offset-sm-5 d-flex justify-content-center">
                    <div class="wrap-btn w100">
                        <a class="btn style-1 w100" href="<?php the_permalink(); ?>">переглянути більше</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
