<?php 
   include "partials/head.php";
   include "partials/nav.php";
 

$conn = mysqli_connect("localhost", "root", "", "fyp");

$feedbacks = mysqli_query($conn, "SELECT * FROM feedbacks");
if(isset($_SESSION['success']))
{
    ?><script type="text/javascript"> alert("DELETED Successfull !!");</script> <?php
    unset($_SESSION['success']);
}
   
   ?>
   <div class="container">
  <div class="jumbotron">
                
                <h1>
                    Feedbacks
                </h1>
                <!-- <a href="register.php" class="btn btn-primary">Sign up</a> -->
            </div>
            <div class="row">
            	<div class="col-md-12">
            		<table class="table table-striped">
            			<thead>
            				<tr>
            					<th>Name</th>
            					<th>Email</th>
                                <th>Subject</th>
            					<th>Message</th>
                                <th>Delete</th>
            		      	</tr>
            			</thead>
            			<tbody>
            				<?php
            				if(mysqli_num_rows($feedbacks) > 0)
            				{
            					while($feedback = $feedbacks->fetch_assoc())
            					{
            						
            						?>
            						<tr>

            						<tr>
                                     <td><?php echo $feedback['name'] ?></td>
                                     <td><?php echo $feedback['email'] ?></td>
                                     <td><?php echo $feedback['subject'] ?></td>
                                     <td><?php echo $feedback['message'] ?></td>   
            						 <td><a href="delete-feedback.php?id=<?php echo $feedback['id'] ;?>"><i class="glyphicon glyphicon-trash"></i></a> <td> 

            						</tr>
            						<?php
            					}
            				}
            				?>
            			</tbody>
            		</table>
            	</div>
            </div>

            </div>

 </body>
 </html>
