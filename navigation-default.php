<div class="navbar-container">

<nav class="navbar mainnav" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item brand-logo" href="<?php echo get_home_url(); ?>">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/brand_logo.svg" width="252" height="96">
      <h1>Project-Based Learning</h1>
    </a>
    <a role="button" class="navbar-burger burger" aria-label="menu">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-menu">
    <div class="navbar-end">
      <a href="<?php echo get_site_url(); ?>/what-is-an-iblock" class="navbar-item <?php if (is_page("What is an iBlock?")) { ?> selected <?php } ?>">What is an iBlock?</a>
      <a href="<?php echo get_site_url(); ?>/iblocks-impact" class="navbar-item <?php if (is_page("iBlocks impact")) { ?> selected <?php } ?>">iBlocks impact</a>
      <a href="<?php echo get_site_url(); ?>/how-we-build-an-iblock" class="navbar-item <?php if (is_page("How we build an iBlock")) { ?> selected <?php } ?>">How we build an iBlock</a>
      <a href="<?php echo get_site_url(); ?>/iblocks-packages" class="navbar-item <?php if (is_page("iBlocks packages")) { ?> selected <?php } ?>">iBlocks packages</a>
      <a href="<?php echo get_site_url(); ?>/iblocks-ideas" class="navbar-item rubegoldberg <?php if (is_page("iBlocks ideas")) { ?> selected <?php } ?>">iBlocks Solutions
        <img src="<?php echo get_template_directory_uri();?>/assets/img/rubegoldberg-brand_logo.png" />
      </a>
      <a class="navbar-item contact-us-modal-button">Contact us</a>
    </div>
  </div>
  <nav class="nav mobile-menu">
    <ul class="menu-list">
      <li><a href="<?php echo get_site_url(); ?>/what-is-an-iblock" class="navbar-item <?php if (is_page("What is an iBlock?")) { ?> selected <?php } ?>">What is an iBlock?</a></li>
      <li><a href="<?php echo get_site_url(); ?>/iblocks-impact" class="navbar-item <?php if (is_page("iBlocks impact")) { ?> selected <?php } ?>">iBlocks impact</a></li>
      <li><a href="<?php echo get_site_url(); ?>/how-we-build-an-iblock" class="navbar-item <?php if (is_page("How we build an iBlock")) { ?> selected <?php } ?>">How we build an iBlock</a></li>
      <li><a href="<?php echo get_site_url(); ?>/iblocks-packages" class="navbar-item <?php if (is_page("iBlocks packages")) { ?> selected <?php } ?>">iBlocks packages</a></li>
      <li><a href="<?php echo get_site_url(); ?>/iblocks-ideas" class="navbar-item rubegoldberg <?php if (is_page("iBlocks ideas")) { ?> selected <?php } ?>">iBlocks solutions</a></li>
      <li><a class="navbar-item contact-us-modal-button">Contact us</a></li>
    </ul>
  </nav>
</nav>
</div>

<div class="contact-us modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="columns nomargin">
      <div class="column padding white-background">
        <h3 class="small-header strong blue-text">Send us a message and our PD Curriculum Team will reach out to you directly or call us toll free at 877.455.9369.</h3>
        <br />
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
	           portalId: "182596",
	           formId: "e86c85f8-eb98-4e75-95ae-ae37fe3ddb40",
             onFormSubmit: function($form) {
               function gtag_report_conversion(url) {
                 var callback = function () {
                   if (typeof(url) != 'undefined') {
                     window.location = url;
                   }
                 };
                 gtag('event', 'conversion', {
                   'send_to': 'AW-677760146/bdwuCKmdkPwBEJKZl8MC',
                   'event_callback': callback
                 });
                 return false;
               }
               console.log('submitted');
             }
          });
        </script>
      </div>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>
