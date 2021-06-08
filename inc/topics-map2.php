<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>

<div class="pathways-catalog modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="columns nomargin">
      <div class="column padding white-background">
        <h5 id="form-text" class="strong is-size-4 margin-bottom">Using the form below, have an iBlocks Account  Rep reach out to you directly for exact pricing on the <span id="iblock-pricing-form-title-selected"></span> iBlock Pathway.</h5>
        <div class="pathways-pricing-form-container">
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
            portalId: "182596",
            formId: "37b7f650-1675-4e87-a49b-738d65b2d942",
            inlineMessage: '<p style="line-height:1.5;font-size:24px">Thank you for your interest, your request for pricing has been submitted. A PD Curriculum Team member will reach out to you shortly but please feel free to contact us with any additional questions at <strong>877.455.9369.</strong></p>',

						onFormSubmit: function($form) {
							// GRAB THE PAGE TITLE AND SET 'BLANK' HIDDEN INPUT FIELD AS TITLE OF THE PAGE
              // HIDE #form-text ELEMENT
               var iblockTitle = $('input#iblock-pathways-selected-title').val();
                $form.find('input[name="blank"]').val(iblockTitle).change();
                $('#form-text').hide();

              // SET REDIRECT WITH FORM DATA IN URL
								setTimeout( function() {
									var formData = $form.serialize();
								}, 250 ); // Redirects to url with query string data from form fields after 250 milliseconds.
						}

          });
        </script>
        </div>
      </div>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

<div class="page-section full-width-mobile iblocks-ideas">
  <div class="container is-fluid fade-in-container">
    <div class="columns is-vcentered">
      <div class="column is-two-fifths padding-sm hot-pink-background"><div class="centered-container has-text-right target-animate animated fadeInUp">
        <h1 class="extra-large-header white-text with-more-icon">Interested?<br />Here’s some great ideas to get you started.</h1>
      </div>
    </div>
    <div class="column padding-sm target-animate-slow animated fadeInUp">
      <h4 class="floating-text top">limitless<br />future!</h4>
    </div>
  </div>
  </div>
</div>
<div class="after-section-margin"></div>

<div class="section background full-width-mobile">
  <div class="container is-fluid">
    <div class="columns">
      <div class="column is-full padding-right">
        <h2 class="sub-header strong">Explore our iBlock Solutions</h2>
        <p>Take a look at some of the iBlocks solutions we’ve created, and get inspired to bring skills-centric, experiential learning into your classroom! With each iBlock, you’ll receive a Framework, Teacher’s Guide, Student Workbooks, and more. Don’t see a topic or subject that speaks to you? <span class="tag is-medium contact-us-modal-button bold black-text" style="cursor:pointer;">Contact us</span> to talk about building a custom iBlock.</p>
        <p class="strong">Get started and order an iBlock today!</p>
      </div>
    </div>
  </div>
</div>

<div class="section full-width-mobile iblock-pathways-state-iblocks-container">

  <nav class="container is-fluid filters-nav">
  <div class="columns is-vend">
    <div class="column is-8">
      <label class="label pink-text strong">iBlock Search Filters:</label>
      <div class="field is-grouped is-flex-wrap">
        <div class="control">
          <div class="select">
            <select class="iblock-pathways-filter category-filter">
              <option selected disabled value="iblock-item">iBlock Category Filter</option>
              <option name="All Categories" value="iblock-pathways">All Categories</option>
              <option name="coding" value="coding">Coding</option>
              <option name="ela" value="ela">English Language Arts</option>
              <option name="engineering" value="engineering">Engineering</option>
              <option name="hydroponics" value="hydroponics">Hydroponics</option>
              <option name="math" value="math">Mathematics</option>
              <option name="robotics" value="robotics">Robotics</option>
              <option name="science" value="science">Science</option>
              <option name="social-studies" value="social-studies">Social Studies</option>
              <option name="special-education" value="special-education">Special Education</option>
            </select>
          </div>
        </div>
        <div class="control">
          <div class="select">
            <select class="iblock-pathways-filter grade-level-filter">
              <option selected disabled value="iblock-item">Grade Level Filter</option>
              <option name="All Grade Levels" value="iblock-pathways">All Grade levels</option>
              <option name="elementary-school" value="elementary-school">Elementary School</option>
              <option name="middle-school" value="middle-school">Middle School</option>
              <option name="high-school" value="high-school">High School</option>
            </select>
          </div>
        </div>
        <div class="control">
          <div class="select">
            <select class="iblock-pathways-filter career-filter">
              <option selected disabled value="iblock-item">Career Industry Filter</option>
              <option name="All Career Industries" value="iblock-pathways">All Industries</option>
              <option name="agriculture" value="agriculture">Agriculture</option>
              <option name="applied-science" value="applied-science">Applied Science</option>
              <option name="arts" value="arts">Arts</option>
              <option name="business" value="business">Business</option>
              <option name="energy" value="energy">Energy</option>
              <option name="environment" value="environment">Environment</option>
              <option name="finance" value="finance">Finance</option>
              <option name="health" value="health">Health</option>
              <option name="math-cs" value="math-cs">Math/CS</option>
              <option name="transportation" value="transportation">Transportation</option>
            </select>
          </div>
        </div>
        <div class="control">
          <input id="iblock-pathways-selected-title" type="hidden" value>
        </div>
      </div>
    </div>
    <div class="column iblock-pathways">
      <!--HubSpot Call-to-Action Code --><span class="hs-cta-wrapper" id="hs-cta-wrapper-de051e9e-d990-44ca-8625-933439d4a2ca"><span class="hs-cta-node hs-cta-de051e9e-d990-44ca-8625-933439d4a2ca" id="hs-cta-de051e9e-d990-44ca-8625-933439d4a2ca"><!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]--><a href="https://cta-redirect.hubspot.com/cta/redirect/182596/de051e9e-d990-44ca-8625-933439d4a2ca"  target="_blank" ><img class="hs-cta-img" id="hs-cta-img-de051e9e-d990-44ca-8625-933439d4a2ca" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/182596/de051e9e-d990-44ca-8625-933439d4a2ca.png"  alt="Download the FREE iBlocks Pathways catalog"/></a></span><script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script><script type="text/javascript"> hbspt.cta.load(182596, 'de051e9e-d990-44ca-8625-933439d4a2ca', {}); </script></span><!-- end HubSpot Call-to-Action Code -->
    </div>
  </div>
  </nav>

  <div class="section iblock-post-container grey-background">
    <div class="container is-fluid">
      <div class="columns is-multiline">

        <article id="iblock-pathway-details-container" class="column is-full">
          <div class="columns card iblock-pathway-details">
            <div class="column is-8-desktop is-full-mobile content-container">
              <nav>
                <h3 id="dataTitle" class="title iblock-pathway-post-content"></h3>
                <button class="purchase purchase-button pathways-catalog-modal-buttons" type="button" data-target="modal-ter" aria-haspopup="true">Purchase this iBlock</button>
              </nav>
              <img id="loader" src="<?php echo get_template_directory_uri();?>/assets/img/Ajax-Preloader.gif" />
              <div id="dataContent"></div>
            </div>
            <div class="column is-4-desktop hide-small image-container">
              <button class="back-button" type="button">Close &#10006;</button>
              <img src="<?php echo get_template_directory_uri();?>/assets/img/iBlockPathway_purchase-image.png" />
            </div>
          </div>
        </article>

      <?php
      /**
        * WORDPRESS SEARCH QUERY FOR STATEIBLOCKS
        * Query Custom Post Type 'stateiblocks'
        * TAXONOMY Criteria set for class names of each item fetched from loop
        */
        $iblock_post_args = array(
          'post_type' => 'stateiblocks',
          'posts_per_page' => -1,
          'orderby' => 'title',
          'order' => 'ASC',
          'category_name' => 'iblock-pathways',
        );
        $iblock_post_query = new WP_Query( $iblock_post_args );
        if ($iblock_post_query -> have_posts()) :
          while ($iblock_post_query -> have_posts()) :
            $iblock_post_query -> the_post();
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
            $blog_title = esc_html( get_the_title() );
            $post_slug = get_post_field( 'post_name', get_post() );
      ?>
        <article id="<?php echo get_the_ID() . '-iblock-pathway'; ?>" class="column is-static is-2-fullhd is-3-widescreen is-3-desktop is-4-tablet is-12-mobile iblock-item <?php foreach(get_the_terms($iblock_post_query->post->ID, 'category') as $category) echo $category->slug . " ";?>">
          <div class="card card-content">
            <h3 class="title iblock-pathway-post-content"><?php the_title(); ?></h3>
            <?php if ( has_post_thumbnail() ) {
              echo '<img src="' . esc_url($featured_img_url) . '" alt="' . $blog_title . '" />';
						} else {
              echo '<img src="' . get_template_directory_uri() . '/assets/img/default-iblock-pathways-icon.svg" />';
            } ?>
            <h6>
              <?php if ( has_excerpt() ) { the_excerpt(); } ?>
            </h6>
            <div class="button-options-container">
              <button id="<?php echo get_the_ID(); ?>" data-id="<?php echo get_the_ID() . '-iblock-pathway'; ?>" class="learn" type="button">Learn more</button>
              <button class="purchase purchase-button static pathways-catalog-modal-buttons" type="button" data-title="<?php the_title(); ?>" aria-haspopup="true">Purchase this iBlock</button>
            </div>
          </div>
        </article>
      <?php endwhile; else : ?>
        <h3>No iBlocks were found.</h3>
        <h5>We're sorry, but it seems something has gone awry.</h5>
      <?php endif; wp_reset_postdata(); ?>
      </div>
      <div class="no-products-found">
        <span class="is-size-4">We're sorry, no iblocks were found matching this criteria.<br /><strong>Try another filter category/grade using the menus above.</strong></span>
      </div>
    </div>
  </div>

<div class="section background full-width-mobile tan-background-fill">
  <div class="container is-fluid">
    <div class="columns is-vcentered fade-in-container">
      <div class="column is-8 target-animate-fast">
        <h2 class="sub-header strong">Out-of-the-box STEM learning with Rube Goldberg Machines</h2>
        <h5 class="small-header">We’ve teamed up with Rube Goldberg Inc. to create a series of special iBlocks!</h5>
        <br /><br />
        <p>Our Rube Goldberg Machine iBlocks scaffold the creation of your Rube Goldberg Machine in the classroom by providing the learning content, materials, training — and even the opportunity for schools to enter their inventions in the official Rube Goldberg Machine Contest!<br /><br />As students build their contraption, they’ll learn about teamwork, push through failures, and practice STEM hands-on.<br /><br /> <a href="/rube-goldberg-machine-iblocks" class="button blue-fill">Learn more</a></p>
      </div>
      <div class="column target-animate">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/iblocks-rube-goldberg-machines-image.jpg" />
      </div>
    </div>
  </div>
</div>
