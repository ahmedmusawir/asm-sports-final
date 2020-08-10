<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
  <section class="univ-single-asm">
    <?php if (has_post_thumbnail()) : ?>

    <figure class="featured-img-holder d-none d-md-block">
      <?php cyberize_post_thumbnail(); ?>
    </figure>

    <figure class="featured-img-holder d-md-none mt-5 pt-5">
      <?php cyberize_post_thumbnail('univ-mobile-size'); ?>
    </figure>

    <?php else : ?>

    <figure class="featured-image-box">
      <a href="<?php the_permalink(); ?>">
        <img class="attachment-featured-size size-featured-size wp-post-image"
          src="/wp-content/uploads/NO-IMG-FOUND.jpg" alt="">
      </a>
    </figure>


    <?php endif; ?>

    <div class="entry-content container-fluid">

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-8">

          <main class="main-content pb-5">
            <!-- UNIVERSITY HEADER -->
            <header class="univ-header row">

              <div class="col-md-9">

                <?php
                if ( is_singular() ) :
                  the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>

                <h3 class="sub-title">
                  <span class="text-info pl-3"><?php the_field('university_grade'); ?></span>
                </h3>
              </div>
              <div class="col-md-3">
                <figure class="university-logo mt-3">
                  <img class="img-fluid" src="<?php the_field('university_logo'); ?>" alt="">
                  <!-- <img class="img-fluid" src="/wp-content/uploads/university-logos.png" alt=""> -->
                </figure>
              </div>





            </header>

            <!-- UNIVERSITY HEADER END-->

            <!-- LEFT COL CONTENT -->
            <section class="univ-left-content">
              <h3 class="">School Data:</h3>

              <div class="row mt-5">
                <div class="col-6">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SAT Range:</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('sat_range'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">ACT Range</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('act_range'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Acceptance Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('acceptance_rate'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Graduation Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('graduation_range'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Full-Time UnderGrad Students</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('full_time_under_grad_students'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Full-Time Grad Students</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('full_time_grad_students'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Net Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('net_price'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">College Settings</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('college_settings'); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-6">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Athletic Association</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('athletic_association'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Athletic Conference</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('athletic_conference'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Athletic Division</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('athletic_division'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Male-Female UnderGrad Ratio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('male_female_under_grad_ratio'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Male-Female Grad Ratio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('male_female_grad_ratio'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Men’s Varsity Sports</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('men_versity_sports'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Women’s Varsity Sports</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('women_varsity_sports'); ?></td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">College Type</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php the_field('college_type'); ?></td>
                      </tr>
                    </tbody>

                  </table>
                </div>
              </div>
            </section>
            <!-- LEFT COL CONTENT END -->

          </main>

        </div>
        <aside id="univ-right-col" class="col-sm-12 col-md-12 col-lg-4">

          <!-- SINGLE ITEM MAP -->
          <div class="acf-map acf-map-single">

            <?php 

              $mapLocation = get_field('university_address');

            ?>
            <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>"
              data-lng="<?php echo $mapLocation['lng']; ?>">
              <h6 class=""><?php the_title(); ?></h6>
              <?php echo $mapLocation['address']; ?>
            </div>

          </div> <!-- ACF-MAP END -->

          <!-- ADDRESS BLOCK -->
          <section class="address-block">
            <h5>Address:</h5>
            <p><?php echo $mapLocation['address']; ?></p>

            <h5>Official Website:</h5>
            <p><a href="<?php the_field('website_url'); ?>"><?php the_field('website_url'); ?></a></p>

            <div class="social">
              <?php if( get_field('univ_facebook') ): ?>
              <a href="<?php get_field('univ_facebook'); ?>"><i class="fab fa-facebook-square"></i></a>
              <?php endif; ?>
              <?php if( get_field('univ_instagram') ): ?>
              <a href="<?php get_field('univ_instagram'); ?>"><i class="fab fa-instagram"></i></a>
              <?php endif; ?>
              <?php if( get_field('univ_twitter') ): ?>
              <a href="<?php get_field('univ_twitter'); ?>"><i class="fab fa-twitter"></i></a>
              <?php endif; ?>
              <?php if( get_field('univ_youtube') ): ?>
              <a href="<?php get_field('univ_youtube'); ?>"><i class="fab fa-youtube"></i></a>
              <?php endif; ?>
              <?php if( get_field('univ_linkedin') ): ?>
              <a href="<?php get_field('univ_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
              <?php endif; ?>
              <?php if( get_field('univ_google_plus') ): ?>
              <a href="<?php get_field('univ_google_plus'); ?>"><i class="fab fa-google-plus-g"></i></a>
              <?php endif; ?>
            </div>
          </section>
          <!-- ADDRESS BLOCK END -->

          <!-- BUTTON BLOCK -->
          <a href="#" data-toggle="modal" data-target="#contactCoachModal">
            <section class=" button-block text-center">
              <i class="fas fa-user-circle"></i>
              <h5>CONTACT COACH</h5>
              <!-- <h5>PROFILE NOW</h5> -->
            </section>
          </a>
          <!-- BUTTON BLOCK END -->

        </aside>
      </div> <!-- top part row end -->
    </div><!-- .entry-content -->

    <!-- MOST VIEWED ATHLETE SECTION -->

    <section id="most-viewed-athlete" class="d-none">

      <div class="container-fluid">
        <h2 class="block-title text-center">Most Viewed Athletes </h2>

        <div class="popular-athlete-list">
          <!-- <img class="img-fluid pb-5" src="/wp-content/uploads/Screen-Shot-2020-02-26-at-1.31.40-PM.png" alt=""> -->
          <?php echo do_shortcode('[bp-visitors-most-visited-users view="list" max="4" duration="30" show_visits="1"]'); ?>
        </div>
      </div>

    </section>

    <!-- MOST VIEWED ATHLETE SECTION END -->


  </section>
</article><!-- #post- -->

<!-- CONTACT COACH DROPDOWN MODAL -->

<!-- Modal -->
<div class="modal fade" id="contactCoachModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Contact Coach Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="gravity-form-shortcode">
          <?php 
            $gravity_form = get_field('university_single_contact_coach_form', 'option');
            echo do_shortcode( $gravity_form ); 
          ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>