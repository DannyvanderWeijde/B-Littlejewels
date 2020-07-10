<?php

/**
 * Version: 2.0
 * Date: 9/5/2020
 * Author: Danny van der Weijde
 * notes:
 */

?>
<body itemscope="" itemtype="http://schema.org/Store">
	<?php
		include "pages/index/navbar.php";
		//directory
		$path = "pages";
		//Searches for files in directory. 
		$pages = scandir($path);
		$included = false;
		//looks if the path exists and shows it else it shows an error page.
		if($page){
			foreach($pages as $dirPage){
				if($dirPage == $page){
					include "pages/". $page . "/" . $page . ".php";
					$included = true;
				}
			}
			if(!$included){
				include "pages/error/error.php";
			}
		}
	?>
</body>