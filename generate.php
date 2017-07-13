 <?php 
   include "partials/head.php";
   include "partials/nav.php";

    $connect = mysqli_connect("localhost", "root", "", "fyp");

    $letter = (mysqli_query($connect, "SELECT * FROM letter LIMIT 1"))->fetch_assoc();
 

   ?>
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
                    <input class="form-control" id="exampleInputEmail1" name="pob" type="">
                    
                </div>
               
                
                 
                <button type="submit" name="submit" class="btn btn-default">
                    Submit
                </button>

            </form> 
            </div>

 <?php include 'partials/footer.php'; ?>
