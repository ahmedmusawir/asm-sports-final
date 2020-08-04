/**
A MODAL FULL OF SPORTS CHOICES THAT HELPS TRANSITION FROM STANDARD FILTER TO 
THE ADVANCE FILTERS
*/
import $ from 'jquery';
import Bootstrap from 'bootstrap';
import AdvanceFiltersParentHelper from '../athlete-adv-filters/AdvanceFiltersParentHelper';

class FilterSwitchModal extends AdvanceFiltersParentHelper {
  constructor() {
    super();
    // COLLECTING BUTTON
    this.modalBtn = $('#athAdvanceFilter');
    this.radioBtnBox = $('#modalSportsChoiceBox');

    // COLLECTING ADVANCE FILTER BOX
    this.athAdvfilter = $('#top-advanced-filter');
    //COLLECTING MODAL
    this.filterSwitchModal = $('#filterSwitchModal');

    // LOADING init METHODS TO CREATE THE SPORTS CHOICE RADIO BTNS
    this.init();

    // RADIO BTN - CUZ THESE ARE CREATED AFTER THE this.ini() HAS RUN
    this.sportsRadioItem = $('.sports-radio-item').find(':radio');
    this.setEvents();
  }

  init = () => {
    console.log('Filter Switch Modal ...');
    // COLLECTING SPORTS ITEMS FROM THE LOCAL STORAGE
    const rawSportsData = localStorage.getItem('localSports');
    const sportStrArr1 = rawSportsData.split('\\');

    // console.log(rawSportsData);

    sportStrArr1.map((item) => {
      // Remove all entries with 'option' in them
      if (!item.includes('option')) {
        const newItem = item.substr(1); // Remove first char for the string
        // GENERATING HTML - RADIO BUTTONS
        const newRadioBtn = `
        <label class="sports-radio-item">
          <input type="radio" name="sportsRadioAdvFilter" value="${newItem}">
          ${newItem}
        </label><br>`;
        this.radioBtnBox.append(newRadioBtn);
      }
    });
  };

  setEvents = () => {
    this.modalBtn.on('click', this.clickModalBtnHandler);
    this.sportsRadioItem.on('click', this.sportsRadioItemHandler.bind(this));
    // $(':radio').on('change', this.sportsRadioItemHandler);
  };

  clickModalBtnHandler() {
    $('#filterSwitchModal').modal({
      backdrop: 'static',
      keyboard: false,
    });
  }

  sportsRadioItemHandler(e) {
    e.stopImmediatePropagation();
    // console.log(e.target.value);
    const sportChoice = e.target.value;
    const advFilterTitle = this.athAdvfilter.find('.sport-title');

    // ADDING SPORT NAME TO TITLE
    advFilterTitle.text(sportChoice);

    // SHOWING THE ADVANCED FILTER BOX
    this.athAdvfilter.removeClass('d-none');

    // HIDING THE MODAL
    this.filterSwitchModal.modal('hide');

    // LOAD SPORTS BASED FILTERS
    this.loadSportsBasedFilters(sportChoice);

    // LOAD DATA ACCORDING TO SPORT CHOSEN
    const theItem = $('.item-entry-asm');
    theItem.addClass('d-none');

    setTimeout(function () {
      $(`.${sportChoice}`).removeClass('d-none');
    });
  }

  loadSportsBasedFilters(sport) {
    $('.menu-box-sports').addClass('d-none');
    super.resetFilters();

    // console.log(sport);

    switch (sport) {
      case 'US-FOOTBALL':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'BASEBALL':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'BASKETBALL':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'CHEERLEADING':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'GOLF':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'FIELD-HOCKEY':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'GYMNASTICS':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'ICE-HOCKEY':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'LACROSSE':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'ROWING':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'RUGBY':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'SOCCER':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'SOFTBALL':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'SWIMMING-AND-DIVING':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'VOLLEYBALL':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'TRACK-AND-FIELD':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      case 'WATER-POLO':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;

      case 'TENNIS':
        // console.log(`Sport Filters for ${sport}`);
        $(`.menu-box-${sport}`).removeClass('d-none');
        // code block
        break;
      default:
      // code block
    }
  }
}

export default FilterSwitchModal;
