jQuery(document).ready(function ($) {
  // console.log('Location Select Clicked');
  var selectBtn = $('#location-select');
  var selectAdvBtn = $('#location-select-adv');
  var ajaxUrl = selectBtn.data('url');
  var ajaxFunction = 'athlete_dynamic_location_ajax_function';

  var localLocations = JSON.parse(localStorage.getItem('localLocations'));

  if (!localLocations) {
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        $('#location-select').append(res);
        var locationArray = res;
        // console.log(locationArray);

        localStorage.setItem('localLocations', JSON.stringify(locationArray));
      })
      .fail(function () {
        console.log('Ajax Failed! In ' + ajaxFunction);
      })
      .always(function () {
        // console.log('Ajax Dynamic Loaction Filter Complete');
      });
  }

  selectBtn.append(localLocations);
  selectAdvBtn.append(localLocations);
});
