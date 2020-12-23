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
    this.url =
      this.siteRoot + '/wp-content/uploads/_DATA/university_data_25.json';
    this.thePromise = this.getData(this.url);
    this.loadMainCatData(this.thePromise);
  }

  init = () => {
    console.log('Univ Data from JSON - Testing ...');
  };

  async getData(url) {
    try {
      let response = await fetch(url);
      let data = await response.json();
      console.log(data);
      return data;
    } catch (e) {
      console.log(e);
    }
  }

  loadMainCatData = (thePromise) => {
    thePromise.then((d) => {
      let data = d;
      let displayData;
      data.map((univData) => {
        // ADDING ITEMS DYNAMICALLY
        // displayData += `<li>${univData.title}</li>`;
        displayData = `<li>${univData.title}</li>`;
        this.dataDisplayBox.append(displayData);
      });
      // this.dataDisplayBox.html(displayData);
    });
  };
}

export default UnivDataFromJson;
