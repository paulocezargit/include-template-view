<?php

class Page{

	function Add_Head_Tag($tag, $attribute = []){
        
	}

	function List_Head_Tag(){
	
	}

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


}

?>