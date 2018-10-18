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

print "<h1>About Us</h1>\n";

print "<section>\n";
print "<h2>Background Information</h2>\n";
print "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
		  dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
		  officia deserunt mollit anim id est laborum</p>\n";
print "</section>\n";

print "</div>\n";
print $page->getBottomSection();

