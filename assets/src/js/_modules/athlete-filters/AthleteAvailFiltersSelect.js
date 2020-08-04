import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteAvailFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectAvail = $('#avail-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Avail Filter Init');
  };

  setEvents = () => {
    this.selectAvail.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const avail = $(this).val();
    const theItem = $('.item-entry-asm');

    if (avail == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      classYr != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${avail}.${gender}.${sport}.${classYr}.${location}.${verify}`
        ).removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}.${classYr}.${location}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}.${classYr}.${verify}`).removeClass(
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
        $(`.${avail}.${gender}.${sport}.${location}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${classYr}.${location}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${classYr}.${verify}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${location}`).removeClass('d-none');
      });
    } else if (gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}.${location}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}.${verify}`).removeClass('d-none');
      });
    } else if (location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${location}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteAvailFiltersSelect;
