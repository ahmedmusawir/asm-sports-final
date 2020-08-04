import $ from 'jquery';
import UnivFilterParent from './UnivFiltersParent';

class UnivWomensSportsFiltersSelect extends UnivFilterParent {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.selectWomenSports = $('#women-select');
    this.setEvents();
  }

  init = () => {
    // console.log('Univ Women Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectDivision);
    this.selectWomenSports.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const division = $('#division-select').val();
    const menSport = $('#men-select').val();

    const womenSport = $(this).val();
    const theItem = $('.univ-post-item');

    if (womenSport == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (division != 'all' && menSport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${womenSport}.${menSport}.${division}`).removeClass('d-none');
      });
    } else if (division != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${womenSport}.${division}`).removeClass('d-none');
      });
    } else if (menSport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${womenSport}.${menSport}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${womenSport}`).removeClass('d-none');
      });
    }
  }
}

export default UnivWomensSportsFiltersSelect;
