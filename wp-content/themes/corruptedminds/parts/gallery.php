<div id="media">

    <?php
    $photos_query = new WP_Query(array(
        'post_status' => 'publish',
        'post_type' => 'photos',
        'meta_key' => 'data_editoriale',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
    ));

    if($photos_query->have_posts()):
        while($photos_query->have_posts()): $photos_query->the_post();
            ?>

            <h4 class="gallery-title"><?php the_title() ?></h4>
            <?php the_content() ?>

        <?php
        endwhile;
    endif;

    wp_reset_query();
    ?>
</div>