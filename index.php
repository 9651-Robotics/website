<?php include_once "common.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team 9651 | UCC Robotics</title>
    <meta name="description" content="The official website for VEX Robotics team 9651, and the UCC Robotics Club.">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="section-cover">
      <div class="container text-center">
        <h1>Team 9651 Robotics</h1>
        <img class="img-responsive header-image" src="img/logo-circle-inverse.png" alt="Team 9651's Logo" />
        <h3>Upper Canada College's Robotics Club</h3>
      </div>
    </div>
    <div class="section-secondary">
      <div class="container">
        <h2 class="text-center">So, what's our club about?</h2>
        <div class="row text-center">
          <div class="col-sm-4">
            <div class="icon-big">
              <span class="fa fa-fw fa-wrench"></span>
              <h3>Engineering</h3>
            </div>
            <p class="lead">
              Making awesome things with metal is super cool, and at Team 9651 we ensure that students are able to do so in a safe environment with great support. Students design and build their own VEX robots, learning about metal, gears, physics, along the way.
            </p>
          </div>
          <div class="col-sm-4">
            <div class="icon-big">
              <span class="fa fa-fw fa-terminal"></span>
              <h3>Programming</h3>
            </div>
            <p class="lead">
              Computers are a great power, and a great responsibility: at Team 9651, we teach students both of these things. Students program our VEX Competition Robots, teach basic programming at Horizons Robotics, and often mentor each other at workshops.
            </p>
          </div>
          <div class="col-sm-4">
            <div class="icon-big">
              <span class="fa fa-fw fa-graduation-cap"></span>
              <h3>Teaching</h3>
            </div>
            <p class="lead">
              At Team 9651, our ultimate goal is to teach students about the wonders of technology, with an emphasis on robotics. There's something for everyone, including regular club meetings, our Horizons program, workshops, or guided and self-learning resources.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section-primary">
      <div class="container">
        <h2 class="text-center">Meet some of our members!</h2>
        <div class="row text-center">
          <div class="col-sm-4">
            <a href="contact.php">
              <img class="img-responsive img-circle" src="img/matt.png" />
              <h3 class="text-white">Matthew Wang, Club Head</h3>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="contact.php">
              <img class="img-responsive img-circle" src="img/jack.jpg" />
              <h3 class="text-white">Jack Sarick, Club Head</h3>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="contact.php">
              <img class="img-responsive img-circle" src="img/john.png" />
              <h3 class="text-white">John Mace, Club Head</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section-secondary">
      <div class="container">
        <h2 class="text-center">A tour of what we do.</h2>
        <div class="row">
          <div class="col-sm-4">
            <div class="hovereffect">
              <img class="img-responsive" src="img/vex.jpg" alt="Club Members working on building our competition robot.">
              <div class="overlay">
                <h2>VEX Robotics</h2>
		            <p>
                  At VEX Robotics, we design awesome robots to compete in VEX robotics competitions.
                </p>
                <p>
                 <a href="programs.php#vex">Learn more.</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="hovereffect">
              <img class="img-responsive" src="img/mbot.jpg" alt="The mBot, one of the robots we make in the Horizons Robotics program.">
              <div class="overlay">
                <h2>Horizons Robotics</h2>
		            <p>
                  At Horizons Robotics, we teach underprivileged students how to build and code their very own robots.
                </p>
                <p>
                 <a href="programs.php#horizons">Learn more.</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="hovereffect">
              <img class="img-responsive" src="img/computers.jpg" alt="Robotics students doing some coding!">
              <div class="overlay">
                <h2>Robotics Workshops</h2>
		            <p>
                  At Robotics Workshops, club members learn a variety of skills, including coding and soldering.
                </p>
                <p>
                 <a href="programs.php#workshops">Learn more.</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-secondary">
      <div class="container text-center">
        <h2>Learn more</h2>
        <a class="btn btn-success" href="programs.php#vex">Competitions</a>
        <a class="btn btn-success" href="programs.php#horizons">Horizons</a>
        <a class="btn btn-success" href="programs.php#workshops">Workshops</a>
      </div>
    </div>
    <?php include_once "footer.php" ?>
    <script src="js/google_analytics.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
