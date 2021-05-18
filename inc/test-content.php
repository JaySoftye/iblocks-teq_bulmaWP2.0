<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>

<div class="page-section full-width-mobile what-is-an-iblock">
  <div class="container is-fluid fade-in-container">
    <div class="columns is-vcentered">
      <div class="column is-two-fifths padding-sm blue-background">
        <div class="centered-container has-text-right animated-fast fadeInUp">
          <h1 class="extra-large-header white-text with-more-icon">What is<br />an iBlock?</h1>
        </div>
      </div>
    <div class="column padding-sm animated fadeInUp">
      <h4 class="floating-text top">future<br />robotics<br />engineer</h4>
    </div>
  </div>
  </div>
  </div>
  <div class="after-section-margin"> </div>
  <div class="section full-height background full-width-mobile fade-in-container nopadding" style="background-image: url('/wp-content/uploads/2021/05/what-is-an-iblock_image1.svg')">
    <figure style="width: 100%; position: absolute;" class="top left">
      <img src='/wp-content/uploads/2021/05/what-is-an-iblock_image2.svg' />
    </figure>
    <figure style="width: 100%; position: absolute; display: flex; align-items: flex-end;" class="bottom">
      <img src='/wp-content/uploads/2021/05/what-is-an-iblock_image3.svg' />
    </figure>
    <div class="container is-fluid" style="padding-top:12rem;padding-bottom:12rem;">
      <div class="columns">
        <div class="column is-offset-two-fifths padding-top">
          <h2 class="sub-header grey-text"><b>Put the “wow” back into STEM learning with project-based activities that engage students in critical thinking, teamwork, and fun.</b></h2>
        </div>
      </div>
      <div class="columns padding-top">
        <div class="column is-two-fifths has-text-right padding-right">
          <h2 class="sub-header blue-text"><b>An iBlock is...</b></h2>
        </div>
        <div class="column">
          <div class="block padding-bottom fade-in-container">
            <h3 class="small-header strong blue-text target-animate">Easy lift, high reward</h3>
            <p class="target-animate-slow">Because iBlocks are student-led and teacher-guided, they offer a robust and creative environment for everyone. Testing, grading, and formal evaluation are eliminated, and instead, students demonstrate mastery and learning through self-evaluation, discussion, and overall engagement with the project. </p>
          </div>
          <div class="block padding-bottom fade-in-container">
            <h3 class="small-header strong blue-text target-animate">An enhancement to your existing curriculum</h3>
            <p class="target-animate-slow">Enrich your existing curriculum with an iBlock, or use it to kick off a STEM initiative. An iBlock is designed to supplement your instruction with content that gives students a place to invent, explore, and take ownership of their learning.</p>
          </div>
          <div class="block padding-bottom fade-in-container">
            <h3 class="small-header strong blue-text target-animate">An out-of-the-box solution</h3>
            <p class="target-animate-slow">Each iBlock includes everything you need to implement it effectively in the classroom, from a framework that aligns to national standards, to student workbooks, a teacher’s guide to help you facilitate, and even self-assessments to help students keep their learning on track.</p>
          </div>
          <div class="block padding-bottom fade-in-container">
            <h3 class="small-header strong blue-text target-animate">Driven by design thinking</h3>
            <p class="target-animate-slow">In each iBlock you’ll see a strong focus on engineering design concepts like researching, constructing, testing, evaluating, and redesigning, since an iBlock teaches students that learning is a journey — not a straight line.</p>
          </div>
          <div class="block padding-bottom fade-in-container">
            <h3 class="small-header strong blue-text target-animate">Built around a capstone project</h3>
            <p class="target-animate-slow">Each iBlock culminates in a capstone project that brings together everything students have learned throughout their iBlock, from their earliest research to their latest redesign.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--
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
-->
