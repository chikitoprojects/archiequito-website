<?php 
	
function current_page($page_name){
	switch(strtolower($page_name)){
		case "about":
			include_once(CONTENTPATH.'amq-page-content/about.php');
		break;
		case "portfolio":
			include_once(CONTENTPATH.'amq-page-content/portfolio.php');
		break;
		case "contact":
			include_once(CONTENTPATH.'amq-page-content/contact.php');
		break;
		case "":
			include_once(CONTENTPATH.'amq-page-content/home.php');
		break;
		default:
			include_once(CONTENTPATH.'amq-page-content/error.php');
	}
}

function widget($widget_name){
		switch(strtolower($widget_name)){
		case "contact-form":
			include_once(CONTENTPATH.'amq-widgets/contact-form.php');
			break;
		}
}
	
?>