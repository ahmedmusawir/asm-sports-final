<?php
/**
 * BuddyPress Members Directory
 *
 * @version 3.0.0
 */
// $url = get_home_url();
// echo $url;

?>
<section id="athlete-index" class="mt-5 pt-5">
  <?php 
  // if ( !is_super_admin() ) {
  //   wp_safe_redirect( $url, 302 );
  //   exit;
  //  } 
  ?>

  <div class="screen-content">

    <!-- TOP BLUE BAR START -->
    <div class="top-blue-bar">
      <article class="">
        <h5 class="text-light pt-3 pl-4">Athletes: </h5>
        <?php //bp_get_template_part( 'common/search-and-filters-bar' ); ?>
      </article>
    </div>
    <!-- TOP BLUE BAR ENDS -->

    <!-- TOP FILTER BAR STARTS -->
    <div class="top-filter-navbar-index">

      <section class="top-page-menu clearfix">
        <h3 class="menu-title float-left">Filters</h3>
        <ul class="list-inline menu-box">

          <li class="list-inline-item">

            <select class="select-filter" id="sports-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

              <option value="all">All Sports</option>
              <!-- <option value="FOOTBALL">FootBall</option>
              <option value="GOLF">Golf</option>
              <option value="BASEBALL">Baseball</option>
              <option value="BASKETBALL">Basketball</option>
              <option value="SOCCER">Soccer</option>
              <option value="CHEERLEADING">Cheerleading</option> -->

            </select>

          </li>


          <li class="list-inline-item">

            <select class="select-filter" id="gender-select">

              <option value="all">All Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>

            </select>

          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="avail-select">

              <option value="all">Availablility</option>
              <option value="available">Available</option>
              <option value="committed">Committed</option>

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="class-year-select">

              <option value="all">Class Year</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="location-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

              <option value="all">Location</option>
              <!-- <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="Canada">Canada</option>
              <option value="Domenican-Republic">Domenican Republic</option>
              <option value="Mexico">Mexico</option> -->

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="verify-select">

              <option value="all">Verification</option>
              <option value="verified">Verified</option>
              <option value="unverified">Not Verified</option>

            </select>
          </li>


          <a class="moose-item" href="#" id="ath-filter-reset">
            <li class="list-inline-item">
              <span class="btn-text">RESET FILTERS</span>
            </li>
          </a>

          <a class="moose-item" href="#" id="athAdvanceFilter" data-toggle="modal">
            <li class="list-inline-item">
              <span class="btn-text">OTHER FILTERS</span>
            </li>
          </a>

        </ul>

      </section>



    </div>
    <!-- TOP FILTER BAR ENDS -->

    <!-- TOP ADVANCED FILTER BAR STARTS -->

    <div id="top-advanced-filter" class="d-none">
      <section class="top-page-menu clearfix">
        <div class="row top-row">
          <div class="col-md-2">

            <h3 class="menu-title float-left pt-2 text-light">Other Filters</h3>

          </div>
          <div class="col-md-10">
            <ul class="list-inline menu-box">

              <li class="list-inline-item">
                <select class="select-filter" id="gender-select-adv">

                  <option value="all">All Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>

                </select>

              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="avail-select-adv">

                  <option value="all">Availablility</option>
                  <option value="available">Available</option>
                  <option value="committed">Committed</option>

                </select>
              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="class-year-select-adv">

                  <option value="all">Class Year</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>

                </select>
              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="location-select-adv"
                  data-url="<?php echo admin_url('admin-ajax.php'); ?>">

                  <option value="all">Location</option>

                </select>
              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="verify-select-adv">

                  <option value="all">Verification</option>
                  <option value="verified">Verified</option>
                  <option value="unverified">Not Verified</option>

                </select>
              </li>

              <a class="moose-item" href="#" id="ath-adv-filter-reset">
                <li class="list-inline-item">
                  <span class="btn-text">RESET FILTERS</span>
                </li>
              </a>

            </ul>
          </div>
        </div>

        <div class="row bottom-row">
          <div class="col-md-2">

            <h3 class="menu-title sport-title float-left pt-2">Sports Name</h3>

          </div>
          <div class="col-md-10">
            <ul class="list-inline menu-box menu-box-sports menu-box-GOLF">

              <li class="list-inline-item">

                <select class="select-filter" id="position-GOLF">

                  <option value="all">Handicap</option>
                  <option value="Plus7-0">+7-0</option>
                  <option value="0-5">0-5</option>
                  <option value="6-and-up">6 and Up</option>

                </select>

              </li>

              <li class="list-inline-item">

                <select class="select-filter" id="wagr-GOLF">

                  <option value="all">WAGR</option>
                  <option value="1-1000wagr">1-1000</option>
                  <option value="1000-2000wagr">1000-2000</option>
                  <option value="2000-3000wagr">2000-3000</option>
                  <option value="3000-4000wagr">3000-4000</option>
                  <option value="4000-5000wagr">4000-5000</option>
                  <option value="5000-6000wagr">5000-6000</option>
                  <option value="6000-7000wagr">6000-7000</option>

                </select>

              </li>

              <li class="list-inline-item">

                <select class="select-filter" id="national-ranking-GOLF">

                  <option value="all">National Ranking</option>
                  <option value="1-1000">1-1000</option>
                  <option value="1000-2000">1000-2000</option>
                  <option value="2000-3000">2000-3000</option>
                  <option value="3000-4000">3000-4000</option>
                  <option value="4000-5000">4000-5000</option>
                  <option value="5000-6000">5000-6000</option>
                  <option value="6000-7000">6000-7000</option>
                  <option value="7000-8000">7000-8000</option>
                  <option value="7000-9000">7000-9000</option>
                  <option value="9000-10000">9000-10000</option>

                </select>

              </li>

              <li class="list-inline-item">

                <select class="select-filter" id="swing-hand-GOLF">

                  <option value="all">Swing Hand</option>
                  <option value="Left">Left</option>
                  <option value="Right">Right</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-GOLF -->

            <ul class="list-inline menu-box menu-box-sports menu-box-US-FOOTBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-US-FOOTBALL">

                  <option value="all">Positions</option>
                  <option value="Center">Center</option>
                  <option value="Offensive-guard">Offensive guard</option>
                  <option value="Offensive-tackle">Offensive tackle</option>
                  <option value="Quarterback">Quarterback</option>
                  <option value="Running-back">Running back</option>
                  <option value="Wide-receiver">Wide receiver</option>
                  <option value="Tight-end">Tight end</option>
                  <option value="Nose-Guard">Nose Guard</option>
                  <option value="Defensive-tackle">Defensive tackle</option>
                  <option value="Defensive-end">Defensive end</option>
                  <option value="Middle-linebacker">Middle linebacker</option>
                  <option value="Outside-linebacker">Outside linebacker</option>
                  <option value="Cornerback">Cornerback</option>
                  <option value="Safety">Safety</option>
                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-US-FOOTBALL -->

            <ul class="list-inline menu-box menu-box-sports menu-box-BASEBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-primary-BASEBALL">

                  <option value="all">Primary Positions</option>
                  <option value="Catcher-p">Catcher</option>
                  <option value="1st-Base-p">1st Base</option>
                  <option value="2nd-Base-p">2nd Base</option>
                  <option value="3rd-Base-p">3rd Base</option>
                  <option value="Short-Stop-p">Short Stop</option>
                  <option value="Out-Field-p">Out Field</option>
                  <option value="Left-Field-p">Left Field</option>
                  <option value="Pitcher-p">Pitcher</option>
                  <option value="Relief-Closer-p">Relief Closer</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="position-secondary-BASEBALL">

                  <option value="all">Secondary Positions</option>
                  <option value="Catcher-s">Catcher</option>
                  <option value="1st-Base-s">1st Base</option>
                  <option value="2nd-Base-s">2nd Base</option>
                  <option value="3rd-Base-s">3rd Base</option>
                  <option value="Short-Stop-s">Short Stop</option>
                  <option value="Out-Field-s">Out Field</option>
                  <option value="Left-Field-s">Left Field</option>
                  <option value="Pitcher-s">Pitcher</option>
                  <option value="Relief-Closer-s">Relief Closer</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-baseball -->

            <ul class="list-inline menu-box menu-box-sports menu-box-BASKETBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-primary-BASKETBALL">

                  <option value="all">Primary Positions</option>
                  <option value="Center-p">Center</option>
                  <option value="Power-Forward-p">Power Forward</option>
                  <option value="Small-Forward-p">Small Forward</option>
                  <option value="Point-Guard-p">Point Guard</option>
                  <option value="Shooting-Guard-p">Shooting Guard</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="position-secondary-BASKETBALL">

                  <option value="all">Secondary Positions</option>
                  <option value="Center-s">Center</option>
                  <option value="Power-Forward-s">Power Forward</option>
                  <option value="Small-Forward-s">Small Forward</option>
                  <option value="Point-Guard-s">Point Guard</option>
                  <option value="Shooting-Guard-s">Shooting Guard</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="hand-BASKETBALL">

                  <option value="all">Preferred Hand</option>
                  <option value="Left">Left</option>
                  <option value="Right">Right</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-BASKETBALL -->

            <ul class="list-inline menu-box menu-box-sports menu-box-CHEERLEADING">

              <li class="list-inline-item">

                <select class="select-filter" id="position-CHEERLEADING">

                  <option value="all">Positions</option>
                  <option value="Main-base">Main base</option>
                  <option value="Secondary-base">Secondary base</option>
                  <option value="Back-spot">Back spot</option>
                  <option value="Front-spot">Front spot</option>
                  <option value="Additional-spot">Additional spot</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-CHEERLEADING -->

            <ul class="list-inline menu-box menu-box-sports menu-box-FIELD-HOCKEY">

              <li class="list-inline-item">

                <select class="select-filter" id="position-FIELD-HOCKEY">

                  <option value="all">Positions</option>
                  <option value="Centre-forward">Centre-forward</option>
                  <option value="Left-wing">Left-wing</option>
                  <option value="Right-wing">Right-wing</option>
                  <option value="Left-inside">Left-inside</option>
                  <option value="Centre-half">Centre-half</option>
                  <option value="Right-inside">Right-inside</option>
                  <option value="Left-half">Left-half</option>
                  <option value="Fullback">Fullback</option>
                  <option value="Right-half">Right-half</option>
                  <option value="Goalkeeper">Goalkeeper</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-FIELD-HOCKEY -->

            <ul class="list-inline menu-box menu-box-sports menu-box-GYMNASTICS">

              <li class="list-inline-item">

                <select class="select-filter" id="discipline-GYMNASTICS">

                  <option value="all">Disciplines</option>
                  <option value="Vault">Vault</option>
                  <option value="Uneven-bars">Uneven-bars</option>
                  <option value="Still-rings">Still-rings</option>
                  <option value="Pommel-horse">Pommel-horse</option>
                  <option value="Parallel-bars">Parallel-bars</option>
                  <option value="High-bar">High-bar</option>
                  <option value="Floor">Floor</option>
                  <option value="Balance-bean">Balance-bean</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-GYMNASTICS -->

            <ul class="list-inline menu-box menu-box-sports menu-box-ICE-HOCKEY">

              <li class="list-inline-item">

                <select class="select-filter" id="position-ICE-HOCKEY">

                  <option value="all">Positions</option>
                  <option value="Right-winger">Right-winger</option>
                  <option value="Right-defenseman">Right-defenseman</option>
                  <option value="Left-winger">Left-winger</option>
                  <option value="Left-defenseman">Left-defenseman</option>
                  <option value="Goalie">Goalie</option>
                  <option value="Center">Center</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-ICE-HOCKEY -->

            <ul class="list-inline menu-box menu-box-sports menu-box-LACROSSE">

              <li class="list-inline-item">

                <select class="select-filter" id="position-LACROSSE">

                  <option value="all">Positions</option>
                  <option value="Midfielder">Midfielder</option>
                  <option value="Goal-keeper">Goal-keeper</option>
                  <option value="Defender">Defender</option>
                  <option value="Attackers">Attackers</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-LACROSSE -->

            <ul class="list-inline menu-box menu-box-sports menu-box-ROWING">

              <li class="list-inline-item">

                <select class="select-filter" id="position-ROWING">

                  <option value="all">Positions</option>
                  <option value="Seat-1">Seat-1</option>
                  <option value="Seat-2">Seat-2</option>
                  <option value="Seat-3">Seat-3</option>
                  <option value="Seat-4">Seat-4</option>
                  <option value="Seat-5">Seat-5</option>
                  <option value="Seat-6">Seat-6</option>
                  <option value="Seat-7">Seat-7</option>
                  <option value="Seat-8">Seat-8</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-ROWING -->

            <ul class="list-inline menu-box menu-box-sports menu-box-RUGBY">

              <li class="list-inline-item">

                <select class="select-filter" id="position-RUGBY">

                  <option value="all">Positions</option>
                  <option value="Wing">Wing</option>
                  <option value="Tighthead-prop">Tighthead-prop</option>
                  <option value="Second-row">Second-row</option>
                  <option value="Scrum-half">Scrum-half</option>
                  <option value="Loosehead">Loosehead</option>
                  <option value="Hooker">Hooker</option>
                  <option value="Full-back">Full-back</option>
                  <option value="Fly half">Fly half</option>
                  <option value="Flanker">Flanker</option>
                  <option value="Center">Center</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-RUGBY -->

            <ul class="list-inline menu-box menu-box-sports menu-box-SOCCER">

              <li class="list-inline-item">

                <select class="select-filter" id="position-SOCCER">

                  <option value="all">Positions</option>
                  <option value="Striker">Striker</option>
                  <option value="Right-wing">Right-wing</option>
                  <option value="Right-back">Right-back</option>
                  <option value="Left-wing">Left-wing</option>
                  <option value="Left-back">Left-back</option>
                  <option value="Goal-keeper">Goal-keeper</option>
                  <option value="Center-midfield">Center-midfield</option>
                  <option value="Center-back">Center-back</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-SOCCER -->

            <ul class="list-inline menu-box menu-box-sports menu-box-SOFTBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-primary-SOFTBALL">

                  <option value="all">Primary Positions</option>
                  <option value="Short-Stop-p">Short-Stop</option>
                  <option value="Relief-Closer-p">Relief-Closer</option>
                  <option value="Pitcher-p">Pitcher</option>
                  <option value="Out-Field-p">Out-Field</option>
                  <option value="Left-Field-p">Left-Field</option>
                  <option value="Catcher-p">Catcher</option>
                  <option value="3rd-Base-p">3rd-Base</option>
                  <option value="2nd-Base-p">2nd-Base</option>
                  <option value="1st-Base-p">1st-Base</option>

                </select>

              </li>

              <li class="list-inline-item">

                <select class="select-filter" id="position-secondary-SOFTBALL">

                  <option value="all">Secondary Positions</option>
                  <option value="Short-Stop-s">Short-Stop</option>
                  <option value="Relief-Closer-s">Relief-Closer</option>
                  <option value="Pitcher-s">Pitcher</option>
                  <option value="Out-Field-s">Out-Field</option>
                  <option value="Left-Field-s">Left-Field</option>
                  <option value="Catcher-s">Catcher</option>
                  <option value="3rd-Base-s">3rd-Base</option>
                  <option value="2nd-Base-s">2nd-Base</option>
                  <option value="1st-Base-s">1st-Base</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-SOFTBALL -->

            <ul class="list-inline menu-box menu-box-sports menu-box-SWIMMING-AND-DIVING">

              <li class="list-inline-item">

                <select class="select-filter" id="main-event-SWIMMING-AND-DIVING">

                  <option value="all">Main Event Style</option>
                  <option value="Sidestroke">Sidestroke</option>
                  <option value="Freestyle-stroke">Freestyle-stroke</option>
                  <option value="Diving">Diving</option>
                  <option value="Butterfly">Butterfly</option>
                  <option value="Breastroke">Breastroke</option>
                  <option value="Backstroke">Backstroke</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="secondary-event-SWIMMING-AND-DIVING">

                  <option value="all">Secondary Event Style</option>
                  <option value="Sidestroke-s">Sidestroke</option>
                  <option value="Freestyle-stroke-s">Freestyle-stroke</option>
                  <option value="Diving-s">Diving</option>
                  <option value="Butterfly-s">Butterfly</option>
                  <option value="Breastroke-s">Breastroke</option>
                  <option value="Backstroke-s">Backstroke</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-SWIMMING-AND-DIVING -->

            <ul class="list-inline menu-box menu-box-sports menu-box-TENNIS">

              <li class="list-inline-item">

                <select class="select-filter" id="utr-TENNIS">

                  <option value="all">UTR</option>
                  <option value="1-10-utr">1-10 utr</option>
                  <option value="10-20-urt">10-20 utr</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="itf-TENNIS">

                  <option value="all">ITF</option>
                  <option value="1-10-itf">1-10 itf</option>
                  <option value="10-20-itf">10-20 itf</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="hand-TENNIS">

                  <option value="all">Prefered Hand</option>
                  <option value="Left">Left</option>
                  <option value="Right">Right</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="ranking-TENNIS">

                  <option value="all">National Ranking</option>
                  <option value="1-1000">1-1000</option>
                  <option value="1000-2000">1000-2000</option>
                  <option value="2000-3000">2000-3000</option>
                  <option value="3000-4000">3000-4000</option>
                  <option value="4000-5000">4000-5000</option>
                  <option value="5000-6000">5000-6000</option>
                  <option value="6000-7000">6000-7000</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-TENNIS -->

            <ul class="list-inline menu-box menu-box-sports menu-box-TRACK-AND-FIELD">

              <li class="list-inline-item">

                <select class="select-filter" id="position-TRACK-AND-FIELD">

                  <option value="all">Discipline</option>
                  <option value="Throws">Throws</option>
                  <option value="Sprints">Sprints</option>
                  <option value="Multis">Multis</option>
                  <option value="Middle-distance">Middle-distance</option>
                  <option value="Long-distance">Long-distance</option>
                  <option value="Hurdles">Hurdles</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-TRACK-AND-FIELD -->

            <ul class="list-inline menu-box menu-box-sports menu-box-VOLLEYBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-VOLLEYBALL">

                  <option value="all">Positions</option>
                  <option value="Setter">Setter</option>
                  <option value="Right-side-hitter">Right-side-hitter</option>
                  <option value="Outside-hitter">Outside-hitter</option>
                  <option value="Opposite-hitter">Opposite-hitter</option>
                  <option value="Middle-blocker">Middle-blocker</option>
                  <option value="Libero">Libero</option>
                  <option value="Defense-specialist">Defense-specialist</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-VOLLEYBALL -->

            <ul class="list-inline menu-box menu-box-sports menu-box-WATER-POLO">

              <li class="list-inline-item">

                <select class="select-filter" id="position-WATER-POLO">

                  <option value="all">Positions</option>
                  <option value="Right-wing">Right-wing</option>
                  <option value="Right-flat">Right-flat</option>
                  <option value="Point">Point</option>
                  <option value="Left-wing">Left-wing</option>
                  <option value="Left-flat">Left-flat</option>
                  <option value="Hole-set">Hole-set</option>
                  <option value="Goalkeeper">Goalkeeper</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-WATER-POLO -->

          </div>
          <!-- END "col-md-8" -->

        </div>
        <!-- END row bottom-row -->

      </section>
      <!-- END top-page-menu  -->

    </div>
    <!-- END "top-advanced-filter" -->

    <!-- TOP ADVANCED FILTER BAR ENDS -->

    <div class="row asm-index-page-content">

      <div class="col-md-12 col-lg-9 col-xl-9">

        <!-- NO DATA FOUND START -->

        <div class="no-data-found text-center d-none">
          <h3 class="no-data-title">NO MATCHED DATA FOUND! ... PLEASE CLICK RESET FILTERS & TRY AGAIN</h3>
        </div>

        <!-- NO DATA FOUND END -->

        <!-- THE FOLLOWING IS LOADING THE MEMEBERS LIST WITH JS [data-bp-list="members"]... DO NOT REMOVE -->
        <div id="members-dir-list" class="members dir-list" data-bp-list="members">

        </div><!-- #members-dir-list -->



        <!-- THE LOAD MORE STARTS -->

        <div class="text-center">
          <a id="ath-load-more-btn" class="btn btn-light btn-lg mb-5" data-page="2"
            data-url="<?php echo admin_url('admin-ajax.php'); ?>" data-univ="index">
            <span class="asm-loading pr-3"><i class="fas fa-spinner"></i></span>Load More
          </a>
        </div>

        <!-- THE LOAD MORE ENDS -->

      </div> <!-- end col-md-8 -->

      <div class="col-md-12 col-lg-3 col-xl-3">

        <div class="sidebar-container pr-3">

          <!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR START -->
          <?php
          $user_id = bp_displayed_user_id();
          $current_user = wp_get_current_user();
          $current_user_id = $current_user->ID;

          get_profile_views();
        ?>

          <section id="athlete-view-count-box" class="d-none">

            <h2 class="view-count-title pb-3">Activity Feed</h2>

            <?php 
          $users_obj = visitors_get_recent_visitors( 23, $count = 5 );
          // $users_obj = visitors_get_recent_visitors( get_current_user_id(), $count = 5 );
          // echo '<pre>';
          // print_r($users_obj);
          // echo '</pre>';
          foreach ($users_obj as $value) :
            
          // OBJECTS FROM THE RECENT VISITOR PLUGIN 
          $user_id = $value->visitor_id;
          // VARSITY NAME
          $versity_name = xprofile_get_field_data( 435, $user_id, $multi_format = 'array' );
          // VERSITY LOGO IMAGE
          $versity_logo = xprofile_get_field_data( 439, $user_id, $multi_format = 'array' );

          // GETTING USER DATA
          $user_obj = get_userdata($user_id);
          // echo '<pre>';
          // print_r($user_obj);
          // echo $user_obj->roles[0];
          // echo $user_obj->roles[1];
          // echo '</pre>';

        /**
         * ATHLETE VIEW BOX
         * Look inside ATHLETE & COACH SINGLE PROFILE in bp-global.scss file for styling
         */

         if ( !isset($user_obj->roles[0])) {
          $user_obj->roles[0] = null;
         }
         if ( !isset($user_obj->roles[1])) {
          $user_obj->roles[1] = null;
         }

         $user_role = $user_obj->roles[1];

         // CHECKING FOR COACH VIEWS
         if ( $user_role == 'coach') :
        ?>
            <div class="box-content row">
              <figure class="versity-logo col-sm-5 d-flex justify-content-center align-items-center">
                <?php echo $versity_logo; ?>
              </figure>
              <article class="text-content col-sm-7">
                <div class="icon-text-box">
                  <h4 class="icon-text">
                    <i class="fas fa-eye"></i> Viewed
                  </h4>
                </div>
                <div class="text-only-box">
                  <h5 class="text-only">
                    <?php echo $versity_name; ?> viewed <br>
                    <?php //print_r($current_user); ?>
                    <?php echo  $current_user->display_name; ?>
                  </h5>
                </div>
              </article>
            </div>

            <?php endif; ?>

            <?php endforeach; ?>

          </section> <!-- #athlete-view-count-box end -->


          <!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR END -->

          <!-- THE SIDEBAR -->
          <?php get_sidebar(); ?>
        </div>

      </div>

    </div> <!-- end row -->




  </div><!-- // .screen-content -->


</section>

<!-- SPORTS CHOICE MODAL FOR ADVANCE FILER START -->

<!-- Modal -->
<div class="modal fade" id="filterSwitchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose a Sport ...</h5>
      </div>
      <div class="modal-body">
        <div>

          <div id="modalSportsChoiceBox"></div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- SPORTS CHOICE MODAL FOR ADVANCE FILER END -->