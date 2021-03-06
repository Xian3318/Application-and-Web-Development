<?php
	session_start();
	include('conn.php');
	
	$id = $_GET['data'];
	$query = mysqli_query($conn,"UPDATE idea SET view = view + 1  WHERE ideaID = '$id'");
						
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
	background-color:#eee;
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


button{
  cursor: pointer;
  outline: 0;
  color: #AAA;

}

.btn:focus {
  outline: none;
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
.card-default > .card-header{ border-bottom: 2px solid #ddd; padding: 8px;}
.card-default > .card-header h5,
.card-default > .card-body h6  {text-align:right;}
.card-default > .card-footer{ padding: 8px;   background-color: #ddd;}
.card-default > .card-body{ color: #333;}
.card-default > .card-img:first-child img{ border-radius: 6px 6px 0 0; }
.card-default > .card-left{ padding-right: 4px; }
.card-default > .card-right{ padding-left: 4px; }
.card-default p:last-child{ margin-bottom: 0; }
.card-default .card-caption { color: #fff; text-align: center; text-transform: uppercase; }


	</style>
	
	<body>
		<?php
	
		if(isset($_GET['data']))
		{
			$data = $_GET['data'];
	
	 
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

			<div class="w3-container" style ="width:100%">
			
					<div class="container-fluid">	

<button type="button" class="btn" style="background-color:navy;"><a href="discussion.php" style="text-decoration: none; color:white;">back</a></button>
<br><br>
												
			<div class="card card-default">
				<?php 
				$staffID = $_SESSION['staffID'];
				$query1 = mysqli_query($conn,"SELECT * FROM idea WHERE ideaID = '$data'");
						
				while($rows = mysqli_fetch_array($query1))
				{   
					$ideaID = $rows['ideaID'];
					$date = $rows['postDate'];
					$time = $rows['postTime'];
					$ideaTitle = $rows['ideaTitle'];
					$message = $rows['ideaText'];
					$anonymous = $rows['anonymous'];
					$supportDoc = $rows['supportDoc'];
									
					if ($anonymous == 'anonymous')
					{
				?>
				
						<div class="card-header">
						<form method = "POST">
							<h5>Author : <b><?php echo $anonymous;?></b> at <?php echo $date;?> <?php echo $time;?></h5>
							<h3><?php echo $ideaTitle;?></h3><p><?php echo $message;?></p>
							<br>
					<?php   
							if($supportDoc !='document/')
							{
						?>
								<p>Support Document: <a href='DiscussionPage.php?dow=$supportDoc'>Click to Download</a></p>
								<br>
						<?php
							}
							?>
						
							<?php
							$sqllike = "SELECT thumbUp FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' && thumbUp = '1'";
							if ($result= mysqli_query($conn,$sqllike)) 
							{
								$rowcountlike = mysqli_num_rows($result);
							}
											
							$sqlunlike = "SELECT thumbDown FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' && thumbDown = '1'";
							if ($result= mysqli_query($conn,$sqlunlike)) 
							{
								$rowcountunlike = mysqli_num_rows($result);
							}
											
							$sqlreact =  mysqli_query($conn,"SELECT * FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' AND staffID = '$staffID'");
							if($result= mysqli_fetch_array($sqlreact)) 
							{
								$thumbUp = $result['thumbUp'];
								$thumbDown = $result['thumbDown'];
								
						
									
								if($thumbUp == 1)
								{
									?>
									
												<button class="btn" type="submit" name="thumbup" value = "<?php echo $data;?>" style="color:green"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											
										
												<button class="btn" type="submit" name="thumbdown" value = "<?php echo $data;?>" style="color:grey"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
								<?php			
								}
								else
								if ($thumbDown == 1)
								{
									

											?>
												<button class="btn" type="submit" name="thumbup" value = "<?php echo $data;?>"  style="color:grey"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											
												<button class="btn" type="submit" name="thumbdown"  value = "<?php echo $data;?>"  style="color:red"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
											<?php
											
								}
							}
							else
							{
									

											?>
												<button class="btn" type="submit" name="thumbup" value = "<?php echo $data;?>"  style="color:grey"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											
											
												<button class="btn" type="submit" name="thumbdown"  value = "<?php echo $data;?>"  style="color:grey"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
											<?php
											
							}
							
							?>
							
							</form>
							
							
								
						</div>
						<div class="card-body">
						<?php
							$comment = mysqli_query($conn,"SELECT * FROM comment JOIN managedata ON comment.commentID = managedata.commentID JOIN idea ON managedata.ideaID = idea.ideaID WHERE `idea`.`ideaID` ='$ideaID' AND  `managedata`.`reactID` IS NULL ORDER BY `comment`.`commentID` DESC");
							if (mysqli_num_rows($comment) > 0)
								{
									while($rows = mysqli_fetch_array($comment))
									{
										$comID = $rows['commentID'];
										$comDate = $rows['commentDate'];
										$comTime = $rows['commentTime'];
										$comText = $rows['commentText'];
										$comAnonymous = $rows['commentAnonymous'];
										
											
										if (!empty($comAnonymous))
										{			echo " <h6><b>$comAnonymous</b> at $comDate $comTime </h6>
										<p>$comText</p><hr>";
									}
									else
									{
													$commentSTAFF = mysqli_query($conn,"SELECT * FROM staff JOIN managedata ON staff.staffID = managedata.staffID JOIN comment ON managedata.commentID  = comment.commentID JOIN idea ON managedata.ideaID = idea.ideaID WHERE `comment`.`commentID` ='$comID' AND `managedata`.`reactID` IS NULL");
								while($rows2 = mysqli_fetch_array($commentSTAFF))
										{
											$comName = $rows2['fName'];
											echo " <h6><b>$comName</b> at $comDate $comTime </h6>
											<p>$comText</p><hr>";
										}
									}
								}
							}
							else
							{
								echo "<label>Be the first to comment</label>";
							}
						?> 
						</div>
						<div class="card-footer">
							<form method = "POST" id = "Comment">		
								<div class="form-group">
									<textarea name = "message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
									<input type="hidden" name = "ideaID" value = "<?php echo $ideaID ;?>"/>
									<br>
									<div style="float:left">
										<input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="anonymous" value="anonymous">
										<label class="form-check-label" for="inlineCheckbox1">Post as anonymous</label><br><br><br><br>
									</div>
									
							
							
							</form>
						</div>
					<?php
					}
					else
					{
						$query2 = mysqli_query($conn,"SELECT * FROM staff JOIN managedata ON staff.staffID = managedata.staffID JOIN idea ON managedata.ideaID = idea.ideaID WHERE `idea`.`ideaID` ='$ideaID'  AND  `managedata`.`reactID` IS NULL AND  `managedata`.`commentID` IS NULL");
									
						while($rows = mysqli_fetch_array($query2))
						{
							$date = $rows['postDate'];
							$time = $rows['postTime'];
							$title = $rows['ideaTitle'];
							$message = $rows['ideaText'];
							$name = ucfirst($rows['fName']);
							$anonymous = $rows['anonymous'];
							$id = $_SESSION['staffID'];
					?>
							<div class="card-header">
							<form method = "POST">
								<h5>Author : <b><?php echo $name;?></b> at <?php echo $date;?> <?php echo $time;?></h5>
								<h3><?php echo $title ?></h3><p><?php echo $message;?></p>
								<br>
							<?php   
								if($supportDoc !='document/')
								{
							?>
									<p>Support Document: <a href='DiscussionPage.php?dow=$supportDoc'>Click to Download</a></p>
									<br>
							<?php
							}
							?>
						
							<?php
							$sqllike = "SELECT thumbUp FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' && thumbUp = '1' ";
							if ($result= mysqli_query($conn,$sqllike)) 
							{
								$rowcountlike = mysqli_num_rows($result);
							}
											
							$sqlunlike = "SELECT thumbDown FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' && thumbDown = '1'";
							if ($result= mysqli_query($conn,$sqlunlike)) 
							{
								$rowcountunlike = mysqli_num_rows($result);
							}
											
							$sqlreact =  mysqli_query($conn,"SELECT * FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' AND staffID = '$staffID'");
							if($result= mysqli_fetch_array($sqlreact)) 
							{
								$thumbUp = $result['thumbUp'];
								$thumbDown = $result['thumbDown'];
								
								if($thumbUp == 1)
								{
									?>
									
												<button class="btn" type="submit" name="thumbup" value = "<?php echo $data;?>" style="color:green"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											
										
												<button class="btn" type="submit" name="thumbdown" value = "<?php echo $data;?>" style="color:grey"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
								<?php			
								}
								else
								if ($thumbDown == 1)
								{
									

											?>
												<button class="btn" type="submit" name="thumbup" value = "<?php echo $data;?>"  style="color:grey"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											
												<button class="btn" type="submit" name="thumbdown"  value = "<?php echo $data;?>"  style="color:red"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
											<?php
											
								}
							}
							else
							{
									

											?>
												<button class="btn" type="submit" name="thumbup" value = "<?php echo $data;?>"  style="color:grey"><i class="fa fa-thumbs-up fa-lg" ><?php echo $rowcountlike ?></i></button>
											
											
												<button class="btn" type="submit" name="thumbdown"  value = "<?php echo $data;?>"  style="color:grey"><i class="fa fa-thumbs-down fa-lg" ><?php echo $rowcountunlike ?></i></button>
											<?php
											
							}
							
							?>
							</form>
							</div>
							<div class="card-body">
							<?php
								$comment = mysqli_query($conn,"SELECT * FROM comment JOIN managedata ON comment.commentID = managedata.commentID JOIN idea ON managedata.ideaID = idea.ideaID WHERE `idea`.`ideaID` ='$ideaID' AND `managedata`.`reactID` IS NULL ORDER BY `comment`.`commentID` DESC");
								if (mysqli_num_rows($comment) > 0)
								{
									while($rows = mysqli_fetch_array($comment))
									{
										$comID = $rows['commentID'];
										$comDate = $rows['commentDate'];
										$comTime = $rows['commentTime'];
										$comText = $rows['commentText'];
										$comAnonymous = $rows['commentAnonymous'];
										
											
										if (!empty($comAnonymous))
										{
											echo " <h6><b>$comAnonymous</b> at $comDate $comTime </h6>
											<p>$comText</p><hr>";
										}
										else
										{
											$commentSTAFF = mysqli_query($conn,"SELECT * FROM staff JOIN managedata ON staff.staffID = managedata.staffID JOIN comment ON managedata.commentID  = comment.commentID JOIN idea ON managedata.ideaID = idea.ideaID WHERE `comment`.`commentID` ='$comID' AND `managedata`.`reactID` IS NULL");
								while($rows2 = mysqli_fetch_array($commentSTAFF))
											{
												$comName = $rows2['fName'];
												echo " <h6><b>$comName</b> at $comDate $comTime </h6>
												<p>$comText</p><hr>";
											}
										}
									}
								}
								else
								{
									echo "<label>Be the first to comment</label>";
								}
							?> 
							</div>
							<div class="card-footer">
								<form method = "POST" id = "Comment">		
									<div class="form-group">
										<textarea name = "message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
										<input type="hidden" name = "ideaID" value = "<?php echo $ideaID ;?>"/>
										<br>
										<div style="float:left">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="anonymous" value="anonymous">
											<label class="form-check-label" for="inlineCheckbox1">Post as anonymous</label>
										</div>
										<br><br>
										<button type = "submit" name ="comment" class="btn btn-primary">Submit</button></br></br>
									</div>
								</form>
							</div>	
						<?php
						}
					}
				}
				?>
			</div>	
		</div>		
		</div>
		</form>
	


  
	<?php 
		}

		if (isset($_POST['thumbup']))
	{
        $ideaID = $_POST['thumbup'];
		$staffID = $_SESSION['staffID'];
		
		$sqlreact =  mysqli_query($conn,"SELECT * FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' AND staffID = '$staffID'");
		if($result= mysqli_fetch_array($sqlreact)) 
		{
			$likesID = $result['reactID'];
			$thumbUp = $result['thumbUp'];
			$thumbDown = $result['thumbDown'];
								
			if ($thumbDown == 1)
			{
			  $sql =  mysqli_query($conn,"UPDATE react SET thumbUp = '1' , thumbDown = '0' WHERE reactID = '$likesID ' ");
			  
			  if($sql){
			    echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$ideaID'>";
			  }
			  else
			  {
				  die("Could not update".mysql_error());
			  }
			}
			else if ($thumbUp == 1)
			{
				$sql =  "DELETE managedata,react FROM managedata JOIN react ON react.reactID = managedata.reactID WHERE managedata.ideaID = '$ideaID' AND managedata.staffID = '$staffID'";
				mysqli_query($conn,$sql);
				 echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$ideaID'>";
			}
		}
		else
		{
				
			$sql = "INSERT INTO `react`(`thumbUp`,`thumbDown`) VALUES ('1','0')";
			
			if (mysqli_query($conn, $sql)) 
			{
				$last_id = mysqli_insert_id($conn);
				
				$query = "INSERT INTO `managedata`(`staffID`,`ideaID`,`reactID`) VALUES ('$staffID','$ideaID','$last_id')";
				mysqli_query($conn,$query);
				echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$ideaID'>";
			}
			else
			{
				 die("Could not update".mysql_error());
			}
							
		}
	}
			  
	if (isset($_POST['thumbdown']))
	{
        $ideaID = $_POST['thumbdown'];
		$staffID = $_SESSION['staffID'];
		$sqlreact =  mysqli_query($conn,"SELECT * FROM react JOIN managedata ON react.reactID = managedata.reactID WHERE ideaID = '$ideaID' AND staffID = '$staffID'");
		if($result= mysqli_fetch_array($sqlreact)) 
		{
			$likesID = $result['reactID'];
			$thumbUp = $result['thumbUp'];
			$thumbDown = $result['thumbDown'];
								
			if ($thumbUp == 1)
			{
			  $sql =  mysqli_query($conn,"UPDATE react SET thumbUp = '0' , thumbDown = '1' WHERE reactID = '$likesID ' ");
			  
			  if($sql){
			    echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$ideaID'>";
			  }
			  else
			  {
				  die("Could not update".mysql_error());
			  }
			}
			else if ($thumbDown == 1)
			{
				$sql =  "DELETE managedata,react FROM managedata JOIN react ON react.reactID = managedata.reactID WHERE managedata.ideaID = '$ideaID' AND managedata.staffID = '$staffID'";
				mysqli_query($conn,$sql);
				 echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$ideaID'>";
			}
			
		}else
			{
				
			$sql = "INSERT INTO `react`(`thumbUp`,`thumbDown`) VALUES ('0','1')";
			
			if (mysqli_query($conn, $sql)) 
			{
				$last_id = mysqli_insert_id($conn);
				
				$query = "INSERT INTO `managedata`(`staffID`,`ideaID`,`reactID`) VALUES ('$staffID','$ideaID','$last_id')";
				mysqli_query($conn,$query);
				echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$ideaID'>";
			}
			else
			{
				 die("Could not update".mysql_error());
			}
					
							
			}
	}	
	if(isset($_POST['comment']))
		{	
			$id = $_SESSION['staffID'];
			date_default_timezone_set("Asia/Kuala_Lumpur");
			$date = date('Y-m-d');
			$time = date('H:i:s');
			$message = $_POST['message'];
			$idea = $_POST['ideaID'];
								
			if ($message == NULL)
			{
				echo "<script type='text/javascript'>alert('CommentBox is empty!');</script>";	
			}
			else
			{
				if (!empty($_POST['anonymous']))
				{
					$sql = "INSERT INTO `comment`(`commentText`, `commentDate`, `commentTime`, `commentAnonymous`) VALUES ('$message','$date','$time','Anonymous')";
					
					if (mysqli_query($conn, $sql)) 
					{
						$last_id = mysqli_insert_id($conn);
						
						$query = "INSERT INTO `managedata`(`ideaID`,`commentID`) VALUES ('$ideaID','$last_id')";
						mysqli_query($conn,$query);
								
						$staff = mysqli_query($conn,"SELECT * FROM idea JOIN managedata ON idea.ideaID = managedata.ideaID JOIN staff ON managedata.staffID = staff.staffID WHERE idea.ideaID = '$idea'");  
					
						
						if (mysqli_num_rows($staff) != 0)
						{	
							$row = mysqli_fetch_array($staff);
							$email2 = $row['email'];
								
							$to = $email2;
							$from = "BLACKBOARD SYSTEM";//optional
							$fromName = "NO REPLY MESSAGE";
							$subject = "SOMEONE COMMENT ON YOUR IDEA!";

							$htmlContent ='
								<html> 
									<head></head> 
									<body>    
										<p> Someone had comment on your idea just now! </p>
									</body> 
								</html>';
								
								//set content - type heeader for sending html email
								$header="MIME-Version:1.0"."\r\n";
								$header.="Content-type:text/html;charset=UTF-8"."\r\n";

								//add in additional headers
								$header .= "Cc: y.yileng2000@gmail.com"."\r\n";

							if(mail($to,$subject,$htmlContent,$header))
							{
								echo "<script>alert('SUCCESS!');</script>";
								echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$idea'>";
							}
							else
							{
								echo "<script>alert('Email sending failed!');</script>";
							}
						}
						else
						{
							echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$idea'>";
						}
					} 
					else 
					{
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}
				else
				{
					$sql = "INSERT INTO `comment`(`commentText`, `commentDate`, `commentTime`) VALUES ('$message','$date','$time')";
				
					if (mysqli_query($conn, $sql)) 
					{
						$last_id = mysqli_insert_id($conn);
						
						$query = "INSERT INTO `managedata`(`staffID`,`ideaID`,`commentID`) VALUES ('$staffID','$ideaID','$last_id')";
						mysqli_query($conn,$query);
								
								
						$staff = mysqli_query($conn,"SELECT * FROM idea JOIN managedata ON idea.ideaID = managedata.ideaID JOIN staff ON managedata.staffID = staff.staffID WHERE idea.ideaID = '$idea'");  
						
						
						if (mysqli_num_rows($staff) != 0)
						{	
							$row = mysqli_fetch_array($staff);
							$email = $row['email'];
								
							$to = $email;
							$from = "Idea Collector";//optional
							$fromName = "NO REPLY MESSAGE";
							$subject = "SOMEONE COMMENT ON YOUR IDEA!";

							$htmlContent ='
								<html> 
									<head></head> 
									<body>    
										<p> Someone had comment on your idea just now! </p>
									</body> 
								</html>';
								
								//set content - type heeader for sending html email
								$header="MIME-Version:1.0"."\r\n";
								$header.="Content-type:text/html;charset=UTF-8"."\r\n";

								//add in additional headers
								$header .= "Cc: y.yileng2000@gmail.com"."\r\n";

							if(mail($to,$subject,$htmlContent,$header))
							{
								echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$idea'>";
							}
							else
							{
								echo "<script>alert('Email sending failed!');</script>";
							}
						}
						else
						{
							echo "<meta http-equiv='refresh' content='0;url=comment.php?data=$idea'>";
						}
					} 
					else 
					{
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}
			}
		}		
				
	?>

	</body>
</html>