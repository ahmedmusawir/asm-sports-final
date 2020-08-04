<?php 
$user_id = bp_displayed_user_id();
$sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );

 // SPORTS STATS

 // COMMON ONES
 $ncaa_id = xprofile_get_field_data( 131, $user_id, $multi_format = 'array' );
 $naia_id = xprofile_get_field_data( 132, $user_id, $multi_format = 'array' );
 $achievement_summary = xprofile_get_field_data( 133, $user_id, $multi_format = 'array' );
 $award_press = xprofile_get_field_data( 335, $user_id, $multi_format = 'array' );
 $reference = xprofile_get_field_data( 336, $user_id, $multi_format = 'array' );



// BASKETBALL
$basketball_team_name = xprofile_get_field_data( 201, $user_id, $multi_format = 'array' );
$basketball_league_name = xprofile_get_field_data( 202, $user_id, $multi_format = 'array' );
$basketball_preferred_hand = xprofile_get_field_data( 203, $user_id, $multi_format = 'array' );
$basketball_primary_position = xprofile_get_field_data( 206, $user_id, $multi_format = 'array' );
$basketball_secondary_position = xprofile_get_field_data( 207, $user_id, $multi_format = 'array' );

// BOWLING
$bowling_team_name = xprofile_get_field_data( 194, $user_id, $multi_format = 'array' );
$bowling_league_name = xprofile_get_field_data( 195, $user_id, $multi_format = 'array' );
$bowling_preferred_hand = xprofile_get_field_data( 196, $user_id, $multi_format = 'array' );

// CHEERLEADING
$cheerleading_team_name = xprofile_get_field_data( 179, $user_id, $multi_format = 'array' );
$cheerleading_league_name = xprofile_get_field_data( 180, $user_id, $multi_format = 'array' );
$cheerleading_position = xprofile_get_field_data( 181, $user_id, $multi_format = 'array' );

// CROSS COUNTRY
$cross_country_team_name = xprofile_get_field_data( 189, $user_id, $multi_format = 'array' );

// CYCLING
$cycling_team_name = xprofile_get_field_data( 187, $user_id, $multi_format = 'array' );

// E-SPORTS 
$e_sports_league_name = xprofile_get_field_data( 317, $user_id, $multi_format = 'array' );
$e_sports_preferred_game = xprofile_get_field_data( 318, $user_id, $multi_format = 'array' );
$e_sports_global_rankings = xprofile_get_field_data( 319, $user_id, $multi_format = 'array' );
$e_sports_national_rankings = xprofile_get_field_data( 320, $user_id, $multi_format = 'array' );

// EQUESTRIAN
$equestrian_team_name = xprofile_get_field_data( 188, $user_id, $multi_format = 'array' );

// FENCING
$fencing_team_name = xprofile_get_field_data( 182, $user_id, $multi_format = 'array' );

// FIELD HOCKY
$field_hockey_team_name = xprofile_get_field_data( 185, $user_id, $multi_format = 'array' );

// GOLF
$golf_handicap = xprofile_get_field_data( 301, $user_id, $multi_format = 'array' );
$golf_wagr = xprofile_get_field_data( 302, $user_id, $multi_format = 'array' );
$golf_national_ranking = xprofile_get_field_data( 303, $user_id, $multi_format = 'array' );
$golf_lowest_competitive_round = xprofile_get_field_data( 304, $user_id, $multi_format = 'array' );
$golf_club_distances = xprofile_get_field_data( 305, $user_id, $multi_format = 'array' );
$golf_preferred_hand = xprofile_get_field_data( 306, $user_id, $multi_format = 'array' );

// GYMNASTICS 
$gymnastics_team_name = xprofile_get_field_data( 199, $user_id, $multi_format = 'array' );
$gymnastics_disciplines = xprofile_get_field_data( 200, $user_id, $multi_format = 'array' );

// ICE HOCKEY
$ice_hockey_team_name = xprofile_get_field_data( 149, $user_id, $multi_format = 'array' );
$ice_hockey_league_name = xprofile_get_field_data( 150, $user_id, $multi_format = 'array' );
$ice_hockey_position = xprofile_get_field_data( 151, $user_id, $multi_format = 'array' );

// LACROSSE  
$lacrosse_team_name = xprofile_get_field_data( 143, $user_id, $multi_format = 'array' );
$lacrosse_league_name = xprofile_get_field_data( 144, $user_id, $multi_format = 'array' );
$lacrosse_position = xprofile_get_field_data( 145, $user_id, $multi_format = 'array' );

// RIFLE 
$rifle_team_name = xprofile_get_field_data( 183, $user_id, $multi_format = 'array' );

// ROWING 
$rowing_team_name = xprofile_get_field_data( 140, $user_id, $multi_format = 'array' );
$rowing_league_name = xprofile_get_field_data( 141, $user_id, $multi_format = 'array' );
$rowing_position = xprofile_get_field_data( 142, $user_id, $multi_format = 'array' );

// RUGBY 
$rugby_team_name = xprofile_get_field_data( 192, $user_id, $multi_format = 'array' );
$rugby_position = xprofile_get_field_data( 193, $user_id, $multi_format = 'array' );

// SAILING 
$sailing_team_name = xprofile_get_field_data( 184, $user_id, $multi_format = 'array' );

// SOCCER 
$soccer_team_name = xprofile_get_field_data( 137, $user_id, $multi_format = 'array' );
$soccer_league_name = xprofile_get_field_data( 138, $user_id, $multi_format = 'array' );
$soccer_position = xprofile_get_field_data( 139, $user_id, $multi_format = 'array' );

// SOFTBALL 
$softball_team_name = xprofile_get_field_data( 212, $user_id, $multi_format = 'array' );
$softball_league_name = xprofile_get_field_data( 213, $user_id, $multi_format = 'array' );
$softball_primary_position = xprofile_get_field_data( 214, $user_id, $multi_format = 'array' );
$softball_secondary_position = xprofile_get_field_data( 215, $user_id, $multi_format = 'array' );

// SWIMMING & DIVING  
$swimming_main_event_style = xprofile_get_field_data( 309, $user_id, $multi_format = 'array' );
$swimming_secondary_event_style = xprofile_get_field_data( 310, $user_id, $multi_format = 'array' );

// TENNIS 
$tennis_utr = xprofile_get_field_data( 311, $user_id, $multi_format = 'array' );
$tennis_itf = xprofile_get_field_data( 312, $user_id, $multi_format = 'array' );
$tennis_preferred_hand = xprofile_get_field_data( 313, $user_id, $multi_format = 'array' );
$tennis_national_ranking = xprofile_get_field_data( 316, $user_id, $multi_format = 'array' );

// TRACK & FILED 
$track_field_iaaf_ranking = xprofile_get_field_data( 321, $user_id, $multi_format = 'array' );
$track_field_national_ranking = xprofile_get_field_data( 322, $user_id, $multi_format = 'array' );
$track_field_discipline = xprofile_get_field_data( 323, $user_id, $multi_format = 'array' );

// US FOOTBALL 
$us_football_team_name = xprofile_get_field_data( 134, $user_id, $multi_format = 'array' );
$us_football_league_name = xprofile_get_field_data( 135, $user_id, $multi_format = 'array' );
$us_football_position = xprofile_get_field_data( 136, $user_id, $multi_format = 'array' );
$us_football_40_yard_dash = xprofile_get_field_data( 46, $user_id, $multi_format = 'array' );

// VOLLEYBALL 
$volleyball_team_name = xprofile_get_field_data( 146, $user_id, $multi_format = 'array' );
$volleyball_league_name = xprofile_get_field_data( 147, $user_id, $multi_format = 'array' );
$volleyball_position = xprofile_get_field_data( 148, $user_id, $multi_format = 'array' );

// WATER POLO 
$water_polo_team_name = xprofile_get_field_data( 190, $user_id, $multi_format = 'array' );
$water_polo_position = xprofile_get_field_data( 191, $user_id, $multi_format = 'array' );

// WRESTLING
$wrestling_team_name = xprofile_get_field_data( 186, $user_id, $multi_format = 'array' );
 
?>

<section id="sports-stats-section">

  <h1 class="block-header">
    <!-- <i class="fas fa-trophy"></i> Sports Stats -->
    <img src="/wp-content/uploads/sports-info-icon-1.png" class="pb-2" alt=""> Sports Stats
  </h1>
  <!-- <h5>Sports (REMOVE THIS): <?php echo $sport; ?></h5> -->

  <div class="table-responsive">
    <table class="table">
      <tbody>
        <tr>
          <th scope="row">NCAA Clearinghouse ID #:</th>
          <td><?php echo $ncaa_id; ?></td>
        </tr>
        <tr>
          <th scope="row">NAIA Clearinghouse ID #:</th>
          <td><?php echo $naia_id ?></td>
        </tr>

        <!-- BASEBALL -->
        <?php if ($sport == 'BASEBALL') : ?>

        <?php 
        // BASEBALL
        $baseball_team_name = xprofile_get_field_data( 208, $user_id, $multi_format = 'array' );
        $baseball_league_name = xprofile_get_field_data( 209, $user_id, $multi_format = 'array' );
        $baseball_primary_position = xprofile_get_field_data( 210, $user_id, $multi_format = 'array' );
        $baseball_secondary_position = xprofile_get_field_data( 211, $user_id, $multi_format = 'array' );
        ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $baseball_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $baseball_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Primary Position:</th>
          <td><?php echo $baseball_primary_position; ?></td>
        </tr>
        <tr>
          <th scope="row">Secondary Position:</th>
          <td><?php echo $baseball_secondary_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- BASKETBALL -->
        <?php if ($sport == 'BASKETBALL') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $basketball_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $basketball_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Primary Position:</th>
          <td><?php echo $basketball_primary_position; ?></td>
        </tr>
        <tr>
          <th scope="row">Secondary Position:</th>
          <td><?php echo $basketball_secondary_position; ?></td>
        </tr>
        <tr>
          <th scope="row">Preferred Hand:</th>
          <td><?php echo $basketball_preferred_hand; ?></td>
        </tr>

        <?php endif; ?>

        <!-- BOWLING -->
        <?php if ($sport == 'BOWLING') : ?>

        <?php 
        // BOWLING
        $bowling_team_name = xprofile_get_field_data( 194, $user_id, $multi_format = 'array' );
        $bowling_league_name = xprofile_get_field_data( 195, $user_id, $multi_format = 'array' );
        $bowling_preferred_hand = xprofile_get_field_data( 196, $user_id, $multi_format = 'array' );

        ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $bowling_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $bowling_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Preferred Hand:</th>
          <td><?php echo $bowling_preferred_hand; ?></td>
        </tr>


        <?php endif; ?>

        <!-- CHEERLEADING -->
        <?php if ($sport == 'CHEERLEADING') : ?>

        <?php 
        // CHEERLEADING
        $cheerleading_team_name = xprofile_get_field_data( 179, $user_id, $multi_format = 'array' );
        $cheerleading_league_name = xprofile_get_field_data( 180, $user_id, $multi_format = 'array' );
        $cheerleading_position = xprofile_get_field_data( 181, $user_id, $multi_format = 'array' );

        ?>
        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $cheerleading_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $cheerleading_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $cheerleading_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- CROSS COUNTRY -->
        <?php if ($sport == 'CROSS COUNTRY') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $cross_country_team_name; ?></td>
        </tr>

        <?php endif; ?>

        <!-- CYCLING -->
        <?php if ($sport == 'CYCLING') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $cycling_team_name; ?></td>
        </tr>


        <?php endif; ?>

        <!-- E-SPORTS -->
        <?php if ($sport == 'E-SPORTS') : ?>

        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $e_sports_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Preferred Game:</th>
          <td><?php echo $e_sports_preferred_game; ?></td>
        </tr>
        <tr>
          <th scope="row">Global Ranking:</th>
          <td><?php echo $e_sports_global_rankings; ?></td>
        </tr>
        <tr>
          <th scope="row">National Rankings:</th>
          <td><?php echo $e_sports_national_rankings; ?></td>
        </tr>

        <?php endif; ?>

        <!-- EQUESTRAINS -->
        <?php if ($sport == 'EQUESTRAIN') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $equestrian_team_name; ?></td>
        </tr>

        <?php endif; ?>

        <!-- FENCING -->
        <?php if ($sport == 'FENCING') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $fencing_team_name; ?></td>
        </tr>

        <?php endif; ?>

        <!-- FIELD HOCKEY -->
        <?php if ($sport == 'FIELD HOCKEY') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $field_hockey_team_name; ?></td>
        </tr>

        <?php endif; ?>

        <!-- GOLF -->
        <?php if ($sport == 'GOLF') : ?>

        <tr>
          <th scope="row">Handicap:</th>
          <td><?php echo $golf_handicap; ?></td>
        </tr>
        <tr>
          <th scope="row">WAGR:</th>
          <td><?php echo $golf_wagr; ?></td>
        </tr>
        <tr>
          <th scope="row">National Ranking:</th>
          <td><?php echo $golf_national_ranking; ?></td>
        </tr>
        <tr>
          <th scope="row">Lowest Competitive Round:</th>
          <td><?php echo $golf_lowest_competitive_round; ?></td>
        </tr>
        <tr>
          <th scope="row">Club Distances:</th>
          <td><?php echo $golf_club_distances; ?></td>
        </tr>
        <tr>
          <th scope="row">Preferred Hand:</th>
          <td><?php echo $golf_preferred_hand; ?></td>
        </tr>

        <?php endif; ?>

        <!-- GYMNASTICS -->
        <?php if ($sport == 'GYMNASTICS') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $gymnastics_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Disciplines:</th>
          <td><?php echo $gymnastics_disciplines; ?></td>
        </tr>

        <?php endif; ?>

        <!-- ICE HOCKEY -->
        <?php if ($sport == 'ICE HOCKEY') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $ice_hockey_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $ice_hockey_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $ice_hockey_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- LACROSSE -->
        <?php if ($sport == 'LACROSSE') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $lacrosse_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $lacrosse_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $lacrosse_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- RIFLE -->
        <?php if ($sport == 'RIFLE') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $rifle_team_name; ?></td>
        </tr>

        <?php endif; ?>

        <!-- ROWING -->
        <?php if ($sport == 'ROWING') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $rowing_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $rowing_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $rowing_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- RUGBY -->
        <?php if ($sport == 'RUGBY') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $rugby_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $rugby_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- SAILING -->
        <?php if ($sport == 'SAILING') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $sailing_team_name; ?></td>
        </tr>

        <?php endif; ?>

        <!-- SOCCER -->
        <?php if ($sport == 'SOCCER') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $soccer_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $soccer_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $soccer_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- SOFTBALL -->
        <?php if ($sport == 'SOFTBALL') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $softball_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $softball_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Primary Position:</th>
          <td><?php echo $softball_primary_position; ?></td>
        </tr>
        <tr>
          <th scope="row">Secondary Position:</th>
          <td><?php echo $softball_secondary_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- SWIMMING & DIVING -->
        <?php if ($sport == 'SWIMMING AND DIVING') : ?>

        <tr>
          <th scope="row">Main Event Style:</th>
          <td><?php echo $swimming_main_event_style; ?></td>
        </tr>
        <tr>
          <th scope="row">Secondary Event Style:</th>
          <td><?php echo $swimming_secondary_event_style; ?></td>
        </tr>

        <?php endif; ?>

        <!-- TENNIS -->
        <?php if ($sport == 'TENNIS') : ?>

        <tr>
          <th scope="row">UTR:</th>
          <td><?php echo $tennis_utr; ?></td>
        </tr>
        <tr>
          <th scope="row">ITF:</th>
          <td><?php echo $tennis_itf; ?></td>
        </tr>
        <tr>
          <th scope="row">Preferred Hand:</th>
          <td><?php echo $tennis_preferred_hand; ?></td>
        </tr>
        <tr>
          <th scope="row">National Ranking:</th>
          <td><?php echo $tennis_national_ranking; ?></td>
        </tr>

        <?php endif; ?>

        <!-- TRACK & FIELD -->
        <?php if ($sport == 'TRACK AND FIELD') : ?>

        <tr>
          <th scope="row">IAAF:</th>
          <td><?php echo $track_field_iaaf_ranking; ?></td>
        </tr>
        <tr>
          <th scope="row">National Ranking:</th>
          <td><?php echo $track_field_national_ranking; ?></td>
        </tr>
        <tr>
          <th scope="row">Discipline:</th>
          <td><?php echo $track_field_discipline; ?></td>
        </tr>

        <?php endif; ?>

        <!-- US FOOTBALL -->
        <?php if ($sport == 'US FOOTBALL') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $us_football_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $us_football_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $us_football_position; ?></td>
        </tr>
        <tr>
          <th scope="row">40 Yard Dash:</th>
          <td><?php echo $us_football_40_yard_dash; ?></td>
        </tr>

        <?php endif; ?>

        <!-- VOLLEYBALL -->
        <?php if ($sport == 'VOLLEYBALL') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $volleyball_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">League Name:</th>
          <td><?php echo $volleyball_league_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $volleyball_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- WATER POLO -->
        <?php if ($sport == 'WATER POLO') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $water_polo_team_name; ?></td>
        </tr>
        <tr>
          <th scope="row">Position:</th>
          <td><?php echo $water_polo_position; ?></td>
        </tr>

        <?php endif; ?>

        <!-- WRESTLING -->
        <?php if ($sport == 'WRESTLING') : ?>

        <tr>
          <th scope="row">Team Name:</th>
          <td><?php echo $wrestling_team_name; ?></td>
        </tr>

        <?php endif; ?>

      </tbody>
    </table>
    <!-- SPORTS STATS TABLE END -->
  </div>
  <hr>
  <h5 class="sports-stats-title">
    Sport Achievement Summary
  </h5>

  <p class="text-content">
    <?php echo $achievement_summary; ?>
  </p>
  <hr>

  <h5 class="sports-stats-title">
    Awards & Press
  </h5>

  <p class="text-content">
    <?php echo $award_press; ?>
  </p>
  <hr>

  <h5 class="sports-stats-title">
    References
  </h5>

  <article class="text-content">
    <?php echo $reference; ?>
  </article>

</section>