import $ from 'jquery';

class AthleteLoadMore {
  constructor() {
    this.init();
    // COLLECTING DOCUMENT
    // this.button = $('#ath-load-more-btn:not(.loading)');
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
    // console.log('clicked up from Sample Module ...');
    const loadMoreBtn = $(this);
    let page = loadMoreBtn.data('page');
    let newPage = page + 1;
    const ajaxUrl = loadMoreBtn.data('url');
    // console.log(page);

    // LOAD MORE
    loadMoreBtn.addClass('loading');

    const ajaxFunction = 'athlete_load_more';
    // console.log(ajaxFunction);

    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        page: page,
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        // console.log(res);
        // UPDATING THE page NUMBER TO THE NEW VALUE AFTER ADDING +1 EVERYTIME
        loadMoreBtn.data('page', newPage);
        $('#athlete-index-container').append(res);
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
