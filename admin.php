<?php
include 'partials/head.php';
include 'partials/nav.php';

?>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php#img-bg">Procedure</a>
                    </li>
                   
                    <li>
                        <a href="index.php#contact-img-start">Contact</a>
                    </li>

                    <ul class="nav navbar-nav navbar-right">
                    <?php if(@$_SESSION['login'] == true){ ?>
                    <li><a href="profile.php"> <?php echo $username; ?></a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php } else { ?>

                      <li><a href="loginform.php">Log-in</a></li>
                      <?php } ?>
                    </ul>
                </ul>
            </div>
            </div>
    </nav>

            <div class="container">
        <div class="jumbotron">
            
                <h1>
                    Login
                </h1>
                <a href="register.php" class="btn btn-primary">Sign up</a>
            </div>
            <form role="form" action="login.php" method="post">
                <div class="form-group">
                     
                    <label for="exampleInputEmail1">
                        Username
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="email" type="">
                    
                </div>
                <div class="form-group">
                     
                    <label for="exampleInputPassword1">
                        Password
                    </label>
                    <input class="form-control" id="exampleInputPassword1" name="password" type="password">
                    
                </div>
                
                 
                <button type="submit" name="submit" class="btn btn-default">
                    Submit
                </button>

        </form> 
        </div>
