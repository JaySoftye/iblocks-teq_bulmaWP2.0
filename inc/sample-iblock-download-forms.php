<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

?>

<script type="text/javascript">
  $(document).ready(function() {

    $(".button.sample-download.rube-goldberg").click(function(e){
      e.preventDefault();
        $(".iblock.modal.rube-goldberg").addClass('is-active');
    });
    $(".button.sample-download.comic-book").click(function(e){
      e.preventDefault();
        $(".iblock.modal.comic-book").addClass('is-active');
    });
    $(".button.sample-download.prothetic").click(function(e){
      e.preventDefault();
        $(".iblock.modal.prothetic").addClass('is-active');
    });

  });
</script>

<div class="iblock modal rube-goldberg">
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
	        region: "na1",
          portalId: "182596",
          formId: "761e00d6-ce4c-4365-b3eb-92be43df7ead"
        });
        </script>
      </div>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

<div class="iblock modal comic-book">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="columns nomargin">
      <div class="column padding white-background">
        <h3 class="sub-header strong blue-text">Download a sample Design a Comic Book iBlock using the form below.</h3>
        <br />
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
        	region: "na1",
        	portalId: "182596",
        	formId: "78439ae5-1bec-4cb3-892b-4d249f553c85"
        });
        </script>
      </div>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>


<div class="iblock modal prothetic">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="columns nomargin">
      <div class="column padding white-background">
        <h3 class="sub-header strong blue-text">Download a sample Prosthetic iBlock using the form below.</h3>
        <br />
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
        	region: "na1",
        	portalId: "182596",
        	formId: "ec124d6b-6f1f-47a8-8acb-ccfc7eac4120"
        });
        </script>
      </div>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>
