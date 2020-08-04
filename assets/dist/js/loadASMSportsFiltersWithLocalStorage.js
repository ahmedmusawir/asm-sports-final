jQuery(document).ready(function ($) {
  var selectBtn = $('#sports-select');
  var ajaxUrl = selectBtn.data('url');
  var ajaxFunction = 'athlete_dynamic_sports_ajax_function';

  var localSports = JSON.parse(localStorage.getItem('localSports'));

  if (!localSports) {
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        $('#sports-select').append(res);
        var sportsArray = res;
        // console.log(sportsArray);

        localStorage.setItem('localSports', JSON.stringify(sportsArray));
      })
      .fail(function () {
        console.log('Ajax Failed! In ' + ajaxFunction);
      })
      .always(function () {
        // console.log('Ajax Dynamic Loaction Filter Complete');
      });
  }

  selectBtn.append(localSports);
});
