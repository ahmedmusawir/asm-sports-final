import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteGenderFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectGender = $('#gender-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Gender Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectSport);
    this.selectGender.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const gender = $(this).val();
    const theItem = $('.item-entry-asm');

    if (gender == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
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
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${classYr}.${location}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${classYr}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      classYr != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${sport}.${location}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${location}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${location}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${verify}`).removeClass('d-none');
      });
    } else if (location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${location}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteGenderFiltersSelect;
