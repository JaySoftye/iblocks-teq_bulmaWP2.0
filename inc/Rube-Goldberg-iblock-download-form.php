<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

?>

<div class="iblock modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="columns nomargin">
      <div class="column padding white-background">
        <h3 class="sub-header strong blue-text">Download a sample Rube Goldberg iBlock using the form below.</h3>
        <br />
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
           portalId: "182596",
           formId: "761e00d6-ce4c-4365-b3eb-92be43df7ead",
           onFormSubmit: function($form) {
             function gtag_report_conversion_rube(url) {
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

<div class="section full-width-mobile grey-background last-section">
  <div class="container is-fluid fade-in-container">
    <div class="columns">
      <div class="column is-three-fifths padding-left">
        <h2 class="has-text-right sub-header strong">Want to see what it’s all about?</h2>
        <p class="has-text-right">In our sample Rube Goldberg iBlock, students dive into STEM content as they experience the engineering design process first-hand. Their work culminates in the creation of their own chain reaction machine that pulls together their research, guides them through the design process, and fosters important skills like critical thinking and problem-solving.</p>
        <p class="has-text-right"><a class="button half-width iblock-modal-button" data-target="modal-ter" aria-haspopup="true">Download sample</a></p>
      </div>
      <div class="column target-animate">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/rubegoldberg-iblock-download.jpg" />
      </div>
    </div>
  </div>
</div>
