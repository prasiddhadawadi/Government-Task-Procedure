<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "fyp");
if(@$_SESSION['login'] == true){
    $username = $_SESSION['user'];
    $id = $_SESSION['id'];
    
    $query = mysqli_query($connect, "SELECT * FROM user_data WHERE user_id = '$id' ");
    $rows = mysqli_num_rows($query);
}


		$to = $_POST['to'];
		$date = $_POST['date'];
		$body = $_POST['body1'].$_POST['name'].$_POST['body2'].$_POST['dob'].$_POST['body3'].$_POST['pob'].$_POST['body4'];
		$name = $_POST['name'];
	
	$connect = mysqli_connect("localhost", "root", "", "fyp");


require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("lazehang", "d8d09bdcfb9df3d97587820ca1ebb9d2");
    // convert a web page and store thegenerated PDF into a $pdf variable
    $pdf = $client->convertHtml("<p>" .$to.
       $date.
       $body.
       $name.
      " </p>");

    
    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"application-letter.pdf\"");

    // send the generated PDF 
    echo $pdf;

    // else{
    // header('location:admin/guest.php');
    // }
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
finally{
      if($_SESSION['role'] == 0)
    {
    header('location:steps.php');
    exit();
    }
}
?>


    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="image/nepallogo.png" style="width:130px;height:110px" alt="">
    </header>

    <div class="container">
      <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        
        <p>
       <?php echo $to;
       echo $date;
       echo $body;
       echo $name;
     
        ?>


	


      </div>
      </div>

    </div>
