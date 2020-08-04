class ASMProfileEditMenu {
  constructor() {
    // console.info('ASM Edit Menu initialized!');

    // EDIT PROFILE NAV BUTTON
    this.editAthleteProfileButton = document.getElementById(
      'edit-athlete-profile-button'
    );
    this.editCoachProfileButton = document.getElementById(
      'edit-coach-profile-button'
    );
    // EDIT PROFILE BOX
    this.editAthleteProfileBox = document.getElementById(
      'athlete-profile-edit-box'
    );
    this.editCoachProfileBox = document.getElementById(
      'coach-profile-edit-box'
    );

    this.addEvents();
  }

  addEvents = () => {
    if (this.editAthleteProfileBox) {
      this.editAthleteProfileButton.addEventListener('click', this.menuToggle);
    }
    if (this.editCoachProfileBox) {
      this.editCoachProfileButton.addEventListener('click', this.menuToggle);
    }
  };

  menuToggle = () => {
    // console.log('Btn clicked');
    if (this.editAthleteProfileBox) {
      this.editAthleteProfileBox.classList.toggle('d-none');
    }
    if (this.editCoachProfileBox) {
      this.editCoachProfileBox.classList.toggle('d-none');
    }
  };
}

export default ASMProfileEditMenu;
