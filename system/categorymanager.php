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
  <link rel="stylesheet" type="text/css" href="css/departmentmanager.css">
  
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
      <a class="navbar-brand" href="">Idea Collector</a>
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
                         
		<li><a href="registration.php"><span class="glyphicon glyphicon-list-alt"></span> Register Here!</a></li>
      </ul>
  
  </div>
  
      <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="manager.php"><i class="glyphicon glyphicon-th-list"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="departmentmanager.php"><i class="glyphicon glyphicon-comment"></i> Departments</a>
                    </li>
                    <li>
                        <a href="categorymanager.php"><i class="glyphicon glyphicon-list-alt"></i> Category</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="glyphicon glyphicon-user"></i> Users</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="glyphicon glyphicon-inbox"></i> Profile</a>
                    </li>
                    <li>
                        <a href="report.php"><i class="glyphicon glyphicon-file"></i> Reports</a>
                    </li>
					<li>
                        <a href="zipmanager.php"><i class="glyphicon glyphicon-cloud-download"></i> Zip File</a>
                    </li>
                </ul>
				</br></br></br></br></br>	
            </div>
				<div class="helo"> 
			<h3 style="color:#ffffff"><center><b><i>Welcome Back QA Manager!</i></b></center></h3>
	  <br>
    </div>
			
</nav>
	<div class="col-xs-6">

                            <?php
								
                                if (isset($_GET['delete'])) {
                                    $dep_del_id = $_GET['delete'];

                                    $query = "DELETE FROM category WHERE categoryID=$dep_del_id";

									 if($conn->query($query)==TRUE)
									{
										echo"<script>alert('Successfully Deleted The Selected Category');</script>";
				
									}
									else
									{
									   echo"ERROR:" .$query."<br>".$conn->error;
									}
								}

                            ?>




                            <?php 
							// submit the department to the database after the admin click on the submit button
                            if(isset($_POST['submit'])) {

                                $categoryName = $_POST['categoryName'];
                                if($categoryName=="" || empty($categoryName)) {
                                    echo " This Field Must Not be Empty";
                                }

                                $query = "INSERT INTO category(categoryName) VALUE ('$categoryName')";
                                if($conn->query($query)==TRUE)
								{
									echo"<script>alert('Add New Category Successfully');</script>";
								}
								else
								{
									echo"ERROR:" .$query."<br>".$conn->error;
								}
								
                            }
                            ?>
	
							</br></br>
							<!-- manager enter the categoryname to the category -->
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="categoryName">Add Categories</label>
                                    <input class="form-control" type="text" name="categoryName">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div> 
                            </form>
                        </div>

                        <div class="col-xs-6">
							
                            <?php 
                            $query = "SELECT *  FROM  category";
                            $select_category = mysqli_query($conn,$query);
							
							
                            ?>

							</br></br>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category Name</th>
										<th>Deaprtment No</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php  
										// show the categories 
                                        while($row = mysqli_fetch_assoc($select_category)) {
                                        $cat_id = $row['categoryID'];
                                        $cat_name = $row['categoryName'];
										 $dep_no= $row['departmentID'];
										 
                                        echo "<tr>";
                                        echo "<td> {$cat_id} </td>";
                                        echo "<td> {$cat_name} </td>";
										echo "<td> {$dep_no} </td>";
                                        echo "<td><a href='categorymanager.php?delete=$cat_id'>Delete</a></td>";
										echo "<td><a href='update_category.php?source=update_category&categoryID=$cat_id'>Edit</a></td>";  
										echo "</tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
               

</body>
</html>
