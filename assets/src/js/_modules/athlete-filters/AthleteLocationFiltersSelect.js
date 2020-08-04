import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteLocationFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectLocation = $('#location-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Location Filter Init');
  };

  setEvents = () => {
    this.selectLocation.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const verify = $('#verify-select').val();

    const location = $(this).val();
    const theItem = $('.item-entry-asm');

    if (location == 'all') {
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
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${location}.${gender}.${sport}.${avail}.${classYr}.${verify}`
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
        $(`.${location}.${classYr}.${gender}.${sport}.${avail}`).removeClass(
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
        $(`.${location}.${gender}.${sport}.${avail}.${verify}`).removeClass(
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
        $(`.${location}.${classYr}.${gender}.${sport}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${sport}.${gender}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (avail != 'all' && verify != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${avail}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${sport}`).removeClass('d-none');
      });
    } else if (sport != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${gender}`).removeClass('d-none');
      });
    } else if (gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${verify}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteLocationFiltersSelect;
