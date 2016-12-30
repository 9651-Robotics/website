<?php include_once "common.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team 9651 Programs | UCC Robotics</title>
    <meta name="description" content="The official website for VEX Robotics team 9651, and the UCC Robotics Club.">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="section-primary">
      <div class="container">
        <div class="text-center">
          <h1>Team 9651 Programs</h1>
          <h2>Take a peek at what programs we have to offer.</h2>
        </div>
      </div>
    </div>
    <div class="section-secondary">
      <div class="container">
        <div class="row program-showcase" id="vex">
          <div class="col-sm-3">
            <img class="img-responsive img-circle" src="img/vex-logo.jpg" alt="VEX Robotics Logo"/>
          </div>
          <div class="col-sm-9">
            <h3>VEX Robotics</h3>
            <p class="lead">
              VEX Robotics is the main competition our club does every year! VEX requires robots to play a certain game to get points; this year, it's <a href="http://www.vexrobotics.com/vexedr/competition/competition-resources">VEX Starstruck</a>. Club members work together to design, build, and program robots for the competition; then, Team 9651 goes to competitions all over Ontario to compete!
            </p>
            <a href="https://github.com/9651-Robotics/2016-2017_RobotC"><span class="fa fa-github"></span> Competition Code</a>
          </div>
        </div>
        <div class="row program-showcase" id="horizons">
          <div class="col-sm-3 col-sm-push-9">
            <img class="img-responsive img-circle" src="img/mbot2.jpg" alt="A mBot, the final product created at Horizons Robotics"/>
          </div>
          <div class="col-sm-9 col-sm-pull-3">
            <h3>Horizons Robotics</h3>
            <p class="lead">
              Horizons Robotics is how Team 9651 gives back to the community. During Tuesdays after school, club members teach inner-city kids how to build and program mBots, from scratch! Normally these kids don't get a chance to go to robotics program, so Horizons Robotics is a wonderful opportunity for them to get into technology. Plus, Team 9651 members learn valuable skills such as teaching, curriculum development, and public speaking.
            </p>
          </div>
        </div>
        <div class="row program-showcase" id="workshops">
          <div class="col-sm-3">
            <img class="img-responsive img-circle" src="img/logo-circle.png" alt="The 9651 Logo"/>
          </div>
          <div class="col-sm-9">
            <h3>Workshops</h3>
            <p class="lead">
              Throughout the year, Team 9651 holds workshops to help students refine their skills, whether it be soldering, programming, or even building their very own custom robot! Workshops are designed and taught by Team 9651 members, but are open to any UCC student.
            </p>
          </div>
        </div>
        <div class="row program-showcase" id="drop-in">
          <div class="col-sm-3 col-sm-push-9">
            <img class="img-responsive img-circle" src="img/logo-circle.png" alt="The 9651 Logo"/>
          </div>
          <div class="col-sm-9 col-sm-pull-3">
            <h3>Drop-in Sessions</h3>
            <p class="lead">
              Team 9651's room (CL2) is always open after school for drop-in sessions. We understand that everybody has busy schedules, but there will always be somebody in that room to help all students interested in robotics, beginners or veterans, to learn more about robotics and technology.
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
    <script src="js/google_analytics.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
