<?php 

include("include-template-view.php");
$page = new Page();
$template = new Template();

$option_header = [
	"lang" => "pt-br",
	"title" => "My Site",
	"charset" => "utf-8"
];

$page->Header($option_header);
$template->Set_Template("two-column-20-80");

$page->Footer();

?>