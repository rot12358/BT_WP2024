<?php
get_header();
?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg') ?>)"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re
            interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
            <?php $homepageEvents = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'event',
                'meta_key' => 'start_day',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'start_day',
                    )
                )
            ));
            while ($homepageEvents->have_posts()):
                $homepageEvents->the_post();
                ?>
                <div class="event-summary">
                    <?php $date_event = new DateTime(the_field('start_day'));
                    $month_event = $date_event->format('M');
                    $day_event = $date_event->format('d');
                    $event_date = get_field('event_date');
                    $event_location = get_field('location');
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
            <?php endwhile;
            wp_reset_postdata();
            ?>
            <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link("event"); ?>"
                    class="btn btn--blue">View All Events</a></p>
        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

            <?php $homepageEvents = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'post',
                'orderby' => 'meta_value_num',
                'meta_key' => 'start_day',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'start_day',
                    )
                )
            ));
            while ($homepageEvents->have_posts()):
                $homepageEvents->the_post();
                ?>
                <div class="event-summary">
                    <a class="event-summary__date event-summary__date--beige t-center"
                        href="<?php echo get_permalink(); ?>">
                        <span class="event-summary__month"><?php the_time('M') ?></span>
                        <span class="event-summary__day"><?php the_time('d') ?></span>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a
                                href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <a href="<?php echo get_permalink(); ?>" class="nu gray"></a>
                        <p> <?php
                        if (has_excerpt())
                            echo wp_trim_words(get_the_excerpt(), 8);
                        else
                            echo wp_trim_words(get_the_content(), 15);
                        ?><a href="#" class="nu gray">..... Learn more</a>
                        </p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>


            <p class="t-center no-margin">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn--yellow">View All
                    Blog Posts</a>
            </p>
        </div>
    </div>
</div>
<div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
            <?php
            // Tạo một WP_Query để lấy bài viết
            $sliderPosts = new WP_Query(array(
                'posts_per_page' => 3, // Số lượng bài viết muốn hiển thị
                'post_type' => 'program', // Hoặc bạn có thể thay bằng custom post type
            ));

            // Kiểm tra xem có bài viết nào không
            if ($sliderPosts->have_posts()):
                while ($sliderPosts->have_posts()):
                    $sliderPosts->the_post(); // Đặt nội dung bài viết
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Lấy ảnh đại diện của bài viết
                    ?>
                    <li class="glide__slide">
                        <div class="hero-slider__slide" style="background-image: url(<?php echo esc_url($image_url); ?>)">
                            <div class="hero-slider__interior container">
                                <div class="hero-slider__overlay">
                                    <h2 class="headline t-center"><?php the_title(); ?></h2> <!-- Sử dụng h4 thay vì h2 -->
                                    <p class="t-center"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                    <p class="t-center no-margin">
                                        <a href="<?php the_permalink(); ?>" class="btn btn--blue">Learn more</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </li>
                    <?php
                endwhile;
                wp_reset_postdata(); // Đặt lại dữ liệu sau khi hoàn thành vòng lặp
            else:
                echo '<p>No posts found</p>';
            endif;
            ?>
        </ul>
    </div>

    <!-- Điều khiển navigation của Glide.js -->
    <div class="glide__bullets" data-glide-el="controls[nav]"></div>
</div>

<?php
get_footer();
