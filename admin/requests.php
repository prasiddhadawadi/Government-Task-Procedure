<?php 
   include "partials/head.php";
   include "partials/nav.php";
  include "../age.php";

$conn = mysqli_connect("localhost", "root", "", "fyp");
$user = mysqli_query($conn ,'SELECT * FROM admin_data WHERE user_id ='.$_SESSION['id'])->fetch_assoc();
$place = $user['place'];

$requests = mysqli_query($conn, "SELECT r.*, u.name, u.dob, u.pob, u.bc_file, u.pp_file, u.p_citi_file, u.cdo_file FROM requests r INNER JOIN user_data u ON r.user_id = u.user_id AND  u.pob = '$place'");
if (isset($_SESSION['success'])) {
    ?> <script type="text/javascript">alert('Approved request')</script> <?php
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    ?> <script type="text/javascript">alert('declined request')</script> <?php
    unset($_SESSION['error']);
}
   
   ?>
   <div class="container">
  <div class="jumbotron">
                
                <h1>
                    Requests
                </h1>
                <!-- <a href="register.php" class="btn btn-primary">Sign up</a> -->
            </div>
            <div class="row">
            	<div class="col-md-12">
            		<table class="table table-striped">
            			<thead>
            				<tr>
            					<th>Name</th>
            					<th>POB</th>
                                <th>Age</th>
            					<th>Birth Certificate</th>
            					<th>Passport size Photo</th>
            					<th>Parent's Citizenship</th>

            					<th>CDO's Approval</th>

            					<th>Action</th>

            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				if(mysqli_num_rows($requests) > 0)
            				{
            					while($request = $requests->fetch_assoc())
            					{
            						
            						?>
            						<tr>

            						<tr>
                                     <td><?php echo $request['name'] ?></td>
                                    <td><?php echo $request['pob'] ?></td>
                                    <td><?php echo  dateDifference($request['dob'], date('Y-m-d')) ; ?></td>
                                    <td><a href="../<?php echo $request['bc_file'] ?>">file</a></td>
                                    <td><a href="../<?php echo $request['pp_file'] ?>">file</a></td>
                                    <td><a href="../<?php echo $request['p_citi_file'] ?>">file</a></td>
                                    <td><a href="../<?php echo $request['cdo_file'] ?>">file</a></td>
                                    
            						<td>

                                    <?php if($request['status'] == 0){
                                        ?><a href="approve.php?id=<?php echo $request['id']; ?>"> Approve </a><?php
                                        }else{
                                        ?><a href="#"> Approved </a><?php
                                        }

                                        ?> |
            						
            						<a href="approve.php?did=<?php echo $request['id']; ?>"> Decline </a></td>
            						

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
