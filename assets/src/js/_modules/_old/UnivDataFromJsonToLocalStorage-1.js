import $ from 'jquery';
// import { selectize } from 'selectize';
// FOLLOWING NEEDED EVERY TIME ASYNC AWAIT IS USED
import regeneratorRuntime from 'regenerator-runtime';

class UnivDataFromJsonToLocalStorage {
  constructor() {
    this.init();
    // LOADER GIF
    this.loaderSpinner = $('#spinner');
    // COLLECTING ELEMENT
    this.dataDisplayBox = $('#univ-json-local-storage-container');
    // SITE ROOT URL FROM WP LOCALIZE SCRIPT
    this.siteRoot = asmData.root_url;
    // COLLECTION DATA
    this.url = this.siteRoot + '/wp-content/uploads/_DATA/university_data.json';
    // this.thePromise = this.getData(this.url);
    this.loadUnivData();
  }

  init = () => {
    console.log('Univ Data from JSON to LOCAL STORAGE - Testing');
  };

  loadUnivData = () => {
    // TRYING TO PULL UNIV DATA FROM LOCAL STORAGE
    const univObject = localStorage.getItem('univData');
    const universityData = JSON.parse(univObject);
    // console.log(universityData);

    // IF LOCAL STORAGE EMTPY, READING FROM JSON FILE & WRITING TO LOCAL STORAGE
    if (!universityData) {
      this.getData(this.url);
    } else {
      // DISPLAY DATA TO PAGE
      this.displayUnivData(universityData);
    }
  };

  async getData(url) {
    try {
      // this.loaderSpinner.addClass('show');

      // READING FROM JSON FILE
      let response = await fetch(url);
      let data = await response.json();
      console.log(data);
      // WRITING INTO LOCAL STORAGE
      localStorage.setItem('univData', JSON.stringify(data));
      // TRYING TO PULL UNIV DATA FROM LOCAL STORAGE
      const univObject = localStorage.getItem('univData');
      const universityData = JSON.parse(univObject);
      // DISPLAY DATA TO PAGE
      this.displayUnivData(universityData);
      // return data;
    } catch (e) {
      console.log(e);
    }
  }

  displayUnivData = (data) => {
    if (data) {
      // this.loaderSpinner.removeClass('show');
    }
    let displayData = '';
    data.map((univData) => {
      // ADDING ITEMS DYNAMICALLY
      displayData += `
        <ul class="card p-3 bg-light">
        <li>${univData.title}</li>
        <li>${univData.permalink}</li>
        <li>${univData.featured_img_url}</li>
        <li>${univData.university_logo}</li>
        <li>${univData.university_address}</li>
        </ul>
        `;
    });
    this.loaderSpinner.removeClass('show');
    this.dataDisplayBox.html(displayData);
  };
}

export default UnivDataFromJsonToLocalStorage;
