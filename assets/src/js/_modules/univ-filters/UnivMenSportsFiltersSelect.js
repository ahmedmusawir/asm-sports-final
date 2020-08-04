import $ from 'jquery';
import UnivFilterParent from './UnivFiltersParent';

class UnivMensSportsFiltersSelect extends UnivFilterParent {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.selectMenSports = $('#men-select');
    this.setEvents();
  }

  init = () => {
    // console.log('Univ Men Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectDivision);
    this.selectMenSports.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const division = $('#division-select').val();
    const womenSport = $('#women-select').val();

    const menSport = $(this).val();
    const theItem = $('.univ-post-item');

    if (menSport == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (division != 'all' && womenSport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${menSport}.${division}.${womenSport}`).removeClass('d-none');
      });
    } else if (division != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${menSport}.${division}`).removeClass('d-none');
      });
    } else if (womenSport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${menSport}.${womenSport}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${menSport}`).removeClass('d-none');
      });
    }
  }
}

export default UnivMensSportsFiltersSelect;
