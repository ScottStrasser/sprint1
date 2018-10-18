<?php

require_once("Template.php");

$page = new Template("Contact Us");
$page->setHeadSection("<link rel='stylesheet' href='style.css'>");
$page->setHeadSection("<script src='validate.js'></script>");
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

print "<h1>Commments or Concerns? Send us a message!</h1>\n";
print "<div class='contactform'>\n";
		
print "<form id='submit' name='contact' action='thank.php' onsubmit='return validateForm()' method='POST'>\n";
print "<fieldset class='info'>\n";
print "<legend>Please Fill Out the Below Fields</legend>\n";
print "<label>E-mail Address </label><input type='text' name='email'><br />\n";
print "<label>Phone Number </label><input type='text' name='number'><br />\n";
print "<p>Please Enter Your Message Below</p>\n";
print "<textarea name='comments' rows='5' cols='50'></textarea><br>\n";
print "<div class='button'>\n";
print "<input type='submit' class='submit'>\n";
print "</div>\n";
print "</fieldset>\n";
print "</form>\n";
	
print "</div>\n";
	
print "</div>\n";
print $page->getBottomSection();

