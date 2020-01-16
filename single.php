<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

wp_reset_query();

  if(have_posts()) : while(have_posts()) : the_post();

?>

    <div class="pathway-content" id="<?php the_ID(); ?>">
      <h5>
        <?php echo the_title(); ?>
      </h5>
      <?php the_content(); ?>
    </div>

<?php endwhile; endif; ?>
