<?php
include 'partials/head.php';
// include 'partials/nav.php';
$connect = mysqli_connect("localhost", "root", "", "fyp");


if(@$_SESSION['login'] == true){
    $username = $_SESSION['user'];
    $id = $_SESSION['id'];
  
    $query = mysqli_query($connect, "SELECT * FROM user_data WHERE user_id = '$id' ");
    $rows = mysqli_num_rows($query);
    $requests = mysqli_query($connect, "SELECT * from requests WHERE user_id = '$id'");

    
}
else {
  
    header("location:loginform.php");
}
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">
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
    </nav>



    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="image/nepallogo.png" style="width:130px;height:110px" alt="">
    </header>

    <div class="container">
      <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        
        <?php if(@$_SESSION['login'] == true) { ?>
 
      
            <table class="table table-striped table-hovered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Place Of Birth</th>
                    <th>Passport Size Photo</th>
                    <th>Birth Certificate</th>
                    <th>Parent's Citizenship</th>
                    <th>CDO's Approval</th>
                    <th>Edit</th>
                    
                    

                </tr>
                </thead>
                <tbody>
                <?php if ($rows > 0){ 
                while($result = $query->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['dob'] ?></td>
                <td><?php echo $result['pob'] ?></td>
                <?php 
                if ($result['pp_file'] != null){
                    ?> <td><a href="<?php echo $result['pp_file'] ?>">File</a></td> <?php
                    } else { echo "<td class='text-danger'>Not Available </td>";} ?>
                <?php 
                if ($result['bc_file'] != null){
                    ?> <td><a href="<?php echo $result['bc_file'] ?>">File</a></td> <?php
                    } else { echo "<td class='text-danger'>Not Available </td>";} ?>
                    <?php $pp = $result['parents_citizenship'];
                if ($result['p_citi_file'] != null){
                    ?> <td><a href="<?php echo $result['p_citi_file'] ?>">File</a></td> <?php
                    } else { echo "<td class='text-danger'>Not Available </td>";} ?>
                    <?php $pp = $result['cdo_approval'];
                if ($result['cdo_file'] != null){
                    ?> <td><a href="<?php echo $result['cdo_file'] ?>">File</a></td> <?php
                    } else { echo "<td class='text-danger'>Not Available </td>";} ?>
                    <td>
                    <?php if ($requests->fetch_assoc()['status'] == 0) {
                       ?><a href="edit.php?id=<?php echo $id;?>"><i class="glyphicon glyphicon-edit"></i> Edit</a> /<?php
                    }
                    else { ?>
                    <a href="edit.php?id=<?php echo $id;?>" style="display:none;"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <?php } ?><a href="delete-user.php?id=<?php echo $id ; ?>"><i class="glyphicon glyphicon-trash"></i> Delete Account </a></td>
                </tr>
                <?php } } ?>
              
                    </tbody>
            </table>

  
    <?php } if (isset($_GET['error'])) {
        $error = "All documents are required for this process !!";
        ?>
        <br>
        <h2 class="text-danger text-center"><?php echo $error ?></h2>
        <?php
    }

    ?>
    <br>
    <?php
    $request = mysqli_query($connect, "SELECT * from requests WHERE user_id = '$id'");
     if (mysqli_num_rows($request) > 0) {
        if($request->fetch_assoc()['status'] == '0')
        {
        ?><p>Request has been sent</p><a href="delete-request.php?id=<?php echo $id ?>">Cancel Request</a>
    <?php }
    else{
        ?><p>Request has been approved</p><a href="letter-edit.php?id=<?php echo $id ?>">Create Letter</a>
    <?php
    }
}
    else{ ?>
    <a href="sendrequest.php?id=<?php echo $id; ?>" title="Create a letter of applying"><button class="btn btn-primary btn-lg">Send Request For Letter</button></a>
    <?php } ?>

      </div>
      </div>

    </div>


<?php include 'partials/footer.php'; ?>
