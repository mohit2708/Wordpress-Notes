Title: <?php the_archive_title(); ?>
Title:  <?php echo str_replace("Category: ", "", get_the_archive_title()); ?> 
Description: <?php echo category_description(); ?>(OR)<?php the_archive_description(); ?>

<?php	while ( have_posts() ) : the_post(); ?>
<?php the_title(); ?>
<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ));?>
<?php the_content(); ?>
<?php endwhile; wp_reset_postdata(); ?>
