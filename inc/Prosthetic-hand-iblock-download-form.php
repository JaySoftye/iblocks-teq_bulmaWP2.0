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
        <h3 class="sub-header strong blue-text">Download a sample Prosthetic Hand iBlock using the form below.</h3>
        <br />
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
            hbspt.forms.create({
	          portalId: "182596",
	          formId: "ec124d6b-6f1f-47a8-8acb-ccfc7eac4120",
            onFormSubmit: function($form) {
              function gtag_report_conversion_prosthetic(url) {
                var callback = function () {
                  if (typeof(url) != 'undefined') {
                    window.location = url;
                  }
                };
                gtag('event', 'conversion', {
                  'send_to': 'AW-677760146/kETICLDQz_0BEJKZl8MC',
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
        <p class="has-text-right">In our sample Prosthetic Hand iBlock, students dive into STEM content as they experience the Engineering Design Process first-hand. Their work culminates in the creation of their own prosthetic hand that pulls together their research, guides them through the design process, and fosters important skills like critical thinking and problem-solving. </p>
        <p class="has-text-right"><a class="button half-width iblock-modal-button"  data-target="modal-ter" aria-haspopup="true">Download sample</a></p>
      </div>
      <div class="column target-animate">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/prosthetichand-iblock-download.jpg" />
      </div>
    </div>
  </div>
</div>
