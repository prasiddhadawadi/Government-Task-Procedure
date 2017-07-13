
   <?php 
   include "partials/head.php";
   // include "partials/nav.php";

   $conn = mysqli_connect('localhost', 'root', '', 'fyp');

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
                    <a class="navbar-brand" href="#home">Home</a>
                    </li>
                    <li>
                        <a href="index.php#img-bg">Procedure</a>
                    </li>
                   
                    <li>
                        <a href="#contact-img-start">Contact</a>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height" id="home">
        <img class="img-responsive img-center" src="image/nepallogo.png" style="width:130px;height:110px" alt="">
    </header>

    <section>
        <!-- Content Section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Now take your letter to the CDO office for further procedure.
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    Furthe steps are performed manually.
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    Thank You for using our platform.
                </div>
            </div>
        </div>
    </section>

<!--     <section>    
    <aside id="detail-img-start" class="image-bg-fixed-height"></aside>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading"></h1>
                    <p class="lead section-lead">Hello</p>
                    <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
                </div>
            </div>
        </div>
    </section> -->

    <aside id= "contact-img-start" class=""></aside>

    <section>
        <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea  id="message" name="msg" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                Setopool, Maitidevi<br>
                Kathmandu, Nepal<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Government Work Procedure</strong><br>
                <a href="mailto:#">government.work@procedure.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
    </section>


   <?php include 'partials/footer.php'; ?>

  
