<?php
include 'conn.php';
session_start();
?>
<!DOCTYPE html>

<html lang="en">
        <head>
        <meta charset="utf-8" />
        <title></title>

    <!-- Latest compiled and minified CSS -->
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

    <!-- Optional theme -->
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

        

    </head>
    <body>
        <div class="container">
            <div class="container">
                <i class="fa fa-university fa-5x" style="margin-left: 46%; margin-top: 10%"></i>
                <h1 style="font-family: 'Poiret One', cursive; margin-top: 1%; margin-left: 37.1%;" >Swiss Bangla Bank</h1>
            </div>
            
            <form action="checklogin.php" method="post" class="form-horizontal jumbotron" style="margin-top: 27px;">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">User Name&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="username">
                </div>
              </div>
              <div class="form-group">
                
                <label for="inputPassword3" class="col-sm-2 control-label">Password&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Sign in</button>
                </div>
              </div>
            </form>
        </div>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>

