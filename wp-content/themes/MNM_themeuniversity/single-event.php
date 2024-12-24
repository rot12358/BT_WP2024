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
                the_excerpt()
                    ?></p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">

        <div class="metabox metabox--position-up-metabox--with-home-link">
            <p>
                <a class="metabox_blog-home-link" href="<?php echo get_post_type_archive_link("event"); ?>"><i
                        class="fa fa-home" aria-hidden="" width="500px" height="300px"></i></a>
                <span class="metabox_main"><?php echo the_title(); ?></span>
            </p>
        </div>

        <div class="generic-content">
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php the_content(); ?>

        </div>
    </div>

<?php endwhile; // End of the loop. 
?>
<div class="page-section page-section--beige">
    <div class="container container--narrow generic-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
            possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
            consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias
            atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad
            quod sed.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid
            possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis,
            consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias
            atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad
            quod sed.</p>
    </div>
</div>
<div class="page-section page-section--white">
    <div class="container container--narrow">
        <h2 class="headline headline--medium">Biology Professors:</h2>

        <ul class="professor-cards">
            <li class="professor-card__list-item">
                <a href="#" class="professor-card">
                    <img class="professor-card__image" src="<?php echo get_theme_file_uri('images/barksalot.jpg') ?>" />
                    <span class="professor-card__name">Dr. Barksalot</span>
                </a>
            </li>
            <li class="professor-card__list-item">
                <a href="#" class="professor-card">
                    <img class="professor-card__image" src="<?php echo get_theme_file_uri('images/meowsalot.jpg') ?>" />
                    <span class="professor-card__name">Dr. Meowsalot</span>
                </a>
            </li>
        </ul>
        <hr class="section-break" />

        <div class="row group generic-content">
            <div class="one-third">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                    aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum
                    odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                    molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus
                    doloremque quibusdam quo, ea veniam, ad quod sed.</p>
            </div>

            <div class="one-third">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                    aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum
                    odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                    molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus
                    doloremque quibusdam quo, ea veniam, ad quod sed.</p>
            </div>

            <div class="one-third">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus
                    aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum
                    odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                    molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus
                    doloremque quibusdam quo, ea veniam, ad quod sed.</p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();