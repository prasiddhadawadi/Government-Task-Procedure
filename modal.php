   <!DOCTYPE html>
   <html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:white;" style="text-align:justify;">


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
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#img-bg">Procedure</a>
                    </li>

                    <li>
                        <a href="#detail-img-start">Detail</a>
                    </li>
                    <li>
                
                    </li>

                    <li>
                        <a href="form.php">Requirements</a>
                    </li>
                    
                    <li>
                        <a href="#contact-img-start">Contact</a>
                    </li>

                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Log-in</a></li>
                    </ul>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Stack One</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
        <p>One fine body…</p>
        <p>One fine body…</p>
        <input class="form-control" data-tabindex="1" type="text">
        <input class="form-control" data-tabindex="2" type="text">
        <button class="btn btn-default" data-toggle="modal" href="#stack2">Launch modal</button>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
        <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
     
    <div id="stack2" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Stack Two</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
        <p>One fine body…</p>
        <input class="form-control" data-tabindex="1" type="text">
        <input class="form-control" data-tabindex="2" type="text">
        <button class="btn btn-default" data-toggle="modal" href="#stack3">Launch modal</button>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
        <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
     
    <div id="stack3" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Stack Three</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
        <input class="form-control" data-tabindex="1" type="text">
        <input class="form-control" data-tabindex="2" type="text">
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
        <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
   </body>
   </html>