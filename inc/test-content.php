<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>


<div class="green-background" style="height:100vh;display:flex;align-items:flex-end;padding-bottom:5vh;">
  <div class="container">
  <div class="columns card rounded-corners drop-shadow nomargin hidden">
    <div class="column is-full nopadding rounded-corners">

      <div class="table-container iblock-pathways-reference-table">
        <table class="table is-hoverable">
          <thead>
            <th></th>
            <th>Elementary School</th>
            <th>Middle School</th>
            <th>High School</th>
            <th>Coding</th>
            <th>ELA</th>
            <th>Engineering</th>
            <th>Hydroponics</th>
            <th>Mathematics</th>
            <th>Robotics</th>
            <th>Science</th>
            <th>Social Studies</th>
            <th>Special Education</th>
            <th>Agriculture</th>
            <th>Applied Science</th>
            <th>Arts</th>
            <th>Business</th>
            <th>Energy</th>
            <th>Environment</th>
            <th>Finance</th>
            <th>Health</th>
            <th>Math/CS</th>
            <th>Transportation</th>
          </thead>
          <tbody>

            <?php
              $args = array(
                'post_type' => 'stateiblocks',
                'category_name' => 'iblock-pathways',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order'   => 'ASC',
              );
              $the_query = new WP_Query($args);
                if ( $wp_query->have_posts() ) :
                  while ($the_query -> have_posts()) :
                    $the_query -> the_post();
            ?>
            <tr>
              <td>
                <a href="<?php echo get_post_meta( $post->ID, 'custom_url_meta_content', true ); ?>">
                  <?php the_title(); ?>
                </a>
              </td>
              <td <?php if ( in_category('elementary-school') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('middle-school') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('high-school') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('coding') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('ela') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('engineering') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('Hydroponics') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('math') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('robotics') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('science') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('social-studies') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('special-education') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('agriculture') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('applied-science') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('arts') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('business') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('energy') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('environment') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('finance') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('health') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('math-cs') ) { echo 'class="checked"'; } ?>></td>
              <td <?php if ( in_category('transportation') ) { echo 'class="checked"'; } ?>></td>
            </tr>
            <?php endwhile; endif; ?>

          </tbody>
        </table>
      </div>

    </div>
  </div>
  </div>
</div>
