import $ from 'jquery';
// import { selectize } from 'selectize';
// FOLLOWING NEEDED EVERY TIME ASYNC AWAIT IS USED
import regeneratorRuntime from 'regenerator-runtime';

class UnivDataDisplayFromLocalStorage {
  constructor() {
    this.init();
    // LOADER GIF
    this.loaderSpinner = $('#spinner');
    // COLLECTING ELEMENT
    this.dataDisplayBox = $('#univ-index-data-container');
    // SITE ROOT URL FROM WP LOCALIZE SCRIPT
    this.siteRoot = asmData.root_url;
    // COLLECTION DATA
    this.url = this.siteRoot + '/wp-content/uploads/_DATA/university_data.json';
    // LOADING DATA
    this.loadUnivData();
  }

  init = () => {
    console.log('Univ Data Prod Display');
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
      console.log(universityData);
    }
  };

  async getData(url) {
    try {
      // this.loaderSpinner.addClass('show');

      // READING FROM JSON FILE
      let response = await fetch(url);
      let data = await response.json();
      // console.log(data);
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
    this.dataDisplayBox.html('');

    let displayData = '';
    data.map((univData) => {
      const divisionClasses = univData.divisions.join(' ');
      const menSportsClasses = univData.mens_sports.join(' ');
      const womentSportsClasses = univData.womens_sports.join(' ');
      // ADDING ITEMS DYNAMICALLY
      displayData = `
      <article class="col-md-12 univ-post-item item animated bounceIn ${divisionClasses} ${menSportsClasses} ${womentSportsClasses}">

      <div class="entry-content row">
    
        <section class="col-sm-5">
    
          <figure class="featured-image-box">
            <a href="${univData.permalink}">
              <img src="${univData.featured_img_url}" alt="">
            </a>
          </figure>
    
        </section>
    
        <section id="university-item-box" class="col-sm-7">
    
          <div class="university-text">
              <h2 class="entry-title">
                <a href="${univData.permalink}" rel="bookmark">
                  ${univData.title}
                </a>
              </h2> 
    
              <h5 class="university-address">
              <strong>${univData.university_address}</strong>
            </h5>
          </div>
          <div class="university-item-content">
    
            <figure class="university-logo">
              <img class="img-fluid" src="${univData.university_logo}" alt="">
            </figure>
    
            <a class="detail-link" href="${univData.permalink}">
              <span class="btn btn-primary btn-sm">
                View Details
              </span>
            </a>
     
          </div>
    
        </section>
    
        <hr>
    
      </div><!-- .entry-content -->
    
    </article>
        `;
      // ADDING DATA TO PAGE BY APPENDING RECORDS
      this.dataDisplayBox.append(displayData);
    });
  };
}

export default UnivDataDisplayFromLocalStorage;
