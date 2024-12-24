<?php
get_header();
?>


<?php
while (have_posts()):
    the_post();
    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title() ?></h1>
            <div class="page-banner__intro">
                <p><?php
                // the_excerpt() 
                ?></p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">

        <div class="generic-content">
            <?php the_content(); ?>

        </div>
    </div>

<?php endwhile; // End of the loop. 
?>

<?php
get_footer();