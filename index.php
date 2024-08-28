<?php 

include("include-template-view.php");
$template = new Template();

$option_header = [
	"lang" => "pt-br",
	"title" => "My Site",
	"charset" => "utf-8"
];

$template->Header($option_header);

$template->Footer();

?>