<?php $args = array('post_type' => 'post','posts_per_page'=>-3,'post_status' => 'publish','paged' => get_query_var('paged') ? get_query_var('paged') : 1);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>	
image: <?php echo the_post_thumbnail( array(70, 70, true) ); ?> 
image: <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ));?>" />
Title: <?php echo $post->post_title ?>
Parmalink: <a href="<?php echo get_permalink( $post->ID ); ?>">
Description: <?php echo substr($post->post_content, 0, 140);  ?>
Date: <?php echo get_the_time( 'F j, Y', $post->ID ) ?>
Commenet: <?php comments_popup_link('No Comments ', '1 Comment ', '% Comments '); ?>
Comment: <?php echo $post->comment_count; ?>
view: <?php echo getPostViews(get_the_ID()); ?>
Days Ago: <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
Auther: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a><br>
<?php endwhile; ?>
  
<ul class="pagination">       
  <?php
    $big = 999999999; // need an unlikely integer
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $loop->max_num_pages
    ) );
  ?>
</ul>
=======
Category:-
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

Tag:-
  <?php $tags = get_tags(); ?>
  <div class="tags">
  <?php foreach ( $tags as $tag ) { ?>
  <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?></a>
  <?php } ?>

Search Bar:-
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div>
  <input type="text" value="" name="s" id="s" />
  <input type="submit" id="searchsubmit" value="Search" />
  </div>
  </form>
