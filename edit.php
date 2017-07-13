<?php

include 'partials/head.php';
include 'partials/nav.php';
$connect = mysqli_connect("localhost", "root", "", "fyp");
if(@$_SESSION['login'] == true){
    $username = $_SESSION['user'];
    $id = $_SESSION['id'];
    ?><script>alert("WELCOME <?php echo $username; ?>");</script><?php
    $query = mysqli_query($connect, "SELECT * FROM user_data WHERE user_id = '$id' ");
    $rows = mysqli_num_rows($query);

    if ($rows > 0) {
    	$profile = $query->fetch_assoc();
    	$edit = isset($profile) ? true : false;
    }
    
}
else {
  
    header("location:loginform.php");
}
if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $target_dir = "uploads/";

    if(isset($_FILES['bc_file']))
    {
      
    $bc_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["bc_file"]["name"]);

      mysqli_query($connect, "UPDATE user_data SET bc_file = '$bc_file' WHERE user_id = '$id'");
      move_uploaded_file($_FILES["bc_file"]["tmp_name"], $bc_file);
    }
    if(isset($_FILES['pp_file']))
    {
    $pp_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["pp_file"]["name"]);  
      mysqli_query($connect, "UPDATE user_data SET pp_file = '$pp_file' WHERE user_id = '$id'");
      move_uploaded_file($_FILES["pp_file"]["tmp_name"], $pp_file);
    }
    if(isset($_FILES['cdo_file']))
    {
    $cdo_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["cdo_file"]["name"]);
      mysqli_query($connect, "UPDATE user_data SET cdo_file = '$cdo_file' WHERE user_id = '$id'");
      move_uploaded_file($_FILES["cdo_file"]["tmp_name"], $cdo_file);


    }
    if(isset($_FILES['p_citi_file']))
    {
     $p_citi_file = $target_dir .rand(1000,10000000)."-". basename($_FILES["p_citi_file"]["name"]);
      mysqli_query($connect, "UPDATE user_data SET p_citi_file = '$p_citi_file' WHERE user_id = '$id'");
      move_uploaded_file($_FILES["p_citi_file"]["tmp_name"], $p_citi_file);

    }

    $result = mysqli_query($connect, "UPDATE user_data SET name = '$name', dob = '$dob', pob = '$pob' WHERE user_id = '$id' ");

    header("location:profile.php");
}


?>



    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="image/nepallogo.png" style="width:130px;height:110px" alt="">
    </header>

    <!-- Content Section -->
 	<section>
 		<div class="container">
 			<div class="row">
 				<div class="col-md-12 col-sm-12 col-xs-12">
 					<form action="" method="post" enctype="multipart/form-data">
 						
						  <hr>
						  <div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name" value="<?php if (!empty($edit)) {echo $profile['name'];}?>" required>
						    <!-- <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Date of birth</label>
						    <input type="date" class="form-control" name="dob" id="exampleInputPassword1" placeholder="" value="04/06/2012" required />
						  </div>

						  
						  <div class="form-group">
						<label for="exampleSelect2">Place of birth</label>
                        <select name="pob" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
						    <?php
						    if (!empty($edit)) {
						    	?> <option selected value="<?php echo $profile['pob']; ?>"><?php echo $profile['pob'] ?></option><?php
						    }
						    ?>
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
                                <br/>


						  
						
						  
						 
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


