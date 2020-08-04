import $ from 'jquery';

class UnivLoadMore {
  constructor() {
    this.init();
    // COLLECTING DOCUMENT
    this.doc = $(document);

    this.setEvents();
  }

  init = () => {
    // console.log('Univ Load More ...');
  };

  setEvents = () => {
    // this.button.on('click', this.clickHandler);
    this.doc.on(
      'click',
      '#univ-load-more-btn:not(.loading)',
      this.clickHandler
    );
  };

  clickHandler() {
    // console.log('clicked up from Sample Module ...');
    const loadMoreBtn = $(this);
    let page = loadMoreBtn.data('page');
    let newPage = page + 1;
    const ajaxUrl = loadMoreBtn.data('url');
    // console.log(page);

    // LOAD MORE SPINNER
    loadMoreBtn.addClass('loading');

    const templateType = loadMoreBtn.data('univ');

    let locationState = $('.location-state')[0].innerText;
    // let locationState = $('#location-state');
    // console.log(locationState);

    let ajaxFunction;

    if (templateType == 'index') {
      ajaxFunction = 'univ_load_more';
    }

    if (templateType == 'location') {
      ajaxFunction = 'univ_location_load_more';
    }

    // console.log(locationState);
    // console.log(ajaxFunction);

    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        page: page,
        locationState: locationState,
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        // console.log(res);
        // UPDATING THE page NUMBER TO THE NEW VALUE AFTER ADDING +1 EVERYTIME
        loadMoreBtn.data('page', newPage);
        $('.univ-post-container').append(res);
        loadMoreBtn.removeClass('loading');
      })
      .fail(function () {
        console.log('Ajax Failed!');
      })
      .always(function () {
        // console.log('Ajax Complete');
      });
  }
}

export default UnivLoadMore;
