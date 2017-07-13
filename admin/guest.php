 <?php 
   include "partials/head.php";
   include "partials/nav.php";

    $connect = mysqli_connect("localhost", "root", "", "fyp");

    $letter = (mysqli_query($connect, "SELECT * FROM letter LIMIT 1"))->fetch_assoc();
 

   ?>
 	<section>
 		<div class="container">
 			<div class="row">
 				<div class="col-md-12 col-sm-12 col-xs-12">
          <form role="form" action="../newletter.php" method="post">
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
                    <input class="form-control" id="exampleInputEmail1" value="" name="name" type="text" required>
                    
                </div>

                <div class="form-group">
                     
                    <label for="exampleInputEmail1">
                        Date Of Birth
                    </label>
                    <input class="form-control" id="exampleInputEmail1" value="" name="dob" type="date" required>
                    
                </div>

                <div class="form-group">
                     
                    <label for="exampleInputEmail1">
                       Place of Birth
                    </label>
                     <select name="pob" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
                          <option value="Achham">Achham</option>
                          <option value="Arghakhanchi">Arghakhanchi</option>
                          <option value="Baglung">Baglung</option>
                          <option value="Baitadi">Baitadi</option>
                          <option value="Bajhang">Bajhang</option>
                          <option value="Bajura">Bajura</option>
                          <option value="Banke">Banke</option>
                          <option value="Bara">Bara</option>
                          <option value="Bardiya">Bardiya</option>
                          <option value="Bhaktapur">Bhaktapur</option>
                          <option value="Bhojpur">Bhojpur</option>
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
                          <option value="Kathmandu">Kathmandu</option>
                          <option value="Kavreplanchauk">Kavreplanchauk</option>
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
                          <option value="Udaypur">Udaypur</option>
                        </div>
</select>
                    
                </div>
               
                
                 
                <button type="submit" name="submit" class="btn btn-default">
                    Submit
                </button>

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


