<?php	while ( have_posts() ) : the_post(); ?>
Title: <h1><?php the_title(); ?></h1>
Content: <p><?php the_content(); ?></p>
Author: <?php echo get_the_author(); ?>
Date: <?php echo get_the_time( 'F j, Y', $post->ID ) ?>
Comment: <?php comments_popup_link('No Comments ', '1 Comment ', '% Comments '); ?>
Image: <?php echo the_post_thumbnail( array(300, 300, true) ); ?>
Image: <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ));?>" /> 
<?php endwhile;	?>

<!--------------------- Category ---------------------------->
<?php       
      $args = array(
      'orderby'    => 'ID', 
      'order'      => 'ASC',
      'hide_empty' => false
      );            
      $tax_terms = get_terms('category', $args);
      ?> 
<div class="category-link">
    <h4> <strong>Category</strong></h4>
     <ul class="list-group">     
          <?php foreach($tax_terms as $term_single) { ?>  
          <li  class="list-group-item"><a href="<?php echo home_url();?>/category/<?php echo $term_single->slug; ?>"><?php echo $term_single->name; ?> <span>(<?php echo $term_single->count; ?>)</span></a></li>         
          <?php } ?>
     </ul>
</div>
