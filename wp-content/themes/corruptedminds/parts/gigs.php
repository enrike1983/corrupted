<ul class="gigs small-block-grid-2 medium-block-grid-3 large-block-grid-4">
    <?php
    $gigs_query = new WP_Query(array(
        'post_status' => 'publish',
        'post_type' => 'gigs',
        'meta_key' => 'data_editoriale',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
    ));

    if($gigs_query->have_posts()):
        while($gigs_query->have_posts()): $gigs_query->the_post();
            ?>
            <li>
                <div class="date-box">
                    <div class="info">
                        <div class="date">
                            <div class="day">
                                <?php echo get_post_meta(get_the_ID(), 'data_editoriale_day', true) ?>
                            </div>
                            <div class="month">
                                <?php echo get_post_meta(get_the_ID(), 'data_editoriale_month', true) ?>
                            </div>
                            <div class="year">
                                <?php echo get_post_meta(get_the_ID(), 'data_editoriale_year', true) ?>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="city">
                            <?php echo get_post_meta(get_the_ID(), 'gig_city', true) ?>
                        </div>
                        <div class="place">
                            <div class="ico"></div>
                            <?php echo get_post_meta(get_the_ID(), 'gig_venue', true) ?>
                        </div>
                    </div>
                    <div class="info">
                        <div class="time">
                            <?php echo get_post_meta(get_the_ID(), 'data_editoriale_hour', true) ?>:<?php echo get_post_meta(get_the_ID(), 'data_editoriale_minute', true) ?>h
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>

        <?php
        endwhile;
    endif;

    wp_reset_query();
    ?>

</ul>