<?php
	session_start();
	include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Idea Collector</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Idea Collector</a>
	  <a class="navbar-brand" href="department.php">Home</a>
    </div>
	  
      <ul class="nav navbar-nav navbar-right">
							<!--create the dropdown list  -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php 

                                if(isset($_SESSION['fName']))
                                echo ucfirst($_SESSION['fName']); ?> <b class="caret"></b></a>
							<!-- dropdown list menu for the user click -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.php"><i class="glyphicon glyphicon-user"></i> Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="logout.php"><i class="glyphicon glyphicon-off"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                 
	  </ul>
  
  </div>
   </div>
</nav>
            
		<div class="container-fluid text-center">    
			<div class="row content">
			</br>
				<div class="container" style="width: 50%;">
  
				<h3><b><i> My Profile </b></i></h3>
				<!-- show image-->
				<?php if(isset($_SESSION ['image'])) {
				$image = $_SESSION['image'] ;} ?>
				<img width="100" src="images/<?php echo $image ?>">
				<!-- using username to find the image-->
			<?php
			$sql = mysqli_query($conn,"Select * From staff where fName ='".$_SESSION['fName']."'");
			$row = mysqli_fetch_assoc($sql);
			$_SESSION["image"] = $row['image'];	
			?>
			
			<br><br><br><br>
			<!-- user click on the button to show out the function -->
			<div class="tab">
            <button class="tablinks" style="width: 50%" onclick="openCity(event, 'Personal Details')">Personal Details</button>
            <button class="tablinks" style="width: 50%" onclick="openCity(event, 'Edit Details')">Edit Details</button>
			</div>
     
	 <div id="Personal Details" class="tabcontent">
			<h3>Details</h3>
			<!-- show out the store data-->
			<br>
			
			<?php
			$curr_user_id = $_SESSION['staffID'];
			//select the user by using the specific userid from the database
			$query = "SELECT * FROM staff where staffID = $curr_user_id";

			$select_user = mysqli_query($conn, $query);

			while ($row = mysqli_fetch_assoc($select_user)) {
			$staffID = $row['staffID'];
            $username = $row['username'];
            $fName = $row['fName'];
            $lName = $row['lName'];
            $email = $row['email'];
            $phoneNo = $row['phoneNo'];
            ?>

			<!-- shown in a table form with the information of the user-->
            <table class="table table-striped" style="width: 50%">
              <tbody>
			  <tr>
                  <td><b>StaffID:</b> </td>
                  <td><?php echo $staffID; ?></td>
                </tr>
                <tr>
                  <td><b>Username:</b> </td>
                  <td><?php echo $username; ?></td>
                </tr>
                <tr>
                  <td><b>FirstName:</b> </td>
                  <td><?php echo ucfirst($fName); ?></td>
                </tr>
                <tr>
                  <td><b>Lastname: </b></td>
                  <td><?php echo ucfirst($lName); ?></td>
                </tr>
                <tr>
                  <td><b>Email: </b></td>
                  <td><?php echo $email; ?></td>
                </tr>
                <tr>
                  <td><b>Phone No: </b></td>
                  <td><?php echo $phoneNo; ?></td>
                </tr>
              </tbody>
            </table>

          <?php } ?>
        </div>
		
		
        <div id="Edit Details" class="tabcontent">
          <h3>Edit Details</h3>
          <br>
          <?php
            $curr_user_id = $_SESSION['staffID'];
            $query = "SELECT * FROM staff WHERE staffID = $curr_user_id ";
            $select_users = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($select_users)) {
                $username = $row['username'];
                $fName = $row['fName'];
                $lName = $row['lName'];
				$email = $row['email'];
			    $phoneNo = $row['phoneNo'];
                $password = $row['password'];
				$image = $row['image'];
           
            }

			//edit the user details to update the new data to the database
            if (isset($_POST['update-user'])) {
              $username = $_POST['username'];
			  $fName = $_POST['fName'];
              $lName = $_POST['lName'];
			  $email = $_POST['email'];
			  $phoneNo = $_POST['phoneNo'];
			  $password = $_POST['password'];
            
			  
			 // hash the password in the database if the user update the password
			 // $options = array("cost"=>4);
			 // $password = password_hash($password,PASSWORD_BCRYPT,$options);
			  
			  $image = $_FILES['images']['name'];
              $tmp_image = $_FILES['images']['tmp_name'];

              move_uploaded_file($tmp_image, "images/$image");
			  
              $query = "UPDATE staff SET username='{$username}', fName='{$fName}', lName='{$lName}', email='{$email}', phoneNo='{$phoneNo}', password='{$password}', image='{$image}' WHERE staffID=$curr_user_id";
             
              $update_bus = mysqli_query($conn,$query);
			
			if($conn->query($query)==TRUE)
			{
				echo"<script>alert('Successfully updated the account');</script>";
				
			}
			else
			{
				echo"ERROR:" .$query."<br>".$conn->error;
			}
             
             
           
            }

            ?>

            <form action="" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="username">Username</label>
                <input value="<?php echo $username; ?>" type="text" class="form-control" name="username">
              </div>

              <div class="form-group">
                <label for="firstname">Firstname</label>
                <input value="<?php echo $fName; ?>" type="text" class="form-control" name="fName">
              </div>

              <div class="form-group">
                <label for="lastname">Lastname</label>
                <input value="<?php echo $lName; ?>" type="text" class="form-control" name="lName">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input value="<?php echo $email; ?>" type="text" class="form-control" name="email">
              </div>

              <div class="form-group">
                <label for="phoneno">PhoneNo</label>
                <input value="<?php echo $phoneNo; ?>" type="text" class="form-control" name="phoneNo">
              </div> 
			  
			  <div class="form-group">
                <label for="password">Password</label>
                <input value="" id="myInput" type="password" class="form-control" name="password" placeholder="Change New Password">
              </div>

			 <div class="form-group">
                <img width="100" src="images/<?php echo $image ?>">
              </div>
			  
			  <div class="form-group">
               <center><label for="user-image">User Image</label></center>
                <center><input type="file" name="images" ></center>
              </div>
			  
              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="update-user" value="Update">
              </div>
            </form>


        </div>
		
  <script>

    function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
	

</body>
</html>