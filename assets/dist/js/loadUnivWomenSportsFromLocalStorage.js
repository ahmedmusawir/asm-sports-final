jQuery(document).ready(function ($) {
  // console.log('Location Select Clicked');
  var selectBtn = $('#women-select');
  var ajaxUrl = selectBtn.data('url');
  var ajaxFunction = 'univ_women_sports_ajax_function';

  var womensSportsArray = JSON.parse(localStorage.getItem('womensSports'));

  if (!womensSportsArray) {
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        $('#women-select').append(res);
        var womensSportsArray = res;
        // console.log(locationArray);

        localStorage.setItem('womensSports', JSON.stringify(womensSportsArray));
      })
      .fail(function () {
        console.log('Ajax Failed! In ' + ajaxFunction);
      })
      .always(function () {
        // console.log('Ajax Dynamic Loaction Filter Complete');
      });
  }

  selectBtn.append(womensSportsArray);
});
