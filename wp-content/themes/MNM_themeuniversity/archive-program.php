<?php

get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">All Events</h1>
        <div class="page-banner__intro">
            <p>List all event</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
    <?php
    while (have_posts()) {
        the_post(); ?>
        <div class="event-summary">
            <?php $date_event = new DateTime(the_field('start_day'));
            $month_event = $date_event->format('M');
            $day_event = $date_event->format('d');
            ?>
            <a class="event-summary__date t-center" href="#">
                <span class="event-summary__month"><?php echo $month_event; ?> </span>
                <span class="event-summary__day"><?php echo $day_event ?></span>
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a
                        href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h5>
                <p> <?php
                if (has_excerpt())
                    echo get_the_excerpt();
                else
                    echo wp_trim_words(get_the_content(), 18);
                ?><a href="#" class="nu gray">Learn more</a>
                </p>
            </div>
        </div>
    <?php }
    echo paginate_links();
    ?>
</div>

<?php get_footer();

?>