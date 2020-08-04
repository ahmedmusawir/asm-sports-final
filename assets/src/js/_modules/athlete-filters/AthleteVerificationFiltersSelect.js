import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteLocationFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectVerify = $('#verify-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Verify Filter Init');
  };

  setEvents = () => {
    this.selectVerify.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();

    const verify = $(this).val();
    const theItem = $('.item-entry-asm');

    if (verify == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${verify}.${location}.${gender}.${sport}.${avail}.${classYr}`
        ).removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}.${gender}.${sport}.${avail}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${gender}.${sport}.${avail}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${classYr}.${gender}.${sport}`).removeClass(
          'd-none'
        );
      });
    } else if (
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${classYr}.${gender}.${avail}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${gender}.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}.${sport}.${gender}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${avail}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}.${gender}`).removeClass('d-none');
      });
    } else if (gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteLocationFiltersSelect;
