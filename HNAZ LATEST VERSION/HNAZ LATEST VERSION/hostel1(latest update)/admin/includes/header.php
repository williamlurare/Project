
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<a href="Home.html" class="logo" style="font-size:14px; font-family: Comic sans ms; 
	         border: 0 none transparent; 
	         color: #fff;"><img src="anulogo.png" style="width: 37px; height: 37px; border-radius: 50%;"> NAZ</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/whythou.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="Home.html" class="logo" style="font-size:14px; font-family: Comic sans ms; 
	         border: 0 none transparent; 
	         color: #fff;"><img src="anulogo.png" style="width: 35px; height: 35px; border-radius: 50%;  "> </a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>