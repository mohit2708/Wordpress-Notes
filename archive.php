<?php	while ( have_posts() ) : the_post(); ?>
Title: <?php the_archive_title(); ?>
Description: <?php echo category_description(); ?>(OR)<?php the_archive_description(); ?>


<?php endwhile; ?>
