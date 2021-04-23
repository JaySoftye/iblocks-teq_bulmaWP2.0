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

  $(".message-container-empty-space, #close-btn").click(function(e){
    e.preventDefault();
    $(".message-container").addClass("hide-large");
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



    /* JQUERY FUNCTION TO FILTER IBLOCK PATHWAYS BY CATEGORY */
    // TARGET SELECT MENU ELEMENT WITH CLASS 'category-filter'
    // GATHER VARIABLES TO HOLD VALUE ATTRIBUTE AS a element of Class..
    // IF 'all-categories' OPTION IS SELECTED SHOW ALL ELEMENTS 'article.iblock-pathways' OF THE category CLASS SELECTED
    $('select.iblock-pathways-filter.category-filter').on('change', function() {
      var categoryValue = '.' + $(this).val();
      var gradeOption = $('select.iblock-pathways-filter.grade-level-filter option:checked');
      var gradeOptionValue = '.' + $(gradeOption).val();
      var careerOption = $('select.iblock-pathways-filter.career-filter option:checked');
      var careerOptionValue = '.' + $(careerOption).val();
      var targetValue = categoryValue + gradeOptionValue + careerOptionValue;

        $('.iblock-post-container article.iblock-pathways').each(function() {
          if($(this).is(targetValue)) {
              $(this).stop().show(420);
          } else {
              $(this).stop().hide(420);
          }
        });
      console.log(targetValue);
    });
    /* JQUERY FUNCTION TO FILTER IBLOCK PATHWAYS BY CATEGORY */
    // TARGET SELECT MENU ELEMENT WITH CLASS 'grade-level-filter'
    // GATHER VARIABLES TO HOLD VALUE ATTRIBUTE AS a element of Class..
    // IF 'all-grade-level' OPTION IS SELECTED SHOW ALL ELEMENTS 'article.iblock-pathways' OF THE grade CLASS SELECTED
    $('select.iblock-pathways-filter.grade-level-filter').on('change', function() {
      var gradeValue = '.' + $(this).val();
      var categoryOption = $('select.iblock-pathways-filter.category-filter option:checked');
      var categoryOptionValue = '.' + $(categoryOption).val();
      var careerOption = $('select.iblock-pathways-filter.career-filter option:checked');
      var careerOptionValue = '.' + $(careerOption).val();
      var targetValue = gradeValue + categoryOptionValue + careerOptionValue;

        $('.iblock-post-container article.iblock-pathways').each(function() {
          if($(this).is(targetValue)) {
              $(this).stop().show(420);
          } else {
              $(this).stop().hide(420);
          }
        });
      console.log(targetValue);
    });
    /* JQUERY FUNCTION TO FILTER IBLOCK PATHWAYS BY CAREER INDUSTRY */
    // TARGET SELECT MENU ELEMENT WITH CLASS 'grade-level-filter'
    // GATHER VARIABLES TO HOLD VALUE ATTRIBUTE AS a element of Class..
    // IF 'all-grade-level' OPTION IS SELECTED SHOW ALL ELEMENTS 'article.iblock-pathways' OF THE career CLASS SELECTED
    $('select.iblock-pathways-filter.career-filter').on('change', function() {
      var careerValue = '.' + $(this).val();
      var categoryOption = $('select.iblock-pathways-filter.category-filter option:checked');
      var categoryOptionValue = '.' + $(categoryOption).val();
      var gradeOption = $('select.iblock-pathways-filter.grade-level-filter option:checked');
      var gradeOptionValue = '.' + $(gradeOption).val();
      var targetValue = careerValue + categoryOptionValue + gradeOptionValue;

        $('.iblock-post-container article.iblock-pathways').each(function() {
          if($(this).is(targetValue)) {
              $(this).show(420);
          } else {
              $(this).hide(420);
          }
        });
      console.log(targetValue);
    });

    /* JQUERY FUNCTION TO SET IBLOCK PATHWAY TITLE PARAMETERS  */
      // TARGET TITLE SPAN IN PRICING FORM AND SET
        // TARGET HUBSPOT INPUT ELEMENT AND SET TITLE
    $(document).on( 'click', 'button.purchase.purchase-button.static', function() {
      var iBlockPathwayTitle = $(this).attr('data-title');
      $('span#iblock-pricing-form-title-selected').html(iBlockPathwayTitle);
        $('input#iblock-pathways-selected-title').val(iBlockPathwayTitle);
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
