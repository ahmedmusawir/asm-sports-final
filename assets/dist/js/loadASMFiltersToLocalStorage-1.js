jQuery(document).ready(function ($) {
  var ajaxFunction1 = 'athlete_dynamic_location_ajax_function';
  var ajaxFunction2 = 'athlete_dynamic_sports_ajax_function';
  // var ajaxFunction3 = 'univ_men_sports_ajax_function';
  // var ajaxFunction4 = 'univ_women_sports_ajax_function';
  var ajaxUrl = asmGlobals.ajaxUrl;

  /**
   LOCATION AJAX CALL
  */

  $.ajax({
    url: ajaxUrl,
    type: 'post',
    data: {
      action: ajaxFunction1,
    },
  })
    .done(function (res) {
      // $('#location-select').append(res);
      var locationArray = res;
      // console.log(locationArray);
      localStorage.setItem('localLocations', JSON.stringify(locationArray));
    })
    .fail(function () {
      console.log('Ajax Failed! In ' + ajaxFunction1);
    })
    .always(function () {
      // console.log('Ajax Dynamic Loaction Filter Complete');
    });

  /**
  SPORTS AJAX CALL
  */

  $.ajax({
    url: ajaxUrl,
    type: 'post',
    data: {
      action: ajaxFunction2,
    },
  })
    .done(function (res) {
      // $('#location-select').append(res);
      var sportsArray = res;
      // console.log(sportsArray);
      localStorage.setItem('localSports', JSON.stringify(sportsArray));
    })
    .fail(function () {
      console.log('Ajax Failed! In ' + ajaxFunction2);
    })
    .always(function () {
      // console.log('Ajax Dynamic Loaction Filter Complete');
    });

  /**
  UNIVERSITY MEN'S SPORTS AJAX CALL
  */

  // $.ajax({
  //   url: ajaxUrl,
  //   type: 'post',
  //   data: {
  //     action: ajaxFunction3,
  //   },
  // })
  //   .done(function (res) {
  //     // $('#location-select').append(res);
  //     var mensSportsArray = res;
  //     console.log(mensSportsArray);
  //     // localStorage.setItem('mensSports', JSON.stringify(mensSportsArray));
  //   })
  //   .fail(function () {
  //     console.log('Ajax Failed! In ' + ajaxFunction3);
  //   })
  //   .always(function () {
  //     console.log('WHY IS THIS FAILING');
  //   });

  /**
  UNIVERSITY WOMEN'S SPORTS AJAX CALL
  */

  // $.ajax({
  //   url: ajaxUrl,
  //   type: 'post',
  //   data: {
  //     action: ajaxFunction4,
  //   },
  // })
  //   .done(function (res) {
  //     // $('#location-select').append(res);
  //     var sportsArray = res;
  //     // console.log(sportsArray);
  //     localStorage.setItem('localSports', JSON.stringify(sportsArray));
  //   })
  //   .fail(function () {
  //     console.log('Ajax Failed! In ' + ajaxFunction2);
  //   })
  //   .always(function () {
  //     // console.log('Ajax Dynamic Loaction Filter Complete');
  //   });
});
