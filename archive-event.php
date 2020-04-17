<?php 

get_header(); 
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'See what is going on here'
));
?>

  <div class="container container--narrow page-section">
  <?php 
   // $wp_query = new WP_Query(array('posts_per_page'=>-1));

    while ( have_posts() ) : the_post(); ?>
      <!-- <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> -->
      
      <div class="event-summary">
          <a class="event-summary__date t-center" href="<?php the_permalink() ?>">
            <span class="event-summary__month"><?php 
              $eventDate = new DateTime( get_field( 'event_date' ) );
              echo $eventDate -> format( 'M' );
            ?></span>
            <span class="event-summary__day"><?php echo $eventDate -> format( 'd' ); ?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
            <p><?php echo wp_trim_words( get_the_content(), 15 ) ?><a href="<?php the_permalink() ?>" class="nu gray">Learn more</a></p>
          </div>
        </div>
    <?php endwhile;
    
  echo paginate_links();

  ?>
  </div>
  
<?php get_footer();
?>