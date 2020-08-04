import $ from 'jquery';

class AthleteFiltersParent {
  constructor() {
    // this.init();
    // this.loadLocationList();

    // COLLECTING RESET BUTTON
    this.buttonReset = $('#ath-filter-reset');
    this.buttonLocationSelect = $('#location-select');

    this.showNoDataFound();
    this.setEvents();
  }

  init = () => {
    // console.log('ASM Parent Filter Reset');
  };

  setEvents() {
    this.buttonReset.on('click', this.resetFilters);
    if (this.buttonLocationSelect) {
      this.buttonLocationSelect.one('click', this.loadLocationList);
    }
  }

  showNoDataFound() {
    const noDataItem = $('.no-data-found');
    setTimeout(function () {
      noDataItem.removeClass('d-none');
    }, 2000);
  }

  loadLocationList(e) {
    e.stopImmediatePropagation();
    // e.stopPropagation();
    // e.preventDefault();

    console.log('Location Select Clicked');
    const ajaxUrl = $(this).data('url');
    // console.log(page);

    const ajaxFunction = 'athlete_dynamic_location_ajax_function';
    // console.log(ajaxFunction);

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
        console.log('Ajax Failed!');
      })
      .always(function () {
        console.log('Ajax Dynamic Loaction Filter Complete');
      });
  }

  resetFilters() {
    const theItem = $('.item-entry-asm');

    const sport = $('#sports-select');
    sport.val('all');

    const gender = $('#gender-select');
    gender.val('all');

    const avail = $('#avail-select');
    avail.val('all');

    const classYr = $('#class-year-select');
    classYr.val('all');

    const location = $('#location-select');
    location.val('all');

    const verify = $('#verify-select');
    verify.val('all');

    theItem.addClass('d-none');
    setTimeout(function () {
      theItem.removeClass('d-none');
    });
  }
}

export default AthleteFiltersParent;
