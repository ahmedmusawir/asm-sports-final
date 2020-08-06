jQuery(document).ready(function ($) {
  // console.log('Location Select Clicked');
  var selectBtn = $('#men-select');
  var ajaxUrl = selectBtn.data('url');
  var ajaxFunction = 'univ_men_sports_ajax_function';

  var mensSportsArray = JSON.parse(localStorage.getItem('mensSports'));

  if (!mensSportsArray) {
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        $('#men-select').append(res);
        var mensSportsArray = res;
        // console.log(locationArray);

        localStorage.setItem('mensSports', JSON.stringify(mensSportsArray));
      })
      .fail(function () {
        console.log('Ajax Failed! In ' + ajaxFunction);
      })
      .always(function () {
        // console.log('Ajax Dynamic Loaction Filter Complete');
      });
  }

  selectBtn.append(mensSportsArray);
});
