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
    this.resetBaseFilters();
  }

  /**
  A = ALWAYS CURRENT CLICKED SELECT FILTER, MEANS, IF GENDER IS CLICKED IT WILL BE GENDER
  sport = ALWAYS STATIC IN THIS CASE. COMMON IN EVERY FILTER CUZ SPORTS IS THE BASE FILTER
  theItem = THE ATHLETE MEMBER BLOCK THAT COMES AND GOES WITH .d-none CLASS
  */

  applyAdvFilters = (theItem, sport, A, B, C, D, E, F, G, H, I) => {
    // applyAdvFilters = (...arguments) => { //DOESN'T WORK
    // console.log('Adv filter theItem: ' + theItem);
    // console.log(sport);
    // console.log(A);
    // console.log(B);
    // console.log(C);
    // console.log(D);
    // console.log(E);
    // console.log(F);
    // console.log(G);
    // console.log(H);
    // console.log(I);

    if (A == undefined) {
      A = 'all';
    }
    if (B == undefined) {
      B = 'all';
    }
    if (C == undefined) {
      C = 'all';
    }
    if (D == undefined) {
      D = 'all';
    }
    if (E == undefined) {
      E = 'all';
    }
    if (F == undefined) {
      F = 'all';
    }
    if (G == undefined) {
      G = 'all';
    }
    if (H == undefined) {
      H = 'all';
    }
    if (I == undefined) {
      I = 'all';
    }

    console.log(sport);
    console.log(A);
    console.log(B);
    console.log(C);
    console.log(D);
    console.log(E);
    console.log(F);
    console.log(G);
    console.log(H);
    console.log(I);

    // console.log(...arguments); //SHOWS NOTHING

    if ( // SET OF 9 STARTS HERE ABCDEFGHI
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
      // ----------------------------------------------------------------------------------------
    } else if (
      // SET OF 8 STARTS HERE ABCDEFGH
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${G}.${H}`).removeClass(
          'd-none'
        );
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${G}.${I}`).removeClass(
          'd-none'
        );
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${G}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${G}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}.${G}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass(
          'd-none'
        );
      });
      // ----------------------------------------------------------------------------------------
    } else if (
      // SET OF 7 STARTS HERE ABCDEFGH
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
      // ----------------------------------------------------------------------------------------
    } else if (
      // SET OF 6 STARTS HERE ABCDEF
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
      // ----------------------------------------------------------------------------------------
    } else if (
      // SET OF 5 STARTS HERE ABCDE
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${E}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${F}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${F}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      C != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      D != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      B != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      D != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      C != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      A != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      D != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      C != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      B != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      E != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      D != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      C != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (
      D != 'all' &&
      E != 'all' &&
      F != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      D != 'all' &&
      E != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      D != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (
      E != 'all' &&
      F != 'all' &&
      G != 'all' &&
      H != 'all' &&
      I != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all' && D != 'all') {
      // ----------------------------------------------------------------------------------------
      // SET OF 4 STARTS HERE ABCD
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${D}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${E}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && D != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${E}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && D != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${E}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && D != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${E}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && D != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && D != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && D != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${F}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${F}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && D != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && D != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${F}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && D != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}.${G}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${F}.${G}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && D != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && D != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && D != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${G}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && F != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && F != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (D != 'all' && F != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (E != 'all' && F != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && D != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${G}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && D != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${G}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && G != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && D != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${G}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${H}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && F != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && F != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && G != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${F}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && F != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && F != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && G != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && F != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && G != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (E != 'all' && F != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (E != 'all' && F != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (E != 'all' && G != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (F != 'all' && G != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}.${G}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && C != 'all') {
      // ----------------------------------------------------------------------------------------
      // SET OF 3 STARTS HERE ABC
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${C}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${D}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${E}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${D}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${E}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${E}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${D}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${E}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${E}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${E}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${F}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${F}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${F}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${F}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${F}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}.${G}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${G}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${G}`).removeClass('d-none');
      });
    } else if (C != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}.${G}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${G}`).removeClass('d-none');
      });
    } else if (D != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${F}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${G}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${G}.${H}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${H}`).removeClass('d-none');
      });
    } else if (D != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${F}.${H}`).removeClass('d-none');
      });
    } else if (D != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${G}.${H}`).removeClass('d-none');
      });
    } else if (E != 'all' && F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}.${H}`).removeClass('d-none');
      });
    } else if (E != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${G}.${H}`).removeClass('d-none');
      });
    } else if (E != 'all' && F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}.${G}`).removeClass('d-none');
      });
    } else if (F != 'all' && G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && B != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${B}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && C != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${C}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && D != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${D}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${G}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${H}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && C != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${C}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && D != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${D}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${G}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${H}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${G}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${H}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${F}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${G}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${H}.${I}`).removeClass('d-none');
      });
    } else if (E != 'all' && F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}.${I}`).removeClass('d-none');
      });
    } else if (E != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${G}.${I}`).removeClass('d-none');
      });
    } else if (E != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${H}.${I}`).removeClass('d-none');
      });
    } else if (F != 'all' && G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}.${G}.${I}`).removeClass('d-none');
      });
    } else if (F != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}.${H}.${I}`).removeClass('d-none');
      });
    } else if (G != 'all' && H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${G}.${H}.${I}`).removeClass('d-none');
      });
      // ----------------------------------------------------------------------------------------
    } else if (A != 'all' && B != 'all') {
      // SET OF 2 STARTS HERE AB
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
    } else if (A != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${E}`).removeClass('d-none');
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
    } else if (B != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${E}`).removeClass('d-none');
      });
    } else if (C != 'all' && D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${D}`).removeClass('d-none');
      });
    } else if (C != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${E}`).removeClass('d-none');
      });
    } else if (D != 'all' && E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${E}`).removeClass('d-none');
      });
    } else if (A != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${F}`).removeClass('d-none');
      });
    } else if (B != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${F}`).removeClass('d-none');
      });
    } else if (C != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${F}`).removeClass('d-none');
      });
    } else if (D != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${F}`).removeClass('d-none');
      });
    } else if (E != 'all' && F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${F}`).removeClass('d-none');
      });
    } else if (A != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${G}`).removeClass('d-none');
      });
    } else if (B != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${G}`).removeClass('d-none');
      });
    } else if (C != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${G}`).removeClass('d-none');
      });
    } else if (D != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${G}`).removeClass('d-none');
      });
    } else if (E != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${G}`).removeClass('d-none');
      });
    } else if (F != 'all' && G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}.${G}`).removeClass('d-none');
      });
    } else if (A != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${H}`).removeClass('d-none');
      });
    } else if (B != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${H}`).removeClass('d-none');
      });
    } else if (C != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${H}`).removeClass('d-none');
      });
    } else if (D != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${H}`).removeClass('d-none');
      });
    } else if (E != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${H}`).removeClass('d-none');
      });
    } else if (F != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}.${H}`).removeClass('d-none');
      });
    } else if (G != 'all' && H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${G}.${H}`).removeClass('d-none');
      });
    } else if (A != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}.${I}`).removeClass('d-none');
      });
    } else if (B != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}.${I}`).removeClass('d-none');
      });
    } else if (C != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}.${I}`).removeClass('d-none');
      });
    } else if (D != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}.${I}`).removeClass('d-none');
      });
    } else if (E != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}.${I}`).removeClass('d-none');
      });
    } else if (F != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}.${I}`).removeClass('d-none');
      });
    } else if (G != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${G}.${I}`).removeClass('d-none');
      });
    } else if (H != 'all' && I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${H}.${I}`).removeClass('d-none');
      });
    } else if (A != 'all') {
      console.log(`THIS IS FROM A ...  .${sport}.${A}`);
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${A}`).removeClass('d-none');
      });
    } else if (B != 'all') {
      console.log('THIS IS FROM B ...');
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${B}`).removeClass('d-none');
      });
    } else if (C != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${C}`).removeClass('d-none');
      });
    } else if (D != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${D}`).removeClass('d-none');
      });
    } else if (E != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${E}`).removeClass('d-none');
      });
    } else if (F != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${F}`).removeClass('d-none');
      });
    } else if (G != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${G}`).removeClass('d-none');
      });
    } else if (H != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${H}`).removeClass('d-none');
      });
    } else if (I != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${I}`).removeClass('d-none');
      });
    } else if (A == 'all' || B == 'all' || C == 'all' || D == 'all' || E == 'all' || F == 'all' || G == 'all' || H == 'all' || I == 'all' ) {
      theItem.addClass('d-none');
      this.resetFilters();
      console.log('ABCDEFGHI --- all')

      setTimeout(function () {
        $(`.${sport}`).removeClass('d-none');
      });
    } else {
      console.log('THIS IS FROM ELSE...');
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}`).removeClass('d-none');
      });
    }
  };

  resetFilters() {
    // console.log('reset - coming from Adv Filter Parent ... ');
    const theItem = $('.item-entry-asm');

    const sport = $('.menu-title.sport-title').text();

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
      $(`.${sport}`).removeClass('d-none');
    });
  }

  resetBaseFilters() {
    // console.log('reset - coming from Adv Filter Parent ... ');
    const theItem = $('.item-entry-asm');

    theItem.addClass('d-none');
    setTimeout(function () {
      theItem.removeClass('d-none');
    });
  }
}

export default AdvanceFiltersParent;
