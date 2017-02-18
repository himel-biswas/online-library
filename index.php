<?php session_start();?>
<?php 

	
	$link=mysql_connect("localhost","root","")or die("Can't Connect...");
	
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	
		
	
	$query="select *from book ORDER BY b_id DESC LIMIT 8";
	
	$res=mysql_query($query,$link) or die("Can't Execute Query..");
	$row=mysql_fetch_assoc($res);

	
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from book";
	
	$totalres=mysql_query($totalq,$link) or die("Can't Execute Query...");
	$totalrow=mysql_fetch_assoc($totalres);
	
	
	$page_per_page=6;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
	
	
	

?>
<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
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
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Shop';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								<p>
								The OnLineBookstore is a venture of ABC Company. <a href="developer.php"><font color="purple">Himel & Sabbir</font></a> founded
								ABC Company.
								</p>
							
							<div id="content">
								<div class="post">
									<h1 class="title">Latest Books</h1>
									<div class="entry">
										
										<table border="10" width="100%" >
											
											<?php
												
												$k=($page_current_page-1)*$page_per_page;
											
												$query="select *from book ORDER BY b_id DESC LIMIT 8";
	
												$res=mysql_query($query,$link) or die("Can't Execute Query...");
	
												$count=0;
												while($row=mysql_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
										
										
										<br><br><br>
										
									</div>
									
								</div>
								
							</div>
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
