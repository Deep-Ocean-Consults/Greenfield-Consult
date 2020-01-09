	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.php">
							<img src="images/Greenfield-logo1.png" alt="Green Field Logo">
						</a>	
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 <?php if($page=='Home'){echo 'active';}?>">
									<a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 <?php if($page=='What we do'){echo 'active';}?>">
									<a class="nav-link" href="what-we-do.php">Services</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="course.php">our courses</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link <?php if($page=='contact'){echo 'active';}?>" href="contact.php">Contact us</a>
								</li>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
    <script  src="js/header.js"></script>
</body>
</html>