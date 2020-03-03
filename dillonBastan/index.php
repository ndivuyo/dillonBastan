<?php
/*
Dillon Bastan 2019.
This is the index PHP document that manages 
indexing of all pages for dillonBastan
*/


//Has the function for validating input
include 'php/inputFilter.php';


//Determine what page browser is on
$pageName = "home";
if (isset($_GET['pageName'])) {
	$pageName = input_filter($_GET['pageName']);
}


//Render the Header and global Head inclusions.
echo file_get_contents("html/header.html");


//Render the main body of the selected page, if the file exists
$current_page = "html/" . $pageName . ".html";
if (file_exists($current_page))
	echo file_get_contents($current_page);
else
	echo file_get_contents("html/missing.html");


//Render the footer
echo file_get_contents("html/footer.html");

?>