<?php while (have_posts()) : the_post(); ?>
    <?php echo get_post_meta(get_the_ID(), 'contacts', true) ?>
<?php endwhile;?>