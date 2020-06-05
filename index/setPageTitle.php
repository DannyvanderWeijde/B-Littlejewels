<?php

	/**
	 * Version: 1.0
	 * Date: 29/5/2020
	 * Author: Danny van der Weijde
	 * notes:
	 */

	$title = getTitle($page);
	
	/**
	* Gets the correct title for the page.
	*/
	function getTitle($page){
		if($page == "home" || $page == null){
			return "Test - Home";
		}else if($page == "about"){
			return "Test - About";
		}else{
			return "Error 404";
		}
	}

?>