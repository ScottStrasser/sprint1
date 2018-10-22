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
print "<div class='search_form'>\n";
		
print "<form id='submit' name='search' action='bookSearchResults.php' method='POST'>\n";
print "<fieldset class='info'>\n";
print "<legend>Search via Book Title, Author, or ISBN</legend>\n";
print "<input type='text' name='search_input'><br />\n";
print "<label>Phone Number </label><input type='text' name='number'><br />\n";
print "<div class='button'>\n";
print "<input type='submit' class='submit'>\n";
print "</div>\n";
print "</fieldset>\n";
print "</form>\n";
	
print "</div>\n";
	
print "</div>\n";
print $page->getBottomSection();
