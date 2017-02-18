<?php session_start();?>

<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<script>
    function validateForm()
    {
    var a=document.forms["Form"]["nm"].value;
    var b=document.forms["Form"]["email"].value;
    var c=document.forms["Form"]["query"].value;
    
    if (a==null || a=="",b==null || b=="",c==null || c=="")
      {
      alert("Please Fill All Required Field");
      return false;
      }
	  
    }
    </script>
</head>


<body>
			<!-- start header -->
					<div id="header">
						<div id="menu">
							<?php
								include("includes/menu.inc.php");
							?>
						</div>
					</div>
					
					<div id="logo-wrap">
						<div id="logo">
								<?php
									include("includes/logo.inc.php");
								?>
						</div>
					</div>
			<!-- end header -->
			
			<!-- start page -->

					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Contact us</h1>
									
									<div class="entry" >
									    <?php
											if(isset($_GET['error']))
											{   
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
												echo "<script type=\"text/javascript\">alert('Fill all the field first');</script>";
											}
											
											if(isset($_GET['ok']))
											{   echo "<script type=\"text/javascript\">alert('your message sent successfully');</script>"; 
												echo '<font color="blue">You message send successfully ..</font>';
												echo '<br><br>';
											}
										
										?>
										<form name="Form" action="process_contact.php" method="POST">
												

											<br>Name :<br>
												<input type='text' name='nm' size=35>
												<br><br><br>
												
												E-mail ID:<br>
												<input type='text' name='email' size=35>
												<br><br><br>
												
												Query:<br>
												<textarea cols="40" rows="10" name='query' ></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   Submit   '  >

												
										</form>
									
									</div>
									
								</div>
								
							</div>
						<!-- end content -->
						
						<!-- start sidebar -->
						<div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
						</div>
						<!-- end sidebar -->
						
						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
