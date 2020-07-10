<?php 
	/**
	 * Version: 2.0
	 * Date: 29/5/2020
	 * Author: Danny van der Weijde
	 * notes:
	 */
	

	include "index/getPageTypes.php";
	include "index/setPageTitle.php";
	include "index/database.php";

	if($page == null){
		$page = "home";
	}

	if($lowerPage == "combi-css"){
		include "assets/css/combi-css.php";
	}elseif($lowerPage == "combi-ie-css"){
		include "assets/css/combi-ie-css.php";
	}else{
		include "pages/index/header.php";
		include "pages/index/body.php";
		include "pages/index/footer.php";
	}
?>