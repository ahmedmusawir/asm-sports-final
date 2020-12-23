import $ from 'jquery';
// import { selectize } from 'selectize';
// FOLLOWING NEEDED EVERY TIME ASYNC AWAIT IS USED
import regeneratorRuntime from 'regenerator-runtime';

class UnivDataFromJson {
  constructor() {
    this.init();
    // COLLECTING ELEMENT
    this.dataDisplayBox = $('#univ-json-data-container');
    // SITE ROOT URL FROM WP LOCALIZE SCRIPT
    this.siteRoot = asmData.root_url;
    // console.log(selflistData.root_url);
    // COLLECTION DATA
    this.url = this.siteRoot + '/wp-content/uploads/_DATA/university_data.json';
    this.thePromise = this.getData(this.url);
    // this.loadMainCatData(this.thePromise);
  }

  init = () => {
    console.log('Univ Data from JSON - STATE DATA - TEXAS ...');
  };

  getData = async (url) => {
    try {
      let response = await fetch(url);
      let data = await response.json();
      // console.log(data);
      this.showData(data);
      // return data;
    } catch (e) {
      console.log(e);
    }
  };

  showData = (data) => {
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
    this.dataDisplayBox.html(displayData);
  };
}

export default UnivDataFromJson;
