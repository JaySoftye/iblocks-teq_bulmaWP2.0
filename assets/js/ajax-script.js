$(document).ready(function() {


    // Auto complete for input#search
    $(function() {
      var availableTags = [
        "Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "PennsylvaniaRhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
      ];
      $( "#search" ).autocomplete({
        source: availableTags
      });
    });

    $("a#toggleCategory").unbind('click');
    $("a#toggleCategory").click(function () {
      $(".ajax_fitler_search_form_section").toggle();
    });

    // Ajax search container VARIABLES
    // Form Container, Search Field, and Empty Div for Results to print into
    var stateBlockSearch = $("#ajax_fitler_search_form_container");
    var stateBlockSearchForm = stateBlockSearch.find("form")
    var stateBlockSearchFormSelect = stateBlockSearch.find("#select")
    var stateBlockSearchResults = $("#ajax_fitler_search_results");


    $('a.submit-button').on('click',function(e){
      $('#my_ajax_filter_search_form').submit();
        e.preventDefault();
        e.stopImmediatePropagation();
    });

    // Form submit function; Prevent default page load
    stateBlockSearchForm.submit(function(e){
      e.preventDefault();
      e.stopImmediatePropagation();

      console.log("search submitted");

      // Capture the search field value
      if(stateBlockSearchForm.find("#search").val().length !== 0) {
        var search = stateBlockSearchForm.find("#search").val();
      }

      // Store data and create action to submit to wp-adin ajax
      var data = {
        action : "my_ajax_filter_search",
        search : search
      }

      // Ajax Result for successful submission of data admin-ajax.php
      $.ajax({
        url : ajax_url,
        data : data,
        success : function(response) {

          // successful request parse all data in a loop that is returned with javascript
          stateBlockSearchResults.empty();
          console.log(search + " search results found");
            if(response) {
                stateBlockSearch.empty();
                stateBlockSearch.append("<h2 class='sub-header'>Great choice, now let's pick an industry focus. <br /><strong >The top industries in <em>" + search + "</em> are:</strong></h2>");
                // RUN LOOP TO PRINT OUT DATA
                for(var i = 0 ;  i < response.length ; i++) {
                     var html = "<div id='" + response[i].id + "' class='state-iblock-container column is-4' rel='" + search + "'>";
                         html += "  <div class='state-iblock-content state-industry'><div class='card'>";
                         html += "    <img src='" + response[i].poster + "' alt='" + response[i].title + "' />";
                         html += "  </div>";
                         html += "  <h4>" + response[i].title + "</h4>";
                         html += "</div>";
                         html += "<div class='state-iblock-content industry-ideas column is-12' style='display:none;'>";
                         html += response[i].content;
                         html += "<div class='has-text-centered padding-sm'>";
                         html += "<a class='button button-small contact-us-modal-button'> I would like to learn more</a> <a class='button button-small blue-fill'  onClick='window.location.reload();'> I would like to start over</a>";
                         html += "</div></div>";

                  $("a.contact-us-modal-button").click(function() {
                    $(".contact-us.modal ").addClass("is-active");
                  });

                  $("div#ajax_fitler_search_results").append(html);

                     // Show iBlock Ideas CLICK FUNCTION - show data is already fetched and hide previous shown data
                     $(".state-iblock-container").click(function() {
                       var container = $(this);
                          container.removeClass("is-4");
                          container.siblings().remove();
                          container.find(".state-industry").hide();
                          container.find(".industry-ideas").fadeIn(500);

                        var topicTitle = container.attr("rel");
                        var topic = container.find('.state-iblock-content.state-industry h4').html();
                          $("#ajax_fitler_search_form_container").empty();
                          $("#ajax_fitler_search_form_container").append("<h2 class='sub-header'>Here are a few iBlock Pathway options for:<br /><strong>" + topic + " in " + topicTitle + "</strong<</h2>");
                     });
                }
            }

        },
        error: function(response){
          stateBlockSearchResults.empty();
          console.log("no results found");
            var html  = "<p class='column no-result'>We're sorry, but <strong>no pathways were found matching that term.</strong> Try a different state or search keyword.</p>";
            $("div#ajax_fitler_search_results").append(html);
        }
      });
    });


    stateBlockSearchFormSelect.change(function(e){
      e.preventDefault();
      e.stopImmediatePropagation();

      console.log("search submitted");

      if(stateBlockSearchForm.find("#select").val().length !== 0) {
        var search = stateBlockSearchForm.find("#select").val();
      }

      var data = {
        action : "my_ajax_filter_search",
        search : search
      }

      $.ajax({
        url : ajax_url,
        data : data,
        success : function(response) {
          stateBlockSearchResults.empty();
          console.log(search + " search results found");
            if(response) {
                stateBlockSearchResults.append("<h2 class='sub-header category-title'>Great choice, here are some<br /><strong><em>" + search + "</em> iBlock Pathway ideas:</strong></h2>");
                for(var i = 0 ;  i < response.length ; i++) {
                     var html = "<div id='" + response[i].id + "' class='category-item' rel='" + search + "'><div class=''>";
                         html += "<h3>" + response[i].title + "</h3>";
                         html += "</div></div>";

                  $("a.contact-us-modal-button").click(function() {
                    $(".contact-us.modal ").addClass("is-active");
                  });

                  $("div#ajax_fitler_search_results").append(html);

                }
            }

        },
        error: function(response){
          stateBlockSearchResults.empty();
          console.log("no results found");
            var html  = "<p class='column no-result'>We're sorry, but <strong>no pathways were found matching that term.</strong> Try a different state or search keyword.</p>";
            $("div#ajax_fitler_search_results").append(html);
        }
      });
    });


    // CLICK FUNCTION FOR 'button.back-button' Element
    // DETAILS CONTAINER '#iblock-pathway-details-container' CLOSE AND EMPTY onClick
    $(document).on( 'click', 'button.back-button', function() {
      // TARGET article#iblock-pathway-details-container ELEMENT
        // REMOVE Class 'is-active' to ENABLE VIEWABLE ELEMENT
          //EMPTY CONTENTS OF TARGETED ID's
      $('.iblock-post-container #iblock-pathway-details-container').removeClass('is-active');
        $('#iblock-pathway-details-container #dataTitle').empty();
          $('#iblock-pathway-details-container #dataContent').empty();
    });

    // CLICK FUNCTION FOR 'button.learn' Element
    // SET '#iblock-pathway-details-container' ELEMENT with addClass 'is-active' TO ENABLE VIEWABLE
    // SCROLL TO ELEMENT and SEND AJAX request
    // GATHER DATA WITH REST API TO SEND BACK INFO FROM URL BASED ON post ID
    // INITIAL LOADER FOR REQUEST LOAD - APPEND DATA TO ELEMENTS BASED ON REQUEST data
    $(document).on( 'click', 'button.learn', function() {
      // TARGET article#iblock-pathway-details-container ELEMENT
        // ADD Class 'is-active' to ENABLE VIEWABLE ELEMENT
          //EMPTY CONTENTS OF TARGETED ID's
      $('.iblock-post-container #iblock-pathway-details-container').addClass('is-active');
        $('#iblock-pathway-details-container #dataTitle').empty();
          $('#iblock-pathway-details-container #dataContent').empty();
      // Body Element Scroll TO ARTICLE.iblock-pathway-details-container
      $('html,body').animate({
        scrollTop: $('#iblock-pathway-details-container').offset().top - 100
      }, 480);
      // AJAX REQUEST FROM WP-JSON ELEMENT; URL BASED ON POST ID
      // ADD PRELOADER IMAGE FOR LOAD TIME
      var post_id = $(this).attr('id');
      var request = $.ajax({
        url : '/wp-json/wp/v2/stateiblocks/'+post_id,
        method: "GET",
        dataType: "json",
        beforeSend: function(){
          // Show image container
          $("#loader").show();
        },
      });
      // APPEND DATA FROM JSON DATA REQUEST
        // SET IBLOCK FORM TITLE
          // SET HIDDEN INPUT FIELD TO SELECTED IBLOCK PATHWAY TITLE
      request.done(function( data ) {
        // Hide image container
        $("#loader").hide();
          console.log(data);
        $('#iblock-pathway-details-container #dataTitle').html(data.title.rendered);
          $('#iblock-pathway-details-container #dataContent').html(data.content.rendered);
            $('span#iblock-pricing-form-title-selected').html(data.title.rendered);
              $('input#iblock-pathways-selected-title').val(data.title.rendered);
      });

    request.fail(function( jqXHR, textStatus ) {
        console.log('fail')
    });
    return false;
});




});
