<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>

<div id="iblock-state-modal" class="modal state-topic">
  <div class="modal-background"></div>
  <div class="modal-content iblock-content container"></div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

<div class="pathways-catalog modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="columns">
      <div class="column padding white-background">
        <h3 class="sub-header strong blue-text">Download an iBlocks Pathways Catalog using the form below.</h3>
        <br />
        <!--[if lte IE 8]>
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
            portalId: "182596",
	          formId: "37b7f650-1675-4e87-a49b-738d65b2d942"
          });
        </script>
      </div>
    </div>
  </div>
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

<div class="section background full-width-mobile grey-background">
  <div class="container is-fluid">

    <div class="columns is-vcentered is-multiline autocomplete-app posts-area">
      <div class="column is-12 ui-widget-container padding-bottom">
        <?php echo do_shortcode("[my_ajax_filter_search]"); ?>
      </div>
    </div>

    <div class="columns is-vcentered autocomplete-app" style="display: none;">
      <div class="column is-12">
        <h2 class="sub-header strong">Just looking to browse our <u>iBlock ideas by Category?</u> <br />No problem, use the select menu below to select your category.</h2>
        <p class="toggle-switch">Back to search by state</p>
      </div>
    </div>

  </div>
</div>

<div class="section background full-width-mobile">
  <div class="container is-fluid">
    <div class="columns is-vcentered">
      <div class="column is-12">
        <h2 class="sub-header strong">Explore our pathways </h2>
        <p>Discover the iBlocks we’ve imagined and see how they align to relevant state standards.  Have a specific standard, subject, or project in mind? Let us know! An iBlock can be customized for your interests, goals, and needs. </p>
      </div>
    </div>
  </div>
</div>


<div class="section full-height full-width-mobile grey-background">
  <div class="container is-fluid">
    <div class="columns">
      <div class="column is-4">
        <h2 class="main-header strong">iBlock Pathways:</h2>
        <ul class="pathways-link-menu">
          <?php
            $posts = get_posts( array( 'posts_per_page' => '-1' , 'orderby' => 'title', 'order'   => 'ASC', 'category_name' => 'iblock-pathways' ) );

            $post = $posts[0];
            $c = 0;
            $len = count($posts);

			      foreach( $posts as $post ) : setup_postdata( $post );
              global $post;

          ?>
            <li class="pathways-menu-item <?php
              if ($c == 0) {
                echo 'pathways-link-active';
              } elseif ($c == 1) {
                echo 'next';
              } else if ($c == $len - 1) {
                echo 'prev';
              }
              $c++;
            ?>" data-target="<?php echo $post->ID; ?>" rel="<?php the_permalink();?>"><?php the_title(); ?></li>
          <?php wp_reset_postdata(); endforeach; ?>
            <li>
              <!--HubSpot Call-to-Action Code --><span class="hs-cta-wrapper" id="hs-cta-wrapper-de051e9e-d990-44ca-8625-933439d4a2ca"><span class="hs-cta-node hs-cta-de051e9e-d990-44ca-8625-933439d4a2ca" id="hs-cta-de051e9e-d990-44ca-8625-933439d4a2ca"><!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]--><a href="https://cta-redirect.hubspot.com/cta/redirect/182596/de051e9e-d990-44ca-8625-933439d4a2ca"  target="_blank" ><img class="hs-cta-img" id="hs-cta-img-de051e9e-d990-44ca-8625-933439d4a2ca" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/182596/de051e9e-d990-44ca-8625-933439d4a2ca.png"  alt="Download the FREE iBlocks Pathways catalog"/></a></span><script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script><script type="text/javascript"> hbspt.cta.load(182596, 'de051e9e-d990-44ca-8625-933439d4a2ca', {}); </script></span><!-- end HubSpot Call-to-Action Code -->
            </li>
        </ul>
      <!--
        <p><a id="pathways-catalog-modal-button" class="button quarter-width"  data-target="modal-ter" aria-haspopup="true">Download the iBlocks Pathways Booklet</a></p>
      -->
      </div>
      <div class="column iblock-pathways">
        <button class="button prev"></button>
        <button class="button next"></button>
        <div id="loading-content" class="pathways-content-container">
          <div class="pathway-content">
            <?php
              $the_query = new WP_Query( array( 'posts_per_page' => '1' , 'orderby' => 'title', 'order'   => 'ASC', 'category_name' => 'iblock-pathways' ) );
              while ($the_query -> have_posts()) : $the_query -> the_post();
                global $post;
            ?>
            <h5><?php echo the_title(); ?></h5>
            <?php the_content();

              endwhile; wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section topics-map padding-bottom">
  <div class="container is-fluid padding-bottom">
    <div class="columns">
      <div class="column padding-top padding-bottom">
        <h2 class="main-header strong">Ready to get even more inspired?</h2>
        <br />
        <h5 class="sans-serif small-header">Let’s take a look at some of the top U.S. industries. These can be a great starting point for creating an iBlock that’s relevant to your area — and your students. <br /><br /><span class="strong">Click on your state or browse by category to see some top industries and the iBlocks they’ve inspired.</span></h5>
        <br />
      </div>
    </div>
    <div class="columns">
      <div class="column is-3 nopadding">
        <h2 class="is-size-5"><strong>Search by<br />Categories:</strong></h2>
        <div class="mobile-nav">
          <select class="state-select state-menu">
            <option value="" selected="selected">select your state</option>
            <?php   $args = array(
                'orderby' => 'name',
                'parent' => 0,
                "exclude"   => 121,
              );
              $categories = get_categories( $args );

                foreach ( $categories as $category ) { ?>
                  <option value="<?php echo get_category_link( $category->term_id ); ?>"><?php echo get_cat_name( $category->term_id ); ?></option>
                <?php  } ?>
          </select>
        </div>
      </div>
      <div class="column nopadding">
        <h2 class="is-size-5"><strong>Search by State:</strong></h2>
        <div class="mobile-nav">
          <select class="state-select category-menu">
            <option value="" selected="selected">select your category</option>
            <?php   $args = array(
                'orderby' => 'name',
                'parent' => 121,
              );
              $categories = get_categories( $args );

                foreach ( $categories as $category ) { ?>
                  <option value="<?php echo get_category_link( $category->term_id ); ?>"><?php echo get_cat_name( $category->term_id ); ?></option>
                <?php  } ?>
          </select>
        </div>
      </div>
    </div>
    <div class="columns" id="desktopusmap">
      <div class="column content broad-categories">
        <ul class="broad-categories-list">
          <?php $args = array(
            'orderby' => 'name',
            'parent' => 121,
          );
          $categories = get_categories( $args );
          foreach ( $categories as $category ) {
          ?>
            <li><a class="is-size-6" rel="<?php echo get_category_link( $category->term_id ); ?>"><?php echo get_cat_name( $category->term_id ); ?></a></li>
          <?php  } ?>
        </ul>
      </div>
      <div id="map-container" class="column content is-full">
        <?php include( get_template_directory() . '/inc/svg-states.php'); ?>
        <?php include( get_template_directory() . '/inc/svg-map.php'); ?>
      </div>
    </div>
    <nav id="mobileusmap" class="columns panel"></nav>

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

<?php include( get_template_directory() . '/inc/Prosthetic-hand-iblock-download-form.php'); ?>
