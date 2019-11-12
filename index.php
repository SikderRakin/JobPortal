<?php
  //To Handle Session Variables on This Page
  session_start();
  //Including Database Connection From db.php file to avoid rewriting in all files
  require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Portal</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href=" assets/css/font-awesome.min.css">
      <link rel="stylesheet" href=" assets/css/font-awesome.min.css">
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="1st">
    
    <!-- NAVIGATION BAR -->
    <header>
      <nav class="navbar navbar-inverse " id="insidenav" role="navigation">>
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Job Portal</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
            <ul class="nav navbar-nav navbar-right">
            <?php
            //Show user dashboard link once logged in.
            if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) { 
              ?>
              <li><a href="user/dashboard.php">Dashboard</a></li>
              <li><a href="logout.php">Logout</a></li>
            <?php
              } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])) { 
              ?>
              <li><a href="company/dashboard.php">Dashboard</a></li>
              <li><a href="logout.php">Logout</a></li>
              <?php }  else { 
              //Show Login Links if no one is logged in.
            ?>
              <li><a href="company.php">Company</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
            <?php } ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>




    <section>
      <div class="container-fluid bg-img">
        <div class="row ">
          <div class="col-md-12">
            <div class=" Job-text  text-center">
              <h1 style="color:#19b330"> <strong> Job Portal </strong></h1>
              <h2 style="color:#19b330">Find Your Dream Job</h2>
              <!-- <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Register</a></p> -->
              <p><a class="btn btn-primary btn-lg" href="search.php" role="button">Search Job</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- LATEST JOB POSTS -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right hidden-xs">
                        <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                           data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary"
                                                    href="#carousel-example-generic"
                                                    data-slide="next"></a>
                    </div>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img/hire.jpg" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12 text-center">



                                                <h4>
                                                    <?php
                                                    $sql = "SELECT * FROM job_post Order By Rand() Limit 1";
                                                    $result = $conn->query($sql);
                                                    if($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <div class="">
                                                                <h3><?php echo $row['jobtitle']; ?></h3>
                                                                <p><?php echo $row['description']; ?></p>
                                                                <button class="btn btn-default">View</button>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?></h4>

                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img/hire.jpg" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12 text-center">
                                                <h4>
                                                    <?php
                                                    $sql = "SELECT * FROM job_post Order By Rand() Limit 1";
                                                    $result = $conn->query($sql);
                                                    if($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <div class="">
                                                                <h3><?php echo $row['jobtitle']; ?></h3>
                                                                <p><?php echo $row['description']; ?></p>
                                                                <button class="btn btn-default">View</button>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?></h4>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img/hire2.jpg" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12 text-center">
                                                <h4>
                                                    <?php
                                                    $sql = "SELECT * FROM job_post Order By Rand() Limit 1";
                                                    $result = $conn->query($sql);
                                                    if($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <div class="">
                                                                <h3><?php echo $row['jobtitle']; ?></h3>
                                                                <p><?php echo $row['description']; ?></p>
                                                                <button class="btn btn-default">View</button>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?></h4>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img/hire.jpg" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12 text-center">
                                                <h4>
                                                    <?php
                                                    $sql = "SELECT * FROM job_post Order By Rand() Limit 1";
                                                    $result = $conn->query($sql);
                                                    if($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <div class="">
                                                                <h3><?php echo $row['jobtitle']; ?></h3>
                                                                <p><?php echo $row['description']; ?></p>
                                                                <button class="btn btn-default">View</button>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?></h4>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img/hire2.jpg" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12 text-center">
                                                <h4>
                                                    <?php
                                                    $sql = "SELECT * FROM job_post Order By Rand() Limit 1";
                                                    $result = $conn->query($sql);
                                                    if($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <div class="">
                                                                <h3><?php echo $row['jobtitle']; ?></h3>
                                                                <p><?php echo $row['description']; ?></p>
                                                                <button class="btn btn-default">View</button>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?></h4>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="img/hire2.jpg" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-12 text-center">
                                                <h4>
                                                    <?php
                                                    $sql = "SELECT * FROM job_post Order By Rand() Limit 1";
                                                    $result = $conn->query($sql);
                                                    if($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <div class="">
                                                                <h3><?php echo $row['jobtitle']; ?></h3>
                                                                <p><?php echo $row['description']; ?></p>
                                                                <button class="btn btn-default">View</button>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?></h4>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- COMPANIES LIST -->
    <section>
      <div class="container">
        <div class="row">
          <h2 class="text-center">Companies List</h2>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="img/logo-ex-4.png" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="img/logo-ex-5.png" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="img/logo-ex-4.png" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="img/logo-ex-5.png" alt="...">
            </a>
          </div>
        </div>
      </div>
    </section>
    <footer>
        <div class="container footer-flex">
            <div class="col-md-6 col-sm-6 text-left">
                SOMETHINGS
            </div>
            <div class="col-md-6 col-sm-6 text-right">
                <div class="test"><a href="#">
                        <p>Facebook</p></a><a href="#">
                        <p>Twitter</p></a><a href="#">
                        <p>Google+</p></a><a href="#">
                        <p>Github</p></a><a href="#">
                        <p>Dribble</p></a><a href="#">
                        <p>CodePen</p></a></div>
            </div>

        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(function() {
        var maxHeight = 0;

        $(".fixHeight").each(function() {
          maxHeight = ($(this).height() > maxHeight ? $(this).height() : maxHeight);
        });

        $(".fixHeight").height(maxHeight);
      });
    </script>
  </body>
</html>