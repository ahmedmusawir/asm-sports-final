import $ from 'jquery';

class AdvanceFiltersParent {
  constructor() {
    this.init();

    // COLLECTING RESET BUTTON
    this.buttonReset = $('#ath-adv-filter-reset');
    this.buttonBack = $('.back-to-filters');

    this.showNoDataFound();
    this.setEvents();
  }

  init = () => {
    // console.log('ASM Parent AdvanceFilter');
  };

  showNoDataFound() {
    const noDataItem = $('.no-data-found');
    setTimeout(function () {
      noDataItem.removeClass('d-none');
    }, 4000);
  }

  setEvents() {
    if (this.buttonReset) {
      this.buttonReset.on('click', this.resetFilters.bind(this));
    }
    if (this.buttonBack) {
      this.buttonBack.on('click', this.removeAdvFilters.bind(this));
    }
  }

  removeAdvFilters() {
    console.log('Remove Adv Filters');
    // e.stopImmediatePropagation();

    // GOING BACK TO BASE FILTERS MENU
    const athAdvfilter = $('#top-advanced-filter');
    athAdvfilter.addClass('d-none');
    // RESETTING TO ALL SPORTS
    this.resetFilters();
  }

  /**
  A = ALWAYS CURRENT CLICKED SELECT FILTER, MEANS, IF GENDER IS CLICKED IT WILL BE GENDER
  sport = ALWAYS STATIC IN THIS CASE. COMMON IN EVERY FILTER CUZ SPORTS IS THE BASE FILTER
  */

  applyAdvFilters = (theItem, sport, A, B, C, D) => {
    console.log('Adv filter theItem: ' + theItem);
    console.log(sport);
    console.log(A);
    console.log(B);
    console.log(C);
    console.log(D);

    if (A == 'all') {
      theItem.addClass('d-none');
      // this.resetFilters();

      setTimeout(function () {
        $(`.${sport}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}`).removeClass('d-none');
        // $(`.${A}`).removeClass('d-none');
      });
    }
  };

  resetFilters() {
    // console.log('reset - coming from Adv Filter Parent ... ');
    const theItem = $('.item-entry-asm');

    const sport = $('#sports-select-adv');
    sport.val('all');

    const gender = $('#gender-select-adv');
    gender.val('all');

    const avail = $('#avail-select-adv');
    avail.val('all');

    const classYr = $('#class-year-select-adv');
    classYr.val('all');

    const location = $('#location-select-adv');
    location.val('all');

    const verify = $('#verify-select-adv');
    verify.val('all');

    theItem.addClass('d-none');
    setTimeout(function () {
      theItem.removeClass('d-none');
    });
  }
}

export default AdvanceFiltersParent;
