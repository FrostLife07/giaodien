<?php get_header(); ?>
<div id="content" class="full-width">
    <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
            <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>