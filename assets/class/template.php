<?php

class Template{
    
    /*
        @param string $title set description tag title
        @param string $lang set localization page 
        @param string $charset set charset page 
    */
	function Header($options = []){ 

		$title = $options['title'] ?? "My Template";
		$lang = $options['lang'] ?? "en";
		$charset = $options['charset'] ?? "utf-8";
        
        require_once("src/view/header.php");

	}

	function Footer(){
        
        require_once("src/view/footer.php");

	}

	function Add_Html_Menu(){

	}
    
    function Add_Html_Footer(){

    }

    function set_template(){

    }

}

?>