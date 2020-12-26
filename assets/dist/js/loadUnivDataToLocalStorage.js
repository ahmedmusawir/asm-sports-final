jQuery(function ($) {
  // SITE ROOT URL FROM WP LOCALIZE SCRIPT
  const siteRoot = asmData.root_url;
  // SETTING JSON FILE LOCATION URL
  const fetchUrl = siteRoot + '/wp-content/uploads/_DATA/university_data.json';

  // TRYING TO PULL UNIV DATA FROM LOCAL STORAGE
  const univObject = localStorage.getItem('univData');

  // IF LOCAL STORAGE EMTPY, READING FROM JSON FILE & WRITING TO LOCAL STORAGE
  if (!univObject) {
    $.ajax({
      dataType: 'json',
      url: fetchUrl,
      type: 'get',
    })
      .done(function (res) {
        const univData = res;
        console.log(univData);

        localStorage.setItem('univData', JSON.stringify(univData));
      })
      .fail(function () {
        console.log('Ajax Failed!');
      })
      .always(function () {
        // console.log('Ajax Dynamic Loaction Filter Complete');
      });
  } else {
    // NO NEED TO LOAD DATA
    console.log('UnivData already present!');
  }
});
