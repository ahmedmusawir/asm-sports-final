import $ from 'jquery';
import AdvanceFiltersParent from './AdvanceFiltersParent';

class AdvGenderFiltersSelect extends AdvanceFiltersParent {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.selectGender = $('#gender-select-adv');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Gender Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectSport);
    this.selectGender.on('change', this.changeHandler.bind(this));
  };

  changeHandler() {
    // BASE FILTERS
    const sport = $('.menu-title.sport-title').text();
    const avail = $('#avail-select-adv').val();
    const classYr = $('#class-year-select-adv').val();
    const location = $('#location-select-adv').val();
    const verify = $('#verify-select-adv').val();

    // US FOOTBALL FILTER
    const positionUsFootball = $('#position-us-football').val();

    // CHEERLEADING FILTER
    const positionCheerleading = $('#position-cheerleading').val();

    // GOLF FILTERS
    const positionGolf = $('#position-golf').val();
    const wagrGolf = $('#wagr-golf').val();
    const nationalRankingGolf = $('#national-ranking-golf').val();
    const swingHandGolf = $('#swing-hand-golf').val();

    // BASKETBALL FILTERS
    const positionPrimaryBasketball = $('#position-primary-basketball').val();
    const positionSecondaryBasketball = $(
      '#position-secondary-basketball'
    ).val();

    // BASEBALL FILTERS
    const positionPrimaryBaseball = $('#position-primary-baseball').val();
    const positionSecondaryBaseball = $('#position-secondary-baseball').val();

    // FIELD-HOCKEY
    const positionFieldHockey = $('#position-FIELD-HOCKEY').val();

    // GYMNASTICS
    const disciplineGymnastics = $('#discipline-GYMNASTICS').val();

    // ICE-HOCKEY
    const positionIceHockey = $('#position-ICE-HOCKEY').val();

    // LACROSSE
    const positionLacrosse = $('#position-LACROSSE').val();

    // ROWING
    const positionRowing = $('#position-ROWING').val();

    // RUGBY
    const positionRugby = $('#position-RUGBY').val();

    // SOCCER
    const positionSoccer = $('#position-SOCCER').val();

    // SOFTBALL
    const positionPrimarySoftball = $('#position-primary-SOFTBALL').val();
    const positionSecondarySoftball = $('#position-secondary-SOFTBALL').val();

    // SWIMMING
    const mainEventSwimming = $('#main-event-SWIMMING-AND-DIVING').val();
    const secondaryEventSwimming = $(
      '#secondary-event-SWIMMING-AND-DIVING'
    ).val();

    // TENNIS
    const utrTennis = $('#utr-TENNIS').val();
    const itfTennis = $('#itf-TENNIS').val();
    const handTennis = $('#hand-TENNIS').val();
    const nationalRankingTennis = $('#ranking-TENNIS').val();

    // TRACK & FIELD
    const positionTrackAndField = $('#position-TRACK-AND-FIELD').val();

    // VOLLEYBALL
    const positionVolleyball = $('#position-VOLLEYBALL').val();

    // WATER POLO
    const positionWaterPolo = $('#position-WATER-POLO').val();

    // CLICKED CURRENT SELECT FILTER
    const gender = $('#gender-select-adv').val();
    const theItem = $('.item-entry-asm');

    switch (sport) {
      case 'US-FOOTBALL':
        console.log(`Sport Filters for ${sport}`);
        console.log(`Sport Filters for ${positionUsFootball}`);
        // PARENT FUNCTION BUT IT'S AN ARROW FUNC SO MUST BE CALLED WITH this.ParentFunc
        // NORMAL FUNCTION NEEDS BE CALLED WITH super.ParentFunc
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionUsFootball
        );
        // code block
        break;
      case 'BASEBALL':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionPrimaryBaseball,
          positionSecondaryBaseball
        );
        // code block
        break;
      case 'BASKETBALL':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionPrimaryBasketball,
          positionSecondaryBasketball
        );
        // code block
        break;
      case 'CHEERLEADING':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionCheerleading
        );
        // code block
        break;
      case 'GOLF':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionGolf,
          wagrGolf,
          nationalRankingGolf,
          swingHandGolf
        );
        // code block
        break;
      case 'FIELD-HOCKEY':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionFieldHockey
        );
        // code block
        break;
      case 'GYMNASTICS':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          disciplineGymnastics
        );
        // code block
        break;
      case 'ICE-HOCKEY':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionIceHockey
        );
        // code block
        break;
      case 'LACROSSE':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionLacrosse
        );
        // code block
        break;
      case 'ROWING':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionRowing
        );
        // code block
        break;
      case 'RUGBY':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionRugby
        );
        // code block
        break;
      case 'SOCCER':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionSoccer
        );
        // code block
        break;
      case 'SOFTBALL':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionPrimarySoftball,
          positionSecondarySoftball
        );
        // code block
        break;
      case 'SWIMMING-AND-DIVING':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          mainEventSwimming,
          secondaryEventSwimming
        );
        // code block
        break;
      case 'TENNIS':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          utrTennis,
          itfTennis,
          handTennis,
          nationalRankingTennis
        );
        // code block
        break;
      case 'TRACK-AND-FIELD':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionTrackAndField
        );
        // code block
        break;
      case 'VOLLEYBALL':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionVolleyball
        );
        // code block
        break;
      case 'WATER-POLO':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionWaterPolo
        );
        // code block
        break;
      default:
        console.log(`Unknown Sport Filters for ${sport}`);
      // code block
    }
  }
}

export default AdvGenderFiltersSelect;
