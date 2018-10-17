<?php

require_once("Template.php");

$page = new Template("Enter Number");
$page->setHeadSection("<link rel='stylesheet' href='style.css'>");
$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
if(isset($_POST['number']) && isset($_POST['email']) && isset($_POST['url'])){
$number = $_POST['number'];
$email = $_POST['email'];
$url = $_POST['url'];
} else{
	print 'Please enter all required fields';
}

$sanNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
$sanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanUrl = filter_var($url, FILTER_SANITIZE_URL);

	
	//Validate Number
	if(!is_numeric($number) || !filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($url, FILTER_VALIDATE_URL)) {
		Print('Input not valid');
	} else {
		print "<h1>Information</h1>\n";
		print "<label>Number</label>\n";
		print $sanNumber;
		print "<br><label>Email</label>\n";
		print $sanEmail;
		print "<br><label>URL</label>\n";
		print $sanUrl;
	}
	



print $page->getBottomSection();

?>