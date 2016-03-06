<header class="header">
	<div class="header-title">
		<h1>
			<a href="./index.php">Tony Zhang</a>
		</h1>
	</div>
	<div class="header-nav">
		<ul class="header-tabs">
			<li id="index" class="
				<?php if($currentPage == "experiences") echo "active"; ?>">
				<a href="./experiences.php">Experiences</a>
			</li>
			<li id="data-structures" class="
				<?php if($currentPage == "projects") echo "active"; ?>">
				<a href="./projects.php">Projects</a>
			</li>
			<li id="thanks"  class="
				<?php if($currentPage == "notes") echo "active"; ?>">
				<a href="./notes.php">Notes</a>
			</li>
		</ul>
	</div>
</header>