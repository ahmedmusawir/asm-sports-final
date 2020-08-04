import $ from 'jquery';

class ASMCoachDashboardSearch {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.button = $('#coach-search-button');
    this.setEvents();
  }

  init = () => {
    console.log('Coach Dashboard Testing ...');
  };

  setEvents = () => {
    this.button.on('click', this.clickHandler);
  };

  clickHandler(e) {
    // console.log('clicked up from Sample Module ...');
    console.log('clicked');
    e.preventDefault();
    const searchUrl = $(this).data('target-url');
    console.log(searchUrl);

    const coachSports = $('#coach-sports').val();
    const coachYear = $('#coach-year').val();
    const coachLocation = $('#coach-location').val();

    console.log(coachSports);

    localStorage.setItem('coach-sports-choice', coachSports);

    // window.location.href = searchUrl;

    setTimeout(function () {
      const theItem = $('.item-entry-asm');
      console.log(theItem);

      const localCoachSport = localStorage.getItem('coach-sports-choice');
      console.log(localCoachSport);

      // if (coachSports) {
      //   theItem.addClass('d-none');

      //   setTimeout(function () {
      //     $(`.${coachSports}`).removeClass('d-none');
      //   });
      // } else {
      //   theItem.addClass('d-none');
      //   setTimeout(function () {
      //     theItem.removeClass('d-none');
      //   });
      // }
    }, 8000);
  }
}

export default ASMCoachDashboardSearch;
