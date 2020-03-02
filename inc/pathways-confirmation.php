<?php
  // Inintialize URL to the variable
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  // Use parse_url() function to parse the URL
  // and return an associative array which
  // contains its various components
  $url_components = parse_url($url);

  // Use parse_str() function to parse the
  // string passed via URL
  parse_str($url_components['query'], $params);

  // Display result

?>

<div class="message-container">
  <div class="message-container-empty-space"></div>
<article class="message-block">
  <div class="message-block-body padding">
    <p class="has-text-center block">
      <a href="<?php echo $params['blankt']; ?>" target="_blank" class="button half-width strong">Download your sample here</a>
    </p>
    <small id="close-btn" class="has-text-centered block">[close window]</small>
  </div>
</article>
</div>

<div class="container is-fluid fade-in-container section">
  <div class="columns is-desktop">
    <div class="column is-8 is-offset-2 padding-top">
      <h1 class="extra-large-header has-text-centered">Thank you <?php echo $params['firstname']. ' ' . $params['lastname']; ?>.</h1>
      <h2 class="small-header has-text-centered">We hope you find our <a href="<?php echo $params['blankt']; ?>"><u><?php echo $params['blankr']; ?> iBlock sample</u></a> helpful. You’re well on your way to bringing fun, <strong>hands-on project-based learning into the classroom</strong>!</h2>
    </div>
  </div>

  <div class="columns is-desktop padding-top">
    <div class="column is-6 is-offset-3">
      <figure class="has-text-centered">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/iblock-pathways-stack.jpg">
      </figure>
      <h3 class="sub-header has-text-centered strong">Want even more PBL resources?</h3>
      <p class="small-header has-text-centered">Download our <em>FREE</em> iBlocks Pathways catalog! You’ll explore some of the learning pathways we’ve created, learn how iBlocks ignite hands-on project-based learning, and identify the pathway that will speak to your students.  </p>
      <br />
      <br />
      <!--[if lte IE 8]>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
      <![endif]-->
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
      <script>
        hbspt.forms.create({
	         portalId: "182596",
	         formId: "b8add2ec-bd4b-449a-b44a-79dcf225c50f"
        });
      </script>
      <br /><br />
      <h3 class="sub-header strong has-text-centered">It's full of PBL content ideas such as:</h3>
    </div>
  </div>

  <div class="columns is-desktop padding-top">
    <div class="column is-8 is-offset-2">
      <div class="card columns is-vcentered">
        <div class="card-image column is-3">
          <figure class="image">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/iblock-pathway-olympic-field-day.png">
          </figure>
        </div>
        <div class="card-content column">
          <div class="content">
            <h4 class="small-header">Olympic Field Day iBlock</h4>
            <p>Engage your students in inquiry-based thinking as they create and code robots to compete in a field day event.</p>
          </div>
        </div>
      </div>
      <br />
      <div class="card columns is-vcentered">
        <div class="card-image column is-3">
          <figure class="image">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/iblock-pathway-growing-a-modern-garden.png">
          </figure>
        </div>
        <div class="card-content column">
          <div class="content">
            <h4 class="small-header">Growing a Modern Garden iBlock</h4>
            <p>Watch your students collaborate as they grow a class-sized garden and monitor it with the help of circuits and sensors.</p>
          </div>
        </div>
      </div>
      <br />
      <div class="card columns is-vcentered">
        <div class="card-image column is-3">
          <figure class="image">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/iblock-pathway-light-and-shadows.png">
          </figure>
        </div>
        <div class="card-content column">
          <div class="content">
            <h4 class="small-header">Light and Shadows iBlock</h4>
            <p>Put your students’ problem-solving skills to the test as they research the history of measuring time, and then construct and 3D print their own time-telling device. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
