<?php

class Template{
    
    private $template_page_name = "one-direction";

    function Add_Html_Menu(){

    }
    
    function Add_Html_Footer(){

    }

    public function Set_Template($name_template = "one-direction"){
        
        switch ($name_template){
            case 'one-direction':
                $this->template_page_name = "one-direction";
                break;
            case 'two-column-20-80':
                $this->template_page_name = "two-column-20-80";
                break;
            case 'two-column-80-20':
                $this->template_page_name = "two-column-80-20";
                break;
            case 'two-column-70-30':
                $this->template_page_name = "two-column-70-30";
                break;
            case 'two-column-30-70':
                $this->template_page_name = "two-column-30-70";
                break;
            case 'two-column-60-40':
                $this->template_page_name = "two-column-60-40";
                break;
            case 'two-column-40-60':
                $this->template_page_name = "two-column-40-60";
                break;
            default:
                $this->template_page_name = "one-direction";
        }    

    }
    
    public function Get_Template(){
        
        return $this->template_page_name;

    }

    function Add_HTML_Componente($title, $style = []){

    }

}

?>