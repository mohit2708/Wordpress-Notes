<?php	while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
Author: <?php echo get_the_author(); ?>
Date: <?php echo get_the_time( 'F j, Y', $post->ID ) ?>
Comment: <?php comments_popup_link('No Comments ', '1 Comment ', '% Comments '); ?>
Image: <?php echo the_post_thumbnail( array(300, 300, true) ); ?>
Image: <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ));?>" /> 
<?php endwhile;	?>
