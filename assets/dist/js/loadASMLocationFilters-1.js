jQuery(document).ready(function ($) {
  // console.log('Location Select Clicked');
  var selectBtn = $('#location-select');
  var ajaxUrl = selectBtn.data('url');
  var ajaxFunction = 'athlete_dynamic_location_ajax_function';

  $.ajax({
    url: ajaxUrl,
    type: 'post',
    data: {
      action: ajaxFunction,
    },
  })
    .done(function (res) {
      $('#location-select').append(res);
    })
    .fail(function () {
      console.log('Ajax Failed! In ' + ajaxFunction);
    })
    .always(function () {
      console.log('Ajax Dynamic Loaction Filter Complete');
    });
});
