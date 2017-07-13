 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="requests.php">Requests</a>
                    </li>

                    <li>
                        <a href="user.php">User List</a>
                    </li>

                    <li>
                        <a href="guest.php">Guest</a>
                    </li>

                    <li>
                        <a href="feedbacks.php">Feedbacks</a>
                    </li>
                   

                    <ul class="nav navbar-nav navbar-right">
                    <?php if(@$_SESSION['login'] == true){ ?>
                    <!-- <li><a href="profile.php"> <?php echo $username; ?></a></li> -->
                    <li><a href="logout.php">Logout</a></li>
                    <?php } else { ?>

                      <li><a href="loginform.php">Log-in</a></li>
                      <?php } ?>
                    </ul>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>