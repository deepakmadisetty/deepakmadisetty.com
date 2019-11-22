<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Weather Predictor</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <style>
            html, body {
            height: 100%;
            font-family: 'Open Sans', sans-serif;
            }
            .container {
            background-image: url("weatherbackground.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            padding-top: 100px;
            }
            .center {
            text-align: center;
            }
            .white {
            color:white;
            }
            p {
            padding-top:10px;
            padding-bottom:10px;
            }
            button {
            margin-top:10px;
            }
            .alert{
                margin-top:20px;
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="center">
                        <h1 class="white">Weather App</h1>
                        <p class="lead white">Enter your city below to get a forecast of the weather</p>
                        <form method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" id="city" placeholder="Eg: Houston, London, Paris ..." />
                            </div>
                            <!--input type="submit" id="find" class="btn btn-success" value="Find my weather" /-->
                            <button id="find" class="btn btn-success">Find my weather</button>
                        </form>
                        <div id="success" class="alert alert-success center"></div>
                        <div id="fail"class="alert alert-danger center">Please enter a valid city name !</div>
                        <div id="noCity" class="alert alert-danger center">Please enter a city !</div>
                    </div>
                </div>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript">

            $("#find").click( function(event) {
                event.preventDefault();
                $(".alert").hide();
                if($("#city").val() != "")
                {
                    $.get("scrapper.php?city="+$("#city").val(), function(data) {

                        if(data == "")
                        {
                            $("#fail").fadeIn();
                        }

                        else
                        {
                            $("#success").html(data).fadeIn();
                        }

                    });
                }

                else
                {
                    $("#noCity").fadeIn();
                }

            });

        </script>

    </body>
</html>
