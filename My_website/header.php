<header>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
	            <a class="navbar-brand" href="./index.php">Tony Zhang</a>
	        </div>

	        <!--Possible tabs-->
	        <div class="" id="navigationbar">
	        	<ul class="nav navbar-nav navbar-right">
	        		<li id="index" class="header-tab
						<?php if($currentPage == "index") echo "active"; ?>">
						<a href="./index.php">Home</a>
					</li>
	        		<li id="data-structures" class="header-tab
						<?php if($currentPage == "data-structures") echo "active"; ?>">
	        			<a href="./data_structures.php">Data Structures</a>
	        		</li>
	        		<li id="thanks"  class="header-tab
						<?php if($currentPage == "thanks") echo "active"; ?>">
	        			<a href="./thanks.php">Thanks</a>
	        		</li>
	        	</ul>
	        </div>
	    </div>
	</nav>
</header>