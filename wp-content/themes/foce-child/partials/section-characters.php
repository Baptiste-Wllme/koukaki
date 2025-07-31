<?php
$characters_query = $args['characters_query'];
if ( ! $characters_query || ! $characters_query->have_posts() ) {
    return;
}
?>

<section class="characters">
    <div class="title-characters">
        <h3 class="title-to-animate">Les personnages</h3>
    </div>
  

  <div class="swiper">
    <div class="swiper-wrapper">
      <?php
      while ( $characters_query->have_posts() ) {
          $characters_query->the_post();
          ?>
          <div class="swiper-slide">
              <figure>
                  <?php the_post_thumbnail('full'); ?>
                  <figcaption><?php the_title(); ?></figcaption>
              </figure>
          </div>
          <?php
      }
      wp_reset_postdata(); 
      ?>
    </div>
    
    <div class="swiper-pagination"></div>
  </div>
</section>
