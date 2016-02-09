<header>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigationbar">
	               <span class="sr-only">Toggle navigation</span>
	               <span class="icon-bar"></span>
	               <span class="icon-bar"></span>
	               <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="./index.html">Tony Zhang</a>
	        </div>

	        <!--Possible tabs-->
	        <div class="collapse navbar-collapse" id="navigationbar">
	        	<ul class="nav navbar-nav navbar-right">
	        		<li id="index" class="
						<?php if($currentPage == "index") echo "active"; ?>">
						<a href="./index.php">Home</a>
					</li>
	        		<li id="data-structures" class="
						<?php if($currentPage == "data-structures") echo "active"; ?>">
	        			<a href="./data_structures.php">Data Structures</a>
	        		</li>
	        		<li id="thanks"  class="
						<?php if($currentPage == "thanks") echo "active"; ?>">
	        			<a href="./thanks.php">Thanks</a>
	        		</li>
	        	</ul>
	        </div>
	    </div>
	</nav>
</header>