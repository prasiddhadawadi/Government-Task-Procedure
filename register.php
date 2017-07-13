<?php



include 'partials/head.php';
$connect = mysqli_connect("localhost", "root", "", "fyp");

if (isset($_POST['submit'])){
  $username = $_POST['username'];
$user = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
echo mysqli_num_rows($user);
if(mysqli_num_rows($user) === 0)
{
 
	$password = md5($_POST['password']);

$result = mysqli_query($connect, "INSERT INTO users (username, password) VALUES ('$username' , '$password')");
$result2 = mysqli_query($connect, "SELECT * FROM users WHERE username= '$username'")->fetch_assoc();

$id = $result2['id'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$pob = $_POST['pob'];
$p_citi = $_POST['p_citi'];


$pp = $_POST['pp'];
$bc = $_POST['bc'];
$cdo = $_POST['cdo'];

$target_dir = "uploads/";
$bc_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["bc_file"]["name"]);
$pp_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["pp_file"]["name"]);
$cdo_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["cdo_file"]["name"]);
$p_citi_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["p_citi_file"]["name"]);

$result3 = mysqli_query($connect, "INSERT INTO user_data (name, dob, pob, parents_citizenship, passport_size_photo, birth_certificate, cdo_approval, user_id, bc_file, pp_file, cdo_file, p_citi_file) VALUES ('$name', '$dob', '$pob', '$p_citi', '$pp', '$bc', '$cdo', '$id', '$bc_file', '$pp_file', '$cdo_file', '$p_citi_file')");
var_dump($result3);

if($result3)
{
	move_uploaded_file($_FILES["bc_file"]["tmp_name"], $bc_file);
	move_uploaded_file($_FILES["pp_file"]["tmp_name"], $pp_file);
	move_uploaded_file($_FILES["cdo_file"]["tmp_name"], $cdo_file);
	move_uploaded_file($_FILES["p_citi_file"]["tmp_name"], $p_citi_file);


	 $_SESSION['user'] = $username;
 	$_SESSION['id'] = $id;
	 $_SESSION['login'] = true;
header("location:index.php");
}

}
else{

  $_SESSION['error'] = "username alread exists";
  
}
}

// include 'partials/nav.php';

?>


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
        <!-- /.container -->
    </nav>
    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="image/nepallogo.png" style="width:130px;height:110px" alt="">
    </header>
   <?php if(isset($_SESSION['error']))
   {
        ?>
        <span class="text-danger text-center"><h3><?php echo $_SESSION['error']; ?></h3></span>
        <?php
        unset($_SESSION['error']);
   } ?>
    <!-- Content Section -->
 	<section>
 		<div class="container">
 			<div class="row">
 				<div class="col-md-12 col-sm-12 col-xs-12">
 					<form action="" method="post" enctype="multipart/form-data">
 						<div class="form-group">
						    <label for="name">Username</label>
						    <input type="text" class="form-control" id="name" name="username" aria-describedby="emailHelp" placeholder="Enter Your Username" required>
						    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						  </div>

						  <div class="form-group">
						    <label for="name">Password</label>
						    <input type="password" class="form-control" id="name" name="password" aria-describedby="emailHelp" placeholder="Enter New Password" required>
						    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						  </div>
						  <hr>
						  <div class="form-group">
						    <label for="name">Full Name</label>
						    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name" required>
						    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Date of birth</label>
						    <input type="date" class="form-control" name="dob" id="exampleInputPassword1" placeholder="YYYY-MM-DD" required />
						  </div>

						<!-- <form>
						  <input type="radio" name="gender" value="kathmandu">Kathmandu<br>
						  <input type="radio" name="gender" value="dharan">dharan<br>
						  <input type="radio" name="gender" value="biratnagar">Biratnagar  
						</form>  -->

						<div class="form-group">
						<label for="exampleSelect2">Place of birth</label>
                        <select name="pob" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
<!--                           <option value="Achham">Achham</option>
                          <option value="Arghakhanchi">Arghakhanchi</option>
                          <option value="Baglung">Baglung</option>
                          <option value="Baitadi">Baitadi</option>
                          <option value="Bajhang">Bajhang</option>
                          <option value="Bajura">Bajura</option>
                          <option value="Banke">Banke</option>
                          <option value="Bara">Bara</option>
                          <option value="Bardiya">Bardiya</option> -->
                          <option value="Bhaktapur">Bhaktapur</option>
            <!--               <option value="Bhojpur">Bhojpur</option>
                          <option value="Chitwan">Chitwan</option>
                          <option value="Dadeldhura">Dadeldhura</option>
                          <option value="Dailekh">Dailekh</option>
                          <option value="Dang">Dang</option>
                          <option value="Darchula">Darchula</option>
                          <option value="Dhading">Dhading</option>
                          <option value="Dhankutta">Dhankutta</option>
                          <option value="Dhanusa">Dhanusa</option>
                          <option value="Dolkha">Dolkha</option>
                          <option value="Dolpa">Dolpa</option>
                          <option value="Doti">Doti</option>
                          <option value="Gorkha">Gorkha</option>
                          <option value="Gulmi">Gulmi</option>
                          <option value="Humla">Humla</option>
                          <option value="Ilam">Ilam</option>
                          <option value="Jajarkot">Jajarkot</option>
                          <option value="Jhapa">Jhapa</option>
                          <option value="Jumla">Jumla</option>
                          <option value="Kailali">Kailali</option>
                          <option value="Kalikot">Kalikot</option>
                          <option value="Kanchanpur">Kanchanpur</option>
                          <option value="Kapilvastu">Kapilvastu</option>
                          <option value="Kaski">Kaski</option>
 -->                          <option value="Kathmandu">Kathmandu</option>
<!--                           <option value="Kavreplanchauk">Kavreplanchauk</option>
                          <option value="Khotang">Khotang</option>
                          <option value="Lalitpur">Lalitpur</option>
                          <option value="Lamjung">Lamjung</option>
                          <option value="Mahottari">Mahottari</option>
                          <option value="Makwanpur">Makwanpur</option>
                          <option value="Manag">Manag</option>
                          <option value="Morang">Morang</option>
                          <option value="Mugu">Mugu</option>
                          <option value="Mustang">Mustang</option>
                          <option value="Myagdi">Myagdi</option>
                          <option value="Nawalparasi">Nawalparasi</option>
                          <option value="Nuwakot">Nuwakot</option>
                          <option value="Okhaldunga">Okhaldunga</option>
                          <option value="Palpa">Palpa</option>
                          <option value="Panchthar">Panchthar</option>
                          <option value="Parsa">Parsa</option>
                          <option value="Parwat">Parwat</option>
                          <option value="Pyuthan">Pyuthan</option>
                          <option value="Ramechhap">Ramechhap</option>
                          <option value="Rasuwa">Rasuwa</option>
                          <option value="Rauthat">Rauthat</option>
                          <option value="Rolpa">Rolpa</option>
                          <option value="Rukum">Rukum</option>
                          <option value="Rupandehi">Rupandehi</option>
                          <option value="Salyan">Salyan</option>
                          <option value="Sankhuwasabha">Sankhuwasabha</option>
                          <option value="Saptari">Saptari</option>
                          <option value="Sarlahi">Sarlahi</option>
                          <option value="Sindhuli">Sindhuli</option>
                          <option value="Sindhupalchauk">Sindhupalchauk</option>
                          <option value="Siraha">Siraha</option>
                          <option value="Solukhumbu">Solukhumbu</option>
                          <option value="Sunsari">Sunsari</option>
                          <option value="Surkhet">Surkhet</option>
                          <option value="Syangja">Syangja</option>
                          <option value="Tanahun">Tanahun</option>
                          <option value="Taplejung">Taplejung</option>
                          <option value="Terhathum">Terhathum</option>
                          <option value="Udaypur">Udaypur</option> -->
                        </div>
</select>
						  <!-- <div class="form-group">
						    <label for="exampleSelect2">Place of birth</label>
						    <select multiple class="form-control" name="pob" id="exampleSelect2" required>
						      <option value="kathmandu">Kathmandu</option>
						       <option value="dharan">dharan</option>
						        <option value="biratnagar">Biratnagar</option>
						         <option value="Damak">Damak</option>
						      
						    </select>
						  </div> -->

						<div class="form-group">
                            <label for="bc">Do you have your Birth Certificate?</label>
                            <!-- <select multiple class="form-control" name="bc" id="bc" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select> -->
                            <!-- <label for="exampleInputFile">File input</label> -->
                                    <input type="file" class="form-control-file" id="exampleInputFile" name="bc_file" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Scan your Birth Cirtificate and upload it here.</small>
                          </div>

                          <div class="form-group">
                            <label for="p_citi">Parent's Citizenship</label>
                            <!-- <select multiple class="form-control" name="p_citi" id="p_citi" required>
                              <option value="1">Yes</option>
                               <option value="0">No</option> -->
                            </select>
                              <!-- <label for="exampleInputFile">File input</label> -->
                                    <input type="file" class="form-control-file" id="exampleInputFile" name="p_citi_file" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Scan your parent citizenship (works any one of father or mother) and upload it here.</small>
                          </div>
                          <div class="form-group">
                            <label for="pp">Passport Sized Photo</label>
                            <!-- <select multiple class="form-control" name="pp" id="pp" required>
                              <option value="1">Yes</option>
                               <option value="0">No</option> -->
                            </select>
                              <!-- <label for="exampleInputFile">File input</label> -->
                                    <input type="file" class="form-control-file" id="exampleInputFile" name="pp_file" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Upload your passport sized photo here.</small>
                          </div>
                          
                          <div class="form-group">
                            <label for="cdo">Muncipal/VCD Approval</label>
                            <!-- <select multiple class="form-control" name="cdo" id="cdo" required>
                              <option value="1">Yes</option>
                               <option value="0">No</option> -->
                            </select>
                                <!-- <label for="exampleInputFile">File input</label> -->
                                    <input type="file" class="form-control-file" id="exampleInputFile" name="cdo_file" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Scan your approval letter and upload it here passport sized photo here.</small>
                                
                          </div>


						  <button type="submit" role="submit" name="submit" class="btn btn-primary">Submit</button>
 					</form>
 				</div>
 			</div>
 		</div>
 	</section>
 

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <?php include 'partials/footer.php'; ?>


