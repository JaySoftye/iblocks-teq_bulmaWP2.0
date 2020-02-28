$(document).ready(function() {

  $(".iblock-modal-button").click(function(e){
    e.preventDefault();
    $(".iblock.modal").toggleClass("is-active");
  });

  $("#pathways-catalog-modal-button").click(function(e){
    e.preventDefault();
    $(".modal.pathways-catalog").toggleClass("is-active");
  });

  $(".pathways-catalog-modal-buttons").click(function(e){
    e.preventDefault();
    $(".modal.pathways-catalog").toggleClass("is-active");
  });

  $(".contact-us-modal-button").click(function(e){
    e.preventDefault();
    $(".modal.contact-us").toggleClass("is-active");
  });

  // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".nav.mobile-menu").toggleClass("is-active");

    });

  /* Expand and Collapse content */
  $('.expand-content-container').each( function(i) {

    var expandContent = $(this).find('span.expanded-content');

    $(this).click(function() {
      $(this).toggleClass('expanded');
      expandContent.toggle();
    });

  });

  /* Close Messages */
  $('button.delete').click(function() {
    $(this).parent().remove();
  });

  /** CONDENSE THE MAIN NAV after you scroll down **/
 function checkOffset() {
    if ($('.navbar.mainnav').offset().top < 50) {
      $('.navbar.mainnav').removeClass('navScrolled');
    }
    else if(!$(window).scrollTop()) {
      $('.navbar.mainnav').addClass('navScrolled');
    }
    else {
      $('.navbar.mainnav').addClass('navScrolled');
    }
  }
    checkOffset();

  $(window).scroll(function() {
    checkOffset();
  });


  /* Every time the window is scrolled something will fade into the window */
  $(window).scroll( function() {

    $('.fade-in-container').each( function(i) {

      /* Check the location of each main-section parent element */
      var bottom_of_object = ( $(this).offset().top + $(this).outerHeight() / 2 );
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if( bottom_of_window >= bottom_of_object ){

        /* Fade in the hidden objects if element is in half view */

        /* Fade in the hidden objects if element is in half view */
        $(this).find('.target-animate').addClass('animated fadeInUp');
        $(this).find('.target-animate-slow').addClass('animated-slow fadeInUp');
        $(this).find('.target-animate-fast').addClass('animated-fast fadeInUp');

        /* Slide the white window to reveal the element under */
        $(this).find('.target-slide-left').addClass('animated-fast animate-slide-left');
        $(this).find('.target-slide-right').addClass('animated-fast animate-slide-right');

      }
    });
  });

  /* AJAX click function to load post contents for pathways menu */
  $("ul.pathways-link-menu li").click(function() {
    var post_id_contents = $(this).attr("rel");
      $("ul.pathways-link-menu li").not($(this)).removeClass("pathways-link-active");
      $("ul.pathways-link-menu li").removeClass("next prev");
      $(this).addClass("pathways-link-active").next().addClass("next");
      $(this).prev().addClass("prev");
        if ($(this).is(":first-child")) {
          $("ul.pathways-link-menu li:last-child").addClass("prev");
        } else if ($(this).is(":last-child")) {
          $("ul.pathways-link-menu li:first-child").addClass("next");
        }
      $(".pathways-content-container .pathway-content").fadeOut(300, function() { $(this).remove(); });
      $(".pathways-content-container").load(post_id_contents);
  });

  $(".iblock-pathways button.button.next").click(function() {
    var next_post_id = $("ul.pathways-link-menu li.pathways-menu-item.next");
    var next_post_id_contents = $(next_post_id).attr("rel");
      $("ul.pathways-link-menu li").removeClass("pathways-link-active next prev");
      $(next_post_id).addClass("pathways-link-active").next().addClass("next");
      $(next_post_id).prev().addClass("prev");
        if ($(next_post_id).is(":first-child")) {
          $("ul.pathways-link-menu li:last-child").addClass("prev");
        } else if ($(next_post_id).is(":last-child")) {
          $("ul.pathways-link-menu li:first-child").addClass("next");
        }
      $(".pathways-content-container .pathway-content").fadeOut(300, function() { $(this).remove(); });
      $(".pathways-content-container").load(next_post_id_contents);
  });

  $(".iblock-pathways button.button.prev").click(function() {
    var prev_post_id = $("ul.pathways-link-menu li.pathways-menu-item.prev");
    var prev_post_id_contents = $(prev_post_id).attr("rel");
      $("ul.pathways-link-menu li").removeClass("pathways-link-active next prev");
      $(prev_post_id).addClass("pathways-link-active").next().addClass("next");
      $(prev_post_id).prev().addClass("prev");
        if ($(prev_post_id).is(":first-child")) {
          $("ul.pathways-link-menu li:last-child").addClass("prev");
        } else if ($(prev_post_id).is(":last-child")) {
          $("ul.pathways-link-menu li:first-child").addClass("next");
        }
      $(".pathways-content-container .pathway-content").fadeOut(300, function() { $(this).remove(); });
      $(".pathways-content-container").load(prev_post_id_contents);
  });

  /* SVG map functions */

  $(".modal-close").click(function(){
      $(".approval-info").removeClass("is-active");
      $(".modal-content.box").fadeOut(100);
    });
    $(".modal-background").click(function(){
      $(".approval-info").removeClass("is-active");
      $(".modal-content.box").fadeOut(100);
    });

    $(".approval-btn").click(function(){
      var stateInfo = $(this).attr("rel");
        $("#map-legend").slideUp();
        $('#' + stateInfo).addClass("is-active");
        $(".modal-content.box").fadeIn(250);
    });

    /* AJAX click function to load category contents
     * Enable Modal Active
     * Empty and Close Modal Contents
     */
    $("svg g.state-select.approval-btn").click(function(){
      var state = $(this).attr('rel');
        $(".iblock-content").load("/category/"+state+"/#content");
        $(".modal.state-topic").addClass("is-active");
    });

    $("select.state-menu").change(function(){
      var data = $(this).val();
        $(".iblock-content").load(data);
        $(".state-topic.modal").addClass("is-active");
    });

    $("ul.broad-categories-list li a").click(function(){
      var state = $(this).attr('rel');
        $(".iblock-content").load("/category/"+state+"/#content");
        $("div#iblock-state-modal div.modal-content.iblock-content").addClass("iblock-category-container");
        $(".state-topic.modal").addClass("is-active iblock-category-content");
    });

    $("select.category-menu").change(function(){
      var data = $(this).val();
        $(".iblock-content").load(data);
        $("div#iblock-state-modal div.modal-content.iblock-content").addClass("iblock-category-container");
        $(".state-topic.modal").addClass("is-active iblock-category-content");
    });

    $(".modal-background, .modal-close").click(function(){
        $( ".iblock-content" ).empty();
        $("div#iblock-state-modal div.modal-content.iblock-content").removeClass("iblock-category-container");
        $(".modal").removeClass("is-active");
    });

});

/* Check when the sticky top border reaches the top of the window, when it does add class condensed */
//Attempt to get the element using document.getElementById
var element = document.getElementById("sticky-marker");
  if(typeof(element) != 'undefined' && element != null) {
    var observer = new IntersectionObserver(function(entries) {
       // no intersection with screen
        if(entries[0].intersectionRatio === 0)
          document.querySelector("#sticky-container").classList.add("condensed");
           // fully intersects with screen
            else if(entries[0].intersectionRatio === 1)
          document.querySelector("#sticky-container").classList.remove("condensed");
        }, { threshold: [0,1] });
    observer.observe(document.querySelector("#sticky-marker"));
  }
