<?php
get_header();
?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image:  url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
    <div class=" page-banner__content container container--narrow">
        <h1 class="page-banner__title">Blog</h1>
        <div class="page-banner__intro">
            <p>Keep up with our latest news.</p>
        </div>
    </div>
</div>

<?php
while (have_posts()):
    the_post();
    ?>
    <div class="container container--narrow page-section">
        <div class="post-item">
            <?php the_post_thumbnail('medium'); ?>
            <h2 class="headline headline--medium headline--post-title">
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </h2>

            <div class="metabox">
                <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in
                    <?php echo get_the_category_list(', '); ?>
                </p>
            </div>

            <div class="generic-content">
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <p>
                    <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Continue reading &raquo;</a>
                </p>
            </div>
        </div>
    </div>
<?php endwhile; // End of the loop. 
echo paginate_links();
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