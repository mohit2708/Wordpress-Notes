<?php $args = array('post_type' => 'post','posts_per_page'=>-3,'post_status' => 'publish');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>	
Title: <?php echo $post->post_title ?>
<?php endwhile; ?>
