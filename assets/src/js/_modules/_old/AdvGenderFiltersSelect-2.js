import $ from 'jquery';
import AdvanceFiltersParentHelper from './AdvanceFiltersParentHelper';

class AdvGenderFiltersSelect extends AdvanceFiltersParentHelper {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.selectGender = $('#gender-select-adv');
    this.selectAvail = $('#avail-select-adv');
    // SETTING EVENTS
    this.setEvents();
  }

  init = () => {
    console.log('ASM Gender Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectSport);
    this.selectGender.on('change', this.changeHandler.bind(this));
    this.selectAvail.on('change', this.changeHandler.bind(this));
  };

  changeHandler() {
    // CALLING GET SPORTS
    this.getSports();
  }
}

export default AdvGenderFiltersSelect;
