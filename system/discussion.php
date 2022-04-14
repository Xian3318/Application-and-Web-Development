<?php
	session_start();
	include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://use.fontawesome.com/fe459689b4.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	
	</head>
	
	<style>
	body {
	margin: 0px;
	font-family: 'segoe ui';
	background-color:#e0ebeb;
	}
	
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    

    .row.content {height: 450px}
    
 
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    

    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
		
      }
      .row.content {height:auto;} 
    }
	.dropdown {
float:right;
}


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-backdrop {
  z-index: -1;
}

    .show-read-more .more-text{
        display: none;
    }

.dropdown a {
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;

}

.card{ background-color: #fff; border: 1px solid transparent; border-radius: 6px; }
.card > .card-link{ color: #333; }
.card > .card-link:hover{  text-decoration: none; }
.card > .card-link .card-img img{ border-radius: 6px 6px 0 0; }
.card .card-img{ position: relative; padding: 0; display: table; }
.card .card-img .card-caption{
  position: absolute;
  right: 0;
  bottom: 16px;
  left: 0;
}
.card .card-body{ display: table; width: 100%; padding: 12px; }
.card .card-header{ border-radius: 6px 6px 0 0; padding: 8px; }
.card .card-footer{ border-radius: 0 0 6px 6px; padding: 8px; }
.card .card-left{ position: relative; float: left; padding: 0 0 8px 0; }
.card .card-right{ position: relative; float: left; padding: 8px 0 0 0; }
.card .card-body h1:first-child,
.card .card-body h2:first-child,
.card .card-body h3:first-child, 
.card .card-body h4:first-child,
.card .card-body .h1,
.card .card-body .h2,
.card .card-body .h3, 
.card .card-body .h4{ margin-top: 0; }
.card .card-body .heading{ display: block;  }
.card .card-body .heading:last-child{ margin-bottom: 0; }

.card .card-body .lead{ text-align: center; }

@media( min-width: 768px ){
  .card .card-left{ float: left; padding: 0 8px 0 0; }
  .card .card-right{ float: left; padding: 0 0 0 8px; }
    
  .card .card-4-8 .card-left{ width: 33.33333333%; }
  .card .card-4-8 .card-right{ width: 66.66666667%; }

  .card .card-5-7 .card-left{ width: 41.66666667%; }
  .card .card-5-7 .card-right{ width: 58.33333333%; }
  
  .card .card-6-6 .card-left{ width: 50%; }
  .card .card-6-6 .card-right{ width: 50%; }
  
  .card .card-7-5 .card-left{ width: 58.33333333%; }
  .card .card-7-5 .card-right{ width: 41.66666667%; }
  
  .card .card-8-4 .card-left{ width: 66.66666667%; }
  .card .card-8-4 .card-right{ width: 33.33333333%; }
}

/* -- default theme ------ */
.card-default{ 
  border-color: #ddd;
  background-color: #fff;
  margin-bottom: 24px;
}

.card-default > .card-header{ 
color: #333; background-color: #ddd; 
}
.card-default > .card-header{ border-bottom: 1px solid #ddd; padding: 8px; text-align:right;}
.card-default > .card-footer{ padding: 8px; }
.card-default > .card-body{ color: #333;}
.card-default > .card-img:first-child img{ border-radius: 6px 6px 0 0; }
.card-default > .card-left{ padding-right: 4px; }
.card-default > .card-right{ padding-left: 4px; }
.card-default p:last-child{ margin-bottom: 0; }
.card-default .card-caption { color: #fff; text-align: center; text-transform: uppercase; }

ul {
	background-color:navy;
}
	</style>
	
	<body>
	<?php 
			$staffID = $_SESSION['staffID'] ;
			
			$list = mysqli_query($conn,"SELECT * FROM staff WHERE staffID = '$staffID'");  
			while($row_list = mysqli_fetch_array($list))
			{  
				$fName = $row_list['fName'];
		?>	
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="department.php">Idea Collector</a>
				</div>
	  
				<ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php  echo $fName; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
                            <li>
								<a href="profile.php"><i class="glyphicon glyphicon-user"></i>Profile</a>
                            </li>
							<li class="divider"></li>
                            <li>
								<a href="logout.php"><i class="glyphicon glyphicon-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
				</ul>
			</div>
		</nav>
		<?php
			}
		?>
		
			<br>
		<?php
	
		if(isset($_GET['department']))
		{
			$_SESSION['department'] = $_GET['department'];
		}
		?>
			<div class="w3-container" style ="width:100%">
				<div class="container-fluid">
					<button type="button" class="btn" id="addidea" style="background-color:navy; color:white;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Idea</button>
					
					<!--Button Most Viewed Ideas, Latest Ideas and Latest Comments.-->
					     <a href="mostviewideas.php"><button type="button" id="mostview"class="btn" style="background-color:navy; color:white;" data-toggle="modal" data-target="#MostLike" data-whatever="@mdo">Most Viewed Ideas, Latest Ideas and Latest Comment</button></a>
					
					<!--Most Most Popular Ideas-->
					 <a href="mostpopularidea.php"><button type="button" id="popular" class="btn" style="background-color:navy; color:white;" data-toggle="modal" data-target="#MostLike" data-whatever="@mdo">Most Popular Ideas</button></a>
					 
					 <!--Closure Date-->
					 <button type="button" id="closure" class="btn" style="background-color:navy; color:white;" data-toggle="modal" data-target="#ClosureDate" data-whatever="@mdo"  onclick="myFunction()">Closure Date</button></a>
					 
					 <!--Final Closure Date-->
					<button type="button" class="btn" style="background-color:navy; color:white;" data-toggle="modal" data-target="#finalClosureDate" data-whatever="@mdo" onclick="final()">Final Closure Date</button></a>
					 
					
					<!--Button Drowp Down List (Category)-->
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:Navy; color:white">Category<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<?php
										$department = $_SESSION['department'];
										$list = mysqli_query($conn,"SELECT * FROM category WHERE departmentID = '$department'");  
										while($row_list = mysqli_fetch_array($list))
										{  
											$categoryid = $row_list['categoryID'];
											$category = $row_list['categoryName'];
										?>
											<li><a href="discussion.php?categoryList=<?php echo $categoryid ?>"><?php echo $category ?></a></li>
									<?php 
										}
										?>
									</ul>
							</div>
							<br><br><br>
						
						<?php 
							if (isset($_GET['pageno']))
							{
								$pageno = $_GET['pageno'];
							} 
							else 
							{
								$pageno = 1;
							}
							
							$no_of_records_per_page = 5;
							$offset = ($pageno-1) * $no_of_records_per_page;

							
							if(isset($_GET['categoryList']))
							{
							$categoryno = $_GET['categoryList'];
							$total_pages_sql = "SELECT COUNT(*) FROM idea WHERE categoryID = '$categoryno'";
							$result = mysqli_query($conn,$total_pages_sql);
							$total_rows = mysqli_fetch_array($result)[0];
							$total_pages = ceil($total_rows / $no_of_records_per_page);
								$sql = "SELECT * FROM idea JOIN managedata ON idea.ideaID = managedata.ideaID WHERE categoryID = '$categoryno' AND `managedata`.`commentID` IS NULL AND  `managedata`.`reactID` IS NULL ORDER BY `idea`.`ideaID` DESC LIMIT $offset, $no_of_records_per_page";
							}
							else
							{
							$total_pages_sql = "SELECT COUNT(*) FROM idea";
							$result = mysqli_query($conn,$total_pages_sql);
							$total_rows = mysqli_fetch_array($result)[0];
							$total_pages = ceil($total_rows / $no_of_records_per_page);
							$sql = "SELECT * FROM managedata JOIN idea ON managedata.ideaID = idea.ideaID JOIN category ON idea.categoryID = category.categoryID JOIN department ON department.departmentID = category.departmentID WHERE `category`.`departmentID` = '$department' AND  `managedata`.`commentID` IS NULL AND  `managedata`.`reactID` IS NULL ORDER BY `idea`.`ideaID` DESC LIMIT $offset, $no_of_records_per_page";
							}

							$res_data = mysqli_query($conn,$sql);
							while($rows = mysqli_fetch_array($res_data))
							{
								$ideaID = $rows['ideaID'];
								$date = $rows['postDate'];
								$time = $rows['postTime'];
								$title = $rows['ideaTitle'];
								$message = $rows['ideaText'];
								$anonymous = $rows['anonymous'];
								$supportDoc = $rows['supportDoc'];
										
								if ($anonymous == 'anonymous')
								{
							?>
									<a href="comment.php?data=<?php echo $ideaID ?>" style="text-decoration: none">
										<div class="card card-default">
											<div class="card-header"><b><?php echo $anonymous;?></b> at <?php echo $date;?> <?php echo $time;?></div>
											<div class="card-body">
												<h3><?php echo $title;?></h3>
												<p class="show-read-more"><?php echo $message;?></p>
											</div>
											<div class="card-footer">
											<?php
											$sqllike = "SELECT * FROM react JOIN manageData ON react.reactID = manageData.reactID WHERE ideaID = '$ideaID'&& thumbUp = '1'";
											if ($result= mysqli_query($conn,$sqllike)) 
											{
												$rowcountlike = mysqli_num_rows($result);

											?>
												<button class="btn" style="color : green"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											<?php
											}
											$sqlunlike = "SELECT * FROM react JOIN manageData ON react.reactID = manageData.reactID WHERE ideaID = '$ideaID'&& thumbDown = '1'";
											if ($result= mysqli_query($conn,$sqlunlike)) 
											{
												$rowcountunlike = mysqli_num_rows($result);

											?>
												<button class="btn" style="color : red"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
											<?php
											}
											$sql = "SELECT * FROM comment JOIN manageData ON comment.commentID = manageData.commentID WHERE ideaID = '$ideaID' ";
											if ($result= mysqli_query($conn,$sql)) 
											{
												$rowcount=mysqli_num_rows($result);

											?>
												<button class="btn"><i class="fa fa-comments-o fa-lg"> <?php echo $rowcount;?></i></button>
									<?php
											}?></div>
										</div>
									</a>
							<?php
								}
								else
								{
									$sqlstaff = mysqli_query($conn,"SELECT * FROM staff JOIN managedata ON staff.staffID = managedata.staffID JOIN idea ON managedata.ideaID = idea.ideaID WHERE `managedata`.`ideaID`= '$ideaID' AND `managedata`.`commentID` IS NULL AND  `managedata`.`reactID` IS NULL");
									
									while($rows = mysqli_fetch_array($sqlstaff))
									{
									$date = $rows['postDate'];
									$time = $rows['postTime'];
									$message = $rows['ideaText'];
									$name = ucfirst($rows['fName']);

									
							?>
									<a href="comment.php?data=<?php echo $ideaID ?>" style="text-decoration: none">
										<div class="card card-default">
											<div class="card-header"><b><?php echo $name;?></b> at <?php echo $date;?> <?php echo $time;?></div>
											<div class="card-body">
												<h3><?php echo $title;?></h3>
												<p class="show-read-more"><?php echo $message;?></p>
											</div>
											<div class="card-footer">
											<?php
											$sqllike = "SELECT * FROM react JOIN manageData ON react.reactID = manageData.reactID WHERE ideaID = '$ideaID'&& thumbUp = '1'";
											if ($result= mysqli_query($conn,$sqllike)) 
											{
												$rowcountlike = mysqli_num_rows($result);

											?>
												<button class="btn" style="color : green"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											<?php
											}
											$sqlunlike = "SELECT * FROM react JOIN manageData ON react.reactID = manageData.reactID WHERE ideaID = '$ideaID'&& thumbDown = '1'";
											if ($result= mysqli_query($conn,$sqlunlike)) 
											{
												$rowcountunlike = mysqli_num_rows($result);

											?>
												<button class="btn" style="color : red"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
											<?php
											}
											$sql = "SELECT * FROM comment JOIN manageData ON comment.commentID = manageData.commentID WHERE ideaID = '$ideaID' ";
											if ($result= mysqli_query($conn,$sql)) 
											{
												$rowcount=mysqli_num_rows($result);

											?>
												<button class="btn"><i class="fa fa-comments-o fa-lg"> <?php echo $rowcount;?></i></button>
									<?php
											}?>
											</div>
										</div>
									</a>
							<?php
									
									}
								}
							
							}
							?>
									<div class="text-center">
								<ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
	</div></div>
				</div>	
		
					 

				
  <form method = "POST" enctype="multipart/form-data" id ="posting" >
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New Idea</h4>
      </div>
      <div class="modal-body">
        	
	
			<div class="form-group">
			<label>Category <label style="color: red">*</label> : </label>
				<select name= 'category'> 
				
					<!--Category drop down list-->
				<?php
								
					$query = "SELECT * FROM category WHERE departmentID = '$department'";
					$select_category = mysqli_query($conn,$query);

					if (!$select_category) 
					{
						die("Query Failed" . mysqli_error($conn));
					}

					while ($row = mysqli_fetch_assoc($select_category)) 
					{
						$categoryID = $row['categoryID'];
						$categoryName = $row['categoryName'];
					
						echo "<option value='$categoryID'>$categoryName</option>";
					}
					?>
			  </select>
		  </div>
		  
          <div class="form-group">
		  <label>Title : <label style="color: red">*</label> : </label>
		  <input type="text" name="title" id="title" rows="3" required></textarea>
		</div>
		<div class="form-group">
		<label>Text <label style="color: red">*</label> : </label>
			<textarea name ="message" class="form-control rounded-0" id="message" rows="3" required></textarea>
          </div>
		  <div class="form-group">
            <label for="exampleFormControlFile1">Document Support</label>
			<input type="file" class="form-control-file" name="file" id="file">
		</div>
       
		<div class="form-group">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="anonymous" value="anonymous">
					<label class="form-check-label" for="inlineCheckbox1">Post as anonymous</label>
					
      </div>
	  <div class="form-group">
          <input type="checkbox" name="terms" id="terms" value="accepted"> <label> Agreed to <a href="term.html" target="_blank">Term & Condition</a> </label></input>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="post" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>
 </form>
						
					

  <?php
		
if(isset($_POST['post']))
			{	
				$id = $_SESSION['staffID'];
				date_default_timezone_set("Asia/Kuala_Lumpur");
				$date = date('Y-m-d');
				$time = date('H:i:s');
				$title = $_POST['title'];
				$message = $_POST['message'];
				$category = $_POST['category'];
				
				$fileName = $_FILES['file']['name'];
				$myFile = $_FILES['file']['name'];
				
				$temName = $_FILES['file']['tmp_name'];
		
					if(isset($_POST['terms']) && $_POST['terms'] == 'accepted') 
					{ 
						$upload_dir = 'documents';
						
						move_uploaded_file($temName,$upload_dir.'/'.$fileName);
						
						$location = "document/$myFile";
						
						if (!empty($_POST['anonymous']))
						{
							//$sql = "INSERT INTO `idea`(`ideaTitle`,`ideaText`,`supportDoc`,`postDate`, `postTime`, `anonymous`, `categoryID`) VALUES ('$title','$message','$location','$date','$time','anonymous','$category')";
							
							$query ="INSERT INTO `idea`(`ideaTitle`,`ideaText`,`supportDoc`, `postDate`, `postTime`,`anonymous`,`categoryID`) VALUES ('$title','$message','$location','$date','$time','anonymous','$category')";
							
							if (mysqli_query($conn, $query)) 
							{
								$ideaid = mysqli_query($conn,"SELECT * FROM idea WHERE ideaText = '$message' && ideaTitle = '$title'");
								$rows = mysqli_fetch_array($ideaid);
								
								$get_ideaID = $rows['ideaID'];
								
								$query2 = "INSERT INTO `manageData`(`ideaID`)VALUES('$get_ideaID')";
								mysqli_query($conn, $query2);
								
							
								$coor = mysqli_query($conn,"SELECT * FROM staff WHERE role = 'Coordinator'");
							
							while($rows = mysqli_fetch_array($coor))
							{
								$Email = $rows['email'];
								
								$to = $Email;
								$from = "Idea Collector SYSTEM";//optional
								$fromName = "NO REPLY MESSAGE";
								$subject = "NEW IDEA IS UPLOADED!";

								$htmlContent ='
									<html> 
										<head></head> 
										<body>    
											<p> An anonymous had uploaded a new idea into Idea Collector just now! </p>
										</body> 
									</html>';
								//set content - type heeader for sending html email
								$header="MIME-Version:1.0"."\r\n";
								$header.="Content-type:text/html;charset=UTF-8"."\r\n";
								
								if(mail($to,$subject,$htmlContent,$header))
								{
									echo "<script>alert('Idea Submitted');</script>";
									echo "<meta http-equiv='refresh' content='0;url=discussion.php?department=$department'>";
								}
								else
								{
									echo "<script>alert('Email sending failed!');</script>";
								}
							
							}
							} 
							else
							{	
								echo "Error: " . $sql . "<br>" . mysqli_error($conn);
							}
							
						}
						else
						{
							$query ="INSERT INTO `idea`(`ideaTitle`,`ideaText`,`supportDoc`, `postDate`, `postTime`,`categoryID`) VALUES ('$title','$message','$location','$date','$time','$category')";
							
							if (mysqli_query($conn, $query)) 
							{
								$ideaid = mysqli_query($conn,"SELECT * FROM idea WHERE ideaText = '$message' && ideaTitle = '$title'");
								$rows = mysqli_fetch_array($ideaid);
								
								$get_ideaID = $rows['ideaID'];
								
								$query2 = "INSERT INTO `manageData`(`staffID`,`ideaID`)VALUES('$id','$get_ideaID')";
								mysqli_query($conn, $query2);
								
							$staff = mysqli_query($conn,"SELECT * FROM staff WHERE staffID = '$id'");  
							$row = mysqli_fetch_assoc($staff);
							$staffName = $row['fName'];
							
							$coor = mysqli_query($conn,"SELECT * FROM staff WHERE role = 'Coordinator'");
							
							while($rows = mysqli_fetch_array($coor))
							{
								$Email = $rows['email'];
								
								$to = $Email;
								$from = "Idea Collector SYSTEM";//optional
								$fromName = "NO REPLY MESSAGE";
								$subject = "NEW IDEA IS UPLOADED!";

								$htmlContent ='
									<html> 
										<head></head> 
										<body>    
											<p> '.$staffName.' had uploaded a new idea into Idea Collector just now! </p>
										</body> 
									</html>';
								//set content - type heeader for sending html email
								$header="MIME-Version:1.0"."\r\n";
								$header.="Content-type:text/html;charset=UTF-8"."\r\n";


								if(mail($to,$subject,$htmlContent,$header))
								{
									echo "<script>alert('Idea Submitted');</script>";
									echo "<meta http-equiv='refresh' content='0;url=discussion.php?department=$department'>";
								}
								else
								{
									echo "<script>alert('Email sending failed!');</script>";
								}
							} 
						}
						else
							{	
								echo "Error: " . $sql . "<br>" . mysqli_error($conn);
							}
						}
					}
			}
		
			?>
	</body>
	<script>

	<!--diasbale button closure date-->
	function myFunction() {
			document.getElementById("addidea").disabled = true;
	
	}

	function final() {
				document.getElementById("addidea").disabled = true;
				document.getElementById("mostview").disabled = true;
				document.getElementById("popular").disabled = true;
				
		
		}

		
		document.getElementById('posting').addEventListener('submit', function(event){
		if(document.getElementById('terms').checked == false){
			event.preventDefault();
				alert("You must accept our terms and conditions!");
			return false;
			}
		});
		
	$(document).ready(function()
	{
		var maxLength = 20;
		$(".show-read-more").each(function()
		{
		var myStr = $(this).text();
			if($.trim(myStr).length > maxLength)
			{
				var newStr = myStr.substring(0, maxLength);
				var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
				$(this).empty().html(newStr);
				$(this).append(' <a href="javascript:void(0);" class="read-more">...</a>');
				$(this).append('<span class="more-text">' + removedStr + '</span>');
			}
		}
	);

	});
	
	
	</script>
</html>