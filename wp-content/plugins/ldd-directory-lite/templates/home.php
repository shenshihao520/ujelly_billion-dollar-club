<div class="directory-lite">

    <?php echo ldl_get_header(); ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                    <?php echo ldl_get_parent_categories(); ?>
                </div>
            </div>
            <?php if (ldl()->get_option('appearance_display_featured')):
                $featured = ldl_get_featured_posts(); if ($featured->have_posts()):
                ?>
            <div class="col-md-12">

                <h2><?php _e('Featured Listings', 'ldd-directory-lite'); ?></h2>

                <?php $featured = ldl_get_featured_posts(); ?>

                <?php while ($featured->have_posts()): $featured->the_post(); ?>
                    <?php ldl_get_template_part('listing', 'compact'); ?>
                <?php endwhile; ?>

            </div>
            <?php endif; endif; ?>
        </div>

    </div>

</div>
