import $ from 'jquery';

class ASMTestJQModule {
  constructor() {
    this.init();
    this.el = $('body');
    console.log(this.el);

    this.events();
  }

  init = () => {
    // console.log('Simple Module Init');
  };

  events = () => {
    this.el.on('click', this.clickHandler);
  };

  clickHandler = () => {
    console.log('clicked up from Sample Module ...');
  };
}

export default ASMTestJQModule;
