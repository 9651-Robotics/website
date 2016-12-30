<?php include_once "common.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team 9651 Member Center | UCC Robotics</title>
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
        <h1 class="text-center">Team 9651 Member Page</h1>
      </div>
    </div>
    <?php if (isset($_SESSION["user"])){ ?>
      <?php
        // string declarations
        $timestamp = getdate();
        $date = (string) $timestamp['year'] .  "-" . (string) $timestamp['mon'] . "-" . (string) $timestamp['mday'];
        $day = (string) $timestamp['weekday'] . " " . (string) $timestamp['month'] .  " " . (string) $timestamp['mday'] . " " . (string) $timestamp['year'];
      ?>
      <div class="section-secondary">
        <div class="container">
          <h2>Welcome back, <?php echo $_SESSION["user"]["email"] ?></h2>
          <h3>Today is <b><?php echo $day; ?></b></h3>
  				<?php if(isset($_SESSION['checkedIn']) && $_SESSION['checkedIn'] == $date){ ?>
  					<h5>You've already checked in today!</h5>
  				<?php } else { ?>
  				<form action="attendance.php" method="POST">
  					<div class="input-group">
  						<input type="text" id="attendance_code" name="attendance_code" class="form-control" placeholder="Blank Space." required="">
  						<span class="input-group-btn">
  							<button class="btn btn-success" type="submit" id="submitbutton" value="Login">Check in <span class="fa fa-check"></span></button>
  						</span>
  					</div>
  				</form>
  				<?php } ?>
          <?php if($_SESSION['user']['admin'] === "1"){ ?>
            <?php
              $query = "SELECT * FROM attendance WHERE email='code@robotics.ucc.on.ca';";

            	try
            	{
            		$stmt = $db->prepare($query);
            		$stmt->execute();
            	}

            	catch(PDOException $ex)
            	{
            		die("Failed to run query: " . $ex->getMessage());
            	}

            	$code_info = $stmt->fetch();
            	$today_code = $code_info['date'];
            ?>
    			<p>
            Oh wow, you're an admin! Here's what you can do as an admin:
          </p>
          <form action="attendanceadmin.php" method="POST">
  					<div class="row">
  						<div class="col-sm-4">
  							<h4>The current code is: <b><?php echo $today_code; ?></b></h4>
  						</div>
  						<div class="col-sm-8">
  							<div class="input-group">
  								<input type="text" id="new_code" name="new_code" class="form-control" placeholder="Blank Space." required="">
  								<span class="input-group-btn">
  									<button class="btn btn-success" type="submit" id="submitbutton" value="Login">Set New Code</button>
  								</span>
  							</div>
  						</div>
  					</div>
  				</form>
    			<?php } ?>
          <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
      </div>
    <?php } else { ?>
    <div class="section-secondary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2>Sign In</h2>
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="sign-in-email">Email</label>
                <input type="email" class="form-control" id="sign-in-email" name="email" required="" autofocus="">
              </div>
              <div class="form-group">
                <label for="sign-in-password">Password</label>
                <input type="password" class="form-control" id="sign-in-password" name="password" required="">
              </div>
              <button class="btn btn-lg btn-success btn-block" type="submit" value="Sign In">Sign In</button>
      			</form>
          </div>
          <div class="col-sm-6">
            <h2>Register</h2>
            <form action="register.php" method="POST">
              <div class="form-group">
                <label for="register-email">Email</label>
                <input type="email" class="form-control" id="register-email" name="email" required="">
              </div>
              <div class="form-group">
                <label for="register-password">Password</label>
                <input type="password" class="form-control" id="register-password" name="password" required="">
              </div>
              <div class="form-group">
                <label for="register-password">Confirm Password</label>
                <input type="password" class="form-control" id="register-password2" name="password2" required="">
              </div>
              <button class="btn btn-lg btn-success btn-block" type="submit" value="Register">Register</button>
      			</form>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php include_once "footer.php" ?>
    <script src="js/google_analytics.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
