 <?php 
   include "partials/head.php";
   // include "partials/nav.php";

    $connect = mysqli_connect("localhost", "root", "", "fyp");
    $user = mysqli_query($connect, "SELECT * FROM user_data where user_id = '$id' ")->fetch_assoc(); 
    
    $letter = (mysqli_query($connect, "SELECT * FROM letter LIMIT 1"))->fetch_assoc();

   ?>
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
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                    <a class="navbar-brand" href="index.php">Home</a>
                    </li>
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
            <script type="text/javascript">
                function scrollNav() {
  $('.nav a').click(function(){  
    //Toggle Class
    $(".active").removeClass("active");      
    $(this).closest('li').addClass("active");
    var theClass = $(this).attr("class");
    $('.'+theClass).parent('li').addClass('active');
    //Animate
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 160
    }, 400);
    return false;
  });
  $('.scrollTop a').scrollTop();
}
scrollNav();
            </script>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   <div class="container">
  <div class="jumbotron">
                
                <h1>
                    Letter
                </h1>
            
            </div>
             <form role="form" action="newletter.php" method="post">
                <div class="form-group">
                  
                    <input class="form-control" id="exampleInputEmail1" name="to" value="<?php echo $letter['receiver']; ?>" type="hidden">
                    
                </div>
                <div class="form-group">
                  
                    <input class="form-control" id="exampleInputEmail1" name="date" value="Ref. Date: <?php echo date('Y-m-d'); ?><br/>" type="hidden">
                    
                </div>

                <div class="form-group">
                  
                    <textarea class="form-control" name="body1" style="display:none;"><?php echo $letter['body1']; ?></textarea>
                    <textarea class="form-control" name="body2" style="display:none;"><?php echo $letter['body2']; ?></textarea>
                    <textarea class="form-control" name="body3" style="display:none;"><?php echo $letter['body3']; ?></textarea>
                    <textarea class="form-control" name="body4" style="display:none;"><?php echo $letter['body4']; ?></textarea>

                    
                </div>

                <div class="form-group">
                     
                    <label for="exampleInputEmail1">
                        Name
                    </label>
                    <input class="form-control" id="exampleInputEmail1" value="<?php echo $user['name'] ?>" name="name" type="text" required>
                    
                </div>

                <div class="form-group">
                     
                    <label for="exampleInputEmail1">
                        Date Of Birth
                    </label>
                    <input class="form-control" id="exampleInputEmail1" value="<?php echo $user['dob'] ?>" name="dob" type="date" required>
                    
                </div>

                <div class="form-group">
                     
                    <label for="exampleInputEmail1">
                       Place of Birth
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="pob" value="<?php echo $user['pob'] ?>" type="">
                    
                </div>
               
                
                 
                <button type="submit" name="submit" class="btn btn-default">
                    Submit & Generate
                </button>
            </form>
            <br/>
            <a href="steps.php">
                <button class="btn btn-success">
                    Next Step
                </button></a>
            </div>

 <?php include 'partials/footer.php'; ?>
