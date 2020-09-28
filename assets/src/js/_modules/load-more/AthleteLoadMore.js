import $ from 'jquery';

class AthleteLoadMore {
  constructor() {
    this.init();
    // COLLECTING DOCUMENT
    this.doc = $(document);

    this.setEvents();
  }

  init = () => {
    // console.log('Athlete Load More ...');
  };

  setEvents = () => {
    this.doc.on('click', '#ath-load-more-btn:not(.loading)', this.clickHandler);
  };

  clickHandler() {
    const loadMoreBtn = $(this);
    let page = loadMoreBtn.data('page');
    let newPage = page + 1;
    const ajaxUrl = loadMoreBtn.data('url');

    // LOAD MORE SPINNER
    loadMoreBtn.addClass('loading');

    const ajaxFunction = 'athlete_load_more';

    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        page: page,
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        // UPDATING THE page NUMBER TO THE NEW VALUE AFTER ADDING +1 EVERYTIME
        loadMoreBtn.data('page', newPage);
        $('#athlete-index-container').append(res);
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

export default AthleteLoadMore;
