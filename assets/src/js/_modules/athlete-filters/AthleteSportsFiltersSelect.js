import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteSportsFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectSport = $('#sports-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Sport Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectSport);
    this.selectSport.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const sport = $(this).val();
    const theItem = $('.item-entry-asm');

    if (sport == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${sport}.${gender}.${avail}.${classYr}.${location}.${verify}`
        ).removeClass('d-none');
      });
    } else if (
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${classYr}.${location}`).removeClass(
          'd-none'
        );
      });
    } else if (
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${classYr}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (
      classYr != 'all' &&
      gender != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${gender}.${location}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (gender != 'all' && avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${location}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${location}`).removeClass('d-none');
      });
    } else if (gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${location}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${verify}`).removeClass('d-none');
      });
    } else if (location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${location}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteSportsFiltersSelect;
