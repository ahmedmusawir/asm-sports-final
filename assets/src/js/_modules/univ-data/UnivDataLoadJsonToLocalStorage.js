import $ from 'jquery';
// FOLLOWING NEEDED EVERY TIME ASYNC AWAIT IS USED
import regeneratorRuntime from 'regenerator-runtime';

class UnivDataLoadJsonToLocalStorage {
  constructor() {
    this.init();
    // COLLECTING ELEMENT
    this.dataDisplayBox = $('#univ-json-data-container');
    // SITE ROOT URL FROM WP LOCALIZE SCRIPT
    this.siteRoot = asmData.root_url;
    // COLLECTION DATA
    this.url = this.siteRoot + '/wp-content/uploads/_DATA/university_data.json';
    // LOADING DATA
    this.loadUnivData();
  }

  init = () => {
    console.log('UnivDataLoadJsonToLocalStorage ...');
  };

  loadUnivData = () => {
    // TRYING TO PULL UNIV DATA FROM LOCAL STORAGE
    const univObject = localStorage.getItem('univData');
    // const universityData = JSON.parse(univObject);
    // console.log(universityData);

    // IF LOCAL STORAGE EMTPY, READING FROM JSON FILE & WRITING TO LOCAL STORAGE
    if (!univObject) {
      this.getData(this.url);
    } else {
      // NO NEED TO LOAD DATA
      console.log('UnivData already present!');
    }
  };

  getData = async (url) => {
    try {
      let response = await fetch(url);
      let data = await response.json();
      console.log('Launched by WP', data);
      // WRITING INTO LOCAL STORAGE
      localStorage.setItem('univData', JSON.stringify(data));
    } catch (e) {
      console.log(e);
    }
  };
}

export default UnivDataLoadJsonToLocalStorage;
