import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteClassYearFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectClassYr = $('#class-year-select');
    this.setEvents();
  }

  init = () => {
    // console.log('ASM ClassYr Filter Init');
  };

  setEvents = () => {
    this.selectClassYr.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const classYr = $(this).val();
    const theItem = $('.item-entry-asm');

    if (classYr == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${gender}.${sport}.${avail}.${classYr}.${location}.${verify}`
        ).removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${sport}.${avail}.${location}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${sport}.${avail}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${sport}.${location}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${sport}.${gender}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${avail}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${location}.${avail}`).removeClass('d-none');
      });
    } else if (avail != 'all' && verify != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${avail}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${sport}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${location}`).removeClass('d-none');
      });
    } else if (gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${location}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteClassYearFiltersSelect;
