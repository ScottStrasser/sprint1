<?php

require_once("Template.php");

$page = new Template("About Page");
$page->setHeadSection("<link rel='stylesheet' href='style.css'>");
$page->setTopSection();
$page->setBottomSection();

print $page->getTopSection();
print "<div class='content'>\n";

print "<div class='navigation'>\n";
print "<ul>\n";
print "<li><a href='home.php'>Home</a></li>\n";
print "<li><a href='contact.php'>Contact Us</a></li>\n";
print "<li><a href='about.php'>About Us</a></li>\n";
print "<li><a href='search.php'>Search</a></li>\n";
print "</ul>\n";
print "</div>\n";

if(isset($_POST['number']) && isset($_POST['email']) && isset($_POST['comments'])){
$number = $_POST['number'];
$email = $_POST['email'];
$url = $_POST['comments'];
} else{
	print 'Please enter all required fields';
}

$sanNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
$sanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

//
$db = new DB();
if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}
else {
		$query = "INSERT INTO Contact () 
		VALUES (
		0,
		now(),
		'{$sanNumber}', 
		'{$sanEmail}',
		'{$sanComments}'
		)";
		
		$db->dbCall($query);

		if(!is_numeric($number) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			print "<h1>Input Not Valid</h1>\n";
			print "<div class='returnButton'>\n";
			print "<a href='contact.php'>Return to Contact Form</a>\n";
			print "</div>\n";
		} else {
			print "<div class='thankyou'>\n";
			print "<h2>Thank you for contacting us, we will message you shortly</h2>\n";
			print "</div>\n";

			print "</div>\n";
		}
	}
print $page->getBottomSection();

