/**
A MODAL FULL OF SPORTS CHOICES THAT HELPS TRANSITION FROM STANDARD FILTER TO 
THE ADVANCE FILTERS
*/
import $ from 'jquery';

class FilterSwitchModal {
  constructor() {
    this.radioBtnBox = $('#modal-sports-choice-box');
    this.init();
    // COLLECTING BUTTON
    // this.button = $('#univ-load-more-btn');
    this.setEvents();
  }

  init = () => {
    console.log('Filter Switch Modal ...');
    // COLLECTING SPORTS ITEMS FROM THE LOCAL STORAGE
    const rawSportsData = localStorage.getItem('localSports');
    const sportStrArr1 = rawSportsData.split('\\');
    // const testItem = localStorage.setItem('localSports', 'some_text_or_num_Data');
    // const = testItem = localStorage.setItem('localSports', JSON.stringify(yourObject));
    // const rawSportsData = JSON.parse(localStorage.getItem('localSports'));

    console.log(rawSportsData);
    // console.log(sportStrArr1);

    sportStrArr1.map((item) => {
      // console.log(item);
      if (!item.includes('option')) {
        // console.log(item);
        // const newItem = item.substr(0, item.length - 1); // Remove last char for the string
        const newItem = item.substr(1); // Remove first char for the string
        console.log(newItem);
        // GENERATING HTML - RADIO BUTTONS
        const newRadioBtn = `
        <input type="radio" id="${newItem}" name="${newItem}" value="${newItem}">
        <label for="${newItem}">${newItem}</label><br>`;
        this.radioBtnBox.append(newRadioBtn);
      }
    });
  };

  setEvents = () => {
    // this.button.on('click', this.clickHandler);
  };

  clickHandler() {
    // console.log('clicked up from Sample Module ...');
    const page = $(this).data('page');
    console.log(page);
  }
}

export default FilterSwitchModal;
