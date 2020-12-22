import $ from 'jquery';
import AdvanceFiltersParentHelper from './AdvanceFiltersParentHelper';

class AdvFiltersSelect extends AdvanceFiltersParentHelper {
  constructor() {
    super();
    // this.init();

    // COLLECTING BASE SELECTS
    this.selectGender = $('#gender-select-adv');
    this.selectAvail = $('#avail-select-adv');
    this.selectClassYear = $('#class-year-select-adv');
    this.selectLocation = $('#location-select-adv');
    this.selectVerify = $('#verify-select-adv');

    // SPORTS FILTER SELECTS

    // US FOOTBALL
    this.usFootballPosition = $('#position-US-FOOTBALL');
    // BASEBALL
    this.baseballPrimaryPosition = $('#position-primary-BASEBALL');
    this.baseballSecondaryPosition = $('#position-secondary-BASEBALL');
    // BASKETBALL
    this.positionPrimaryBasketball = $('#position-primary-BASKETBALL');
    this.positionSecondaryBasketball = $('#position-secondary-BASKETBALL');
    this.handBasketball = $('#hand-BASKETBALL');
    // CHEERLEADING
    this.positionCheerleading = $('#position-CHEERLEADING');
    // GOLF
    this.positionGolf = $('#position-GOLF');
    this.wagrGolf = $('#wagr-GOLF');
    this.nationalRankingGolf = $('#national-ranking-GOLF');
    this.swingHandGolf = $('#swing-hand-GOLF');
    // FIELD-HOCKEY
    this.positionFieldHockey = $('#position-FIELD-HOCKEY');
    // ICE-HOCKEY
    this.positionIceHockey = $('#position-ICE-HOCKEY');
    // GYMNASTICS
    this.disciplineGymnastics = $('#discipline-GYMNASTICS');
    // LACROSSE
    this.positionLacrosse = $('#position-LACROSSE');
    // ROWING
    this.positionRowing = $('#position-ROWING');
    // RUGBY
    this.positionRugby = $('#position-RUGBY');
    // SOCCER
    this.positionSoccer = $('#position-SOCCER');
    // SOFTBALL
    this.positionPrimarySoftball = $('#position-primary-SOFTBALL');
    this.positionSecondarySoftball = $('#position-secondary-SOFTBALL');
    // SWIMMING AND DIVING
    this.mainEventSwimming = $('#main-event-SWIMMING-AND-DIVING');
    this.secondaryEventSwimming = $('#secondary-event-SWIMMING-AND-DIVING');
    // TENNIS
    this.utrTennis = $('#utr-TENNIS');
    this.itfTennis = $('#itf-TENNIS');
    this.handTennis = $('#hand-TENNIS');
    this.nationalRankingTennis = $('#ranking-TENNIS');
    // TRACK & FIELD
    this.positionTrackAndField = $('#position-TRACK-AND-FIELD');
    // VOLLEYBALL
    this.positionVolleyball = $('#position-VOLLEYBALL');
    // WATER POLO
    this.positionWaterPolo = $('#position-WATER-POLO');

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

    // SPORTS EVENTS

    // US FOOTBALL
    this.usFootballPosition.on('change', this.changeHandler.bind(this));
    // BASEBALL
    this.baseballPrimaryPosition.on('change', this.changeHandler.bind(this));
    this.baseballSecondaryPosition.on('change', this.changeHandler.bind(this));
    // BASKETBALL
    this.positionPrimaryBasketball.on('change', this.changeHandler.bind(this));
    this.positionSecondaryBasketball.on(
      'change',
      this.changeHandler.bind(this)
    );
    this.handBasketball.on('change', this.changeHandler.bind(this));
    // CHEERLEADING
    this.positionCheerleading.on('change', this.changeHandler.bind(this));
    // GOLF
    this.positionGolf.on('change', this.changeHandler.bind(this));
    this.wagrGolf.on('change', this.changeHandler.bind(this));
    this.nationalRankingGolf.on('change', this.changeHandler.bind(this));
    this.swingHandGolf.on('change', this.changeHandler.bind(this));
    // FIELD-HOCKEY
    this.positionFieldHockey.on('change', this.changeHandler.bind(this));
    // GYMNASTICS
    this.disciplineGymnastics.on('change', this.changeHandler.bind(this));
    // ICE-HOCKEY
    this.positionIceHockey.on('change', this.changeHandler.bind(this));
    // LACROSSE
    this.positionLacrosse.on('change', this.changeHandler.bind(this));
    // ROWING
    this.positionRowing.on('change', this.changeHandler.bind(this));
    // RUGBY
    this.positionRugby.on('change', this.changeHandler.bind(this));
    // SOCCER
    this.positionSoccer.on('change', this.changeHandler.bind(this));
    // SOFTBALL
    this.positionPrimarySoftball.on('change', this.changeHandler.bind(this));
    this.positionSecondarySoftball.on('change', this.changeHandler.bind(this));
    // SWIMMING AND DIVING
    this.mainEventSwimming.on('change', this.changeHandler.bind(this));
    this.secondaryEventSwimming.on('change', this.changeHandler.bind(this));
    // TENNIS
    this.utrTennis.on('change', this.changeHandler.bind(this));
    this.itfTennis.on('change', this.changeHandler.bind(this));
    this.handTennis.on('change', this.changeHandler.bind(this));
    this.nationalRankingTennis.on('change', this.changeHandler.bind(this));
    // TRACK & FIELD
    this.positionTrackAndField.on('change', this.changeHandler.bind(this));
    // VOLLEYBALL
    this.positionVolleyball.on('change', this.changeHandler.bind(this));
    // WATER POLO
    this.positionWaterPolo.on('change', this.changeHandler.bind(this));
  };

  changeHandler(e) {
    this.getSports();
  }
}

export default AdvFiltersSelect;
