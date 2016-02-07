<header>
	<div id="header">
		<nav class="navbar navbar-inverse">
			<div class="containder-fluid">
				<div class="navbar-header">
					<!-- # will be where our site will be-->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigationbar">
		               <span class="sr-only">Toggle navigation</span>
		               <span class="icon-bar"></span>
		               <span class="icon-bar"></span>
		               <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="./index.php">Alarm Shame</a>
				</div>
				<!-- The currentPage variable is defined in the specific including this header-->
				<!-- This will determine which nav button will have the 'active' class-->
				<div class="collapse navbar-collapse" id="navigationbar">
					<ul class="nav navbar-nav navbar-right">
						<li id="index" class="
							<?php if($currentPage == "index") echo "active"; ?>">
							<a href="./index.php">Home</a>
						</li>
						<li id="shame" class="
							<?php if($currentPage == "shame") echo "active"; ?>">
							<a href="./shame.php">Shames</a>
						</li>
						<li id="about" style="padding-right:20px;" class="
							<?php if($currentPage == "about") echo "active"; ?>">
							<a href="./about.php">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<script type="text/javascript">
	$(document).ready(function(){
		var url = window.location;
		

	});
</script>