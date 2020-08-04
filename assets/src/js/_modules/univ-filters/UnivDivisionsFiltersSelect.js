import $ from 'jquery';
import UniversityFiltersParent from './UnivFiltersParent';

class UnivDivisionFiltersSelect extends UniversityFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectDivision = $('#division-select');
    this.setEvents();
  }

  init = () => {
    console.log('Univ Division Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectDivision);
    this.selectDivision.on('change', this.changeHandler);
  };

  changeHandler() {
    console.log($(this).val());
    const menSport = $('#men-select').val();
    const womenSport = $('#women-select').val();

    const division = $(this).val();
    const theItem = $('.univ-post-item');

    if (division == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (menSport != 'all' && womenSport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${division}.${menSport}.${womenSport}`).removeClass('d-none');
      });
    } else if (menSport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${division}.${menSport}`).removeClass('d-none');
      });
    } else if (womenSport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${division}.${womenSport}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${division}`).removeClass('d-none');
      });
    }
  }
}

export default UnivDivisionFiltersSelect;
