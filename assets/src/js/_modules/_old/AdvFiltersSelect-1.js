import $ from 'jquery';
import AdvanceFiltersParentHelper from './AdvanceFiltersParentHelper';

class AdvFiltersSelect extends AdvanceFiltersParentHelper {
  constructor() {
    super();
    this.init();

    // COLLECTING BASE SELECTS
    this.selectGender = $('#gender-select-adv');
    this.selectAvail = $('#avail-select-adv');
    this.selectClassYear = $('#class-year-select-adv');
    this.selectLocation = $('#location-select-adv');
    this.selectVerify = $('#verify-select-adv');
    // US FOOTBALL SELECT
    this.selectUsFootballPosition = $('#position-US-FOOTBALL');

    // SETTING EVENTS
    this.setEvents();
  }

  init = () => {
    console.log('ASM Adv Filters Select Init ...');
  };

  setEvents = () => {
    // console.log(this.selectSport);
    // BASE FILTER EVENTS
    this.selectGender.on('change', this.changeHandler.bind(this));
    this.selectAvail.on('change', this.changeHandler.bind(this));
    this.selectClassYear.on('change', this.changeHandler.bind(this));
    this.selectLocation.on('change', this.changeHandler.bind(this));
    this.selectVerify.on('change', this.changeHandler.bind(this));
    // US FOOTBALL EVENT
    this.selectUsFootballPosition.on('change', this.changeHandler.bind(this));
  };

  changeHandler(e) {
    let filterName;
    let selectId = e.target.id;
    // console.log(e.target.id);

    // CALLING GET SPORTS
    if (selectId == 'gender-select-adv') {
      filterName = 'gender';
      this.getSports(filterName);
    }
    if (selectId == 'avail-select-adv') {
      filterName = 'avail';
      this.getSports(filterName);
    }
    if (selectId == 'class-year-select-adv') {
      filterName = 'classYr';
      this.getSports(filterName);
    }
    if (selectId == 'location-select-adv') {
      filterName = 'location';
      this.getSports(filterName);
    }
    if (selectId == 'verify-select-adv') {
      filterName = 'verify';
      this.getSports(filterName);
    }
    // US FOOTBALL
    if (selectId == 'position-US-FOOTBALL') {
      // filterName = 'verify';
      this.getSports();
    }
  }
}

export default AdvFiltersSelect;
