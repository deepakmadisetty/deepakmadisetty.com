<?php include( "login.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        body{
            color: #f3eedf;
        }
        .navbar-brand {
            font-size: 2em;
        }
        #home {
            background-image: url("/images/rsz_secret.jpg");
            background-size: cover;
        }
        .contentContainer {
            width: 100%;
        }
        .topRow {
            margin-top: 70px;
            text-align: center;
        }
        .topRow h1 {
            font-size: 300%;
        }
        .marginTop {
            margin-top: 30px;
        }
        .marginBottom {
            margin-bottom: 30px;
        }
        .center {
            text-align: center;

        }
        .title {
            margin-top: 100px;
        }
        .alert {
                margin-top:20px;
        }
        label{
            color:#f3eedf;
        }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-default navbar-fixed-top">

        <div class="container">

            <div class="navbar-header">

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">Secret Diary</a>

            </div>

            <div class="collapse navbar-collapse">
                <form class="navbar-form navbar-right" method="post">
                    <div class="form-group">

                        <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />

                    </div>

                    <div class="form-group">

                        <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />

                    </div>

                    <input type="submit" name="submit" class="btn btn-success" value="Log In">

                </form>


            </div>
        </div>

    </div>

    <div class="container contentContainer" id="home">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="topRow">

                <div class="topRow">

                    <h1 class="marginTop">Secret Diary</h1>
                    <p class="lead">Your own private dairy, with you wherever you go!</p>
                    <?php

 			 	      if ($error) {

 			 		     echo '<div class="alert alert-danger">'.addslashes($error).'</div>';

 			 	      }

                      if ($message) {

 			 		     echo '<div class="alert alert-success">'.addslashes($message).'</div>';

 			 	      }

                    ?>
                    <p class="bold marginTop">Interested? Sign Up Below!</p>

                </div>
                <form class="marginTop form-horizontal" method="post">

                    <div class="form-group">
                        <label for="first_name" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<? echo addslashes($_POST['first_name']); ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<? echo addslashes($_POST['last_name']); ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="<? echo addslashes($_POST['email']); ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="center">
                            <input type="submit" name="submit" class="btn btn-success btn-lg" value="Sign Up" />
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        $(".contentContainer").css("min-height", $(window).height());
    </script>
</body>

</html>
