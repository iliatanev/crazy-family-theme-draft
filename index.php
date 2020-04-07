<?php 

get_header(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/ocean.jpg' ); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Welcome to the Blog section</h1>
      <div class="page-banner__intro">
        <p>Thanks for reading</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
  <?php 
    $wp_query = new WP_Query(array('posts_per_page'=>-1));
    
    while ($wp_query->have_posts()) : $wp_query->the_post();?>
      <h3><?php the_title();?></h3>
      <p><?php the_content(); ?></p>   
    <?php endwhile;
  ?>

<?php get_footer();
?>