<div id="prev_btn"></div>
<div id="news">

    <?php
    $news_query = new WP_Query(array(
        'post_status' => 'publish',
        'post_type' => 'news',
        'meta_key' => 'data_editoriale',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
    ));

    if($news_query->have_posts()):
        while($news_query->have_posts()): $news_query->the_post();
            ?>
            <div class="single-news">
                <div class="news-thumb">
                    <?php echo get_the_post_thumbnail( get_the_ID() , array('300', '300')); ?>
                </div>

                <div class="news-info">
                    <h1><a class="inline" href="#inline_content_<?php echo get_the_ID()?>"><?php echo get_the_title() ?></a></h1>
                    <a class="inline" href="#inline_content_<?php echo get_the_ID()?>"><p><?php echo substr(strip_tags(get_the_content()), 0, 80).'... <br/>[ Read more ]' ?></p></a>
                    <div class="news-date"><?php echo get_post_meta(get_the_ID(), 'data_editoriale_day', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_month', true) ?>.<?php echo get_post_meta(get_the_ID(), 'data_editoriale_year', true) ?></div>
                </div>
                <div style='display:none'>
                    <div class="news-content-text" id="inline_content_<?php echo get_the_ID()?>">
                        <?php echo get_the_content() ?>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    endif;

    wp_reset_query();
    ?>

</div>
<div id="next_btn"></div>