import $ from 'jquery';
import AdvanceFiltersParent from './AdvanceFiltersParent';

class AdvanceFilterParentHelper extends AdvanceFiltersParent {
  constructor() {
    super();
    this.init();
  }

  init = () => {
    console.log('Parent Helper...');
  };

  getSports = (filterName) => {
    console.log(`Filter Name: ${filterName}`);

    // BASE FILTERS
    const sport = $('.menu-title.sport-title').text();
    const avail = $('#avail-select-adv').val();
    const classYr = $('#class-year-select-adv').val();
    const location = $('#location-select-adv').val();
    const verify = $('#verify-select-adv').val();
    const gender = $('#gender-select-adv').val();
    const theItem = $('.item-entry-asm');

    // BASE FILTER ARRAY
    const filterArray = [
      theItem,
      sport,
      gender,
      avail,
      classYr,
      location,
      verify,
    ];

    switch (sport) {
      case 'US-FOOTBALL':
        console.log(`Sport Filters for ${sport}`);
        // US FOOTBALL FILTER
        const positionUsFootball = $('#position-US-FOOTBALL').val();

        this.applyAdvFilters(...filterArray, positionUsFootball);
        // code block
        break;
      case 'BASEBALL':
        console.log(`Sport Filters for ${sport}`);
        // BASEBALL FILTERS
        const positionPrimaryBaseball = $('#position-primary-BASEBALL').val();
        const positionSecondaryBaseball = $(
          '#position-secondary-BASEBALL'
        ).val();

        this.applyAdvFilters(
          ...filterArray,
          positionPrimaryBaseball,
          positionSecondaryBaseball
        );
        // code block
        break;
      case 'BASKETBALL':
        console.log(`Sport Filters for ${sport}`);
        // BASKETBALL FILTERS
        const positionPrimaryBasketball = $(
          '#position-primary-BASKETBALL'
        ).val();
        const positionSecondaryBasketball = $(
          '#position-secondary-BASKETBALL'
        ).val();
        const handBasketball = $('#hand-BASKETBALL').val();

        this.applyAdvFilters(
          ...filterArray,
          positionPrimaryBasketball,
          positionSecondaryBasketball,
          handBasketball
        );
        // code block
        break;
      case 'CHEERLEADING':
        console.log(`Sport Filters for ${sport}`);
        // CHEERLEADING FILTER
        const positionCheerleading = $('#position-CHEERLEADING').val();

        this.applyAdvFilters(...filterArray, positionCheerleading);
        // code block
        break;
      case 'GOLF':
        console.log(`Sport Filters for ${sport}`);
        // GOLF FILTERS
        const positionGolf = $('#position-GOLF').val();
        const wagrGolf = $('#wagr-GOLF').val();
        const nationalRankingGolf = $('#national-ranking-GOLF').val();
        const swingHandGolf = $('#swing-hand-GOLF').val();

        this.applyAdvFilters(
          ...filterArray,
          positionGolf,
          wagrGolf,
          nationalRankingGolf,
          swingHandGolf
        );
        // code block
        break;
      case 'FIELD-HOCKEY':
        console.log(`Sport Filters for ${sport}`);
        // FIELD-HOCKEY
        const positionFieldHockey = $('#position-FIELD-HOCKEY').val();

        this.applyAdvFilters(...filterArray, positionFieldHockey);
        // code block
        break;
      case 'GYMNASTICS':
        console.log(`Sport Filters for ${sport}`);
        // GYMNASTICS
        const disciplineGymnastics = $('#discipline-GYMNASTICS').val();

        this.applyAdvFilters(...filterArray, disciplineGymnastics);
        // code block
        break;
      case 'ICE-HOCKEY':
        console.log(`Sport Filters for ${sport}`);
        // ICE-HOCKEY
        const positionIceHockey = $('#position-ICE-HOCKEY').val();

        this.applyAdvFilters(...filterArray, positionIceHockey);
        // code block
        break;
      case 'LACROSSE':
        console.log(`Sport Filters for ${sport}`);
        // LACROSSE
        const positionLacrosse = $('#position-LACROSSE').val();

        this.applyAdvFilters(...filterArray, positionLacrosse);
        // code block
        break;
      case 'ROWING':
        console.log(`Sport Filters for ${sport}`);
        // ROWING
        const positionRowing = $('#position-ROWING').val();

        this.applyAdvFilters(...filterArray, positionRowing);
        // code block
        break;
      case 'RUGBY':
        console.log(`Sport Filters for ${sport}`);
        // RUGBY
        const positionRugby = $('#position-RUGBY').val();

        this.applyAdvFilters(...filterArray, positionRugby);
        // code block
        break;
      case 'SOCCER':
        console.log(`Sport Filters for ${sport}`);
        // SOCCER
        const positionSoccer = $('#position-SOCCER').val();

        this.applyAdvFilters(...filterArray, positionSoccer);
        // code block
        break;
      case 'SOFTBALL':
        console.log(`Sport Filters for ${sport}`);
        // SOFTBALL
        const positionPrimarySoftball = $('#position-primary-SOFTBALL').val();
        const positionSecondarySoftball = $(
          '#position-secondary-SOFTBALL'
        ).val();

        this.applyAdvFilters(
          ...filterArray,
          positionPrimarySoftball,
          positionSecondarySoftball
        );
        // code block
        break;
      case 'SWIMMING-AND-DIVING':
        console.log(`Sport Filters for ${sport}`);
        // SWIMMING AND DIVING
        const mainEventSwimming = $('#main-event-SWIMMING-AND-DIVING').val();
        const secondaryEventSwimming = $(
          '#secondary-event-SWIMMING-AND-DIVING'
        ).val();

        this.applyAdvFilters(
          ...filterArray,
          mainEventSwimming,
          secondaryEventSwimming
        );
        // code block
        break;
      case 'TENNIS':
        console.log(`Sport Filters for ${sport}`);
        // TENNIS
        const utrTennis = $('#utr-TENNIS').val();
        const itfTennis = $('#itf-TENNIS').val();
        const handTennis = $('#hand-TENNIS').val();
        const nationalRankingTennis = $('#ranking-TENNIS').val();

        this.applyAdvFilters(
          ...filterArray,
          utrTennis,
          itfTennis,
          handTennis,
          nationalRankingTennis
        );
        // code block
        break;
      case 'TRACK-AND-FIELD':
        console.log(`Sport Filters for ${sport}`);
        // TRACK & FIELD
        const positionTrackAndField = $('#position-TRACK-AND-FIELD').val();

        this.applyAdvFilters(...filterArray, positionTrackAndField);
        // code block
        break;
      case 'VOLLEYBALL':
        console.log(`Sport Filters for ${sport}`);
        // VOLLEYBALL
        const positionVolleyball = $('#position-VOLLEYBALL').val();

        this.applyAdvFilters(...filterArray, positionVolleyball);
        // code block
        break;
      case 'WATER-POLO':
        console.log(`Sport Filters for ${sport}`);
        // WATER POLO
        const positionWaterPolo = $('#position-WATER-POLO').val();

        this.applyAdvFilters(...filterArray, positionWaterPolo);
        // code block
        break;
      default:
        console.log(`Unknown Sport Filters for ${sport}`);
      // code block
    }
  };
}

export default AdvanceFilterParentHelper;
