<?php get_header(); ?>
<section>
  <div class="container">
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <img src="img/cover_img.png" class="img-fluid cover" alt="Titán Kickboxing">
    </div>
  </div>
</section>
<section class="showcase">
  <div class="container">
    <h1> <?php bloginfo('name'); ?> </h1>
      <a class="btn btn-primary btn-lg">Read More</a>
    </section>
          <section class="boxes">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="box">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <h3>Kezdő csoport:</h3>
                    <p>
                      Central Gym
                    </p>
                    <p>
                      Kálmán Imre utca 15.
                      Hétfő és szerda
                      17:30-19:00
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box">
                    <i class="fa fa-gears" aria-hidden="true"></i>
                    <h3>Crossfit Grund</h3>
                    <p>
                      Crossfit Grund
                    </p>
                    <p>
                      Hegedűs Gyula utca 14.
                      Kedd és csütörtök
                      17:00-18:30
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <h3>Haladó csoport</h3>
                    <p>
                      Central Gym
                    </p>
                    <p>
                      Kálmán Imre utca 15.
                      Hétfő és szerda
                      17:30-19:00
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <?php get_footer(); ?>
