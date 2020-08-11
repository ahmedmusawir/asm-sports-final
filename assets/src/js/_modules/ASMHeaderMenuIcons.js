import $ from 'jquery';

class ASMHeaderMenuIcons {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.emailButton = $('.nav-email');
    this.viewButton = $('.nav-visitor');
    this.setEvents();
  }

  init = () => {
    // console.log('Header Menu Top Icons ...');
  };

  setEvents = () => {
    this.emailButton.on('click', this.emailClickHandler);
    this.viewButton.on('mouseenter', this.viewMouseEnterHandler.bind(this));
    this.viewButton.on('mouseleave', this.viewMouseLeaveHandler);
  };

  emailClickHandler(e) {
    // console.log('Email Icon was clicked');
    window.location.href = '/athlete-email-inbox/';
  }

  viewMouseEnterHandler(e) {
    const viewCount = localStorage.getItem('theViewCount');
    this.viewButton.append(`
    <ul class="sub-menu">
      <li class="menu-item header-view-count-box">
        <p href="#">View Count: ${viewCount}</p>
      </li>
    </ul>  
    `);
  }

  viewMouseLeaveHandler(e) {
    $(this).children('ul').remove();
  }
}

export default ASMHeaderMenuIcons;
