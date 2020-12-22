import $ from 'jquery';

class ASMCoachDashboardSearch {
  constructor() {
    // this.init();
    // COLLECTING BUTTON
    this.button = $('#coach-search-button');
    this.setEvents();
  }

  init = () => {
    console.log('Coach Dash Test 2...');
  };

  setEvents = () => {
    this.button.on('click', this.clickHandler);
  };

  clickHandler(e) {
    const searchUrl = $(this).data('target-url');
    console.log(searchUrl);

    window.location.href = searchUrl;
  }
}

export default ASMCoachDashboardSearch;
