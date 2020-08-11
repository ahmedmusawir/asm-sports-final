import ASMDropdownMenu from './_modules/ASMDropdownMenu';
import ASMHeaderMenuIcons from './_modules/ASMHeaderMenuIcons';
import ASMProfileEditMenu from './_modules/ASMProfileEditMenu';
import ASMAthleteDashTasks from './_modules/ASMAthleteDashTasks';
import ASMCoachDashboardSearch from './_modules/ASMCoachDashboardSearch';

import AthleteFiltersParent from './_modules/athlete-filters/AthleteFiltersParent';
import AthleteSportsFiltersSelect from './_modules/athlete-filters/AthleteSportsFiltersSelect';
import AthleteGenderFiltersSelect from './_modules/athlete-filters/AthleteGenderFiltersSelect';
import AthleteAvailFiltersSelect from './_modules/athlete-filters/AthleteAvailFiltersSelect';
import AthleteClassYearFiltersSelect from './_modules/athlete-filters/AthleteClassYearFiltersSelect';
import AthleteLocationFiltersSelect from './_modules/athlete-filters/AthleteLocationFiltersSelect';
import AthleteVerificationFiltersSelect from './_modules/athlete-filters/AthleteVerificationFiltersSelect';

import UniversityFiltersParent from './_modules/univ-filters/UnivFiltersParent';
import UnivDivisionsFiltersSelect from './_modules/univ-filters/UnivDivisionsFiltersSelect';
import UnivMensSportsFiltersSelect from './_modules/univ-filters/UnivMenSportsFiltersSelect';
import UnivWomensSportsFiltersSelect from './_modules/univ-filters/UnivWomenSportsFiltersSelect';

import UnivLoadMore from './_modules/load-more/UnivLoadMore';
import AthleteLoadMore from './_modules/load-more/AthleteLoadMore';

import AdvanceFiltersParent from './_modules/athlete-adv-filters/AdvanceFiltersParent';
import AdvanceFilterParentHelper from './_modules/athlete-adv-filters/AdvanceFiltersParentHelper';
import FilterSwitchModal from './_modules/athlete-filter-switch-modal/FilterSwitchModal';
import AdvFiltersSelect from './_modules/athlete-adv-filters/AdvFiltersSelect';

class App {
  constructor() {
    console.info('ES6 Script Initialized!');

    // ASM Global Dropdown Navigation
    new ASMDropdownMenu();
    // ASM Athlete Profile Edit Menu Toggle
    new ASMProfileEditMenu();
    // ASM Header Nav Icons Functions
    new ASMHeaderMenuIcons();

    /**
    ATHLETE DASHBOARD TASKS
    */
    new ASMAthleteDashTasks();

    /**
    COACH'S DASHBOARD SEARCH
    */
    new ASMCoachDashboardSearch();

    /**
    ATHLETE INDEX PAGE FILTERS
    */

    // ATHLETE FILTER PARENT
    new AthleteFiltersParent();
    // ATHLETE SPORTS SELECT
    new AthleteSportsFiltersSelect();
    // ATHLETE GENDER SELECT
    new AthleteGenderFiltersSelect();
    // ATHLETE AVAILABLILITY SELECT
    new AthleteAvailFiltersSelect();
    // ATHLETE CLASS YEAR SELECT
    new AthleteClassYearFiltersSelect();
    // ATHLETE LOCATION SELECT
    new AthleteLocationFiltersSelect();
    // ATHLETE VERIFY SELECT
    new AthleteVerificationFiltersSelect();

    /**
    UNIVERSITY INDEX PAGE FILTERS
    */

    // UNIVERSITY FILTER PARENT
    new UniversityFiltersParent();
    // UNIVERSITY DIVISION FILTER SELECT
    new UnivDivisionsFiltersSelect();
    // UNIVERSITY MEN'S SPORTS FILTER SELECT
    new UnivMensSportsFiltersSelect();
    // UNIVERSITY WOMEN'S SPORTS FILTER SELECT
    new UnivWomensSportsFiltersSelect();

    // UNIVERSITY LOAD MORE
    new UnivLoadMore();
    // ATHLETE LOAD MORE
    new AthleteLoadMore();

    /**
    FILTER SWITCHING MODAL
    */
    new FilterSwitchModal();

    /**
    ATHLETE ADVANCE FILTER
    */
    new AdvanceFiltersParent();
    new AdvanceFilterParentHelper();
    new AdvFiltersSelect();
    // new AdvGenderFiltersSelect();
    // new AdvAvailFiltersSelect();
  }
}

const app = new App();
