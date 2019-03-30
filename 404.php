
<?php get_header(); ?>

<div class="container">
<img src="http://swadeshiayurvedic.com/yogmantrana/wp-content/uploads/2019/03/404.jpg" style="">

<h1>Oops! That page can&rsquo;t be found.</h1>
<p>It looks like nothing was found at this location</p>
</div>


<script>
         setTimeout(function(){
            window.location.href = '<?php echo site_url('/'); ?>';
         }, 3000);
      </script>
<?php //get_sidebar( 'content-bottom' ); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
