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
  <link rel="stylesheet" type="text/css" href="css/manager.css">
  
</head>
<body>

<style>
	body {
	margin: 0px;
	font-family: 'segoe ui';
	background-color:#e0ebeb;
	}
	 /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
		
      }
      .row.content {height:auto;} 
    }

#department {
    background: #eee ;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    text-transform: uppercase;
}

#department .card {
    border: none;
    background: #ffffff;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.frontside .card{
    min-height: 250px;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img{
  width:100%;

}

	</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Idea Collector</a>
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
                         
		
  </div>
  
       <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="coordinator.php"><i class="glyphicon glyphicon-th-list"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="viewdepcoor.php"><i class="glyphicon glyphicon-comment"></i> Departments</a>
                    </li>
                    <li>
                        <a href="viewcatcoor.php"><i class="glyphicon glyphicon-list-alt"></i> Category</a>
                    </li>
                    <li>
                        <a href="viewcoorusers.php"><i class="glyphicon glyphicon-user"></i> Users</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="glyphicon glyphicon-inbox"></i> Profile</a>
                    </li>
                    <li>
                        <a href="viewcoorreport.php"><i class="glyphicon glyphicon-file"></i> Reports</a>
                    </li>
                </ul>
				</br></br></br></br></br>	
            </div>
				<div class="helo"> 
			<h3 style="color:#ffffff"><center><b><i>Welcome Back QA Coordinator!</i></b></center></h3>
	  <br>
    </div>
			
			
</nav>
                 


</div>
 
						<div class="col-xs-6">
							
                            <?php 
                            $query = "SELECT * FROM comment JOIN managedata ON comment.commentID = managedata.commentID JOIN staff ON staff.staffID = managedata.staffID JOIN department ON department.departmentID = staff.departmentID JOIN idea ON idea.ideaID = managedata.ideaID";
							

                            $select_department = mysqli_query($conn,$query);
							
							
                            ?>

							</br></br>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
											<th>Department Name</th>
											<th>Idea Descriptions</th>
											<th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php  
										// show the department
                                        while($row = mysqli_fetch_assoc($select_department)) {
                                   
										$dep_name = $row['departmentName'];
										$idea_text = $row['ideaText'];
										$idea_comment = $row['commentText'];
								
									

                                        echo "<tr>";
										echo "<td> {$dep_name} </td>";	
										echo "<td> {$idea_text} </td>";
										echo "<td> {$idea_comment} </td>";
									
								
										echo "</tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
               

</body>
</html>