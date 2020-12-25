import $ from 'jquery';
import { selectize } from 'selectize';
// FOLLOWING NEEDED EVERY TIME ASYNC AWAIT IS USED
import regeneratorRuntime from 'regenerator-runtime';
import UnivFilterParent from './UnivFiltersParent';

class UnivStateSelectizeFilter extends UnivFilterParent {
  constructor() {
    super();
    this.init();
    // SITE ROOT URL FROM WP LOCALIZE SCRIPT
    this.siteRoot = asmData.root_url;
    // UNIVERSITY INDEX CONTAINER
    this.dataDisplayBox = $('#univ-index-data-container');
    // ALL STATES
    this.allStates = [
      'alabama',
      'alaska',
      'arizona',
      'arkansas',
      'california',
      'colorado',
      'connecticut',
      'delaware',
      'district-of-columbia',
      'florida',
      'georgia',
      'hawaii',
      'idaho',
      'illinois',
      'indiana',
      'iowa',
      'kansas',
      'kentucky',
      'louisiana',
      'maine',
      'maryland',
      'massachusetts',
      'michigan',
      'minnesota',
      'mississippi',
      'missouri',
      'montana',
      'nebraska',
      'nevada',
      'new-hampshire',
      'new-jersey',
      'new-mexico',
      'new-york',
      'north-carolina',
      'north-dakota',
      'ohio',
      'oklahoma',
      'oregon',
      'pennsylvania',
      'puerto-rico',
      'rhode-island',
      'south-carolina',
      'south-dakota',
      'tennessee',
      'texas',
      'utah',
      'vermont',
      'virgin-islands',
      'virginia',
      'washington',
      'west-virginia',
      'wisconsin',
      'wyoming',
    ];

    // INITIALIZE UP SELECTIZE
    if ($('#state-select').length) {
      this.univStateSelect = $('#state-select').selectize({
        sortField: 'text',
      });

      // ADDING ITEMS DYNAMICALLY & SETTING UP THE CONTROL ELEMENT
      this.selectizeInput = this.univStateSelect[0].selectize;
    }

    // LOAD STATES TO SELECTIZE
    this.loadStatesToSelectize();
    // COLLECTING SELECT
    this.setEvents();
  }

  init = () => {
    console.log('Univ Selectize Filter ...');
  };

  loadStatesToSelectize = () => {
    this.allStates.map((state) => {
      const selectOptions = { value: state, text: state.toUpperCase() };
      if (this.selectizeInput) {
        this.selectizeInput.addOption(selectOptions);
      }
    });
  };

  setEvents = () => {
    if (this.selectizeInput) {
      this.selectizeInput.on('change', this.stateSelectHandler);
    }
  };

  stateSelectHandler = () => {
    // this.selectizeInput.clear(); // Resets all selected items from selectize
    // this.selectizeInput.clearOptions(); // Removes all options from selectize
    const selectedState = this.selectizeInput.getValue();
    // console.log('State Selected: ', selectedState);
    // PULLING STATE UNIV DATA FROM JSON
    this.getStateData(selectedState);
  };

  getStateData = async (selectedState) => {
    const allStateFileUrl =
      this.siteRoot + '/wp-content/uploads/_DATA/university_data.json';

    const stateFileUrl =
      this.siteRoot +
      `/wp-content/uploads/_DATA/university_data_${selectedState}.json`;

    try {
      // this.loaderSpinner.addClass('show');
      if (selectedState) {
        // READING FROM JSON FILE
        let response = await fetch(stateFileUrl);
        let data = await response.json();
        // console.log(data);
        // DISPLAY DATA TO PAGE
        this.displayUnivData(data);
      } else {
        // READING FROM JSON FILE
        console.log('Nothing Chosen');
        // DISPLAY DATA TO PAGE
      }
    } catch (e) {
      console.log(e);
    }
  };

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

export default UnivStateSelectizeFilter;
